<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="shadow d-flex flex-column row-gap-3 p-3">
        <div class="user-information d-flex align-items-center column-gap-3">
            <a href="/user" class="fw-medium user-information-nav d-flex align-items-center column-gap-3" wire:current="active" wire:navigate wire:ignore>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-user-icon lucide-user">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                    <circle cx="12" cy="7" r="4" />
                </svg>
                <span>Thông tin tài khoản</span>
            </a>
        </div>
        <div class="my-ticket d-flex align-items-center column-gap-3">
            <a href="/ticket" class="fw-medium user-ticket-nav d-flex align-items-center column-gap-3" wire:current="active" wire:navigate wire:ignore>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-ticket-icon lucide-ticket">
                    <path
                        d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z" />
                    <path d="M13 5v2" />
                    <path d="M13 17v2" />
                    <path d="M13 11v2" />
                </svg>
                <span>Vé của tôi</span>
            </a>
        </div>
        <div class="logout d-flex align-items-center column-gap-3 {{ $isLogin ? 'd-flex' : 'd-none' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-circle-power-icon lucide-circle-power">
                <path d="M12 7v4" />
                <path d="M7.998 9.003a5 5 0 1 0 8-.005" />
                <circle cx="12" cy="12" r="10" />
            </svg>
            <span class="fw-medium user-logout" wire:click="logout">Đăng xuất</span>
        </div>
    </div>
</div>
