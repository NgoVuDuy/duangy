<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <div class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-bs-toggle="modal"
            data-bs-target="#tripModal">
            <i class="fas fa-plus fa-sm text-white-50 me-2"></i>Thêm chuyến mới
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Danh sách chuyến đi</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tuyến đi</th>
                            <th>Khởi hành</th>
                            <th>Dự kiến đến</th>
                            <th>Biển số xe</th>
                            <th>Giá</th>
                            <th>Hành động</th>
                            <th>Danh sách vé</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($trips->buses as $bus)
                            @foreach ($bus->trips as $trip)
                                <tr>
                                    <td>
                                        {{ $trip->route->start_point }} - {{ $trip->route->end_point }}
                                    </td>
                                    <td>
                                        {{ $trip->departure_time }} - {{ $trip->departure_date }}
                                    </td>
                                    <td>
                                        {{ $trip->arrival_time }} - {{ $trip->arrival_date }}
                                    </td>
                                    <td>
                                        {{ $bus->license_plate }}
                                    </td>
                                    <td>
                                        {{ $trip->price }}
                                    </td>

                                    <td class="text-center">
                                        <button class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#{{ $trip->id }}"
                                            wire:click="edit({{ $trip->id }})">Sửa</button>
                                        <button class="btn btn-danger"
                                            wire:click="delete_trip('{{ $trip->id }}')">Xóa</button>
                                    </td>


                                    <td class="text-center">
                                        <button class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#ticket-details-{{ $trip->id }}">Xem
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
                @foreach ($trips->buses as $bus)
                    @foreach ($bus->trips as $trip)
                        <div class="modal fade" id="ticket-details-{{ $trip->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                            <div class="modal-dialog modal-dialog-centered" style="max-width: 1400px">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin các vé
                                            xe</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @if (!empty($trip->tickets))
                                            <table>
                                                <thead>
                                                    <tr>

                                                        <th>Họ và tên</th>
                                                        <th>Số điện thoại</th>
                                                        <th style="width: 20%">Điểm đón</th>
                                                        <th style="width: 20%">Điểm trả</th>
                                                        <th>Giá vé</th>
                                                        <th>Ghế ngồi</th>
                                                        <th class="text-center">Duyệt</th>
                                                        <th>Hủy vé</th>
                                                        {{-- <th>Hoàn tác</th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($trip->tickets as $ticket)
                                                        <tr>
                                                            <td>{{ $ticket->name }}</td>
                                                            <td>{{ $ticket->phone }}</td>
                                                            <td>{{ $ticket->pickup->time }} -
                                                                {{ $ticket->pickup->address }}</td>
                                                            <td>{{ $ticket->dropoff->time }} -
                                                                {{ $ticket->dropoff->address }}</td>
                                                            <td>{{ $ticket->price }}</td>
                                                            <td>{{ $ticket->seat->name }}</td>

                                                            <td class="text-center">

                                                                @if ($ticket->status == 'done')
                                                                    <span class="badge bg-success">Đã đi</span>
                                                                @elseif ($ticket->status == 'not_attended')
                                                                    <span class="badge bg-primary">Không đi</span>
                                                                @elseif ($ticket->status == 'cancelled')
                                                                    <span class="badge bg-danger">Đã hủy</span>
                                                                @else
                                                                    <button class="btn btn-primary"
                                                                        wire:click="approve({{ $ticket->id }}, 'not_attended')">Không
                                                                        đi
                                                                    </button>

                                                                    <button class="btn btn-success"
                                                                        wire:click="approve({{ $ticket->id }}, 'done')"
                                                                        
                                                                        @if (now()->lessThan(\Carbon\Carbon::parse($trip->departure_date . ' ' . $trip->departure_time)))
                                                                            disabled
                                                                        @endif
                                                                        >Đã
                                                                        đi
                                                                    </button>
                                                                @endif

                                                            </td>

                                                            <td>
                                                                <button class="btn btn-danger" style="height: 40px"
                                                                    wire:click="cancel_ticket({{ $ticket->id }})"
                                                                    @if (
                                                                        $ticket->status != 'pending'
                                                                            ) disabled @endif>
                                                                    Hủy
                                                                </button>
                                                            </td>
                                                            {{-- <td>
                                                                <button class="btn btn-primary" wire:click="rollback_status({{ $ticket->id }}, 'pending')">Hoàn tác</button>
                                                            </td> --}}
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <h5 class="text-center">Chuyến này hiện chưa có vé nào</h5>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
                @foreach ($trips->buses as $bus)
                    @foreach ($bus->trips as $trip)
                        {{-- O day --}}
                        <div class="modal fade" id="{{ $trip->id }}" tabindex="-1"
                            aria-labelledby="{{ $trip->id }}" aria-hidden="true" wire:ignore.self>


                            <div class="modal-dialog modal-dialog-centered">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> --}}
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form wire:submit="update_trip({{ $trip->id }})" class="form-add-trip">

                                            {{-- {{ $route_value }} --}}

                                            <div class="mb-3">
                                                <label for="" class="form-label">Tuyến đi</label>

                                                <select class="form-select" aria-label="Default select example"
                                                    wire:model.live="route_update">

                                                    {{-- <option value="0" selected={{ true }}>Chọn
                                                                    tuyến đi</option> --}}


                                                    @foreach ($routes as $route)
                                                        @if ($trip->route->start_point == $route->start_point && $trip->route->end_point == $route->end_point)
                                                            <option value="{{ $route->id }}" selected>
                                                                {{ $route->start_point }} -
                                                                {{ $route->end_point }}</option>
                                                        @else
                                                            <option value="{{ $route->id }}">
                                                                {{ $route->start_point }} -
                                                                {{ $route->end_point }}</option>
                                                        @endif
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="" class="form-label">Chọn xe</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    wire:model.live="bus_update">


                                                    @foreach ($buses->buses as $item)
                                                        @if ($item->license_plate == $bus->license_plate)
                                                            <option value="{{ $item->id }}" selected>

                                                                {{ $item->license_plate }}</option>
                                                        @else
                                                            {{-- $bus->license_plate --}}
                                                            <option value="{{ $item->id }}">

                                                                {{ $item->license_plate }}</option>
                                                        @endif
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="departure" class="form-label">Thời gian khởi
                                                    hành</label>
                                                <input type="datetime-local" class="form-control" id=""
                                                    value="{{ $trip->departure_date . 'T' . $trip->departure_time }}"
                                                    wire:model.live="departure_update">
                                            </div>
                                            <div class="mb-3">
                                                <label for="arrival" class="form-label">Thời gian đến</label>
                                                <input type="datetime-local" class="form-control" id=""
                                                    value="{{ $trip->arrival_date . 'T' . $trip->arrival_time }}"
                                                    wire:model.live="arrival_update">
                                            </div>

                                            {{-- Điểm đón trả --}}
                                            <div class="mb-3">
                                                <label for="" class="form-label">Chọn điểm đón</label>

                                                <h6 class="place-seleted">

                                                    @foreach ($pickupUpdateSeleted as $pickup)
                                                        <span class="badge text-bg-primary">{{ $pickup->id }} -
                                                            {{ $pickup->name }}
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                height="18" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-x-icon lucide-x"
                                                                wire:click="removePickupUpdate({{ $pickup->id }})">
                                                                <path d="M18 6 6 18" />
                                                                <path d="m6 6 12 12" />
                                                            </svg>
                                                        </span>
                                                    @endforeach

                                                </h6>

                                                <select class="form-select" aria-label="Default select example"
                                                    wire:model.live="pickup_update">

                                                    <option value="0">Chọn điểm đón</option>

                                                    @foreach ($pickupPoints as $pickupPoint)
                                                        <option value="{{ $pickupPoint->id }}">

                                                            {{ $pickupPoint->id }} - {{ $pickupPoint->name }} -
                                                            {{ $pickupPoint->time }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="" class="form-label">Chọn điểm trả</label>

                                                <h6 class="place-seleted">
                                                    @foreach ($dropoffUpdateSeleted as $dropoff)
                                                        <span class="badge text-bg-primary">{{ $dropoff->id }} -
                                                            {{ $dropoff->name }}
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                height="18" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-x-icon lucide-x"
                                                                wire:click="removeDropoffUpdate({{ $dropoff->id }})">
                                                                <path d="M18 6 6 18" />
                                                                <path d="m6 6 12 12" />
                                                            </svg>
                                                        </span>
                                                    @endforeach

                                                </h6>

                                                <select class="form-select" aria-label="Default select example"
                                                    wire:model.live="dropoff_update">

                                                    <option value="0">Chọn điểm trả</option>

                                                    @foreach ($dropoffPoints as $dropoffPoint)
                                                        <option value="{{ $dropoffPoint->id }}">

                                                            {{ $dropoffPoint->id }} - {{ $dropoffPoint->name }} -
                                                            {{ $dropoffPoint->time }}</option>
                                                    @endforeach

                                                </select>
                                            </div>


                                            <div class="mb-3">
                                                <label for="" class="form-label">Giá chuyến đi</label>
                                                <input type="text" class="form-control" id=""
                                                    placeholder="120.000" value="{{ $trip->price }}"
                                                    wire:model.live="price_update">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Lưu</button>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tripModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>


        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit="save">

                        {{-- {{ $route_value }} --}}

                        <div class="mb-3">
                            <label for="" class="form-label">Tuyến đi</label>

                            <select class="form-select" aria-label="Default select example"
                                wire:model.live="route_value">
                                <option value="0" selected>Chọn tuyến đi</option>
                                @foreach ($routes as $route)
                                    <option value="{{ $route->id }}">{{ $route->start_point }} -
                                        {{ $route->end_point }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Chọn xe</label>
                            <select class="form-select" aria-label="Default select example"
                                wire:model.live="bus_value">
                                <option value="0" selected>Chọn xe</option>
                                @foreach ($buses->buses as $bus)
                                    <option value="{{ $bus->id }}">{{ $bus->license_plate }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="departure" class="form-label">Thời gian khởi hành</label>
                            <input type="datetime-local" class="form-control" id="departure"
                                wire:model.live="departure_value">
                        </div>
                        <div class="mb-3">
                            <label for="arrival" class="form-label">Thời gian đến</label>
                            <input type="datetime-local" class="form-control" id="arrival"
                                wire:model.live="arrival_value">
                        </div>

                        {{-- Điểm đón trả --}}
                        <div class="mb-3">
                            <label for="" class="form-label">Chọn điểm đón</label>

                            <h6 class="place-seleted">
                                @foreach ($pickupSeleted as $pickup)
                                    <span class="badge text-bg-primary">{{ $pickup->id }} - {{ $pickup->name }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-x-icon lucide-x"
                                            wire:click="removePickup({{ $pickup->id }})">
                                            <path d="M18 6 6 18" />
                                            <path d="m6 6 12 12" />
                                        </svg>
                                    </span>
                                @endforeach

                            </h6>

                            <select class="form-select" aria-label="Default select example"
                                wire:model.live="pickup_value">

                                <option value="0">Chọn điểm đón</option>

                                @foreach ($pickupPoints as $pickupPoint)
                                    <option value="{{ $pickupPoint->id }}">

                                        {{ $pickupPoint->id }} - {{ $pickupPoint->name }} - {{ $pickupPoint->time }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Chọn điểm trả</label>

                            <h6 class="place-seleted">
                                @foreach ($dropoffSeleted as $dropoff)
                                    <span class="badge text-bg-primary">{{ $dropoff->id }} - {{ $dropoff->name }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-x-icon lucide-x"
                                            wire:click="remove({{ $dropoff->id }})">
                                            <path d="M18 6 6 18" />
                                            <path d="m6 6 12 12" />
                                        </svg>
                                    </span>
                                @endforeach

                            </h6>

                            <select class="form-select" aria-label="Default select example"
                                wire:model.live="dropoff_value">

                                <option value="0">Chọn điểm trả</option>

                                @foreach ($dropoffPoints as $dropoffPoint)
                                    <option value="{{ $dropoffPoint->id }}">

                                        {{ $dropoffPoint->id }} - {{ $dropoffPoint->name }} -
                                        {{ $dropoffPoint->time }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Giá chuyến đi</label>
                            <input type="text" class="form-control" id="" placeholder="120.000"
                                wire:model.live="price_value">
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu</button>

                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Lưu</button>
                </div> --}}
            </div>
        </div>
    </div>

</div>

@script
    <script>
        $(document).ready(function() {

            $wire.on('cancelled-success', () => {

                Swal.fire({
                    title: "Hủy vé thành công",
                    icon: "success",
                    draggable: true
                });

            })

            $wire.on('cancelled-error', () => {

                Swal.fire({
                    title: "Vé này đã quá hạn để có thể hủy",
                    icon: "error",
                    draggable: true
                });

                // Đóng modal
                // $('.btn-close').click()
            })

            $wire.on('cancelled-before', () => {

                Swal.fire({
                    title: "Vé này đã được hủy trước đó",
                    icon: "error",
                    draggable: true
                });

                // Đóng modal
                // $('.btn-close').click()
            })

            $wire.on('delete-trip-success', () => {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Xóa chuyến đi thành công",
                    showConfirmButton: false,
                    timer: 1500
                });
            })

            $wire.on('add-trip-success', () => {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Thêm chuyến đi thành công",
                    showConfirmButton: false,
                    timer: 1500
                });

                $('.btn-close').click()
            })

            $wire.on('update-trip-success', () => {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Cập nhật chuyến đi thành công",
                    showConfirmButton: false,
                    timer: 1500
                });

                $('.btn-close').click()
            })

            let now = new Date();
            now.setMinutes(now.getMinutes() - now.getTimezoneOffset()); // để đúng múi giờ

            let minDateTime = now.toISOString().slice(0, 16); // YYYY-MM-DDTHH:MM

            $('#departure').attr('min', minDateTime);
            $('#arrival').attr('min', minDateTime);
        })
    </script>
@endscript
