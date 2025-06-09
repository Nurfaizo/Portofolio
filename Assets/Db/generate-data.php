<?php
// --- INI ADALAH PUSAT DATA ANDA ---
// Edit, tambah, atau hapus proyek di dalam array ini.
$projects = [
    1 => [
        'id' => 1, // 'id' wajib ada dan harus unik
        'title' => 'Tokoh Perintis Grafika Komputer',
        'category' => 'Grafika Komputer',
        'client' => 'Tugas Kuliah', // Anda bisa menambahkan 'client'
        'project_date' => '27 February 2025',
        'project_url' => 'https://drive.google.com/drive/folders/1m6qgA7GiqDy1BpIbHWa80pE47v2PUIRy',
        'image' => 'Assets/img/tug1.png', // Gunakan forward slash '/'
        'description' => 'Pada tugas pertama mata kuliah Grafika Komputer ini, saya diminta untuk mempelajari dan membahas salah satu tokoh berpengaruh dalam dunia grafika komputer. Saya memilih John Warnock, salah satu pendiri Adobe Systems dan pencipta bahasa PostScript yang merevolusi dunia percetakan digital. Dalam tugas ini, saya menggali kontribusi Warnock terhadap perkembangan teknologi grafis serta dampaknya terhadap industri desain dan publishing modern.'
    ],
    2 => [
        'id' => 2,
        'title' => 'Pembentukan Garis',
        'category' => 'Grafika Komputer',
        'client' => 'Tugas Kuliah',
        'project_date' => '9 Maret 2025',
        'project_url' => 'https://drive.google.com/file/d/14ZdGzkTdSkQtGv_V9i3dbQHMF6TdqFh9/view?usp=drive_link',
        'image' => 'Assets/img/tug2.png',
        'description' => 'Pada tugas ini, saya mencoba mengimplementasikan algoritma pembentukan garis menggunakan JavaScript dan menampilkannya pada elemen canvas di halaman web. Tujuannya adalah memahami bagaimana sebuah garis dapat dirender secara tepat di layar komputer berdasarkan perhitungan koordinat piksel.'
    ],
    3 => [
        'id' => 3,
        'title' => 'Algoritma Lingkaran Bresenham',
        'category' => 'Grafika Komputer',
        'client' => 'Tugas Kuliah',
        'project_date' => '16 Maret 2025',
        'project_url' => 'https://drive.google.com/file/d/15DruWWuauosgwsuEo05k0aMudKBmyZfT/view?usp=drive_link',
        'image' => 'Assets/img/tug3.png',
        'description' => 'Tugas ini berfokus pada implementasi algoritma Bresenhams Circle menggunakan JavaScript. Dengan menampilkannya di canvas web, saya dapat memahami cara kerja algoritma ini dalam membentuk lingkaran secara efisien pada tampilan raster.'
    ],
    4 => [
        'id' => 4,
        'title' => 'Algoritma Pembentukan Kurva',
        'category' => 'Grafika Komputer',
        'client' => 'Tugas Kuliah',
        'project_date' => '22 Maret 2025',
        'project_url' => 'https://drive.google.com/file/d/1ejB_NpWMOfvT_dG9UmwKZJY23kuWAO5K/view?usp=drive_link',
        'image' => 'Assets/img/tug4.png',
        'description' => 'Di tugas ini, saya mengeksplorasi algoritma pembentukan kurva Bezier menggunakan JavaScript. Proyek ini ditampilkan pada canvas web, yang membantu saya memvisualisasikan cara kurva dibentuk melalui titik-titik kontrol.'
    ],
    5 => [
        'id' => 5,
        'title' => 'Kuis 1 Persamaan Misteri',
        'category' => 'Grafika Komputer',
        'client' => 'Kuis Kuliah',
        'project_date' => '10 April 2025',
        'project_url' => 'https://www.youtube.com/watch?v=UeAe8DOMzs0',
        'image' => 'Assets/img/qi1.png',
        'description' => 'Quiz 1 – Visualisasi Persamaan Non-Linear: Pada kuis ini, saya memetakan persamaan non-linear (x² + y² – 1)³ = x²y³ ke dalam bidang koordinat layar komputer dan menjelaskan hasil visualisasi tersebut dalam bentuk video. Persamaan ini membentuk pola menyerupai hati (heart shape) dan menjadi contoh menarik dari hubungan antara matematika dan grafika komputer.'
    ],
    6 => [
        'id' => 6,
        'title' => 'Kuis 3 Line Clipping',
        'category' => 'Grafika Komputer',
        'client' => 'Kuis Kuliah',
        'project_date' => '05 April, 2024',
        'project_url' => 'https://drive.google.com/file/d/1IP_6uwmxUAD88d0ERrbmEzDevoUWiqag/view?usp=drive_link',
        'image' => 'Assets/img/qiz3.png',
        'description' => 'Dalam kuis ini, saya menjelaskan konsep line clipping, yaitu proses memotong garis agar hanya bagian yang terlihat dalam jendela tampilan (viewport) yang ditampilkan. Penjelasan saya disajikan dalam format video untuk memberikan pemahaman visual yang lebih baik.'
    ],
    7 => [
        'id' => 7,
        'title' => 'Kuis 4 Polygon Clipping',
        'category' => 'Grafika Komputer',
        'client' => 'Kuis Kuliah',
        'project_date' => '05 April, 2024',
        'project_url' => 'https://drive.google.com/file/d/1gCZg1L-H-fG6uJHwYOD76_wFJG2etzuV/view?usp=drive_link',
        'image' => 'Assets/img/qiz4.png',
        'description' => 'Pada kuis ini, saya membahas tentang polygon clipping, yaitu proses memotong poligon agar sesuai dengan area tampilan. Materi ini saya sajikan dalam bentuk video penjelasan yang mencakup ilustrasi, contoh kasus, dan algoritma dasar yang digunakan.'
    ]
    // Tambahkan proyek baru di sini
];

// Mengubah array PHP menjadi format JSON yang benar
header('Content-Type: application/json');
echo json_encode(array_values($projects), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);