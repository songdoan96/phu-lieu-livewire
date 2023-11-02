<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
            [
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'name' => 'Admin',
                'is_admin' => true
            ],
            [
                'username' => 'tp01',
                'password' => Hash::make('tp01'),
                'name' => 'Hà',
                'is_admin' => false
            ],
            [
                'username' => 'tp02',
                'password' => Hash::make('tp02'),
                'name' => 'Hà B',
                'is_admin' => false
            ],
            [
                'username' => 'tp03',
                'password' => Hash::make('tp03'),
                'name' => 'Hương B',
                'is_admin' => false
            ],
            [
                'username' => 'tp04',
                'password' => Hash::make('tp04'),
                'name' => 'Thúy',
                'is_admin' => false
            ],
            [
                'username' => 'tp05',
                'password' => Hash::make('tp05'),
                'name' => 'Hằng',
                'is_admin' => false
            ],
            [
                'username' => 'tp06',
                'password' => Hash::make('tp06'),
                'name' => 'Thắng',
                'is_admin' => false
            ]

        ]);

        DB::insert("INSERT INTO `items` (`id`, `customer`, `style`, `type`, `container`, `model`, `item`, `color`, `params`, `size`, `po`, `unit`, `qty`, `note`, `date`, `sold_out`, `order_id`, `plan`, `norm`, `user_name`, `created_at`) VALUES
        (1, 'DCL', '312532', 'CHỈ DT0960', 'A01', 'ALL', 'DT0960', 'ALL', 'T24', 'ALL', '', 'PCS', 2278.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (2, 'DCL', '312532', 'CHỈ N04A', 'A01', '8573844', 'N04A', 'BLACK', 'T24', 'ALL', '', 'PCS', 15.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (3, 'DCL', '312532', 'CHỈ N07A', 'A01', '8573844', 'N07A', 'BLACK', 'T27', 'ALL', 'R49372A337', 'PCS', 200.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (4, 'DCL', '312532', 'CHỈ H21A', 'A01', '8587256', 'H21A', 'TURQUOISE', '70D/3', 'ALL', '', 'PCS', 2719.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (5, 'DCL', '312532', 'CHỈ B21A', 'A01', '8587256', 'B21A', 'TURQUOISE', 'T24', 'ALL', '', 'PCS', 15.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (6, 'DCL', '312532', 'CHỈ N07A', 'A01', '8573844', 'N07A', 'BLACK', '70D/3', 'ALL', '', 'PCS', 2796.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (8, 'DCL', '329140', 'CHỈ C9760', 'A02', '', '8789675', '', 'AT27', '', '', 'PCS', 10.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (9, 'DCL', '329140', 'CHỈ LT113', 'A02', '', '8789675', '', 'ET40', '', 'R49372A281', 'PCS', 15.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (10, 'DCL', '329140', 'CHỈ C5927', 'A02', '', '8789675', '', 'AT27', '', '', 'PCS', 135.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (11, 'DCL', '329140', 'CHỈ 5713', 'A02', '', '8789675', '', 'ELOFLEXT27', '', '', 'PCS', 10.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (12, 'DCL', '329140', 'CHỈ C9760', 'A02', '', '8789675', '', 'AT27', '', 'R49372A281', 'PCS', 15.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (13, 'DCL', '329140', 'CHỈ C9967', 'A02', '', '8789675', '', 'AT27', '', '', 'PCS', 100.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (14, 'DCL', '329140', 'CHỈ C5713', 'A02', '', '8789675', '', 'AT27', '', 'P49372A281', 'PCS', 890.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (15, 'DCL', '329140', 'CHỈ C5713', 'A02', '', '8789675', '', 'ET40', '', 'R49372A281', 'PCS', 330.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (16, 'DCL', '329140', 'CHỈ C9967', 'A02', '', '8789675', '', 'AT27', '', 'R49372A281', 'PCS', 100.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (17, 'DCL', '329140', 'CHỈ LT113', 'A02', '', '8789675', '', 'ET40', '', '', 'PCS', 8.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (18, 'DCL', '329140', 'CHỈ C5927', 'A02', '', '8789675', '', 'AT27', '', 'R49372A281', 'PCS', 199.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (19, 'DCL', '341410', 'DÂY KÉO', 'A03', '9810025134', '8659679', 'VI385', '20 CM', '', 'OR01006083', 'PCS', 5884.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19'),
        (20, 'DCL', '341410', 'DÂY KÉO', 'A03', '9810013753', '8650521', 'VI385', '50 CM', '', 'OR01006073', 'PCS', 1274.00, '', '2023-08-30', 0, NULL, NULL, NULL,NULL, '2023-08-30 06:48:19');");

    }
}
