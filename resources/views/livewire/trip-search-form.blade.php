<div class="form-search-wrap">
    {{-- <button wire:click="sendmail">Send mail</button> --}}
    <form wire:submit="trip_search" class="form-search d-flex column-gap-5 align-items-center">

        <div class="start-point d-flex flex-column row-gap-2 position-relative">
            <label for="">
                Nơi xuất phát
            </label>
            <div class="accordion accordion-flush" id="1">
                <div class="accordion-item">
                    <div class="d-flex align-items-center">
                        <svg class="light-blue-text" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-locate-icon lucide-locate">
                            <line x1="2" x2="5" y1="12" y2="12" />
                            <line x1="19" x2="22" y1="12" y2="12" />
                            <line x1="12" x2="12" y1="2" y2="5" />
                            <line x1="12" x2="12" y1="19" y2="22" />
                            <circle cx="12" cy="12" r="7" />
                        </svg>
                        <input class="main-input" type="text" name="" id="startPointInput"
                            placeholder="Nhập nơi xuất phát" wire:model.live="start_point_value" autocomplete="off"
                            wire:click="getStartPoint">


                        <h2 class="accordion-header">
                            <button id="arrow-start-point" class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne" wire:ignore>
                            </button>
                        </h2>

                    </div>

                    <div id="startPoint"
                        class="collapse start-point-result position-absolute top-100 start-50 translate-middle-x rounded"
                        wire:ignore.self>

                        <div class="local d-flex flex-column {{ count($start_points) > 5 ? 'active' : '' }}">

                            @foreach ($start_points as $start_point)
                                <span class="p-2 rounded" wire:click="setStartPointValue('{{ $start_point }}')">
                                    {{ $start_point }}
                                </span>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="end-point d-flex flex-column row-gap-2 position-relative ">
            <label for="">Nơi đến</label>

            <div class="accordion accordion-flush" id="2">
                <div class="accordion-item">
                    <div class="d-flex align-items-center">
                        <svg class="red-text" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-map-pin-icon lucide-map-pin">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <input class="main-input" type="text" name="" id="endPointInput"
                            placeholder="Nhập nơi đến" wire:model.live="end_point_value" autocomplete="off"
                            wire:click="getEndPoint">

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button id="arrow-end-point" class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo" wire:ignore>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="endPoint"
                        class="collapse end-point-result position-absolute top-100 start-50 translate-middle-x rounded"
                        wire:ignore.self>
                        <div class="local d-flex flex-column {{ count($end_points) > 5 ? 'active' : '' }}">

                            @foreach ($end_points as $end_point)
                                <span class="p-2 rounded" wire:click="setEndPointValue('{{ $end_point }}')">

                                    {{ $end_point }}
                                </span>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>


        </div>

        <div class="date-point d-flex flex-column row-gap-2">

            <label for="">Ngày đi</label>
            <input class="main-input" type="date" name="" id="datePoint" wire:model.live="date_value"
                min="{{ $today }}">

        </div>

        <button type="submit" class="main-btn lg-btn hover">Tìm kiếm</button>
    </form>

    @script
        <script>
            $(document).ready(function() {

                $('#startPointInput').on("click", function(e) {
                    // e.stopPropagation(); // ngăn click lan ra document
                    // $('.start-point-result').removeClass('d-none');
                    startPointCollapse.show()
                    $('#arrow-start-point').removeClass('collapsed')

                });

                $('#endPointInput').on("click", function(e) {
                    // e.stopPropagation(); // ngăn click lan ra document
                    // $('.end-point-result').removeClass('d-none');
                    endPointCollapse.show()
                    $('#arrow-end-point').removeClass('collapsed')

                });


                const startPointCollapse = new bootstrap.Collapse('#startPoint', {
                    toggle: false // Không tự động mở khi tạo instance
                });
                const endPointCollapse = new bootstrap.Collapse('#endPoint', {
                    toggle: false // Không tự động mở khi tạo instance
                });

                startPointCollapse.hide()
                endPointCollapse.hide()


                $('#arrow-start-point').on('click', function() {

                    if ($('#startPoint').hasClass('show')) {

                        startPointCollapse.hide()
                        $('#arrow-start-point').addClass('collapsed')

                    } else {
                        startPointCollapse.show()
                        $('#arrow-start-point').removeClass('collapsed')

                    }
                })

                $('#arrow-end-point').on('click', function() {

                    if ($('#endPoint').hasClass('show')) {

                        endPointCollapse.hide()
                        $('#arrow-end-point').addClass('collapsed')

                    } else {
                        endPointCollapse.show()
                        $('#arrow-end-point').removeClass('collapsed')

                    }
                })

                $wire.on('hide-start-point', () => {
                    startPointCollapse.hide()
                    $('#arrow-start-point').addClass('collapsed')
                })

                $wire.on('hide-end-point', () => {
                    endPointCollapse.hide()
                    $('#arrow-end-point').addClass('collapsed')
                })

            })
        </script>
    @endscript
</div>
