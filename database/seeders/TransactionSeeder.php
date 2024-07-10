<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'submited_by'       => 'Test',
                'submited_date'     => '2024-07-24',
                'code'              => 'R001',
                'activity'          => 'Cincang 4" Tebal',
                'UOM'               => 'Pokok',
                'block'             => '116',
                'task'              => 'A1',
                'start'             => '07:00',
                'end'               => '17:00',
                'mesin_id'          => 'LYK01',
                'fuel'              => '200',
            ],[
                'submited_by'       => 'Test',
                'submited_date'     => '2024-07-23',
                'code'              => 'R002',
                'activity'          => 'Cincang 4" Tebal',
                'UOM'               => 'Pokok',
                'block'             => '116',
                'task'              => 'A1',
                'start'             => '07:00',
                'end'               => '17:00',
                'mesin_id'          => 'LYK02',
                'fuel'              => '200',
            ],[
                'submited_by'       => 'Test',
                'submited_date'     => '2024-07-24',
                'code'              => 'R002',
                'activity'          => 'Cincang 4" Tebal',
                'UOM'               => 'Pokok',
                'block'             => '116',
                'task'              => 'A1',
                'start'             => '07:00',
                'end'               => '17:00',
                'mesin_id'          => 'LYK01',
                'fuel'              => '200',
            ],[
                'submited_by'       => 'Test',
                'submited_date'     => '2024-07-24',
                'code'              => 'R001',
                'activity'          => 'Cincang 4" Tebal',
                'UOM'               => 'Pokok',
                'block'             => '116',
                'task'              => 'A1',
                'start'             => '07:00',
                'end'               => '17:00',
                'mesin_id'          => 'LYK01',
                'fuel'              => '200',
            ],[
                'submited_by'       => 'Test',
                'submited_date'     => '2024-07-23',
                'code'              => 'R003',
                'activity'          => 'Cincang 4" Tebal',
                'UOM'               => 'Pokok',
                'block'             => '116',
                'task'              => 'A1',
                'start'             => '07:00',
                'end'               => '17:00',
                'mesin_id'          => 'LYK01',
                'fuel'              => '200',
            ],[
                'submited_by'       => 'Test',
                'submited_date'     => '2024-07-22',
                'code'              => 'R002',
                'activity'          => 'Cincang 4" Tebal',
                'UOM'               => 'Pokok',
                'block'             => '116',
                'task'              => 'A1',
                'start'             => '07:00',
                'end'               => '17:00',
                'mesin_id'          => 'LYK02',
                'fuel'              => '200',
            ],[
                'submited_by'       => 'Test',
                'submited_date'     => '2024-07-24',
                'code'              => 'R002',
                'activity'          => 'Cincang 4" Tebal',
                'UOM'               => 'Pokok',
                'block'             => '116',
                'task'              => 'A1',
                'start'             => '07:00',
                'end'               => '17:00',
                'mesin_id'          => 'LYK02',
                'fuel'              => '200',
            ]
        ];

        foreach ($data as $key => $value) {
            Transaction::updateOrCreate([
                'submited_by'       => $value['submited_by'],
                'submited_date'     => $value['submited_date'],
                'code'              => $value['code'],
                'activity'          => $value['activity'],
                'UOM'               => $value['UOM'],
                'block'             => $value['block'],
                'task'              => $value['task'],
                'start'             => $value['start'],
                'end'               => $value['end'],
                'mesin_id'          => $value['mesin_id'],
                'fuel'              => $value['fuel'],
            ],[
                'submited_by'       => $value['submited_by'],
                'submited_date'     => $value['submited_date'],
                'code'              => $value['code'],
                'activity'          => $value['activity'],
                'UOM'               => $value['UOM'],
                'block'             => $value['block'],
                'task'              => $value['task'],
                'start'             => $value['start'],
                'end'               => $value['end'],
                'mesin_id'          => $value['mesin_id'],
                'fuel'              => $value['fuel'],
            ]);
        }
        
    }
}
