@extends('layouts.app')
@section('main')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Product Form</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">eCommerce</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Catalog</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
                    <div class="m-0">
                        <!--begin::Menu toggle-->
                        <a href="#"
                            class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Filter
                        </a>
                        <!--end::Menu toggle-->
                    </div>
                    <!--end::Filter menu-->
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_create_app">Create</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Form-->
                <form class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data" method="post"
                    action="{{ route('product.store')}}">
                    @CSRF
                    <input type="hidden" name="u_id" value="{{Auth::user()->id}}" />
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <!--begin:::Tabs-->
                        <!--end:::Tabs-->
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                                role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <!--begin::General options-->
                                    <div class="card card-flush py-4">
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="col-md-12 row">
                                                <div class="mb-3 col-md-6 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Product Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="product_name"
                                                        class="form-control mb-2 @error('product_name') is-invalid @enderror"
                                                        placeholder="Product name" value="" />
                                                    @error('product_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Price</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="price"
                                                        class="form-control mb-2 @error('price') is-invalid @enderror"
                                                        placeholder="Product price" value="" />

                                                    @error('price')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 row">
                                                <!--begin::Label-->
                                                <div class="col-md-12">
                                                    <label class="required form-label">Product Images</label>
                                                    <input type="file" name="product_image"
                                                        class="form-control mb-2 @error('product_image') is-invalid @enderror"
                                                        placeholder="Product name" value="" />
                                                    @error('product_image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="required form-label">Quantity</label>
                                                    <input type="number" name="quanty"
                                                        class="form-control @error('quanty') is-invalid @enderror"
                                                        placeholder="Product quantity" value="" />
                                                    <!--end::Input-->
                                                    @error('quanty')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Quantity Type</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select name="quantity_type" id="quantity_type"
                                                        class="form-select @error('quantity_type') is-invalid @enderror"
                                                        data-control="select2">
                                                        <option value="">Select Type</option>
                                                        <option value="ml">ML</option>
                                                        <option value="mm">MM</option>
                                                        <option value="ltr">Ltr</option>
                                                    </select>
                                                    <!--end::Input-->
                                                    @error('quantity_type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 row">
                                                <div class="col-md-6">
                                                    <label class="required form-label">Categories</label>
                                                    <!--end::Label-->
                                                    <!--begin::Select2-->
                                                    <select class="form-select mb-2" data-control="select2"
                                                        name="cart_id">
                                                        @foreach ($categorys as $key=> $category)
                                                        <option value="{{$key}}">{{$category}}</option>
                                                        @endforeach
                                                    </select>
                                                    <a href="{{route('category.create')}}"
                                                        class="btn btn-light-primary btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="11" y="18" width="12" height="2"
                                                                    rx="1" transform="rotate(-90 11 18)"
                                                                    fill="currentColor" />
                                                                <rect x="6" y="11" width="12" height="2" rx="1"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        Category
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="required form-label">Brand</label>
                                                    <!--end::Label-->
                                                    <!--begin::Select2-->
                                                    <select class="form-select mb-2" name="b_id" data-control="select2"
                                                        data-placeholder="Select an option" data-allow-clear="true">
                                                        @foreach ($brands as $key=> $brand)
                                                        <option value="{{$key}}">{{$brand}}</option>
                                                        @endforeach
                                                    </select>
                                                    <a href="{{route('brand.create')}}"
                                                        class="btn btn-light-primary btn-sm mb-10">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="11" y="18" width="12" height="2"
                                                                    rx="1" transform="rotate(-90 11 18)"
                                                                    fill="currentColor" />
                                                                <rect x="6" y="11" width="12" height="2" rx="1"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Brand
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <!--begin::Button-->
                                                <a href="../../demo1/dist/apps/ecommerce/catalog/products.html"
                                                    id="kt_ecommerce_add_product_cancel"
                                                    class="btn btn-light me-5">Cancel</a>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="submit" id="kt_ecommerce_add_product_submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">Save Changes</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Main column-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    <div id="kt_app_footer" class="app-footer">
        <!--begin::Footer container-->
        <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-muted fw-semibold me-1">2022©</span>
                <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                <li class="menu-item">
                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                </li>
                <li class="menu-item">
                    <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                </li>
                <li class="menu-item">
                    <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                </li>
            </ul>
            <!--end::Menu-->
        </div>
        <!--end::Footer container-->
    </div>
    <!--end::Footer-->
</div>
@endsection