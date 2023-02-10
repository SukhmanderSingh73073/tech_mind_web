<?php

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\ScheduleUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        

        Schedule::updateOrCreate(
           
            [
                'slug'        => 'Morning Session',
                'school_id'   =>'1' , 
                'time_in'     => '09:00:00',
                'time_out'    => '18:00:00',
                
            ]
        );


        ScheduleUser::updateOrCreate(
            
            [
                'schedule_id'     => '1',
                'user_id'         => '10',
            ]
        );


    }
}
