<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <div class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-bs-toggle="modal"
            data-bs-target="#pickupDropoffPointModal"
            wire:click="resetFields" style="cursor: pointer" title="Thêm điểm đón trả mới" id="addPickupDropoffPointButton"
            >
            <i class="fas fa-plus fa-sm text-white-50 me-2"></i>Thêm điểm mới
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
                            <th style="width: 4%">Mã</th>
                            <th style="width:20%">Tên điểm</th>
                            <th style="width:40%">Địa chỉ</th>
                            <th>Thời gian (24h)</th>
                            <th>Loại</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($pickupDropoffPoints as $pickupDropoffPoint)
                            <tr>
                                <td>
                                    {{ $pickupDropoffPoint->id }}
                                </td>
                                <td>
                                    {{ $pickupDropoffPoint->name }}
                                </td>
                                <td>
                                    {{ $pickupDropoffPoint->address }}
                                </td>
                                <td>
                                    {{ $pickupDropoffPoint->time }}
                                </td>
                                <td>

                                    @if ($pickupDropoffPoint->type == 'pickup')
                                        <h5><span class="badge bg-success">Điểm đón</span></h5>
                                    @else
                                        <h5><span class="badge bg-primary">Điểm trả</span></h5>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#{{ $pickupDropoffPoint->id }}"
                                        wire:click="setter({{ $pickupDropoffPoint->id }})">Sửa</button>
                                    <button class="btn btn-danger"
                                        wire:click="delete({{ $pickupDropoffPoint->id }})">Xóa</button>

                                </td>
                            </tr>

                            {{-- edit form --}}
                            <div class="modal fade" id="{{ $pickupDropoffPoint->id }}" tabindex="-1" aria-labelledby=""
                                aria-hidden="true" wire:ignore.self>
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form wire:submit="edit({{ $pickupDropoffPoint->id }})">

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Tên điểm</label>
                                                    <input type="text" class="form-control" id=""
                                                        wire:model.live="name" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Địa chỉ</label>
                                                    <input type="text" class="form-control" id=""
                                                        wire:model.live="address" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Thời gian</label>
                                                    <input type="time" class="form-control" id=""
                                                        wire:model.live="time" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Loại</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        wire:model.live="type" required>
                                                        <option value="0" selected>Chọn điểm đón trả</option>
                                                        <option value="pickup" selected>Điểm đón</option>
                                                        <option value="dropoff">Điểm trả</option>

                                                    </select>
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
    <div class="modal fade" id="pickupDropoffPointModal" tabindex="-1" aria-labelledby="" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit="save">

                        <div class="mb-3">
                            <label for="" class="form-label">Tên điểm</label>
                            <input type="text" class="form-control" id="" wire:model.live="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" id="" wire:model.live="address"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Thời gian</label>
                            <input type="time" class="form-control" id="" wire:model.live="time"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Loại</label>
                            <select class="form-select" aria-label="Default select example" wire:model.live="type"
                                required>
                                <option value="0" selected>Chọn điểm đón trả</option>
                                <option value="pickup" selected>Điểm đón</option>
                                <option value="dropoff">Điểm trả</option>

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

            $wire.on('stationSaved', () => {

                Swal.fire({
                    title: "Thêm thành công!",
                    icon: "success",
                    draggable: true
                });

                $('.btn-close').click()

            })

            $wire.on('stationUpdated', () => {

                Swal.fire({
                    title: "Sửa thành công!",
                    icon: "success",
                    draggable: true
                });

                $('.btn-close').click()

            })

            $wire.on('stationDeleted', () => {

                Swal.fire({
                    title: "Xóa thành công!",
                    icon: "success",
                    draggable: true
                });

                $('.btn-close').click()

            })

            $wire.on('stationError', () => {
                Swal.fire({
                    title: "Đã có lỗi xảy ra!",
                    icon: "error",
                    draggable: true
                });
            })
        })
    </script>
@endscript
