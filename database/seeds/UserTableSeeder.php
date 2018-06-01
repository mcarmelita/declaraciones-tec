<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_transparencia = Role::where('name', 'transparencia')->first();
        $role_cescolar = Role::where('name', 'cescolar')->first();
        $role_desarrolloa = Role::where('name', 'desarrolloa')->first();
        $role_difusion = Role::where('name', 'difusion')->first();
        $role_personal = Role::where('name', 'personal')->first();
        $role_planeacion = Role::where('name', 'planeacion')->first();
        $role_planprog = Role::where('name', 'planprog')->first();
        $role_recfinancieros = Role::where('name', 'recfinancieros')->first();
        $role_recmateriales = Role::where('name', 'recmateriales')->first();
        $role_vinplan = Role::where('name', 'vinplan')->first();
        $role_direccion = Role::where('name', 'direccion')->first();
        $role_subacademica = Role::where('name', 'subacademica')->first();
        $role_subplaneacion = Role::where('name', 'subplaneacion')->first();
        $role_subservicios = Role::where('name', 'subservicios')->first();
        $role_subvinculacion = Role::where('name', 'subvinculacion')->first();
        $role_subvp = Role::where('name', 'subvp')->first();

        $user = new User();
        $user->name = 'Administrador';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);
        
        $user = new User();
        $user->name = 'Comite de Transparencias';
        $user->email = 'transparencia@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_transparencia);
        
        $user = new User();
        $user->name = 'Control Escolar';
        $user->email = 'cescolar@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_cescolar);
        
        $user = new User();
        $user->name = 'Desarrollo Academico';
        $user->email = 'desarrolloa@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_desarrolloa);
        
        $user = new User();
        $user->name = 'Difusion';
        $user->email = 'difusion@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_difusion);
        
        $user = new User();
        $user->name = 'Personal';
        $user->email = 'personal@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_personal);
        
        $user = new User();
        $user->name = 'Planeacion';
        $user->email = 'planeacion@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_planeacion);
        
        $user = new User();
        $user->name = 'Planeacion y Programacion';
        $user->email = 'planprog@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_planprog);
        
        $user = new User();
        $user->name = 'Recursos Financieros';
        $user->email = 'recfinancieros@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_recfinancieros);
        
        $user = new User();
        $user->name = 'Recursos Materiales';
        $user->email = 'recmateriales@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_recmateriales);
        
        $user = new User();
        $user->name = 'Vinculacion y Planeacion';
        $user->email = 'vinplan@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_vinplan);
        
        $user = new User();
        $user->name = 'Direccion General';
        $user->email = 'direccion@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_direccion);
        
        $user = new User();
        $user->name = 'Subdireccion Academica';
        $user->email = 'subacademica@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_subacademica);
        
        $user = new User();
        $user->name = 'Subdireccion de Planeacion';
        $user->email = 'subplaneacion@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_subplaneacion);
        
        $user = new User();
        $user->name = 'Subdireccion de Servicios Administrativos';
        $user->email = 'subservicios@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_subservicios);
        
        $user = new User();
        $user->name = 'Subdireccion de Vinculacion';
        $user->email = 'subvinculacion@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_subvinculacion);
        
        $user = new User();
        $user->name = 'Subdireccion de Vinculacion y Planeacion';
        $user->email = 'subvp@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_subvp);

    }
}
