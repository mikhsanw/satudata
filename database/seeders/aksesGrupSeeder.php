<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class aksesGrupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('aksesgrups')->truncate();

        $isi = [
                    [
                        'nama' 			=> 'Root',
                        'alias'         => 'root'
                    ],
                    [
                        'nama' 			=> 'Admin',
                        'alias'         => 'admin'
                    ],
                    [
                        'nama' 			=> 'Operator',
                        'alias'         => 'operator'
                    ],
                ];
        DB::table('aksesgrups')->insert($isi);
        Schema::enableForeignKeyConstraints();
    }
}
