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
                    <font size="7"><b>STMIK BANDUNG</font><BR> &nbsp  &nbsp &nbsp</b>
                    <font size="4">SEKOLAH TINGGI MANAJEMAN INFORMATIKA DAN KOMPUTER BANDUNG</font> &nbsp  &nbsp &nbsp <BR>
                    <font size="2"><i></i>Jl. Cikutra No.113, Kota Bandung, Jawa Barat 40124</i> &nbsp  &nbsp &nbsp</font><br>
                    <font size="2"><i></i>Nomor: {{ $verifikasi->no_surat }} </i> &nbsp  &nbsp &nbsp</center>
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
                        <center><font size="4"><b>SURAT KETERANGAN KEWAJIBAN AKADEMIK</font><BR> &nbsp  &nbsp &nbsp</b>
                        <p class="text-justify">Menerangkan Bahwa:</p>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10" valign="justify">
                        <ol class=”angka”>
                            <li class="text-justify"> Nama lengkap  &nbsp &nbsp &nbsp: {{ $verifikasi->nama }}</li>
                            <li class="text-justify"> NIM  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: {{ $verifikasi->nim }} </li>
                            <li class="text-justify"> Angkatan  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: {{ $verifikasi->angkatan }}</li>
                            <li class="text-justify"> Program Studi  &nbsp &nbsp &nbsp: {{ $verifikasi->program_studi }}</li>
                            <li class="text-justify"> Email  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp: {{ $verifikasi->email}}</li>
                           
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                                <p class="text-justify"> Berdasarkan dokumen transkrip nilai sementara terakhir dinyatakan bahwa yang bersangkutan 
                                                         Telah Mencapai Jumlah sks yang ditentukan untuk mencukupi  syarat mengikuti matakuliah <b>Kerja Praktek.</b></p>
                                <p class="text-justify"> Dengan demikian dinyatakan bahwa yang bersangkutan dapat mengikuti proses sidang Kerja Praktek</p>
                                <p class="text-justify"> Nb :<b>Harap melampirkan transkip nilai sementara terakhir (hardcopy/softcopy) ketika mengajukan SKKA.</b></p>
                                <p class="text-justify"> Demikian surat keterangan ini dikeluarkan untuk digunakan sebagaimana baiknya.</p>
                                
                        </div>
                        
                    </div>
                    <div class="row">
                    <div class="col-md-1">
                    </div>
                        <div class="col-md-6">
                            <br>
                            <br>
                            <p> Mahasiswa </p>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            
                            <p> {{ $verifikasi->nama }}</p>

                        </div>
                        <div class="col-md-5">
                            <p> Bandung, {{ $verifikasi->tanggal}}</p>
                            <p> Ka. Puslahta </p>
                            <p> <img src="{{ $verifikasi->barcode}}" alt=""> </p>
                            <p>  Indra Maulana Yusup Kusumah, M.Kom </p>
                        </div>
                    </div>
                            
                </div>
            </div>
          
</div>









<div class="panel-body">
    <!-- <div class="card bg-light" style="width: 65rem;"> -->
    <section class="content">
<div class="container-fluid">

<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-secondary">
<div class="inner">
<h3>{{$user}}</h3>
<p>User</p>
</div>
<div class="icon">
<i class="ion ion-person-add"></i>
</div>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3>{{$verifikasi}}<sup style="font-size: 20px"></sup></h3>
<p>Pengajuan</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>{{$diterima}}</h3>
<p>Diterima</p>
</div>
<div class="icon">
<i class="ion ion-checkmark-circled"></i>
</div>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h3>{{$ditolak}}</h3>
<p>Ditolak</p>
</div>
<div class="icon">
<i class="ion ion-close-circled"></i>
</div>
</div>
</div>

</div>


</div>
</div>
<h3 class="font-weight-bold">Selamat Datang <span>{{auth()->user()->username}}</span></h3>
</div>



<!-- Form 2 kolom kanan kiri -->
<div class ="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input name="tanggal" class="form-control" type="date">
                    <div class="text-danger">
                        @error('tanggal')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
</div>
</div>
<div class="form-row">
		<div class="form-group col-md-6">
			<label for="nim">Nim</label>
			<input name="nim" class="form-control" id="nim" placeholder="Nim">
            <div class="text-danger">
                @error('nim')
                    {{ $message }}
                @enderror
                    </div>
		</div>
        <div class="form-group col-md-6">
			<label for="nama">Nama</label>
			<input name="nama" class="form-control" id="nama" placeholder="nama">
            <div class="text-danger">
                @error('nama')
                    {{ $message }}
                @enderror
                    </div>
		</div>
        <div class="form-group col-md-6">
			<label for="angkatan">angkatan</label>
			<input name="angkatan" class="form-control" id="angkatan" placeholder="angkatan">
            <div class="text-danger">
                @error('angkatan')
                    {{ $message }}
                @enderror
                    </div>
		</div>
        <div class="form-group col-md-6">
            <label>Program Studi</label>
                    <select name="program_studi" class="form-control"> 
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                    </select>
                    <div class="text-danger">
                        @error('program_studi')
                            {{ $message }}
                        @enderror
                    </div>   
		</div>
        <div class="form-group col-md-6">
			<label for="email">email</label>
			<input name="email" class="form-control" id="email" placeholder="email">
            <div class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
                    </div>
		</div>
        <div class="form-group col-md-6">
                <label>Jenis Surat </label>
                    <select name="jenis_surat" class="form-control"> 
                    @foreach ($surat as $kd)
                        <option value="{{$kd->kode_surat}}">{{$kd->jenis_surat}}</option>
                    @endforeach
                    </select>      
		</div>
        <div class="form-group col-md-6">
			<label for="no_surat">No Surat</label>
			<input name="no_surat" class="form-control" id="no_surat" placeholder="no_surat">
            <div class="text-danger">
                @error('no_surat')
                    {{ $message }}
                @enderror
                    </div>
		</div>
        <div class="form-group col-md-6">
			<label for="keperluan">keperluan</label>
			<input name="keperluan" class="form-control" id="keperluan" placeholder="keperluan">
            <div class="text-danger">
                @error('keperluan')
                    {{ $message }}
                @enderror
                    </div>
		</div>
        <div class="form-group col-md-6">
             <label>Yang Menandatangani</label>
                    <input name="penandatangan" class="form-control"  placeholder="penandatangan">
                    <div class="text-danger">
                        @error('tujuan')
                            {{ $message }}
                        @enderror
                    </div>
                </div>  
        <div class="form-group col-md-6">  
             <label>Jabatan </label>
                    <select name="jabatan" class="form-control"> 
                    @foreach ($jabatan as $kb)
                        <option value="{{$kb->jabatan}}">{{$kb->jabatan}}</option>
                    @endforeach
                    </select>
                </div>
                
        <div class="form-group col-md-6">  
                    <label for="dokumen">Dokumen*</label>
                        <div class="text-danger">
                            <input type="file" class="form-control" name="dokumen" value="{{ old('dokumen') }}">
                                @error('dokumen')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                        </div>

        <div class="form-group col-md-6">  
                    <label for="transkip">Transkip*</label>
                        <div class="text-danger">
                            <input type="file" class="form-control" name="transkip" value="{{ old('transkip') }}">
                                @error('transkip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                        </div>  
        
      
</div>