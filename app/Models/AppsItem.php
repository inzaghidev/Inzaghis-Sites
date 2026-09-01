<?php

namespace App\Models;

class AppsItem
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
                "Converters",
                "../assets/images/converters-by-pages-apps.png",
                "Merupakan portal untuk Aplikasi Konverter seperti Konversi Suhu, Massa (Berat), Panjang, Sistem Bilangan, dan lain-lain. Sebagian dari Aplikasi Konverter ini akan sedikit menggunakan API.",
                "../apps/converter"
            ),
            new self(
                "Calculators",
                "../assets/images/calculators-by-pages-apps.png",
                "Merupakan kumpulan dari beberapa jenis Kalkulator seperti Kalkulator Sederhana, Ilmiah, Matematika, Kesehatan, Keuangan, hingga Kalkulator untuk Keseharian.",
                "../apps/calculators"
            ),
            new self(
                "Generators",
                "../assets/images/generators-by-pages-apps.png",
                "Merupakan Aplikasi untuk membuat dan mengenerasi sesuatu seperti Text Generator hingga Image Generator, dan dapat dibuat secara acak.",
                "../apps/generators"
            ),
            new self(
                "Formatters",
                "../assets/images/formatters-by-pages-apps.png",
                "Merupakan Aplikasi untuk melakukan Formatting seperti XML, JSON, dll, hingga melakukan Pemformatan apapun.",
                "../apps/formatters"
            ),
            new self(
                "File Converter",
                "../assets/images/file-converters-by-pages-apps.png",
                "Merupakan portal untuk melakukan konversi format File apapun seperti JPG, PNG, DOCX, PDF, PPT, hingga TXT.",
                "../apps/file-converter"
            ),
            new self(
                "Utilities",
                "../assets/images/utilities-by-pages-apps.png",
                "Merupakan portal untuk berbagai kumpulan Aplikasi untuk Utilitas atau kebutuhan sehari-hari seperti Pencarian IP Address, SSL Checker, Website Status Checker, Find and Replace, dan lainnya.",
                "../apps/utilities"
            ),
            new self(
                "Tester Tools",
                "../assets/images/tester-tools-by-pages-apps.png",
                "Merupakan Aplikasi untuk Alat Uji Coba dan Simulator Online seperti Keyboard Tester, Mouse Tester, Sound Tester, dan lainnya.",
                "../apps/tester-tools"
            ),
            new self(
                "Coming Soon",
                "https://via.placeholder.com/700x400",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci dicta dignissimos neque animi ea, veritatis, provident hic consequatur ut esse! Commodi ea consequatur accusantium, beatae qui deserunt tenetur ipsa.",
                "#"
            ),
        ];
    }
}
