<?php

namespace App\Http\Controllers;

use Faker\Generator;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function listProducts (){
        $faker = Container::getInstance()->make(Generator::class);

        $product1 = new stdClass();
        $product1-> name = "Galletas De Cordero Y Arroz Laika By Rausch";
        $product1-> price = $faker->unique()->randomNumber($nbDigits = 4, $strict = true);
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
        $productos = [$product1, $product2, $product3];

        return $productos;
    }
}   
