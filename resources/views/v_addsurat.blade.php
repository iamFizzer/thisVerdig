@extends('temp.v_temp') 
@section('breadcump','Tambah Jenis Surat')
@section('isibreadcump','Tambah')
@section('isicontent')

<form action="{{route('surat-tambah')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="container-fluid">
                <!-- <p>Melihat data proposal</p> -->

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Tambah Jenis Surat</div>
        <div class="card-body">
    <div class="content">
        <div class ="row">
            <div class="col-sm-12">
            <div class="form-group">
                    <label>Kode Surat</label>
                    <input name="kode_surat" class="form-control"> 
                    <div class="text-danger">
                        @error('kode_surat')
                            {{ $message }}
                        @enderror
                    </div>
                    </input>
                </div>
            <div class="form-group">
                    <label>Jenis Surat</label>
                    <input name="jenis_surat" class="form-control"> 
                    <div class="text-danger">
                        @error('jenis_surat')
                            {{ $message }}
                        @enderror
                    </div>
                    </input>
                </div>
                <div class="form-group">
                    <label>Yang Menandatangani</label>
                    <input name="penandatangan" class="form-control"> 
                    <div class="text-danger">
                        @error('penandatangan')
                            {{ $message }}
                        @enderror
                    </div>
                    </input>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input name="jabatan" class="form-control"> 
                    <div class="text-danger">
                        @error('jabatan')
                            {{ $message }}
                        @enderror
                    </div>
                    </input>
                </div>
                <div class="form-group">
                    <label>Keperluan</label>
                    <input name="keperluan" class="form-control"> 
                    <div class="text-danger">
                        @error('jabatan')
                            {{ $message }}
                        @enderror
                    </div>
                    </input>
                </div>
                <div class="form-group">
                <button class="btn btn-primary"> Simpan </button>
            </div>
        </div>
    </div>
    </div>
</form>

    
@endsection