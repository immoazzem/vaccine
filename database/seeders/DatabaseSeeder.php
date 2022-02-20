<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\District;
use App\Models\Division;
use App\Models\People;
use App\Models\Upazila;
use App\Models\User;
use App\Models\VaccinationCenter;
use App\Models\Vaccine;
use Illuminate\Database\Seeder;
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
        People::factory(30)->create();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('admin123');
        $user->email_verified_at = now();
        $user->remember_token = Str::random($length = 10);
        $user->save();


        //Category
        foreach (vac_bd_categories() as $category) {
            $all_categories = new Category();
            $all_categories->name = $category['name'];
            $all_categories->bn_name = $category['bn_name'];
            $all_categories->min_age = $category['min_age'];
            $all_categories->save();
        };

        //vaccine list
        foreach (vac_bd_vaccines() as $vaccine) {
            $all_vaccines = new Vaccine();
            $all_vaccines->id = $vaccine['id'];
            $all_vaccines->name = $vaccine['name'];
            $all_vaccines->org_name = $vaccine['org_name'];
            $all_vaccines->alt_name = $vaccine['alt_name'];
            $all_vaccines->type = $vaccine['type'];
            $all_vaccines->save();
        }

        //create divisions
        foreach (vac_bd_divisions() as $division) {
            $all_divisions = new Division();
            $all_divisions->id = $division['id'];
            $all_divisions->name = $division['name'];
            $all_divisions->bn_name = $division['bn_name'];
            $all_divisions->url = $division['url'];
            $all_divisions->save();
        }

        //create districts
        foreach (vac_bd_districts() as $district) {
            $all_district = new District();
            $all_district->id = $district['id'];
            $all_district->division_id = $district['division_id'];
            $all_district->name = $district['name'];
            $all_district->bn_name = $district['bn_name'];
            $all_district->lat = $district['lat'];
            $all_district->lon = $district['lon'];
            $all_district->url = $district['url'];
            $all_district->save();
        }

        //create all upazilas
        foreach (vac_bd_upazils() as $upazila) {
            $all_upazilas = new Upazila();
            $all_upazilas->id = $upazila['id'];
            $all_upazilas->district_id = $upazila['district_id'];
            $all_upazilas->name = $upazila['name'];
            $all_upazilas->bn_name = $upazila['bn_name'];
            $all_upazilas->save();
        }

        VaccinationCenter::factory(30)->create();
    }
}
