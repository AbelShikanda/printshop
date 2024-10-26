<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateProductPriceTriggerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::unprepared('
            CREATE TRIGGER update_product_price_on_type_change
            BEFORE UPDATE ON products
            FOR EACH ROW
            BEGIN

                DECLARE new_price DECIMAL(10,2);
                
                -- Fetch the new price based on the new type_id only if the type_id changes
                IF OLD.type_id != NEW.type_id THEN
                    SELECT price INTO new_price 
                    FROM products
                    WHERE id = NEW.type_id;

                    -- Set the new price
                    SET NEW.price = new_price;
                END IF;
            END;
        ');
    }

    /**
     * Reverse the database seeds.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS update_product_price_on_type_change');
    }
}
