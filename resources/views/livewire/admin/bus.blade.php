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
                                    <button>Xem</button>
                                </td>
                                <td>
                                    <button type="">Sự cố</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
