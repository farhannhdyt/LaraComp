<?php

use Illuminate\Database\Seeder;

class AdminProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->name = "Admin Profile";
        $administrator->email = "admin_profile@gmail.com";
        $administrator->level = "ADMIN_PROFILE";
        $administrator->status = "ACTIVE";
        $administrator->password = \Hash::make("laracomp");
        $administrator->phone = "087744411262";
        $administrator->address = "Bandung Kiaracondong";

        $administrator->save();

        $this->command->info("User Admin Profile berhasil diinsert");
    }
}
