<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rols = [
            (object) array("name"=> "Administrador",
            "code"=> "ADM"),
            (object) array("name"=>"Client",
            "code"=>"CLI")
        ];

        foreach ($rols as $value) {
            $rol = new Rol();
            $rol->name = $value->name;
            $rol->code = $value->code;
            $rol->save();
            if ($value->code === "ADM"){
                $user = new User();
                $user->name = "Administrador";
                $user->email = "admin@admin.com";
                $user->rol_id = $rol->id;
                $user->password = Hash::make('password');
                $user->save();
            }
        }
    }
}
