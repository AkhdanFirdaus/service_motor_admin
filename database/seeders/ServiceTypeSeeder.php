<?php

namespace Database\Seeders;

use App\Models\ApprovedService;
use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummyApprovedServices = collect([
            [
                "id" => 15512001,
                "transaction_code" => 15512101,
                "service_code" => 1001,
            ],
            [
                "id" => 15512001,
                "transaction_code" => 15512101,
                "service_code" => 1002,
            ],
            [
                "id" => 15512001,
                "transaction_code" => 15512101,
                "service_code" => 1003,
            ],
            [
                "id" => 15512001,
                "transaction_code" => 15512101,
                "service_code" => 1004,
            ],
            [
                "id" => 15512001,
                "transaction_code" => 15512105,
                "service_code" => 1005,
            ],
            [
                "id" => 15512001,
                "transaction_code" => 15512105,
                "service_code" => 1006,
            ],
            [
                "id" => 15512001,
                "transaction_code" => 15512105,
                "service_code" => 1007,
            ],
            [
                "id" => 15512001,
                "transaction_code" => 15512105,
                "service_code" => 1008,
            ],
            [
                "id" => 15512001,
                "transaction_code" => 15512105,
                "service_code" => 1009,
            ],
            [
                "id" => 15512001,
                "transaction_code" => 15512105,
                "service_code" => 3002,
            ],
            [
                "id" => 15512002,
                "transaction_code" => 15512105,
                "service_code" => 1001,
            ],
            [
                "id" => 15512002,
                "transaction_code" => 15512202,
                "service_code" => 1002,
            ],
            [
                "id" => 15512002,
                "transaction_code" => 15512202,
                "service_code" => 1003,
            ],
            [
                "id" => 15512002,
                "transaction_code" => 15512202,
                "service_code" => 1004,
            ],
            [
                "id" => 15512002,
                "transaction_code" => 15512205,
                "service_code" => 1005,
            ],
            [
                "id" => 15512002,
                "transaction_code" => 15512206,
                "service_code" => 1006,
            ],
            [
                "id" => 15512002,
                "transaction_code" => 15512206,
                "service_code" => 1007,
            ],
            [
                "id" => 15512002,
                "transaction_code" => 15512206,
                "service_code" => 1008,
            ],
            [
                "id" => 15512002,
                "transaction_code" => 15512206,
                "service_code" => 1009,
            ],
            [
                "id" => 15512003,
                "transaction_code" => 15512301,
                "service_code" => 1001,
            ],
            [
                "id" => 15512003,
                "transaction_code" => 15512302,
                "service_code" => 1002,
            ],
            [
                "id" => 15512003,
                "transaction_code" => 15512303,
                "service_code" => 1003,
            ],
            [
                "id" => 15512003,
                "transaction_code" => 15512303,
                "service_code" => 1004,
            ],
            [
                "id" => 15512003,
                "transaction_code" => 15512305,
                "service_code" => 1005,
            ],
            [
                "id" => 15512003,
                "transaction_code" => 15512305,
                "service_code" => 1006,
            ],
            [
                "id" => 15512003,
                "transaction_code" => 15512305,
                "service_code" => 1007,
            ],
            [
                "id" => 15512003,
                "transaction_code" => 15512308,
                "service_code" => 1008,
            ],
            [
                "id" => 15512003,
                "transaction_code" => 15512308,
                "service_code" => 1009,
            ],
            [
                "id" => 15512003,
                "transaction_code" => 15512308,
                "service_code" => 2006,
            ],
            [
                "id" => 15512004,
                "transaction_code" => 15512401,
                "service_code" => 3001,
            ],
            [
                "id" => 15512005,
                "transaction_code" => 15512501,
                "service_code" => 1001,
            ],
            [
                "id" => 15512005,
                "transaction_code" => 15512502,
                "service_code" => 1002,
            ],
            [
                "id" => 15512005,
                "transaction_code" => 15512502,
                "service_code" => 1003,
            ],
            [
                "id" => 15512005,
                "transaction_code" => 15512502,
                "service_code" => 1004,
            ],
            [
                "id" => 15512005,
                "transaction_code" => 15512502,
                "service_code" => 1005,
            ],
            [
                "id" => 15512005,
                "transaction_code" => 15512506,
                "service_code" => 1006,
            ],
            [
                "id" => 15512005,
                "transaction_code" => 15512506,
                "service_code" => 1007,
            ],
            [
                "id" => 15512005,
                "transaction_code" => 15512506,
                "service_code" => 1008,
            ],
            [
                "id" => 15512005,
                "transaction_code" => 15512506,
                "service_code" => 1009,
            ],
            [
                "id" => 15512006,
                "transaction_code" => 15512601,
                "service_code" => 2004,
            ],
            [
                "id" => 15512006,
                "transaction_code" => 15512601,
                "service_code" => 1004,
            ],
            [
                "id" => 15512007,
                "transaction_code" => 15512601,
                "service_code" => 1001,
            ],
            [
                "id" => 15512007,
                "transaction_code" => 15512601,
                "service_code" => 1002,
            ],
            [
                "id" => 15512007,
                "transaction_code" => 15512703,
                "service_code" => 1003,
            ],
            [
                "id" => 15512007,
                "transaction_code" => 15512703,
                "service_code" => 1004,
            ],
            [
                "id" => 15512007,
                "transaction_code" => 15512703,
                "service_code" => 1005,
            ],
            [
                "id" => 15512007,
                "transaction_code" => 15512703,
                "service_code" => 1006,
            ],
            [
                "id" => 15512007,
                "transaction_code" => 15512707,
                "service_code" => 1007,
            ],
            [
                "id" => 15512007,
                "transaction_code" => 15512707,
                "service_code" => 1008,
            ],
            [
                "id" => 15512007,
                "transaction_code" => 15512707,
                "service_code" => 1009,
            ],
            [
                "id" => 15512008,
                "transaction_code" => 15512707,
                "service_code" => 1001,
            ],
            [
                "id" => 15512008,
                "transaction_code" => 15512802,
                "service_code" => 1002,
            ],
            [
                "id" => 15512008,
                "transaction_code" => 15512803,
                "service_code" => 1003,
            ],
            [
                "id" => 15512008,
                "transaction_code" => 15512804,
                "service_code" => 1004,
            ],
            [
                "id" => 15512008,
                "transaction_code" => 15512805,
                "service_code" => 1005,
            ],
            [
                "id" => 15512008,
                "transaction_code" => 15512806,
                "service_code" => 1006,
            ],
            [
                "id" => 15512008,
                "transaction_code" => 15512807,
                "service_code" => 1007,
            ],
            [
                "id" => 15512008,
                "transaction_code" => 15512808,
                "service_code" => 1008,
            ],
            [
                "id" => 15512008,
                "transaction_code" => 15512809,
                "service_code" => 1009,
            ],
            [
                "id" => 15512009,
                "transaction_code" => 15512901,
                "service_code" => 3003,
            ],
            [
                "id" => 15512009,
                "transaction_code" => 15512902,
                "service_code" => 1001,
            ],
            [
                "id" => 15512009,
                "transaction_code" => 15512903,
                "service_code" => 1003,
            ],
            [
                "id" => 15512009,
                "transaction_code" => 15512904,
                "service_code" => 1003,
            ],
            [
                "id" => 15512009,
                "transaction_code" => 15512905,
                "service_code" => 1004,
            ],
            [
                "id" => 15512009,
                "transaction_code" => 15512906,
                "service_code" => 1005,
            ],
            [
                "id" => 15512009,
                "transaction_code" => 15512907,
                "service_code" => 1006,
            ],
            [
                "id" => 15512009,
                "transaction_code" => 15512908,
                "service_code" => 1007,
            ],
            [
                "id" => 15512009,
                "transaction_code" => 15512909,
                "service_code" => 1008,
            ],
            [
                "id" => 15512009,
                "transaction_code" => 15512910,
                "service_code" => 1009,
            ],
            [
                "id" => 15513001,
                "transaction_code" => 15513101,
                "service_code" => 1001,
            ],
            [
                "id" => 15513001,
                "transaction_code" => 15513102,
                "service_code" => 1002,
            ],
            [
                "id" => 15513001,
                "transaction_code" => 15513103,
                "service_code" => 1003,
            ],
            [
                "id" => 15513001,
                "transaction_code" => 15513104,
                "service_code" => 1004,
            ],
            [
                "id" => 15513001,
                "transaction_code" => 15513105,
                "service_code" => 1005,
            ],
            [
                "id" => 15513001,
                "transaction_code" => 15513106,
                "service_code" => 1006,
            ],
            [
                "id" => 15513001,
                "transaction_code" => 15513107,
                "service_code" => 1007,
            ],
            [
                "id" => 15513001,
                "transaction_code" => 15513108,
                "service_code" => 1008,
            ],
            [
                "id" => 15513001,
                "transaction_code" => 15513109,
                "service_code" => 1009,
            ],
            [
                "id" => 15513002,
                "transaction_code" => 15513201,
                "service_code" => 1001,
            ],
            [
                "id" => 15513002,
                "transaction_code" => 15513202,
                "service_code" => 1002,
            ],
            [
                "id" => 15513002,
                "transaction_code" => 15513203,
                "service_code" => 1003,
            ],
            [
                "id" => 15513002,
                "transaction_code" => 15513204,
                "service_code" => 1004,
            ],
            [
                "id" => 15513002,
                "transaction_code" => 15513205,
                "service_code" => 1005,
            ],
            [
                "id" => 15513002,
                "transaction_code" => 15513206,
                "service_code" => 1006,
            ],
            [
                "id" => 15513002,
                "transaction_code" => 15513207,
                "service_code" => 1007,
            ],
            [
                "id" => 15513002,
                "transaction_code" => 15513208,
                "service_code" => 1008,
            ],
            [
                "id" => 15513002,
                "transaction_code" => 15513209,
                "service_code" => 1009,
            ],
            [
                "id" => 15513003,
                "transaction_code" => 15513301,
                "service_code" => 1001,
            ],
            [
                "id" => 15513003,
                "transaction_code" => 15513302,
                "service_code" => 1002,
            ],
            [
                "id" => 15513003,
                "transaction_code" => 15513303,
                "service_code" => 1003,
            ],
            [
                "id" => 15513003,
                "transaction_code" => 15513304,
                "service_code" => 1004,
            ],
            [
                "id" => 15513003,
                "transaction_code" => 15513305,
                "service_code" => 1005,
            ],
            [
                "id" => 15513003,
                "transaction_code" => 15513306,
                "service_code" => 1006,
            ],
            [
                "id" => 15513003,
                "transaction_code" => 15513307,
                "service_code" => 1007,
            ],
            [
                "id" => 15513003,
                "transaction_code" => 15513308,
                "service_code" => 1008,
            ],
            [
                "id" => 15513003,
                "transaction_code" => 15513309,
                "service_code" => 1009,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513401,
                "service_code" => 1001,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513402,
                "service_code" => 1002,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513403,
                "service_code" => 1003,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513404,
                "service_code" => 1004,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513405,
                "service_code" => 1005,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513406,
                "service_code" => 1006,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513407,
                "service_code" => 1007,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513407,
                "service_code" => 1008,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513407,
                "service_code" => 1009,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513410,
                "service_code" => 2001,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513410,
                "service_code" => 2002,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513410,
                "service_code" => 2003,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513410,
                "service_code" => 2004,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513410,
                "service_code" => 2005,
            ],
            [
                "id" => 15513004,
                "transaction_code" => 15513410,
                "service_code" => 2006,
            ],
            [
                "id" => 15513005,
                "transaction_code" => 15513501,
                "service_code" => 1001,
            ],
            [
                "id" => 15513005,
                "transaction_code" => 15513501,
                "service_code" => 1002,
            ],
            [
                "id" => 15513005,
                "transaction_code" => 15513501,
                "service_code" => 1003,
            ],
            [
                "id" => 15513005,
                "transaction_code" => 15513501,
                "service_code" => 1004,
            ],
            [
                "id" => 15513005,
                "transaction_code" => 15513501,
                "service_code" => 1005,
            ],
            [
                "id" => 15513005,
                "transaction_code" => 15513506,
                "service_code" => 1006,
            ],
            [
                "id" => 15513005,
                "transaction_code" => 15513506,
                "service_code" => 1007,
            ],
            [
                "id" => 15513005,
                "transaction_code" => 15513506,
                "service_code" => 1008,
            ],
            [
                "id" => 15513005,
                "transaction_code" => 15513506,
                "service_code" => 1009,
            ],
            [
                "id" => 15513006,
                "transaction_code" => 15513506,
                "service_code" => 1001,
            ],
            [
                "id" => 15513006,
                "transaction_code" => 15513602,
                "service_code" => 1002,
            ],
            [
                "id" => 15513006,
                "transaction_code" => 15513602,
                "service_code" => 1003,
            ],
            [
                "id" => 15513006,
                "transaction_code" => 15513602,
                "service_code" => 1004,
            ],
            [
                "id" => 15513006,
                "transaction_code" => 15513602,
                "service_code" => 1005,
            ],
            [
                "id" => 15513006,
                "transaction_code" => 15513606,
                "service_code" => 1006,
            ],
            [
                "id" => 15513006,
                "transaction_code" => 15513606,
                "service_code" => 1007,
            ],
            [
                "id" => 15513006,
                "transaction_code" => 15513606,
                "service_code" => 1008,
            ],
            [
                "id" => 15513006,
                "transaction_code" => 15513606,
                "service_code" => 1009,
            ],
            [
                "id" => 15512010,
                "transaction_code" => 155121001,
                "service_code" => 1001,
            ],
            [
                "id" => 15512010,
                "transaction_code" => 155121001,
                "service_code" => 1002,
            ],
            [
                "id" => 15512010,
                "transaction_code" => 155121001,
                "service_code" => 1003,
            ],
            [
                "id" => 15512010,
                "transaction_code" => 155121001,
                "service_code" => 1004,
            ],
            [
                "id" => 15512010,
                "transaction_code" => 155121001,
                "service_code" => 1005,
            ],
            [
                "id" => 15512010,
                "transaction_code" => 155121001,
                "service_code" => 1006,
            ],
            [
                "id" => 15512010,
                "transaction_code" => 155121001,
                "service_code" => 1007,
            ],
            [
                "id" => 15512010,
                "transaction_code" => 155121001,
                "service_code" => 1008,
            ],
            [
                "id" => 15512010,
                "transaction_code" => 155121001,
                "service_code" => 1009,
            ]
        ]);

        try {
            DB::beginTransaction();
            foreach ($dummyApprovedServices as $key => $value) {
                $approvedservice = ApprovedService::where('transaction_code', $value['transaction_code'])->first();
                $service = Service::where('code', $value['service_code'])->first();
                $newservicetype = new ServiceType;
                $newservicetype->approved_service_id = $approvedservice->id;
                $newservicetype->service_id = $service->id;
                $newservicetype->save();
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
