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
                            {{-- <th>Trạng thái</th> --}}
                            <th>Hành động</th>

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
                                    {{-- <td>
                                                    {{ $trip->status }}
                                                </td> --}}
                                    <td class="text-center">
                                        <button class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#{{ $trip->id }}"
                                            wire:click="edit({{ $trip->id }})">Sửa</button>
                                        <button class="btn btn-danger"
                                            wire:click="delete_trip('{{ $trip->id }}')">Xóa</button>
                                    </td>

                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
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
                                        <form wire:submit="update_trip({{ $trip->id }})">

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

                                                    {{-- <option value="0" selected>Chọn xe</option> --}}

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
