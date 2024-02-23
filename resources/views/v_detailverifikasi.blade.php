@extends('temp.v_temp') 
@section('breadcump','Detail Pengajuan')
@section('isibreadcump','Detail')
@section('isicontent')

<!-- GENERATE QRCODE CONTOH  -->
<!-- <img src="{{ $qr }}">  -->


<!-- <div class="panel-body">
                    <div class="card bg-light" style="width: 35rem;">
                        <div class="card-header bg-dark">
                            <h5 class="text-center">Detail Informasi Verifikasi Tanda Tangan</h5>
                        </div> 
                        <div class="card-header">
    <div class="card-body">
     <tr><dl><dd>
                   &nbsp &nbsp &nbsp <th width ="100px">Tanggal</th>
                   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<th width ="30px">:</th>
                    <th width>{{ $verifikasi->tanggal}}</th>
                </tr></dd>
       <tr><dl><dd>
                   &nbsp &nbsp &nbsp <th width ="100px">NIM</th>
                   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<th width ="30px">:</th>
                    <th width>{{ $verifikasi->nim }}</th>
                </tr></dd>
                 <tr><dd>
                 &nbsp &nbsp &nbsp <th width ="100px">Nama</th>
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   <th width ="30px">:</th>
                    <th width>{{ $verifikasi->nama }}</th>
                </tr></dd>
                <tr><dd>
                 &nbsp &nbsp &nbsp <th width ="100px">Jenis Surat</th>
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   <th width ="30px">:</th>
                    <th width>{{ $verifikasi->jenis_surat }}</th>
                </tr></dd>
                 <tr><dd>
                 &nbsp  &nbsp &nbsp <th width ="100px">No Surat</th>
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp   <th width ="30px">:</th>
                    <th width>{{ $verifikasi->no_surat }}</th>
                  </tr></dl></dd>
                  <tr><dd>
                 &nbsp  &nbsp &nbsp <th width ="100px">Keperluan</th>
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <th width ="30px">:</th>
                    <th width>{{ $verifikasi->keperluan }}</th>
                  </tr></dl></dd>
                  <tr><dd>
                 &nbsp  &nbsp &nbsp <th width ="100px">Tujuan</th>
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <th width ="30px">:</th>
                    <th width>{{ $verifikasi->penandatangan }}</th>
                  </tr></dl></dd>
                  <tr><dd>
                 &nbsp  &nbsp &nbsp <th width ="100px">File Surat</th>
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <th width ="30px">:</th>
                    <th width><td>
                    <a href="dokumen/{{$verifikasi->dokumen}}"><button class="btn btn-success" type="button">Download</button></a>
                  </tr></dl></dd>

                </div>
                
            </div>
            
            
            END PANEL HEADLINE -->
        <!-- </div>
    </div> -->
 
  
  <!-- <a href="/barcode" class="btn btn-info">Terima</a>
  <a href="#" class="btn btn-danger">Tolak</a>
  <p></p><a href="#" class="btn btn-warning" onclick="window.print();return false;">CETAK</a></p>
  <a href="/verifikasi/" class="btn btn-success">Kembali</a> --> 
  <div class="content">
        <div class="container-fluid">
                <!-- <p>Melihat data proposal</p> -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Detail Pengajuan Surat</div>
                <div class="card-body p-0">
                    <table class="table table-borderless">
    <tbody>
        <tr>
            <th>Tanggal</th>
            <th width>{{ $verifikasi->tanggal}}</th>
        </tr>
        <tr>
            <th>Nim</th>
            <td width>{{ $verifikasi->nim }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td width>{{ $verifikasi->nama }}</td>
        </tr>
        <tr>
            <th>Angkatan</th>
            <td width>{{ $verifikasi->angkatan }}</td>
        </tr>
        <tr>
            <th>Program Studi</th>
            <td width>{{ $verifikasi->program_studi }}</td>
        </tr>
        <tr>
            <th>No Surat</th>
            <td width>{{ $verifikasi->no_surat }}</td>
        </tr>
        <tr>
            <th>Keperluan</th>
            <td width>{{ $verifikasi->keperluan }}</td>
        </tr>
        <tr>
            <th>Yang Menandatangani</th>
            <td width>{{ $verifikasi->penandatangan }}</td>
        </tr>
        <tr>
            <th>Transkip Nilai</th>
            <td>
                <a href="{{asset('transkip')}}/{{$verifikasi->transkip}}" class="btn btn-primary btn-sm"><i class="fas fa-file"></i>     Lihat</a>
            </td>
        </tr>
        
    </tbody>
</table>
</div>
</div>
</div>
</div>

<form action="{{route('barcode-update', $verifikasi->id)}}" method="post">
    @csrf
    <div class="form-group">
        <input type="hidden" name="isedit" value="0">
        <input type="hidden" name="tanggal" value="{{ $verifikasi->tanggal}}">    
        <input type="hidden" name="nim" value="{{ $verifikasi->nim}}">    
        <input type="hidden" name="nama" value="{{ $verifikasi->nama}}">    
        <input type="hidden" name="jenis_surat" value="{{ $verifikasi->jenis_surat}}">    
        <input type="hidden" name="no_surat" value="{{ $verifikasi->no_surat}}">    
        <input type="hidden" name="keperluan" value="{{ $verifikasi->keperluan}}">    
        <input type="hidden" name="penandatangan" value="{{ $verifikasi->penandatangan}}">  
        <input type="hidden" name="dokumen" value="{{ $verifikasi->dokumen}}">  
        <input type="hidden" name="transkip" value="{{ $verifikasi->transkip}}"> 
        <!-- <input type="hidden" name="jabatan" value="{{ $verifikasi->jabatan}}">     -->
        <input type="hidden" name="status" value="DITERIMA">    
        <input type="hidden" name="barcode" value="{{ $qr }}">    
    </div>
    
    <div class="form-group">
    <button class="btn btn-primary" ><i class="fa fa-check-circle" aria-hidden="true"></i>        DITERIMA</button>
    </div>
</form>

<button id="myModal" class="btn btn-danger" data-toggle="modal" data-target="#modalTolak"
                    data-id="{{$verifikasi->id}}" data-tanggal="{{$verifikasi->tanggal}}"  data-nim="{{$verifikasi->nim}}"  data-nama="{{$verifikasi->nama}}"
                    data-angkatan="{{$verifikasi->angkatan}}"  data-program_studi="{{$verifikasi->program_studi}}"  data-email="{{$verifikasi->email}}"
                    data-jenis_surat="{{$verifikasi->jenis_surat}}"  data-keperluan="{{$verifikasi->keperluan}}"  data-jabatan="{{$verifikasi->jabatan}}"
                    data-penandatangan="{{$verifikasi->penandatangan}}" data-no_surat="{{$verifikasi->no_surat}}"><i class="fa fa-times-circle" aria-hidden="true"></i>   DITOLAK</button>

<!-- <a href="#" class="btn btn-danger my-2">
    <i class="fas fa-times-circle"></i> Tolak
</a> -->
    <br>
    <a href="{{route('verifikasi')}}" class="btn btn-secondary my-2">
        <i class="fas fa-arrow-left"></i>     Kembali</a>
    </br>
   
    </br>
        </div>
    </div>
</a>
</nobr>
<div class="modal fade" id="modalTolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">MASUKAN CATATAN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{route('barcode-update', $verifikasi->id)}}" method="POST" id="no_surat"enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" id="id">
          <input type="hidden" name="isedit" value="1">
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
          <input type="hidden" name="no_surat" value="{{ $verifikasi->no_surat}}">
          <input type="hidden" name="status" value="DITOLAK">
          <div class="form-group">
                      <label>CATATAN</label>
                      <input id="catatan" name="catatan" class="form-control"> 
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">  TOLAK</button>
                  </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
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
    </script>
@endsection