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

                    <div class="{{ $isLogin && empty($tickets) ? 'd-block' : 'd-none' }}">
                        <div class="fw-bold text-center">Bạn chưa đặt vé nào</div>
                    </div>

                    <table class="{{ $isLogin && !empty($tickets) ? 'd-block' : 'd-none' }}">
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
                            {{-- Ở đây --}}
                            @foreach ($tickets as $ticket)
                                {{-- Một trường dữ liệu trong bảng --}}
                                <tr>
                                    <td>
                                        {{ $ticket->id }}
                                    </td>
                                    <td>{{ $ticket->trip->route->start_point }} - {{ $ticket->trip->route->end_point }}
                                    </td>
                                    <td>{{ $ticket->trip->departure_time }} - {{ $ticket->trip->departure_date }}</td>
                                    <td>{{ $ticket->seat->name }}</td>
                                    <td>{{ $ticket->price }}đ</td>
                                    <td class="text-success fw-bold">
                                        {{ $ticket->status == 'pending' ? 'Chưa đi' : 'Đã đi' }}</td>
                                    <td class="text-center"><button class="main-btn tiny-btn" type="button"
                                            data-bs-toggle="offcanvas" data-bs-target="#{{ $ticket->id }}"
                                            aria-controls="offcanvasRight">Chi tiết</button>
                                    </td>
                                </tr>
                                {{-- Phần hiển thị chi tiết vé --}}
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="{{ $ticket->id }}"
                                    aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Thông tin vé</h5>
                                        <button type="button" class="btn-close btn-close-white"
                                            data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>

                                    <div class="offcanvas-body">
                                        <div class="trip-details">

                                            <div class="items">
                                                <span>
                                                    Mã vé
                                                </span>
                                                <span>{{ $ticket->id }}</span>
                                            </div>
                                            <div class="items">
                                                <span>
                                                    Tuyến
                                                </span>
                                                <span>{{ $ticket->trip->route->start_point }} - {{ $ticket->trip->route->end_point }}</span>
                                            </div>
                                            <div class="items">
                                                <span>
                                                    Nhà xe
                                                </span>
                                                <span>{{ $ticket->trip->bus->bus_operator->name }}</span>
                                            </div>
                                            <div class="items">
                                                <span>
                                                    Chuyến
                                                </span>
                                                <span>{{ $ticket->trip->departure_time }} - {{ $ticket->trip->departure_date }}</span>
                                            </div>
                                            <div class="items">
                                                <span>
                                                    Loại xe
                                                </span>
                                                <span>{{ $ticket->trip->bus->bus_type }} - {{ $ticket->trip->bus->total_seat }} chỗ</span>
                                            </div>
                                            <div class="items">
                                                <span>
                                                    Biển số xe
                                                </span>
                                                <span>{{ $ticket->trip->bus->license_plate }}</span>
                                            </div>
                                            <div class="items">
                                                <span>
                                                    Tổng giá
                                                </span>
                                                <span>{{ $ticket->price }}đ</span>
                                            </div>
                                            <div class="items">
                                                <span>
                                                    Ghế ngồi
                                                </span>
                                                <span>{{ $ticket->seat->name }}</span>
                                            </div>
                                            <div class="d-flex flex-column row-gap-4 mt-4">
                                                <div class="address-wrap">
                                                    <div class="d-flex align-items-center column-gap-2 mb-2">

                                                        <svg class="light-blue-text" xmlns="http://www.w3.org/2000/svg"
                                                            width="20" height="20" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-locate-icon lucide-locate">
                                                            <line x1="2" x2="5" y1="12"
                                                                y2="12" />
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
                                                        <span class="fw-medium">{{ $ticket->pickup->name }}</span>
                                                        <span class="address-details">{{ $ticket->pickup->address }}</span>

                                                        <span class="fw-medium mt-1">Dự kiến đón lúc: {{ $ticket->pickup->time }}</span>
                                                    </div>
                                                </div>
                                                <div class="address-wrap">
                                                    <div class="d-flex align-items-center column-gap-2 mb-2">

                                                        <svg class="red-text" xmlns="http://www.w3.org/2000/svg"
                                                            width="20" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-map-pin-icon lucide-map-pin">
                                                            <path
                                                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                                            <circle cx="12" cy="10" r="3" />
                                                        </svg>
                                                        <span class="fw-medium">Điểm trả</span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-medium">{{ $ticket->dropoff->name }}</span>
                                                        <span class="address-details">{{ $ticket->dropoff->address }}</span>
                                                        <span class="fw-medium mt-1">Dự kiến trả lúc: {{ $ticket->dropoff->time }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Phần hiển thị chi tiết vé --}}
    {{-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
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
    </div> --}}
</div>
