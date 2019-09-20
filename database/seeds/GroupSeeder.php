<?php

use App\Group;
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
        $group=new Group();
        $group->name='Quan Ly Nhan Su';
        $group->save();

        $group=new Group();
        $group->name='Le Tan';
        $group->save();

        $group=new Group();
        $group->name='IT';
        $group->save();
    }
}
