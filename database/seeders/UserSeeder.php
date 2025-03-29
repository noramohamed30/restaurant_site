<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // استدعاء Hash

class UserSeeder extends Seeder
{
    private $userdata = [
        ["id"=> 1, "name" => "Asif", "usertype" => "0", "email" => "asraf2asif@gmail.com", "password" => "password123"],
        ["id"=> 2, "name" => "Admin-Asif", "usertype" => "1", "email" => "client.asraf2asif@gmail.com", "password" => "admin123"],
        ["id"=> 3, "name" => "Asif4", "usertype" => "0", "email" => "asraf2asif45@gmail.com", "password" => "secret456"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // حذف جميع المستخدمين الحاليين (اختياري)
        User::truncate();

        foreach ($this->userdata as $data) {
            User::create([
                'id' => $data["id"],
                'name' => $data["name"],
                'usertype' => $data["usertype"],
                'email' => $data["email"],
                'password' => Hash::make($data["password"]), // تشفير كلمة المرور أثناء الإدراج
            ]);
        }
    }
}
