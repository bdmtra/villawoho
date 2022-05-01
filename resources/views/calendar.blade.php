@extends('layouts.frontend')

@section ('content')
    @php $services  = []; @endphp
    <div class="container">
        <div class="d-flex justify-content-between mb20">
            <h1 class="h3 my-3">{{__("Room Availability Calendar")}}</h1>
        </div>
        @if(count($rows))
        <div class="panel">
            <div class="panel-body no-padding">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="nav nav-tabs  flex-column vertical-nav" id="items_tab"  role="tablist">
                            @foreach($rows as $k=>$item)
                                <li class="nav-item event-name ">
                                    <a class="nav-link" data-id="{{$item->id}}" data-toggle="tab" href="#calendar-{{$item->id}}" title="{{$item->title}}" >{{$item->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div id="dates-calendar" class="dates-calendar"></div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="alert alert-warning">{{__("No rooms found")}}</div>
        @endif
        <div class="d-flex justify-content-center">
            {{$rows->appends($request->query())->links()}}
        </div>
    </div>
@endsection

@section('script.head')
    <link rel="stylesheet" href="{{asset('libs/fullcalendar-4.2.0/core/main.css')}}">
    <link rel="stylesheet" href="{{asset('libs/fullcalendar-4.2.0/daygrid/main.css')}}">
    <link rel="stylesheet" href="{{asset('libs/daterange/daterangepicker.css')}}">

    <style>
        .event-name{
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }
        #dates-calendar .loading{

        }
    </style>
@endsection

@section('script.body')
    <script src="{{asset('libs/daterange/moment.min.js')}}"></script>
    <script src="{{asset('libs/daterange/daterangepicker.min.js?_ver='.config('app.asset_version'))}}"></script>
    <script src="{{asset('libs/fullcalendar-4.2.0/core/main.js')}}"></script>
    <script src="{{asset('libs/fullcalendar-4.2.0/interaction/main.js')}}"></script>
    <script src="{{asset('libs/fullcalendar-4.2.0/daygrid/main.js')}}"></script>
    <script src="{{ asset('libs/vue/vue'.(!env('APP_DEBUG') ? '.min':'').'.js') }}"></script>

    <script>
        var bookingCore  = {
            url:'{{url('/')}}',
            admin_url:'{{route('admin.index')}}',
            map_provider:'{{setting_item('map_provider')}}',
            map_gmap_key:'{{setting_item('map_gmap_key')}}',
            csrf:'{{csrf_token()}}',
            date_format:'{{get_moment_date_format()}}',
            markAsRead:'{{route('core.admin.notification.markAsRead')}}',
            markAllAsRead:'{{route('core.admin.notification.markAllAsRead')}}',
            loadNotify : '{{route('core.admin.notification.loadNotify')}}',
            pusher_api_key : '{{setting_item("pusher_api_key")}}',
            pusher_cluster : '{{setting_item("pusher_cluster")}}',
            isAdmin : {{is_admin() ? 1 : 0}},
            currentUser: {{(int)Auth::id()}},
        };
        var daterangepickerLocale = {
            "applyLabel": "{{__('Apply')}}",
            "cancelLabel": "{{__('Cancel')}}",
            "fromLabel": "{{__('From')}}",
            "toLabel": "{{__('To')}}",
            "customRangeLabel": "{{__('Custom')}}",
            "weekLabel": "{{__('W')}}",
            "first_day_of_week": {{ setting_item("site_first_day_of_the_weekin_calendar","1") }},
            "daysOfWeek": [
                "{{__('Su')}}",
                "{{__('Mo')}}",
                "{{__('Tu')}}",
                "{{__('We')}}",
                "{{__('Th')}}",
                "{{__('Fr')}}",
                "{{__('Sa')}}"
            ],
            "monthNames": [
                "{{__('January')}}",
                "{{__('February')}}",
                "{{__('March')}}",
                "{{__('April')}}",
                "{{__('May')}}",
                "{{__('June')}}",
                "{{__('July')}}",
                "{{__('August')}}",
                "{{__('September')}}",
                "{{__('October')}}",
                "{{__('November')}}",
                "{{__('December')}}"
            ],
        };
		var calendarEl,calendar,lastId;
        $('#items_tab').on('show.bs.tab',function (e) {
			calendarEl = document.getElementById('dates-calendar');
			lastId = $(e.target).data('id');
            if(calendar){
				calendar.destroy();
            }
			calendar = new FullCalendar.Calendar(calendarEl, {
				plugins: [ 'dayGrid' ,'interaction'],
				header: {},
				selectable: true,
				selectMirror: false,
				allDay:false,
				editable: false,
				eventLimit: true,
				defaultView: 'dayGridMonth',
                firstDay: daterangepickerLocale.first_day_of_week,
				events:{
                    	url:"{{route('calendar.loadDates')}}",
						extraParams:{
							id:lastId,
                        }
                },
				loading:function (isLoading) {
					if(!isLoading){
						$(calendarEl).removeClass('loading');
					}else{
						$(calendarEl).addClass('loading');
					}
				},
                eventRender: function (info) {
                    $(info.el).find('.fc-title').html(info.event.title);
                }
			});
			calendar.render();
		});

        $('.event-name:first-child a').trigger('click');

    </script>
@endsection
