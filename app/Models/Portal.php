<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Portal
{
    public string $name;
    public string $imgSrc;
    public string $description;
    public string $link;

    public function __construct(string $name, string $imgSrc, string $description, string $link)
    {
        $this->name = $name;
        $this->imgSrc = $imgSrc;
        $this->description = $description;
        $this->link = $link;
    }

    public static function all(): array
    {
        return [
            new self(
                "Widgets",
                "../assets/images/widgets-by-portals.png",
                "Merupakan kumpulan Widget Serbaguna untuk Anda yang membutuhkan Informasi seakurat mungkin. Widget di sini juga termasuk yang sedang heboh saat ini.",
                "../portals/widgets.php"
            ),
            new self(
                "Technology Tutorials",
                "../assets/images/tech-tutorials-by-portals.png",
                "Merupakan kumpulan dari berbagai macam Teknologi apapun dalam bidang IT, dan sebagai Pembelajaran untuk berbagai macam Teknologi IT apapun seperti Pemrograman, Aplikasi, Ilmu Komputer, Analisis Data, dan lainnya.",
                "../portals/tech-tutorials.php"
            ),
            new self(
                "IT Project Lists",
                "../assets/images/it-project-lists-by-portals.png",
                "Merupakan kumpulan dari berbagai macam Proyek apapun dalam bidang IT seperti Pemrograman, Aplikasi, UI/UX, Analisis Data, AI/ML, IoT, dan lainnya.",
                "../portals/it-project-lists.php"
            ),
            new self(
                "Career Portal",
                "../assets/images/career-portal-by-portals.png",
                "Merupakan kumpulan dari pertanyaan-pertanyaan Wawancara seperti Wawancara Kerja, Magang, User Interview, Wawancara Teknis (Technical Interview), dan lain-lain.",
                "../portals/career-portal.php"
            ),
            new self(
                "Learning Materials",
                "../assets/images/learning-materials-by-portals.png",
                "Merupakan bagian untuk kumpulan Materi Pembelajaran, khususnya untuk Materi Pelajaran Sekolah (Untuk SMA) dan Materi Perkuliahan (Teknik InformatiKa dan Umum/MKDU). Pada Portal ini juga menyediakan berbagai macam Kumpulan Materi dan Pertanyaan untuk persiapan Tugas Akhir seperti Skripsi, Tesis, dan Disertasi.",
                "../portals/learning-materials.php"
            ),
            new self(
                "Entertainment Portal",
                "../assets/images/entertainment-portal-by-portals.png",
                "Merupakan Portal untuk Pusat Hiburan seperti Kumpulan Video dan Live Streaming di YouTube, Kumpulan Akun-akun Media Sosial, hingga Kumpulan Playlist Lagu seperti Spotify.",
                "../portals/entertainment-portal.php"
            ),
            new self(
                "Link Pages",
                "../assets/images/link-pages-by-portals.png",
                "Merupakan kumpulan dari Tautan/Link yang berasal dari Situs Berita, Link Google, YouTube, GitHub, dan lainnya.",
                "../portals/link-pages.php"
            ),
            new self(
                "Muslims Portal",
                "../assets/images/muslim-portal-by-portals.png",
                "Merupakan Portal untuk Kumpulan Pusat Keagamaan dan Peribadatan Islam, seperti Jadwal Shalat & Puasa, Kalender Hijriah, Kompas Arah Kiblat, hingga Al-Qur'an Digital.",
                "../portals/muslim-portal.php"
            ),
            new self(
                "Miscellaneous",
                "../assets/images/miscellaneous-by-portals.png",
                "Merupakan Halaman lainnya yang tidak termasuk dari Kategori di Portal ini, dan juga tersedia untuk Halaman apa saja.",
                "../portals/miscellaneous.php"
            ),
            new self(
                "Lorem Ipsum",
                "https://via.placeholder.com/700x400",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci dicta dignissimos neque animi ea, veritatis, provident hic consequatur ut esse! Commodi ea consequatur accusantium, beatae qui deserunt tenetur ipsa.",
                "#"
            ),
        ];
    }
}
