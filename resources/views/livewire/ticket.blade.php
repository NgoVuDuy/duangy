<div>
    <div class="container user mt-5 mb-5">
        <div class="row justify-content-center">

            <div class="col-3">
                @livewire('user-sidebar')

                <div class="mt-3">
                    {{-- The Master doesn't talk, he acts. --}}
                    <div class="return-role shadow d-flex flex-column row-gap-3 p-3">
                        <div class="d-flex column-gap-3 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-notepad-text-icon lucide-notepad-text">
                                <path d="M8 2v4" />
                                <path d="M12 2v4" />
                                <path d="M16 2v4" />
                                <rect width="16" height="18" x="4" y="4" rx="2" />
                                <path d="M8 10h6" />
                                <path d="M8 14h8" />
                                <path d="M8 18h5" />
                            </svg>
                            <h6>Quy tắc hủy vé & hoàn tiền</h6>
                        </div>
                        <i><strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-flag-triangle-right-icon lucide-flag-triangle-right">
                                    <path d="M6 22V2.8a.8.8 0 0 1 1.17-.71l11.38 5.69a.8.8 0 0 1 0 1.44L6 15.5" />
                                </svg>
                                <span>Thanh toán khi nhận vé</span>
                            </strong>
                        </i>
                        <ul>
                            <li>Có thể hủy <strong class="text-primary">trước ngày khởi hành 2 ngày</strong> </li>

                        </ul>

                        <i>
                            <strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-flag-triangle-right-icon lucide-flag-triangle-right">
                                    <path d="M6 22V2.8a.8.8 0 0 1 1.17-.71l11.38 5.69a.8.8 0 0 1 0 1.44L6 15.5" />
                                </svg>
                                <span>Thanh toán VNPay & Ví điện tử</span>
                            </strong>
                        </i>
                        <ul>

                            <li>Hủy vé <strong>trước 3 ngày: </strong> <strong class="text-primary">100%</strong> Hoàn
                                tiền vé</li>
                            <li>Hủy vé <strong>trước 2 ngày: </strong><strong class="text-success">70%</strong> Hoàn
                                tiền vé</li>
                            <li>Hủy vé <strong>trước 1 ngày: </strong> <strong class="text-50">50%</strong>
                                Hoàn tiền vé</li>
                            <li>Hủy vé <strong>sau 1 ngày: </strong><strong class="text-danger">0%</strong> hoàn tiền vé
                            </li>

                        </ul>
                        <span class="text-danger fw-bold text-center">Tiền sẽ được hoàn vào ví điện tử của bạn</span>

                    </div>
                </div>
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
                                <th>Hủy vé</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Ở đây --}}
                            @foreach ($tickets as $index => $ticket)
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

                                        @if ($ticket->status === 'pending')
                                            <h5><span class="badge text-bg-warning">Chưa đi</span></h5>
                                        @elseif ($ticket->status === 'cancelled')
                                            <h5><span class="badge text-bg-danger">Đã hủy</span></h5>
                                        @elseif ($ticket->status === 'done')
                                            <h5><span class="badge text-bg-success">Đã đi</span></h5>
                                        @elseif ($ticket->status === 'not_attended')
                                            <h5><span class="badge text-bg-primary">Không đi</span></h5>
                                        @endif

                                    </td>
                                    <td class="text-center"><button class="main-btn tiny-btn" type="button"
                                            data-bs-toggle="offcanvas" data-bs-target="#{{ $ticket->id }}"
                                            aria-controls="offcanvasRight">Chi tiết</button>
                                    </td>
                                    <td class="text-center">

                                        @if ($ticket->status == 'done' || $ticket->status == 'not_attended')
                                            <button class="main-btn tiny-btn cancel-ticket" type="button"
                                                style="background: gray" disabled>
                                                Hủy vé</button>
                                        @elseif ($ticket->status == 'cancelled')
                                            <button class="main-btn tiny-btn cancel-ticket" type="button"
                                                style="background: green" data-bs-toggle="modal"
                                                data-bs-target="#information-ticket-{{ $ticket->id }}">Xem</button>
                                        @else
                                            <button class="main-btn tiny-btn cancel-ticket" type="button"
                                                style="background: red" data-bs-toggle="modal"
                                                data-bs-target="#cancel-ticket-{{ $ticket->id }}">
                                                Hủy vé</button>
                                        @endif

                                        {{-- <button class="main-btn tiny-btn cancel-ticket" type="button"
                                            style="background: red" wire:click="cancel_ticket({{ $ticket->id }})">Hủy
                                            vé</button> --}}

                                    </td>
                                </tr>
                                {{-- Phần modal chi tiết hủy vé --}}
                                <!-- Modal -->
                                <div class="modal fade" id="information-ticket-{{ $ticket->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin hủy vé
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="trip-details">
                                                    <div class="items">
                                                        <span>
                                                            Phương thức thanh toán
                                                        </span>
                                                        @if ($ticket->payment->method == 'COD')
                                                            <span>Thanh toán khi nhận vé</span>
                                                        @elseif ($ticket->payment->method == 'Wallet')
                                                            <span>Ví điện tử</span>
                                                        @elseif ($ticket->payment->method == 'VNPay')
                                                            <span>VNPay</span>
                                                        @endif
                                                        {{-- <span>{{ $ticket->payment->method }}</span> --}}
                                                    </div>

                                                    <div class="items">
                                                        <span>
                                                            Thời gian khởi hành
                                                        </span>
                                                        <span>{{ $ticket->trip->departure_time }} -
                                                            {{ $ticket->trip->departure_date }}</span>
                                                    </div>

                                                    @if ($refund['method'][$index] == 'prepay')
                                                        <div class="items">
                                                            <span>
                                                                Cách ngày hiện tại
                                                            </span>
                                                            <span>{{ $refund['daybefore'][$index] }} ngày</span>
                                                        </div>

                                                        <div class="items">
                                                            <span>
                                                                Phần trăm hoàn tiền
                                                            </span>
                                                            <span>{{ $refund['pecent'][$index] }}%</span>
                                                        </div>

                                                        <div class="items">
                                                            <span>
                                                                Tổng tiền hoàn
                                                            </span>
                                                            <span>{{ $refund['amount'][$index] }}đ</span>
                                                        </div>
                                                    @endif


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                {{-- Phần modal hủy vé --}}
                                <!-- Modal -->
                                <div class="modal fade" id="cancel-ticket-{{ $ticket->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin hủy vé
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="trip-details">
                                                    <div class="items">
                                                        <span>
                                                            Phương thức thanh toán
                                                        </span>
                                                        @if ($ticket->payment->method == 'COD')
                                                            <span>Thanh toán khi nhận vé</span>
                                                        @elseif ($ticket->payment->method == 'Wallet')
                                                            <span>Ví điện tử</span>
                                                        @elseif ($ticket->payment->method == 'VNPay')
                                                            <span>VNPay</span>
                                                        @endif
                                                    </div>

                                                    <div class="items">
                                                        <span>
                                                            Thời gian khởi hành
                                                        </span>
                                                        <span>{{ $ticket->trip->departure_time }} -
                                                            {{ $ticket->trip->departure_date }}</span>
                                                    </div>

                                                    @if ($refund['method'][$index] == 'cod' && $refund['is_cancel'][$index] == true)
                                                        <div class="items">
                                                            <span>
                                                                Cách ngày hiện tại
                                                            </span>
                                                            <span>{{ $refund['daybefore'][$index] }} ngày</span>
                                                        </div>
                                                        <div class="alert alert-success d-flex align-items-center mt-3"
                                                            role="alert">

                                                            <svg class="me-3" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path
                                                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                                                </path>
                                                                <path d="m9 12 2 2 4-4"></path>
                                                            </svg>
                                                            <div>
                                                                Bạn có thể hủy vé này
                                                            </div>
                                                        </div>
                                                        {{-- <span>> 3 ngày</span> --}}
                                                    @elseif($refund['method'][$index] == 'cod' && $refund['is_cancel'][$index] == false)
                                                        <div class="items">
                                                            <span>
                                                                Cách ngày hiện tại
                                                            </span>
                                                            <span>{{ $refund['daybefore'][$index] }} ngày</span>
                                                        </div>
                                                        <div class="alert alert-danger d-flex align-items-center mt-3"
                                                            role="alert">

                                                            <svg class="me-3" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-ban-icon lucide-ban">
                                                                <circle cx="12" cy="12" r="10" />
                                                                <path d="m4.9 4.9 14.2 14.2" />
                                                            </svg>
                                                            <div>
                                                                Bạn không thể hủy vé này
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="items">
                                                            <span>
                                                                Cách ngày hiện tại
                                                            </span>
                                                            <span>{{ $refund['daybefore'][$index] }} ngày</span>
                                                        </div>
                                                        <div class="items">
                                                            <span>
                                                                Phần trăm hoàn tiền
                                                            </span>
                                                            <span>{{ $refund['pecent'][$index] }}%</span>
                                                        </div>

                                                        <div class="items">
                                                            <span>
                                                                Tổng tiền hoàn
                                                            </span>
                                                            <span>{{ $refund['amount'][$index] }}đ</span>
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                @if (!($refund['method'][$index] == 'cod' && $refund['is_cancel'][$index] == false))
                                                    <button class="main-btn tiny-btn cancel-ticket" type="button"
                                                        style="background: red"
                                                        wire:click="cancel_ticket({{ $ticket->id }})">
                                                        Hủy vé</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

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

                                            {{-- Họ và tên --}}
                                            <div class="items">
                                                <span>
                                                    Họ và tên
                                                </span>
                                                <span>{{ $ticket->user->name }}</span>
                                            </div>
                                            {{-- Số điện thoại --}}
                                            <div class="items">
                                                <span>
                                                    Số điện thoại
                                                </span>
                                                <span>{{ $ticket->user->phone }}</span>
                                            </div>
                                            {{-- Mail --}}

                                            <div class="items">
                                                <span>
                                                    Email
                                                </span>
                                                <span>{{ $ticket->user->email }}</span>
                                            </div>
                                            <hr>
                                            <div class="items">
                                                <span>
                                                    Tuyến
                                                </span>
                                                <span>{{ $ticket->trip->route->start_point }} -
                                                    {{ $ticket->trip->route->end_point }}</span>
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
                                                <span>{{ $ticket->trip->departure_time }} -
                                                    {{ $ticket->trip->departure_date }}</span>
                                            </div>
                                            <div class="items">
                                                <span>
                                                    Loại xe
                                                </span>
                                                <span>{{ $ticket->trip->bus->bus_type }} -
                                                    {{ $ticket->trip->bus->total_seat }} chỗ</span>
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
                                            <hr>
                                            <div class="items">
                                                <span>
                                                    Thanh toán
                                                </span>
                                                @if ($ticket->payment->method == 'COD')
                                                    <span>Thanh toán khi nhận vé</span>
                                                @elseif ($ticket->payment->method == 'Wallet')
                                                    <span>Ví điện tử</span>
                                                @elseif ($ticket->payment->method == 'VNPay')
                                                    <span>VNPay</span>
                                                @endif
                                            </div>
                                            {{-- Hoàn tiền --}}
                                            @if (!empty($ticket->refund_amount))
                                                <div class="items">
                                                    <span>
                                                        Trạng thái
                                                    </span>
                                                    <span style="color: red">Đã hủy</span>
                                                </div>

                                                <div class="items">
                                                    <span>
                                                        Hoàn tiền
                                                    </span>
                                                    <span style="color: green">+ {{ $ticket->refund_amount }}đ</span>
                                                </div>
                                            @endif
                                            <hr>
                                            <div class="d-flex flex-column row-gap-4 mt-4">
                                                <div class="address-wrap">
                                                    <div class="d-flex align-items-center column-gap-2 mb-2">

                                                        <svg class="light-blue-text"
                                                            xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
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
                                                        <span
                                                            class="address-details">{{ $ticket->pickup->address }}</span>

                                                        <span class="fw-medium mt-1">Dự kiến đón lúc:
                                                            {{ $ticket->pickup->time }}</span>
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
                                                        <span
                                                            class="address-details">{{ $ticket->dropoff->address }}</span>
                                                        <span class="fw-medium mt-1">Dự kiến trả lúc:
                                                            {{ $ticket->dropoff->time }}</span>
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

@script
    <script>
        $(document).ready(function() {


            // $wire.on('confir', () => {

            //         Swal.fire({

            //             title: "Thông báo",
            //             text: "Bạn có muốn hủy vé này không ?",
            //             icon: "warning",
            //             showCancelButton: true,
            //             confirmButtonColor: "#3085d6",
            //             cancelButtonColor: "#d33",
            //             confirmButtonText: "Đồng ý"

            //         }).then((result) => {

            //             if (result.isConfirmed) {

            //                 // $wire.set("is_confir", true)

            //                 // $wire.dispatch('cancel_ticket')
            //                 // $('.cancel-ticket').click()

            //             }
            //         });
            // })


            $wire.on('cancelled-success', () => {

                Swal.fire({
                    title: "Hủy vé thành công",
                    icon: "success",
                    draggable: true
                });
                $('.btn-close').click()


            })

            $wire.on('cancelled-error', () => {

                Swal.fire({
                    title: "Vé này đã quá hạn để có thể hủy",
                    icon: "error",
                    draggable: true
                });

                // Đóng modal
                $('.btn-close').click()
            })

            $wire.on('cancelled-before', () => {

                Swal.fire({
                    title: "Vé này đã được hủy trước đó",
                    icon: "error",
                    draggable: true
                });

                // Đóng modal
                $('.btn-close').click()
            })

        })
    </script>
@endscript
