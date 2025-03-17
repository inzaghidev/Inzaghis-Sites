<?php
// Memanggil file konfigurasi untuk koneksi database
require('config.php');

// Mengecek apakah form di-submit dan semua variabel POST tersedia
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    // Membersihkan input dan menghindari masalah XSS
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validasi input sederhana
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Menggunakan prepared statement untuk menghindari SQL Injection
        $stmt = $conn->prepare("INSERT INTO contactus (name, email, message, created_date) VALUES('" . $name . "','" . $email . "','" . $message . "','" . date('Y-m-d') . "')");

        if ($stmt) {
            $currentDate = date('Y-m-d'); // Mendapatkan tanggal saat ini

            // Bind parameter (s = string, format sesuai dengan tipe data)
            $stmt->bind_param('ssss', $name, $email, $message, $currentDate);

            // Menjalankan query
            if ($stmt->execute()) {
                echo "Thank You For Contacting Us!";
            } else {
                // Pesan error jika query gagal
                echo "Error: " . $stmt->error;
            }

            // Menutup statement
            $stmt->close();
        } else {
            // Pesan error jika prepare statement gagal
            echo "Error in preparing SQL: " . $conn->error;
        }
    } else {
        // Pesan jika ada input kosong
        echo "All fields are required!";
    }
} else {
    // Pesan jika form belum di-submit
    echo "Please submit the form properly!";
}

// Menutup koneksi
$conn->close();
?>

<!--
MySQL Query :
CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

Source :
https://www.itsolutionstuff.com/post/php-mysql-contact-us-form-with-validation-using-bootstrapexample.html
-->