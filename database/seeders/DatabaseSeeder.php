<?php

namespace Database\Seeders;

use \App\Models\Post;
use \App\Models\User;
use \App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();

        // User::create([
        //     'name' => 'SMA Sedes',
        //     'email' => 'smasedes@gmail.com',
        //     'password' => 'password'
        // ]);

        Category::create([
            'name' => 'Blog',
            'slug' => 'blog'
        ]);

        Post::create([
            'title' => 'Mengenal Sosok Ketua OSIS SMA Sedes Sapientiae',
            'slug' => 'mengenal-sosok-ketua-osis-sma-sedes-sapientiae',
            'excerpt' => 'Halo semua! Kenalin namaku Livia Devina Mamahi biasa disapa Vina. Sekarang aku kelas X, SMA Sedes Sapientiae. 
            Tepatnya di kelas X 8. Sebenarnya kehidupanku di sekolah berjalan seperti remaja pada umumnya. Tapi ada tambahan bumbu-bumbu rintangan di dalamnya lho.',
            'body' => '<p>Pertama kali masuk Sedes aku udah tertarik banget nih sama yang namanya INSEKTA. Kenapa tertarik banget? Soalnya kegiatannya asik karena aku bisa kenalan sama temen-temen dari SMP lain. Gak cuma temen-temen kelas X aja, tapi dengan hadirnya INSEKTA aku juga bisa kenalan dengan kakak-kakak panitia yang super kece. Jadi inilah awalku terinspirasi untuk menjadi lebih aktif lagi di dalam sekolah.</p>
            <p>Tahun lalu aku lihat di instagram @osissedesku bahwa mereka open recruitment kepengurusan OSIS. Tanpa lama lagi aku langsung cuzzz buat daftar.</p>
            <p>Tahap pertama adalah kita disuruh mengisi formulir yang udah terlist beberapa pertanyaan. Untuk tahap pertama ini berjalan lancar dan aku percaya diri untuk lolos. Lalu ada tahap kedua ( Tes fisik dan wawancara ) dan ketiga ( wawancara ). Tahap ke-2 dan ke-3 berjalan dengan lancar tapi sebenarnya aku kurang puas. Tapi selalu ada aja temen yang support dan ngeyakinin aku bahwa aku lolos. Mengejutkannya, beberapa hari setelahnya ketika pengumuman final, puji Tuhan aku lolos.</p>
            <p>Aku dan temen-temen OSKOM melewati masa LDK. Di sana kami berdinamika dan ngelakuin berbagai macam rintangan yang asik dan mengandung banyak pesan moral di dalamnya.</p>
            <p>Beberapa hari setelahnya ketika LDK selesai, ada rapat untuk penentuan kandidat ketua dan wakil OSIS. Aku bener-bener se-gak nyangka itu, kalau aku bakal dipilih jadi kandidat ketua OSIS 2023/2024 bersama wakilku, Kak Ryan Raffliansyah.</p>
            <p>Kami menjadi paslon 1 bersama tim sukses kami. Di sana kita melakukan diskusi lebih lanjut terkait program kerja, kampanye, dan debat. Kami melewati masa-masa senang dan sedih bersama dan dari pengalaman itu aku sadar bahwa temenku semuanya hebat-hebat. Mereka membantu kami dalam pemasangan dan pembuatan poster, memberi ide-ide, dan lainnya.</p>
            <p>Ketika masa kampanye datang, jujur aku deg-degan tapi semangatku lebih mendominasi. Sehingga pada akhirnya, dengan usaha dan kerja keras kami selama ini dapat membuahkan hasil yang sangat memuaskan dengan perolehan suara terbanyak dari Sedesian.# DMCAH24</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Ramaikan Sedes Cup 2024',
            'slug' => 'ramaikan-sedes-cup-2024',
            'excerpt' => 'Sedes Cup. Ya, itulah acara tahunan yang diselenggarakan oleh SMA Sedes Sapientiae Semarang untuk memberikan wadah bagi siswa-siswi sekolah menengah pertama yang ada di Semarang dan kota sekitarnya bertanding dalam berbagai perlombaan. Tahun ini digelar kembali untuk yang ke- 8 kalinya. Tahun ini Sedes Cup 2024 mengambil tema “Ad Victoriam Amare”.',
            'body' => '<p>Jenis perlombaan antara lain basket, futsal, modern dance, E-Sport, dan fashion design. Peserta sungguh antusias untuk mengikuti perlombaan ini, dengan bukti kuota peserta yang terpenuhi bahkan beberapa lomba melebihi ekspektasi dari panitia. </p>
            <p>Kegiatan ini berlangsung dari tanggal  9- 14 Januari 2024 berlokasi  SMA Sedes Sapientiae di Jalan MT Haryono 908 Semarang. Dimulai pukul 14.00- 19.00 WIB. Yuk, bagi yang ingin menonton bisa bergabung di lokasi perlombaan.</p>
            <p>Acara pembukaan telah terlaksana pada tanggal 9 Januari 2024 bertempat di lapangan basket, dan dibuka oleh Kepala Sekolah, beliau Bapak Drs. Andreas Jarot Suryo Legowo. Beliau mengapresiasi panitia yang siang malam menyiapkan acara ini dan tak lupa memberikan semangat kepada peserta lomba untuk bertanding dengan baik dan jadikan Sedes Cup ini ajang mencari sahabat dan menambah pengalaman jam terbang.</p>
            <p>Selamat bertanding untuk peserta dan raihlah apa yang kalian harapkan. Tentu dengan bermain secara sportif dan elegan. Salam Sedes Cup 2024. # Cah24</p>
            ',
            'category_id' => 1,
            'user_id' => 1
        ]);
    }
}
