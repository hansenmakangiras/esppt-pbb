<div id="kt_header" style="" class="header align-items-stretch">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Aside mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
            {!! getSvgIcon('icons/duotone/Text/Menu.svg','svg-icon svg-icon-2x mt-1') !!}
            <!--end::Svg Icon-->
            </div>
        </div>
        <!--end::Aside mobile toggle-->
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="{{ url('/') }}" class="d-lg-none">
                <img alt="Logo" src="{{ asset('theme1/media/logos/logo-3.svg') }}" class="h-30px"/>
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Navbar-->
            <div class="d-flex align-items-stretch" id="kt_header_nav">
                <!--begin::Menu wrapper-->
                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
                     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                     data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend"
                     data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                    <!--begin::Menu-->
                    <div
                        class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                        id="#kt_header_menu" data-kt-menu="true">
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Navbar-->
            <!--begin::Topbar-->
            <div class="d-flex align-items-stretch flex-shrink-0">
                <!--begin::Toolbar wrapper-->
                <div class="d-flex align-items-stretch flex-shrink-0">
                    <!--begin::Search-->
                @include('partials.layouts.navbar.search-global')
                <!--end::Search-->

                    <!--begin::Activities-->
{{--                    <div class="d-flex align-items-center ms-1 ms-lg-3">--}}
{{--                        <!--begin::Drawer toggle-->--}}
{{--                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_activities_toggle">--}}
{{--                            <!--begin::Svg Icon | path: icons/duotone/Media/Equalizer.svg-->--}}
{{--                        {!! getSvgIcon('icons/duotone/Media/Equalizer.svg','svg-icon svg-icon-1') !!}--}}
{{--                        <!--end::Svg Icon-->--}}
{{--                        </div>--}}
{{--                        <!--end::Drawer toggle-->--}}
{{--                    </div>--}}
                    <!--end::Activities-->

                <!--begin::Quick links-->
                @include('partials.layouts.navbar.quick-links-navbar')
                <!--end::Quick links-->

                    <!--begin::Chat-->
{{--                    <div class="d-flex align-items-center ms-1 ms-lg-3">--}}
{{--                        <!--begin::Menu wrapper-->--}}
{{--                        <div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px" id="kt_drawer_chat_toggle">--}}
{{--                            <!--begin::Svg Icon | path: icons/duotone/Communication/Group-chat.svg-->--}}
{{--                        {!! getSvgIcon('icons/duotone/Communication/Group-chat.svg','svg-icon svg-icon-1') !!}--}}
{{--                        <!--end::Svg Icon-->--}}
{{--                            <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>--}}
{{--                        </div>--}}
{{--                        <!--end::Menu wrapper-->--}}
{{--                    </div>--}}
                    <!--end::Chat-->

                    <!--begin::Notifications-->
                @include('partials.layouts.navbar.global-notifications')
                <!--end::Notifications-->
                    <!--begin::User-->
                @include('partials.layouts.navbar.user-menu')
                <!--end::User -->
                    <!--begin::Heaeder menu toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotone/Text/Toggle-Right.svg-->
                        {!! getSvgIcon('icons/duotone/Text/Toggle-Right.svg','svg-icon svg-icon-1') !!}
                        <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Heaeder menu toggle-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
