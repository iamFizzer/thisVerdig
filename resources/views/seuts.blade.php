<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
 <!-- <section class="p-5">
     <center><div class="content">
         <div class="container-fluid mt-5 mx-5"> 
             <div class="row">
        <div class="col-lg-6"> -->
            <div class="card mt-8 ">
            <table align="center">
              <tr>
                    <td><img src="{{asset('template')}}/dist/img/Stm.png" width="90" height="60"
                        alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3"
                        style="opacity: .8"></td></div>
                                <div class="card-body p-0 ">

                <td><center>
                    <font size="8"><b>STMIK BANDUNG</font><BR> &nbsp  &nbsp &nbsp</b>
                    <font size="4">SEKOLAH TINGGI MANAJEMAN INFORMATIKA DAN KOMPUTER BANDUNG</font> &nbsp  &nbsp &nbsp <BR>
                    <font size="2"><i></i>Jl. Cikutra No.113, Kota Bandung, Jawa Barat 40124</i> &nbsp  &nbsp &nbsp</font><br>
                    <font size="2"><i></i>Nomor: {{ $verifikasi->no_surat }} </i> &nbsp  &nbsp &nbsp</font></center>
                </td>
                </tr>
                </tr>
                <tr>
                    <td colspan="2"><hr> </td>
                </tr>
            </table>
            <br>
            <div class="container">
                <div class="wrapper">
                    
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                           
                                <p class="text-justify"> Dalam rangka pelaksanaan Ujian Tengah Semester (UTS) Ganjil TA. 2022/2023 dengan Menggunakan Learning Management System (LMS), maka dengan ini kami sampaikan
                                Informasi terkait hal tersebut diatas :
                                </p>
                               
                                
                            
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10" valign="justify">
                        <ol class=”angka”>
                            <li class="text-justify"> Pada Input Passing Grade diisi nilai 60 (enam puluh) oleh Dosen. </></li>
                            <li class="text-justify"> Pada input Kesempatan untuk mengikuti ujian diberikan sebanyak 2 (dua) kali pada pengaturan Exom.</li>
                            <li class="text-justify"> Untuk tipe soal Pilihan Ganda jika waktu ujian sudah habis, maka otomatis akan Auto Submit.</li>
                            <li class="text-justify"> Mahasiswa wajib mengikuti zoom meeting dan menyalakan kamera sebelum ujian dimulai serta wajib menggunakan pakalan kemeja putih.</li>
                            <li class="text-justify"> Pada setiap jadwal ujian, 10 (sepuluh) menit pertama diberikan untuk melakukan presensi</li>
                            <li class="text-justify"> menggunakan APK Mobile STMIK Bandung. 6. Ujian akan dibuka setelah 10 (sepuluh) menit melakukan presensi dan diawasi oleh Dosen
                                                      selama ujian berlangsung. Kemudian ujian akan ditutup setelah waktu berakhir</li>
                            <li class="text-justify"> Mahasiswa yang dapat mengikuti ujian adalah yang sudah menyelesaikan administrasi</li>
                            <li class="text-justify"> Mahasiswa wajib menggunakan browser Google Chrome. keuangan (tidak ada tunggakan).</li>
                            <li class="text-justify"> Jika terjadi in/out diakibakan oleh kelalaian atau kesalahan, maka diberikan maksimal 2 (dua) kali untuk dapat melanjutkan ujian (direset) oleh Dosen yang tolerans!</li>
                        </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                           
                        
                                <p class="text-justify"> Dengan demikian surat edaran ini dibuat, untuk di perhatikan dan dilaksanakan. Atas Perhatian dan kerja sama para 
                                    <b>Mahasiswa</b> kami ucapkan terimakasih</p>
                               
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <p> Bandung, {{ $verifikasi->tanggal}}</p>
                            <p> {{ $verifikasi->jabatan }} </p>
                            <p> <img src="{{ $verifikasi->barcode}}" alt=""> </p>
                            <p> {{ $verifikasi->penandatangan }}</p>
                        </div>
                    </div>
                            
                </div>
            </div>
          
</div>