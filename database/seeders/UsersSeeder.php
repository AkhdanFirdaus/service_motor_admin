<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Technician;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummyUsers = [
            [
                "id" => 201001001,
                "email" => strtolower("Baktiadi") . "@gmail.com",
                "name" => "Baktiadi Hutapea",
                "is_technician" => true,
            ],
            [
                "id" => 201001002,
                "email" => strtolower("Jagaraga") . "@gmail.com",
                "name" => "Jagaraga Maheswara",
                "is_technician" => true,
            ],
            [
                "id" => 201001003,
                "email" => strtolower("Panca") . "@gmail.com",
                "name" => "Panca Nababan",
                "is_technician" => true,
            ],
            [
                "id" => 201001004,
                "email" => strtolower("Darmana") . "@gmail.com",
                "name" => "Darmana Januar",
                "is_technician" => true,
            ],
            [
                "id" => 201001005,
                "email" => strtolower("Taufan") . "@gmail.com",
                "name" => "Taufan Iswahyudi",
                "is_technician" => true,
            ],
            [
                "id" => 201001006,
                "email" => strtolower("Damar") . "@gmail.com",
                "name" => "Damar Adriansyah",
                "is_technician" => true,
            ],
            [
                "id" => 201001007,
                "email" => strtolower("Tugiman") . "@gmail.com",
                "name" => "Tugiman Nashiruddin",
                "is_technician" => true,
            ],
            [
                "id" => 201001008,
                "email" => strtolower("Lukita") . "@gmail.com",
                "name" => "Lukita Kuswoyo",
                "is_technician" => true,
            ],
            [
                "id" => 201001009,
                "email" => strtolower("Umay") . "@gmail.com",
                "name" => "Umay Prasetyo",
                "is_technician" => true,
            ],
            [
                "id" => 201001010,
                "email" => strtolower("Artanto") . "@gmail.com",
                "name" => "Artanto Kusumo",
                "is_technician" => true,
            ],
            [
                "id" => 201001011,
                "email" => strtolower("Mulyanto") . "@gmail.com",
                "name" => "Mulyanto Prakasa",
                "is_technician" => true,
            ],
            [
                "id" => 201001012,
                "email" => strtolower("Daliono") . "@gmail.com",
                "name" => "Daliono Habibi",
                "is_technician" => true,
            ],
            [
                "id" => 201001013,
                "email" => strtolower("Jarwi") . "@gmail.com",
                "name" => "Jarwi Hakim",
                "is_technician" => true,
            ],
            [
                "id" => 201001014,
                "email" => strtolower("Prayoga") . "@gmail.com",
                "name" => "Prayoga Mansur",
                "is_technician" => true,
            ],
            [
                "id" => 201001015,
                "email" => strtolower("Usman") . "@gmail.com",
                "name" => "Usman Mustofa",
                "is_technician" => true,
            ],
            [
                "id" => 201001016,
                "email" => strtolower("Nalar") . "@gmail.com",
                "name" => "Nalar Tampubolon",
                "is_technician" => true,
            ],
            [
                "id" => 150512001,
                "email" => strtolower("Marwata") . "@gmail.com",
                "name" => "Marwata Thamrin",
                "is_technician" => false,
            ],
            [
                "id" => 150512002,
                "email" => strtolower("Puti") . "@gmail.com",
                "name" => "Puti Wulandari",
                "is_technician" => false,
            ],
            [
                "id" => 150512003,
                "email" => strtolower("Juli") . "@gmail.com",
                "name" => "Juli Puspita",
                "is_technician" => false,
            ],
            [
                "id" => 150512004,
                "email" => strtolower("Arsipatra") . "@gmail.com",
                "name" => "Arsipatra Prayoga",
                "is_technician" => false,
            ],
            [
                "id" => 150512005,
                "email" => strtolower("Sabrina") . "@gmail.com",
                "name" => "Sabrina Mayasari",
                "is_technician" => false,
            ],
            [
                "id" => 150512006,
                "email" => strtolower("Unjani") . "@gmail.com",
                "name" => "Unjani Maryati",
                "is_technician" => false,
            ],
            [
                "id" => 150512007,
                "email" => strtolower("Timbul") . "@gmail.com",
                "name" => "Timbul Lazuardi",
                "is_technician" => false,
            ],
            [
                "id" => 150512008,
                "email" => strtolower("Yani") . "@gmail.com",
                "name" => "Yani Mardhiyah",
                "is_technician" => false,
            ],
            [
                "id" => 150512009,
                "email" => strtolower("TimbulLazuardi") . "@gmail.com",
                "name" => "Timbul Lazuardi",
                "is_technician" => false,
            ],
            [
                "id" => 150512010,
                "email" => strtolower("Restu") . "@gmail.com",
                "name" => "Restu Nuraini",
                "is_technician" => false,
            ],
            [
                "id" => 150513001,
                "email" => strtolower("Dalima") . "@gmail.com",
                "name" => "Dalima Kuswandari",
                "is_technician" => false,
            ],
            [
                "id" => 150513002,
                "email" => strtolower("Balidin") . "@gmail.com",
                "name" => "Balidin Santoso",
                "is_technician" => false,
            ],
            [
                "id" => 150513003,
                "email" => strtolower("Vanya") . "@gmail.com",
                "name" => "Vanya Novitasari",
                "is_technician" => false,
            ],
            [
                "id" => 150513004,
                "email" => strtolower("Endah") . "@gmail.com",
                "name" => "Endah Rahimah",
                "is_technician" => false,
            ],
            [
                "id" => 150513005,
                "email" => strtolower("Taufik") . "@gmail.com",
                "name" => "Taufik Sihombing",
                "is_technician" => false,
            ],
            [
                "id" => 150513006,
                "email" => strtolower("Naradi") . "@gmail.com",
                "name" => "Naradi Rajata",
                "is_technician" => false,
            ],
        ];

        $dummyTechnicians = collect([
            [
                "id" => 201001001,
                "ID_JABATAN" => 1,
                "NO_HP" => "0860 332 543",
                "ALAMAT" => "Jl. Kol. Ahmad Hosen Air Santok No. 381, Pariaman Timur, Kaluat, Kec. Pariaman Tim., Pariaman Timur,",
                // "NO_IDENTITAS_TEKNISI" => "2010-0503-001",
                "JOIN_DATE" => "2010-05-03"
            ],
            [
                "id" => 201001002,
                "ID_JABATAN" => 2,
                "NO_HP" => "(+62) 613 8693 240",
                "ALAMAT" => "Jl. Teuku Umar Barat No. 439, Dauh Puri Klod, Kec. Denpasar Bar., Kota Denpasar, Bali 80114",
                // "NO_IDENTITAS_TEKNISI" => "2010-0508-001",
                "JOIN_DATE" => "2010-05-08"
            ],
            [
                "id" => 201001003,
                "ID_JABATAN" => 1,
                "NO_HP" => "(+62) 937 7566 603",
                "ALAMAT" => "Ome No. 74, Kec. Tidore Utara, Kota Tidore Kepulauan, Maluku Utara",
                // "NO_IDENTITAS_TEKNISI" => "2010-0508-002",
                "JOIN_DATE" => "2010-05-08"
            ],
            [
                "id" => 201001004,
                "ID_JABATAN" => 1,
                "NO_HP" => "(+62) 695 7937 1397",
                "ALAMAT" => "Jl. M. Syafei No. 851, Koto Tangah, Kec. Payakumbuh Bar., Kota Payakumbuh, Sumatera Barat 26219",
                // "NO_IDENTITAS_TEKNISI" => "2010-0510-001",
                "JOIN_DATE" => "2010-05-10"
            ],
            [
                "id" => 201001005,
                "ID_JABATAN" => 2,
                "NO_HP" => "(+62) 753 4904 777",
                "ALAMAT" => "Jl. Arif Rahman Hakim No. 725, Liluwo, Kec. Kota Tengah, Kota Gorontalo, Gorontalo 96128",
                // "NO_IDENTITAS_TEKNISI" => "2010-0512-001",
                "JOIN_DATE" => "2010-05-12"
            ],
            [
                "id" => 201001006,
                "ID_JABATAN" => 2,
                "NO_HP" => "(+62) 705 8448 196",
                "ALAMAT" => "Jl. Raya Ciawi No. 807, Benda, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16138",
                // "NO_IDENTITAS_TEKNISI" => "2010-0512-002",
                "JOIN_DATE" => "2010-05-12"
            ],
            [
                "id" => 201001007,
                "ID_JABATAN" => 2,
                "NO_HP" => "0440 2828 732",
                "ALAMAT" => "Penanae, Kec. Raba, Nusa Tenggara Bar. 84115",
                // "NO_IDENTITAS_TEKNISI" => "2010-0515-001",
                "JOIN_DATE" => "2010-05-15"
            ],
            [
                "id" => 201001008,
                "ID_JABATAN" => 1,
                "NO_HP" => "0221 5488 7864",
                "ALAMAT" => "Situ Daun No. 668, Kec. Tenjolaya, Kabupaten Bogor, Jawa Barat 16370",
                // "NO_IDENTITAS_TEKNISI" => "2010-0610-001",
                "JOIN_DATE" => "2010-06-10"
            ],
            [
                "id" => 201001009,
                "ID_JABATAN" => 2,
                "NO_HP" => "0425 0249 743",
                "ALAMAT" => "Jl. Merawan No. 496, Sawah Lebar, Kec. Ratu Agung, Kota Bengkulu, Bengkulu 38228",
                // "NO_IDENTITAS_TEKNISI" => "2010-0610-002",
                "JOIN_DATE" => "2010-06-10"
            ],
            [
                "id" => 201001010,
                "ID_JABATAN" => 2,
                "NO_HP" => "0590 0870 832",
                "ALAMAT" => "Jl. Ahmad Yani No. 776, Selagalas, Kec. Sandubaya, Kota Mataram, Nusa Tenggara Bar. 83237",
                // "NO_IDENTITAS_TEKNISI" => "2010-0610-003",
                "JOIN_DATE" => "2010-06-10"
            ],
            [
                "id" => 201001011,
                "ID_JABATAN" => 1,
                "NO_HP" => "(+62) 452 2775 1140",
                "ALAMAT" => "Jl. H. Abd. Rochim No. 506, Ngadiluwih, Kec. Ngadiluwih, Kabupaten Kediri, Jawa Timur 64171",
                // "NO_IDENTITAS_TEKNISI" => "2010-0615-001",
                "JOIN_DATE" => "2010-06-15"
            ],
            [
                "id" => 201001012,
                "ID_JABATAN" => 2,
                "NO_HP" => "0822 611 502",
                "ALAMAT" => "Jl. Sri Sedani No. 926, Pilangbango, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63119",
                // "NO_IDENTITAS_TEKNISI" => "2010-0615-002",
                "JOIN_DATE" => "2010-06-15"
            ],
            [
                "id" => 201001013,
                "ID_JABATAN" => 2,
                "NO_HP" => "0397 1966 903",
                "ALAMAT" => "Bukit Tunggal, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah 74874",
                // "NO_IDENTITAS_TEKNISI" => "2010-0615-003",
                "JOIN_DATE" => "2010-06-15"
            ],
            [
                "id" => 201001014,
                "ID_JABATAN" => 1,
                "NO_HP" => "(+62) 749 6409 455",
                "ALAMAT" => "Jl. Tondano No. 779, Bulotada Tim., Kec. Sipatana, Kota Gorontalo, Gorontalo 96124",
                // "NO_IDENTITAS_TEKNISI" => "2010-0625-001",
                "JOIN_DATE" => "2010-06-25"
            ],
            [
                "id" => 201001015,
                "ID_JABATAN" => 2,
                "NO_HP" => "0543 3536 639",
                "ALAMAT" => "Sriwijaya, Kec. Bukitintan, Kota Pangkal Pinang, Kepulauan Bangka Belitung 33684",
                // "NO_IDENTITAS_TEKNISI" => "2010-0626-001",
                "JOIN_DATE" => "2010-06-26"
            ],
            [
                "id" => 201001016,
                "ID_JABATAN" => 2,
                "NO_HP" => "0219 7607 253",
                "ALAMAT" => "Sail, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28289",
                // "NO_IDENTITAS_TEKNISI" => "2010-0626-002",
                "JOIN_DATE" => "2010-06-26"
            ]
        ]);

        $dummyCustomers = collect([
            [
                "id" => 150512001,
                "ALAMAT" => "Banal No. 565, Pariaman 25596, Sumatera Barat",
                "NO_HP" => "(+62) 555 4151 4055",
                "NO_STNK" => "BA 6122 WA"
            ],
            [
                "id" => 150512002,
                "ALAMAT" => "Uluwatu No. 990, Kota Denpasar 80131, Bali",
                "NO_HP" => "0954 8781 9890",
                "NO_STNK" => "DK 3999 ACG"
            ],
            [
                "id" => 150512003,
                "ALAMAT" => "Jl. Raya Mareku No. 490, Mareku, Kec. Tidore Utara, Kota Tidore Kepulauan, Maluku Utara",
                "NO_HP" => "(+62) 414 3164 3936",
                "NO_STNK" => "BG 4356 BC"
            ],
            [
                "id" => 150512004,
                "ALAMAT" => "Jl. Anthurium No. 57, Payolansek, Kec. Payakumbuh Bar., Kota Payakumbuh, Sumatera Barat 26219",
                "NO_HP" => "0270 8831 865",
                "NO_STNK" => "BA 6165 MG"
            ],
            [
                "id" => 150512005,
                "ALAMAT" => "Jl. Sawit II No. 660, Tuladenggi, Kec. Dungingi, Kota Gorontalo, Gorontalo 96136",
                "NO_HP" => "0838 5476 733",
                "NO_STNK" => "DM 4939 XJ"
            ],
            [
                "id" => 150512006,
                "ALAMAT" => "Jl. Ir. H. Juanda No. 530, RT.01/RW.13, Gudang, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16123",
                "NO_HP" => "0762 0199 575",
                "NO_STNK" => "F 5712 DC"
            ],
            [
                "id" => 150512007,
                "ALAMAT" => "Jl. Gatot Subroto No. 687, Sadia, Kec. Mpunda, Kab. Bima, Nusa Tenggara Bar. 84111",
                "NO_HP" => "(+62) 989 1092 994",
                "NO_STNK" => "EA 4885 SD"
            ],
            [
                "id" => 150512008,
                "ALAMAT" => "Jl. Tamansari No. 484, Mulyasari, Kec. Tamansari, Kab. Tasikmalaya, Jawa Barat 46196",
                "NO_HP" => "(+62) 856 644 329",
                "NO_STNK" => "Z 6201 JJA"
            ],
            [
                "id" => 150512009,
                "ALAMAT" => "57WV+653, Jl. Merapi Raya No. 330, Panorama, Kec. Singaran Pati, Kota Bengkulu, Bengkulu 38226",
                "NO_HP" => "(+62) 443 4328 378",
                "NO_STNK" => "BD 3291 AD"
            ],
            [
                "id" => 150512010,
                "ALAMAT" => "Jl. KH. Ahmad Dahlan No. 488, Pagesangan, Kec. Mataram, Kota Mataram, Nusa Tenggara Bar. 83115",
                "NO_HP" => "0474 1974 6243",
                "NO_STNK" => "DR 6593 FG"
            ],
            [
                "id" => 150513001,
                "ALAMAT" => "Jl. Letjend Suparman No. 702, Tosaren, Kec. Pesantren, Kota Kediri, Jawa Timur 64133",
                "NO_HP" => "(+62) 679 7419 9199",
                "NO_STNK" => "AG 6651 AWC"
            ],
            [
                "id" => 150513002,
                "ALAMAT" => "Jl. Panglima Sudirman No.93, Kejuron, Kec. Taman, Kota Madiun, Jawa Timur 63132",
                "NO_HP" => "(+62) 27 2629 1751",
                "NO_STNK" => "AE 3969 AQ"
            ],
            [
                "id" => 150513003,
                "ALAMAT" => "Jl. Tingang VIII No.17, Palangka, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah 73112",
                "NO_HP" => "(+62) 314 5698 1458",
                "NO_STNK" => "KH 4009 AG"
            ],
            [
                "id" => 150513004,
                "ALAMAT" => "Jl. Manggis No. 484, Molosipat W, Kec. Kota Bar., Kota Gorontalo, Gorontalo 96133",
                "NO_HP" => "0497 1650 635",
                "NO_STNK" => "DM 5477 AB"
            ],
            [
                "id" => 150513005,
                "ALAMAT" => "Jl. A. Yani No. 241, Batin Tikal, Kec. Taman Sari, Kota Pangkal Pinang, Kepulauan Bangka Belitung 33",
                "NO_HP" => "0252 5618 3756",
                "NO_STNK" => "BN 6978 AJ"
            ],
            [
                "id" => 150513006,
                "ALAMAT" => "Kampus Bina Widya No. 843, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28293",
                "NO_HP" => "0611 5282 868",
                "NO_STNK" => "BM 4252 ADC"
            ],
        ]);

        $password = bcrypt('password');

        try {
            DB::beginTransaction();

            foreach ($dummyUsers as $key => $user) {
                $newuser = new User;
                $newuser->email = $user['email'];
                $newuser->name = $user['name'];
                $newuser->password = $password;
                $newuser->save();

                if ($user['is_technician']) {
                    $technician = $dummyTechnicians->where('id', $user['id'])->first();
                    $newtechnician = new Technician;
                    $newtechnician->user_id = $newuser->id;
                    $newtechnician->role_id = $technician['ID_JABATAN'];
                    $newtechnician->phone = $technician['NO_HP'];
                    $newtechnician->address = $technician['ALAMAT'];
                    $newtechnician->join_date = $technician['JOIN_DATE'];
                    $newtechnician->save();
                } else {
                    $customer = $dummyCustomers->where('id', $user['id'])->first();
                    $newcustomer = new Customer;
                    $newcustomer->user_id = $newuser->id;
                    $newcustomer->phone = $customer['NO_HP'];
                    $newcustomer->address = $customer['ALAMAT'];
                    $newcustomer->no_stnk = $customer['NO_STNK'];
                    $newcustomer->save();
                }
            }

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
