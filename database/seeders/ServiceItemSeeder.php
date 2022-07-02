<?php

namespace Database\Seeders;

use App\Models\ApprovedService;
use App\Models\Item;
use App\Models\ServiceItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummyServiceItems = collect([
            [
                "transaction_code" => 15512101,
                "item_code" => 19004,
                "qty" => 4,
                "price" => 35000,
                "total" => 140000
            ],
            [
                "transaction_code" => 15512101,
                "item_code" => 20002,
                "qty" => 2,
                "price" => 10000,
                "total" => 20000
            ],
            [
                "transaction_code" => 15512301,
                "item_code" => 19003,
                "qty" => 4,
                "price" => 62000,
                "total" => 248000
            ],
            [
                "transaction_code" => 15512301,
                "item_code" => 19012,
                "qty" => 4,
                "price" => 95000,
                "total" => 380000
            ],
            [
                "transaction_code" => 15512301,
                "item_code" => 2001,
                "qty" => 2,
                "price" => 201500,
                "total" => 403000
            ],
            [
                "transaction_code" => 15512501,
                "item_code" => 19008,
                "qty" => 4,
                "price" => 70000,
                "total" => 280000
            ],
            [
                "transaction_code" => 15512601,
                "item_code" => 19006,
                "qty" => 4,
                "price" => 45000,
                "total" => 180000
            ],
            [
                "transaction_code" => 15512601,
                "item_code" => 19007,
                "qty" => 4,
                "price" => 50000,
                "total" => 200000
            ],
            [
                "transaction_code" => 15512901,
                "item_code" => 19004,
                "qty" => 4,
                "price" => 35000,
                "total" => 140000
            ],
            [
                "transaction_code" => 15512901,
                "item_code" => 19001,
                "qty" => 4,
                "price" => 39000,
                "total" => 156000
            ],
            [
                "transaction_code" => 15513101,
                "item_code" => 19014,
                "qty" => 4,
                "price" => 36000,
                "total" => 144000
            ],
            [
                "transaction_code" => 15513201,
                "item_code" => 19017,
                "qty" => 4,
                "price" => 45000,
                "total" => 180000
            ],
            [
                "transaction_code" => 15513301,
                "item_code" => 19008,
                "qty" => 4,
                "price" => 70000,
                "total" => 280000
            ],
            [
                "transaction_code" => 15513401,
                "item_code" => 19003,
                "qty" => 4,
                "price" => 62000,
                "total" => 248000
            ],
            [
                "transaction_code" => 15513501,
                "item_code" => 19002,
                "qty" => 4,
                "price" => 59000,
                "total" => 236000
            ],
            [
                "transaction_code" => 155121001,
                "item_code" => 19018,
                "qty" => 4,
                "price" => 38000,
                "total" => 152000
            ],
            [
                "transaction_code" => 155121001,
                "item_code" => 19009,
                "qty" => 4,
                "price" => 72000,
                "total" => 288000
            ]
        ]);

        try {
            DB::beginTransaction();
            foreach ($dummyServiceItems as $key => $value) {
                $approvedservice = ApprovedService::where('transaction_code', $value['transaction_code'])->first();
                $item = Item::where('code', $value['item_code'])->first();

                $serviceitem = new ServiceItem;
                $serviceitem->item_id = $item->id;
                $serviceitem->approved_service_id = $approvedservice->id;
                $serviceitem->qty = $value['qty'];
                $serviceitem->price = $value['price'];
                $serviceitem->total = $value['total'];
                $serviceitem->save();
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
