<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column mt-lg-4 ps-2 pe-2 ps-lg-7 pe-lg-4" data-kt-drawer="true"
    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-logo flex-shrink-0 d-none d-md-flex flex-center align-items-center" id="kt_app_sidebar_logo">
        <!--begin::Logo-->
        <a href="{{ route('dashboard.index') }}">
            @if (isArabic())
                <img alt="Logo" src="{{ asset('placeholder_images/raqi-logo.svg') }}"
                    class="h-50px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />
            @else
                <img alt="Logo" src="{{ asset('placeholder_images/raqi-logo.svg') }}"
                    class="h-50px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />
            @endif
            @if (isArabic())
                <img alt="Logo" src="{{ asset('placeholder_images/raqi-logo-white.svg') }}"
                    class="h-50px theme-dark-show" />
            @else
                <img alt="Logo" src="{{ asset('placeholder_images/raqi-logo-white.svg') }}"
                    class="h-50px theme-dark-show" />
            @endif
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
            <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                <i class="ki-outline ki-abstract-14 fs-1"></i>
            </div>
        </div>
        <!--end::Aside toggle-->
    </div>
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="hover-scroll-overlay-y my-5" data-kt-scroll="true"
            data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention fw-bold px-6 bg-transparent"
                id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <x-dashboard.aside-item :slug="'/'" :route="route('dashboard.index')" :title="__('Dashboard')">
                    <i class="ki-outline ki-category fs-2"></i>
                </x-dashboard.aside-item>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                @can('view_booking')
                    <x-dashboard.aside-item :slug="'Booking'" :route="route('dashboard.booking.index')" :title="__('Booking')">
                        <i class="ki-outline ki-book fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @can('view_blogs')
                    <x-dashboard.aside-item :slug="'blogs'" :route="route('dashboard.blogs.index')" :title="__('Blogs')">
                        <i class="ki-outline ki-abstract-29 fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan


                <!--end:Menu item-->

                @can('view_CommonQuestion')
                    <x-dashboard.aside-item :slug="'CommonQuestion'" :route="route('dashboard.CommonQuestion.index')" :title="__('Common Question')">
                        <i class="ki-outline ki-question fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan

                <!--begin:Menu item-->
                @can('view_categories')
                    <x-dashboard.aside-item :slug="'categories'" :route="route('dashboard.categories.index', ['type' => 'parent'])" :title="__('Categories')">
                        <i class="ki-outline ki-chart-pie-3 fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->

                @can('view_brands')
                    <x-dashboard.aside-item :slug="'brands'" :route="route('dashboard.brands.index')" :title="__('Brands')">
                        <i class="ki-outline ki-text-bold fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan

                @can('view_colors')
                    <x-dashboard.aside-item :slug="'skin-colors'" :route="route('dashboard.skin-colors.index')" :title="__('Skin Colors')">
                        <i class="ki-outline ki-color-swatch fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan



                @can('view_cars')
                    <x-dashboard.aside-item :slug="'cars'" :route="route('dashboard.cars.index')" :title="__('cars')">
                        <i class="ki-outline ki-car-2 fs-1"></i>
                    </x-dashboard.aside-item>
                @endcan

                @can('view_carPrices')
                    <x-dashboard.aside-item :slug="'car_prices'" :route="route('dashboard.car_prices.index')" :title="__('car prices')">
                        <i class="ki-outline ki-car-3 fs-1"></i>
                    </x-dashboard.aside-item>
                @endcan
                {{-- @can('view_products')
                    <x-dashboard.aside-item :slug="'products'" :route="route('dashboard.products.index')" :title="__('Products')">
                        <i class="ki-outline ki-delivery-2 fs-1"></i>
                    </x-dashboard.aside-item>
                @endcan --}}

                <!--begin:Menu item-->
                @can('view_cities')
                    <x-dashboard.aside-item :slug="'cities'" :route="route('dashboard.cities.index')" :title="__('Cities')">
                        <i class="ki-outline ki-map fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->

                <!--begin:Menu item-->
                @can('view_customers')
                    <x-dashboard.aside-item :slug="'customers'" :route="route('dashboard.customers.index')" :title="__('Customers')">
                        <i class="ki-outline ki-people fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @can('view_customersRate')
                    <x-dashboard.aside-item :slug="'customers_rates'" :route="route('dashboard.customers_rates.index')" :title="__('Customers Rates')">
                        <i class="ki-outline ki-chart-line fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                @can('view_packages')

                    <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                        <!--begin:Menu link-->
                        <span class="menu-link bg-transparent ">
                            <span class="menu-icon text-black">
                                <i class="ki-outline ki-data fs-2 text-black"></i>
                            </span>
                            <span class="menu-title text-black">{{ __('Books Data') }}</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion" style="display: none; overflow: hidden;">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->

                                @can('view_packageCategories')
                                    <x-dashboard.aside-item :slug="'packageCategories'" :route="route('dashboard.packageCategories.index')" :title="__('Packages Categories')">
                                        <i class="ki-outline ki-chart fs-2"></i>
                                    </x-dashboard.aside-item>
                                @endcan

                                <!--end:Menu link-->
                                <!--begin:Menu link-->

                                @can('view_packages')
                                    <x-dashboard.aside-item :slug="'packages'" :route="route('dashboard.packages.index')" :title="__('Packages')">
                                        <i class="ki-outline ki-package fs-2"></i>
                                    </x-dashboard.aside-item>
                                @endcan

                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->


                        </div>
                        <!--end:Menu sub-->
                    </div>
                @endcan




                {{-- <hr>

                <!--begin:Menu item-->
                @can('view_vendors')
                    <x-dashboard.aside-item :slug="'vendors'" :route="route('dashboard.vendors.index')" :title="__('Vendors')">
                        <i class="ki-outline ki-courier fs-1"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <!--begin:Menu item-->

                <!--end:Menu item-->

                <!--begin:Menu item-->
                @can('view_design_types')
                    <x-dashboard.aside-item :slug="'design-types'" :route="route('dashboard.design-types.index')" :title="__('Design Types')">
                        <i class="ki-outline ki-data fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @can('view_contact_requests')
                    <x-dashboard.aside-item :slug="'contact-requests'" :route="route('dashboard.contact-requests.index')" :title="__('Contact Requests')">
                        <i class="ki-outline ki-loading fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @can('view_tags')
                    <x-dashboard.aside-item :slug="'tags'" :route="route('dashboard.tags.index')" :title="__('Tags')">
                        <i class="ki-outline ki-key fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->

                <!--begin:Menu item-->
                @can('view_fast_cities')
                    <x-dashboard.aside-item :slug="'fast-shipping-city'" :route="route('dashboard.fast-shipping-city.index')" :title="__('Fast shipping cities')">
                        <i class="ki-outline ki-courier-express fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <!--begin:Menu item-->

                <!--end:Menu item-->

                <!--begin:Menu item-->
                @can('view_sliders')
                    <x-dashboard.aside-item :slug="'sliders'" :route="route('dashboard.sliders.index')" :title="__('Sliders')">
                        <i class="ki-outline ki-slider-horizontal-2 fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @can('view_offers')
                    <x-dashboard.aside-item :slug="'offers'" :route="route('dashboard.offers.index')" :title="__('Offers')">
                        <i class="ki-outline ki-discount fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <!--begin:Menu item-->

                <!--end:Menu item-->
                <!--begin:Menu item-->
                @can('view_orders')
                    <x-dashboard.aside-item :slug="'orders'" :route="route('dashboard.orders.index')" :title="__('Orders')">
                        <i class="ki-outline ki-parcel fs-1"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @can('view_orders')
                    <x-dashboard.aside-item :slug="'refund-cancel-orders'" :route="route('dashboard.refund-cancel-orders.index')" :title="__('Refund and cancellation orders')">
                        <i class="ki-outline ki-parcel fs-1"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @can('view_order_reasons')
                    <x-dashboard.aside-item :slug="'order-reasons'" :route="route('dashboard.order-reasons.index')" :title="__('Order Reasons')">
                        <i class="ki-outline ki-subtitle fs-1"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @can('view_newsletter')
                    <x-dashboard.aside-item :slug="'newsletter'" :route="route('dashboard.newsletter.index')" :title="__('Newsletter')">
                        <i class="ki-outline ki-book-square fs-1"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <hr> --}}
                <!--begin:Menu item-->
                @can('view_ads')
                    <x-dashboard.aside-item :slug="'ads'" :route="route('dashboard.ads.index')" :title="__('Ads')">
                        <i class="ki-outline ki-medal-star fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @can('view_admins')
                    <x-dashboard.aside-item :slug="'admins'" :route="route('dashboard.admins.index')" :title="__('Admins')">
                        <i class="ki-outline ki-security-user fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @can('view_roles')
                    <x-dashboard.aside-item :slug="'settings'" :route="route('dashboard.settings.roles.index')" :title="__('Settings')">
                        <i class="ki-outline ki-rescue fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @can('view_recycle_bin')
                    <x-dashboard.aside-item :slug="'trash'" :route="route('dashboard.trash')" :title="__('Recycle Bin')">
                        <i class="ki-outline ki-trash fs-2"></i>
                    </x-dashboard.aside-item>
                @endcan
                <!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
    <!--begin::Footer-->
    <div class="app-sidebar-footer d-flex align-items-center px-8 pb-10" id="kt_app_sidebar_footer">
        <!--begin::User-->
        <div class="">
            <!--begin::User info-->
            <div class="d-flex align-items-center" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                data-kt-menu-overflow="true" data-kt-menu-placement="{{ isArabic() ? 'top-end' : 'top-start' }}">

                <div class="d-flex flex-center cursor-pointer symbol symbol-circle symbol-40px">
                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                        <div class="symbol-label fs-2 fw-semibold text-primary">
                            {{ substr(auth()->user()->name, 0, 2) }}
                        </div>
                    </div>
                </div>
                <!--begin::Name-->
                <div class="d-flex flex-column align-items-start justify-content-center ms-3">
                    <span class="text-gray-500 fs-8 fw-semibold">{{ __('Hello') }}</span>
                    <a href="#"
                        class="text-gray-800 fs-7 fw-bold text-hover-primary">{{ auth()->user()->name }}</a>
                </div>
                <!--end::Name-->
            </div>
            <!--end::User info-->
            <!--begin::User account menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                data-kt-menu="true">
                <div class="menu-item px-5 my-1">
                    <a href="{{ route('dashboard.profile-info') }}" class="menu-link px-5">{{ __('Profile') }}</a>
                </div>
                <!--begin::Menu item-->
                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                    <a href="#" class="menu-link px-5">
                        <span class="menu-title position-relative">{{ __('Mode') }}
                            <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                <i class="ki-outline ki-night-day theme-light-show fs-2"></i>
                                <i class="ki-outline ki-moon theme-dark-show fs-2"></i>
                            </span></span>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                data-kt-value="light">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-outline ki-night-day fs-2"></i>
                                </span>
                                <span class="menu-title">{{ __('Light') }}</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                data-kt-value="dark">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-outline ki-moon fs-2"></i>
                                </span>
                                <span class="menu-title">{{ __('Dark') }}</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                data-kt-value="system">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-outline ki-screen fs-2"></i>
                                </span>
                                <span class="menu-title">{{ __('System') }}</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-placement="right-end" data-kt-menu-offset="-15px, 0">
                    <a href="{{ route('dashboard.change-language', 'en') }}" class="menu-link px-5">
                        <span class="menu-title position-relative">
                            {{ __('Language') }}
                            @if (isArabic())
                                <span
                                    class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                    {{ __('Arabic') }}
                                    <img class="w-15px h-15px rounded-1 ms-2"
                                        src="{{ asset('assets/dashboard/media/flags/saudi-arabia.svg') }}"
                                        alt="" />
                                </span>
                            @else
                                <span
                                    class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                    {{ __('English') }}
                                    <img class="w-15px h-15px rounded-1 ms-2"
                                        src="{{ asset('assets/dashboard/media/flags/united-states.svg') }}"
                                        alt="" />
                                </span>
                            @endif
                        </span>
                    </a>
                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{ route('dashboard.change-language', 'en') }}"
                                class="menu-link d-flex px-5 @if (!isArabic()) active @endif">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1"
                                        src="{{ asset('assets/dashboard/media/flags/united-states.svg') }}"
                                        alt="" />
                                </span>
                                {{ __('English') }}
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{ route('dashboard.change-language', 'ar') }}"
                                class="menu-link d-flex px-5 @if (isArabic()) active @endif">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1"
                                        src="{{ asset('assets/dashboard/media/flags/saudi-arabia.svg') }}"
                                        alt="" />
                                </span>
                                {{ __('Arabic') }}
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <form id="logout-form" method="post" action="{{ route('admin.logout') }}">
                        @csrf
                        <a href="javascript:" onclick="$('#logout-form').submit()"
                            class="menu-link px-5">{{ __('Sign Out') }}</a>
                    </form>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::User account menu-->
        </div>
        <!--end::User-->
    </div>
    <!--end::Footer-->
</div>
<!--end::Sidebar-->
