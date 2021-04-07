<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        settings()->set([
            'admin_wallet' => '38djnVqWUVNtGCoSX9boChbvGsFpCia8pc',
            'address' => '133 Wai Yip Street 11F, 12F & Roof Floor, Hong Kong',
            'admin_mail' => 'inquiry@itacapitalpartners.com',
            'phone' => '+852 5803 7140',
            'working_time' => 'Mon - Sat: 9:00 - 18:00',
            'linkedin'    => '#',
            'facebook'    => '#',
            'twitter'     => '#',
            'google'      =>  '#',
        ]);
    }
}
