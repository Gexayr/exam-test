<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HousSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            DB::beginTransaction();
            if (($handle = fopen("database/seeders/data.csv", "r")) !== FALSE) {

                $columns = [];
                while (($data = fgetcsv($handle, 1000 )) !== FALSE) {
                    if (count($columns) === 0) {
                        $columns = array_map('strtolower', $data);
                        continue;
                    }

                    $num = count($data);
                    $array = [];
                    for ($c=0; $c < $num; $c++) {
                        $array[$columns[$c]] =$data[$c];
                    }
                    DB::table('houses')->insert($array);

                }

                fclose($handle);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Seeder work failure' . $e->getMessage());
        }

    }
}
