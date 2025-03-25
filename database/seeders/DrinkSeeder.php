<?php

namespace Database\Seeders;

use App\Models\Drink;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Drink::insert([
            'id' => '1',
            'type' => 'Bira',
            'name' => 'Tuborg Fıçı (50cc)',
            'brand' => 'Tuborg',
            'description' => 'Tuborg\'un bilmem kaç gün dinlendirilmiş 50cl bardak fıçı bira.',
            'price' => 75.00,
            'stock' => 1,
            'picture' => 'https://live.staticflickr.com/6127/5977847862_d01e1d9e97_c.jpg',
        ]);

        Drink::insert([
            'id' => '2',
            'type' => 'Bira',
            'name' => 'Tuborg Fıçı (33cc)',
            'brand' => 'Tuborg',
            'description' => 'Tuborg\'un bilmem kaç gün dinlendirilmiş 50cl bardak fıçı bira.',
            'price' => 60.00,
            'stock' => 1,
            'picture' => 'https://live.staticflickr.com/6127/5977847862_d01e1d9e97_c.jpg',
        ]);

        Drink::insert([
            'id' => '3',
            'type' => 'Bira',
            'name' => 'Tuborg Fıçı (50cc)',
            'brand' => 'Tuborg',
            'description' => 'Tuborg\'un bilmem kaç gün dinlendirilmiş 50cl bardak fıçı bira.',
            'price' => 75.00,
            'stock' => 1,
            'picture' => 'https://live.staticflickr.com/6127/5977847862_d01e1d9e97_c.jpg',
        ]);

        Drink::insert([
            'id' => '4',
            'type' => 'Bira',
            'name' => 'Tuborg Fıçı (33cc)',
            'brand' => 'Tuborg',
            'description' => 'Tuborg\'un bilmem kaç gün dinlendirilmiş 50cl bardak fıçı bira.',
            'price' => 60.00,
            'stock' => 1,
            'picture' => 'https://live.staticflickr.com/6127/5977847862_d01e1d9e97_c.jpg',
        ]);

        Drink::insert([
            'id' => '5',
            'type' => 'Bira',
            'name' => 'Casberg Şişe (50cc)',
            'brand' => 'Casberg',
            'description' => 'Casberg\'un bilmem kaç gün dinlendirilmiş 50cl bardak fıçı bira.',
            'price' => 60.00,
            'stock' => 1,
            'picture' => 'https://live.staticflickr.com/6127/5977847862_d01e1d9e97_c.jpg',
        ]);

        Drink::insert([
            'id' => '6',
            'type' => 'Kokteyl',
            'name' => 'Cin Fiz',
            'brand' => 'Casberg',
            'description' => 'Cin fiz içeriği vs vs.',
            'price' => 95.00,
            'stock' => 1,
            'picture' => 'https://media.istockphoto.com/id/172430674/tr/foto%C4%9Fraf/martini.jpg?s=612x612&w=0&k=20&c=XbE4Rkz8zLJzrtzXAIEkrjwT_mYxCnovk7pqIwWJ-tA=',
        ]);

        Drink::insert([
            'id' => '7',
            'type' => 'Kokteyl',
            'name' => 'Cin Fiz',
            'brand' => 'Casberg',
            'description' => 'Cin fiz içeriği vs vs.',
            'price' => 200.00,
            'stock' => 1,
            'picture' => 'https://media.istockphoto.com/id/172430674/tr/foto%C4%9Fraf/martini.jpg?s=612x612&w=0&k=20&c=XbE4Rkz8zLJzrtzXAIEkrjwT_mYxCnovk7pqIwWJ-tA=',
        ]);

        Drink::insert([
            'id' => '8',
            'type' => 'Shot',
            'name' => 'Tekila Shot',
            'brand' => 'Casberg',
            'description' => 'Cin fiz içeriği vs vs.',
            'price' => 260.00,
            'stock' => 1,
            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLZhZsYVEqqMk0F2Z9ogSZXPgbEIv4uYD9Dg&usqp=CAU',
        ]);

        Drink::insert([
            'id' => '9',
            'type' => 'Shot',
            'name' => 'North Shot',
            'brand' => 'Casberg',
            'description' => 'Cin fiz içeriği vs vs.',
            'price' => 160.00,
            'stock' => 1,
            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLZhZsYVEqqMk0F2Z9ogSZXPgbEIv4uYD9Dg&usqp=CAU',
        ]);

        Drink::insert([
            'id' => '10',
            'type' => 'Shot',
            'name' => 'Tükenmiş Shot',
            'brand' => 'Casberg',
            'description' => 'Cin fiz içeriği vs vs.',
            'price' => 120.00,
            'stock' => 0,
            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLZhZsYVEqqMk0F2Z9ogSZXPgbEIv4uYD9Dg&usqp=CAU',
        ]);

        Drink::insert([
            'id' => '11',
            'type' => 'Aperitif',
            'name' => 'Çerez Tabağı',
            'brand' => '-',
            'description' => 'Karışık çerez tabağı',
            'price' => 50.00,
            'stock' => 1,
            'picture' => 'https://www.halktanpazar.com/kokteyl-luks-4-10-kg-toptan-halktan-1651-12-B.jpg',
        ]);

        Drink::insert([
            'id' => '12',
            'type' => 'Aperitif',
            'name' => 'Turşu Tabağı',
            'brand' => '-',
            'description' => 'İnce dilimlenmiş turşu tabağı.',
            'price' => 50.00,
            'stock' => 0,
            'picture' => 'https://cdn.yemek.com/mnresize/1250/833/uploads/2022/07/salatalik-tursusu-onecikan.jpg',
        ]);
    }
}
