<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container user mt-5 mb-5">
        <div class="row justify-content-center">

            <div class="col-3">
                @livewire('user-sidebar')
            </div>
            <div class="col-7">
                <div class="shadow p-3">

                    <table>
                        <thead>
                            <tr>

                                <th>Mã vé</th>
                                <th>Tuyến xe</th>
                                <th>Ngày giờ</th>
                                <th>Ghế</th>
                                <th>Giá</th>
                                <th>Trạng thái</th>
                                <th>Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>VD35463</td>
                                <td>Cần Thơ - Cà Mau</td>
                                <td>12/06 - 10h:30</td>
                                <td>A1</td>
                                <td>120.000đ</td>
                                <td class="text-success fw-bold">Chưa đi</td>
                                <td class="text-center"><button class="main-btn tiny-btn" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Chi tiết</button>
                                </td>
                            </tr>

                            <tr>
                                <td>VD35463</td>
                                <td>Cần Thơ - Cà Mau</td>
                                <td>12/06 - 10h:30</td>
                                <td>A1</td>
                                <td>120.000đ</td>
                                <td class="text-danger fw-bold">Đã đi</td>
                                <td class="text-center"><button class="main-btn tiny-btn" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Chi
                                        tiết</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Thông tin vé</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <div class="trip-details">

                <div class="items">
                    <span>
                        Mã vé
                    </span>
                    <span>VD934498</span>
                </div>
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
                        Biển số xe
                    </span>
                    <span>51T - 86033</span>
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
                    <span>A1</span>
                </div>
                <div class="d-flex flex-column row-gap-4 mt-4">
                    <div class="address-wrap">
                        <div class="d-flex align-items-center column-gap-2 mb-2">

                            <svg class="light-blue-text" xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
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
                            <span class="address-details">Ấp Kinh Xáng, Xã Định Thành, Huyện Đông
                                Hải, Tỉnh Bạc Liêu</span>

                            <span class="fw-medium mt-1">Dự kiến đón lúc: 12:00 T5,
                                10/09/2025</span>
                        </div>
                    </div>
                    <div class="address-wrap">
                        <div class="d-flex align-items-center column-gap-2 mb-2">

                            <svg class="red-text" xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
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
