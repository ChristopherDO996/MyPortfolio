<!DOCTYPE html>
<html lang="es">
<!--begin::Head-->

<head>
    <title>CDO - Dashboard</title>
    <meta charset="utf-8" />
    <meta name="description" content="Este es el sitio para editar mi website" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="es_MX" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="CDO - Dashboard" />
    <meta property="og:url" content="https://www.developher.me" />
    <meta property="og:site_name" content="CDO | Portfolio" />
    <link rel="shortcut icon" href="{{ asset('img') }}/favicon.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('css/manager') }}/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/manager') }}/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-sidebar="on" class="header-fixed header-tablet-and-mobile-fixed sidebar-enabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container-xxl d-flex align-items-stretch justify-content-between">
                        <!--begin::Left-->
                        <div class="d-flex align-items-center">
                            <!--begin::Mega Menu Toggler-->
                            <button class="btn btn-icon btn-accent me-2 me-lg-6" id="kt_mega_menu_toggle"
                                data-bs-toggle="modal" data-bs-target="#kt_mega_menu_modal">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen059.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15"
                                        viewBox="0 0 16 15" fill="none">
                                        <rect y="6" width="16" height="3" rx="1.5" fill="black" />
                                        <rect opacity="0.3" y="12" width="8" height="3" rx="1.5"
                                            fill="black" />
                                        <rect opacity="0.3" width="12" height="3" rx="1.5"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--end::Mega Menu Toggler-->
                            <!--begin::Logo-->
                            <a href="{{ '/' }}">
                                <img alt="Logo" src="{{ asset('img') }}/logo.png" class="h-30px" />
                            </a>
                            <!--end::Logo-->
                        </div>
                        <!--end::Left-->
                        <!--begin::Right-->
                        <div class="d-flex align-items-center">
                            <!--begin::User-->
                            <div class="ms-1 ms-lg-6">
                                <!--begin::Toggle-->
                                <div class="btn btn-icon btn-sm btn-active-bg-accent" data-kt-menu-trigger="click"
                                    data-kt-menu-placement="bottom-end" id="kt_header_user_menu_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                fill="black" />
                                            <rect opacity="0.3" x="8" y="3" width="8" height="8"
                                                rx="4" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-300px"
                                    data-kt-menu="true">
                                    <div class="menu-content fw-bold d-flex align-items-center bgi-no-repeat bgi-position-y-top rounded-top"
                                        style="background-image:url('{{ asset('img/manager') }}//misc/dropdown-header-bg.jpg')">
                                        <div class="symbol symbol-45px mx-5 py-5">
                                            <span class="symbol-label bg-primary align-items-end">
                                                <img alt="Logo"
                                                    src="{{ asset('img/manager') }}/svg/avatars/001-boy.svg"
                                                    class="mh-35px" />
                                            </span>
                                        </div>
                                        <div class="">
                                            <span class="text-white fw-bolder fs-4">Hola, Chris!</span>
                                            <span class="text-white fw-bold fs-7 d-block">Desarrollador |
                                                Propietario</span>
                                        </div>
                                    </div>
                                    <!--begin::Row-->
                                    <div class="row row-cols-2 g-0">
                                        <a href="../dist/profile/account.html"
                                            class="col border-bottom text-center py-10 btn btn-active-color-primary rounded-0">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <span class="svg-icon svg-icon-3x me-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                        fill="black" />
                                                    <path opacity="0.3"
                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="fw-bolder fs-6 d-block pt-3">Ajustes</span>
                                        </a>
                                        <a href="../dist/general/login.html"
                                            class="col text-center py-10 btn btn-active-color-primary rounded-0">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr077.svg-->
                                            <span class="svg-icon svg-icon-3x me-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="4" y="11" width="12" height="2"
                                                        rx="1" fill="black" />
                                                    <path
                                                        d="M5.86875 11.6927L7.62435 10.2297C8.09457 9.83785 8.12683 9.12683 7.69401 8.69401C7.3043 8.3043 6.67836 8.28591 6.26643 8.65206L3.34084 11.2526C2.89332 11.6504 2.89332 12.3496 3.34084 12.7474L6.26643 15.3479C6.67836 15.7141 7.3043 15.6957 7.69401 15.306C8.12683 14.8732 8.09458 14.1621 7.62435 13.7703L5.86875 12.3073C5.67684 12.1474 5.67684 11.8526 5.86875 11.6927Z"
                                                        fill="black" />
                                                    <path
                                                        d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z"
                                                        fill="#C4C4C4" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="fw-bolder fs-6 d-block pt-3">Salir</span>
                                        </a>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::Sidebar Toggler-->
                            <button class="btn btn-icon btn-sm btn-active-bg-accent d-lg-none ms-1 ms-lg-6"
                                id="kt_sidebar_toggler">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-1 svg-icon-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--end::Sidebar Toggler-->
                        </div>
                        <!--end::Right-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Main-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Content-->
                    <div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
                        <!--begin::Container-->
                        <div class="container-xxl">
                            <!--begin::Row-->
                            <div class="row g-0 g-xl-5 g-xxl-8">
                                <div class="col-xl-4">
                                    <!--begin::Engage Widget 5-->
                                    <div class="card card-stretch mb-5 mb-xxl-8">
                                        <!--begin::Body-->
                                        <div class="card-body pb-0">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column h-100">
                                                <!--begin::Text-->
                                                <h3 class="text-dark text-center fs-1 fw-bolder pt-15 lh-lg">Agregar
                                                    <br />Proyecto Desarrollado
                                                </h3>
                                                <!--end::Text-->
                                                <!--begin::Action-->
                                                <div class="text-center pt-7">
                                                    <a href="#" class="btn btn-primary fw-bolder fs-6 px-7 py-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal_project">Agregar</a>
                                                </div>
                                                <!--end::Action-->
                                                <!--begin::Image-->
                                                <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom card-rounded-bottom h-200px"
                                                    style="background-image:url('{{ asset('img/manager') }}/illustrations/sigma-1/3.png')">
                                                </div>
                                                <!--end::Image-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Engage Widget 5-->
                                </div>
                                <div class="col-xl-8">
                                    <!--begin::Table Widget 1-->
                                    <div class="card card-stretch mb-5 mb-xxl-8">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bolder text-dark fs-3">Áreas de
                                                    expertís</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <ul class="nav nav-pills nav-pills-sm nav-light">
                                                    <li class="nav-item">
                                                        <a class="nav-link btn btn-active-light btn-color-muted py-2 px-4 active fw-bolder me-2"
                                                            data-bs-toggle="tab" href="#front">Front</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn btn-active-light btn-color-muted py-2 px-4 fw-bolder me-2"
                                                            data-bs-toggle="tab" href="#back">Back</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn btn-active-light btn-color-muted py-2 px-4 fw-bolder"
                                                            data-bs-toggle="tab" href="#db">DB</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn btn-active-light btn-color-muted py-2 px-4 fw-bolder"
                                                            data-bs-toggle="tab" href="#ia">IA</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-2 pb-0 mt-n3">
                                            <div class="tab-content mt-5" id="myTabTables1">
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade show active" id="front" role="tabpanel"
                                                    aria-labelledby="front">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless align-middle">
                                                            <thead>
                                                                <tr>
                                                                    <th class="p-0 w-50px"></th>
                                                                    <th class="p-0 min-w-200px"></th>
                                                                    <th class="p-0 min-w-100px"></th>
                                                                    <th class="p-0 min-w-40px"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="px-0 py-3">
                                                                        <div class="symbol symbol-65px me-5">
                                                                            <span
                                                                                class="symbol-label bg-light-primary">
                                                                                <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                                                                <span
                                                                                    class="svg-icon svg-icon-1 svg-icon-primary">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <path opacity="0.3"
                                                                                            d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                                                            fill="black" />
                                                                                        <rect x="6" y="12"
                                                                                            width="7"
                                                                                            height="2"
                                                                                            rx="1"
                                                                                            fill="black" />
                                                                                        <rect x="6" y="7"
                                                                                            width="12"
                                                                                            height="2"
                                                                                            rx="1"
                                                                                            fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="ps-0">
                                                                        <a href="#"
                                                                            class="text-gray-800 fw-bolder text-hover-primary fs-6">Top
                                                                            Authors</a>
                                                                        <span
                                                                            class="text-muted fw-bold d-block mt-1">HTML/CSS/JS,
                                                                            Python</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex flex-column w-100 me-3">
                                                                            <div class="d-flex flex-stack mb-2">
                                                                                <span
                                                                                    class="text-dark me-2 fs-6 fw-bolder">Progress</span>
                                                                            </div>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="progress h-6px w-100 bg-light-primary">
                                                                                    <div class="progress-bar bg-primary"
                                                                                        role="progressbar"
                                                                                        style="width: 46%;"
                                                                                        aria-valuenow="50"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                                <span
                                                                                    class="text-muted fs-7 fw-bold ps-3">46%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-end pe-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                            <span class="svg-icon svg-icon-4">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24"
                                                                                    fill="none">
                                                                                    <rect opacity="0.5" x="18" y="13"
                                                                                        width="13" height="2"
                                                                                        rx="1"
                                                                                        transform="rotate(-180 18 13)"
                                                                                        fill="black" />
                                                                                    <path
                                                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade" id="back" role="tabpanel"
                                                    aria-labelledby="back">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless align-middle">
                                                            <thead>
                                                                <tr>
                                                                    <th class="p-0 w-50px"></th>
                                                                    <th class="p-0 min-w-200px"></th>
                                                                    <th class="p-0 min-w-100px"></th>
                                                                    <th class="p-0 min-w-40px"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th class="ps-0 py-3">
                                                                        <div class="symbol symbol-65px me-3">
                                                                            <span
                                                                                class="symbol-label bg-light-success">
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                                                <span
                                                                                    class="svg-icon svg-icon-1 svg-icon-success">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <rect opacity="0.5" x="11.364"
                                                                                            y="20.364" width="16"
                                                                                            height="2"
                                                                                            rx="1"
                                                                                            transform="rotate(-90 11.364 20.364)"
                                                                                            fill="black" />
                                                                                        <rect x="4.36396" y="11.364"
                                                                                            width="16"
                                                                                            height="2"
                                                                                            rx="1"
                                                                                            fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </div>
                                                                    </th>
                                                                    <td class="ps-0">
                                                                        <a href="#"
                                                                            class="text-gray-800 fw-bolder text-hover-primary fs-6">New
                                                                            Users</a>
                                                                        <span
                                                                            class="text-muted fw-bold d-block mt-1">HTML/CSS/JS,
                                                                            Python</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex flex-column w-100 me-3">
                                                                            <div class="d-flex flex-stack mb-2">
                                                                                <span
                                                                                    class="text-dark me-2 fs-6 fw-bolder">Progress</span>
                                                                            </div>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="progress h-6px w-100 bg-light-success">
                                                                                    <div class="progress-bar bg-success"
                                                                                        role="progressbar"
                                                                                        style="width: 53%;"
                                                                                        aria-valuenow="50"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                                <span
                                                                                    class="text-muted fs-7 fw-bold ps-3">53%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-end pe-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                            <span class="svg-icon svg-icon-4">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24"
                                                                                    fill="none">
                                                                                    <rect opacity="0.5" x="18" y="13"
                                                                                        width="13" height="2"
                                                                                        rx="1"
                                                                                        transform="rotate(-180 18 13)"
                                                                                        fill="black" />
                                                                                    <path
                                                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade" id="db" role="tabpanel"
                                                    aria-labelledby="db">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless align-middle">
                                                            <thead>
                                                                <tr>
                                                                    <th class="p-0 w-50px"></th>
                                                                    <th class="p-0 min-w-200px"></th>
                                                                    <th class="p-0 min-w-100px"></th>
                                                                    <th class="p-0 min-w-40px"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="ps-0 py-3">
                                                                        <div
                                                                            class="symbol symbol-65px bg-light-warning me-3">
                                                                            <span class="symbol-label">
                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                                                <span
                                                                                    class="svg-icon svg-icon-1 svg-icon-warning">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <rect x="2" y="2"
                                                                                            width="9"
                                                                                            height="9"
                                                                                            rx="2"
                                                                                            fill="black" />
                                                                                        <rect opacity="0.3" x="13"
                                                                                            y="2" width="9"
                                                                                            height="9"
                                                                                            rx="2"
                                                                                            fill="black" />
                                                                                        <rect opacity="0.3" x="13"
                                                                                            y="13" width="9"
                                                                                            height="9"
                                                                                            rx="2"
                                                                                            fill="black" />
                                                                                        <rect opacity="0.3" x="2"
                                                                                            y="13" width="9"
                                                                                            height="9"
                                                                                            rx="2"
                                                                                            fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="ps-0">
                                                                        <a href="#"
                                                                            class="text-gray-800 fw-bolder text-hover-primary fs-6">Popular
                                                                            Authors</a>
                                                                        <span
                                                                            class="text-muted fw-bold d-block mt-1">HTML,
                                                                            VueJS, Laravel</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex flex-column w-100 me-3">
                                                                            <div class="d-flex flex-stack mb-2">
                                                                                <span
                                                                                    class="text-dark me-2 fs-6 fw-bolder">Progress</span>
                                                                            </div>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="progress h-6px w-100 bg-light-warning">
                                                                                    <div class="progress-bar bg-warning"
                                                                                        role="progressbar"
                                                                                        style="width: 87%;"
                                                                                        aria-valuenow="50"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                                <span
                                                                                    class="text-muted fs-7 fw-bold ps-3">87%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-end pe-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                            <span class="svg-icon svg-icon-4">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24"
                                                                                    fill="none">
                                                                                    <rect opacity="0.5" x="18" y="13"
                                                                                        width="13" height="2"
                                                                                        rx="1"
                                                                                        transform="rotate(-180 18 13)"
                                                                                        fill="black" />
                                                                                    <path
                                                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade" id="ia" role="tabpanel"
                                                    aria-labelledby="ia">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless align-middle">
                                                            <thead>
                                                                <tr>
                                                                    <th class="p-0 w-50px"></th>
                                                                    <th class="p-0 min-w-200px"></th>
                                                                    <th class="p-0 min-w-100px"></th>
                                                                    <th class="p-0 min-w-40px"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th class="ps-0 py-3">
                                                                        <div class="symbol symbol-65px me-3">
                                                                            <span
                                                                                class="symbol-label bg-light-success">
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                                                <span
                                                                                    class="svg-icon svg-icon-1 svg-icon-success">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <rect opacity="0.5" x="11.364"
                                                                                            y="20.364" width="16"
                                                                                            height="2"
                                                                                            rx="1"
                                                                                            transform="rotate(-90 11.364 20.364)"
                                                                                            fill="black" />
                                                                                        <rect x="4.36396" y="11.364"
                                                                                            width="16"
                                                                                            height="2"
                                                                                            rx="1"
                                                                                            fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </div>
                                                                    </th>
                                                                    <td class="ps-0">
                                                                        <a href="#"
                                                                            class="text-gray-800 fw-bolder text-hover-primary fs-6">New
                                                                            Users</a>
                                                                        <span
                                                                            class="text-muted fw-bold d-block mt-1">HTML/CSS/JS,
                                                                            Python</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex flex-column w-100 me-3">
                                                                            <div class="d-flex flex-stack mb-2">
                                                                                <span
                                                                                    class="text-dark me-2 fs-6 fw-bolder">Progress</span>
                                                                            </div>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="progress h-6px w-100 bg-light-success">
                                                                                    <div class="progress-bar bg-success"
                                                                                        role="progressbar"
                                                                                        style="width: 53%;"
                                                                                        aria-valuenow="50"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                                <span
                                                                                    class="text-muted fs-7 fw-bold ps-3">53%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-end pe-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                            <span class="svg-icon svg-icon-4">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24"
                                                                                    fill="none">
                                                                                    <rect opacity="0.5" x="18" y="13"
                                                                                        width="13" height="2"
                                                                                        rx="1"
                                                                                        transform="rotate(-180 18 13)"
                                                                                        fill="black" />
                                                                                    <path
                                                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Table Widget 1-->
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row g-0 g-xl-5 g-xxl-8">
                                <div class="col-xl-8">
                                    <!--begin::Stats Widget 2-->
                                    <div class="card card-stretch mb-5 mb-xxl-8">
                                        <!--begin::Header-->
                                        <div class="card-header align-items-center border-0 mt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="fw-bolder text-dark fs-3">Experiencia laboral</span>
                                                {{-- TODO: Automatizar --}}
                                                <span class="text-muted mt-2 fw-bold fs-6">4</span>
                                            </h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-0">
                                            <div
                                                class="d-flex flex-wrap flex-xxl-nowrap justify-content-center justify-content-md-start pt-4">
                                                <!--begin::Nav-->
                                                <div class="me-sm-10 me-0">
                                                    <ul class="nav flex-column nav-pills nav-pills-custom">
                                                        {{-- TODO: Automatizar --}}
                                                        <li class="nav-item mb-3">
                                                            <a class="nav-link active w-225px h-70px"
                                                                data-bs-toggle="pill" id="kt_stats_widget_2_tab_1"
                                                                href="#kt_stats_widget_2_tab_1_content">
                                                                <div class="nav-icon me-3">
                                                                    <img alt=""
                                                                        src="{{ asset('img/manager') }}/svg/logo/gray/aven.svg"
                                                                        class="default" />
                                                                    <img alt=""
                                                                        src="{{ asset('img/manager') }}/svg/logo/colored/aven.svg"
                                                                        class="active" />
                                                                </div>
                                                                <div class="ps-1">
                                                                    <span
                                                                        class="nav-text text-gray-600 fw-bolder fs-6">Man&amp;Flower
                                                                        SaaS</span>
                                                                    <span class="text-muted fw-bold d-block pt-1">HR
                                                                        Solutions</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end::Nav-->
                                                <!--begin::Tab Content-->
                                                <div class="tab-content flex-grow-1">
                                                    {{-- TODO: Automatizar --}}
                                                    <!--begin::Tab Pane 1-->
                                                    <div class="tab-pane fade show active"
                                                        id="kt_stats_widget_2_tab_1_content">
                                                        <!--begin::Content-->
                                                        <div class="d-flex justify-content-center mb-10">
                                                            <!--begin::Item-->
                                                            <div class="px-10">
                                                                <span class="text-muted fw-bold fs-7">Sale</span>
                                                                <span
                                                                    class="text-gray-800 fw-bolder fs-3 d-block">$650</span>
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="px-10">
                                                                <span class="text-muted fw-bold fs-7">Commission</span>
                                                                <span
                                                                    class="text-gray-800 fw-bolder fs-3 d-block">$2,040</span>
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="px-10">
                                                                <span class="text-muted fw-bold fs-7">Refers</span>
                                                                <span
                                                                    class="text-gray-800 fw-bolder fs-3 d-block">8,926</span>
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Chart-->
                                                        <div id="kt_stats_widget_2_chart_1" style="height: 250px">
                                                        </div>
                                                        <!--end::Chart-->
                                                    </div>
                                                    <!--end::Tab Pane 1-->
                                                </div>
                                                <!--end::Tab Content-->
                                            </div>
                                        </div>
                                        <!--end: Card Body-->
                                    </div>
                                    <!--end::Stats Widget 2-->
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Main-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Sidebar-->
            <div id="kt_sidebar" class="sidebar bg-info" data-kt-drawer="true" data-kt-drawer-name="sidebar"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'200px', '350px': '300px'}" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_sidebar_toggler">
                <!--begin::Sidebar Content-->
                <div class="d-flex flex-column sidebar-body">
                    <!--begin::Sidebar Nav-->
                    <ul class="sidebar-nav nav nav-tabs pt-15 pb-5 px-5" id="kt_sidebar_tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kt_sidebar_tab_pane_2"
                                id="kt_sidebar_tab_2">
                                <img alt="" src="{{ asset('img/manager') }}/svg/logo/purple/kanba.svg"
                                    class="default" />
                                <img alt="" src="{{ asset('img/manager') }}/svg/logo/colored/kanba.svg"
                                    class="active" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#kt_sidebar_tab_pane_3"
                                id="kt_sidebar_tab_3">
                                <img alt="" src="{{ asset('img/manager') }}/svg/logo/purple/fox-hub-2.svg"
                                    class="default" />
                                <img alt="" src="{{ asset('img/manager') }}/svg/logo/colored/fox-hub-2.svg"
                                    class="active" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kt_sidebar_tab_pane_4"
                                id="kt_sidebar_tab_4">
                                <img alt="" src="{{ asset('img/manager') }}/svg/logo/purple/tower.svg"
                                    class="default" />
                                <img alt="" src="{{ asset('img/manager') }}/svg/logo/colored/tower.svg"
                                    class="active" />
                            </a>
                        </li>
                    </ul>
                    <!--end::Sidebar Nav-->
                    <!--begin::Sidebar Content-->
                    <div id="kt_sidebar_content" class="py-10 px-5 px-lg-5">
                        <div class="hover-scroll-y me-lg-n2 pe-lg-2" data-kt-scroll="true"
                            data-kt-scroll-height="auto" data-kt-scroll-offset="0px"
                            data-kt-scroll-dependencies="#kt_sidebar_tabs, #kt_sidebar_footer"
                            data-kt-scroll-wrappers="#kt_sidebar_content">
                            <div class="tab-content">
                                <div class="tab-pane" id="kt_sidebar_tab_pane_2" role="tabpanel">
                                    <!--begin::Card-->
                                    <div class="card bg-transparent">
                                        <!--begin::Header-->
                                        <div class="card-header align-items-center border-0">
                                            <h3 class="card-title fw-bolder text-white fs-3">Kanba Sales</h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body px-3 py-0">
                                            <!--begin::Chart-->
                                            <div id="kt_sidebar_tab_2_chart" class="apexcharts-bar-hover-danger"
                                                style="height: 250px"></div>
                                            <!--end::Chart-->
                                        </div>
                                        <!--end: Card Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card bg-transparent">
                                        <!--begin::Header-->
                                        <div class="card-header align-items-center border-0">
                                            <h3 class="card-title fw-bolder text-white fs-3">Kanba Products</h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-wrap align-items-center mb-7">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px symbol-2by3 me-4">
                                                    <img src="{{ asset('img/manager') }}/stock/600x400/img-7.jpg"
                                                        alt="" class="mw-100" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                    <a href="#"
                                                        class="text-white fw-bolder text-hover-primary fs-6">BP
                                                        Industries</a>
                                                    <span class="text-white opacity-25 fw-bold fs-7 my-1">Successful
                                                        Fellas</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin: Item-->
                                            <div class="d-flex flex-wrap align-items-center mb-7">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px symbol-2by3 me-4">
                                                    <img src="{{ asset('img/manager') }}/stock/600x400/img-8.jpg"
                                                        alt="" class="mw-100" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                    <a href="#"
                                                        class="text-white fw-bolder text-hover-primary fs-6">Automatica</a>
                                                    <span class="text-white opacity-25 fw-bold fs-7 my-1">Successful
                                                        Fellas</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end: Card Body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <div class="tab-pane active" id="kt_sidebar_tab_pane_3" role="tabpanel">
                                    <!--begin::Card-->
                                    <div class="card bg-transparent">
                                        <!--begin::Header-->
                                        <div class="card-header align-items-center border-0">
                                            <h3 class="card-title fw-bolder text-white fs-3">Fox Sales</h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body px-3 py-0">
                                            <!--begin::Chart-->
                                            <div id="kt_sidebar_tab_3_chart" class="apexcharts-bar-hover-danger"
                                                style="height: 250px"></div>
                                            <!--end::Chart-->
                                        </div>
                                        <!--end: Card Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card bg-transparent">
                                        <!--begin::Header-->
                                        <div class="card-header align-items-center border-0">
                                            <h3 class="card-title fw-bolder text-white fs-3">Fox Bestsellers</h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-wrap align-items-center mb-7">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px symbol-2by3 me-4">
                                                    <img src="{{ asset('img/manager') }}/stock/600x400/img-17.jpg"
                                                        alt="" class="mw-100" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                    <a href="#"
                                                        class="text-white fw-bolder text-hover-primary fs-6">Blue
                                                        Donut</a>
                                                    <span class="text-white opacity-25 fw-bold fs-7 my-1">Study the
                                                        highway types</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin: Item-->
                                            <div class="d-flex flex-wrap align-items-center mb-7">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px symbol-2by3 me-4">
                                                    <img src="{{ asset('img/manager') }}/stock/600x400/img-10.jpg"
                                                        alt="" class="mw-100" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                    <a href="#"
                                                        class="text-white fw-bolder text-hover-primary fs-6">Lovely
                                                        Hearts</a>
                                                    <span class="text-white opacity-25 fw-bold fs-7 my-1">Study the
                                                        highway types</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end: Item-->
                                        </div>
                                        <!--end: Card Body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <div class="tab-pane" id="kt_sidebar_tab_pane_4" role="tabpanel">
                                    <!--begin::Card-->
                                    <div class="card bg-transparent">
                                        <!--begin::Header-->
                                        <div class="card-header align-items-center border-0">
                                            <h3 class="card-title fw-bolder text-white fs-3">Tower Sales</h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body px-3 py-0">
                                            <!--begin::Chart-->
                                            <div id="kt_sidebar_tab_4_chart" class="apexcharts-bar-hover-danger"
                                                style="height: 250px"></div>
                                            <!--end::Chart-->
                                        </div>
                                        <!--end: Card Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card bg-transparent">
                                        <!--begin::Header-->
                                        <div class="card-header align-items-center border-0">
                                            <h3 class="card-title fw-bolder text-white fs-3">Tower Latest Products
                                            </h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-0">
                                            <!--begin: Item-->
                                            <div class="d-flex flex-wrap align-items-center mb-7">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px symbol-2by3 me-4">
                                                    <img src="{{ asset('img/manager') }}/stock/600x400/img-8.jpg"
                                                        alt="" class="mw-100" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                    <a href="#"
                                                        class="text-white fw-bolder text-hover-primary fs-6">Automatica</a>
                                                    <span class="text-white opacity-25 fw-bold fs-7 my-1">Successful
                                                        Fellas</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end: Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-wrap align-items-center mb-7">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px symbol-2by3 me-4">
                                                    <img src="{{ asset('img/manager') }}/stock/600x400/img-11.jpg"
                                                        alt="" class="mw-100" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                    <a href="#"
                                                        class="text-white fw-bolder text-hover-primary fs-6">BP
                                                        Industries</a>
                                                    <span class="text-white opacity-25 fw-bold fs-7 my-1">Successful
                                                        Fellas</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end: Card Body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Sidebar Content-->
                </div>
                <!--end::Sidebar Content-->
            </div>
            <!--end::Sidebar-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Header Search-->
    <div class="modal bg-white fade" id="kt_header_search_modal" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content shadow-none">
                <div class="container w-lg-800px">
                    <div class="modal-header d-flex justify-content-end border-0">
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-light-primary ms-2" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                        rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <div class="modal-body">
                        <!--begin::Search-->
                        <form class="pb-10">
                            <input autofocus="" type="text"
                                class="form-control bg-transparent border-0 fs-4x text-center fw-normal"
                                name="query" placeholder="Search..." />
                        </form>
                        <!--end::Search-->
                        <!--begin::Shop Goods-->
                        <div class="py-10">
                            <h3 class="fw-bolder mb-8">Shop Goods</h3>
                            <!--begin::Row-->
                            <div class="row g-5">
                                <div class="col-sm-6">
                                    <div class="row g-5">
                                        <div class="col-sm-6">
                                            <div class="card overlay min-h-125px mb-5 shadow-none">
                                                <div class="card-body d-flex flex-column p-0">
                                                    <div class="overlay-wrapper flex-grow-1 bgi-no-repeat bgi-size-cover bgi-position-center card-rounded"
                                                        style="background-image:url('{{ asset('img/manager') }}/stock/600x400/img-17.jpg')">
                                                    </div>
                                                    <div class="overlay-layer bg-white bg-opacity-50">
                                                        <a href="#"
                                                            class="btn btn-sm fw-bold btn-primary">Explore</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card overlay min-h-125px mb-5 shadow-none">
                                                <div class="card-body d-flex flex-column p-0">
                                                    <div class="overlay-wrapper flex-grow-1 bgi-no-repeat bgi-size-cover bgi-position-center card-rounded"
                                                        style="background-image:url('{{ asset('img/manager') }}/stock/600x400/img-1.jpg')">
                                                    </div>
                                                    <div class="overlay-layer bg-white bg-opacity-50">
                                                        <a href="#"
                                                            class="btn btn-sm fw-bold btn-primary">Explore</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card card-stretch overlay mb-5 shadow-none min-h-250px">
                                                <div class="card-body d-flex flex-column p-0">
                                                    <div class="overlay-wrapper flex-grow-1 bgi-no-repeat bgi-size-cover bgi-position-center card-rounded"
                                                        style="background-image:url('{{ asset('img/manager') }}/stock/600x400/img-23.jpg')">
                                                    </div>
                                                    <div class="overlay-layer bg-white bg-opacity-50">
                                                        <a href="#"
                                                            class="btn btn-sm fw-bold btn-primary">Explore</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card card-stretch overlay mb-5 shadow-none min-h-250px">
                                        <div class="card-body d-flex flex-column p-0">
                                            <div class="overlay-wrapper flex-grow-1 bgi-no-repeat bgi-size-cover bgi-position-center card-rounded"
                                                style="background-image:url('{{ asset('img/manager') }}/stock/600x400/img-11.jpg')">
                                            </div>
                                            <div class="overlay-layer bg-white bg-opacity-50">
                                                <a href="#" class="btn btn-sm fw-bold btn-primary">Explore</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Shop Goods-->
                        <!--begin::Framework Users-->
                        <div>
                            <h3 class="text-dark fw-bolder fs-1 mb-6">Framework Users</h3>
                            <!--begin::List Widget 4-->
                            <div class="card bg-transparent mb-5 shadow-none">
                                <!--begin::Body-->
                                <div class="card-body pt-2 px-0">
                                    <div class="table-responsive">
                                        <table class="table table-borderless align-middle">
                                            <!--begin::Item-->
                                            <tr>
                                                <th class="ps-0 w-55px">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-55px flex-shrink-0 me-4">
                                                        <span class="symbol-label bg-light-primary">
                                                            <img src="{{ asset('img/manager') }}/svg/avatars/009-boy-4.svg"
                                                                class="h-75 align-self-end" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                </th>
                                                <td class="ps-0 flex-column min-w-300px">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bolder text-hover-primary fs-6 mb-1">Brad
                                                        Simmons</a>
                                                    <div class="text-muted fw-bold">Uses: HTML/CSS/JS, Python</div>
                                                    <!--end::Title-->
                                                </td>
                                                <td>
                                                    <!--begin::Label-->
                                                    <div class="me-4 me-md-19 text-md-right">
                                                        <div class="text-gray-800 fw-bolder fs-6 mb-1">$2,000,000
                                                        </div>
                                                        <span class="text-muted fw-bold">Paid</span>
                                                    </div>
                                                    <!--end::Label-->
                                                </td>
                                                <td class="text-end pe-0">
                                                    <!--begin::Btn-->
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-180 18 13)" fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--end::Btn-->
                                                </td>
                                            </tr>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <tr>
                                                <th class="ps-0">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-55px flex-shrink-0 me-4">
                                                        <span class="symbol-label bg-light-danger">
                                                            <img src="{{ asset('img/manager') }}/svg/avatars/006-girl-3.svg"
                                                                class="h-75 align-self-end" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                </th>
                                                <td class="ps-0 flex-column min-w-300px">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bolder text-hover-primary fs-6 mb-1">Jessie
                                                        Clarcson</a>
                                                    <div class="text-muted fw-bold">Uses: HTML, ReactJS, ASP.NET</div>
                                                    <!--end::Title-->
                                                </td>
                                                <td>
                                                    <!--end::Label-->
                                                    <div class="me-4 me-md-19 text-md-right">
                                                        <div class="text-gray-800 fw-bolder fs-6 mb-1">$1,200,000
                                                        </div>
                                                        <span class="text-muted fw-bold">Paid</span>
                                                    </div>
                                                    <!--end::Label-->
                                                </td>
                                                <td class="text-end pe-0">
                                                    <!--begin::Btn-->
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-180 18 13)" fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--end::Btn-->
                                                </td>
                                            </tr>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <tr>
                                                <th class="ps-0">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-55px flex-shrink-0 me-4">
                                                        <span class="symbol-label bg-light-success">
                                                            <img src="{{ asset('img/manager') }}/svg/avatars/011-boy-5.svg"
                                                                class="h-75 align-self-end" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                </th>
                                                <td class="ps-0 flex-column min-w-300px">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bolder text-hover-primary fs-6 mb-1">Lebron
                                                        Wayde</a>
                                                    <div class="text-muted fw-bold">Uses: HTML. Laravel Framework
                                                    </div>
                                                    <!--end::Title-->
                                                </td>
                                                <td>
                                                    <!--end::Label-->
                                                    <div class="me-4 me-md-19 text-md-right">
                                                        <div class="text-gray-800 fw-bolder fs-6 mb-1">$3,400,000
                                                        </div>
                                                        <span class="text-muted fw-bold">Paid</span>
                                                    </div>
                                                    <!--end::Label-->
                                                </td>
                                                <td class="text-end pe-0">
                                                    <!--begin::Btn-->
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-180 18 13)" fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--end::Btn-->
                                                </td>
                                            </tr>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <tr>
                                                <th class="ps-0">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-55px flex-shrink-0 me-4">
                                                        <span class="symbol-label bg-light-warning">
                                                            <img src="{{ asset('img/manager') }}/svg/avatars/015-boy-6.svg"
                                                                class="h-75 align-self-end" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                </th>
                                                <td class="ps-0 flex-column min-w-300px">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bolder text-hover-primary fs-6 mb-1">Kevin
                                                        Leonard</a>
                                                    <div class="text-muted fw-bold">Uses: VueJS, Laravel Framework
                                                    </div>
                                                    <!--end::Title-->
                                                </td>
                                                <td>
                                                    <!--end::Label-->
                                                    <div class="me-4 me-md-19 text-md-right">
                                                        <div class="text-gray-800 fw-bolder fs-6 mb-1">$35,600,000
                                                        </div>
                                                        <span class="text-muted fw-bold">Paid</span>
                                                    </div>
                                                    <!--end::Label-->
                                                </td>
                                                <td class="text-end pe-0">
                                                    <!--begin::Btn-->
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-180 18 13)" fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--end::Btn-->
                                                </td>
                                            </tr>
                                            <!--end::Item-->
                                        </table>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::List Widget 4-->
                        </div>
                        <!--end::Framework Users-->
                        <!--begin::Tutorials-->
                        <div class="pb-10">
                            <h3 class="text-dark fw-bolder fs-1 mb-6">Tutorials</h3>
                            <!--begin::List Widget 5-->
                            <div class="card mb-5 shadow-none">
                                <!--begin::Body-->
                                <div class="card-body pt-2 px-0">
                                    <!--begin::Item-->
                                    <div class="d-flex mb-6">
                                        <!--begin::Icon-->
                                        <div class="me-1">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                            <span class="svg-icon svg-icon-sm svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                                class="fs-6 fw-bolder text-hover-primary text-gray-800 mb-2">How to
                                                Create Your First Project with Start Admin Theme</a>
                                            <div class="fw-bold text-muted">But nothing can prepare you for the real
                                                thing</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex mb-6">
                                        <!--begin::Icon-->
                                        <div class="me-1">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                            <span class="svg-icon svg-icon-sm svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                                class="fs-6 fw-bolder text-hover-primary text-gray-800 mb-2">Start
                                                Admin Theme Getting Started &amp; Installation</a>
                                            <div class="fw-bold text-muted">Long before you sit down to put digital
                                                pen</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex mb-6">
                                        <!--begin::Icon-->
                                        <div class="me-1">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                            <span class="svg-icon svg-icon-sm svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                                class="fs-6 fw-bolder text-hover-primary text-gray-800 mb-2">Craft a
                                                headline that is both informative and will capture</a>
                                            <div class="fw-bold text-muted">But nothing can prepare you for the real
                                                thing</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex mb-6">
                                        <!--begin::Icon-->
                                        <div class="me-1">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                            <span class="svg-icon svg-icon-sm svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                                class="fs-6 fw-bolder text-hover-primary text-gray-800 mb-2">Write
                                                your post, either writing a draft in a single</a>
                                            <div class="fw-bold text-muted">Long before you sit down to put pen</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex mb-6">
                                        <!--begin::Icon-->
                                        <div class="me-1">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                            <span class="svg-icon svg-icon-sm svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                                class="fs-6 fw-bolder text-hover-primary text-gray-800 mb-2">Use
                                                images to enhance your post, improve its flow</a>
                                            <div class="fw-bold text-muted">Long before you sit down to put digital
                                                pen</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::List Widget 5-->
                        </div>
                        <!--end::Tutorials-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Header Search-->
    <!--begin::Mega Menu-->
    <div class="modal bg-white fade" id="kt_mega_menu_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content shadow-none">
                <div class="container">
                    <div class="modal-header d-flex flex-stack border-0">
                        <div class="d-flex align-items-center">
                            <!--begin::Logo-->
                            <a href="../dist/index.html">
                                <img alt="Logo" src="{{ asset('img') }}/logo.png" class="h-30px" />
                            </a>
                            <!--end::Logo-->
                        </div>
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-light-primary ms-2" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                        rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <div class="modal-body">
                        <!--begin::Row-->
                        <div class="row py-10 g-5">
                            <!--begin::Column-->
                            <div class="col-lg-12">
                                <h3 class="fw-bolder mb-8">Enlaces directos</h3>
                                <!--begin::Row-->
                                <div class="row g-5">
                                    <div class="col-sm-4">
                                        <a href="#"
                                            class="card bg-light-success hoverable min-h-125px shadow-none mb-5">
                                            <div class="card-body d-flex flex-column flex-center">
                                                <h3 class="fs-3 mb-2 text-dark fw-bolder">Micro Desarrollos</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="#"
                                            class="card bg-light-danger hoverable min-h-125px shadow-none mb-5">
                                            <div class="card-body d-flex flex-column flex-center text-center">
                                                <h3 class="fs-3 mb-2 text-dark fw-bolder">CV</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="#"
                                            class="card bg-light-warning hoverable min-h-125px shadow-none mb-5">
                                            <div class="card-body d-flex flex-column flex-center text-center">
                                                <h3 class="fs-3 mb-2 text-dark text-hover-primary fw-bolder">APIs</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-5">
                                    <div class="col-sm-8">
                                        <a href="#"
                                            class="card bg-light-primary hoverable min-h-125px shadow-none mb-5">
                                            <div class="card-body d-flex flex-column flex-center text-center">
                                                <h3 class="fs-3 mb-2 text-dark fw-bolder">Blog</h3>
                                            </div>
                                            <div class="min-h-125px bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom card-rounded-bottom"
                                                style="background-image:url('{{ asset('img/manager') }}/illustrations/sigma-1/2.png')">
                                            </div>
                                        </a>
                                        <!--begin::Row-->
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="#"
                                            class="card bg-light-info hoverable min-h-125px shadow-none mb-5">
                                            <div class="card-body d-flex flex-column flex-center text-center">
                                                <h3 class="fs-3 mb-2 text-dark text-hover-primary fw-bolder">Contacto
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Column-->
                        </div>
                        <!--end::Row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Mega Menu-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('js/manager') }}/plugins.bundle.js"></script>
    <script src="{{ asset('js/manager') }}/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('js/manager') }}/custom/widgets.js"></script>
    <script src="{{ asset('js/manager') }}/custom/modals/create-app.js"></script>
    <script src="{{ asset('js/manager') }}/custom/modals/select-location.js"></script>
    <script src="{{ asset('js/manager') }}/custom/apps/chat/chat.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
