<?php

use Illuminate\Database\Seeder;
use App\Periodo;

class PeriodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $periodo = new Periodo();
        $periodo->periodo = 'enero-marzo';
        $periodo->save();

        $periodo = new Periodo();
        $periodo->periodo = 'abril-junio';
        $periodo->save();

        $periodo = new Periodo();
        $periodo->periodo = 'julio-septiembre';
        $periodo->save();

        $periodo = new Periodo();
        $periodo->periodo = 'octubre-diciembre';
        $periodo->save();
    }
}
