<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new Employee();
        $employee->name = 'Giap Van Sang';
        $employee->birthday = '1991/12/10';
        $employee->gender = "Nam";
        $employee->phone = 363001901;
        $employee->id_card = 121854780;
        $employee->email = 'vansang.smarthaui@gmail.com';
        $employee->addresss = 'Nguyen Xa, Minh Khai, Tu Liem';
        $employee->group_id = 1;
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Nguyen Van Hai';
        $employee->birthday = '1995/6/10';
        $employee->gender = "Nam";
        $employee->phone = 363001075;
        $employee->id_card = 121784780;
        $employee->email = 'hai@gmail.com';
        $employee->addresss = 'Bat Trang';
        $employee->group_id = 2;
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Nguyen Thi Xoan';
        $employee->birthday = '1996/7/10';
        $employee->gender = "Nam";
        $employee->phone = 363066091;
        $employee->id_card = 121858080;
        $employee->email = 'xoan@gmail.com';
        $employee->addresss = 'Hoa Binh';
        $employee->group_id = 1;
        $employee->save();

    }
}
