<div class="item-list">
    <div class="row">
        <div class="col-12">
            <div class="item-title ml-3">
                <a href="{{$row->getDetailUrl()}}" target="_blank">
                    {{$row->title}}
                </a>
            </div>
            <div class="location ml-3">
                <i class="icofont-money"></i>
                {{__("Price")}}: <span class="price">{{ $row->display_price }}</span>
            </div>
            <div class="control-action">
                @if(Auth::user()->hasPermissionTo('hotel_update'))
                    <a href="{{route('hotel.vendor.room.edit',['hotel_id'=>$hotel->id,'id'=>$row->id])}}" class="btn btn-warning">{{__("Edit")}}</a>
                @endif
                @if(Auth::user()->hasPermissionTo('hotel_update'))
                    <a href="{{route('hotel.vendor.room.delete',['hotel_id'=>$hotel->id,'id'=>$row->id])}}" class="btn btn-danger" data-confirm="<?php echo e(__("Do you want to delete?")); ?>">{{__("Del")}}</a>
                @endif
            </div>
        </div>
    </div>
</div>
