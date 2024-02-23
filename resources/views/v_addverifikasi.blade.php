@extends('temp.v_temp') 
@section('breadcump','Pengajuan Tanda Tangan')
@section('isibreadcump','Pengajuan')
@section('isicontent')

<form action="{{route('verifikasi-tambah')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if (session('Pesan'))
    <div class ="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class ="icon fas fa-check"></i>Success!</h5>
        {{ (session('Pesan')) }}.
    </div>
    @elseif (session('error'))
    <div class ="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class ="icon fas fa-check"></i>!WARNING</h5>
        {{ (session('error')) }}.
    </div>
    @endif
    <div class="content">
        <div class="container-fluid">
             <div class="col-lg-12">
    <div class="row">
        <div class="col-lg-8">
            
            <div class="card">
               <div class="card-header">Form Pengajuan Verifikasi</div>
        <div class="card-body">
        <div class="content">        
        <div class ="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input name="tanggal" class="form-control" type="date" required>
                    <div class="text-danger">
                        @error('tanggal')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" id="nim" name="nim" value="{{auth()->user()->username}}"class="form-control" readonly >
                </div> 
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" id="nama" name="nama" value="{{auth()->user()->nama}}" class="form-control" readonly>
                </div> 
                <div class="form-group">
                    <label>Angkatan</label>
                    <input name="angkatan" class="form-control">
                    <div class="text-danger">
                        @error('angkatan')
                            {{ $message }}
                        @enderror
                    </div>
                    </input>    
                </div>  
                <div class="form-group">
                    <label>Program Studi</label>
                    <select name="program_studi" class="form-control"> 
                        <option value="">PILIH</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                    </select>
                    <div class="text-danger">
                        @error('program_studi')
                            {{ $message }}
                        @enderror
                    </div>   
                </div> 
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" class="form-control">
                    <div class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>   
                </div>   
                <div class="form-group">
                    <label>Jenis Surat </label>
                    <select id="surat" name="jenis_surat" class="form-control"> 
                        <option value="">PILIH</option>
                    @foreach ($surat as $kd)
                        <option data-ttd="{{$kd->penandatangan}}" data-jbt="{{$kd->jabatan}}" data-kep="{{$kd->keperluan}}" value="{{$kd->kode_surat}}">{{$kd->jenis_surat}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Keperluan</label>
                    <input type="text" id="kep" name="keperluan" class="form-control" Readonly >
                </div> 
                <div class="form-group">
                    <label>Yang Menandatangani</label>
                    <input type="text" id="ttd" name="penandatangan" class="form-control" Readonly >
                </div>       
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" id="jbt" name="jabatan" class="form-control" Readonly>
                </div>
                @if (auth()->user()->level == '1')
                <div class="form-group">
                    <label>No Surat</label>
                    <input name="no_surat" class="form-control"> 
                    <div class="text-danger">
                        @error('no_surat')
                            {{ $message }}
                        @enderror
                    </div>
                    </input>
                </div>
                <div class="form-group">
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
                @endif
                <div class="form-group">
                    <label for="transkip">Transkip Nilai*</label>
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
                </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>      Simpan </button>
                </div>
                
            </div>
            </form>
            <br>
        </div>
        <a href="{{route('verifikasi')}}" class="btn btn-secondary my-2">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
    </div>
   

    
@endsection
@section('skrip')
<script>
        $('#surat').on('change', function(){
        // ambil data dari elemen option yang dipilih
        const penandatangan = $('#surat option:selected').data('ttd');
        const jabatan = $('#surat option:selected').data('jbt');
        const keperluan = $('#surat option:selected').data('kep');
        // alert(penandatangan)
        // tampilkan data ke element
        $('#ttd').val(penandatangan);
        $('#jbt').val(jabatan);
        $('#kep').val(keperluan);
    
        });
      
    </script>

@endsection