<?php

use Illuminate\Database\Seeder;
use App\Models\ContactModel;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactModel::truncate();
        $data = [
            'number'=>'028229222',
            'address'=>'adress here',
            'email'=>'admin@gmail.com',
            'maps'=>'password',
        ];

        $contact = ContactModel::create($data);
    }
}
