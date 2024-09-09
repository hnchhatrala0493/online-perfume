@extends('auth.auth_layouts.app_auth')
@section('content')
<div class="py-20">
<!--begin::Form-->
<form class="form w-100" method="post" action="{{ route('register') }}">
    @csrf
    <!--begin::Heading-->
    <div class="text-start mb-10">
        <!--begin::Title-->
        <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-up-title">Create an Account</h1>
        <!--end::Title-->
        <!--begin::Text-->
        <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Get unlimited access &amp; earn money</div>
        <!--end::Link-->
    </div>
    <!--end::Heading-->
    <!--begin::Input group-->
    <div class="row fv-row mb-7">
        <!--begin::Col-->
        <div class="col-xl-6">
            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="First Name" name="name" autocomplete="off" data-kt-translate="sign-up-input-first-name" />
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <input class="form-control form-control-lg form-control-solid" type="email" placeholder="Email" name="email" autocomplete="off" data-kt-translate="sign-up-input-email" />
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="fv-row mb-10" data-kt-password-meter="true">
        <!--begin::Wrapper-->
        <div class="mb-1">
            <!--begin::Input wrapper-->
            <div class="position-relative mb-3">
                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Password" name="password" autocomplete="off" data-kt-translate="sign-up-input-password" />
                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                    <i class="bi bi-eye-slash fs-2"></i>
                    <i class="bi bi-eye fs-2 d-none"></i>
                </span>
            </div>
            <!--end::Input wrapper-->
            <!--begin::Meter-->
            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
            </div>
            <!--end::Meter-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Hint-->
        <div class="text-muted" data-kt-translate="sign-up-hint">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
        <!--end::Hint-->
    </div>
    <!--end::Input group=-->
    <!--begin::Input group-->
    
    <!--end::Input group-->
    <!--begin::Actions-->
    <div class="d-flex flex-stack">
        <!--begin::Submit-->
        <button type="submit" class="btn btn-primary">
            <!--begin::Indicator label-->
            <span class="indicator-label">Submit</span>
            <!--end::Indicator label-->
            <!--begin::Indicator progress-->
            <span class="indicator-progress">Please wait...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            <!--end::Indicator progress-->
        </button>
        <!--end::Submit-->
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->
</div>
@endsection
                        
