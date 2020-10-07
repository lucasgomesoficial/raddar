<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
use App\User;
use App\Models\Role;
use App\Models\Permission;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'kelyman Andrade',
            'email' => 'kelyman@andrade.com',
            'password' => bcrypt('kelyman12345'),
            'birth' => Carbon::parse('01-01-2001'),
            'adress' => 'https://trello.com/b/hLTssnBm.html',
            'corp' => '(00) 00000-0000',
            'pessoal' => '(00) 00000-0000',
            'cargo' => 'Administardor',
            'grupo' => 'Banho de Cheiro',
            'cidade' => 'Unaí',
            'estado' => 'Minas Gerais',
        ]);
        
        $user = User::create([
            'name' => 'Danrley Oliveira',
            'email' => 'danrley@masterlibras.com',
            'password' => bcrypt('danrley12345'),
            'birth' => Carbon::parse('01-01-2001'),
            'adress' => 'https://trello.com/b/x4idNNC9.html',
            'corp' => '(00) 00000-0000',
            'pessoal' => '(00) 00000-0000',
            'cargo' => 'CEO',
            'grupo' => 'Master Libras',
            'cidade' => 'Belo Horizonte',
            'estado' => 'Minas Gerais',
        ]);
        
        $user = User::create([
            'name' => 'Haddon Guimarães',
            'email' => 'haddon@haddon.com',
            'password' => bcrypt('haddon12345'),
            'birth' => Carbon::parse('01-01-2001'),
            'adress' => 'rua qualquer',
            'corp' => '(00) 00000-0000',
            'pessoal' => '(00) 00000-0000',
            'cargo' => 'Administardor',
            'grupo' => 'Banho de Cheiro',
            'cidade' => 'Unaí',
            'estado' => 'Minas Gerais',
        ]);
        
        $user = User::create([
            'name' => 'Luciana Vieira',
            'email' => 'luciana@vieira.com',
            'password' => bcrypt('luciana12345'),
            'birth' => Carbon::parse('01-01-2001'),
            'corp' => '(00) 00000-0000',
            'pessoal' => '(00) 00000-0000',
            'grupo' => 'Banho de Cheiro',
            'cidade' => 'Unaí',
            'estado' => 'Minas Gerais',
        ]);
    }
}
