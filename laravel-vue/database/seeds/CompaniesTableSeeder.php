<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Company::class, 5)->create();
   
        //guardar 5 registros
          DB::table('companies')->insert([	            
              'name' => 'Empresa 1',
              'money' => 1000,
              'contact' => 'Pedro',
              'telephone' => '65547879',
              'coment' => 'Empresa 1',
              'is_gestioned' => '0',
              'created_at' => DB::raw('now()'),
              'updated_at' => DB::raw('now()')
          ]);
          DB::table('companies')->insert([	            
            'name' => 'Empresa 2',
            'money' => 1000,
            'contact' => 'Pedro',
            'telephone' => '65547879',
            'coment' => 'Empresa 2',
            'is_gestioned' => '1',
            'created_at' => DB::raw('now()'),
            'updated_at' => DB::raw('now()')
          ]);
           
          DB::table('companies')->insert([	            
            'name' => 'Empresa 2',
            'money' => 1000,
            'contact' => 'Pedro',
            'telephone' => '65547879',
            'coment' => 'Empresa 2',
            'is_gestioned' => '1',
            'created_at' => DB::raw('now()'),
            'updated_at' => DB::raw('now()')
          ]);
          DB::table('companies')->insert([	            
            'name' => 'Empresa 4',
            'money' => 1000,
            'contact' => 'Pedro',
            'telephone' => '65547879',
            'coment' => 'Empresa 4',
            'is_gestioned' => '0',
            'created_at' => DB::raw('now()'),
            'updated_at' => DB::raw('now()')
          ]);
        

    }
}
