<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groupAdmin = new Group();
        $groupAdmin->key='admin';
        $groupAdmin->name='گروه مدیر';
        $groupAdmin->description='گروه مدیریت کل پنل';
        $groupAdmin->save();




        $groupAnbar= new Group();
        $groupAnbar->key='anbar';
        $groupAnbar->name='گروه انبار';
        $groupAnbar->description='گروه انبار ';
        $groupAnbar->save();

    }
}
