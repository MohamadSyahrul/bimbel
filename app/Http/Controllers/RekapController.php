<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\AbsensiUser;
use App\Kelas;
use App\User;
use DateTime;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    public function index() 
    {   
        $kelas = Kelas::all();
        $absen = Absensi::all();
        $absen = AbsensiUser::all();
        $user  = User::all();
        return view('admin.rekapabsen.rekapabsen', compact('kelas'));
    }

    public function getData($id = 0, $dateStart = 0, $dateEnd = 0)
    {   
        // $dateStart = date('Y-m-d');
        // $dateEnd = date('Y-m-d');
        // dd($dateStart, $dateEnd);
        if ($id == 0) {
            $arr['data'] = Absensi::orderBy('id_kelas', 'asc')->get();
            $arr['kelas'] = Kelas::orderBy('id', 'asc')->get();
            $arr['siswa'] = User::orderBy('id', 'asc')->get();
            
            $j = 0;
            $k = 0;
            
            
            foreach($arr['kelas'] as $row) {
                $absensi = Absensi::where('id_kelas', $row->id)->get();
                foreach($absensi as $i){
                    $idabsensi = $i->id;
                    $idkelas = $row->id;
                    $arr[$k][$j]['total']  = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                    ->where('absensi_id', $idabsensi)->where('id_kelas', $idkelas)->count();
                    $arr[$k][$j]['hadir']  = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                    ->where('status','hadir')->where('absensi_id', $idabsensi)->where('id_kelas', $idkelas)->count();
                    $arr[$k][$j]['thadir'] = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                    ->where('status','tidak hadir')->where('absensi_id', $idabsensi)->where('id_kelas', $idkelas)->count();
                    $arr[$k][$j]['izin']   = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                    ->where('status','izin')->where('absensi_id', $idabsensi)->where('id_kelas', $idkelas)->count();
                    $arr[$k][$j]['none']   = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                    ->where('status', 'none')->where('absensi_id', $idabsensi)->where('id_kelas', $idkelas)->count();
                    $j++;
                }
                $k++;
            }
        }else{
            $arr['data'] = AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
            ->join('users', 'users.id', '=', 'absensi_users.user_id')->where('id_kelas', $id)
            ->where('id_kelas', '=', $id)->whereBetween('tanggal',[$dateStart,$dateEnd])->get();
            $arr['kelas'] = Kelas::where('id', $id)->get();
            // $arr['user'] = Kelas::all();
            
            $j = 0;
            // $k = 0;
            foreach($arr['data'] as $i){
                $idabsensi   = $i->id;
                $id_user     = $i->user_id;
                    $arr[$j]['total']  = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                    ->where('absensi_id', $idabsensi)->where('absensi_id', $id)->where('user_id', $id_user)
                    ->count();
                    $arr[$j]['hadir']  = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                    ->where('status','hadir')->where('absensi_id', $idabsensi)->where('id_kelas', $id)->where('user_id', $id_user)
                    ->count();
                    $arr[$j]['thadir'] = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                    ->where('status','tidak hadir')->where('absensi_id', $idabsensi)->where('id_kelas', $id)->where('user_id', $id_user)
                    ->count();
                    $arr[$j]['izin']   = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                    ->where('status','izin')->where('absensi_id', $idabsensi)->where('id_kelas', $id)->where('user_id', $id_user)
                    ->count();
                    $arr[$j]['none']   = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                    ->where('status','none')->where('absensi_id', $idabsensi)->where('id_kelas', $id)->where('user_id', $id_user)
                    ->count();
                $j++;
            }
        }
        // echo '<pre>';
        // print_r($arr);
        // dd($arr['data'],$id,$i->id,$arr['total']);
        // dd($arr);
        // die();
        // echo json_encode($arr);
        return response()->json($arr);
        // exit();
    }
}
