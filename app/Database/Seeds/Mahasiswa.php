<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\i18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051074',
                'nama'    => 'Dwi Kurniawan',
                'alamat' => 'Bandar Lampung',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2017051013',
                'nama'    => 'Nur Setiowati',
                'alamat' => 'Tanggamus',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2017051014',
                'nama'    => 'Saddam Surya',
                'alamat' => 'Bandar Lampung',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2057051010',
                'nama'    => 'Kurniawan Dwi Yulianto',
                'alamat' => 'Bandar Lampung',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2017051073',
                'nama'    => 'Arman',
                'alamat' => 'Kampung Baru',
                'created_at' => Time::now()
            ],
        ];


        foreach ($data_mahasiswa as $data) {
            // Using Query Builder
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
