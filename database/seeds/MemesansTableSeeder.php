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
            'id_kamar' => 1,
            'id_user' => 1,
            'jenis_kamar' => 'VIP',
            'harga' => 1000000,
            'status' => false,
            'checkin' => '2018-12-5',
            'checkout' => '2018-12-15',
            'created_at' => Carbon::now()
        ]);
    }
}
