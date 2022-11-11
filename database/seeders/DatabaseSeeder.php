<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Product_categories;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = "Admin";
        $user->email = "Admin@admin.com";
        $user->password = "Admin123";
        $user->role_id = "1";
        $user->active = "1";
        $user->save();

        $category = new Product_categories();
        $category->name = "bonen";
        $category->is_employee_only = 0;
        $category->save();

        $category = new Product_categories();
        $category->name = "apparaten";
        $category->is_employee_only = 0;
        $category->save();

        $category = new Product_categories();
        $category->name = "materialen";
        $category->is_employee_only = 1;
        $category->save();

        $product = new Product();
        $product->name = "Barroc Intens Italian Light";
        $product->description = "Lease contract: 499,- excl btw per maand installatiekosten vast: 289,- excl btw.";
        $product->image_path = "";
        $product->product_code = "S234FREKT";
        $product->price = 499.00 ;
        $product->products_category_id = 2;
        $product->save();

        $product = new Product();
        $product->name = "Barroc Intens Italian";
        $product->description = "Lease contract: 599 excl btw Installatiekosten vast: 289,- excl btw.";
        $product->image_path = "";
        $product->product_code = "S234KNDPF";
        $product->price = 599.00 ;
        $product->products_category_id = 2;
        $product->save();

        $product = new Product();
        $product->name = "Espresso Beneficio";
        $product->description = "Een toegankelijke en zachte koffie. Hij is afkomstig van de Finca El Limoncillo, een weelderige plantage aan de rand van het regenwoud in de Matagalpa regio in Nicaragua";
        $product->image_path = "";
        $product->product_code = "S239KLIUP";
        $product->price = 22.50 ;
        $product->products_category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = "Yellow Bourbon Brasil";
        $product->description = "Koffie van de oorspronkelijke koffiestruik (de Bourbon) met gele koffiebessen. Deze zeldzame koffie heeft de afgelopen 20 jaar steeds meer erkenning gekregen en vele prijzen gewonnen.";
        $product->image_path = "";
        $product->product_code = "S239MNKLL";
        $product->price = 23.20 ;
        $product->products_category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = "schroef";
        $product->description = "";
        $product->product_code = "S239MNSCLL";
        $product->image_path = "";
        $product->price = 0.20 ;
        $product->products_category_id = 3;
        $product->save();

        $this->call([
            UserSeeder::class,
            CompanySeeder::class,
            /*InvoiceProductsSeeder::class,
            InvoiceSeeder::class,*/

        ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
