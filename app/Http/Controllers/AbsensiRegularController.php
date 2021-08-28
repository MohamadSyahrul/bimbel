<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Absensi;
use App\AbsensiUser;
use App\User;
use App\Transaksi;

class AbsensiRegularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function sd_mi()
    {
        $kelas = Kelas::where('kategori', 'sd/mi')->where('kategori_kelas', 'regular')->get();
        $kategori = 'SD/MI';
        return view('admin.absen.kelasRegular.index', compact(['kelas', 'kategori']));
    }

    public function smp_mts()
    {
        $kelas = Kelas::where('kategori', 'smp/mts')->where('kategori_kelas', 'regular')->get();
        $kategori = 'SMP/MTS';
        return view('admin.absen.kelasRegular.index', compact(['kelas', 'kategori']));
    }

    public function sma_ips()
    {
        $kelas = Kelas::where('kategori', 'sma/ma-ips')->where('kategori_kelas', 'regular')->get();
        $kategori = 'SMA/MA-IPS';
        return view('admin.absen.kelasRegular.index', compact(['kelas', 'kategori']));
    }

    public function sma_ipa()
    {
        $kelas = Kelas::where('kategori', 'sma/ma-ipa')->where('kategori_kelas', 'regular')->get();
        $kategori = 'SMA/MA-IPA';
        return view('admin.absen.kelasRegular.index', compact(['kelas', 'kategori']));
    }

    public function sbmptn()
    {
        $kelas = Kelas::where('kategori', 'sbmptn')->where('kategori_kelas', 'regular')->get();
        $kategori = 'SBMPTN';
        return view('admin.absen.kelasRegular.index', compact(['kelas', 'kategori']));
    }

    public function kedinasan()
    {
        $kelas = Kelas::where('kategori', 'kedinasan')->where('kategori_kelas', 'regular')->get();
        $kategori = 'KEDINASAN';
        return view('admin.absen.kelasRegular.index', compact(['kelas', 'kategori']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Absensi::create($request->all());

        return back()->with('status', 'Data berhasil ditambahkan !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $absen = Absensi::find($id);
        $kelas = Kelas::find($absen->id_kelas);
        $absensi_user = AbsensiUser::where('absensi_id', $id)->get();
        // dd($user);

        return view('admin.absen.kelasRegular.detail-absen', compact(['absen', 'kelas', 'absensi_user']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Absensi::destroy($id);

        return back()->with('status', 'Data berhasil dihapus !!');
    }

    public function tambah_siswa($id)
    {
        $absen = Absensi::find($id);
        $user = Transaksi::where('kelas_id', $absen->id_kelas)
                        ->where('status_bayar', 'lunas')
                        ->get();

        if($user->count() > 0) {
            foreach($user as $u) {
                AbsensiUser::create([
                    'user_id' => $u->user_id,
                    'absensi_id' => $absen->id,
                ]);
            }

            return back()->with('status', 'Siswa berhasil ditambahkan !!');
        }

        return back()->with('status', 'Tidak terdapat siswa pada kelas ini !!');
    }

    public function absen_update($id, $status) {
        $absensi_user = Absensiuser::find($id);

        switch($status) {
            case 'hadir':
                $status_absen = 'hadir';
                break;
            case 'izin':
                $status_absen = 'izin';
                break;
            case 'tidak':
                $status_absen = 'tidak hadir';
                break;
            default:
                break;
        }

        $absensi_user->update([
            'status' => $status_absen
        ]);

        return back()->with('status', 'Status absen berhasil diperbarui !!');
    }
}
