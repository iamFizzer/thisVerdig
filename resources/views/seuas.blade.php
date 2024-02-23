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
<div class="col-md-5"></div>
<div class="col-md-15">
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
                        <center><font size="5"><b>SURAT EDARAN</font><BR> &nbsp  &nbsp &nbsp</b>
                        <font size="3"><i></i>Nomor: {{ $verifikasi->no_surat }} </i> &nbsp  &nbsp &nbsp</font></center>
                        <BR>
                         <p class="text-justify"> Dalam rangka pelaksanaan <b>Ujian Akhir Semester (UAS)</b> Ganjil TA. 2021/2022 dengan menggunakan <b>Learning Management System (LMS)</b>, 
                                                  maka dengan ini kami sampaikan informasi teknis terkait hal tersebut di atas:
                         </p>
                               
                                
                            
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10" valign="justify">
                        <ol class=”angka”>
                        <li class="text-justify"> Dosen pengampu Mata Kuliah melakukan upload soal ujian (Essay/Pilihan Ganda) di LMS. </li>
                            <li class="text-justify"> Jika soal berupa Pilihan Ganda, maka nilal hasil ujian akan langsung dikeluarkan oleh LMS. Jika soal berupa Essay, maka Dosen harus memeriksa jawaban ujian dan melakukan input nilai ke LMS.</li>
                            <li class="text-justify"> Format penilaian berupa file MS. Excel akan dikirimkan kepada masing-masing Dosen pengampu mata kuliah dari Operator Pelayanan Akademik (Pak Mujiwanto) melalui email.</li>
                            <li class="text-justify"> Pada input Passing Grade diisi nilai 60 (enam puluh) oleh Dosen.</li>
                            <li class="text-justify"> Pada input Kesempatan untuk mengikuti ujian diberikan sebanyak 2 (dua) kali oleh Dosen pada pengaturan exam.</li>
                            <li class="text-justify"> Untuk tipe soal Pilihan Ganda jika waktu ujian sudah habis, maka otomatis a tis akan Auto Submit.</li>
                            <li class="text-justify"> Dosen wajib mengundang seluruh mahasiswa peserta ujian pada zoom meeting untuk membacakan Tata Tertib dan penjelasan lainnya serta mendokumentasikan peserta ujian (screenshot) </li>
                            <li class="text-justify"> Jika terdapat Mata Kuliah lebih dari 1 (satu) kelas, maka waktu Expired ujian ditetapkan pada Jadwal terakhir mata kuliah tersebut.</li>
                            <li class="text-justify"> Jadwal ujian sesuai dengan jadwal kullah dan dihitung 1 (satu) kali pertemuan. </li>
                            <li class="text-justify"> Pada setiap jadwal ujian, 10 (sepuluh) menit pertama diberikan untuk melakukan presensi menggunakan Apk Mobile System. </li>
                            <li class="text-justify"> Ujian akan dibuka setelah 10 (sepuluh) menit melakukan presensi dan diawasi oleh Dosen selama ujian berlangsung. Kemudian ujian akan ditutup setelah waktu berakhir  </li>
                            <li class="text-justify"> Soal ujian tipe Essay dapat dibedakan setiap kelasnya dengan mengupdate tipe soal tersebut setiap pada jadwalnya.  </li>
                            <li class="text-justify"> Jika terjadi in/out diakibakan oleh kelalaian atau kesalahan, maka diberikan toleransi 
                                                      maksimal 2 (dua) kali untuk dapat melanjutkan ujian (direset) oleh Dosen yang bersangkutan. </li>
                         </ol>
                        </div>


                        </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                                <p class="text-justify"> Demikian surat edaran ini dibuat, untuk diperhatikan dan dilaksanakan. Atas perhatian dan kerja
                                sama para Dosen, kami ucapkan terima kasih.</p>
                               
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