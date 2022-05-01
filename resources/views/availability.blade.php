@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('checkDefaultHotelAvailability') }}" class="appointment-form">
                    <h1 class="my-3 h3">Book your apartment</h1>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date-check-in" name="start_date" value="{{ request('start_date') }}" placeholder="Check-In">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date-check-out" name="end_date" value="{{ request('end_date') }}" placeholder="Check-Out">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <input type="hidden" name="adults" value="1">
                                <input type="submit" value="Search" class="btn btn-primary py-3 px-4 w-100">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

         @if ($errors->any())
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-danger">
                        <ul class="m-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        @isset($rooms)
            <div class="row">
                @if(!empty($rooms))
                    @foreach($rooms as $room)
                        <div class="col-12 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-3 h4">{{ $room['title'] }}</div>
                                        <div class="col-12 col-md-3 h6 text-dark">{{date('M j', strtotime(request('start_date'))) }} - {{ date('M j', strtotime(request('end_date')))}}</div>
                                        <div class="col-12 col-md-3 h6 text-dark">{{ $room['price_text'] }}</div>
                                        <div class="col-12 col-md-3"><button class="btn btn-primary w-100" data-toggle="modal" data-target="#booking-modal-{{$room['id']}}" >Book now</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal booking-modal" tabindex="-1" role="dialog" id="booking-modal-{{$room['id']}}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ route('booking.addToCart') }}" data-next-action="{{ route('booking.doCheckout') }}">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Booking details for "{{$room['title']}}"</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="booking-form-name">Name</label>
                                                <input type="text" class="form-control" id="booking-form-name" required name="first_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="booking-form-email">Email</label>
                                                <input type="email" class="form-control" id="booking-form-email" required name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="booking-form-phone">Phone</label>
                                                <input type="text" class="form-control" id="booking-form-phone" required name="phone">
                                            </div>
                                            @isset($hotel)
                                            <input type="hidden" name="service_id" value="{{$hotel->id}}">
                                            @endisset
                                            <input type="hidden" name="service_type" value="hotel">
                                            <input type="hidden" name="start_date" value="{{ date('Y-m-d', strtotime(request('start_date')))}}">
                                            <input type="hidden" name="end_date" value="{{ date('Y-m-d', strtotime(request('end_date')))}}">
                                            <input type="hidden" name="adults" value="{{ request('adults')}}">
                                            <input type="hidden" name="children" value="0">
                                            <input type="hidden" name="rooms[0][id]" value="{{$room['id']}}">
                                            <input type="hidden" name="rooms[0][number_selected]" value="1">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <input type="hidden" name="last_name" value="N/A">
                                            <input type="hidden" name="payment_gateway" value="offline_payment">
                                            <input type="hidden" name="term_conditions" value="on">
                                            <input type="hidden" name="code" value="">
                                            <input type="hidden" name="country" value="US">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Book</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <div class="modal" tabindex="-1" role="dialog" id="booking-error-modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Error</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <ul></ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal" tabindex="-1" role="dialog" id="booking-success-modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Success</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Your booking successful. To pay visit the <a href="https://paypal.com" target="_blank">link</a></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                @else
                    <div class="col-12">
                        <div class="alert alert-danger">
                            <ul class="m-0">
                                <li>No apartments found.</li>
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        @endisset
    </div>

@stop
@section('script.body')
    <script>
        $( document ).ready(function() {
            $(".booking-modal form").submit(function(e) {
                e.preventDefault();
                var form = $(this);
                var actionUrl = form.attr('action');
                var actionNextUrl = form.data('next-action');

                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    data: form.serialize(),
                    dataType: 'json',
                    success: function(data)
                    {
                        console.log(data);
                        if(data.status == 0) {
                            $(".booking-modal").modal('hide');
                            $("#booking-error-modal .modal-body li").remove();
                            $("#booking-error-modal .modal-body ul").append('<li>'+data.message+'</li>');
                            $("#booking-error-modal").modal('show');
                        } else {
                            if(data.status == 1) {
                                form.find('[name="code"]').val(data.booking_code);
                                $.ajax({
                                    type: "POST",
                                    url: actionNextUrl,
                                    data: form.serialize(),
                                    dataType: 'json',
                                    success: function(data)
                                    {
                                        console.log(data);
                                        if(data.status == 0) {
                                            $(".booking-modal").modal('hide');
                                            $("#booking-error-modal .modal-body li").remove();
                                            for(var k in data.errors) {
                                                $("#booking-error-modal .modal-body ul").append('<li>'+data.errors[k]+'</li>');
                                            }
                                            $("#booking-error-modal").modal('show');
                                        } else {
                                            if(data.url) {
                                                $(".booking-modal").modal('hide');
                                                $("#booking-success-modal").modal('show');
                                            }
                                        }
                                    }
                                });
                            }
                        }
                    }
                });

            });
        });
    </script>
@stop
