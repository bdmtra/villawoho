<tr>
    <td class="a-hidden">
        @php $rooms = \Modules\Hotel\Models\HotelRoomBooking::getByBookingId($booking->id) @endphp
        @if(!empty($rooms))
            @foreach($rooms as $room)
                {{$room->room->title}}
            @endforeach
        @endif
    </td>
    <td class="a-hidden">{{display_date($booking->created_at)}}</td>
    <td class="a-hidden">
        {{__("Check in")}} : {{display_date($booking->start_date)}} <br>
        {{__("Check out")}} : {{display_date($booking->end_date)}} <br>
        {{__("Duration")}} :

        @if($booking->duration_nights <= 1)
            {{__(':count night',['count'=>$booking->duration_nights])}}
        @else
            {{__(':count nights',['count'=>$booking->duration_nights])}}
        @endif
    </td>
    <td>{{format_money_main($booking->total)}}</td>
    <td class="{{$booking->status}} a-hidden">{{$booking->statusName}}</td>
    <td width="2%">
        @if($service = $booking->service)
            <a class="btn btn-xs btn-primary btn-info-booking" data-toggle="modal" data-target="#modal-booking-{{$booking->id}}">
                <i class="fa fa-info-circle"></i>{{__("Details")}}
            </a>
            @include ($service->checkout_booking_detail_modal_file ?? '')
        @endif
        @if($booking->status == 'processing')
            <a href="{{route('booking.markPaid',['id'=>$booking->id])}}" class="btn btn-xs btn-primary btn-info-booking open-new-window mt-1">
                {{__("Mark as paid")}}
            </a>
        @endif
        <a href="{{route('booking.delete',['id'=>$booking->id])}}" class="btn btn-xs btn-danger btn-info-booking mt-1">
            {{__("Delete")}}
        </a>
    </td>
</tr>
