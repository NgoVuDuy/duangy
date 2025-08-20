<div style="background: #ebebeb">
    {{-- Success is as dangerous as failure. --}}
    <div class="container">

        <div class="trip d-flex justify-content-center">
            <div class="search shadow">

                @livewire('trip-search-form')
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="col-4">
                <div class="filter">
                    <div class="sort-wrap shadow">
                        <h5 class="title">Sắp xếp</h5>
                        <div class="sort d-flex flex-column row-gap-2 mt-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDefault" id="opt1">
                                <label class="form-check-label" for="opt1">
                                    Giờ đi sớm nhất
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDefault" id="opt2"
                                    checked>
                                <label class="form-check-label" for="opt2">
                                    Giờ đi muộn nhất
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDefault" id="opt3"
                                    checked>
                                <label class="form-check-label" for="opt3">
                                    Giá tăng dần
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDefault" id="opt4"
                                    checked>
                                <label class="form-check-label" for="opt4">
                                    Giá giảm dần
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-8">
                <div class="trip-list">
                    <h4 class="result mb-3">Kết quả: <span class="ms-4">{{ count($trips) }} Chuyến</span></h4>
                    <div class="d-flex flex-column row-gap-5">

                        @foreach ($trips as $key => $trip)
                            <div class="item-wrap d-flex flex-column shadow">
                                <div class="item d-flex justify-content-between">
                                    <div class="left d-flex column-gap-4">

                                        <img src="{{ asset('images/' . $trip->bus->image) }}" alt=""
                                            width="200px">
                                        <div class="d-flex flex-column justify-content-between">

                                            <div class="">

                                                <h5 class="bus-operator-name">
                                                    {{ $trip->bus->bus_operator->name }}
                                                </h5>
                                                <div class="bus-name mt-3">

                                                    {{ $trip->bus->bus_type . '  ' . $trip->bus->total_seat }} chỗ
                                                </div>
                                            </div>
                                            <div class="d-flex column-gap-2">

                                                <div class="trip-process-wrap d-flex flex-column align-items-center">
                                                    <svg class="light-blue-text" xmlns="http://www.w3.org/2000/svg"
                                                        width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
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
                                                    <div class="trip-process"></div>
                                                    <svg class="red-text" xmlns="http://www.w3.org/2000/svg"
                                                        width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-map-pin-icon lucide-map-pin">
                                                        <path
                                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                                        <circle cx="12" cy="10" r="3" />
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column justify-content-between">

                                                    <div class="start-point d-flex align-items-center column-gap-3">

                                                        <h4 class="time m-0">
                                                            {{ $trip->departure_time }}
                                                        </h4>
                                                        <div class="address fw-medium">
                                                            {{ $trip->route->start_point }}
                                                        </div>

                                                    </div>
                                                    <div class="end-point d-flex align-items-center column-gap-3">
                                                        <h4 class="time m-0">
                                                            {{ $trip->arrival_time }}
                                                        </h4>
                                                        <div class="address fw-medium">
                                                            {{ $trip->route->end_point }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right d-flex flex-column justify-content-between">

                                        <h5 class="price-ticket">
                                            Từ {{ $trip->price }}đ
                                        </h5>
                                        <div class="">

                                            <div class="seat-empty mb-3">
                                                {{-- <span>{{ $trip->bus->total_seat }} chỗ</span> --}}
                                            </div>
                                            <button class="main-btn small-btn hover trip-show-more-btn">Chọn
                                                chuyến</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="trip-show-more" wire:ignore.self>

                                    <hr>

                                    <div
                                        class="seat-wrap mt-5 ps-5 pe-5 justify-content-between {{ $isShowPoints[$key] ? 'd-none' : 'd-flex' }}">
                                        <div class="left">
                                            <div class="seat-note">
                                                <h6 class="title mb-4">Chú thích</h6>
                                                <div class="note-item-wrap d-flex flex-column row-gap-2">


                                                    <div class="item d-flex align-items-center column-gap-4">
                                                        <svg class="seat-item item1" xmlns="http://www.w3.org/2000/svg"
                                                            width="32" height="32" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="1"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-armchair-icon lucide-armchair">
                                                            <path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3" />
                                                            <path
                                                                d="M3 16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V11a2 2 0 0 0-4 0z" />
                                                            <path d="M5 18v2" />
                                                            <path d="M19 18v2" />
                                                        </svg>
                                                        <div class="">

                                                            <span class="seat-type-text fw-medium">Ghế đang chọn</span>

                                                        </div>

                                                    </div>

                                                    {{-- Ghế có người đặt --}}
                                                    <div class="item d-flex align-items-center column-gap-4">
                                                        <svg class="seat-item seat-booked" xmlns="http://www.w3.org/2000/svg"
                                                            width="32" height="32" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="1"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-armchair-icon lucide-armchair">
                                                            <path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3" />
                                                            <path
                                                                d="M3 16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V11a2 2 0 0 0-4 0z" />
                                                            <path d="M5 18v2" />
                                                            <path d="M19 18v2" />
                                                        </svg>
                                                        <div class="">

                                                            <span class="seat-type-text fw-medium">Ghế đã được đặt</span>

                                                        </div>

                                                    </div>

                                                    @foreach ($trip->bus->bus_seat_types as $i => $bus_seat_type)
                                                        <div class="item d-flex align-items-center column-gap-4">
                                                            <svg class="seat-item item{{ $i + 2 }}"
                                                                xmlns="http://www.w3.org/2000/svg" width="32"
                                                                height="32" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-armchair-icon lucide-armchair">
                                                                <path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3" />
                                                                <path
                                                                    d="M3 16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V11a2 2 0 0 0-4 0z" />
                                                                <path d="M5 18v2" />
                                                                <path d="M19 18v2" />
                                                            </svg>
                                                            <div class="">

                                                                <span
                                                                    class="seat-type-text fw-medium">{{ $bus_seat_type->seat_type->name }}</span>
                                                                <div class="price">
                                                                    {{-- 140.000đ --}}
                                                                    {{ number_format((int) str_replace('.', '', $trip->price) + (int) str_replace('.', '', $bus_seat_type->seat_type->extra_price), 0, '', '.') }}đ

                                                                </div>
                                                            </div>

                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="seat-diagram-wrap">
                                                <h6 class="title mb-4">Sơ đồ ghế</h6>
                                                <div class="seat-diagram d-flex flex-column row-gap-1 {{ $trip->bus->total_seat == 11 ? "wi-100" : "wi-140" }}">


                                                    {{-- ở đây --}}
                                                    @foreach ($trip->bus->bus_seat_types as $i => $bus_seat_type)

                                                        @if ($bus_seat_type->seat_type->name == 'Ghế đầu')
                                                            @php $line = 'line-A'; @endphp
                                                        @elseif ($bus_seat_type->seat_type->name == 'Ghế giữa')
                                                            @php $line = 'line-B'; @endphp
                                                        @else
                                                            @php $line = 'line-C'; @endphp
                                                        @endif



                                                        <div class="line {{ $line }}">

                                                            <div class="">

                                                                @if ($line == 'line-A')
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12.305 24h-.61c-.035-.004-.07-.01-.105-.012a11.783 11.783 0 0 1-2.117-.261 12.027 12.027 0 0 1-6.958-4.394A11.933 11.933 0 0 1 .027 12.78L0 12.411v-.822c.005-.042.013-.084.014-.127a11.845 11.845 0 0 1 1.102-4.508 12.007 12.007 0 0 1 2.847-3.852A11.935 11.935 0 0 1 11.728.003c.947-.022 1.883.07 2.81.27 1.22.265 2.369.71 3.447 1.335a11.991 11.991 0 0 1 3.579 3.164 11.876 11.876 0 0 1 2.073 4.317c.178.712.292 1.434.334 2.168.008.146.02.292.029.439v.609c-.004.03-.011.06-.012.089a11.81 11.81 0 0 1-1.05 4.521 12.02 12.02 0 0 1-1.92 2.979 12.046 12.046 0 0 1-6.395 3.812c-.616.139-1.24.23-1.872.265-.149.008-.297.02-.446.03zm8.799-13.416c-.527-3.976-4.078-7.808-9.1-7.811-5.02-.003-8.583 3.823-9.11 7.809h.09c.64-.035 1.278-.092 1.912-.195.815-.131 1.614-.326 2.378-.639.625-.255 1.239-.54 1.855-.816.82-.368 1.673-.593 2.575-.62a7.123 7.123 0 0 1 1.947.187c.585.146 1.136.382 1.68.634.57.264 1.14.526 1.733.736 1.2.424 2.442.62 3.706.7.11.006.222.01.334.015zm-10.95 10.471v-.094c0-1.437 0-2.873-.002-4.31 0-.141-.011-.284-.035-.423a2.787 2.787 0 0 0-.775-1.495c-.564-.582-1.244-.896-2.067-.892-1.414.007-2.827.002-4.24.002h-.09a9.153 9.153 0 0 0 3.125 5.256 9.15 9.15 0 0 0 4.083 1.956zm3.689.001c1.738-.36 3.25-1.137 4.528-2.355 1.4-1.334 2.287-2.956 2.685-4.855l-.077-.003h-4.362c-.237 0-.47.038-.695.112-.667.22-1.188.635-1.588 1.206a2.673 2.673 0 0 0-.494 1.59c.008 1.4.003 2.801.003 4.202v.103zM12.05 14.22c1.215-.035 2.204-1.083 2.165-2.275-.039-1.223-1.095-2.215-2.29-2.166-1.211.05-2.2 1.108-2.15 2.302.051 1.191 1.108 2.186 2.275 2.139z"
                                                                            fill="#858585"></path>
                                                                    </svg>
                                                                @endif

                                                                {{-- Tính toán xem giá tiền của từng ghế --}}
                                                                @php
                                                                    $seat_price = number_format(
                                                                        (int) str_replace('.', '', $trip->price) +
                                                                            (int) str_replace(
                                                                                '.',
                                                                                '',
                                                                                $bus_seat_type->seat_type->extra_price,
                                                                            ),
                                                                        0,
                                                                        '',
                                                                        '.',
                                                                    );
                                                                @endphp

                                                                @foreach ($bus_seat_type->seats as $i => $seat)

                                                                    <svg  wire:click="setSeat({{ $seat->id }},'{{ $seat->name }}', '{{ $seat_price }}')"
                                                                        wire:ignore class="seat-item {{ $seat->is_booking ? 'seat-booked' : '' }}"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="32" height="32"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="1"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-armchair-icon lucide-armchair">
                                                                        <path
                                                                            d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3" />
                                                                        <path
                                                                            d="M3 16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V11a2 2 0 0 0-4 0z" />
                                                                        <path d="M5 18v2" />
                                                                        <path d="M19 18v2" />
                                                                    </svg>
                                                                @endforeach

                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="points-cover {{ $isShowPoints[$key] ? 'd-flex' : 'd-none' }} column-gap-5">
                                        <div class="row">
                                            <div class="col-6">

                                                <div class="start-points p-3">
                                                    <div class="title">
                                                        <h5>Điểm đón</h5>
                                                    </div>

                                                    <div class="points-wrap d-flex flex-column row-gap-4">

                                                        {{-- <div class="form-check">
        
                                                            <div class="points start">
        
                                                                <input class="form-check-input trans_start_input"
                                                                    type="radio" name="pickup"
                                                                    id="trans_start_input">
        
                                                                <div class="d-flex justify-content-between">
        
                                                                    <label class="form-check-label" for="trans_start_input">
                                                                        <h6 class="fw-medium">Trung chuyển tại Cần Thơ</h6>
                                                                    </label>
        
                                                                    <div class="trans-show-more">
        
                                                                        <svg class="hide" xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-chevron-up-icon lucide-chevron-up">
                                                                            <path d="m18 15-6-6-6 6" />
                                                                        </svg>
        
                                                                        <svg class="show" xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-chevron-down-icon lucide-chevron-down">
                                                                            <path d="m6 9 6 6 6-6" />
                                                                        </svg>
                                                                    </div>
        
                                                                </div>
        
                                                                <div class="trans-start-details">
        
                                                                    <div class="form-wrap mt-4">
        
                                                                        <form action=""
                                                                            class="p-3 d-flex flex-column row-gap-2">
                                                                            <div class="trans-info">
        
                                                                                <div class="time">
                                                                                    <h6 class="fw-medium m-0">19:00</h6>
                                                                                </div>
                                                                                <div class="address">
                                                                                    <span class="fw-medium">Thành phố Cần
                                                                                        Thơ</span>
                                                                                </div>
                                                                                <div class="address-details">
                                                                                    Cần Thơ
        
                                                                                    <textarea name="" id="" cols="30" rows="3" placeholder="Nhập địa chỉ trung chuyển"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        <hr>
                                                                        <form action=""
                                                                            class="p-3 d-flex flex-column row-gap-2">
                                                                            <div class="trans-info">
        
                                                                                <div class="time m-0">
                                                                                    <h6 class="fw-medium">19:20</h6>
                                                                                </div>
                                                                                <div class="address">
                                                                                    <span class="fw-medium">Cần Thơ</span>
                                                                                </div>
                                                                                <div class="address-details">
                                                                                    Cần Thơ
                                                                                </div>
                                                                                <textarea name="" id="" cols="30" rows="3" placeholder="Nhập địa chỉ trung chuyển"></textarea>
                                                                            </div>
        
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        {{-- Vòng lặp điểm đón --}}
                                                        @foreach ($trip->pickup_dropoff_points as $pickup_dropoff_point)
                                                            @if ($pickup_dropoff_point->type == 'pickup')
                                                                <div class="form-check">

                                                                    <div class="points">

                                                                        <input class="form-check-input" type="radio"
                                                                            name="pickup"
                                                                            id="{{ $pickup_dropoff_point->id }}"
                                                                            value="{{ $pickup_dropoff_point->id }}"
                                                                            wire:model.live="pickup_id">
                                                                        <div class="d-flex flex-column row-gap-1">

                                                                            <label class="form-check-label"
                                                                                for="{{ $pickup_dropoff_point->id }}">
                                                                                <h6 class="fw-medium">
                                                                                    {{ $pickup_dropoff_point->time }}
                                                                                </h6>
                                                                            </label>

                                                                            <div class="address">
                                                                                <span
                                                                                    class="fw-medium">{{ $pickup_dropoff_point->name }}</span>
                                                                            </div>
                                                                            <div class="address-details">
                                                                                {{ $pickup_dropoff_point->address }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">

                                                <div class="end-points p-3">
                                                    <div class="title">
                                                        <h5>Điểm trả</h5>
                                                    </div>

                                                    <div class="points-wrap d-flex flex-column row-gap-4">

                                                        {{-- <div class="form-check">
        
                                                            <div class="points end">
        
                                                                <input class="form-check-input trans_start_input"
                                                                    type="radio" name="dropoff"
                                                                    id="trans_start_input" />
        
                                                                <div class="d-flex justify-content-between">
        
                                                                    <label class="form-check-label" for="trans_start_input">
                                                                        <h6 class="fw-medium">Trung chuyển tại Cần Thơ</h6>
                                                                    </label>
        
                                                                    <div class="trans-show-more">
        
                                                                        <svg class="hide" xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-chevron-up-icon lucide-chevron-up">
                                                                            <path d="m18 15-6-6-6 6" />
                                                                        </svg>
        
                                                                        <svg class="show" xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-chevron-down-icon lucide-chevron-down">
                                                                            <path d="m6 9 6 6 6-6" />
                                                                        </svg>
                                                                    </div>
        
                                                                </div>
        
                                                                <div class="trans-start-details">
        
                                                                    <div class="form-wrap mt-4">
        
                                                                        <form action=""
                                                                            class="p-3 d-flex flex-column row-gap-2">
                                                                            <div class="trans-info">
        
                                                                                <div class="time">
                                                                                    <h6 class="fw-medium m-0">18:00</h6>
                                                                                </div>
                                                                                <div class="address">
                                                                                    <span class="fw-medium">Thành phố Bạc
                                                                                        Liêu</span>
                                                                                </div>
                                                                                <div class="address-details">
                                                                                    Cần Thơ
                                                                                </div>
        
                                                                                <textarea name="" id="" cols="30" rows="3" placeholder="Nhập địa chỉ trung chuyển"></textarea>
                                                                            </div>
        
                                                                        </form>
                                                                        <hr>
                                                                        <form action=""
                                                                            class="p-3 d-flex flex-column row-gap-2">
                                                                            <div class="trans-info">
        
                                                                                <div class="time">
                                                                                    <h6 class="fw-medium m-0">18:00</h6>
                                                                                </div>
                                                                                <div class="address">
                                                                                    <span class="fw-medium">Cần Thơ</span>
                                                                                </div>
                                                                                <div class="address-details">
                                                                                    Cần Thơ
                                                                                </div>
                                                                                <textarea name="" id="" cols="30" rows="3" placeholder="Nhập địa chỉ trung chuyển"></textarea>
                                                                            </div>
        
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}

                                                        {{-- Vòng lặp điểm trả --}}
                                                        @foreach ($trip->pickup_dropoff_points as $pickup_dropoff_point)
                                                            @if ($pickup_dropoff_point->type == 'dropoff')
                                                                <div class="form-check">

                                                                    <div class="points">

                                                                        <input class="form-check-input" type="radio"
                                                                            name="dropoff"
                                                                            id="{{ $pickup_dropoff_point->id }}"
                                                                            value="{{ $pickup_dropoff_point->id }}"
                                                                            wire:model.live="dropoff_id">
                                                                        <div class="d-flex flex-column row-gap-1">

                                                                            <label class="form-check-label"
                                                                                for="{{ $pickup_dropoff_point->id }}">
                                                                                <h6 class="fw-medium">
                                                                                    {{ $pickup_dropoff_point->time }}
                                                                                </h6>
                                                                            </label>

                                                                            <div class="address">
                                                                                <span
                                                                                    class="fw-medium">{{ $pickup_dropoff_point->name }}</span>
                                                                            </div>
                                                                            <div class="address-details">
                                                                                {{ $pickup_dropoff_point->address }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="seat-checked">
                                            <div class="title"><span class="fw-medium">Ghế: </span>

                                                @if (!empty($seat_list))
                                                    @foreach ($seat_list as $seat_name => $value)
                                                        @if (!$loop->first)
                                                            <span>,</span>
                                                        @endif

                                                        {{ $seat_name }}
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="d-flex column-gap-4">
                                            <div class="total-ticket d-flex column-gap-3 align-items-center">
                                                <div class="title fw-medium">
                                                    Tổng cộng
                                                </div>
                                                <div class="price light-blue-text fw-medium">
                                                    {{ number_format(array_sum($this->seat_list) * 1000, 0, ',', '.') }}đ
                                                </div>
                                            </div>

                                            <button
                                                class="outline-btn small-btn hover {{ $isShowPoints[$key] ? 'd-block' : 'd-none' }}"
                                                wire:click="hide_points({{ $key }})">Quay lại</button>

                                            <button class="main-btn small-btn hover"
                                                wire:click="{{ $isShowPoints[$key] ? 'show_booking_confirmation(' . $trip->id . ',' . $key . ')' : 'show_points(' . $key . ')' }}">Tiếp
                                                tục</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@script
    <script>
        $(document).ready(function() {

            let isTransShowMore = false

            //Hiện chi tiết ô nhập địa chỉ trung chuyển
            $('.start .trans-info').click(function() {

                const index = $('.start .trans-info').index(this)

                $('.start .trans-info textarea').not(':eq(' + index + ')').slideUp("fast")
                $('.start .form-wrap form').not(':eq(' + index + ')').removeClass('active')

                $('.start .trans-info textarea').eq(index).slideDown("fast")
                $('.start .form-wrap form').eq(index).addClass('active')

            })

            //Hiện chi tiết ô nhập địa chỉ trung chuyển
            $('.end .trans-info').click(function() {

                const index = $('.end .trans-info').index(this)

                $('.end .trans-info textarea').not(':eq(' + index + ')').slideUp("fast")
                $('.end .form-wrap form').not(':eq(' + index + ')').removeClass('active')

                $('.end .trans-info textarea').eq(index).slideDown("fast")
                $('.end .form-wrap form').eq(index).addClass('active')

            })

            // Ẩn Hiện thông tin chi tiết địa điểm trung chuyển
            $('.trans-show-more').click(function() {

                const index = $('.trans-show-more').index(this)

                $('.trans-start-details').eq(index).slideToggle("fast")

                isTransShowMore = !isTransShowMore

                if (isTransShowMore) {

                    $('.hide').eq(index).show()
                    $('.show').eq(index).hide()
                } else {

                    $('.hide').eq(index).hide()
                    $('.show').eq(index).show()
                }
            })

            // Hiện thông tin chi tiết địa điểm trung chuyển
            $('.trans_start_input').click(function() {

                const index = $('.trans_start_input').index(this)

                $('.trans-start-details').eq(index).slideDown("fast")

                isTransShowMore = true

            })

            // Ẩn hiện chi tiết chuyến (gồm ghế ngồi và điểm đón trả)
            $('.trip-show-more-btn').click(function() {

                // Bỏ chọn tất cả ghế
                $('.seat-diagram .line .seat-item').removeClass('active')

                const index = $('.trip-show-more-btn').index(this) // Lấy vị trí của nút
                $wire.$set('isShowPoints.' + index, false)
                $wire.$set('seat_list', [])

                $('.trip-show-more').not(':eq(' + index + ')').slideUp(
                    "fast") // Ẩn tất cả các chi tiết khác

                $('.trip-show-more').eq(index).slideToggle("fast") // Hiện chi tiết của nút tương ứng
            })

            // Chọn và bỏ chọn ghế ngồi
            $('.seat-diagram .line .seat-item').click(function() {

                if ($(this).hasClass('active')) {

                    $(this).removeClass('active')
                } else {

                    $(this).addClass('active')
                }
            })
            // Bắt sự kiện người dùng chưa chọn ghế và chưa chọn điểm đón trả
            $wire.on('not-seleted-seat', () => {

                Swal.fire({
                    title: "Vui lòng chọn ghế",
                    icon: "error",
                    draggable: true
                });
            })

            $wire.on('not-seleted-point', () => {

                Swal.fire({
                    title: "Vui lòng chọn điểm đón trả",
                    icon: "error",
                    draggable: true
                });
            })
        })
    </script>
    {{-- <script>
        $(document).ready(function() {

            // $('.trip-show-more-btn').click(function() {

            //     $wire.$set('isShowPoints', false)
            // })
        })
    </script> --}}
@endscript
