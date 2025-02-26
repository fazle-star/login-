<?php
// Bagian PHP untuk pemrosesan form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'koneksi.php';

    // Ambil data dari form
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $pergi_dengan = mysqli_real_escape_string($koneksi, $_POST['pergi_dengan']);
    $tujuan = mysqli_real_escape_string($koneksi, $_POST['tujuan']);
    $keperluan = mysqli_real_escape_string($koneksi, $_POST['keperluan']);
    $tanggal_pergi = mysqli_real_escape_string($koneksi, $_POST['tanggal_pergi']);
    $tanggal_kembali = mysqli_real_escape_string($koneksi, $_POST['tanggal_kembali']);
    $waktu_pergi = mysqli_real_escape_string($koneksi, $_POST['waktu_pergi']);
    $waktu_kembali = mysqli_real_escape_string($koneksi, $_POST['waktu_kembali']);

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO perizinan (nama, dengan_siapa, tujuan, keperluan, tgl_pergi, tgl_kembali, jam_pergi, jam_kembali)
            VALUES ('$nama', '$pergi_dengan', '$tujuan', '$keperluan', '$tanggal_pergi', '$tanggal_kembali', '$waktu_pergi', '$waktu_kembali')";

    if (mysqli_query($koneksi, $query)) {
        // Jika data berhasil disimpan
        $status = "success";
        $message = "Data berhasil disimpan!";
    } else {
        // Jika gagal
        $status = "error";
        $message = "Terjadi kesalahan: " . mysqli_error($koneksi);
    }

    // Tutup koneksi
    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Form Perizinan</title>
</head>
<body class="bg-[#0C7B93] flex justify-center items-center min-h-screen p-4">
    <!-- logo -->
    <div class="flex justify-center items-center mb-6">
        <img src="assets/png/logo-qodr.png" alt="" class="w-[180px] h-[26px]">
    </div>
    <div class="bg-white rounded-lg shadow-md w-full max-w-2xl p-6">
        <h2 class="text-2xl font-bold text-center mb-6">Form Perizinan</h2>
        
        <?php if (isset($status)): ?>
            <div class="mb-4 p-4 rounded <?php echo $status == 'success' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'; ?>">
                <?php echo $message; ?>
            </div>
            
            <?php if ($status == 'success'): ?>
                <div class="mb-6 p-4 rounded bg-[#C9D2EF] border">
                    <h3 class="font-bold text-lg mb-2">Data Tersimpan:</h3>
                    <table class="w-full">
                        <tr><td class="font-medium py-1">Nama:</td><td><?php echo $nama; ?></td></tr>
                        <tr><td class="font-medium py-1">Dengan Siapa:</td><td><?php echo $pergi_dengan; ?></td></tr>
                        <tr><td class="font-medium py-1">Tujuan:</td><td><?php echo $tujuan; ?></td></tr>
                        <tr><td class="font-medium py-1">Keperluan:</td><td><?php echo $keperluan; ?></td></tr>
                        <tr><td class="font-medium py-1">Tanggal Pergi:</td><td><?php echo $tanggal_pergi; ?></td></tr>
                        <tr><td class="font-medium py-1">Tanggal Kembali:</td><td><?php echo $tanggal_kembali; ?></td></tr>
                        <tr><td class="font-medium py-1">Jam Pergi:</td><td><?php echo $waktu_pergi; ?></td></tr>
                        <tr><td class="font-medium py-1">Jam Kembali:</td><td><?php echo $waktu_kembali; ?></td></tr>
                    </table>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 float-right font-outfit" onclick="window.location.href='index.php'">Kembali</button>
    </div>
</body>
</html>