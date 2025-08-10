<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <div class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-bs-toggle="modal"
            data-bs-target="#exampleModal" wire:click="add_route">
            <i class="fas fa-plus fa-sm text-white-50 me-2"></i>Thêm tuyến mới
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Danh sách tuyến đi</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Điểm khởi hành</th>
                            <th>Điểm đến</th>
                            <th style="width: 20%">Hành động</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($routes as $route)
                            <tr>
                                <td>
                                    {{ $route->start_point }}
                                </td>
                                <td>
                                    {{ $route->end_point }}
                                </td>
                                <td>
                                    @if ($route->bus_operator_phone == session('admin')->phone)
                                        <div class="">

                                            <button class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#edit{{ $route->id }}"
                                                wire:click="edit({{ $route->id }})">Sửa</button>
                                            <button class="btn btn-danger"
                                                wire:click="delete({{ $route->id }})">Xóa</button>
                                        </div>
                                    @else
                                        <div class="">

                                            <button class="btn btn-secondary" disabled>Sửa</button>
                                            <button class="btn btn-secondary" disabled>Xóa</button>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                            <div class="modal fade" id="edit{{ $route->id }}" tabindex="-1"
                                aria-labelledby="edit{{ $route->id }}" aria-hidden="true" wire:ignore.self>


                                <div class="modal-dialog modal-dialog-centered">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                            {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> --}}
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form wire:submit="update_route({{ $route->id }})" class="form-add-trip">

                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Điểm khởi
                                                        hành</label>
                                                    {{-- <input type="text" class="form-control" id=""> --}}
                                                    <select class="form-select" aria-label="Default select example"
                                                        wire:model.live="start_point">

                                                        {{-- <option value="0" selected>Chọn điểm khởi hành</option> --}}
                                                        @foreach ($provinces as $province)
                                                            <option value="{{ $province['name'] }}">
                                                                {{ $province['name'] }}</option>
                                                        @endforeach

                                                    </select>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Điểm đến</label>
                                                    {{-- <input type="text" class="form-control" id=""> --}}
                                                    <select class="form-select" aria-label="Default select example"
                                                        wire:model.live="end_point">
                                                        {{-- <option value="0" selected>Chọn điểm khởi hành</option> --}}
                                                        @foreach ($provinces as $province)
                                                            <option value="{{ $province['name'] }}">
                                                                {{ $province['name'] }}</option>
                                                        @endforeach

                                                    </select>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>


                                                <button type="submit" class="btn btn-primary">Lưu</button>

                                            </form>
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit="save">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Điểm khởi hành</label>
                            {{-- <input type="text" class="form-control" id=""> --}}
                            <select class="form-select" aria-label="Default select example"
                                wire:model.live="start_point">
                                <option value="0" selected>Chọn điểm khởi hành</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province['name'] }}">{{ $province['name'] }}</option>
                                @endforeach

                            </select>
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Điểm đến</label>
                            <select class="form-select" aria-label="Default select example" wire:model.live="end_point">
                                <option value="0" selected>Chọn điểm đến</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province['name'] }}">{{ $province['name'] }}</option>
                                @endforeach

                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@script
    <script>
        $(document).ready(function() {

            $wire.on('route-success', () => {

                Swal.fire({
                    title: "Thêm thành công!",
                    icon: "success",
                    draggable: true
                });

                $('.btn-close').click()

            })

            $wire.on('update-route-success', () => {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Cập nhật tuyến xe thành công",
                    showConfirmButton: false,
                    timer: 1500
                });

                $('.btn-close').click()
            })

            $wire.on('delete-route-success', () => {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Xóa tuyến xe thành công",
                    showConfirmButton: false,
                    timer: 1500
                });

                $('.btn-close').click()
            })

            $wire.on('route-exists', () => {
                Swal.fire({
                    title: "Tuyến đi đã tồn tại!",
                    icon: "error",
                    draggable: true
                });
            })
        })
    </script>
@endscript
