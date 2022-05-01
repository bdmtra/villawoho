<div class="modal fade" id="modal-booking-{{$booking->id}}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">{{__("Booking ID")}}: #{{$booking->id}}</h4>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                @include ($service->booking_customer_info_file ?? 'Booking::frontend/booking/booking-customer-info')
                <div class="booking-review">
                    <div class="booking-review-content">
                        <div class="review-section">
                            <div class="info-form">
                                <ul>
                                    <li>
                                        <div class="label">{{__('Booking Status')}}</div>
                                        <div class="val">{{$booking->statusName}}</div>
                                    </li>
                                    <li>
                                        <div class="label">{{__('Booking Date')}}</div>
                                        <div class="val">{{display_date($booking->created_at)}}</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-booking-review">
                    @include ($service->checkout_booking_detail_file ?? '')
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <span class="btn btn-secondary" data-dismiss="modal">{{__("Close")}}</span>
            </div>
        </div>
    </div>
</div>


