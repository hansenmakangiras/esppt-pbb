<div class="d-flex align-items-center ms-1 ms-lg-3">
    <!--begin::Menu wrapper-->
    <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent"
         data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
        <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks.svg-->
        {!! getSvgIcon('icons/duotone/Layout/Layout-4-blocks.svg','svg-icon svg-icon-1') !!}
        <!--end::Svg Icon-->
    </div>
    <!--begin::Menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
        <!--begin::Heading-->
        <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"
             style="background-image:url('{{ asset("theme1/media/misc/pattern-1.jpg") }}')">
            <!--begin::Title-->
            <h3 class="text-white fw-bold mb-3">Quick Links</h3>
            <!--end::Title-->
            <!--begin::Status-->
            <span class="badge bg-primary py-2 px-3">25 pending tasks</span>
            <!--end::Status-->
        </div>
        <!--end::Heading-->
        <!--begin:Nav-->
        <div class="row g-0">
            <!--begin:Item-->
            <div class="col-6">
                <a href="#"
                   class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                    <!--begin::Svg Icon | path: icons/duotone/Shopping/Euro.svg-->
                {!! getSvgIcon('icons/duotone/Shopping/Euro.svg','svg-icon svg-icon-3x svg-icon-primary mb-2') !!}
                <!--end::Svg Icon-->
                    <span class="fs-5 fw-bold text-gray-800 mb-0">Accounting</span>
                    <span class="fs-7 text-gray-400">eCommerce</span>
                </a>
            </div>
            <!--end:Item-->
            <!--begin:Item-->
            <div class="col-6">
                <a href="#"
                   class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                    <!--begin::Svg Icon | path: icons/duotone/Communication/Mail-attachment.svg-->
                {!! getSvgIcon('icons/duotone/Communication/Mail-attachment.svg','svg-icon svg-icon-3x svg-icon-primary mb-2') !!}
                <!--end::Svg Icon-->
                    <span class="fs-5 fw-bold text-gray-800 mb-0">Administration</span>
                    <span class="fs-7 text-gray-400">Console</span>
                </a>
            </div>
            <!--end:Item-->
            <!--begin:Item-->
            <div class="col-6">
                <a href="#" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                    <!--begin::Svg Icon | path: icons/duotone/Shopping/Box2.svg-->
                {!! getSvgIcon('icons/duotone/Shopping/Box2.svg','svg-icon svg-icon-3x svg-icon-primary mb-2') !!}
                <!--end::Svg Icon-->
                    <span class="fs-5 fw-bold text-gray-800 mb-0">Projects</span>
                    <span class="fs-7 text-gray-400">Pending Tasks</span>
                </a>
            </div>
            <!--end:Item-->
            <!--begin:Item-->
            <div class="col-6">
                <a href="#" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                    <!--begin::Svg Icon | path: icons/duotone/Communication/Group.svg-->
                {!! getSvgIcon('icons/duotone/Communication/Group.svg','svg-icon svg-icon-3x svg-icon-primary mb-2') !!}
                <!--end::Svg Icon-->
                    <span class="fs-5 fw-bold text-gray-800 mb-0">Customers</span>
                    <span class="fs-7 text-gray-400">Latest cases</span>
                </a>
            </div>
            <!--end:Item-->
        </div>
        <!--end:Nav-->
        <!--begin::View more-->
        <div class="py-2 text-center border-top">
            <a href="{{ url('view-all') }}" class="btn btn-color-gray-600 btn-active-color-primary">View All
                <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
            {!! getSvgIcon('icons/duotone/Navigation/Right-2.svg','svg-icon svg-icon-5') !!}
            <!--end::Svg Icon-->
            </a>
        </div>
        <!--end::View more-->
    </div>
    <!--end::Menu-->
    <!--end::Menu wrapper-->
</div>
