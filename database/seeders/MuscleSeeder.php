<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Muscle;

class MuscleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $muscle = new Muscle();

        $data = [
            [ 'name' => 'trapecio',     'status' => 'A' ],
            [ 'name' => 'hombro',       'status' => 'A' ],
            [ 'name' => 'pecho',        'status' => 'A' ],
            [ 'name' => 'triceps',      'status' => 'A' ],
            [ 'name' => 'antebrazo',    'status' => 'A' ],
            [ 'name' => 'abdominales',  'status' => 'A' ],
            [ 'name' => 'espalda',      'status' => 'A' ],
            [ 'name' => 'espaldaBaja',  'status' => 'A' ],
            [ 'name' => 'gluteos',      'status' => 'A' ],
            [ 'name' => 'cuadriceps',   'status' => 'A' ],
            [ 'name' => 'femorales',    'status' => 'A' ],
            [ 'name' => 'pantorrilla',  'status' => 'A' ]
        ];
        DB::table('muscles')->insert($data);
    }
}
