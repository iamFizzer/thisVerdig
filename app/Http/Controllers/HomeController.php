<?php 

namespace App\Http\Controllers;
use App\models\VerifikasiModel;
use App\models\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->user()->level == '1')
        {
            $verifikasi = DB::table('verifikasi')->count();
            $user = DB::table('lbl_user')->count();
            $diterima = DB::table('verifikasi')->where('status', '=', 'DITERIMA')->count();
            $ditolak = DB::table('verifikasi')->where('status', '=', 'DITOLAK')->count();
            // $verifikasiCount = VerifikasiModel::count();
            // dd($user);
             return view('v_home', compact('verifikasi', 'user', 'diterima', 'ditolak'));
        } elseif (auth()->user()->level == '2'){ 
            $nama = auth()->user()->username;
            $nama2 = auth()->user()->nama;
            $verifikasi = DB::table('verifikasi')->where('penandatangan', '=', $nama2)->count();
            $user = DB::table('lbl_user')->where('username', '=', $nama)->count();
            $diterima = DB::table('verifikasi')->where('status', '=', 'DITERIMA')->where('penandatangan', '=', $nama2)->count();
            $ditolak = DB::table('verifikasi')->where('status', '=', 'DITOLAK')->where('penandatangan', '=', $nama2)->count();
            $menunggu = DB::table('verifikasi')->where('status', '=', 'MENUNGGU')->where('penandatangan', '=', $nama2)->count();
            // $verifikasiCount = VerifikasiModel::count();
            // dd($user);
            return view('v_home', compact('verifikasi', 'user', 'diterima', 'ditolak', 'menunggu'));
        }elseif (auth()->user()->level == '3'){ 
            $nama = auth()->user()->username;
            $verifikasi = DB::table('verifikasi')->where('nim', '=', $nama)->count();
            $user = DB::table('lbl_user')->where('username', '=', $nama)->count();
            $menunggu = DB::table('verifikasi')->where('status', '=', 'MENUNGGU')->where('nim', '=', $nama)->count();
            $diterima = DB::table('verifikasi')->where('status', '=', 'DITERIMA')->where('nim', '=', $nama)->count();
            $ditolak = DB::table('verifikasi')->where('status', '=', 'DITOLAK')->where('nim', '=', $nama)->count();
            // $verifikasiCount = VerifikasiModel::count();
            // dd($user);
            return view('v_home', compact('verifikasi', 'user', 'diterima', 'ditolak', 'menunggu'));
       
        
    }
} 
}
