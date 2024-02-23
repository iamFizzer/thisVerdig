@extends('temp.v_temp') 
@section('breadcump','Tambah User')
@section('isibreadcump','Tambah')
@section('isicontent')

<form action="{{route('user-tambah')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="container-fluid">
                <!-- <p>Melihat data proposal</p> -->

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Tambah User</div>
        <div class="card-body">
    <div class="content">
        <div class ="row">
            <div class="col-sm-12">
            <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" class="form-control" value ="{{ old('nama') }}">
                    <div class="text-danger">
                        @error('nama')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" class="form-control" value ="{{ old('username') }}">
                    <div class="text-danger">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

            <div class="form-group">
                <label>Password</label>
                <input name="password" class="form-control" type="password" >
                <div class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
            </div>
            <div class="form-group">
                    <label>Level</label>
                    <select name="level" class="form-control"> 
                        <option value="">PILIH</option>
                        <option value="1">Admin</option>
                        <option value="2">Pejabat</option>  
                        <option value="3">Mahasiswa</option> 
                    </select>
                    <div class="text-danger">
                        @error('level')
                            {{ $message }}
                        @enderror
                    </div>   
                </div> 
            <div class="form-group">
                <label>Jabatan</label>
                <input name="jabatan" class="form-control" type="jabatan" >
                <div class="text-danger">
                        @error('jabatan')
                            {{ $message }}
                        @enderror
                    </div>
            </div>
            <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>      Simpan </button>
                </div>
        </div>
    </div>
    </div>
</form>

    
@endsection