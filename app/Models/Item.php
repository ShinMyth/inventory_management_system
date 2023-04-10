<?php
    namespace App\Models;

    class Item {
        public static function all() {
            return [
                [
                    'itemID' => 'I1',
                    'itemName' => 'Gown 1',
                    'itemDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis risus vitae turpis placerat sollicitudin eu vitae diam. Pellentesque ac porttitor leo. Sed dapibus, neque ac vestibulum fermentum, lorem dui mollis dolor, ac tristique massa quam at nisi. Nam quis tellus eu libero fermentum laoreet sit amet efficitur lectus.',
                ],
                    [
                    'itemID' => 'I2',
                    'itemName' => 'Gown 2',
                    'itemDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis risus vitae turpis placerat sollicitudin eu vitae diam. Pellentesque ac porttitor leo. Sed dapibus, neque ac vestibulum fermentum, lorem dui mollis dolor, ac tristique massa quam at nisi. Nam quis tellus eu libero fermentum laoreet sit amet efficitur lectus.',
                ],
            ];
        }

        public static function find($itemID) {
            $items = self::all();

            foreach ($items as $item) {
                if ($item['itemID'] == $itemID) {
                    return $item;
                }
            }
        }
    }