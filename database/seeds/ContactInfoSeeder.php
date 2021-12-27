<?php

use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact_info = [
            [
                'name' => 'Paroi Utsab',
                'email' => 'paroiutsab@gmail.com',
                'contact_number' => '123456789',
                'subject' => 'want to donate',
                'message' => 'I want to donate this organization'
            ],
            [
                'name' => 'Partho Borua',
                'email' => 'parthoborua@gmail.com',
                'contact_number' => '123456789',
                'subject' => 'want to member',
                'message' => 'I want to work for this organization'
            ],
        ];

        foreach ($contact_info as $key => $value) {
            DB::table('contact_infos')->insert([
                $key => $value
            ]); 
        }
    }
}
