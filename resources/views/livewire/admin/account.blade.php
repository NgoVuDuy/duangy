<div class="container-fluid">

    <div class="row">
        <div class="col-4">

            <form class="p-5">
                <div class="mb-3">
                    <label for="" class="form-label">Tên nhà xe</label>
                    <input type="email" class="form-control" id="" wire:model.live="name">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="" wire:model.live="phone">
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>

        </div>
    </div>

</div>

@script
    <script>
        $(document).ready(function() {

        })
    </script>
@endscript
