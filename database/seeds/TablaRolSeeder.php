<?php

use Illuminate\Database\Seeder;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $rols=[
        'administrador',
        'usuario',
        'editor',
    ];

    foreach ($rols as $key => $value) {
    DB::table('rol')->insert([

        'nombre'=> $value,
        
    ]);  
    
    }





    }
}
