<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->descripcion = 'Administrator';
        $role->save();

        $role = new Role();
        $role->name = 'transparencia';
        $role->descripcion = 'Comite de Transparencias';
        $role->save();

        $role = new Role();
        $role->name = 'cescolar';
        $role->descripcion = 'Control Escolar';
        $role->save();

        $role = new Role();
        $role->name = 'desarrolloa';
        $role->descripcion = 'Desarrollo Academico';
        $role->save();

        $role = new Role();
        $role->name = 'difusion';
        $role->descripcion = 'Difusion';
        $role->save();

        $role = new Role();
        $role->name = 'personal';
        $role->descripcion = 'Personal';
        $role->save();

        $role = new Role();
        $role->name = 'planeacion';
        $role->descripcion = 'Planeacion';
        $role->save();

        $role = new Role();
        $role->name = 'planprog';
        $role->descripcion = 'Planeacion y Programacion';
        $role->save();

        $role = new Role();
        $role->name = 'recfinancieros';
        $role->descripcion = 'Recursos Financieros';
        $role->save();

        $role = new Role();
        $role->name = 'recmateriales';
        $role->descripcion = 'Recursos Materiales';
        $role->save();

        $role = new Role();
        $role->name = 'vinplan';
        $role->descripcion = 'Vinculacion y Planeacion';
        $role->save();

        $role = new Role();
        $role->name = 'direccion';
        $role->descripcion = 'Direccion General';
        $role->save();

        $role = new Role();
        $role->name = 'subacademica';
        $role->descripcion = 'Subdireccion Academica';
        $role->save();

        $role = new Role();
        $role->name = 'subplaneacion';
        $role->descripcion = 'Subdireccion de Planeacion';
        $role->save();

        $role = new Role();
        $role->name = 'subservicios';
        $role->descripcion = 'Subdireccion de Servicios Administrativos';
        $role->save();

        $role = new Role();
        $role->name = 'subvinculacion';
        $role->descripcion = 'Subdireccion de Vinculacion';
        $role->save();

        $role = new Role();
        $role->name = 'subvp';
        $role->descripcion = 'Subdireccion de Vinculacion y Planeacion';
        $role->save();
    }
}
