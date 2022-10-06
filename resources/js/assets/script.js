var countRecaptcha = 0;
var activeExpiredUrl = null;

/*
 * countDownAfterRecaptcha Methods
 */
function countDownAfterRecaptcha(callback) {
    let recaptchaCountdown = document.getElementById('recaptcha-countdown');
    if (recaptchaCountdown) {
        let progressElm = document.getElementsByClassName('progress')[0];
        let circumference = 2 * Math.PI * progressElm.getAttribute('r');

        progressElm.style.strokeDasharray = circumference;
        progressElm.style.strokeDashoffset = 0;

        let max = 20;
        let seconds = max;

        let secondsElm = document.getElementsByClassName('seconds')[0];

        let timerId = setInterval(() => {
            seconds--;
            if(seconds <= 0) {
                callback();
                document.getElementsByClassName('seconds')[0].textContent = 20;
                clearInterval(timerId);
            }
            percentage = seconds/max * 100;
            progressElm.style.strokeDashoffset = circumference - (percentage/100) * circumference;

            secondsElm.textContent = seconds.toString().padStart(2, '0');
        }, 1000);
    }
}

function handleRecaptchaFormCountDown (isFormHide) {
    let recaptchaForm = document.getElementById('recaptcha-form');
    let recaptchaCountdown = document.getElementById('recaptcha-countdown');
    if (isFormHide) {
        recaptchaForm.classList.add('d-none');
        recaptchaCountdown.classList.remove('d-none');
    } else {
        recaptchaCountdown.classList.add('d-none');
        recaptchaForm.classList.remove('d-none');
    }
}

async function submitRecaptchaForm(event) {
    event.preventDefault();
    let csrf = document.querySelector("[name='csrf-token']");
    // find the prev recaptcha
    let recaptchaPrevElement = document.getElementById('googleRecaptcha-' + countRecaptcha);
    let gRecaptchaInput = recaptchaPrevElement.querySelector('#g-recaptcha-response');
    if (countRecaptcha > 0) {
        gRecaptchaInput = recaptchaPrevElement.querySelector(`#g-recaptcha-response-${countRecaptcha}`);
    }
    let alert = document.getElementById('recaptchaError');
    if (gRecaptchaInput.value) {
        const form = { _token: csrf.getAttribute('content'), gRecaptcha: gRecaptchaInput.value };
        let response = await fetch('/recaptcha', {method: 'POST',
            headers: {'Content-Type': 'application/json',}, body: JSON.stringify(form)}
        );
        if (response.status === 201) {
            if (!alert.classList.contains('d-none')) alert.classList.add('d-none');
            // Show Countdown UI
            handleRecaptchaFormCountDown(true);
            // Countdown start and close
            countDownAfterRecaptcha(() => {
                // Hide Countdown UI
                handleRecaptchaFormCountDown(false);
                if (recaptchaPrevElement && !recaptchaPrevElement.classList.contains('d-none')) {
                    recaptchaPrevElement.classList.add('d-none');
                }
                countRecaptcha++;
                // find the new recaptcha
                let recaptchaNewElement = document.getElementById('googleRecaptcha-' + countRecaptcha);
                if (recaptchaNewElement && recaptchaNewElement.classList.contains('d-none')) {
                    recaptchaNewElement.classList.remove('d-none');
                }
                if (countRecaptcha === 3) {
                    showHideModal();
                    let storageRecaptcha = JSON.parse(localStorage.getItem('isRecaptcha'));
                    let data = {
                        status: true,
                        url: window.location.pathname,
                        expireAt: new Date().getTime() + (1000 * 60 * 60 * 24) // 24 hours
                    };
                    if (storageRecaptcha) {
                        if (activeExpiredUrl !== null) {
                            // remove expired item
                            storageRecaptcha = storageRecaptcha.filter((item) => item.url !== activeExpiredUrl);
                        }
                        // push new item
                        storageRecaptcha.push(data);
                        localStorage.setItem('isRecaptcha', JSON.stringify(storageRecaptcha));
                    } else {
                        localStorage.setItem('isRecaptcha', JSON.stringify([data]));
                    }
                    // Handle Ads CLick
                    autoClickTrack();
                }
            });
        } else {
            if (alert.classList.contains('d-none')) alert.classList.remove('d-none');
        }
    } else {
        if (alert.classList.contains('d-none')) alert.classList.remove('d-none');
    }
}

function showHideModal() {
    let modal = document.getElementById('recaptcha-modal');
    if (modal.classList.contains('show')) {
        modal.classList.remove('show');
        modal.style.display = 'none';
    } else {
        modal.classList.add('show');
        modal.style.display = 'block';
    }
}

function popupShowVisitorBased () {
    let getParsed = JSON.parse(localStorage.getItem('isRecaptcha'));
    if (!getParsed) {
        showHideModal();
        activeExpiredUrl = null;
    } else {
        let currentTime = new Date().getTime();
        let currentPath = window.location.pathname;
        let findUrl = getParsed.find((item) => item.url === currentPath);
        if (findUrl) {
            if (findUrl.expireAt < currentTime) {
                showHideModal();
                activeExpiredUrl = findUrl.url;
            } else {
                autoClickTrack();
                activeExpiredUrl = null;
            }
        } else {
            showHideModal();
            activeExpiredUrl = null;
        }
    }
}

/*
 * Auto Click Ads And Track The User
 */
function autoClickTrack () {
    // set local storage
    let storageAds = JSON.parse(localStorage.getItem('isAdsClick'));
    let data = {
        status: true,
        url: window.location.pathname,
        expireAt: new Date().getTime() + (1000 * 60 * 60 * 24) // 24 hours
    };
    if (storageAds) {
        // find the item
        let currentPath = window.location.pathname;
        let currentTime = new Date().getTime();
        let findAdsUrl = storageAds.find((item) => item.url === currentPath);
        if (findAdsUrl && findAdsUrl.expireAt < currentTime) {
            storageAds = storageAds.filter((item) => item.url !== findAdsUrl.url);
            let isClickAds = clickAds();
            if (isClickAds) {
                // push new item
                storageAds.push(data);
                localStorage.setItem('isAdsClick', JSON.stringify(storageAds));
            }
        }
    } else {
        let isClickAds = clickAds();
        if (isClickAds) {
            localStorage.setItem('isAdsClick', JSON.stringify([data]));
        }
    }
}

function clickAds() {
    let getAds = document.querySelectorAll('[data-custom-ads]');
    getAds.forEach(function (item) {
        setTimeout(() => {
            window.open(item.querySelector('a').getAttribute('href'), '_blank');
        }, 2000);
    });
    return true
}

window.addEventListener('DOMContentLoaded', (event) => {
    popupShowVisitorBased();
    document.getElementById('recaptcha-form').addEventListener('submit', submitRecaptchaForm);
});
