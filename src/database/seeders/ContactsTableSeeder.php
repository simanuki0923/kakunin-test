<?php

namespace Database\Seeders;

use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
     $this->call(ContactsTableSeeder::class);       
     factory(Contact::class, 35)->create();
    }
}