<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Producto;
class ProductosTableSeeder extends Seeder
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
        Producto::truncate();
        Producto::create([
            'name' => 'Producto1',
            'description' => 'Descripcion producto1',
        ]);
        Producto::create([
            'name' => 'Producto2',
            'description' => 'Descripcion producto2',
        ]);
        Producto::create([
            'name' => 'Producto3',
            'description' => 'Descripcion producto3',
        ]);
        Producto::create([
            'name' => 'Producto4',
            'description' => 'Descripcion producto4',
        ]);
    }
}