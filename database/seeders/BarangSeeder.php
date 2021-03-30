<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            'kode_barang'=>['PRD001', 'PRD002', 'PRD003', 'PRD004', 'PRD005', 'PRD006', 'PRD007', 'PRD008', 'PRD009', 'PRD010',
                            'PRD011', 'PRD012', 'PRD013', 'PRD014', 'PRD015'],
            'nama_barang'=>['Indomie', 'Pocari Sweet', 'Silverqueen'],
            'kategori_barang'=>['Makanan', 'Minuman', 'Snack'],
            'harga'=>['3000', '6000', '12500'],
            'qty'=>['100', '50', '45']
        ]);
    }
}
