<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\VerifikasiModel;
use App\models\SuratModel;
use App\models\UserModel;
use App\Http\Controllers\DB;
use Illuminate\Database\Eloquent\Relations\Relation;
use PDF;


class VerifikasiController extends Controller
{
    public function __construct()
    {
        $this->VerifikasiModel = new VerifikasiModel();
    }
    public function index()
    {

        if (auth()->user()->level == '1') {
            $data = [
                'verifikasi' => $this->VerifikasiModel->alldata(),
            ];
            return view('v_verifikasi', $data);
        } elseif (auth()->user()->level == '2') {
            $nama = auth()->user()->nama;

            // dd($nama);
            $data = [
                'verifikasi' => $this->VerifikasiModel->datadosen($nama),
            ];
            // dd($data);
            return view('v_verifikasi', $data);
        } elseif (auth()->user()->level == '3') {
            $nama = auth()->user()->username;
            $data = [
                'verifikasi' => $this->VerifikasiModel->datanama($nama),
            ];
            return view('v_verifikasi', $data);
        } elseif (auth()->user()->level == null) {
            return response()->view('error.404');
        }
    }
    public function add()
    {
        $data = [

            'surat' => $this->VerifikasiModel->alldatasurat(),
            'jabatan' => $this->VerifikasiModel->alldatauser(),
            'penandatangan' => $this->VerifikasiModel->alldata(),
        ];
        return view('v_addverifikasi', $data);
    }

    public function tambah()
    {
        $nim = Request()->nim;
        $jenis_surat = Request()->jenis_surat;
        $status = "MENUNGGU";
        $isready = $this->VerifikasiModel->getdatabynimandstatus($nim, $status, $jenis_surat);

        if (auth()->user()->level == '1') {
            if (!$isready) {
                Request()->validate([
                    'nim' => 'required',
                    'nama' => 'required',
                    'angkatan' => 'required',
                    'program_studi' => 'required',
                    'email' => 'required',
                    'jenis_surat' => 'required',
                    'no_surat' => 'required',
                    'keperluan' => 'required',
                    'penandatangan' => 'required',
                    'jabatan' => 'required',
                    'dokumen' => ' mimes:doc,docx,pdf',
                    'transkip' => 'mimes:doc,docx,pdf',


                ], [
                    //custome pesan
                    'nama.required' => 'nama wajib di isi !!!',
                    'angkatan' => 'wajib di isi !!!',
                    'program_studi' => 'wajib di isi !!!',
                    'email' => 'wajib di isi !!!',
                    'jenis_surat' => 'wajib di isi !!!',
                    'nim.required' => 'nim wajib di isi !!!',
                    'keperluan.required' => 'wajib di isi !!!',
                    'no_surat.required' => 'wajib di isi !!!',
                    'penandatangan.required' => 'wajib di isi !!!',
                    'jabatan' => 'wajib di isi !!!',
                    'dokumen.required' => 'wajib di isi !!!',
                    'transkip.required' => 'wajib di isi !!!',
                ]);
                $dokumen = Request()->file('dokumen');
                $nama_dokumen = Request()->nama . '.' . $dokumen->extension();
                $dokumen->move('dokumen/', $nama_dokumen);

                $transkip = Request()->file('transkip');
                $nama_transkip = Request()->nama . '.' . $transkip->extension();
                $transkip->move('transkip/', $nama_transkip);

                $data = [
                    'tanggal' => Request()->tanggal,
                    'nim' => $nim,
                    'nama' => Request()->nama,
                    'angkatan' => Request()->angkatan,
                    'program_studi' => Request()->program_studi,
                    'email' => Request()->email,
                    'jenis_surat'=>$jenis_surat,
                    'no_surat' => Request()->no_surat,
                    'keperluan' => Request()->keperluan,
                    'penandatangan' => Request()->penandatangan,
                    'jabatan' => Request()->jabatan,
                    'dokumen' => $nama_dokumen,
                    'transkip' => $nama_transkip,
                    'status' => $status,
                ];
                $this->VerifikasiModel->tambahdata($data);
                return redirect()->route('verifikasi')->with('Pesan', 'Data Telah Berhasil Disimpan!!!');
            } else {
                return redirect()->route('verifikasi')->with('Pesan', 'Mahasiswa dengan Nim ' . $nim . ' telah mengajukan dengan status ' . $status);
            }
        } else {
            if (!$isready) {
                Request()->validate([
                    'nim' => 'required',
                    'nama' => 'required',
                    'angkatan' => 'required',
                    'program_studi' => 'required',
                    'email' => 'required',
                    'jenis_surat' => 'required',
                    'keperluan' => 'required',
                    'penandatangan' => 'required',
                    'jabatan' => 'required',
                    'transkip' => 'mimes:doc,docx,pdf',


                ], [
                    //custome pesan
                    'nama.required' => 'nama wajib di isi !!!',
                    'angkatan' => 'wajib di isi !!!',
                    'program_studi' => 'wajib di isi !!!',
                    'email' => 'wajib di isi !!!',
                    'jenis_surat' => 'wajib di isi !!!',
                    'nim.required' => 'nim wajib di isi !!!',
                    'keperluan.required' => 'wajib di isi !!!',
                    'penandatangan.required' => 'wajib di isi !!!',
                    'jabatan' => 'wajib di isi !!!',
                    'transkip.required' => 'wajib di isi !!!',
                ]);

                $transkip = Request()->file('transkip');
                $nama_transkip = Request()->nama . '.' . $transkip->extension();
                $transkip->move('transkip/', $nama_transkip);

                $data = [
                    'tanggal' => Request()->tanggal,
                    'nim' => Request()->nim,
                    'nama' => Request()->nama,
                    'angkatan' => Request()->angkatan,
                    'program_studi' => Request()->program_studi,
                    'email' => Request()->email,
                    'jenis_surat' =>$jenis_surat,
                    'keperluan' => Request()->keperluan,
                    'penandatangan' => Request()->penandatangan,
                    'jabatan' => Request()->jabatan,
                    'transkip' => $nama_transkip,
                    'status' => 'MENUNGGU',
                ];
                $this->VerifikasiModel->tambahdata($data);
                return redirect()->route('verifikasi')->with('Pesan', 'Data Telah Berhasil Disimpan!!!');
            } else {
                return redirect()->route('verifikasi')->with('error', 'Mahasiswa dengan Nim ' . $nim . ' telah mengajukan dengan status ' . $status);
            }
        }
    }

    // public function tambah()
    // {
    //     if (auth()->user()->level == '1')
    //     {
    //     Request()->validate([
    //         'nim' => 'required',
    //         'nama' => 'required',
    //         'angkatan' => 'required',
    //         'program_studi'=> 'required',
    //         'email' => 'required',
    //         'jenis_surat' => 'required',
    //         'no_surat' => 'required',
    //         'keperluan' => 'required',
    //         'penandatangan' => 'required',
    //         'jabatan' => 'required',
    //         'dokumen' => ' mimes:doc,docx,pdf',
    //         'transkip' => 'mimes:doc,docx,pdf',


    //     ],[
    //         //custome pesan
    //         'nama.required' => 'nama wajib di isi !!!',
    //         'angkatan' => 'wajib di isi !!!',
    //         'program_studi' => 'wajib di isi !!!',
    //         'email' => 'wajib di isi !!!',
    //         'jenis_surat' => 'wajib di isi !!!',
    //         'nim.required' => 'nim wajib di isi !!!',
    //         'keperluan.required' => 'wajib di isi !!!',
    //         'no_surat.required' => 'wajib di isi !!!',
    //         'penandatangan.required' => 'wajib di isi !!!',
    //         'jabatan' => 'wajib di isi !!!',
    //         'dokumen.required' => 'wajib di isi !!!',
    //         'transkip.required' => 'wajib di isi !!!',
    //     ]);
    //     $dokumen = Request()->file('dokumen');
    //     $nama_dokumen = Request()->nama .'.'. $dokumen->extension();
    //     $dokumen->move('dokumen/',$nama_dokumen);

    //     $transkip = Request()->file('transkip');
    //     $nama_transkip = Request()->nama .'.'. $transkip->extension();
    //     $transkip->move('transkip/',$nama_transkip);

    //     $data =[
    //         'tanggal' => Request()->tanggal,
    //         'nim' => Request()->nim,
    //         'nama' => Request()->nama,
    //         'angkatan' => Request()->angkatan,
    //         'program_studi'=> Request()->program_studi,
    //         'email'=> Request()->email,
    //         'jenis_surat' => Request()->jenis_surat,
    //         'no_surat' => Request()->no_surat,
    //         'keperluan' => Request()->keperluan,
    //         'penandatangan' => Request()->penandatangan,
    //         'jabatan' => Request()->jabatan,
    //         'dokumen'=>$nama_dokumen,
    //         'transkip'=>$nama_transkip,
    //         'status'=> 'MENUNGGU',
    //     ];
    //     $this->VerifikasiModel->tambahdata($data);
    //     return redirect()->route('verifikasi')->with('Pesan','Data Telah Berhasil Disimpan!!!');
    // }else{
    //     Request()->validate([
    //         'nim' => 'required',
    //         'nama' => 'required',
    //         'angkatan' => 'required',
    //         'program_studi'=> 'required',
    //         'email' => 'required',
    //         'jenis_surat' => 'required',
    //         'keperluan' => 'required',
    //         'penandatangan' => 'required',
    //         'jabatan' => 'required',
    //         'transkip' => 'mimes:doc,docx,pdf',


    //     ],[
    //         //custome pesan
    //         'nama.required' => 'nama wajib di isi !!!',
    //         'angkatan' => 'wajib di isi !!!',
    //         'program_studi' => 'wajib di isi !!!',
    //         'email' => 'wajib di isi !!!',
    //         'jenis_surat' => 'wajib di isi !!!',
    //         'nim.required' => 'nim wajib di isi !!!',
    //         'keperluan.required' => 'wajib di isi !!!',
    //         'penandatangan.required' => 'wajib di isi !!!',
    //         'jabatan' => 'wajib di isi !!!',
    //         'transkip.required' => 'wajib di isi !!!',
    //     ]);

    //     $transkip = Request()->file('transkip');
    //     $nama_transkip = Request()->nama .'.'. $transkip->extension();
    //     $transkip->move('transkip/',$nama_transkip);

    //     $data =[
    //         'tanggal' => Request()->tanggal,
    //         'nim' => Request()->nim,
    //         'nama' => Request()->nama,
    //         'angkatan' => Request()->angkatan,
    //         'program_studi'=> Request()->program_studi,
    //         'email'=> Request()->email,
    //         'jenis_surat' => Request()->jenis_surat,
    //         'keperluan' => Request()->keperluan,
    //         'penandatangan' => Request()->penandatangan,
    //         'jabatan' => Request()->jabatan,
    //         'transkip'=>$nama_transkip,
    //         'status'=> 'MENUNGGU',
    //     ];
    //     $this->VerifikasiModel->tambahdata($data);
    //     return redirect()->route('verifikasi')->with('Pesan','Data Telah Berhasil Disimpan!!!');
    // }
    // }
    public function hapus($id)
    {
        $data = [
            'verifikasi' => $this->VerifikasiModel->hapusdata($id),
        ];

        return redirect()->route('verifikasi')->with('Pesan', 'Data Telah Berhasil Dihapus!!!');
    }
    public function detail($id)
    {
        if (!$this->VerifikasiModel->detailverifikasi($id)) {
            abort(404);
        }
        $dokumen = Request()->file('dokumen');
        $qrcode = Request()->file('barcode');
        $urlview = 'http://verdig.stmik-bandung.ac.id:16088/verdig/verifikasi/view/' . $id;
        $qrcode = "https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=$urlview&choe=UTF-8";


        $data = [
            'qr' => $qrcode,
            'url' => $urlview,
            'verifikasi' => $this->VerifikasiModel->detailverifikasi($id),
        ];
        return view('v_detailverifikasi', $data);
    }
    public function view($id)
    {
        if (!$this->VerifikasiModel->viewverifikasi($id)) {
            abort(404);
        }
        $data = [
            'verifikasi' => $this->VerifikasiModel->viewverifikasi($id),
        ];
        return view('view', $data);
    }
    public function diterima($id)
    {
        if (!$this->VerifikasiModel->diterima($id)) {
            abort(404);
        }
        $data = [
            'verifikasi' => $this->VerifikasiModel->diterima($id),

        ];
        return view('v_barcode', $data);
    }


    //////////////////////////////// Tamplate surat ///////////////////////////////////////////////////
    public function seuts($id)
    {
        if (!$this->VerifikasiModel->seutsverifikasi($id)) {
            abort(404);
        }
        $data = [
            'verifikasi' => $this->VerifikasiModel->seutsverifikasi($id),
        ];
        return view('seuts', $data);
    }


    public function skka1($id)
    {
        if (!$this->VerifikasiModel->skka1verifikasi($id)) {
            abort(404);
        }

        $data = [
            'verifikasi' => $this->VerifikasiModel->skka1verifikasi($id),

        ];
        $pdf = PDF::loadview('skka1', $data);
        return $pdf->download('SKKA-SIDANG.pdf');
        // return view('skka1',$data);
    }


    public function skka2($id)
    {
        if (!$this->VerifikasiModel->skka2verifikasi($id)) {
            abort(404);
        }
        $data = [
            'verifikasi' => $this->VerifikasiModel->skka2verifikasi($id),
        ];
        $pdf = PDF::loadview('skka2', $data);
        return $pdf->download('SKKA-KP.pdf');
    }

    public function skka3($id)
    {
        if (!$this->VerifikasiModel->skka3verifikasi($id)) {
            abort(404);
        }
        $data = [
            'verifikasi' => $this->VerifikasiModel->skka3verifikasi($id),
        ];
        $pdf = PDF::loadview('skka3', $data);
        return $pdf->download('SKKA-PRASIDANG.pdf');
    }

    public function seuas($id)
    {
        if (!$this->VerifikasiModel->seuasverifikasi($id)) {
            abort(404);
        }
        $data = [
            'verifikasi' => $this->VerifikasiModel->seuasverifikasi($id),
        ];
        return view('seuas', $data);
    }

    public function skkb1($id)
    {
        if (!$this->VerifikasiModel->skkb1verifikasi($id)) {
            abort(404);
        }
        $data = [
            'verifikasi' => $this->VerifikasiModel->skkb1verifikasi($id),
        ];
        $pdf = PDF::loadview('skkb1', $data);
        return $pdf->download('skkb1.pdf');
    }
    public function skkb2($id)
    {
        if (!$this->VerifikasiModel->skkb2verifikasi($id)) {
            abort(404);
        }
        $data = [
            'verifikasi' => $this->VerifikasiModel->skkb2verifikasi($id),
        ];
        $pdf = PDF::loadview('skkb2', $data);
        return $pdf->download('skkb2.pdf');;
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $data = [
            'tanggal' => $request->tanggal,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'program_studi' => $request->program_studi,
            'email' => $request->email,
            'jenis_surat' => $request->jenis_surat,
            'no_surat' => $request->no_surat,
            'keperluan' => $request->keperluan,
            'penandatangan' => $request->penandatangan,
            'jabatan' => $request->jabatan,
            'status' => 'MENUNGGU',
        ];
        $this->VerifikasiModel->edit($data, $id);
        return redirect()->route('verifikasi')->with('Pesan', 'Data Telah Berhasil Disimpan!!!');
    }


    // public function skkakp(){
    //     return view('skka_kp');
    // }
}
