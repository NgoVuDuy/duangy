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

                                    <div class="mt-5 p-4">

                                        <div class="left">
                                            <div class="seat-note">
                                                <h6 class="title mb-4">Chú thích</h6>
                                                <div class="note-item-wrap d-flex flex-column row-gap-4">
                                                    @for ($j = 1; $j <= 3; $j++)
                                                        <div class="item d-flex align-items-center column-gap-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32"
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

                                                                <span>Ghế đang chọn</span>
                                                                <div class="price">
                                                                    140.000đ
                                                                </div>
                                                            </div>

                                                        </div>
                                                    @endfor
                                                    {{-- <div class="item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-armchair-icon lucide-armchair">
                                                            <path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3" />
                                                            <path
                                                                d="M3 16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V11a2 2 0 0 0-4 0z" />
                                                            <path d="M5 18v2" />
                                                            <path d="M19 18v2" />
                                                        </svg>
                                                        <span>Ghế đầu</span>

                                                    </div>
                                                    <div class="item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-armchair-icon lucide-armchair">
                                                            <path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3" />
                                                            <path
                                                                d="M3 16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V11a2 2 0 0 0-4 0z" />
                                                            <path d="M5 18v2" />
                                                            <path d="M19 18v2" />
                                                        </svg>
                                                        <span>Ghế giữa</span>

                                                    </div>
                                                    <div class="item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-armchair-icon lucide-armchair">
                                                            <path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3" />
                                                            <path
                                                                d="M3 16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V11a2 2 0 0 0-4 0z" />
                                                            <path d="M5 18v2" />
                                                            <path d="M19 18v2" />
                                                        </svg>
                                                        <span>Ghế cu</span>

                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="seat-diagram">
                                                
                                            </div>
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
    })
</script>
