<?php
    
    const ORDER_BY_PRICE_ASC = 'price-asc';
    const ORDER_BY_PRICE_DSC = 'price-desc'; 

    $categories = [
    'shoes'=>1,
    'shirts'=>2,
    'pants'=>3,
    'jackets'=>4
    ];

    $products = [
    [
    'id' => 1,
    'title' => 'Letnje patike',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laboriosam.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.',
    'img' => './public/theme/img/shoe.jpg',
    'price' => 140,
    'category' => 1,
    'brand' => 'shoes',
    'available' => false
    ],
    [
    'id' => 2,
    'title' => 'Starke',
    'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/redShoesjpg.jpg',
    'price' => 110.5,
    'category' => 1,
    'brand' => 'shoes',
    'available' => true
    ],
    [
    'id' => 4,
    'title' => 'Red Dragon',
    'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/fall-love.jpg',
    'price' => 99.5,
    'category' => 1,
    'brand' => 'shoes',
    'available' => true
    ],
    [
    'id' => 5,
    'title' => 'Lumber Jack',
    'description' => 'Lorem ipsum dolor sit ametLorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et. consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/lumberjack.jpg',
    'price' => 55.5,
    'category' => 2,
    'brand' => 'shirt',
    'available' => true
    ],
    [
    'id' => 6,
    'title' => 'Pink Shirt',
    'description' => 'Lorem ipsum dolor sit Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.amet consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/pink.webp',
    'price' => 34.5,
    'category' => 2,
    'brand' => 'shirt',
    'available' => true
    ],
    [
    'id' => 7,
    'title' => 'Cycling shirt',
    'description' => 'Lorem ipsum dolor sit amet consecteturLorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et. adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/cycling.jpg',
    'price' => 100,
    'category' => 2,
    'brand' => 'shirt',
    'available' => true
    ],
    [
    'id' => 9,
    'title' => 'Navy polka dot',
    'description' => 'Lorem ipsum dolor sit ametLorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et. consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/navy.jpg',
    'price' => 200.99,
    'category' => 2,
    'brand' => 'shirt',
    'available' => true
    ],
    [
    'id' => 10,
    'title' => 'Orange shirt',
    'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/orange-shirt.jpg',
    'price' => 120.35,
    'category' => 2,
    'brand' => 'shirt',
    'available' => true
    ],
    [
    'id' => 11,
    'title' => 'Sloth Lama',
    'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/sloth.jpg',
    'price' => 146.35,
    'category' => 2,
    'brand' => 'shirt',
    'available' => true
    ],
    [
    'id' => 12,
    'title' => 'Roller blade shoes',
    'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/roller-shoes.jpg',
    'price' => 250,
    'category' => 1,
    'brand' => 'shoes',
    'available' => true
    ],
    [
    'id' => 13,
    'title' => 'Addidas classic shoes',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.laboriosam.',
    'img' => './public/theme/img/adidas-classic.webp',
    'price' => 130,
    'category' => 1,
    'brand' => 'shoes',
    'available' => true
    ],
    [
    'id' => 14,
    'title' => 'Leather shoes',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.Libero, laboriosam.',
    'img' => './public/theme/img/leather-shoes.webp',
    'price' => 177,
    'category' => 1,
    'brand' => 'shoes',
    'available' => true
    ],
    [
    'id' => 15,
    'title' => 'Pilgrim pants',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero,Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et. laboriosam.',
    'img' => './public/theme/img/pilgrim-pants.jpg',
    'price' => 250,
    'category' => 3,
    'brand' => 'pants',
    'available' => true
    ],
    [
    'id' => 16,
    'title' => 'Cumulus pants',
    'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/cumulus-pants.jpg',
    'price' => 300,
    'category' => 3,
    'brand' => 'pants',
    'available' => true
    ],
    [
    'id' => 17,
    'title' => 'Black lady',
    'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/lady-black.jpg',
    'price' => 150,
    'category' => 3,
    'brand' => 'pants',
    'available' => true
    ],
    [
    'id' => 19,
    'title' => 'Cargo Slim',
    'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/cargo-slim.jpg',
    'price' => 120.79,
    'category' => 3,
    'brand' => 'pants',
    'available' => true
    ],
    [
    'id' => 20,
    'title' => 'Adidas Trainers',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et. Libero, laboriosam.',
    'img' => './public/theme/img/trainers.webp',
    'price' => 170,
    'category' => 3,
    'brand' => 'pants',
    'available' => true
    ],
    [
    'id' => 21,
    'title' => 'Blue classy pants',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.laboriosam.',
    'img' => './public/theme/img/blue-class.webp',
    'price' => 135,
    'category' => 3,
    'brand' => 'pants',
    'available' => true
    ],
    [
    'id' => 22,
    'title' => 'Flower pattern pants',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laboriosam.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.',
    'img' => './public/theme/img/flowers.jpg',
    'price' => 120,
    'category' => 3,
    'brand' => 'pants',
    'available' => true
    ],
    [
    'id' => 23,
    'title' => 'Blue trainers',
    'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/blue-trainers.jpg',
    'price' => 155,
    'category' => 3,
    'brand' => 'pants',
    'available' => false
    ],
    [
    'id' => 24,
    'title' => 'Red Bomber',
    'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/red-bomber.jpg',
    'price' => 249,
    'category' => 4,
    'brand' => 'jacket',
    'available' => true
    ],
    [
    'id' => 25,
    'title' => 'Black Windproof jacket',
    'description' => 'Lorem ipsum dolor sit amet Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/black-windproof.jpg',
    'price' => 265,
    'category' => 4,
    'brand' => 'jacket',
    'available' => false
    ],
    [
    'id' => 27,
    'title' => 'Sahiba jacket',
    'description' => 'Lorem ipsum dolor sit ametLorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et. consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/sahiba.jpg',
    'price' => 320,
    'category' => 4,
    'brand' => 'jacket',
    'available' => true
    ],
    [
    'id' => 28,
    'title' => 'Olive jacket',
    'description' => 'Lorem ipsum dolor Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.sit amet consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/olive.jpg',
    'price' => 389,
    'category' => 4,
    'brand' => 'jacket',
    'available' => false
    ],
    [
    'id' => 29,
    'title' => 'Colledge jacket',
    'description' => 'Lorem Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.ipsum dolor sit amet consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/colledge.webp',
    'price' => 310,
    'category' => 4,
    'brand' => 'jacket',
    'available' => true
    ],
    [
    'id' => 30,
    'title' => 'Moto jacket',
    'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laboriosam.',
    'img' => './public/theme/img/moto.webp',
    'price' => 380,
    'category' => 4,
    'brand' => 'jacket',
    'available' => false
    ],
    [
    'id' => 31,
    'title' => 'Leather jacket',
    'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odit exercitationem magni modi accusamus architecto consequatur? Debitis similique voluptatem, quam eum repudiandae perspiciatis unde animi laborum, ab iure nam numquam. Quia reprehenderit unde facere vero officia harum, modi facilis excepturi eveniet porro, quod ab possimus eaque natus. Nihil id eos a molestiae nobis aperiam natus incidunt expedita omnis nemo modi magnam fugit sint placeat, minus excepturi, quisquam dicta quibusdam! Assumenda ducimus eius dolor, eaque unde corrupti illo quae quia pariatur alias ipsam accusantium? Magnam at, eius, cupiditate eveniet ab quasi aspernatur reiciendis, dolorem maiores nisi perspiciatis reprehenderit eligendi? Ab, et.',
    'img' => './public/theme/img/leather.jpg',
    'price' => 410,
    'category' => 4,
    'brand' => 'jacket',
    'available' => true
    ]
];
/**
 * function that returns array of all products id's. It is required for security purposes and white list check
 */
function getAllIds(){
    global $products;
    $idArray=array();
    foreach ($products as $product) {
        if($product['available']!=false){
            $idArray[]=$product['id'];
        }   
    }
    return $idArray;
}

/**
 * function that returns all available products
 * @param $sort string optional
 * @return mixed
 */
function getAllProducts($sort=""):mixed{
    global $products;
    $availableProducts = array();
    foreach ($products as $product) {
        if($product['available'] == true){
            $availableProducts[]=$product;
        }
    }
    if($sort!=""){
        if($sort == ORDER_BY_PRICE_ASC ){
            $price = array();
            foreach ($availableProducts as $key => $row) {
                $price[$key] = $row['price'];
            }
            array_multisort($price, SORT_ASC, $availableProducts);
          
        }
        if($sort == ORDER_BY_PRICE_DSC ){
            $price = array();
            foreach ($availableProducts as $key => $row) {
                $price[$key] = $row['price'];
            }
            array_multisort($price, SORT_DESC, $availableProducts);
           
        }
    }
    return $availableProducts; 
}
/**
 * function that filters available products for search term
 * @param array $products- available products
 * @param $searchTerm String 
 * @return array
 */
function searchProductsByTerm($products,$searchTerm,$sortBy){
    $availableProducts = getAllProducts($sortBy);
    $searchedArray = array();
    foreach ($availableProducts as $product) {
        if(str_contains($product['title'],$searchTerm) || str_contains($product['brand'],$searchTerm) || str_contains($product['description'],$searchTerm) ){
            $searchedArray[]=$product;
        }
    }
    return $searchedArray;
}
/**
 * function that returns array of one product
 * @param integer $id
 * @return array
 */
function getOneProduct($id){
    $availableProducts = getAllProducts();
    $returnArray = array();
    foreach ($availableProducts as $product) {
        if($product['id']==$id){
            $returnArray[] = $product;
        }
    }
    return $returnArray;

}
/**
 * function that returns integer id of next product in array after current product. If current product is last in array function returns id of first product in array
 * @param integer $id
 * @return integer id
 */
function getNextProduct($id){
    $availableProducts = getAllProducts();
    $nextId;
    $currentProduct = getOneProduct($id);
    for($i=0;$i<count($availableProducts);$i++){
        if($availableProducts[$i]['id']==$currentProduct[0]['id']){
            if($i==(count($availableProducts)-1)){
                $nextId = $availableProducts[0]['id'];
            }else{
                $nextId = $availableProducts[$i+1]['id'];
            }
        }
    }
    return $nextId;
}
/**
 * function that returns integer id of previous product in array before current product.If current product is first in array function returns id of last product in array
 * @param integer $id
 * @return integer id
 */
function getPreviousProduct($id){
    $availableProducts = getAllProducts();
    $prevId;
    $currentProduct = getOneProduct($id);
    for($i=0;$i<count($availableProducts);$i++){
        if($availableProducts[$i]['id']==$currentProduct[0]['id']){
            if($i==0){
                $prevId = $availableProducts[count($availableProducts)-1]['id'];
            }else{
                $prevId = $availableProducts[$i-1]['id'];
            }
        }
    }
    return $prevId;
}
/**
 * function that returns array of related products, maximum number of related products array is 3
 * @param integer $id of current product displayed on the single product page
 * @return array of related products by category
 */
function getRelatedProducts($currentId){
    $availableProducts = getAllProducts();
    $currentProduct = getOneProduct($currentId);
    $arryofIds = getAllIds();
    $relatedProducts = array();
    if($currentId!=''){
        foreach ($availableProducts as $product) {
            if(in_array($currentId,$arryofIds)){
                if($currentProduct[0]['category']==$product['category'] && $currentProduct[0]['id']!=$product['id']){
                    $relatedProducts[]=$product;
                    if(count($relatedProducts)>=3){
                        break;
                    }
                }
            }
          
        }
    }
   
    return $relatedProducts;
   
}
/**
 * Set of functions that validate input fields
 */


function validateFirstName($firstName){
    $returnArray=array();
     if(empty($firstName) || $firstName=""){
         $returnArray['NameError'] = 'First name can not be empty!';
     }
     return $returnArray;
}
function validateLastName($lastName){
    $returnArray=array();
     if(empty($lastName) || $lastName=""){
         $returnArray['LastNameError'] = 'Last name can not be empty!';
     }
     return $returnArray;
}
function validateEmail($email){
    $returnArray=array();
     if(empty($email) || $email="" || !str_contains($email,"@") || str_contains($email," ")){
         $returnArray['EmailError'] = 'Email can not be empty,it must contain @ nad can not have spaces in between!';
     }
     return $returnArray;
}
function validateCity($city){
    $returnArray=array();
     if(empty($city) || $city=""){
         $returnArray['CityError'] = 'City name can not be empty!';
     }
     return $returnArray;
}
function validatePhone($phone){
    $returnArray=array();
     if(empty($phone) || $phone="" || strlen($phone)<9 || strlen($phone)>11 || !is_numeric($phone) ){
         $returnArray['PhoneError'] = 'Phone can not be empty, number of digits is between 9 and 11 and it must contain only numbers!';
     }
     return $returnArray;
}
function validateStreet($street){
    $returnArray=array();
     if(empty($street) || $street=""){
         $returnArray['StreetError'] = 'Street can not be empty!';
     }
     return $returnArray;
}
function validateZip($zip){
    $returnArray=array();
  
     if(empty($zip) || $zip="" || str_contains($zip," ")){
         $returnArray['ZipError'] = 'Zip can not be empty,and can not have spaces in between!';
     }
     return $returnArray;
}
function validatePolicy($policy){
    $returnArray=array();
     if(empty($policy) || $policy=""){
         $returnArray['PolicyError'] = 'In order for this purhase to be completed you must agree to our terms of service!';
     }
     return $returnArray;
}

