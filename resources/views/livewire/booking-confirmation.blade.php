<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="container booking-confirmation mt-5 mb-5">
        <div class="row justify-content-evenly">
            <div class="col-7 ">
                <div class="shadow p-5">
                    <h5>Thông tin liên hệ</h5>
                    <form action="" class="form p-3">
                        <div class="d-flex flex-column row-gap-4">

                            <div class="">

                                <label class="fw-medium" for="name">Họ và Tên</label>
                                <input type="text" name="" id="name" wire:model.live="name">
                            </div>
                            <div class="">

                                <label class="fw-medium" for="phone">Email</label>
                                <input type="text" name="" id="phone" wire:model.live="email">
                            </div>
                            <div class="">

                                <label class="fw-medium" for="phone">Số điện thoại</label>
                                <input type="text" name="" id="phone" wire:model.live="phone">
                            </div>

                            <div class="alert alert-success d-flex align-items-center m-0" role="alert">

                                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-shield-check-icon lucide-shield-check">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                    <path d="m9 12 2 2 4-4" />
                                </svg>
                                <div>
                                    Thông tin vé xe sẽ được gửi về Email của bạn
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
                <button class="confirmation-btn main-btn lg-btn mt-5" wire:click="next_button">
                    Tiếp tục
                </button>
            </div>
            <div class="col-4">
                <div class="shadow p-5 ticket-details">
                    <div class="d-flex justify-content-between">

                        <h5>Thông tin vé</h5>

                        <h5>{{ number_format(array_sum($trip_details['seat_list']) * 1000, 0, ',', '.') }}đ</h5>
                    </div>

                    <div class="d-flex justify-content-between mt-3 ticket-price">

                        <div class="left">
                            <span class="fw-medium">Giá vé</span>
                        </div>
                        <div class="right d-flex flex-column row-gap-2">
                            {{-- Ở đây --}}
                            @foreach ($trip_details['seat_list'] as $index => $seat_list)
                                <div class="items d-flex flex-column">
                                    <span class="fw-medium">{{ $seat_list }}đ</span>
                                    <span class="ticket-number">Mã ghế: {{ $index }}</span>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="shadow p-5 mt-4">

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
                                        <span>{{ $trip_details['routes']['start'] }} -
                                            {{ $trip_details['routes']['end'] }}</span>
                                    </div>
                                    <div class="items">
                                        <span>
                                            Nhà xe
                                        </span>
                                        <span>{{ $trip_details['bus_operator'] }}</span>
                                    </div>
                                    <div class="items">
                                        <span>
                                            Chuyến
                                        </span>
                                        <span>{{ $trip_details['trip']['departure_time'] }} -
                                            {{ $trip_details['trip']['departure_date'] }}</span>
                                    </div>
                                    <div class="items">
                                        <span>
                                            Loại xe
                                        </span>
                                        <span>{{ $trip_details['bus'] }}</span>
                                    </div>
                                    <div class="items">
                                        <span>
                                            Số lượng vé
                                        </span>
                                        <span>{{ count($trip_details['seat_id']) }} vé</span>
                                    </div>
                                    <div class="items">
                                        <span>
                                            Tổng giá
                                        </span>
                                        <span>{{ number_format(array_sum($trip_details['seat_list']) * 1000, 0, ',', '.') }}đ</span>

                                    </div>
                                    <div class="items">
                                        <span>
                                            Ghế ngồi
                                        </span>
                                        <span>
                                            @foreach ($trip_details['seat_list'] as $key => $seat)
                                                <span>{{ $key }} </span>
                                            @endforeach
                                        </span>
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
                                                <span class="fw-medium">{{ $trip_details['pickup']['name'] }}</span>
                                                <span
                                                    class="address-details">{{ $trip_details['pickup']['address'] }}</span>

                                                <span class="fw-medium mt-1">Dự kiến đón lúc:
                                                    {{ $trip_details['pickup']['time'] }},
                                                    {{ $trip_details['trip']['departure_date'] }}</span>
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
                                                <span class="fw-medium">{{ $trip_details['dropoff']['name'] }}</span>
                                                <span
                                                    class="address-details">{{ $trip_details['dropoff']['address'] }}</span>
                                                <span class="fw-medium mt-1">Dự kiến trả lúc:
                                                    {{ $trip_details['dropoff']['time'] }},
                                                    {{ $trip_details['trip']['departure_date'] }}</span>

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
                                    <span class="fw-medium">{{ $trip_details['bus_operator'] }}</span>
                                </div>
                                <div class="bus-name">
                                    <span>{{ $trip_details['bus'] }}</span>
                                </div>
                                <div class="time">
                                    {{ $trip_details['trip']['departure_time'] }} -
                                    {{ $trip_details['trip']['departure_date'] }}
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
                                    <span class="fw-medium">{{ $trip_details['pickup']['name'] }}</span>
                                    <span class="address-details">{{ $trip_details['pickup']['address'] }}</span>
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
                                    <span class="fw-medium">{{ $trip_details['dropoff']['name'] }}</span>
                                    <span class="address-details">{{ $trip_details['dropoff']['address'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
