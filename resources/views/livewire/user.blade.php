<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container user mt-5 mb-5">
        <div class="row justify-content-center">

            <div class="col-3">
                @livewire('user-sidebar')
            </div>
            <div class="col-7">
                <div class="shadow p-3">

                    <div class="{{ $isLogin ? 'd-none' : 'd-block' }}">
                        <div class="fw-bold text-center">Vui lòng đăng nhập</div>
                    </div>
                    <div class="{{ $isLogin ? 'd-block' : 'd-none' }}">

                        <form wire:submit="save" action="" class="d-flex flex-column row-gap-4 user-form">

                            <div class="">
                                <label for="">Họ và tên</label>
                                <input class="input" type="text" name="" id=""
                                    wire:model.live="name">
                            </div>
                            <div class="">
                                <label for="">Email</label>
                                <input class="input" type="text" name="" id=""
                                    wire:model.live="email">
                            </div>
                            <div class="">
                                <label for="">Số điện thoại</label>
                                <input class="input" type="text" name="" id=""
                                    wire:model.live="phone">
                            </div>
                            <div class="">
                                <label for="">Ngày sinh</label>
                                <input class="input" type="date" wire:model.live="date">
                            </div>
                            <div class="">
                                <label for="">Giới tính</label>
                                <select class="input" name="" id="" wire:model.live="gender">
                                    <option value="">Chọn giới tính</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                    <option value="Other">Khác</option>
                                </select>
                            </div>
                            <div class="d-flex">

                                <label for="">Số dư ví</label>

                                <div class="d-flex align-items-center column-gap-2">

                                    <input class="input" type="text" name="" id=""
                                        wire:model.live="wallet" disabled>
                                        
    
                                    <svg class="{{ $isShowWallet ? '' : 'd-none' }}" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye"
                                        wire:click="showWallet">
                                        <path
                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
    
                                    <svg class="{{ $isShowWallet ? 'd-none' : '' }}" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-eye-off-icon lucide-eye-off"
                                        wire:click="showWallet">
                                        <path
                                            d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575 1 1 0 0 1 0 .696 10.747 10.747 0 0 1-1.444 2.49" />
                                        <path d="M14.084 14.158a3 3 0 0 1-4.242-4.242" />
                                        <path
                                            d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151 1 1 0 0 1 0-.696 10.75 10.75 0 0 1 4.446-5.143" />
                                        <path d="m2 2 20 20" />
                                    </svg>
                                </div>
                            </div>

                            <button class="main-btn small-btn w-100">Lưu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
