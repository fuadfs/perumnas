<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'nama' => 'SAMESTA LABUAPI LA RESORT',
            'lokasi' => 'LOMBOK BARAT, NUSA TENGGARA BARAT',
            'alamat_kantor_pemasaran' => 'JL. BATU BOLONG NO. 4 -10, BUMI PAGUTAN PERMAI, MATARAM - NTB NO. 4-10 NUSA TENGGARA BARAT, KOTA MATARAM, MATARAM, PAGUTAN BARAT',
            'telepon' => '08170288801',
            'email' => 'perumnas.mataram@yahoo.com',
            'sarana_prasarana' => 'Gate Masuk Jalan Lingkungan Saluran Lingkungan',
            'luas_lahan' => '30.625 m2',
            'luas_potensi_kerja_sama' => '± 0,6 ha',
            'eksposur_depan' => 'Jl Gn Pengsong',
            'koordinat' => '8 38 24.5 S 116 06 12.9 E',
            'kontur_lahan' => 'Datar',
            'penggunaan_lahan' => 'Kawasan Perumahan',
            'lingkungan' => 'Berada di Lingkungan Permukiman',
            'alas_hak' => 'Hak Pengelolaan',
            'batas_lahan' => 'Closet Jongkok',
        ]);

        DB::table('projects')->insert([
            'nama' => 'SAMESTA BESANG ASRI KARANGASEM',
            'lokasi' => 'KEC. ABANG , KAB. KARANGASEM , BALI',
            'alamat_kantor_pemasaran' => 'JL. BATU BOLONG NO. 4 -10, BUMI PAGUTAN PERMAI, MATARAM - NTB NO. 4-10 NUSA TENGGARA BARAT, KOTA MATARAM, MATARAM, PAGUTAN BARAT',
            'telepon' => '08170288801',
            'email' => 'perumnas.mataram@yahoo.com',
            'sarana_prasarana' => 'Jaringan PLN Jaringan PDAM Jaringan Internet',
            'luas_lahan' => '30.625 m2',
            'luas_potensi_kerja_sama' => '± 0,6 ha',
            'eksposur_depan' => 'Jl Gn Pengsong',
            'koordinat' => '8 38 24.5 S 116 06 12.9 E',
            'kontur_lahan' => 'Datar',
            'penggunaan_lahan' => 'Kawasan Perumahan',
            'lingkungan' => 'Berada di Lingkungan Permukiman',
            'alas_hak' => 'Hak Pengelolaan',
            'batas_lahan' => 'Closet Jongkok',
        ]);

        DB::table('projects')->insert([
            'nama' => 'SAMESTA PESONA SAMBINAE',
            'lokasi' => 'BIMA, NUSA TENGGARA BARAT',
            'alamat_kantor_pemasaran' => 'JL. BATU BOLONG NO. 4 -10, BUMI PAGUTAN PERMAI, MATARAM - NTB NO. 4-10 NUSA TENGGARA BARAT, KOTA MATARAM, MATARAM, PAGUTAN BARAT',
            'telepon' => '08170288801',
            'email' => 'perumnas.mataram@yahoo.com',
            'sarana_prasarana' => 'Masjid Ibadah Klinik dan Apotek Polres Labuapi',
            'luas_lahan' => '30.625 m2',
            'luas_potensi_kerja_sama' => '± 0,6 ha',
            'eksposur_depan' => 'Jl Gn Pengsong',
            'koordinat' => '8 38 24.5 S 116 06 12.9 E',
            'kontur_lahan' => 'Datar',
            'penggunaan_lahan' => 'Kawasan Perumahan',
            'lingkungan' => 'Berada di Lingkungan Permukiman',
            'alas_hak' => 'Hak Pengelolaan',
            'batas_lahan' => 'Closet Jongkok',
        ]);
    }
}
