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
        <div class="row">
            <div class="col-4">
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
            </div>
            <div class="col-8">
                <div class="trip-list">
                    <h4 class="result mb-3">Kết quả: <span class="ms-4">12 Chuyến</span></h4>
                    <div class="d-flex flex-column row-gap-5">

                        @for ($i = 1; $i <= 4; $i++)
                            <div class="item-wrap d-flex flex-column shadow">
                                <div class="item d-flex justify-content-between">
                                    <div class="left d-flex column-gap-4">

                                        <img src="{{ asset('images/bus.jpeg') }}" alt="">
                                        <div class="d-flex flex-column justify-content-between">

                                            <div class="">

                                                <h5 class="bus-operator-name">
                                                    Hạ Long Travel Limousine
                                                </h5>
                                                <div class="bus-name mt-3">
                                                    Limousine 10 chỗ
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
                                                            14:02
                                                        </h4>
                                                        <div class="address fw-medium">
                                                            Văn phòng Hạ Long
                                                        </div>

                                                    </div>
                                                    <div class="end-point d-flex align-items-center column-gap-3">
                                                        <h4 class="time m-0">
                                                            17:32
                                                        </h4>
                                                        <div class="address fw-medium">
                                                            Văn phòng Long Biên
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right d-flex flex-column justify-content-between">
                                        <h5 class="price-ticket">
                                            Từ 260.000đ
                                        </h5>
                                        <div class="">

                                            <div class="seat-empty mb-3">
                                                <span>Còn 5 chỗ trống</span>
                                            </div>
                                            <button class="main-btn small-btn trip-show-more-btn">Chọn chuyến</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="trip-show-more">
                                    <hr>

                                    <div class="mt-5 ps-5 pe-5 d-flex justify-content-between">
                                        <div class="left">
                                            <div class="seat-note">
                                                <h6 class="title mb-4">Chú thích</h6>
                                                <div class="note-item-wrap d-flex flex-column row-gap-2">
                                                    <div class="item d-flex align-items-center column-gap-4">
                                                        <svg class="seat-item item1"
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

                                                            <span class="seat-type-text fw-medium">Ghế đang
                                                                chọn</span>
                                                            <div class="price">
                                                                140.000đ
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="item d-flex align-items-center column-gap-4">
                                                        <svg class="seat-item item2"
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

                                                            <span class="seat-type-text fw-medium">Ghế đầu</span>
                                                            <div class="price">
                                                                140.000đ
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="item d-flex align-items-center column-gap-4">
                                                        <svg class="seat-item item3"
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

                                                            <span class="seat-type-text fw-medium">Ghế giữa</span>
                                                            <div class="price">
                                                                140.000đ
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="item d-flex align-items-center column-gap-4">
                                                        <svg class="seat-item item4"
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

                                                            <span class="seat-type-text fw-medium">Ghế cuối</span>
                                                            <div class="price">
                                                                140.000đ
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="seat-diagram-wrap">
                                                <h6 class="title mb-4">Sơ đồ ghế</h6>
                                                <div class="seat-diagram d-flex flex-column row-gap-1">
                                                    <div class="line line-A">

                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.305 24h-.61c-.035-.004-.07-.01-.105-.012a11.783 11.783 0 0 1-2.117-.261 12.027 12.027 0 0 1-6.958-4.394A11.933 11.933 0 0 1 .027 12.78L0 12.411v-.822c.005-.042.013-.084.014-.127a11.845 11.845 0 0 1 1.102-4.508 12.007 12.007 0 0 1 2.847-3.852A11.935 11.935 0 0 1 11.728.003c.947-.022 1.883.07 2.81.27 1.22.265 2.369.71 3.447 1.335a11.991 11.991 0 0 1 3.579 3.164 11.876 11.876 0 0 1 2.073 4.317c.178.712.292 1.434.334 2.168.008.146.02.292.029.439v.609c-.004.03-.011.06-.012.089a11.81 11.81 0 0 1-1.05 4.521 12.02 12.02 0 0 1-1.92 2.979 12.046 12.046 0 0 1-6.395 3.812c-.616.139-1.24.23-1.872.265-.149.008-.297.02-.446.03zm8.799-13.416c-.527-3.976-4.078-7.808-9.1-7.811-5.02-.003-8.583 3.823-9.11 7.809h.09c.64-.035 1.278-.092 1.912-.195.815-.131 1.614-.326 2.378-.639.625-.255 1.239-.54 1.855-.816.82-.368 1.673-.593 2.575-.62a7.123 7.123 0 0 1 1.947.187c.585.146 1.136.382 1.68.634.57.264 1.14.526 1.733.736 1.2.424 2.442.62 3.706.7.11.006.222.01.334.015zm-10.95 10.471v-.094c0-1.437 0-2.873-.002-4.31 0-.141-.011-.284-.035-.423a2.787 2.787 0 0 0-.775-1.495c-.564-.582-1.244-.896-2.067-.892-1.414.007-2.827.002-4.24.002h-.09a9.153 9.153 0 0 0 3.125 5.256 9.15 9.15 0 0 0 4.083 1.956zm3.689.001c1.738-.36 3.25-1.137 4.528-2.355 1.4-1.334 2.287-2.956 2.685-4.855l-.077-.003h-4.362c-.237 0-.47.038-.695.112-.667.22-1.188.635-1.588 1.206a2.673 2.673 0 0 0-.494 1.59c.008 1.4.003 2.801.003 4.202v.103zM12.05 14.22c1.215-.035 2.204-1.083 2.165-2.275-.039-1.223-1.095-2.215-2.29-2.166-1.211.05-2.2 1.108-2.15 2.302.051 1.191 1.108 2.186 2.275 2.139z"
                                                                fill="#858585"></path>
                                                        </svg>
                                                        <svg class="seat-item" xmlns="http://www.w3.org/2000/svg"
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
                                                        <svg class="seat-item" xmlns="http://www.w3.org/2000/svg"
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
                                                    </div>
                                                    <div class="line line-B">
                                                        <svg class="seat-item" xmlns="http://www.w3.org/2000/svg"
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
                                                        <svg class="seat-item" xmlns="http://www.w3.org/2000/svg"
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
                                                    </div>
                                                    <div class="line line-C">
                                                        <svg class="seat-item" xmlns="http://www.w3.org/2000/svg"
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
                                                        <svg class="seat-item" xmlns="http://www.w3.org/2000/svg"
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
                                                    </div>
                                                    <div class="line line-D">

                                                        <svg class="seat-item" xmlns="http://www.w3.org/2000/svg"
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
                                                        <svg class="seat-item" xmlns="http://www.w3.org/2000/svg"
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
                                                    </div>
                                                    <div class="line line-E">
                                                        <svg class="seat-item" xmlns="http://www.w3.org/2000/svg"
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
                                                        <svg class="seat-item" xmlns="http://www.w3.org/2000/svg"
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
                                                        <svg class="seat-item" xmlns="http://www.w3.org/2000/svg"
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
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="seat-checked">
                                            <div class="title"><span class="fw-medium">Ghế: </span> A1, B2</div>
                                        </div>
                                        <div class="d-flex column-gap-4">
                                            <div class="total-ticket d-flex column-gap-3 align-items-center">
                                                <div class="title fw-medium">
                                                    Tổng cộng
                                                </div>
                                                <div class="price light-blue-text fw-medium">
                                                    120.000đ
                                                </div>
                                            </div>
                                            <button class="main-btn small-btn">Tiếp tục</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $('.trip-show-more-btn').click(function() {

            const index = $('.trip-show-more-btn').index(this)

            $('.trip-show-more').eq(index).slideToggle("fast")
        })

        $('.seat-diagram .line .seat-item').click(function() {

            if ($(this).hasClass('active')) {
                $(this).removeClass('active')
            } else {

                $(this).addClass('active')
            }
        })
    })
</script>
