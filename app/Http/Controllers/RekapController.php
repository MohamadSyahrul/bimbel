<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\AbsensiUser;
use App\Kelas;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    public function index() 
    {   
        $kelas = Kelas::all();
        $absen = Absensi::all();
        $absen = AbsensiUser::all();
        return view('admin.rekapabsen.rekapabsen', compact('kelas'));
    }

    public function getData($id = 0, $dateStart = 0, $dateEnd = 0)
    {   
        
        if ($id == 0 && $dateStart == 0 && $dateEnd == 0) {
            $arr['data'] = Absensi::orderBy('id', 'asc')->get();
            $arr['date'] = Absensi::whereBetween('created_at',[$dateStart,$dateEnd])->get();
            // $arr = Kelas::orderBy('id', 'asc')->get(); 

            foreach($arr['data'] as $i){
                $arr['total']  = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                ->where('absensi_id', '=', $i->id)->where('id_kelas','=', $id)->get()->count();
                $arr['hadir']  = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                ->where('status','hadir')->where('absensi_id', '=', $i->id)->where('id_kelas','=', $id)->get()->count();
                $arr['thadir'] = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                ->where('status','tidak hadir')->where('absensi_id', '=', $i->id)->where('id_kelas','=', $id)->get()->count();
                $arr['izin']   = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                ->where('status','izin')->where('absensi_id', '=', $i->id)->where('id_kelas','=', $id)->get()->count();
                $arr['none']   = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                ->where('status','none')->where('absensi_id', '=', $i->id)->where('id_kelas','=', $id)->get()->count();
            }
        }else{
            // $arr['data'] = Kelas::where('id', $id)->get();
            $arr['data'] = Absensi::where('id_kelas', '=', $id)->get();
            $arr['date'] = Absensi::whereBetween('created_at',[$dateStart,$dateEnd])->get();
            // $ab = $arr['absen'];
            // $i = 0;
            // for($a=0;$a>=$i;$a++){
            //     echo 'kunam';
            // }
            foreach($arr['data'] as $i){
                $arr['total']  = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                ->where('absensi_id', '=', $arr['data']['0']->id)->where('id_kelas','=', $id)->get()->count();
                $arr['hadir']  = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                ->where('status','hadir')->where('absensi_id', '=', $arr['data']['0']->id)->where('id_kelas','=', $id)->get()->count();
                $arr['thadir'] = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                ->where('status','tidak hadir')->where('absensi_id', '=', $arr['data']['0']->id)->where('id_kelas','=', $id)->get()->count();
                $arr['izin']   = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                ->where('status','izin')->where('absensi_id', '=', $arr['data']['0']->id)->where('id_kelas','=', $id)->get()->count();
                $arr['none']   = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                ->where('status','none')->where('absensi_id', '=', $arr['data']['0']->id)->where('id_kelas','=', $id)->get()->count();
            }

            
            // $arr = Kelas::where('id', $id)->first();
            // $kelas = Kelas::where('kategori', 'sd/mi')->where('kategori_kelas', 'terbatas')->get();
            // $kategori = 'SD/MI';
        }
        // echo '<pre>';
        // print_r($arr);
        // dd($arr);
        // die();
        // echo json_encode($arr);
        return response()->json($arr);
        // exit();
    }
}
