<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn']) }}>
    {{ $slot }}
{{--    <span class="indicator-label">Continue</span>--}}
{{--    <span class="indicator-progress">Please wait...--}}
{{--    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>--}}
</button>
