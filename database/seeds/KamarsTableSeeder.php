<?php

use Illuminate\Database\Seeder;

use App\Kamar;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class KamarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kamar::insert([
            'jenis_kamar' => 'VIP',
            'harga_kamar' => 1000000,
            'status_kamar' => false,
            'created_at' => Carbon::now()
        ]);
    }
}
