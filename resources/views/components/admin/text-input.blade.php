@props(['disabled' => false])

<!-- .form-group -->
<div class="form-group">
    <div class="form-label-group">
        <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control']) !!} />
        {{ $slot }}
    </div>
</div>
<!-- /.form-group -->
