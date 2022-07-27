<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ['Cosmetics', 'Foods', 'Electronics', 'Grocery', 'Drinks', 'School Items'];
        $description = ['Making for beauty', 'Eating Items', 'Type of electronic device', 'Small things for the home', 'Drinking Items', 'Things for education'];
        $remark = ['Nothing', 'Delicious Foods', 'Nothing', 'Nothing', 'Cool drinks', 'Nothing'];

        for($i=0; $i<6; $i++){
            Category::create( 
                [
                    'Name'=> $category[$i],
                    'Description'=> $description [$i],
                    'Remark'=> $remark[$i],
                ]
            );
        }
    }
}
