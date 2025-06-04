<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="container mt-5 mb-5 payment booking-confirmation">
        <div class="row">
            <div class="col-5">
                <div class="shadow p-5">

                    <h5 class="mb-4">
                        Phương thức thanh toán
                    </h5>
                    <div class="d-flex flex-column row-gap-4">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                            <label class="form-check-label" for="radioDefault1">

                                <div class="">

                                    <img src="{{ asset('images/logo/vnpay-logo.jpg') }}" alt="" width="70px"
                                        height="70px">
                                    <span class="fw-medium">

                                        VNPay - Chuyển khoản thẻ ATM nội địa
                                    </span>

                                </div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2"
                                checked>
                            <label class="form-check-label" for="radioDefault2">
                                <span class="fw-medium">

                                    Thanh toán khi lên xe
                                </span>
                            </label>
                        </div>

                    </div>
                </div>

                <button class="w-100 main-btn lg-btn mt-5">
                    Tiếp tục
                </button>
            </div>

            <div class="col-3">
                <div class="shadow p-3 ticket-details">
                    <div class="d-flex justify-content-between">

                        <h5>Thông tin vé</h5>

                        <h5>240.000đ</h5>
                    </div>

                    <div class="d-flex justify-content-between mt-3 ticket-price">

                        <div class="left">
                            <span class="fw-medium">Giá vé</span>
                        </div>
                        <div class="right d-flex flex-column row-gap-2">
                            <div class="items d-flex flex-column">
                                <span class="fw-medium">140.000đ x1</span>
                                <span class="ticket-number">Mã ghế: A1</span>
                            </div>
                            <div class="items d-flex flex-column">
                                <span class="fw-medium">100.000đ x1</span>
                                <span class="ticket-number">Mã ghế: A2</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shadow p-3 ticket-details mt-4">
                    <div class="d-flex justify-content-between">

                        <h5>Thông tin người đặt</h5>

                    </div>

                    <div class="mt-3 ticket-price">

                        <div class="d-flex flex-column row-gap-3">
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    Khách hàng
                                </div>
                                <div class="fw-medium">Ngô Vũ Duy</div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="">
                                    Số điện thoại
                                </div>
                                <div class="fw-medium">0957422058</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="shadow p-5">

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <h5>Thông tin chuyến đi</h5>
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Chi tiết</button>

                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel">Thông tin chuyến đi</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>

                            <div class="offcanvas-body">
                                <div class="trip-details">

                                    <div class="items">
                                        <span>
                                            Tuyến
                                        </span>
                                        <span>Bạc Liêu - Cần Thơ</span>
                                    </div>
                                    <div class="items">
                                        <span>
                                            Nhà xe
                                        </span>
                                        <span>Dàng Limousine</span>
                                    </div>
                                    <div class="items">
                                        <span>
                                            Chuyến
                                        </span>
                                        <span>18: 00 T5 - 19/01/2025</span>
                                    </div>
                                    <div class="items">
                                        <span>
                                            Loại xe
                                        </span>
                                        <span>Limousine 9 chỗ</span>
                                    </div>
                                    <div class="items">
                                        <span>
                                            Số lượng vé
                                        </span>
                                        <span>2 vé</span>
                                    </div>
                                    <div class="items">
                                        <span>
                                            Tổng giá
                                        </span>
                                        <span>240.000đ</span>
                                    </div>
                                    <div class="items">
                                        <span>
                                            Ghế ngồi
                                        </span>
                                        <span>A1, A2</span>
                                    </div>
                                    <div class="d-flex flex-column row-gap-4 mt-4">
                                        <div class="address-wrap">
                                            <div class="d-flex align-items-center column-gap-2 mb-2">

                                                <svg class="light-blue-text" xmlns="http://www.w3.org/2000/svg"
                                                    width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-locate-icon lucide-locate">
                                                    <line x1="2" x2="5" y1="12" y2="12" />
                                                    <line x1="19" x2="22" y1="12"
                                                        y2="12" />
                                                    <line x1="12" x2="12" y1="2"
                                                        y2="5" />
                                                    <line x1="12" x2="12" y1="19"
                                                        y2="22" />
                                                    <circle cx="12" cy="12" r="7" />
                                                </svg>
                                                <span class="fw-medium">Điểm đón</span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="fw-medium">Ninh Kiều, Cần Thơ</span>
                                                <span class="address-details">Ấp Kinh Xáng, Xã Định Thành, Huyện Đông
                                                    Hải, Tỉnh Bạc Liêu</span>

                                                <span class="fw-medium mt-1">Dự kiến đón lúc: 12:00 T5,
                                                    10/09/2025</span>
                                            </div>
                                        </div>
                                        <div class="address-wrap">
                                            <div class="d-flex align-items-center column-gap-2 mb-2">

                                                <svg class="red-text" xmlns="http://www.w3.org/2000/svg"
                                                    width="20" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-map-pin-icon lucide-map-pin">
                                                    <path
                                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                                    <circle cx="12" cy="10" r="3" />
                                                </svg>
                                                <span class="fw-medium">Điểm trả</span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="fw-medium">Ninh Kiều, Cần Thơ</span>
                                                <span class="address-details">Ấp Kinh Xáng, Xã Định Thành, Huyện Đông
                                                    Hải, Tỉnh Bạc
                                                    Liêu</span>
                                                <span class="fw-medium mt-1">Dự kiến trả lúc: 18:00 T5,
                                                    10/09/2025</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content">

                        <div class="d-flex column-gap-4 align-items-center">
                            <div class="left">

                                <img src="{{ asset('images/bus.jpeg') }}" alt="">
                            </div>
                            <div class="right bus-operator">

                                <div class="name">
                                    <span class="fw-medium">Dàng Limousine</span>
                                </div>
                                <div class="bus-name">
                                    <span>Limousine 9 chỗ</span>
                                </div>
                                <div class="time">
                                    T5, 10/09/2025
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-column row-gap-4">
                            <div class="address-wrap">
                                <div class="d-flex align-items-center column-gap-2 mb-2">

                                    <svg class="light-blue-text" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-locate-icon lucide-locate">
                                        <line x1="2" x2="5" y1="12" y2="12" />
                                        <line x1="19" x2="22" y1="12" y2="12" />
                                        <line x1="12" x2="12" y1="2" y2="5" />
                                        <line x1="12" x2="12" y1="19" y2="22" />
                                        <circle cx="12" cy="12" r="7" />
                                    </svg>
                                    <span class="fw-medium">Điểm đón</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fw-medium">Ninh Kiều, Cần Thơ</span>
                                    <span class="address-details">Ấp Kinh Xáng, Xã Định Thành, Huyện Đông Hải, Tỉnh Bạc
                                        Liêu</span>
                                </div>
                            </div>
                            <div class="address-wrap">
                                <div class="d-flex align-items-center column-gap-2 mb-2">

                                    <svg class="red-text" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-map-pin-icon lucide-map-pin">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                    <span class="fw-medium">Điểm trả</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fw-medium">Ninh Kiều, Cần Thơ</span>
                                    <span class="address-details">Ấp Kinh Xáng, Xã Định Thành, Huyện Đông Hải, Tỉnh Bạc
                                        Liêu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
