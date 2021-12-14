<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //Create Basic Roles
        DB::table('roles')->insert([
            [
                'id' => Str::uuid(),
                'added_by' => '',
                'name' => 'Admin',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'added_by' => '',
                'name' => 'Candidate',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'added_by' => '',
                'name' => 'Recruiter',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        //Create Basic Countries
        DB::table('countries')->insert([
            [
                'id' => Str::uuid(),
                'name' => 'United Arab Emirates',
                'code' => 'UAE',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        //Query For Getting Basic Country Id
        $query = DB::table('countries')
            ->select('id')
            ->where('code', 'UAE')
            ->where('status', 1);
        $country_id = $query->first();

        //Create Basic Phone Codes
        DB::table('phone_codes')->insert([
            [
                'id' => Str::uuid(),
                'country_id' => $country_id->id,
                'code' => '+971',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        //Create Basic Cities
        DB::table('cities')->insert([
            [
                'id' => Str::uuid(),
                'name' => 'Dubai',
                'country_id' => $country_id->id,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Ajman',
                'country_id' => $country_id->id,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Al Ain',
                'country_id' => $country_id->id,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Abu Dhabi',
                'country_id' => $country_id->id,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Fujairah',
                'country_id' => $country_id->id,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Ras Al-Khaimah',
                'country_id' => $country_id->id,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Umm Al Quawain',
                'country_id' => $country_id->id,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        //Create Basic User

        //Query For Getting Basic Phone Code Id
        $query = DB::table('phone_codes')
            ->select('id')
            ->where('code', '+971')
            ->where('status', 1);
        $phone_code_id = $query->first();
        //Query For Getting Basic City Id
        $query = DB::table('cities')
            ->select('id')
            ->where('name', 'Dubai')
            ->where('status', 1);
        $city_id = $query->first();
        //Query For Getting Basic Role Id
        $query = DB::table('roles')
            ->select('id')
            ->where('name', 'Admin')
            ->where('status', 1);
        $role_id = $query->first();

        //Query For Getting Basic 'Recruiter' Role Id
        $recruiter = DB::table('roles')
            ->select('id')
            ->where('name', 'Recruiter')
            ->where('status', 1);
        $recruiter_role_id = $recruiter->first();

        //Query For Getting Basic 'Candidate' Role Id
        $candidate = DB::table('roles')
            ->select('id')
            ->where('name', 'Candidate')
            ->where('status', 1);
        $candidate_role_id = $candidate->first();

        $user = DB::table('users')->insert([
            [
                'id' => Str::uuid(),
                'name' => 'Super Admin',
                'email' => 'admin@resourceright.me',
                'country_id' => $country_id->id,
                'city_id' => $city_id->id,
                'password' => Hash::make('admin'),
                'role_id' => $role_id->id,
                'status' => 1,
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Recruiter',
                'email' => 'recruiter@resourceright.me',
                'country_id' => $country_id->id,
                'city_id' => $city_id->id,
                'password' => Hash::make('recruiter'),
                'role_id' => $recruiter_role_id->id,
                'status' => 1,
                'user_type' => 'Recruiter',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Candidate',
                'email' => 'candidate@resourceright.me',
                'country_id' => $country_id->id,
                'city_id' => $city_id->id,
                'password' => Hash::make('candidate'),
                'role_id' => $candidate_role_id->id,
                'status' => 1,
                'user_type' => 'Candidate',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        //Create VacanciesCategory
        DB::table('vacancies_categories')->insert([
            [
                'id' => Str::uuid(),
                'name' => 'IT/Digital',
                'parent_id' => null,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Cyber Security',
                'parent_id' => null,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Emiratisation',
                'parent_id' => null,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Life Science',
                'parent_id' => null,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Finance & Banking',
                'parent_id' => null,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        //Create VacanciesCategory
        DB::table('vacancies_types')->insert([
            [
                'id' => Str::uuid(),
                'name' => 'Full Time',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Contract',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);
        
        \App\Models\Skills::factory(5)->create();
        \App\Models\Industries::factory(5)->create();
    }
}
