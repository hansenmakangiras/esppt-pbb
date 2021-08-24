<div class="d-flex align-items-stretch ms-1 ms-lg-3">
    <!--begin::Search-->
    <div id="kt_header_search" class="d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2"
         data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false"
         data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
        <!--begin::Search toggle-->
        <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px">
                <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                {!! getSvgIcon('icons/duotone/General/Search.svg','svg-icon svg-icon-1') !!}
                <!--end::Svg Icon-->
            </div>
        </div>
        <!--end::Search toggle-->
        <!--begin::Menu-->
        <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
            <!--begin::Wrapper-->
            <div data-kt-search-element="wrapper">
                <!--begin::Form-->
                <form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                    {!! getSvgIcon('icons/duotone/General/Search.svg','svg-icon svg-icon-1') !!}
                    <!--end::Svg Icon-->
                    <!--end::Icon-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-flush ps-10" name="search" value="" placeholder="Search..."
                           data-kt-search-element="input"/>
                    <!--end::Input-->
                    <!--begin::Spinner-->
                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
                        <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                    </span>
                    <!--end::Spinner-->
                    <!--begin::Reset-->
                    <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
                          data-kt-search-element="clear">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        {!! getSvgIcon('icons/duotone/Navigation/Close.svg','svg-icon svg-icon-2 svg-icon-lg-1 me-0') !!}
                        <!--end::Svg Icon-->
                    </span>
                    <!--end::Reset-->
                    <!--begin::Toolbar-->
                    <div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
                        <!--begin::Preferences toggle-->
                        <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1"
                             data-bs-toggle="tooltip" title="Show search preferences">
                            <!--begin::Svg Icon | path: icons/duotone/Code/Settings4.svg-->
                            {!! getSvgIcon('icons/duotone/Code/Settings4.svg','svg-icon svg-icon-1') !!}
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Preferences toggle-->
                        <!--begin::Advanced search toggle-->
                        <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary"
                             data-bs-toggle="tooltip" title="Show more search options">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
                            {!! getSvgIcon('icons/duotone/Navigation/Angle-down.svg','svg-icon svg-icon-2') !!}
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Advanced search toggle-->
                    </div>
                    <!--end::Toolbar-->
                </form>
                <!--end::Form-->
                <!--begin::Separator-->
                <div class="separator border-gray-200 mb-6"></div>
                <!--end::Separator-->
                <!--begin::Recently viewed-->
                @include('partials.search.recently-viewed')
                <!--end::Recently viewed-->
                <!--begin::Recently viewed-->
                @include('partials.search.recently-search')
                <!--end::Recently viewed-->
                <!--begin::Empty-->
                @include('partials.search.empty-search')
                <!--end::Empty-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Preferences-->
            @include('partials.search.advanced-search')
            <!--end::Preferences-->
            <!--begin::Preferences-->
            @include('partials.search.search-preference')
            <!--end::Preferences-->
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Search-->
</div>
