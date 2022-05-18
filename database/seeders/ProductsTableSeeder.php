<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //This resets the table, deleting all the data everytime the function is called.
        Product::truncate();
        Product::create([
            'name' => 'Producto1',
            'description' => 'Descripcion producto1',
        ]);
        Product::create([
            'name' => 'Producto2',
            'description' => 'Descripcion producto2',
        ]);
        Product::create([
            'name' => 'Producto3',
            'description' => 'Descripcion producto3',
        ]);
        Product::create([
            'name' => 'Producto4',
            'description' => 'Descripcion producto4',
        ]);
    }
}