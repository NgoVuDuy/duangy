<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container user mt-5 mb-5">
        <div class="row justify-content-center">

            <div class="col-3">
                <div class="shadow d-flex flex-column row-gap-3 p-3">
                    <div class="user-information d-flex align-items-center column-gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user-icon lucide-user">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                        <a href="/user" class="fw-medium user-information-nav" wire:current="active" wire:navigate wire:ignore>Thông tin tài khoản</a>
                    </div>
                    <div class="logout d-flex align-items-center column-gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-circle-power-icon lucide-circle-power">
                            <path d="M12 7v4" />
                            <path d="M7.998 9.003a5 5 0 1 0 8-.005" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        <span class="fw-medium" wire:click="logout">Đăng xuất</span>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="shadow p-3">

                    <form wire:submit="save" action="" class="d-flex flex-column row-gap-4 user-form">

                        <div class="">
                            <label for="">Họ và tên</label>
                            <input class="input" type="text" name="" id="" wire:model.live="name">
                        </div>
                        <div class="">
                            <label for="">Số điện thoại</label>
                            <input class="input" type="text" name="" id=""  wire:model.live="phone">
                        </div>
                        <div class="">
                            <label for="">Ngày sinh</label>
                            <input class="input" type="date"  wire:model.live="date">
                        </div>
                        <div class="">
                            <label for="">Giới tính</label>
                            <select class="input" name="" id=""  wire:model.live="gender">
                                <option value="">Chọn giới tính</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Other">Khác</option>
                            </select>
                        </div>

                        <button class="main-btn small-btn w-100">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
