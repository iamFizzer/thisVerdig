<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\models\UserModel;
use App\models\VerifikasiModel;

class UserController extends Controller
{
    public function __construct()
    {
        $this->UserModel = new UserModel();

    }
    public function index()
        {
            $data = [
                'user'=> $this->UserModel->alldata(),
            ];
            return view ('v_user',$data);
        }
        public function add()
        {
            
            return view ('v_adduser');
        }   
        public function tambah()
        {
            //validasi from laravel
            Request()->validate([
                'nama' => 'required',
                'username' => 'required',
                'password' => 'required',
                'level' => 'required',
                'jabatan' => 'required',
                
            ],[
                //custome pesan
                'nama.required' => 'nama wajib di isi!!!',
                'username.required' => 'username wajib Di isi !!!',
                'password.required' => 'password wajib di isi !!!',
                'username.min' => 'username minimal 5 karakter !!!',
                'username.max' => 'username maximal 20 karakter !!!',
               
            ]);
            $user = new \App\Models\User;
            $user->nama = Request()->nama;
            $user->username = Request()->username;           
            $user->password = bcrypt(Request()->password);
            $user->remember_token = Str::Random(60);
            $user->level = Request()->level;
            $user->jabatan = Request()->jabatan;
           
            $user->save();

            // $foto = Request()->foto_user;
            // $namafile= Request()->username .'.'. $foto->extension();
            // $foto->move(public_path('foto_user'),$namafile);
            
            Request()->request->add(['user_id' => $user->id]);

        

            $data =[
                'nama' => Request()->nama,
                'username' => Request()->username,
                'password' => Request()->password,
                'level' => Request()->level,
                'jabatan' => Request()->jabatan,
                // 'foto'=>$namafile
            ];
            $this->UserModel->tambahdata($data);
            return redirect()->route('user')->with('Pesan','Data Telah Berhasil Disimpan!!!');
        }   
        public function detail($id)
        {
            if(!$this->UserModel->detailuser($id)){
                abort(404);
            }
            $data = [
                'user' =>$this->UserModel->detailuser($id),
            ];
            return view('v_detailuser',$data);
        }
        public function edit($id)
        {
            if(!$this->UserModel->detailuser($id)){
                abort(404);
            }
            $data = [
                'user' =>$this->UserModel->detailuser($id),
            ];
            return view('v_edituser',$data);
        }
        public function update(Request $request, $id)
        {
            $data = [
                'user' =>$this->UserModel->detailuser($id),
            ];
            //validasi from laravel
            $request->validate([
                'nama' => 'required',
                'username' => 'required',
                'password' => 'required',
                'level' => 'required',
                'jabatan' => 'required',
                
            ],[
                //custome pesan
                'nama.required' => 'nama wajib di isi !!!',
                'username.required' => 'username wajib Di isi !!!',
                'password.required' => 'password wajib di isi !!!',
                'username.min' => 'username minimal 5 karakter !!!',
                'username.max' => 'username maximal 20 karakter !!!',
               
            ]);

            $data =[
                'nama' => Request()->nama,
                'username' => Request()->username,
                'password' => Request()->password,
                'level' => Request()->level,
                'jabatan' => Request()->jabatan,
                
            ];
            $this->UserModel->updatedata($id,$data);
        
            return redirect()->route('user')->with('Pesan','Data Telah Berhasil DIUPDATE!!!');
        }  
        public function hapus($id)
        {
        $data = [
            'user'=>$this->UserModel->hapusdata($id),
        ];

        return redirect()->route('user')->with('Pesan','Data Telah Berhasil dihapus');
        }
}
