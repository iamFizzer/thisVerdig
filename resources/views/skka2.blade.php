<!DOCTYPE html>
<head>
    <title>Surat keterangan Kewajiban Akademik KP</title>
    <meta charset="utf-8">
    
    <style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @page {
            size : 8in 10in;
        }

        #judul{
            text-align:center;
        }

        #halaman{
            width: auto;
            height: auto;
            position: absolute;
            /* border: 0.5px solid; */
            padding-top: 20px;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 70px;
        }
        
        .left    { text-align: left;}
        .right   { text-align: right;}
        .center  { text-align: center;}
        .justify { text-align: justify;}

        .signature {
            width: 45%;
            height: 200px;
            margin: 10px;
            margin-top: 70px;
            padding-left: 1.5px;
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

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        
        table tr .text{
            text-align : center;
            font-size : 20px;
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
                <td colspan="7"><hr></td>
            </tr> -->

            <table width="512">
                <tr>
                    <td class="text"><b>SURAT KETERANGAN KEWAJIBAN AKADEMIK</b></td>
                </tr>
            </table><br>

            <table>
                <tr>
                    <td>Menerangkan Bahwa:</td>
                </tr>

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
                        <p> Berdasarkan dokumen transkrip nilai sementara terakhir dinyatakan bahwa yang bersangkutan Telah Mencapai Jumlah sks yang ditentukan 
                                            untuk mencukupi  syarat mengikuti matakuliah Kerja Praktek.</p>
                        <p> Dengan demikian dinyatakan bahwa yang bersangkutan dapat mengikuti proses sidang Kerja Praktek</p>
                        <p> Nb : <b>Harap melampirkan transkip nilai sementara terakhir (hardcopy/softcopy) ketika mengajukan SKKA. </b></p>
                        <p> Demikian surat keterangan ini dikeluarkan untuk digunakan sebagaimana baiknya.</p>
                    </div>        
                </table>
             
              
                <div class="container">
                    <div class="signature">
                    <br>
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
                    <p> {{$verifikasi->jabatan}} </p>
                    <p> <img src="{{ $verifikasi->barcode}}" alt=""> </p>
                    <p>  {{$verifikasi->penandatangan}} </p>
                </div>
            </div>
              
            </div>
            </table>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</body>
</html>