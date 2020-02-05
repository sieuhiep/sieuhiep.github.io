<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            ['id'=>1,'email'=>'admin@gmail.com','password'=>bcrypt('123456'),'full'=>'tien dep zai','address'=>'Hà Nội','phone'=>'0869178297','level'=>1],
            ['id'=>2,'email'=>'siuhiep@gmail.com','password'=>bcrypt('123456'),'full'=>'sieu nhan','address'=>'Tàu','phone'=>'0125959658','level'=>2],
            ['id'=>3,'email'=>'hocmai@gmail.com','password'=>bcrypt('123456'),'full'=>'van long','address'=>'Cà mau','phone'=>'0868932416','level'=>1],
            ['id'=>4,'email'=>'hehehe@gmail.com','password'=>bcrypt('123456'),'full'=>'vu huong','address'=>'Cu ba','phone'=>'0962568568','level'=>2],
            ]);
    }
}
