<?php

namespace App\Services;

use App\Booking;
use App\Service;
use App\Worker;

use Illuminate\Http\Request;

class DBController
{
    /*
    |--------------------------------------------------------------------------
    | DBController Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for extracting information
    | from the database regarding orders
    | for a specific service and time
    |
    */

    /**
     * Identifier of the service.
     *
     * @var integer
     */
    public $service_id;
    /**
     * Variables for the conversion of date and time.
     *
     * @var string
     */
    public $time_start;
    public $time_finish;
    public $week_day_s;
    public $hour_s;
    public $worker;
    /**
     * Create a new DBController instance.
     *
     * @return void
     */
    function __construct($service_id, $time)
    {

        $this->service_id = $service_id;

        $this->time_start = $time;

        $this->time_finish = date("Y-m-d H:i:s", strtotime($time) + 3600);

        $this->week_day_s = date("N", strtotime($time));

        $this->hour_s = date("H", strtotime($time));

    }
    /**
     * Extracting information from the database.
     *
     * @return boolean
     */
    public function select_data()
    {

        $workers = Worker::where('hour_start_work','<=', $this->hour_s)

        ->where('hour_end_work', '>', $this->hour_s)

        ->join('work_days','work_days.worker_id','=', 'workers.id')

        ->where('week_day_id', '=', $this->week_day_s)

        ->join('worker_services','worker_services.worker_id','=', 'workers.id')

        ->where('service_id', '=', $this->service_id)

        ->get();

        foreach ($workers as $worker)
        {
            $this->worker = $worker;

            $booking = Booking::where('worker_id', '=', $worker->worker_id)

            ->where(function ($query)
            {

                $query->where('time_start', '<=', $this->time_start)

                ->where('time_finish', '>', $this->time_start)

                ->orWhere('time_start', '<=', $this->time_finish)

                ->where('time_finish', '>', $this->time_finish);

            })

            ->get();

            if(!count($booking))
            {

                return true;
            }

        }
        return false;
    }
    /**
     * Save the booking to the database.
     *
     * @return void
     */
    public function save_to_db(Request $request)
    {

        $worker_id = $this->worker->worker_id;

        $booking = new Booking([
            'service_id' => $this->service_id,
            'worker_id' => $worker_id,
            'time_start' => $this->time_start,
            'time_finish' => $this->time_finish
        ]);

        $service = Service::find($request->input('service'));

        $service->bookings()->save($booking);
    }
}
