<div class="">

    <h4 class=""><b>DUANGY Xin thông báo</b></h4>
    <div class="">

        @foreach ($tickets as $ticket)
            Vé xe mang mã: {{ $ticket->id }} <br>
            Khởi hành:  {{ $ticket->pickup->time }} - {{ $ticket->pickup->name }} - {{ $ticket->pickup->address }} <br>
            Kết thúc: {{ $ticket->dropoff->time }} - {{ $ticket->dropoff->name }} - {{ $ticket->dropoff->address }} <br>
            ---------------------------- <br>
        @endforeach
        <b>Đã khắc phục sự cố thành công</b>
    </div>
    <div class="">Quý khách có thể đi với xe cũ như thông tin trên vé</div>
</div>
