<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'iPhone 15',
            'description' => 'Apple iPhone 15 com 128GB de armazenamento. Equipado com a nova tecnologia A17 Bionic, câmera de 48MP, e display Super Retina XDR.',
            'img' => '/img/1.jpg',
            'cost' => 999,
            'owner_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S24',
            'description' => 'Samsung Galaxy S24 com 256GB de armazenamento. Equipado com a câmera de 200MP, display AMOLED de 120Hz e bateria de longa duração de 5000mAh.',
            'img' => '/img/2.jpg',
            'cost' => 1200,
            'owner_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Google Pixel 8',
            'description' => 'Google Pixel 8 com 128GB de armazenamento. Câmera de 50MP com tecnologia de fotografia computacional, display OLED de 90Hz, e chipset Tensor G3.',
            'img' => '/img/3.jpg',
            'cost' => 850,
            'owner_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'OnePlus 12',
            'description' => 'OnePlus 12 com 256GB de armazenamento. Câmera tripla de 50MP, display Fluid AMOLED de 120Hz, e Snapdragon 8 Gen 2 para desempenho superior.',
            'img' => '/img/4.jpg',
            'cost' => 900,
            'owner_id' => 1,
            'category_id' => 1,
        ]);


        DB::table('products')->insert([
            'name' => 'Samsung fold 6',
            'description' => 'Samsung Galaxy Z Fold 6, com tela dobrável de 7.6 polegadas e 256GB de armazenamento. Design inovador com a flexibilidade de um smartphone e tablet em um só.',
            'img' => '/img/5.jpg',
            'cost' => 1200,
            'owner_id' => 1,
            'category_id' => 1,
        ]);


        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S23',
            'description' => 'Samsung Galaxy S23 com 256GB de armazenamento. Câmera de 50MP, display Dynamic AMOLED de 120Hz e processador Snapdragon 8 Gen 2.',
            'img' => '/img/6.jpg',
            'cost' => 1000,
            'owner_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Ipad 10',
            'description' => 'Apple iPad 10 com 128GB de armazenamento.Tela Retina de 10,2 polegadas, processador A14 Bionic e compatível com a Apple Pencil de 1ª geração.',
            'img' => '/img/7.jpg',
            'cost' => 1150,
            'owner_id' => 1,
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung Tab 7',
            'description' => 'Samsung Galaxy Tab S7 256GB de armazenamento.Tela Super AMOLED de 11 polegadas, processador Snapdragon 865+ e suporte a S Pen.',
            'img' => '/img/8.jpg',
            'cost' => 900,
            'owner_id' => 1,
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Lenovo M10',
            'description' => 'Lenovo Tab M10 com 128GB de armazenamento.Tela Full HD de 10.3 polegadas,ideal para assistir vídeos e navegar na internet.',
            'img' => '/img/9.jpg',
            'cost' => 700,
            'owner_id' => 1,
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Carregador sem fio',
            'description' => 'Carregador sem fio de 15W para smartphones. Compatível com todos os modelos de smartphones com carregamento sem fio.',
            'img' => '/img/carregador.jpg',
            'cost' => 50,
            'owner_id' => 1,
            'category_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => 'AirPods Pro',
            'description' => 'Fones de ouvido sem fio Apple AirPods Pro com cancelamento de ruído. Conexão automática com dispositivos Apple e qualidade de som superior.',
            'img' => '/img/airpod.jpg',
            'cost' => 200,
            'owner_id' => 1,
            'category_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung Galaxy Buds',
            'description' => 'Fones de ouvido sem fio Samsung Galaxy Buds com cancelamento de ruído. Conexão automática com dispositivos Samsung e qualidade de som superior.',
            'img' => '/img/buds.jpg',
            'cost' => 299,
            'owner_id' => 1,
            'category_id' => 3,
        ]);
    }
}
