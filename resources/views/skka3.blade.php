<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat keterangan Kewajiban Akademik Prasidang</title>
    <style>
        /* table tr td {
            font-size:13px;
        } */

        table tr .text{
            text-align : center;
            font-size : 20px;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .signature {
            width: 45%;
            height: 200px;
            margin: 10px;
            margin-top: 70px;
            padding-left: 1.5 px;
            /* border: 1px solid #000; */
            display: inline-block;
            justify-content: right;
            align-items: right;
            /* font-size: 20px; */
         }

         body {
            margin: 0;
            padding: 0;
            /* font-family: Arial, sans-serif; */
         }

         #kop {
            border-bottom: 1px solid #000;
            /* padding: 20px; */
        }
    </style>
</head>
<body>
    <div id="kop">
    <center>
        <table>
            <tr>
                <td><img src="https://www.stmik-bandung.ac.id/core/public/assets/img/core-img/logo-big.png" width="90" height="70"></td>
                <td>
                    <center>
                        <font size="6"><b>STMIK BANDUNG</font></br>
                        <font size="3">SEKOLAH TINGGI MANAJEMAN INFORMATIKA DAN KOMPUTER BANDUNG</font> <BR>
                        <font size="3">Jl. Cikutra No.113, Kota Bandung, Jawa Barat 40124 </font><br>
                        <font size="3">Nomor: {{ $verifikasi->no_surat }} </font></center>
                    </center>
                    <br>
                </td>
            </tr>
    </div>
            <br>
            <!-- <tr>
                <td colspan="2"><hr></td>
            </tr> -->
        </table>
        <table width="512">
            <tr>
                <td class="text"><b>SURAT KETERANGAN KEWAJIBAN AKADEMIK</b></td>
            </tr>
        </table>
        <br>
        <table>
                <tr>
                    <td>Menerangkan Bahwa:</td>
                </tr>
            </table>    

                <table width="350">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>{{ $verifikasi->nama }}</td>
                    </tr>
                    <tr>
                        <td>Nim</td>
                        <td>:</td>
                        <td>{{ $verifikasi->nim }}</td>
                    </tr>
                    <tr>
                        <td>Angkatan</td>
                        <td>:</td>
                        <td>{{ $verifikasi->angkatan }}</td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>:</td>
                        <td>{{ $verifikasi->program_studi }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{ $verifikasi->email }}</td>
                    </tr>
                </table> 
                <table>
                    <div class="justify">
                    <p> Berdasarkan dokumen transkrip nilai sementara terakhir dinyatakan bahwa :</p>
                        <ol class=”angka”>
                            <li> Jumlah sks telah mencukupi untuk mengikuti matakuliah skripsi</li>
                            <li> Telah lulus matakuliah <b>Kerja Praktek.</b> </li>
                            <li> Tidak ada matakuliah yang memiliki nilai <b>D / E atau tidak LULUS.</b></li>
                        </ol>
                    <p> Dengan demikian dinyatakan bahwa yang bersangkutan dapat mengikuti proses <b>Prasidang</b> </p>
                    <p> Nb : <b>Harap melampirkan transkip nilai sementara terakhir (hardcopy/softcopy) ketika mengajukan SKKA. </b></p>
                    <p> Demikian surat keterangan ini dikeluarkan untuk digunakan sebagaimana baiknya.</p>
                    </div>
                
                </table>
                <div class="container">
                    <div class="signature">
                    <br>
                  
                    <p>Mahasiswa </p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>     
                    <p> {{ $verifikasi->nama }}</p>
                </div>
                <div class="signature"> Bandung, {{ $verifikasi->tanggal}}
                    <p>Ka. Puslahta </p>
                    <p> <img src="{{ $verifikasi->barcode}}" alt=""> </p>
                    <p>  {{ $verifikasi->penandatangan}} </p>
                </div>
            </div>
              
            </table>
        </table>

    </center>



</body>
</html>