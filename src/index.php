<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./output.css" rel="stylesheet" />
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <!-- Favicon -->
    <link rel="apple-touch-icon" href="../src/favicon/logo-qodr.png" />
    <link rel="icon" type="image/png" href="../src/favicon/logo-qodr.png" />
    <link
      rel="icon"
      type="image/png"
      sizes="href"
      ="../src/favicon/logo-qodr.png"
    />
    <title>Form Izin Santri</title>
  </head>
  <body class="bg-[#0C7B93]">
    <div class="flex justify-center items-center h-screen">
      <div>
        <!-- logo -->
        <div class="flex justify-center items-center">
          <img src="assets/png/logo-qodr.png" alt="" class="w-[180px] h-[26px]">
        </div>
        
        <div class="px-[25px]">
          <div class="bg-[#C9D2EF] h-[800] w-[360] mt-8 max-w-[500px] rounded-[20px]">
            <div class="flex justify-center items-center  p-[20px]">
              <h1 class="font-outfit text-[24px] font-bold capitalize text-[#142850] text-center">form perizinan</h1>
            </div>
  
            <form id="formPerizinan" action="submit_perizinan.php" method="POST" class="px-[15px] flex flex-col gap-[5px]">
              <!-- nama santri -->
              <div class="bg-[#00A8CC] rounded-[10px] px-[15px] py-[10px] flex gap-[10px] items-center">
                <img src="./assets/svg/icon-person.svg" alt="" class="w-[20px] h-[20px] cursor-pointer" onclick="focusInput()">
                <input type="text" name="nama" placeholder="Nama Santri" id="myInput" class="bg-transparent font-outfit text-[12px] outline-none placeholder-[#142850]" required>
              </div>
  
              <!-- keperluan -->
              <div class="bg-[#00A8CC] rounded-[10px] px-[15px] py-[10px] flex gap-[10px] items-center">
                <img src="./assets/svg/icon-two-person.svg" alt="" class="w-[20px] h-[20px] cursor-pointer" onclick="focusInput2()">
                <input type="text" name="pergi_dengan" placeholder="Pergi Dengan Siapa" id="myInput2" class="bg-transparent font-outfit text-[12px] outline-none placeholder-[#142850]" required>
              </div>
  
              <!-- tujuan pergi -->
              <div class="bg-[#00A8CC] rounded-[10px] px-[15px] py-[10px] flex gap-[10px] items-center">
                <img src="./assets/svg/icon-pin-maps.svg" alt="" class="w-[20px] h-[20px] cursor-pointer" onclick="focusInput3()">
                <input type="text" name="tujuan" placeholder="Tujuan Pergi" id="myInput3" class="bg-transparent  font-outfit text-[12px] outline-none placeholder-[#142850]" required>
              </div>
  
              <!-- keperluan pergi -->
              <div class="bg-[#00A8CC] rounded-[10px] px-[15px] py-[10px] flex gap-[10px] items-center">
                <img src="./assets/svg/icon-note.svg" alt="" class="w-[20px] h-[20px] cursor-pointer" onclick="focusInput4()">
                <input type="text" name="keperluan" placeholder="Keperluan Pergi" id="myInput4" class="bg-transparent font-outfit text-[12px] outline-none placeholder-[#142850]" required>
              </div>
  
              <div class="grid grid-cols-2 gap-[5px]">
                <!-- tanggal pergi -->
                <div class="bg-[#00A8CC] rounded-[10px] px-[15px] py-[10px] flex gap-[10px] items-center">
                  <img src="./assets/svg/icon-date.svg" alt="" class="w-[20px] h-[20px] cursor-pointer" onclick="focusInput5()">
                  <input type="date" name="tanggal_pergi" placeholder="Tanggal Pergi" id="myInput5" class="bg-transparent font-outfit text-[12px] w-full outline-none placeholder-[#142850]" required>
                </div>
                <!-- tanggal kembali -->
                <div class="bg-[#00A8CC] rounded-[10px] px-[15px] py-[10px] flex gap-[10px] items-center">
                  <img src="./assets/svg/icon-date.svg" alt="" class="w-[20px] h-[20px] cursor-pointer" onclick="focusInput6()">
                  <input type="date" name="tanggal_kembali" placeholder="Tanggal Kembali" id="myInput6" class="bg-transparent font-outfit text-[12px] w-full outline-none placeholder-[#142850]" required>
                </div>
                <!-- waktu pergi -->
                <div class="bg-[#00A8CC] rounded-[10px] px-[15px] py-[10px] flex gap-[10px] items-center">
                  <img src="./assets/svg/icon-clock-seven.svg" alt="" class="w-[20px] h-[20px] cursor-pointer" onclick="focusInput7()">
                  <input type="time" name="waktu_pergi" placeholder="Waktu Pergi" id="myInput7" class="bg-transparent font-outfit text-[12px] w-full outline-none placeholder-[#142850]" required>
                </div>
                <!-- waktu kembali -->
                <div class="bg-[#00A8CC] rounded-[10px] px-[15px] py-[10px] flex gap-[10px] items-center">
                <img src="./assets/svg/icon-clock-five.svg" alt="" class="w-[20px] h-[20px] cursor-pointer" onclick="focusInput8()">
                <input type="time" name="waktu_kembali" placeholder="Waktu Kembali" id="myInput8" class="bg-transparent font-outfit text-[12px] w-full outline-none placeholder-[#142850]" required>
                </div>
              </div>

              <div class="flex flex-col gap-[25px] mb-[20px]">
                <div class="text-[400px]">
                  <p class="text-[12px] md:text-[14px] lg:text-[16px] text-center mt-[7px] font-outfit text-[#142850]">*Santri harus menjaga adab selama berada di luar pondok</p>
                </div>
  
                <div class="">
                  <button type="submit" class="bg-[#142850] hover:bg-[#C9D2EF] transition-all duration-150 rounded-[20px] w-full  py-[10px] text-white hover:text-[#142850] font-outfit cursor-pointer">Kirim</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="js/logoinput.js"></script>
</html>