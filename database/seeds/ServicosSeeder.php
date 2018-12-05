<?php

use Illuminate\Database\Seeder;

class ServicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicos')->insert(['nome' => 'Impressão']);
        DB::table('servicos')->insert(['nome' => 'Serigrafia']);
        DB::table('servicos')->insert(['nome' => 'Adesivagem']);
        DB::table('servicos')->insert(['nome' => 'Arte Design']);

    }
}
