<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ url('/') }}" class="mb-12">
                <x-application-logo class="h-45px" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{ route('login') }}">
            @csrf
            <!--begin::Heading-->
            <div class="text-center mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3">Sign In to Metronic</h1>
                <!--end::Title-->
                <!--begin::Link-->
                <div class="text-gray-400 fw-bold fs-4">New Here?
                    <a href="{{ route('register') }}" class="link-primary fw-bolder">Create an Account</a></div>
                <!--end::Link-->
            </div>
            <!--begin::Heading-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <!--begin::Label-->
                <x-label for="email" :value="__('Email')" />
                <!--end::Label-->
                <!--begin::Input-->
                <x-input id="email" type="email" name="email" :value="old('email')" autocomplete="off" required autofocus />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack mb-2">
                    <!--begin::Label-->
                    <x-label for="password" :value="__('Password')" />
                    <!--end::Label-->
                    <!--begin::Link-->
                    @if (Route::has('password.request'))
                        <a class="link-primary fs-6 fw-bolder" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <!--end::Link-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Input-->
                <x-input id="password" type="password" name="password" required autocomplete="off" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <label class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" name="remember"/>
                    <span class="form-check-label fw-bold text-gray-700 fs-6">{{ __('Remember me') }}
        </span>
                </label>
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="text-center">
                <!--begin::Submit button-->
                <x-button id="kt_sign_in_submit" class="btn-lg btn-primary w-100 mb-5">
                    {{ __('Log in') }}
                </x-button>
                <!--end::Submit button-->

                <!--begin::Separator-->
                <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                <!--end::Separator-->
                <!--begin::Google link-->
                <x-button-href href="#" class="btn-flex flex-center btn-light btn-lg w-100 mb-5" >
                    <img alt="Logo" src="{{ asset('theme1/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3" />
                    Continue with Google
                </x-button-href>
                <!--end::Google link-->
                <!--begin::Google link-->
                <x-button-href href="#" class="btn-flex flex-center btn-light btn-lg w-100 mb-5">
                    <img alt="Logo" src="{{ asset('theme1/media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-3" />
                    Continue with Facebook
                </x-button-href>
                <!--end::Google link-->
                <!--begin::Google link-->
                <x-button-href href="=#" class="btn-flex flex-center btn-light btn-lg w-100" >
                    <img alt="Logo" src="{{ asset('theme1/media/svg/brand-logos/apple-black.svg') }}" class="h-20px me-3" />
                    Continue with Apple
                </x-button-href>
                <!--end::Google link-->
            </div>
            <!--end::Actions-->
        </form>
    </x-auth-card>
</x-guest-layout>
