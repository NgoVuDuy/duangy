<div class="">

    <h4 class=""><b>DUANGY Xin thông báo</b></h4>
    <div class="">

        @foreach ($tickets as $ticket)
            Vé xe mang mã: {{ $ticket->id }} <br>
            Khởi hành:  {{ $ticket->pickup->time }} - {{ $ticket->pickup->name }} - {{ $ticket->pickup->address }} <br>
            Kết thúc: {{ $ticket->dropoff->time }} - {{ $ticket->dropoff->name }} - {{ $ticket->dropoff->address }} <br>
            ---------------------------- <br>
        @endforeach
        <b>Đã gặp sự cố</b>
    </div>
    <div class="">Nguyên nhân: {{ $content }}</div>
    <div class="">Quý khách sẽ được đổi sang xe thay thế là <b>{{ $bus_license_plate }}</b> trước khi có thông báo
        khắc phục sự cố</div>
</div>
