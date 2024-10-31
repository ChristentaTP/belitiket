<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
public function run()
{
DB::table('events')->insert([
[
'nama_acara' => 'SING GUYUB FEST 2024',
'gambar' => 'image.png', // Menggunakan tanda /
'detail' => '08 Desember 2024',
'deskripsi' => 'Festival musik tahunan yang meriah',
'lokasi' => 'Semarang | Stadion Diponegoro',
'created_at' => now(),
'updated_at' => now(),
],
[
'nama_acara' => 'SOUNDSFEST 2024',
'gambar' => 'image2.png',
'detail' => '22 Desember 2024',
'deskripsi' => 'Konser musik spektakuler',
'lokasi' => 'Bekasi | Parkiran Transera Waterpark',
'created_at' => now(),
'updated_at' => now(),
],
[
'nama_acara' => 'HARMONI KU 2024',
'gambar' => 'image3.png',
'detail' => '26 Oktober 2024',
'deskripsi' => 'Konser musik ssssssssssssssssssssssssssssssssssssssssssss',
'lokasi' => 'Semarang | Bandara Lama Semarang',
'created_at' => now(),
'updated_at' => now(),
],
[
'nama_acara' => 'SAMPOERNA FEST',
'gambar' => 'image4.png',
'detail' => '9 November 2024',
'deskripsi' => 'Konser musik ssssssssssssssssssssssssssssssssssssssssssss',
'lokasi' => 'Semarang | Sam Poo Kong',
'created_at' => now(),
'updated_at' => now(),
],
[
'nama_acara' => 'Semarang Worship Project 2024',
'gambar' => 'image5.png',
'detail' => '20 November 2024',
'deskripsi' => 'Semarang Worship Project 2024 is coming! ✨
Siapkan hati untuk malam penyembahan penuh berkat dan kebersamaan. 🙌
🗓️ 20 November 2024
📍GBT Kristus Alfa Omega Semarang

with Franky Kuncoro and The Repeats, Michael Rendy, Igen Worship & Unlimited Fire Band
@frankykuncoro @michaelrendyw @igen_worship
@unlimitedfireband',
'lokasi' => 'Semarang | GBT Kristus Alfa Omega ',
'created_at' => now(),
'updated_at' => now(),
],

// ini buat nambah acara lain
]);
}
}
