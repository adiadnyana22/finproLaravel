<?php

namespace Database\Seeders;

use App\Models\Product;
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
//        Beauty
        Product::create([
            "name" => "SKINTIFIC - 5X Ceramide Skin Barrier Repair Moisturize Gel 30g",
            "detail" => "SKINTIFIC 5X Ceramide Barrier Repair Moisture Gel, Size：30g, How to use, Oleskan pelembab sebesar anggur pada pipi, jidat, hidung, dan dagu.",
            "price" => 129000,
            "photo" => "products/moisturizer.jpeg",
            "category_id" => "1"
        ]);

        Product::create([
            "name" => "SKINTIFIC - Anti Acne Serum Acne Spot Treatment Facial Gel with 2% Salicylic Acid Brightening Face Serum for Repair Skin Barrier",
            "detail" => "SKINTIFIC - Anti Acne Serum, Size: 20ml, How to use, Oleskan beberapa tetes ke area wajah dan leher yang bersih sebelum menggunakan pelembab, gunakan pada pagi dan malam hari.",
            "price" => 119000,
            "photo" => "products/serum.jpeg",
            "category_id" => 1
        ]);

        Product::create([
            "name" => "SKINTIFIC - Mugwort Mask Acne Clay Mask 55g Pore Clarifying Mud Mask Wash Off Pack Masker Wajah Facial Mask",
            "detail" => "SKINTIFIC Mugwort Anti Acne Clay Mask mengandung ekstrak Mugwort dengan kualitas terbaik untuk melawan breakout agar kulit lebih cerah dan ceria.",
            "price" => 89000,
            "photo" => "products/mugwort.jpeg",
            "category_id" => 1
        ]);

        Product::create([
            "name" => "SKINTIFIC - 5% Aha Bha Pha Exfoliating Toner Face Eksfoliasi wajah Glow and Smooth Skin with Niacinamide",
            "detail" => "Kulit bersih dan tampak lebih bersinar dengan Skintific 5% AHA BHA PHA Exfoliating toner. Perpaduan acid yang baik untuk kulit dan Kompleks Probiotik, bekerja sama untuk menghilangkan kotoran, sebum dan sel kulit mati, juga memperbaiki tekstur kulit kasar, dan kulit yang kusam.",
            "price" => 99000,
            "photo" => "products/tonerungu.jpeg",
            "category_id" => 1
        ]);

        Product::create([
            "name" => "Salicylic Acid Acne Spot Treatment Gel 10g",
            "detail" => "Dapat digunakan pada pagi & malam hari sebagai step terakhir skincare di area yang berjerawat saja. Jangan dibilas, dibiarkan sampai obat meresap kedalam kulit.",
            "price" => 87000,
            "photo" => "products/acneijo.jpeg",
            "category_id" => 1
        ]);

        Product::create([
            "name" => "SKINTIFIC - 5X Ceramide Soothing Toner Skin Barrier Repair Toner with Calendula for All Skin Types 80ml Toner Pelembab",
            "detail" => "Toner yang dapat digunakan sehari-hari untuk menenangkan kulit saat skin barrier sedang terganggu, membantu proses perbaikan skin barrier dan menjaga kulit agar tetap sehat.",
            "price" => 99000,
            "photo" => "products/tonerbiru.jpeg",
            "category_id" => 1
        ]);

        Product::create([
            "name" => "[Twin Pack Gel] Azarine Hydrasoothe Sunscreen Gel SPF45 PA++++ 50ml",
            "detail" => "Tabir surya wajah dalam bentuk gel (water base) yang sangat ringan, dingin dan mudah meresap untuk seluruh jenis kulit termasuk kulit berminyak dan acne prone skin. Di formulasikan dengan bahan alami royal jelly, aloe vera, green tea serta bahan alami lainnya yang dapat melindungi kulit dari efek negatif sinar UV A & UV B dan menutrisi kulit.",
            "price" => 107900,
            "photo" => "products/twinsunscreen.jpeg",
            "category_id" => 1
        ]);

        Product::create([
            "name" => "SKINTIFIC Sunscreen 5X Ceramide Serum Sunscreen Stick SPF50 PA++++",
            "detail" => "Sunscreen dengan kandungan utama 5X Ceramide yang dapat memperbaiki dan mengembalikan skin barrier. Dilengkapi  UV Filter jenis terbaru yang telah dipatenkan oleh BASF Germany (Tinosorb S/M) yang dapat melindungi kulit dari sinar UVA & UVB serta Blue Light, dengan SPF 50+ PA++++ .",
            "price" => 99000,
            "photo" => "products/sunscreenbiru.jpeg",
            "category_id" => 1
        ]);

        Product::create([
            "name" => "NATURE REPUBLIC Aloe Vera 92% Soothing Gel - 300ml",
            "detail" => "Nature Republic Aloe Vera 92% Soothing Gel 300ml Original 100% from Korea",
            "price" => 88000,
            "photo" => "products/aloevera.jpeg",
            "category_id" => 1
        ]);

        Product::create([
            "name" => "SKINTIFIC SymWhite 377 Dark Spot Serum",
            "detail" => "Ambil produk secukupnya dan oleskan secara merata pada seluruh wajah, terutama pada bagian yang mengalami flek hitam dan bekas jerawat.",
            "price" => 119000,
            "photo" => "products/skin377.jpeg",
            "category_id" => 1
        ]);

        Product::create([
            "name" => "SKINTIFIC Retinol Serum Anti Aging 5X Ceramide Gentle A Renewal Essence 20ml",
            "detail" => "Ambil produk secukupnya dan oleskan secara merata pada seluruh wajah. Gunakan pada malam hari dan pakai sunscreen pada pagi hari.",
            "price" => 119000,
            "photo" => "products/gentleserum.jpeg",
            "category_id" => 1
        ]);

        Product::create([
            "name" => "SKINTIFIC - 360 Crystal Massager Lifting Eye Cream Eye Gel Serum",
            "detail" => "Eye cream supercharged yang mengandung 3D Peptide Complex dan Niacinamide untuk mengurangi garis-garis halus, kerutan, sembab, serta mencerahkan area bawah mata yang gelap.",
            "price" => 195000,
            "photo" => "products/massager.jpeg",
            "category_id" => 1
        ]);

//        Electronic
        Product::create([
            "name" => "Samsung Galaxy S20 FE (8/128 GB) Processor Snapdragon 865 - Cloud Navy",
            "detail" => "Display 6,5' Full HD+ Super AMOLED, Processor Qualcomm Snapdragon 865, Front Camera 32MP, Triple Rear Camera 12.0 MP + 12.0 MP + 8.0 MP, Battery 4,500mAh, On Screen Fingerprint, Dual SIM, RAM/Storage 8/128GB",
            "price" => 8999000,
            "photo" => "products/samsungs20fe.jpeg",
            "category_id" => 2
        ]);

        Product::create([
            "name" => "Samsung Mesin Cuci Top Loading 7.5 Kg WA75H4200SG",
            "detail" => "Top Load Washing Dual Cluster Control, Diamond Drum, Woble Pulsator, 7.5 kg, Garansi 1 Tahun",
            "price" => 3285900,
            "photo" => "products/mesincucisamsung.jpeg",
            "category_id" => 2
        ]);

        Product::create([
            "name" => "Samsung Galaxy Z Flip3 5G 8/256GB - Phantom Black",
            "detail" => "Processor: Snapdragon 888, Main Display: 6.7' Dynamic AMOLED 2X Infinity-O Display, Cover Display: 1.9' Super AMOLED, Rear Camera: (Ultra Wide) 12 MP + (Wide) 12 MP, Front Camera: 10 MP, RAM: 8GB, Internal Storage: 256GB, Network: 5G, Battery Capacity: 3.300mAh, Water Resistance: IPx8",
            "price" => 13022100,
            "photo" => "products/samsungzflip.jpeg",
            "category_id" => 2
        ]);

        Product::create([
            "name" => "Samsung Galaxy Watch4 40mm - Black",
            "detail" => "OS : Wear OS Powered by Samsung, Display : 1.2' Super AMOLED 396 x 396px, RAM : 1.5GB, Internal Storage : 16GB, Battery Capacity : 247mAh, Sensor : BIA Sensor, Compass, Photo Plethysmography, HRM, Electrocardiogram (EGC), Accelerometer (up to 32G), Gyro, Barometer, Ambient Light, Bezel : Digital Bezel",
            "price" => 2999000,
            "photo" => "products/samsungwatch.jpeg",
            "category_id" => 2
        ]);

        Product::create([
            "name" => "Samsung VC18M2120SB/SE Canister Vacuum Cleaner",
            "detail" => "Samsung VC18M2120SB Canister dilengkapi dengan Anti-Tangle Turbine yang membuat daya hisapnya konsisten sehingga mampu memberikan kinerja optimal. Desainnya yang compact memudahkan anda saat membawanya dan mudah untuk digunakan. Ditambah dengan Easy Grip Handle yang memberikan kenyamanan dan mudah untuk dikontrol.",
            "price" => 1600000,
            "photo" => "products/samsungvacum.jpeg",
            "category_id" => 2
        ]);

        Product::create([
            "name" => "Garmin Forerunner 55 - Monterra Grey",
            "detail" => "Menampilkan panduan pelatihan dan fitur-fitur lari yang rinci untuk membantu Anda meningkatkan kemampuan pribadi, jam tangan lari GPS ini siap membantu mencapai tujuan kebugaran Anda.",
            "price" => 3199000,
            "photo" => "products/garminwatch.jpeg",
            "category_id" => 2
        ]);

        Product::create([
            "name" => "Apple iPad Air (Gen 4) 10,9 inci, Wi-Fi + Cellular 64GB, Space Grey",
            "detail" => "iPad Air yang sepenuhnya baru. Kini lebih serbaguna. Layar Liquid Retina 10,9 inci yang menakjubkan dengan rentang warna luas memungkinkan Anda melihat foto, video, dan game dalam detail yang cemerlang dan serupa aslinya.",
            "price" => 13799000,
            "photo" => "products/ipadair.jpeg",
            "category_id" => 2
        ]);

        Product::create([
            "name" => "Apple MacBook Air (13.6 inci, M2, 2022) 8C CPU, 8C GPU, 256GB, Midnight",
            "detail" => "Bertenaga super berkat chip M2 generasi berikutnya, MacBook Air yang didesain ulang menggabungkan performa andal dengan kekuatan baterai hingga 18 jam ke dalam penutup berbahan aluminium yang luar biasa tipis.",
            "price" => 19999000,
            "photo" => "products/macbookair.jpeg",
            "category_id" => 2
        ]);

        Product::create([
            "name" => "Apple MacBook Pro (13.3 inci, M2, 2022) 8C CPU, 10C GPU, 512GB, Space Grey",
            "detail" => "MacBook Pro 13 inci lebih andal dari sebelumnya. Bertenaga super berkat chip M2 generasi berikutnya, MacBook Pro ini merupakan laptop pro Apple yang paling portabel, dengan kekuatan baterai hingga 20 jam.",
            "price" => 24999000,
            "photo" => "products/macbookpro.jpeg",
            "category_id" => 2
        ]);

        Product::create([
            "name" => "AOC 24G2SPE Adaptive Sync Gaming Monitor (23.8'/1ms/IPS/165hz/FHD)",
            "detail" => "Model name: 24G2SPE, Panel: 23.8' (IPS), Brightness (typical): 300 cd/m², Contrast Ratio: 1100 : 1 (Typical) 80 Million : 1 (DCR), Response Time: 1ms (MPRT) /4ms (GtG)",
            "price" => 2499000,
            "photo" => "products/monitoraoc.jpeg",
            "category_id" => 2
        ]);

        Product::create([
            "name" => "HP DeskJet Ink Advantage 2776 (Gray) Wireless Printer (Print, Scan, Copy)",
            "detail" => "Replacement cartridges: HP 682 Tri-color Original Ink Advantage Cartridge (~150 pages yield) 3YM76A; HP 682 Black Original Ink Advantage Cartridge (~480 pages yield) 3YM77A, Power: Input voltage: 100 to 240 VAC (+/- 10%), 50/60 Hz (+/- 3 Hz). Input voltage: 200 to 240 VAC (+/- 10%), 50/60 Hz (+/- 3Hz) (China & India)",
            "price" => 929000,
            "photo" => "products/printerhp.jpeg",
            "category_id" => 2
        ]);

        Product::create([
            "name" => "PHILIPS 1.8L Digital Rice Cooker HD4515/33 - 400Watt",
            "detail" => "Tetap hangat 12 jam, Layar digital besar memudahkan pembacaan menu dan waktu, dan Mengatur suhu pemanasan dengan cerdas untuk berbagai program",
            "price" => 661000,
            "photo" => "products/ricecookerphilips.jpeg",
            "category_id" => 2
        ]);

//        Food
        Product::create([
            "name" => "Oreo Biskuit Krim Vanila 12 x 38g",
            "detail" => "Biskuit dengan isian krim susu ini pun kini hadir dengan berbagai varian rasa yang bisa disesuaikan dengan selera Anda. terdapat rasa vanilla, coklat, blueberry, double delight, strawberry, coconut delight dan lain sebagainya. Tak hanya memiliki banyak variasi rasa saja, Oreo juga hadir dalam kemasan yang beragam sesuai kebutuhan. Ada yang dikemas dalam ukuran kecil untuk konsumsi sehari-hari, adapula yang dikemas dalam ukuran besar menggunakan toples kaleng hingga box exclusive.",
            "price" => 15900,
            "photo" => "products/oreo.jpeg",
            "category_id" => 3
        ]);

        Product::create([
            "name" => "Silverqueen Milk Chocolate With Cashews 2 x 25 gr",
            "detail" => "SilverQueen Cashew adalah salah satu varian cokelat Silverqueen Classic. Kelezatan SilverQueen chocolate ini dihasilkan dari perpaduan yang pas antara cokelat, susu, dan kacang mete di dalamnya. Perpaduannya yang tepat menghasilkan pengalaman makan cokelat yang akan membuat ketagihan. Nikmati manisnya cokelat dan gurihnya kacang mete dalam setiap potong SilverQueen chocolate.",
            "price" => 15900,
            "photo" => "products/silverqueen.jpeg",
            "category_id" => 3
        ]);

        Product::create([
            "name" => "Chocolatos Wafer Coklat Box 24 x 8.5 gr",
            "detail" => "Chocolatos merupakan inovasi baru dari Gery Wafer Stik dengan menghadirkan wafer stik yang lebih besar dan isi krim coklat yang lebih padat. Perpaduan antara wafer stik dan krim coklatnya memberikan citarasa serta kepuasan tersendiri dalam menikmati wafer stik, yang tidak dapat kita temui pada produk-produk wafer stik pada umumnya.",
            "price" => 12000,
            "photo" => "products/chocolatos.jpeg",
            "category_id" => 3
        ]);

        Product::create([
            "name" => "Nestle KOKO KRUNCH Sarapan Sereal Coklat 150g/170g",
            "detail" => "KOMPOSISI:Serealia (Tepung gandum utuh (27%), Tepung Gandum, Semolina Jagung), Gula, Kakao Bubuk, Ekstrak Malt (Barli), Minyak Nabati, 1 Mineral, Garam, Pengemulsi Lesitin Kedelai, Perisa Sintetik, Premiks Vitamin & Mineral, Antioksidan Tokoferol Campuran Pekat. Dapat mengandung Tree nut dan Susu",
            "price" => 18600,
            "photo" => "products/kokokrunch.jpeg",
            "category_id" => 3
        ]);

        Product::create([
            "name" => "Superstar Triple Wafer Chocolate 12 x 18 gr",
            "detail" => "Superstar Triple Chocolate 18gr x 12 merupakan sebuah wafer renyah yang dilapisi oleh krim coklat. Coklat dapat memberikan kepuasan san terbuat dari bahan-bahan pilihan dan kerenyahan pada setiap gigitannya. dapat dinikmati sebagai cemilan santai bersama keluarga dan kerabat.",
            "price" => 13300,
            "photo" => "products/superstar.jpeg",
            "category_id" => 3
        ]);

        Product::create([
            "name" => "Selamat Wafer Chocolate 198 gr",
            "detail" => "Selamat Wafer, wafer isi cokelat khas selamat yang melimpah, memberikan sensasi khas dan berbeda dari yang lain.",
            "price" => 11100,
            "photo" => "products/selamat.jpeg",
            "category_id" => 3
        ]);

        Product::create([
            "name" => "Mie Sedaap Mi Goreng Mie Instan 5 x 90 gr",
            "detail" => "Mie goreng instant dalam kemasan bag, dibungkus dalam 1 pack, isi 5",
            "price" => 14800,
            "photo" => "products/miesedap.jpeg",
            "category_id" => 3
        ]);

        Product::create([
            "name" => "Gery Saluut Coklat 7.5 gr x 24 (1 Box)",
            "detail" => "Gery Saluut Coklat 7.5g x 24 merupakan wafer cream dengan perpaduan cream coklat yang sangat cocok untuk dinikmati bersama keluarga Anda.",
            "price" => 12000,
            "photo" => "products/gerysalut.jpeg",
            "category_id" => 3
        ]);

        Product::create([
            "name" => "OREO BLACKPINK COOKIE, 123.5G [LIMITED EDITION]",
            "detail" => "Biskuit Oreo, Krim yang tebal dan lezat memberikan kenikmatan dalam setiap gigitannya, Cocok untuk dibawa saat bepergian, Ideal dinikmati saat santai bersama keluarga, Oreo tersedia dalam berbagai rasa dan varian",
            "price" => 9900,
            "photo" => "products/blackpink.jpeg",
            "category_id" => 3
        ]);

        Product::create([
            "name" => "Ovaltine Chocolate Malt Cookies Biskuit Cokelat 12 x 30 gr",
            "detail" => "Kukis sandwich dengan krim malt cokelat.",
            "price" => 27100,
            "photo" => "products/ovaltine.jpeg",
            "category_id" => 3
        ]);

        Product::create([
            "name" => "Cadbury Dairy Milk Cokelat 3 x 30 gr",
            "detail" => "Salah satu merek dagang terkemuka dari perusahaan makanan dan minuman Mondelez International adalah produk cokelat dari Cadbury. Cadbury telah hadir selama lebih dari 150 tahun, berkecimpung di industri makanan dan minuman namun berfokus pada ragam produk cokelat. Beberapa produknya yang pasti tak asing lagi adalah cokelat Dairy Milk dan permen cokelat-karamel Choclairs.",
            "price" => 16100,
            "photo" => "products/cadbury.jpeg",
            "category_id" => 3
        ]);

        Product::create([
            "name" => "Frisian Flag Susu UHT Swiss Chocolate 3 x 225 ml",
            "detail" => "Frisian Flag UHT Swiss Chocolate 225ml merupakan perpaduan susu UHT rendah lemak dan rasa Swiss Chocolate yang pasti enak dan cocok buat kamu yang sedang diet! Diperkaya kandungan zat gizi makro (protein, karbohidrat dan lemak) dan sumber 7 Vitamin (Vitamin A, D3, E, B1, B2, B3,B5, B6 dan B12) dan sumber 8 Mineral (Kalsium, Fosfor, Iodium, Magnesium, Zink, Selenium, Natrium dan Kalium) yang tetap terasa nikmat.",
            "price" => 15300,
            "photo" => "products/frisianflag.jpeg",
            "category_id" => 3
        ]);
    }
}
