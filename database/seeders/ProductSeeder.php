<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = ['Hair oil', 'Sampo', 'Face wash', 'Cream', 'Cake', 'Biscuits', 'Mixture', 'rolls', 'Grinders', 'Fans', 'Watch', 'Sugar', 'Rice', 'Wheat Flour', 'Tea', 'Grains', 'Butter', 'coconut oil', 'milk', 'eggs', 'onions', 'Honey', 'Pepper', 'Soup', 'Fruit', 'Vegetables', 'Yogurt', 'Bread', 'Meat', 'Fish', 'Vinegar', 'spices', 'Pulses', 'Garlic','Soda','Milo', 'Ice-cream', 'Water-bottle', 'Juice', 'Coffee', 'Milkshake', 'Pen', 'CR-Book', 'Pencil', 'Bags', 'Book', 'Ruler', 'Eraser', 'Drawing book', 'color pencil'];
        $category = ['Cosmetics', 'Cosmetics', 'Cosmetics', 'Cosmetics', 'Foods', 'Foods', 'Foods', 'Foods', 'Electronics', 'Electronics', 'Electronics', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery', 'Grocery','Drinks','Drinks', 'Drinks', 'Drinks', 'Drinks', 'Drinks', 'Drinks', 'School Items', 'School Items', 'School Items', 'School Items', 'School Items', 'School Items', 'School Items', 'School Items', 'School Items'];
        $price = [400, 100, 300, 280, 480, 300, 40, 50, 8000, 6600, 2000, 380, 300, 300, 800, 200, 280, 340, 300, 50, 400, 800, 400, 180, 200, 300, 300, 140, 1400, 400, 80, 90, 40, 20,430,60, 120, 170, 220, 40, 80, 30, 240, 20, 2400, 80, 10, 10, 300, 400];

        for($i=0; $i<50; $i++){
            Product::create( 
                [
                    'ProductName'=> $product[$i],
                    'CategoryName'=> $category [$i],
                    'UnitPrice'=> $price[$i],
                ]
            );
        }
    }
}
