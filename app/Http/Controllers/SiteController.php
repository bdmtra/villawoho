<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Modules\Hotel\Models\Hotel;

class SiteController extends Controller
{
    protected $hotelClass;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->hotelClass = Hotel::class;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [];
        return view('home',$data);
    }

    public function checkDefaultHotelAvailability(){
        $request = request()->all();
        if($request['start_date']) {
            $request['start_date'] = \DateTime::createFromFormat('!m/d/Y', $request['start_date'])->format('Y-m-d');
        }
        if($request['end_date']) {
            $request['end_date'] = \DateTime::createFromFormat('!m/d/Y', $request['end_date'])->format('Y-m-d');
        }
        $rules = [
            'start_date' => 'required:date_format:Y-m-d',
            'end_date'   => 'required:date_format:Y-m-d',
            'adults'     => 'required',
        ];
        $validator = \Validator::make($request, $rules);
        if ($validator->fails()) {
            return view('availability')->withErrors($validator)->withInput($request);
        }

        if(strtotime($request['end_date']) - strtotime($request['start_date']) < DAY_IN_SECONDS){
            $validator->errors()->add('', 'Dates are not valid');
            return view('availability')->withErrors($validator)->withInput($request);
        }

        $hotel = $this->hotelClass::first();
        if(empty($hotel)){
            $validator->errors()->add('', 'Something went wrong');
            return view('availability')->withErrors($validator)->withInput($request);
        }

        $numberDays = abs(strtotime($request['end_date']) - strtotime($request['start_date'])) / 86400;
        if(!empty($hotel->min_day_stays) and  $numberDays < $hotel->min_day_stays){
            $validator->errors()->add('', sprintf("You must to book a minimum of %s days",[$hotel->min_day_stays]));
            return view('availability')->withErrors($validator)->withInput($request);
        }

        if(!empty($hotel->min_day_before_booking)){
            $minday_before = strtotime("today +".$hotel->min_day_before_booking." days");
            if(  strtotime($request['start_date']) < $minday_before){
                $validator->errors()->add('', sprintf("You must book the service for %s days in advance",[$hotel->min_day_before_booking]));
                return view('availability')->withErrors($validator)->withInput($request);
            }
        }
        $rooms = $hotel->getRoomsAvailability($request);

        return view('availability',[
            'rooms'=>$rooms,
            'hotel' => $hotel,
        ]);
    }
}
