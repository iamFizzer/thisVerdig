@extends('temp.v_temp') 
@section('breadcump','Tanda Tangan Yang Diterima')
@section('isibreadcump','Diterima')
@section('isicontent')
<div class="card">
    
<div class="card-header d-flex justify-content-between align-items-center">
            <span class="mr-auto">Data Pengajuan Diterima</span>
                       
                    </div>
        <div class="card-body">
        <div class="table-responsive">
             <table id= "example3" class="table table-bordered table-striped">
   
    @if (session('Pesan'))
    <div class ="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class ="icon fas fa-check"></i>Success!</h5>
        {{ (session('Pesan')) }}.
    </div>
    @endif
    <thead class="table-light-responsive">
    <thread>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>NIM</th>
            <th>Nama</th>
            <!-- <th>Angkatan</th>
            <th>Program Studi</th>
            <th>Email</th> -->
            @if (auth()->user()->level == '1')
            <th>Jenis Surat</th>
            <th>No Surat</th>
            @endif
            <th>Keperluan</th>
            <th>Yang Menandatangani</th>
            <!-- <th>Jabatan</th> -->
            <th>Barcode</th>
            <th>Dokumen</th>
            <th>Action</th>
           
        </tr>
    </thread>
    <tbody>
       <?php $no=1; ?>
        @foreach ($barcode as $data)
            <tr>
                <td> {{ $no++}} </td>
                <td> {{ $data->tanggal}} </td>
                <td> {{ $data->nim}} </td>
                <td> {{ $data->nama}} </td>
                <!-- <td> {{ $data->angkatan}} </td>
                <td> {{ $data->program_studi}} </td>
                <td> {{ $data->email}} </td> -->
                @if (auth()->user()->level == '1')
                <td> {{ $data->jenis_surat}} </td>
                <td> {{ $data->no_surat}} </td>
                @endif
                <td> {{ $data->keperluan}} </td>
                <td> {{ $data->penandatangan}} </td>
                <!-- <td> {{ $data->jabatan}} </td> -->
                <td> <img src="{{ $data->barcode}}" alt=""> </td>
                <!-- <td>
                    <a href="dokumen/{{$data->dokumen}}"><button class="btn btn-primary btn-sm"><i class="fas fa-file-download"></i> Download file </button></a>
                </td> -->
                @if($data->barcode == null)
                <td>
                    <button class="btn btn-primary btn-sm disable"><i class="fas fa-file-download"></i> Download file </button>
                </td>
                @else
                <td>
                    <a href="verifikasi/{{ $data->jenis_surat}}/{{ $data->id }}"><button class="btn btn-primary btn-sm"><i class="fas fa-file-download"></i> Download file </button></a>
                </td>
                @endif
                <td>
                <a href="{{route('barcode-hapus', $data->id)}}"><button class="btn btn-danger btn-sm" title="hapus"><i class="fas fa-times-circle"></i></button></a>  
                    <a href="{{ $data->barcode}}" target="_blank"><button class="btn btn-primary btn-sm" title="Download Barcode"><i class="fas fa-file-download"></i></button></a>  
                </nobr>
                </td>
                </td>
                
    
            </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection