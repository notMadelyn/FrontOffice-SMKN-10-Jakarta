<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visitor;
use App\Models\Meet;
use App\Models\Utility;
use App\Models\Day;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Day::create([
            'name' => 'Senin'
        ]);

        Day::create([
            'name' => 'Selasa'
        ]);

        Day::create([
            'name' => 'Rabu'
        ]);

        Day::create([
            'name' => 'Kamis'
        ]);

        Day::create([
            'name' => 'Jumat'
        ]);

        Meet::create([
            'meet_with' => 'Kepala Sekolah',
        ]);
        Meet::create([
            'meet_with' => 'TU',
        ]);
        Meet::create([
            'meet_with' => 'BP',
        ]);
        Meet::create([
            'meet_with' => 'Staff Management',
        ]);
        Meet::create([
            'meet_with' => 'Staff TU',
        ]);
        Meet::create([
            'meet_with' => 'Guru',
        ]);
        Meet::create([
            'meet_with' => 'Guru Piket',
        ]);
        Meet::create([
            'meet_with' => 'Dan lain-lain',
        ]);


        Utility::create([
            'utilities' => 'Kedinasan'
        ]);
        Utility::create([
            'utilities' => 'Kesiswaan'
        ]);
        Utility::create([
            'utilities' => 'BP'
        ]);
        Utility::create([
            'utilities' => 'TU'
        ]);
        Utility::create([
            'utilities' => 'Dan lain-lain'
        ]);

        Visitor::create([
            'name' => 'Wulan',
            'address' => 'Jalan Abimanyu',
            'instance' => null,
            'phone_number' => null,
            'meet_id' => 1,
            'utility_id' => 4,
            'desc' => 'asdasd'
        ]);

        Visitor::create([
            'name' => 'Johm Kendall',
            'address' => 'Presidential',
            'instance' => 'PT Johanna Luar',
            'phone_number' => '021631784',
            'meet_id' => 1,
            'utility_id' => 1,
            'desc' => 'asdasd'
        ]);

        Visitor::create([
            'name' => 'Moana',
            'address' => 'Jalan Hudayana',
            'instance' => 'CV Bintaro',
            'phone_number' => '021491393',
            'meet_id' => 1,
            'utility_id' => 1,
            'desc' => 'asdasd'
        ]);
    }
}
