<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
use App\Models\Seguridad\Usuario;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $usuario=Usuario::create([
            'usuario' => 'admin',
            'nambre'=>'Administrador',
            'email'=>'nina@gmail.com'
            'password' => bcrypt("pass123")
        ]);
        $usuario->roles()->sync(1);
      /*  DB::table('usuario')->insert([
            'usuario' => 'rat',
            'nambre'=>'Roosvelt',
            'password' => bcrypt("pass123")
        ]);*/

        /*DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado'=>1
        ]);*/

       /* DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 2,
            'estado'=>1
        ]);*/
    }
}
