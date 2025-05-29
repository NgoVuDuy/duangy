<div class="container-fluid header-wrap">
    <div class="header p-2 d-flex justify-content-between">
        {{-- Success is as dangerous as failure. --}}
        <div class="header-logo d-flex align-items-center">
            <img src="{{ asset('images/logo/logo-duangy.png') }}" alt="">
            <span class="header-logo-text">DUANGY</span>
        </div>

        <div class="header-nav d-flex align-items-center column-gap-4">
            <a href="/home" class="nav-item fw-medium" wire:navigate wire:current="active">Trang chủ</a>
            <a href="/my-ticket" class="nav-item fw-medium" wire:navigate wire:current="active">Vé xe của tôi</a>
            <a href="/news" class="nav-item fw-medium" wire:navigate wire:current="active">Tin tức</a>
            <a href="/user" class="nav-item fw-medium" wire:navigate wire:current="active">Tài khoản</a>
        </div>
        <div class="hotline-wrap d-flex align-items-center">

            <div class="hotline d-flex align-items-center column-gap-3" data-bs-html="true" data-bs-toggle="popover"
                data-bs-title="Hotline 24/7" data-bs-placement="bottom"
                data-bs-content="<span class='light-blue-text'>1900553422</span> - Để đặt vé qua điện thoại <br> <span class='light-blue-text'>1900553368</span> - Để phản hồi về dịch vụ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-phone-icon lucide-phone">
                    <path
                        d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                </svg>

                <div class="text fw-medium">Hotline 24/7</div>
            </div>
        </div>
    </div>
    <script>
        if (typeof popoverTriggerList === 'undefined') {
            const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
            [...popoverTriggerList].map(el => new bootstrap.Popover(el));
        }
    </script>
</div>
