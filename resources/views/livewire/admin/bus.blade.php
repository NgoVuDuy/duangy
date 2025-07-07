<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Danh sách xe</h1> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Danh sách xe</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Biển số xe</th>
                            <th>Loại xe</th>
                            <th>Tổng ghế</th>
                            <th>Sơ đồ ghế</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot> --}}
                    <tbody>
                        @foreach ($buses->buses as $bus)
                            <tr>
                                <td>
                                    <img src="{{ asset('images/' . $bus->image) }}" alt="" width="80px"
                                        height="80px">
                                </td>
                                <td>
                                    {{ $bus->license_plate }}
                                </td>
                                <td>
                                    {{ $bus->bus_type }}
                                </td>
                                <td>
                                    {{ $bus->total_seat }}
                                </td>
                                <td>
                                    <button class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#{{ $bus->id }}">Xem</button>
                                </td>
                                <td>
                                    <span>Hoạt động</span>
                                </td>
                                <td>
                                    <button class="btn btn-danger">Báo sự cố</button>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="{{ $bus->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                                <div class="modal-dialog modal-dialog-centered" style="width: fit-content">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> --}}
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="" style="width: 100px">

                                                {{-- ở đây --}}
                                                @foreach ($bus->bus_seat_types as $i => $bus_seat_type)
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
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.305 24h-.61c-.035-.004-.07-.01-.105-.012a11.783 11.783 0 0 1-2.117-.261 12.027 12.027 0 0 1-6.958-4.394A11.933 11.933 0 0 1 .027 12.78L0 12.411v-.822c.005-.042.013-.084.014-.127a11.845 11.845 0 0 1 1.102-4.508 12.007 12.007 0 0 1 2.847-3.852A11.935 11.935 0 0 1 11.728.003c.947-.022 1.883.07 2.81.27 1.22.265 2.369.71 3.447 1.335a11.991 11.991 0 0 1 3.579 3.164 11.876 11.876 0 0 1 2.073 4.317c.178.712.292 1.434.334 2.168.008.146.02.292.029.439v.609c-.004.03-.011.06-.012.089a11.81 11.81 0 0 1-1.05 4.521 12.02 12.02 0 0 1-1.92 2.979 12.046 12.046 0 0 1-6.395 3.812c-.616.139-1.24.23-1.872.265-.149.008-.297.02-.446.03zm8.799-13.416c-.527-3.976-4.078-7.808-9.1-7.811-5.02-.003-8.583 3.823-9.11 7.809h.09c.64-.035 1.278-.092 1.912-.195.815-.131 1.614-.326 2.378-.639.625-.255 1.239-.54 1.855-.816.82-.368 1.673-.593 2.575-.62a7.123 7.123 0 0 1 1.947.187c.585.146 1.136.382 1.68.634.57.264 1.14.526 1.733.736 1.2.424 2.442.62 3.706.7.11.006.222.01.334.015zm-10.95 10.471v-.094c0-1.437 0-2.873-.002-4.31 0-.141-.011-.284-.035-.423a2.787 2.787 0 0 0-.775-1.495c-.564-.582-1.244-.896-2.067-.892-1.414.007-2.827.002-4.24.002h-.09a9.153 9.153 0 0 0 3.125 5.256 9.15 9.15 0 0 0 4.083 1.956zm3.689.001c1.738-.36 3.25-1.137 4.528-2.355 1.4-1.334 2.287-2.956 2.685-4.855l-.077-.003h-4.362c-.237 0-.47.038-.695.112-.667.22-1.188.635-1.588 1.206a2.673 2.673 0 0 0-.494 1.59c.008 1.4.003 2.801.003 4.202v.103zM12.05 14.22c1.215-.035 2.204-1.083 2.165-2.275-.039-1.223-1.095-2.215-2.29-2.166-1.211.05-2.2 1.108-2.15 2.302.051 1.191 1.108 2.186 2.275 2.139z"
                                                                        fill="#858585"></path>
                                                                </svg>
                                                            @endif

                                                            {{-- Tính toán xem giá tiền của từng ghế --}}
                                                            {{-- @php
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
                                                            @endphp --}}

                                                            @foreach ($bus_seat_type->seats as $i => $seat)
                                                                <svg {{-- wire:click="setSeat({{ $seat->id }},'{{ $seat->name }}', '{{ $seat_price }}')" --}} wire:ignore class="seat-item"
                                                                    {{-- title="{{ $seat->name }}" --}} data-bs-toggle="popover"
                                                                    data-bs-title="Tên ghế"
                                                                    data-bs-content="{{ $seat->name }}"
                                                                    xmlns="http://www.w3.org/2000/svg" width="32"
                                                                    height="32" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="1"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-armchair-icon lucide-armchair"
                                                                    style="cursor: pointer">
                                                                    <path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3" />
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
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <script>
        if (typeof popoverTriggerList === 'undefined') {
            const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
            [...popoverTriggerList].map(el => new bootstrap.Popover(el));
        }
    </script>

</div>


{{-- ? --}}
