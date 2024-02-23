@extends('temp.v_temp') 
@section('breadcump','Edit User')
@section('isibreadcump','Edit')
@section('isicontent')
<form action="{{route('user.update', $user->id )}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="content">
        <div class="container-fluid">
                <!-- <p>Melihat data proposal</p> -->

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
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
                    <input name="username" class="form-control" value ="{{ $user->username }}">
                    <div class="text-danger">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

            <div class="form-group">
                <label>Password</label>
                <input name="password" class="form-control" value="{{ $user->password }}" >
                <div class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
            </div>
            <div class="form-group">
                <label>Level</label> 
                <input name="level" class="form-control" value="{{ $user->level }}" >
                <div class="text-danger">
                        @error('level')
                            {{ $message }}
                        @enderror
                    </div>
            </div>
            <div class="form-group">
                <label>Jabatan</label> 
                <input name="jabatan" class="form-control" value="{{ $user->jabatan }}" >
                <div class="text-danger">
                        @error('jabatan')
                            {{ $message }}
                        @enderror
                    </div>
            </div>
            <br>
            <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>     Update </button>
                </div>
        </div>
    </div>
</form>



    
@endsection


