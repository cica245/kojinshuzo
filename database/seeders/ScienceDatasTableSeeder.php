<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScienceDatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {//
    # リセット
    // DB::table('science_datas')->delete();

    // # 日本語設定
    // $faker = Faker\Factory::create('ja_JP');

    // # サンプルデータの挿入
    // for ($i = 0; $i < 10; $i++) {
    //     \App\ScienceData::create([
    //         'name' => $faker->name(),
    //         'email' => $faker->email(),
    //         'tel' => $faker->phoneNumber(),
    //         'message' => $faker->text()
    //     ]);
    // }
    }
}
