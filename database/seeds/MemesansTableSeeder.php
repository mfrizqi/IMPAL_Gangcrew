<?php

use Illuminate\Database\Seeder;

use App\Memesan;
use Carbon\Carbon;
class MemesansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Memesan::insert([
            'kamar_id' => 1,
            'user_id' => 1,
            'checkin' => '2018-12-5',
            'checkout' => '2018-12-15',
            'created_at' => Carbon::now()
        ]);
    }
}
