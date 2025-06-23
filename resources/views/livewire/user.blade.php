<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container user mt-5 mb-5">
        <div class="row justify-content-center">

            <div class="col-3">
                @livewire('user-sidebar')
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
                            <input class="input" type="text" name="" id="" wire:model.live="phone">
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

                        <button class="main-btn small-btn w-100">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
