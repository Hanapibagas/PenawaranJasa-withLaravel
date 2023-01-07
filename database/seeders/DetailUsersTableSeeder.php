<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Seeder;

class DetailUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.xxxxx
     *
     * @return void
     */
    public function run()
    {
        $details = [
            [
                'user_id' => '1',
                'photo' => '',
                'roles' => 'website developer',
                'contact_number' => '',
                'biography' => '',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'user_id' => '2',
                'photo' => '',
                'roles' => 'UI/UX',
                'contact_number' => '',
                'biography' => '',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ]
        ];

        DetailUser::insert($details);
    }
}
