<!-- Modal Fullscreen xl -->
<div class="modal modal-fullscreen-xl" id="recaptcha-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document" style="max-width: 100% !important;height: 100%;margin: 0 !important;">
        <div class="modal-content" style="height: 100%">
            <div class="modal-body">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div id="recaptcha-form">
                        <form id="recaptchaGoogle" method="POST">
                            <div id="googleRecaptcha-0" class="d-flex justify-content-center"></div>
                            <div id="googleRecaptcha-1" class="d-flex justify-content-center d-none"></div>
                            <div id="googleRecaptcha-2" class="d-flex justify-content-center d-none"></div>
                            <br>
                            <div id="recaptchaError" class="alert alert-danger d-none" role="alert">
                                OOPS! Missing something, Are you Robot?
                            </div>
                            <div class="submit-btn text-center">
                                <button class="btn btn-secondary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div id="recaptcha-countdown" class="d-none">
                        <svg class="timer">
                            <circle class="progress-frame" cx="100" cy="100" r="96"></circle>
                            <circle class="progress" cx="100" cy="100" r="96"></circle>
                        </svg>
                        <div class="time">
                            <p><span class="seconds">20</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var onloadCallbackRecaptcha = function() {
        grecaptcha.render('googleRecaptcha-0', {
            'sitekey' : '{{ config('services.recaptcha.key') }}'
        });
        grecaptcha.render('googleRecaptcha-1', {
            'sitekey' : '{{ config('services.recaptcha.key') }}'
        });
        grecaptcha.render('googleRecaptcha-2', {
            'sitekey' : '{{ config('services.recaptcha.key') }}'
        });
    };
</script>
