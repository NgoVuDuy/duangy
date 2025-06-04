<div class="z-3 position-absolute end-0 header-form-wrap">
    {{-- <div class="d-flex justify-content-end p-3">

        <button type="button" class="btn-close" aria-label="Close" wire:click="close_header_form"></button>
    </div> --}}

    {{-- Success is as dangerous as failure. --}}
    <form action="" class="p-4 login-form {{ $isShowLogin ? 'd-block' : 'd-none' }}">

        <h4 class="text-center">Đăng nhập</h4>

        <p class="text-center mt-3">Bạn chưa có tài khoản <span class="light-blue-text fw-medium ms-2 to-other" wire:click="setShowOther">Đăng
                ký</span></p>

        <div class="d-flex flex-column row-gap-4 mt-5">

            <div class="">

                <label for="login-phone" class="fw-medium me-3">Số điện thoại</label>
                <input id="login-phone" type="text" class="main-input">
            </div>

            <button class="main-btn lg-btn w-100">Đăng nhập</button>
        </div>
    </form>

    <form action="" class="p-4 register-form {{ $isShowRegister ? 'd-block' : 'd-none' }}">
        <h4 class="text-center">Đăng ký</h4>

        <p class="text-center mt-3">Bạn đã có tài khoản <span class="light-blue-text fw-medium ms-2 to-other" wire:click="setShowOther">Đăng
                nhập</span>
        </p>

        <div class="d-flex flex-column row-gap-4 mt-5">

            <div class="">

                <label for="register-form" class="fw-medium me-3">Số điện thoại</label>
                <input id="register-form" type="text" class="main-input">
            </div>

            <button class="main-btn lg-btn w-100">Đăng ký</button>
        </div>
    </form>
</div>
