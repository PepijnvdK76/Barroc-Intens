<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Product_categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
        $product->name = "Barroc Intens Italian Deluxe ";
        $product->description = "Lease contract: 799 excl btw Installatiekosten eenmalig vast: 375,- excl btw";
        $product->image_path = "";
        $product->product_code = "S234NNBMV";
        $product->price = 799.00 ;
        $product->products_category_id = 2;
        $product->save();

        $product = new Product();
        $product->name = "Barroc Intens Italian Deluxe Special";
        $product->description = "Lease contract: 999 excl btw Installatiekosten eenmalig vast: 375,- excl btw";
        $product->image_path = "";
        $product->product_code = "S234MMPLA";
        $product->price = 799.00 ;
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
        $product->name = "Espresso Roma";
        $product->description = "Een Italiaanse espresso met een krachtig karakter en een aromatische afdronk";
        $product->image_path = "";
        $product->product_code = "S239IPPSD";
        $product->price = 20.80 ;
        $product->products_category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = "Red Honey Honduras";
        $product->description = "De koffie is geproduceerd volgens de honey-methode. Hierbij wordt de koffieboon in haar vruchtvlees gedroogd, waardoor de zoete fruitsmaak diep in de boon trekt. Dit levert een éxtra zoete koffie op.";
        $product->image_path = "";
        $product->product_code = "S239EVVFS";
        $product->price = 27.80 ;
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



    }
}
