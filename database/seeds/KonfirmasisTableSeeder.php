<?php

use Illuminate\Database\Seeder;

use App\Konfirmasi;
use Carbon\Carbon;
class KonfirmasisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Konfirmasi::insert([
            'id_memesan' => 1,
            'status' => 'false',
            'created_at' => Carbon::now()
        ]);
    }
}
