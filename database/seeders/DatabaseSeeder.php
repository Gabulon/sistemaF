<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Sucursal;
use App\Models\Perfil;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $categoria= new Categoria();
        $categoria->categoria_desc="ELECTRÓNICA";
        $categoria->save();
        $categoria1=new Categoria();
        $categoria1->categoria_desc="LINEA BLANCA";
        $categoria1->save();
        $categoria2=new Categoria();
        $categoria2->categoria_desc="DEPORTES";
        $categoria2->save();
        $categoria3=new Categoria();
        $categoria3->categoria_desc="ALIMENTOS";
        $categoria3->save();
        $categoria4=new Categoria();
        $categoria4->categoria_desc="JARDÍN";
        $categoria4->save();

        $sucursal=new Sucursal();
        $sucursal->sucursal_desc="CUERNAVACA";
        $sucursal->save();
        $sucursal1=new Sucursal();
        $sucursal1->sucursal_desc="YAUTEPEC";
        $sucursal1->save();
        $sucursal2=new Sucursal();
        $sucursal2->sucursal_desc="CUAUTLA";
        $sucursal2->save();
        $sucursal3=new Sucursal();
        $sucursal3->sucursal_desc="ACAPULCO";
        $sucursal3->save();

        $perfil=new Perfil();
        $perfil->desc="ADMINISTRADOR";
        $perfil->save();
        $perfil=new Perfil();
        $perfil->desc="CAPTURISTA";
        $perfil->save();
    }
}
