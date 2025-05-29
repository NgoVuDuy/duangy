<div class="form-search-wrap">
    <form wire:submit="trip_search" class="form-search d-flex column-gap-5 align-items-center">
        <div class="start-point d-flex flex-column row-gap-2">
            <label for="">
                Nơi xuất phát
            </label>
            <div class="d-flex align-items-center">
                <svg class="light-blue-text" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-locate-icon lucide-locate">
                    <line x1="2" x2="5" y1="12" y2="12" />
                    <line x1="19" x2="22" y1="12" y2="12" />
                    <line x1="12" x2="12" y1="2" y2="5" />
                    <line x1="12" x2="12" y1="19" y2="22" />
                    <circle cx="12" cy="12" r="7" />
                </svg>
                <input class="main-input" type="text" name="" id=""
                    placeholder="Nhập nơi xuất phát">
            </div>
        </div>

        <div class="end-point d-flex flex-column row-gap-2">
            <label for="">Nơi đến</label>
            <div class="d-flex align-items-center">
                <svg class="red-text" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin">
                    <path
                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                    <circle cx="12" cy="10" r="3" />
                </svg>
                <input class="main-input" type="text" name="" id="" placeholder="Nhập nơi đến">
            </div>
        </div>

        <div class="date-point d-flex flex-column row-gap-2">
            <label for="">Ngày đi</label>
            <input class="main-input" type="date" name="" id="">
        </div>
        <button type="submit" class="main-btn lg-btn hover">Tìm kiếm</button>
    </form>
</div>
