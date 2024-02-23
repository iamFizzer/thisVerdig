<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VerifikasiModel extends Model
{
    public function alldata()
    {
        
        return DB::table('verifikasi')->orderByDesc('id')->get();   
        // return DB::table('verifikasi')->join('surat','surat.kode_surat','=','verifikasi.jenis_surat')->get();  
     }
    public function datanama($nama)
    {
        $datas = DB::table('verifikasi')->where('nim','=',$nama)->get(); 

            return $datas; 
        // return DB::table('verifikasi')->join('surat','surat.kode_surat','=','verifikasi.jenis_surat')->get();  
     }

     public function datadosen($nama)
     {
         $datas = DB::table('verifikasi')->where('penandatangan','=',$nama)->orderBy('status','desc')->orderByDesc('id')->get(); 
 
             return $datas; 
         // return DB::table('verifikasi')->join('surat','surat.kode_surat','=','verifikasi.jenis_surat')->get();  
      }
     public function tambahdata($data)
     {
          DB::table('verifikasi')->insert($data);   
      }

      public function edit($data, $id)
     {
          DB::table('verifikasi')->where('id', '=', $id)->update($data);   
      }
      
      public function hapusdata($id)
    {
        DB::table('verifikasi')->where('id',$id)->delete();
    }
    public function detailverifikasi($id)
      {
          return DB::table('verifikasi')->where('id',$id)->first();
      }
      public function viewverifikasi($id)
      {
          return DB::table('verifikasi')->where('id',$id)->first();
      }
    public function diterima($id)
      {
          return DB::table('barcode')->where('id',$id)->first();
      }
    
      public function alldatasurat()
      {
          return DB::table('surat')->get();
      }
      public function alldatauser()
    {
        return DB::table('lbl_user')->get();   
     }


    ////////////////////////////////////////////  MODEL TAMPLATE SURAT /////////////////////////////////
      public function seutsverifikasi($id)
      {
          return DB::table('verifikasi')->where('id',$id)->first();
      }
      public function skka1verifikasi($id)
      {
          return DB::table('verifikasi')->where('id',$id)->first();
      }
      public function skka2verifikasi($id)
      {
          return DB::table('verifikasi')->where('id',$id)->first();
      }
      public function skka3verifikasi($id)
      {
          return DB::table('verifikasi')->where('id',$id)->first();
      }
      public function seuasverifikasi($id)
      {
          return DB::table('verifikasi')->where('id',$id)->first();
      }
      public function skkb1verifikasi($id)
      {
          return DB::table('verifikasi')->where('id',$id)->first();
      }
      public function skkb2verifikasi($id)
      {
          return DB::table('verifikasi')->where('id',$id)->first();
      }

      public function getdatabynimandstatus($nim, $status, $jenis_surat)
      {
            
            return DB::table('verifikasi')
            ->where('nim', $nim)
            ->where('status',$status)
            ->where('jenis_surat', $jenis_surat)
            ->first();
            // return DB::table('verifikasi')->join('surat','surat.kode_surat','=','verifikasi.jenis_surat')->get();  
        }
}
