<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProdectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $record= new Product;
        $record->name="product A";
         $record->name_ar= "المنتج الف";
         $record->price= 10;
         $record->image_path= " ";
         $record->categroy_id= 1;
         $record->save();
    }
}
