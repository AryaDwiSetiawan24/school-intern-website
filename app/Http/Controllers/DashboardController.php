<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;
use App\Models\berita;
use Illuminate\Support\Str;


class DashboardController extends Controller
{
    public function index()
    {
        $sambutan = "Asalamualaikum warohmatullahi wabarokatuh.

Puji syukur kepada Alloh SWT, Tuhan Yang Maha Esa yang telah melimpahkan rahmat dan hidayahNya sehingga website SD Negeri Gajahmungkur 01 Semarang  ini dapat terbit. Salah satu tujuan dari website ini adalah untuk menjawab akan setiap kebutuhan informasi dengan memanfaatkan sarana teknologi informasi yang ada. Kami sadar sepenuhnya dalam rangka memajukan pendidikan di era berkembangnya Teknologi Informasi yang begitu pesat, sangat diperlukan berbagai sarana prasarana yang kondusif, kebutuhan berbagai informasi siswa, guru, orangtua maupun masyarakat, sehingga kami berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya website ini dapat membantu dan bermanfaat, terutama informasi yang berhubungan dengan pendidikan, ilmu pengetahuan dan informasi seputar SD Negeri Gajahmungkur 01 Semarang.Besar harapan kami, sarana ini dapat memberi manfaat bagi semua pihak yang ada dilingkup pendidikan dan pemerhati pendidikan secara khusus bagi SD Negeri Gajahmungkur 01. Dengan demikian kami mengharapkan masukan dari berbagai pihak untuk website ini agar kami terus belajar dan meng-update diri, sehingga tampilan, isi dan mutu website akan terus berkembang dan lebih baik nantinya. Terima kasih atas kerjasamanya, semangatm untuk maju terus mencapai SD Negeri Gajahmungkur 01 Semarang yang lebih baik lagi.

Wassalmualaikum warohmatullahi wabarokatuh.";
        $sejarah = "Secara administrasi Sekolah Dasar (SD) Negeri Gajahmungkur 01 beralamat di Jalan Cikurai Raya RT 04/RW 03, Kecamatan Gajahmungkur, Kota Semarang, Provinsi Jawa Tengah. Dengan posisi geografis Lintang : -7.0117, Bujur: 110.4097.

SD Negeri Gajahmungkur 01 memiliki luas lahan 2.850 M², Dengan batas-batas :

Utara : Pemukiman;
Timur : Pemukiman;
Selatan : Pemukiman;
Barat : Pemukiman;
Jarak tempuh ± 15 menit dari kota Propinsi, SD Negeri Gajahmungkur 01 terdiri dari 5 (Lima) Bangunan utama,  dgn rincian 6 (enam) ruangan kelas, 1 (satu) ruangan guru, 1 (satu) ruang kepala aekolah, 1 (satu) ruang perpustakaan, 1 (satu) ruang agama,1 (satu) ruang komputer, 1 (satu) ruang PKBM, ruang UKS, kantin, 1 (satu) ruang penjaga, dan 1 (satu) rumah penjaga . 

SDN Gajahmungkur 01 berdiri pada tahun 1967 yang berada di sekitar pemukiman warga Kalilangse. Area bangunan SDN Gajahmungkur 01 satu kompleks dengan SDN Gajahmungkur 02 pada saat itu. Tahun 2002 bagungan kompleks dilebur (dimarger) oleh Pemerintah Kota Semarang menjadi 1 (Satu ) SD. Dengan Nama SD Negeri Gajahmungkur 01. Dasar perubahan nama SD, SK Walikota No. 421.2/205 tanggal 22 Juli 2002.";
        $pegawai = Pegawai::all();
        $beritas = Berita::latest()->paginate(3);
        return view('pages/user/dashboard', compact('pegawai', 'beritas', 'sejarah', 'sambutan'));
    }

    public function profilsekolah()
    {
        return view('pages/user/profilsekolah');
    }

    public function sejarah()
    {
        return view('pages/user/sejarah');
    }

    public function pegawai()
    {
        $pegawai = Pegawai::all();
        return view('pages/user/pegawai', compact('pegawai'));
    }

    public function foto()
    {
        return view('pages/user/galeri-foto');
    }


    public function kontak()
    {
        return view('pages/user/kontak');
    }

    public function aduan()
    {
        return view('pages/user/pengaduan');
    }
}
