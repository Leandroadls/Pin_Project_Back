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
            'name' => 'Buenos Aires',
            'description' => 'Fin de semana',
        ]);
        Product::create([
            'name' => 'Mendoza',
            'description' => 'Bodegas',
        ]);
        Product::create([
            'name' => 'Cordoba',
            'description' => 'Sierras',
        ]);
        Product::create([
            'name' => 'San Luis',
            'description' => 'Cabañas',
        ]);
    }
}