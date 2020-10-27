<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Product;


class DatabaseSeeder extends Seeder
{
    //------------------------------------------------------------------------------------------------------------------
    public function run()
    {
        $this->call('RoleTableSeeder');
        $this->call(UsersTableSeeder::class);
        $this->call('PermissionTableSeeder');
        $this->call('ProductsTableSeeder');
    }
}

class RoleTableSeeder extends Seeder {

    public function run()
    {
        $role = Role::create([
            'name'=>'Administrador',
            'label'=>'Administrador do Sistema',
        ]);
        
        $role = Role::create([
            'name'=>'Manager',
            'label'=>'Gerência os Clientes',
        ]);
        
        $role = Role::create([
            'name'=>'Cliente',
            'label'=>'Nossos Clientes',
        ]);
    }

}

class ProductsTableSeeder extends Seeder {

    public function run()
    {
        $product = Product::create([
            'plan_action'=>'https://app.powerbi.com/view?r=eyJrIjoiODljOGI1MDctZTg3Mi00Y2FlLTg4NzQtNmNiYTVkOTliNTY1IiwidCI6IjJlOWQyYjA4LTc0NzctNDYxYS1hMTQ0LTZhYmIyMDYyYjY4OSJ9',
            'gere_group'=>'https://app.powerbi.com/view?r=eyJrIjoiN2JiZjQzNDUtODkyOC00MmI0LTgxOTktNDA0NTJiMWUyMGI2IiwidCI6IjJlOWQyYjA4LTc0NzctNDYxYS1hMTQ0LTZhYmIyMDYyYjY4OSJ9',
            'meta_realizado'=>'https://app.powerbi.com/view?r=eyJrIjoiZWIwODYwZGItNzVlNi00Njk0LWFmYTUtYmU3ZGYxMzIwNDZlIiwidCI6IjJlOWQyYjA4LTc0NzctNDYxYS1hMTQ0LTZhYmIyMDYyYjY4OSJ9',
            'indi_comer'=>'https://app.powerbi.com/view?r=eyJrIjoiODY1MjI1ZDgtYTZkOC00OGE3LWJkNTQtODgzMTYzYThiZWQ2IiwidCI6IjJlOWQyYjA4LTc0NzctNDYxYS1hMTQ0LTZhYmIyMDYyYjY4OSJ9',
            'indi_vd'=>'https://app.powerbi.com/view?r=eyJrIjoiNzRkNWQ4ZDUtNWI0Yi00ZGZkLWJjN2ItNDA2MDFiNWQ2ZDcyIiwidCI6IjJlOWQyYjA4LTc0NzctNDYxYS1hMTQ0LTZhYmIyMDYyYjY4OSJ9',
            'storage_map'=>'https://app.powerbi.com/view?r=eyJrIjoiMTRkYTZjYjQtYTY2Yy00OGIwLTkxOWUtN2UzNzczNjBiNDcxIiwidCI6IjJlOWQyYjA4LTc0NzctNDYxYS1hMTQ0LTZhYmIyMDYyYjY4OSJ9',
            'user_id'=>'1',
        ]);
        
        $product = Product::create([
            'gere_group'=>'https://app.powerbi.com/view?r=eyJrIjoiN2JiZjQzNDUtODkyOC00MmI0LTgxOTktNDA0NTJiMWUyMGI2IiwidCI6IjJlOWQyYjA4LTc0NzctNDYxYS1hMTQ0LTZhYmIyMDYyYjY4OSJ9',
            'user_id'=>'2',
        ]);
        
        $product = Product::create([
            'plan_action'=>'https://app.powerbi.com/view?r=eyJrIjoiODljOGI1MDctZTg3Mi00Y2FlLTg4NzQtNmNiYTVkOTliNTY1IiwidCI6IjJlOWQyYjA4LTc0NzctNDYxYS1hMTQ0LTZhYmIyMDYyYjY4OSJ9',
            'meta_realizado'=>'https://app.powerbi.com/view?r=eyJrIjoiZWIwODYwZGItNzVlNi00Njk0LWFmYTUtYmU3ZGYxMzIwNDZlIiwidCI6IjJlOWQyYjA4LTc0NzctNDYxYS1hMTQ0LTZhYmIyMDYyYjY4OSJ9',
            'indi_comer'=>'https://app.powerbi.com/view?r=eyJrIjoiODY1MjI1ZDgtYTZkOC00OGE3LWJkNTQtODgzMTYzYThiZWQ2IiwidCI6IjJlOWQyYjA4LTc0NzctNDYxYS1hMTQ0LTZhYmIyMDYyYjY4OSJ9',
            'user_id'=>'4',
        ]);
    }

}

class PermissionTableSeeder extends Seeder {

    public function run()
    {
        //
    }

}