<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/products', function () {
    class Producto 
    {
        public $name = "";
        public $price = 0;
        public $price_old = 0;
        public $price_vip = 0;
        public $score = 0;
        public $img = "";
        public $variants = [];
    }

    $product1 = new stdClass();
    $product1-> name = "Galletas De Cordero Y Arroz Laika By Rausch";
    $product1-> price = 3400;
    $product1-> price_vip = 3000;
    $product1-> price_old = 3500;
    $product1-> score = 5;
    $product1-> variants = ['s', 'm', 'l'];
    $product1-> img = "https://laikapp.s3.amazonaws.com/dev_images_products/18362_130332_Dog_Chow_Abrazzos_Mini_Galletas_1642648828_500x500.jpg";

    $product2 = new stdClass();
    $product2-> name = "Pedigree - Alimento Húmedo Para Perro Adulto Raza Pequeña Carne Sobre";
    $product2-> price = 3400;
    $product2-> price_vip = 3000;
    $product2-> price_old = 3500;
    $product2-> score = 5;
    $product2-> variants = ["500G", "1KG", "2KG"];
    $product2-> img = "https://laikapp.s3.amazonaws.com/dev_images_products/17571_126403_Pedigree___Alimento_H__medo_Para_Perro_Adulto_Raza_Peque__a_Carne_Sobre_1641331176_300x300.jpg";

    $product3 = new stdClass();
    $product3-> name = "Hills Canine Treats Chicken";
    $product3-> price = 3400;
    $product3-> price_vip = 3000;
    $product3-> price_old = 3500;
    $product3-> score = 5;
    $product3-> variants = ["500G", "1KG", "2KG"];
    $product3-> img = "https://laikapp.s3.amazonaws.com/dev_images_products/29773_Hills_Canine_Treats_Chicken_1614209441_0_424x424.jpg";
    
    $product4 = new stdClass();
    $product4-> name = "Agility Gold Premios";
    $product4-> price = 16000;
    $product4-> price_vip = 14300;
    $product4-> price_old = 18000;
    $product4-> score = 3;
    $product4-> variants = ["500G", "1KG", "2KG"];
    $product4-> img = "https://s3.us-east-1.amazonaws.com/laikapp/images_products/00fb9487f9488201b208ba12806f6d50.png";
    

    $productos = [$product1, $product2, $product3, $product4];



    return $productos;
});