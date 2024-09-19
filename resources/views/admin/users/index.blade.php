@extends('layouts.app')
@section('main')
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
        <!--begin::Page title-->
        @include('layouts.breadcrub')
        <!--end::Page title-->
    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Products-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                    transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-ecommerce-product-filter="search"
                            class="form-control form-control-solid w-250px ps-14" placeholder="Search Product" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                        data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                        value="1" />
                                </div>
                            </th>
                            <th class="min-w-20px">Customer Name</th>
                            <th class="min-w-20px">State Name</th>
                            <th class="min-w-20px">City Name</th>
                            <th class="text-end min-w-100px">Email</th>
                            <th class="text-end min-w-100px">Phone</th>
                            <th class="text-end min-w-100px">Address</th>
                            <th class="text-end min-w-70px">Actions</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-semibold text-gray-600">
                        @forelse($customerList as $customer)
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Category=-->
                            <td>
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                        data-kt-ecommerce-product-filter="product_name">{{$customer->name}}</a>
                                    <!--end::Title-->
                                </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::SKU=-->
                            <td>{{ App\Models\State::find($customer->s_id)->name}}</td>
                            <!--end::SKU=-->
                            <td>{{ App\Models\City::find($customer->c_id)->name}}</td>
                            <!--begin::Qty=-->
                            <td class="text-end pe-0">
                                {{$customer->email}}
                            </td>
                            <!--end::Qty=-->
                            <!--begin::Price=-->
                            <td class="text-end pe-0">
                                {{$customer->phone}}
                            </td>
                            <td>{{ $customer->address}}</td>
                            <!--end::Price=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{route('customers.edit',['customer'=>$customer->id])}}"
                                            class="menu-link px-3">Edit Profile</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="{{route('customers.show',['customer'=>$customer->id])}}"
                                            class="menu-link px-3">View Profile</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-ecommerce-product-filter="delete_row">Delete Profile</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        @empty
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                        </tr>
                        @endforelse
                        <!--end::Table row-->
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->
</div>
<!--end::Content container-->
<!--end::Content-->
@endsection