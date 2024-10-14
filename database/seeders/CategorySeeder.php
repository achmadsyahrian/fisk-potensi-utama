<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan Kategori Default
        Category::create([
            'name' => 'Hubungan Internasional',
            'slug' => 'hubungan-internasional',
        ]);

        Category::create([
            'name' => 'Pendidikan Bahasa Inggris',
            'slug' => 'pendidikan-bahasa-inggris',
        ]);
        
        Category::create([
            'name' => 'Akademik',
            'slug' => 'akademik',
        ]);
        
        Category::create([
            'name' => 'Mahasiswa',
            'slug' => 'mahasiswa',
        ]);

        Category::create([
            'name' => 'Pengembangan Karir',
            'slug' => 'pengembangan-karir',
        ]);

        Category::create([
            'name' => 'Kegiatan Ekstrakurikuler',
            'slug' => 'kegiatan-ekstrakurikuler',
        ]);
    }
}
