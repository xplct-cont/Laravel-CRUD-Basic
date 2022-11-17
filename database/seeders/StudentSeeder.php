<?php

namespace Database\Seeders;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            
            'lname' => 'Unabia',
            'fname' => 'Bruce',
            'course' => 'BSIT',
            'year' => '3rd Year'
           
            ],
        [
           
            'lname' => 'Lenteria',
            'fname' => 'Ace',
            'course' => 'BSIT',
            'year' => '3rd Year'
        ],
    ];
      
    foreach($data as $stud){
        \App\Models\Student::create($stud);
    }

  }

}
