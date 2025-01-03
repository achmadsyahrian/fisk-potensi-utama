<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'name' => 'Hubungan Internasional',
            'slug' => 'hubungan-internasional',
        ]);

        Tag::create([
            'name' => 'Pendidikan Bahasa Inggris',
            'slug' => 'pendidikan-bahasa-inggris',
        ]);

        Tag::create([
            'name' => 'Kegiatan Mahasiswa',
            'slug' => 'kegiatan-mahasiswa',
        ]);

        Tag::create([
            'name' => 'Akademik',
            'slug' => 'akademik',
        ]);

        Tag::create([
            'name' => 'Fakultas',
            'slug' => 'fakultas',
        ]);

        Tag::create([
            'name' => 'Prodi',
            'slug' => 'prodi',
        ]);
    }
}
