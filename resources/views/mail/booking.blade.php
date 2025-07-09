<h3>Chúc mừng quý khách đã đặt vé thành công</h3>

<h4>Thông tin vé xe</h4>
<div class="">

    
    <div class="">Họ và Tên : {{ $trip_details['name'] }}</div>
    <div class="">Số điện thoại : {{ $trip_details['phone'] }}</div>
    <div class="">Email : {{ $trip_details['email'] }}</div>
    {{-- <div class="">Mã vé : {{ $trip_details['name'] }}</div>     --}}
    <div class="">Tuyến : {{ $trip_details['routes']["start"]}} - {{$trip_details['routes']["end"]}}</div>
    <div class="">Nhà xe : {{ $trip_details['bus_operator'] }}</div>
    <div class="">Chuyến : {{ $trip_details['trip']["departure_time"]}} - {{$trip_details['trip']["departure_date"]}}</div>
    <div class="">Loại xe : {{ $trip_details['bus'] }}</div>
    <div class="">Biển số xe : {{ $trip_details['name'] }}</div>
    {{-- <div class="">Tổng giá : {{ $trip_details['name'] }}</div> --}}
    <div class="">Ghế ngồi : 
        @foreach($trip_details['seat_list'] as $key => $seat_list )
            <span>{{ $key }} - {{$seat_list}}</span>
        @endforeach
    </div>

    <div class="">Điểm đón: 
        <span>
            {{$trip_details['pickup']['time']}} -  {{$trip_details['pickup']['name']}} - {{$trip_details['pickup']['address']}}
        </span>
    </div>
    <div class="">Điểm trả: 
        <span>
            {{$trip_details['dropoff']['time']}} -  {{$trip_details['dropoff']['name']}} - {{$trip_details['dropoff']['address']}}
        </span>
    </div>
    <div class=""> Phương thức thanh toán
        {{ $trip_details['method'] }}
    </div>

    
</div>
