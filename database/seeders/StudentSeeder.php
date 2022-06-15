<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
    	
    	/*for ($i=0; $i <=10 ; $i++) { 
    		DB::table('student')->insert([
            'name' => 'Divyesh',
            'email' => 'divyesh@gmail.com',
            //'password' => Hash::make('password'),
           // 'gender'=> Str::randomElement(['Male','Female']),
            'gender'=>'male',
            'address'=>'xyz address',
           // 'marks'=>Str::numberBetween(1, 100),
            'marks'=>'34',
            //'created_at' => $now,
            //'updated_at' => $now,
        ]);
    	}*/

    	$now = \Carbon\Carbon::now()->toDateTimeString();
        $faker = Faker::create();
        for ($i=0; $i <=50 ; $i++) { 
    		DB::table('student')->insert([
            'name' => $faker->name(),
            'email' => $faker->email(),
            //'password' => Hash::make('password'),
            'gender'=> $faker->randomElement(['Male','Female']),
            'address'=>$faker->address(),
            'marks'=>$faker->numberBetween(1, 100),
            
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    	}
    }
}
