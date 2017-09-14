<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('truncate pages'); //zera toda vez que rodar o comando
        factory(App\Page::class, 100)->create();
    }
}
