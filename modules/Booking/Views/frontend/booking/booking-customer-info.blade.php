<div class="booking-review mb-4">
    <h4 class="booking-review-title">{{__('Your Information')}}</h4>
    <div class="booking-review-content">
        <div class="review-section">
            <div class="info-form">
                <ul>
                    <li class="info-first-name">
                        <div class="label">{{__('Name')}}</div>
                        <div class="val">{{$booking->first_name}}</div>
                    </li>
                    <li class="info-email">
                        <div class="label">{{__('Email')}}</div>
                        <div class="val">{{$booking->email}}</div>
                    </li>
                    <li class="info-phone">
                        <div class="label">{{__('Phone')}}</div>
                        <div class="val">{{$booking->phone}}</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
