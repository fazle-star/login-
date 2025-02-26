<?php
// Sertakan file koneksi
include 'koneksi.php';

// Query untuk mengambil data dari tabel perizinan
$query = "SELECT * FROM perizinan";
$result = mysqli_query($koneksi, $query);

// Cek apakah query berhasil dijalankan
if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}

// Cek apakah ada data
if (mysqli_num_rows($result) > 0) {
    // Output data dari setiap baris
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>" . $row["nama"] . "</td>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>" . $row["dengan_siapa"] . "</td>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>" . $row["tujuan"] . "</td>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>" . $row["keperluan"] . "</td>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>" . $row["tgl_pergi"] . "</td>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>" . $row["tgl_kembali"] . "</td>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>" . $row["jam_pergi"] . "</td>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>" . $row["jam_kembali"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8' class='px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center'>Tidak ada data</td></tr>";
}

// Tutup koneksi
mysqli_close($koneksi);
?>