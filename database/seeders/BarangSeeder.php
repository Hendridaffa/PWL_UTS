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
            $kode_barang = ['PRD001', 'PRD002', 'PRD003', 'PRD004', 'PRD005', 'PRD006', 'PRD007', 'PRD008', 'PRD009', 'PRD010',
                            'PRD011', 'PRD012', 'PRD013', 'PRD014', 'PRD015', 'PRD016', 'PRD017', 'PRD018', 'PRD019', 'PRD020'];
            $nama_barang = ['Indomie', 'Pocari Sweet', 'Silverqueen', 'Stela Apel', 'Sari Roti', 'Frutie', 'Kusuka', 'Axe', 
                            'Roti Sisir', 'Teh Pucuk', 'KitKat', 'Glade Ocean', 'Roti Tawar', 'Aqua', 'Astor', 'Bayfresh Everywhere'
                            , 'Roti Gandum', 'Milo', 'Tango', 'Stella Matic'];
            $kategori_barang = ['Makanan', 'Minuman', 'Snack', 'Pewangi', 'Makanan', 'Minuman', 'Snack', 'Pewangi', 'Makanan', 'Minuman', 'Snack', 'Pewangi',
                                'Makanan', 'Minuman', 'Snack', 'Pewangi', 'Makanan', 'Minuman', 'Snack', 'Pewangi'];
            $harga = ['3000', '6000', '12500', '10000', '8500', '3000', '5000', '11000', '25000', '7500', '3500', '15000', '20000', '18000'
                        , '4000', '9000', '30000', '14500', '6000', '10500'];
            $qty = ['100', '50', '45', '40', '30', '60', '35', '20', '75', '80', '200', '10', '13', '74', '33', '18', '47', '55', '95', '25'];
        
            for($i=0; $i < 20; $i++){
                DB::table('barangs')->insert([
                    //'id_barang'=> $id_barang[$i],
                    'kode_barang' => $kode_barang[$i],
                    'nama_barang' => $nama_barang[$i],
                    'kategori_barang' => $kategori_barang[$i],
                    'harga' => $harga[$i],
                    'qty' => $qty[$i]
            ]);
    }
}
}