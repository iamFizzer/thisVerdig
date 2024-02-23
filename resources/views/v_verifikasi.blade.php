@extends('temp.v_temp') 
@section('breadcump','Tabel Pengajuan Tanda Tangan')
@section('isibreadcump','Tabel Pengajuan')
@section('isicontent')
<div class="card">
<div class="card-header d-flex justify-content-between align-items-center">
            <span class="mr-auto">Data Pengajuan Tanda Tangan</span>
                      
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table id= "example3" class="table table-bordered table-striped">
    <!-- <a href="#" class="btn btn-sm btn-success"> Tambah </a> -->
    @if (session('Pesan'))
    <div class ="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class ="icon fas fa-check"></i>Success!</h5>
        {{ (session('Pesan')) }}.
    </div>
    @elseif (session('error'))
    <div class ="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class ="icon fas fa-check"></i>Warning!</h5>
        {{ (session('error')) }}.
    </div>
    @endif
    <thead class="table-light">
    <thread>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>NIM</th>
            <th>Nama</th>
            <!-- <th>Angkatan</th>
            <th>Program Studi</th>
            <th>Email</th> -->
            <th>Jenis Surat</th>
            @if (auth()->user()->level == '1')
            <th>No Surat</th>
            @endif
            <th>Keperluan</th>
            <th>Yang Menandatangani</th>
            <th>Jabatan</th>
            <th>Status</th>
            <th>Catatan</th>
            <th>File Transkip</th>
            <!-- <th>Transkip</th> -->
            <th>Action</th>
           
        </tr>
    </thread>
    <tbody>
       <?php $no=1; ?>
        @foreach ($verifikasi as $data)
            <tr>
                <td> {{ $no++}} </td>
                <td> {{ $data->tanggal}} </td>
                <td> {{ $data->nim}} </td>
                <td> {{ $data->nama}} </td>
                <!-- <td> {{ $data->angkatan}} </td> -->
                <!-- <td> {{ $data->program_studi}} </td>
                <td> {{ $data->email}} </td> -->
                <td> {{ $data->jenis_surat}} </td>
                @if (auth()->user()->level == '1')
                <td> 
                    @if ( $data->no_surat == null)
                    <button id="myModal" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"
                    data-id="{{$data->id}}" data-tanggal="{{$data->tanggal}}"  data-nim="{{$data->nim}}"  data-nama="{{$data->nama}}"
                    data-angkatan="{{$data->angkatan}}"  data-program_studi="{{$data->program_studi}}"  data-email="{{$data->email}}"
                    data-jenis_surat="{{$data->jenis_surat}}"  data-keperluan="{{$data->keperluan}}"  data-jabatan="{{$data->jabatan}}"
                    data-penandatangan="{{$data->penandatangan}}"

                    >Tambah No Surat</button>
                    @else 
                    {{ $data->no_surat}}
                    @endif       
            </td>
            @endif
                <td> {{ $data->keperluan}} </td>
                <td> {{ $data->penandatangan}} </td>
                <td> {{ $data->jabatan}} </td>
                <td> 
                    @if( $data->status == 'DITERIMA')
                    <span class="badge badge-info">{{ $data->status}} </span>
                    @elseif ($data->status == 'MENUNGGU')
                    <span class="badge badge-secondary">{{ $data->status}} </span>
                    @else
                    <span class="badge badge-danger">{{ $data->status}} </span>
                    @endif
                </td>
                <td> @if ($data->catatan == null)
                    -
                    @else
                    {{$data->catatan}}
                    @endif
                <td>
                    <a href="transkip/{{$data->transkip}}"><button class="btn btn-primary btn-sm"><i class="fas fa-file-download"></i> Download file </button></a>
                </td>
                @if (auth()->user()->level == '2')
                    <td>
                    @if ($data->no_surat==null) 
                    <nobr>
                    <a href="{{route('detail', $data->id)}}" class= "btn btn-info btn-xs mx-1  disabled"  title="Lihat"><i class="fas fa-info-circle"></i></a>
                    {{-- <a href="{{route('view', $data->id)}}" class="btn btn-secondary btn-xs mx-1 disabled" title="view saat di scan"><i class="fas fa-address-card"></i></a> --}}
                    </nobr>
                    @else 
                    {{-- <a href="{{route('view', $data->id)}}" class="btn btn-secondary btn-xs mx-1 " title="view saat di scan"><i class="fas fa-address-card"></i></a> --}}
                    <a href="{{route('detail', $data->id)}}" class="btn btn-info btn-xs mx-1"   title="Lihat"><i class="fas fa-info-circle"></i></a>
                    </nobr>
                    @endif
                    </nobr>
                    </td>
                @else 
                <td>
                <nobr>
                <a href="{{route('verifikasi-hapus', $data->id)}}" class="btn btn-danger btn-xs mx-1" title="Hapus"><i class="fas fa-times-circle"></i></a>
                @endif
                </td>
               
            </tr>
        @endforeach
    </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukan No Surat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="verifikasi/edit" method="POST" id="no_surat"enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" id="id">
        <input type="hidden" name="tanggal" id="tanggal">
        <input type="hidden" name="nim" id="nim">
        <input type="hidden" name="nama" id="nama">
        <input type="hidden" name="email" id="email">
        <input type="hidden" name="angkatan" id="angkatan">
        <input type="hidden" name="program_studi" id="program_studi">
        <input type="hidden" name="jenis_surat" id="jenis_surat">
        <input type="hidden" name="penandatangan" id="penandatangan">
        <input type="hidden" name="jabatan" id="jabatan">
        <input type="hidden" name="keperluan" id="keperluan">
        <div class="form-group">
                    <label>No Surat</label>
                    <input id="no_surat" name="no_surat" class="form-control"> 
                    <div class="text-danger">
                        @error('no_surat')
                            {{ $message }}
                        @enderror
                    </div>
                    </input>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
@section('skrip')
<script>
    

$(document).on('click','#myModal', function () {
        
    // ambil data dari elemen option yang dipilih
  const id= $('#myModal').data('id');
        const tanggal= $('#myModal').data('tanggal');
        const nim= $('#myModal').data('nim');
        const nama= $('#myModal').data('nama');
        const angkatan= $('#myModal').data('angkatan');
        const email= $('#myModal').data('email');
        const program_studi= $('#myModal').data('program_studi');
        const jenis_surat= $('#myModal').data('jenis_surat');
        const penandatangan= $('#myModal').data('penandatangan');
        const jabatan= $('#myModal').data('jabatan');
        const keperluan= $('#myModal').data('keperluan');
        
        // alert(penandatangan)
        // tampilkan data ke element
        $('#id').val(id);
        $('#tanggal').val(tanggal);
        $('#nim').val(nim);
        $('#nama').val(nama);
        $('#angkatan').val(angkatan);
        $('#email').val(email);
        $('#program_studi').val(program_studi);
        $('#jenis_surat').val(jenis_surat);
        $('#penandatangan').val(penandatangan);
        $('#jabatan').val(jabatan);
        $('#keperluan').val(keperluan);
})

// $('#form-no_surat').on('submit', function(event){
//     event.preventDefault();

//     $.ajax({
//         header: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

//         },
//         url: "{{route('verifikasi-edit')}}",
//         method: 'POST',
//         data:{
//             id : $('#id').val(),
//            nim: $('#nim').val(),
//            nama: $('#nama').val(),
//            angkatan: $('#angkatan').val(),
//            email: $('#email').val(),
//            program_studi: $('#program_studi').val(),
//            jenis_surat: $('#jenis_surat').val(),
//            penandatangan: $('#penandatangan').val(),
//            jabatan:  $('#jabatan').val(),
//            keperluan: $('#keperluan').val(),
//            no_surat: $('#no_surat').val()
//         }
//     }).done((response) => {
//         $('#myModal').modal('hide');
//     }) 
// })
</script>
@endsection