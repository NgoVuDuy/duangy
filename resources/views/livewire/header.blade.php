<div class="container-fluid header-wrap position-fixed z-3 w-100">
    <div class="header p-2 d-flex justify-content-between">
        {{-- Success is as dangerous as failure. --}}
        <div class="header-logo d-flex align-items-center">
            <img src="{{ asset('images/logo/logo-duangy.png') }}" alt="">
            <span class="header-logo-text">DUANGY</span>
        </div>

        <div class="header-nav d-flex align-items-center column-gap-4">
            <a href="/home" class="nav-item fw-medium d-flex align-items-center column-gap-2" wire:navigate
                wire:current="active">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-house-icon lucide-house">
                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                    <path
                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                </svg>
                Trang chủ</a>
            <a href="/ticket" class="nav-item fw-medium d-flex align-items-center column-gap-2" wire:navigate
                wire:current="active">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-ticket-icon lucide-ticket">
                    <path
                        d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z" />
                    <path d="M13 5v2" />
                    <path d="M13 17v2" />
                    <path d="M13 11v2" />
                </svg>
                Vé xe của tôi</a>
            <a href="/news" class="nav-item fw-medium d-flex align-items-center column-gap-2" wire:navigate
                wire:current="active">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-newspaper-icon lucide-newspaper">
                    <path d="M15 18h-5" />
                    <path d="M18 14h-8" />
                    <path
                        d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0v-9a2 2 0 0 1 2-2h2" />
                    <rect width="8" height="4" x="10" y="6" rx="1" />
                </svg>
                Tin tức</a>
        </div>
        <div class="d-flex align-items-center column-gap-4">

            <div class="hotline-wrap d-flex align-items-center">

                <div class="hotline d-flex align-items-center column-gap-3" data-bs-html="true" data-bs-toggle="popover"
                    data-bs-title="Hotline 24/7" data-bs-placement="bottom"
                    data-bs-content="<span class='light-blue-text'>1900553422</span> - Để đặt vé qua điện thoại <br> <span class='light-blue-text'>1900553368</span> - Để phản hồi về dịch vụ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-phone-icon lucide-phone">
                        <path
                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                    </svg>

                    <div class="text fw-medium">Hotline 24/7</div>
                </div>
            </div>
            <button class="header-login {{ $isShowUserIcon ? 'd-none' : 'd-block' }}" wire:click="setShowLoginForm">Đăng
                nhập</button>
            <a class="link-to-user {{ $isShowUserIcon ? 'd-block' : 'd-none' }}" href="/user" wire:navigate>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-user-icon lucide-user">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                    <circle cx="12" cy="7" r="4" />
                </svg>
            </a>


        </div>
    </div>

    {{-- form đăng nhập đăng ký --}}
    @if ($isShowLoginForm)
        @livewire('login-register-form')
    @endif

    <script>
        if (typeof popoverTriggerList === 'undefined') {
            const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
            [...popoverTriggerList].map(el => new bootstrap.Popover(el));
        }
    </script>
</div>

@script
    <script>
        $(document).ready(function() {


            $wire.on('lg-error', () => {
                Swal.fire({
                    title: "Số điện thoại chưa được dùng để đăng ký tài khoản!",
                    icon: "error",
                    draggable: true
                });
            })
            $wire.on('reg-success', () => {
                Swal.fire({
                    title: "Đăng ký thành công",
                    icon: "success",
                    draggable: true
                });
            })

            $wire.on('reg-error', () => {
                Swal.fire({
                    title: "Số điện thoại đã tồn tại!",
                    icon: "error",
                    draggable: true
                });
            })


        })
    </script>
@endscript
