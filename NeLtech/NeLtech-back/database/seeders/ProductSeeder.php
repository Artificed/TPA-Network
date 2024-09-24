<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'product_name' => 'TP-Link Archer AX73 AX5400 Dual-Band Gigabit Wi-Fi 6 Router - Archer AX73',
                'img_link' => 'images/Archer_AX73.jpg',
                'product_price' => 1770000,
                'category_id' => 1,
            ],
            [
                'product_name' => 'Cisco Business 110 Series CBS110-8T-D-EU, 8-Ports GbE Unmanaged Switch - Unit Only',
                'img_link' => 'images/CBS110.jpg',
                'product_price' => 1120000,
                'category_id' => 1,
            ],
            [
                'product_name' => 'NETGEAR 24-Port Gigabit Ethernet Switch Hub GS324',
                'img_link' => 'images/Netgear_GS324.jpg',
                'product_price' => 2999000,
                'category_id' => 1,
            ],
            [
                'product_name' => 'Processor Intel Core i7 12700F Box Alder Lake Socket LGA 1700',
                'img_link' => 'images/Intel_i7.jpg',
                'product_price' => 3990000,
                'category_id' => 4,
            ],
            [
                'product_name' => 'Processor Intel Core i5 13400F 2.5GHz Up To 4.6GHz - [Box] LGA 1700',
                'img_link' => 'images/Intel_i5.jpg',
                'product_price' => 3190000,
                'category_id' => 4,
            ],
            [
                'product_name' => 'ZOTAC GAMING Nvidia GeForce RTX 4080 SUPER Trinity OC White 16GB DDR6X',
                'img_link' => 'images/RTX_4080.jpg',
                'product_price' => 16730000,
                'category_id' => 5,
            ],
            [
                'product_name' => 'Colorful iGame GeForce RTX 4090 Vulcan OC',
                'img_link' => 'images/RTX_4090.jpg',
                'product_price' => 42395000,
                'category_id' => 5,
            ],
            [
                'product_name' => 'KOORUI 34E6UC Curved Gaming Monitor 21:9 Ultra Wide 165Hz 1ms HDR',
                'img_link' => 'images/KOORUI_34E6UC.jpg',
                'product_price' => 3990000,
                'category_id' => 2,
            ],
            [
                'product_name' => 'Monitor Samsung 27" Inch C27R500 Curved FHD LED FREESYNC | C27R500FHE - 27"',
                'img_link' => 'images/Samsung_C27R500.jpg',
                'product_price' => 1685000,
                'category_id' => 2,
            ],
            [
                'product_name' => 'Logitech MK470 / MK 470 Combo Keyboard & Mouse Wireless Slim - Graphite',
                'img_link' => 'images/Logi_MK470.jpg',
                'product_price' => 770000,
                'category_id' => 3,
            ],
            [
                'product_name' => 'Rexus KM8 Keyboard Mouse Wireless Combo - Hitam',
                'img_link' => 'images/Rexus_KM8-B.jpg',
                'product_price' => 144000,
                'category_id' => 3,
            ],
            [
                'product_name' => 'Rexus KM8 Keyboard Mouse Wireless Combo - Putih',
                'img_link' => 'images/Rexus_KM8-W.jpg',
                'product_price' => 159000,
                'category_id' => 3,
            ],
        ];

        foreach ($products as $product) {
            Product::factory()->create([
                'product_name' => $product['product_name'],
                'img_link' => asset($product['img_link']),
                'product_price' => $product['product_price'],
                'category_id' => $product['category_id'],
            ]);
        }
    }
}
