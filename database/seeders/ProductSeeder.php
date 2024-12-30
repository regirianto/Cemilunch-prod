<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Abon Sapi Cap Elang 100gr',
                'stock' => 100,
                'price' => 28000,
                'description' => 'Abon Sapi Cap Elang Asli Khas boyolali di buat dari daging sapi murni pilihan serta bumbu-bumbu dan pengolahan yang cermat higienis. Abon Sapi ini biasa disajikan sebagai lauk pendamping nasi atau isian roti. Selain karena rasa keringnya yang gurih khas daging ayam, abon ayam sendiri tahan lama. Abon juga bisa menjadi lauk penyelamat dikala tidak ingin/sempat memasak.
    
    Abon ini memiliki varian :
    Rasa : Manis, Pedas
    Ukuran : 100gr, 250gr
    
    KOMPOSISI :
    GULA,GARAM,BAWANG MERAH,REMPAH-REMPAH,MINYAK GORENG
    
    SP. 018/1130/90
    NO HALAL 1501140704
    ',
                'image_url' => '/assets/images/product-image/furniture/1.jpg'
            ],
            [
                'name' => 'Bandeng Juwana Elrina Vacuum Kering dan Basah',
                'stock' => 50,
                'price' => 40000,
                'description' => 'Bandeng Presto Juwana Tulang Lunak adalah olahan ikan bandeng khas Juwana, Semarang yang diolah dengan teknik presto sehingga durinya menjadi lunak dan mudah dimakan. Ikan bandeng ini terkenal dengan dagingnya yang lembut, gurih, dan bumbunya yang meresap sempurna hingga ke dalam tulang.
    
    ** Bandeng Vacuum SPC Basah :
    - Tahan 3 Minggu di suhu ruangan
    - Tahan 3 Bulan dalam Freezer
    - Bisa langsung di goreng
    
    ** Bandeng Vacuum Kering :
    - Tahan 3 Bulan suhu ruangan
    - Tidak perlu masuk freezer
    - Harus di kukus dulu sebelum di goreng
    
    Tersedia 1 Box isi 2 ekor & 1 Box isi 1 ekor
    ',
                'image_url' => '/assets/images/product-image/furniture/2.jpg'
            ],
            [
                'name' => 'Carica Gemilang Minuman Buah Carica Khas Wonosobo',
                'stock' => 200,
                'price' => 22000,
                'description' => 'Carica Gemilang adalah produk olahan buah carica khas Dataran Tinggi Dieng, Wonosobo. Buah carica sendiri merupakan buah endemik Indonesia yang memiliki rasa yang unik, sedikit asam dan manis, serta teksturnya yang kenyal. Carica Gemilang diolah menjadi berbagai macam produk, seperti manisan, sirup, dan buah segar.
    
    Tersedia Varian :
    - 115gr isi 4 cup
    - 115gr isi 6 cup
    - 115gr isi 12 cup
    - 240gr isi 6 cup
    - 350gr Botol Kaca (1 dus isi 6 botol)
    ',
                'image_url' => '/assets/images/product-image/furniture/3.jpg'
            ],
            [
                'name' => 'Dendeng Sapi Cap Elang 250gr',
                'stock' => 150,
                'price' => 65000,
                'description' => 'Dendeng sapi cap elang merupakan salah satu produk olahan daging sapi khas Indonesia yang sudah sangat populer. Dendeng ini dikenal dengan cita rasanya yang gurih, manis, dan sedikit pedas, serta teksturnya yang kering dan renyah. Proses pembuatan dendeng sapi cap elang melibatkan pemilihan daging sapi yang berkualitas, perendaman dalam bumbu yang kaya rempah, dan pengeringan yang dilakukan dengan hati-hati.
    
    Terdapat Varian Dendeng :
    - Dendeng Has Dalam (Original) = potongan daging yang terletak di bagian dalam paha sapi, dekat tulang belakang.
    - Dendeng Lulur (Manis/Pedas) = proses pengolahan daging yang direndam dalam bumbu-bumbu tertentu sebelum dikeringkan
    - Dendeng Ayam (Manis/Pedas)',
                'image_url' => '/assets/images/product-image/furniture/4.jpg'
            ],
            [
                'name' => 'Dodol Picnic Khas Garut 250gr',
                'stock' => 150,
                'price' => 28000,
                'description' => 'Dodol Picnic Garut adalah salah satu merek dodol yang sangat populer dan menjadi ikon oleh-oleh khas Garut. Dodol ini dikenal dengan kualitasnya yang tinggi, rasa yang lezat, dan kemasan yang menarik.
    
    Terdapat Kemasan Dodol :
    - Dodol picnic Original 250gr
    - Dodol picnic original 500gr
    - Dodol Picnic Aneka Rasa
    ',
                'image_url' => '/assets/images/product-image/furniture/5.jpg'
            ],
            [
                'name' => 'Enting enting Gepuk Kacang Cap hoolo klenteng',
                'stock' => 150,
                'price' => 65000,
                'description' => 'Enting-enting Cap Hoolo adalah salah satu jenis makanan ringan khas Salatiga yang sangat populer. Makanan ini terbuat dari kacang tanah yang dihaluskan, dicampur dengan gula, dan dicetak menjadi bentuk segitiga kecil. Teksturnya yang renyah dan manis membuat enting-enting ini menjadi camilan favorit banyak orang.
    
    Terdapat varian kemasan :
    - Bungkus Kecil = isi 10pcs enting2
    - Bungkus Besar = isi 5 bungkus kecil',
                'image_url' => '/assets/images/product-image/furniture/6.jpg'
            ],
            [
                'name' => 'Gethuk Crispy Frozen Argotelo Salatiga',
                'stock' => 150,
                'price' => 20000,
                'description' => 'Gethuk adalah makanan ringan tradisional khas Jawa yang terbuat dari singkong. Singkong yang telah dikukus kemudian ditumbuk bersama gula pasir atau gula merah, dan sering kali ditambahkan parutan kelapa untuk menambah cita rasa. Teksturnya yang lembut dan kenyal, serta rasanya yang manis membuat gethuk menjadi camilan yang populer di berbagai daerah di Jawa.
    
    Gethuk Crispy asli langsung dari salatiga menggunakan singkong berkualitas yaitu Argotelo. Frozen Food Tahan 3 Bulan dalam freezer.
    ',
                'image_url' => '/assets/images/product-image/furniture/7.jpg'
            ],
            [
                'name' => 'Gudeg Bagong Kaleng Yu Djum Khas Jogja',
                'stock' => 150,
                'price' => 45000,
                'description' => 'Gudeg Kaleng Bagong Yu Djum adalah salah satu produk oleh-oleh khas Yogyakarta yang sangat populer. Gudeg ini dikemas dalam kaleng, sehingga praktis dibawa dan bisa dinikmati kapan saja dan di mana saja. Nama "Bagong" merujuk pada tokoh pewayangan yang dikenal kuat dan gagah, mungkin sebagai simbol ketahanan dan kelezatan gudeg ini.
    
    Cara Penyajian:
    
    Siap Saji: Gudeg kaleng biasanya sudah siap santap.
    Panas: Untuk rasa yang lebih nikmat, bisa dihangatkan terlebih dahulu sebelum disajikan.
    Tambahan: Bisa ditambahkan nasi putih hangat, krupuk, atau sambal untuk menambah cita rasa.',
                'image_url' => '/assets/images/product-image/furniture/8.jpg'
            ],
            [
                'name' => 'Tahu Bakso Bu Pudji Khas Ungaran Semarang',
                'stock' => 150,
                'price' => 70000,
                'description' => '1 Box isi 10pcs Tahu
    
    Tahu Baxo Bu Pudji adalah salah satu makanan khas Ungaran, Semarang yang sangat populer. Tahu Baxo ini terkenal dengan rasanya yang gurih, teksturnya yang lembut, dan kualitasnya yang baik. Banyak yang menjadikan Tahu Baxo Bu Pudji sebagai oleh-oleh khas Semarang.
    
    Tahu Baxo Bu Pudji biasanya tersedia dalam beberapa varian, yaitu:
    Tahu Baxo Rebus: Tahu bakso yang sudah direbus dan siap untuk digoreng kembali.
    Tahu Baxo Goreng: Tahu bakso yang sudah digoreng hingga berwarna kecoklatan.
    Tahu Baxo Vacuum: Tahu bakso rebus yang dikemas dengan cara divacuum sehingga lebih awet.',
                'image_url' => '/assets/images/product-image/furniture/9.jpg'
            ],
            [
                'name' => 'Kentang Mustofa Bekate 250gr',
                'stock' => 150,
                'price' => 30000,
                'description' => 'Kentang Mustofa Bekate adalah salah satu jenis makanan ringan atau camilan khas yang berasal dari daerah Bekasi. Makanan ini terbuat dari kentang yang diolah dengan bumbu-bumbu khusus sehingga menghasilkan rasa yang unik dan lezat.
    
    isi kentang goreng iris, ikan ter & kacang
    ',
                'image_url' => '/assets/images/product-image/furniture/10.jpg'
            ],
            [
                'name' => 'Keripik Tempe Kemul Popo Khas Wonosobo',
                'stock' => 150,
                'price' => 15000,
                'description' => 'Keripik Tempe Kemul Wonosobo adalah camilan khas dari daerah Wonosobo, Jawa Tengah. Camilan ini terbuat dari tempe yang diiris tipis, kemudian dilumuri dengan adonan tepung yang gurih, dan digoreng hingga renyah. Kata "kemul" sendiri merujuk pada proses pelapisan tempe dengan adonan tepung yang membuatnya seperti terbungkus atau "kemul".
    
    Berat 200gr
    ',
                'image_url' => '/assets/images/product-image/furniture/11.jpg'
            ],
            [
                'name' => 'Kerupuk udang Cap Padi Kapas',
                'stock' => 150,
                'price' => 20000,
                'description' => 'Kerupuk Udang Cap Padi Kapas adalah salah satu jenis kerupuk udang yang sangat populer di Indonesia, khususnya di daerah Jawa Barat seperti Cirebon dan Indramayu. Kerupuk ini memiliki ciri khas rasa yang gurih dan renyah, serta bentuknya yang unik menyerupai padi dan kapas.
    
    Varian:
    
    Ukuran Besar: Cocok untuk dijadikan lauk makan atau cemilan bersama keluarga.
    Ukuran Sedang: Lebih praktis untuk dibawa bepergian.
    Ukuran Kecil (Kancing): Cocok untuk dijadikan taburan pada makanan lain.',
                'image_url' => '/assets/images/product-image/furniture/12.jpg'
            ],
            [
                'name' => 'Lumpia Radja Frozen 1 box isi 5 pcs',
                'stock' => 150,
                'price' => 65000,
                'description' => 'Lumpia Basah Rebung Udang Telur Merk Radja Ungaran adalah salah satu jenis lumpia basah yang cukup populer dan berasal dari daerah Ungaran, Semarang. Lumpia ini memiliki cita rasa yang khas dan lezat, serta isian yang sangat lengkap.
    
    Isian Lengkap: Mengandung rebung, udang, telur, dan bumbu-bumbu yang dibalut dengan kulit lumpia yang tipis dan lembut.
    Rasa: Gurih, lezat, dan memiliki sedikit rasa manis dari bumbu-bumbu.
    
    1 Box isi 5pcs Lumpia basah Frozen
    ',
                'image_url' => '/assets/images/product-image/furniture/13.jpg'
            ],
            [
                'name' => 'Moaci Mochi Pratama Khas Jawa tengah',
                'stock' => 150,
                'price' => 30000,
                'description' => 'Moaci Pratama adalah salah satu jenis kue tradisional khas Semarang yang sangat populer. Kue ini memiliki tekstur kenyal, rasa manis, dan biasanya berisi kacang tanah atau wijen. Moaci Pratama dikenal karena kualitasnya yang baik dan rasa yang khas, sehingga menjadi oleh-oleh favorit bagi wisatawan yang berkunjung ke Semarang.
    
    Tersedia varian rasa :
    - Moaci Original
    - Moaci Pandan
    - Moaci Tepung Gula',
                'image_url' => '/assets/images/product-image/furniture/14.jpg'
            ],
            [
                'name' => 'Permen Davos Permen Jadul',
                'stock' => 150,
                'price' => 15000,
                'description' => 'Permen Davos adalah permen mint klasik yang sudah sangat familiar di Indonesia. Permen ini memiliki rasa mint yang khas dan menyegarkan, sehingga cocok untuk memberikan sensasi dingin dan segar di mulut. Davos merupakan salah satu permen jadul yang hingga kini masih banyak digemari oleh berbagai kalangan usia.
    
    Tersedia beberapa varian :
    - Davos Roll
    - Davos Lux
    - Davos Mint',
                'image_url' => '/assets/images/product-image/furniture/15.jpg'
            ],
        ]);
    }
}
