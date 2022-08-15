<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            'proyek' => 'Samesta Kraton Harmoni T36/105',
            'lokasi' => 'Jl. Raya Bend. No.mor 12, Wangonmas, Bendungan, Kec. Kraton, Pasuruan, Jawa Timur 67151',
            'harga' => '281500000',
            'photo' => '',
            'kamar_tidur' => '2',
            'kamar_mandi' => '1',
            'dapur' => 'ada',
            'spesifikasi_bangunan' => 'Pondasi Strauss Pile, Dinding Batu Bata Plester Finish Cat, Pengecatan Luar Dalam, Atap Genteng Lokal, Rangka Atap Galvalum, Lantai Keramik, Pintu Double Triplex, Closet Jongkok, Kamar Mandi Lantai Keramik, Kusen Alumunium, Jalan Lingkungan Paving',
            'fasilitas_sarana' => '',
            'tipe_properti' => '36/105',
            'luas_bangunan' => '36',
            'luas_tanah' => '105',
            'sertifikasi_unit' => 'HGB',
            'status_properti' => 'READY STOCK',
            'dinding' => 'BATU BATA DIPLESTER & CAT',
            'plafond' => 'GYPSUM RANGKA HOLLOW',
            'pintu' => 'DOUBLE TRIPLEX',
            'jendela' => 'ALUMUNIUM',
            'lantai' => '40 X 40',
            'keramik_wc' => '20 X 20',
            'sanitair' => 'CLOSET JONGKOK',
            'listrik' => 'PLN - 1300 VA',
            'air' => 'PDAM',
        ]);

        DB::table('units')->insert([
            'proyek' => 'Samesta Jeruk Sawit Permai T27/60',
            'lokasi' => 'Jl. Wijaya No. 127 Mojosongo, Jebres, Solo Surakarta, Jawa Tengah',
            'harga' => '140000000',
            'photo' => '',
            'kamar_tidur' => '2',
            'kamar_mandi' => '1',
            'dapur' => 'ada',
            'spesifikasi_bangunan' => 'Pondasi Strauss Pile, Dinding Batu Bata Plester Finish Cat, Pengecatan Luar Dalam, Atap Genteng Lokal, Rangka Atap Galvalum, Lantai Keramik, Pintu Double Triplex, Closet Jongkok, Kamar Mandi Lantai Keramik, Kusen Alumunium, Jalan Lingkungan Paving',
            'fasilitas_sarana' => '',
            'tipe_properti' => '27/60',
            'luas_bangunan' => '27',
            'luas_tanah' => '60',
            'sertifikasi_unit' => 'HGB',
            'status_properti' => 'READY STOCK',
            'dinding' => 'BATU BATA DIPLESTER & CAT',
            'plafond' => 'GYPSUM RANGKA HOLLOW',
            'pintu' => 'DOUBLE TRIPLEX',
            'jendela' => 'ALUMUNIUM',
            'lantai' => '40 X 40',
            'keramik_wc' => '20 X 20',
            'sanitair' => 'CLOSET JONGKOK',
            'listrik' => 'PLN - 900 VA',
            'air' => 'PDAM',
        ]);

        DB::table('units')->insert([
            'proyek' => 'Samesta Haluoleo T45/120',
            'lokasi' => 'Ambaipua, Ranomeeto, Kabupaten Konawe Selatan, Sulawesi Tenggara 93871',
            'harga' => '263000000',
            'photo' => '',
            'kamar_tidur' => '2',
            'kamar_mandi' => '1',
            'dapur' => 'ada',
            'spesifikasi_bangunan' => '',
            'fasilitas_sarana' => '',
            'tipe_properti' => '45/120',
            'luas_bangunan' => '45',
            'luas_tanah' => '120',
            'sertifikasi_unit' => 'HGB',
            'status_properti' => 'PROGRESS BANGUN',
            'dinding' => 'BATU BATA DIPLESTER & CAT',
            'plafond' => 'GYPSUM RANGKA HOLLOW',
            'pintu' => 'DOUBLE TRIPLEX',
            'jendela' => 'ALUMUNIUM',
            'lantai' => '40 X 40',
            'keramik_wc' => '20 X 20',
            'sanitair' => 'CLOSET DUDUK',
            'listrik' => 'PLN - 1300 VA',
            'air' => 'SUBMERSIBLE BY PERUMNAS HALUOLEO',
        ]);

        DB::table('units')->insert([
            'proyek' => 'Samesta Jeruk Sawit Permai T27/60',
            'lokasi' => 'Jl. Wijaya No. 127 Mojosongo, Jebres, Solo Surakarta, Jawa Tengah',
            'harga' => '140000000',
            'photo' => '',
            'kamar_tidur' => '2',
            'kamar_mandi' => '1',
            'dapur' => 'ada',
            'spesifikasi_bangunan' => 'Pondasi Strauss Pile, Dinding Batu Bata Plester Finish Cat, Pengecatan Luar Dalam, Atap Genteng Lokal, Rangka Atap Galvalum, Lantai Keramik, Pintu Double Triplex, Closet Jongkok, Kamar Mandi Lantai Keramik, Kusen Alumunium, Jalan Lingkungan Paving',
            'fasilitas_sarana' => '',
            'tipe_properti' => '27/60',
            'luas_bangunan' => '27',
            'luas_tanah' => '60',
            'sertifikasi_unit' => 'HGB',
            'status_properti' => 'READY STOCK',
            'dinding' => 'BATU BATA DIPLESTER & CAT',
            'plafond' => 'GYPSUM RANGKA HOLLOW',
            'pintu' => 'DOUBLE TRIPLEX',
            'jendela' => 'ALUMUNIUM',
            'lantai' => '40 X 40',
            'keramik_wc' => '20 X 20',
            'sanitair' => 'CLOSET JONGKOK',
            'listrik' => 'PLN - 900 VA',
            'air' => 'PDAM',
        ]);

        DB::table('units')->insert([
            'proyek' => 'Samesta Haluoleo T45/120',
            'lokasi' => 'Ambaipua, Ranomeeto, Kabupaten Konawe Selatan, Sulawesi Tenggara 93871',
            'harga' => '263000000',
            'photo' => '',
            'kamar_tidur' => '2',
            'kamar_mandi' => '1',
            'dapur' => 'ada',
            'spesifikasi_bangunan' => '',
            'fasilitas_sarana' => '',
            'tipe_properti' => '45/120',
            'luas_bangunan' => '45',
            'luas_tanah' => '120',
            'sertifikasi_unit' => 'HGB',
            'status_properti' => 'PROGRESS BANGUN',
            'dinding' => 'BATU BATA DIPLESTER & CAT',
            'plafond' => 'GYPSUM RANGKA HOLLOW',
            'pintu' => 'DOUBLE TRIPLEX',
            'jendela' => 'ALUMUNIUM',
            'lantai' => '40 X 40',
            'keramik_wc' => '20 X 20',
            'sanitair' => 'CLOSET DUDUK',
            'listrik' => 'PLN - 1300 VA',
            'air' => 'SUBMERSIBLE BY PERUMNAS HALUOLEO',
        ]);

        DB::table('units')->insert([
            'proyek' => 'Samesta Kraton Harmoni T36/105',
            'lokasi' => 'Jl. Raya Bend. No.mor 12, Wangonmas, Bendungan, Kec. Kraton, Pasuruan, Jawa Timur 67151',
            'harga' => '281500000',
            'photo' => '',
            'kamar_tidur' => '2',
            'kamar_mandi' => '1',
            'dapur' => 'ada',
            'spesifikasi_bangunan' => 'Pondasi Strauss Pile, Dinding Batu Bata Plester Finish Cat, Pengecatan Luar Dalam, Atap Genteng Lokal, Rangka Atap Galvalum, Lantai Keramik, Pintu Double Triplex, Closet Jongkok, Kamar Mandi Lantai Keramik, Kusen Alumunium, Jalan Lingkungan Paving',
            'fasilitas_sarana' => '',
            'tipe_properti' => '36/105',
            'luas_bangunan' => '36',
            'luas_tanah' => '105',
            'sertifikasi_unit' => 'HGB',
            'status_properti' => 'READY STOCK',
            'dinding' => 'BATU BATA DIPLESTER & CAT',
            'plafond' => 'GYPSUM RANGKA HOLLOW',
            'pintu' => 'DOUBLE TRIPLEX',
            'jendela' => 'ALUMUNIUM',
            'lantai' => '40 X 40',
            'keramik_wc' => '20 X 20',
            'sanitair' => 'CLOSET JONGKOK',
            'listrik' => 'PLN - 1300 VA',
            'air' => 'PDAM',
        ]);
    }
}
