<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Productos;
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
        Productos::truncate();
        Productos::create([
            'name' => 'Producto1',
            'description' => 'Descripcion producto1',
        ]);
        Productos::create([
            'name' => 'Producto2',
            'description' => 'Descripcion producto2',
        ]);
        Productos::create([
            'name' => 'Producto3',
            'description' => 'Descripcion producto3',
        ]);
        Productos::create([
            'name' => 'Producto4',
            'description' => 'Descripcion producto4',
        ]);
    }
}