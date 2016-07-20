<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

	    $this->call(UsersTableSeeder::class);
	    $this->call(cardinfosTableSeeder::class);
	    $this->call(cardstatementsTableSeeder::class);
	    $this->call(messagesTableSeeder::class);
	    $this->call(personinfosTableSeeder::class);
	    $this->call(transactionsTableSeeder::class);	   

	    Model::reguard();
    }
}
