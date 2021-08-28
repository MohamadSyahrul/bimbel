<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Jadwal;
use App\Kelas;
use App\Transaksi;
use App\ProfileOrtu;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $profileOrtu = ProfileOrtu::where('user_id', Auth::user()->id)->first();
        if ($request->ajax()) {

            $kelas = Transaksi::where('user_id', $profileOrtu->siswa_id)
                ->where('status_bayar', 'lunas')
                ->select('kelas_id')
                ->get();

            $data = Jadwal::whereIn('kelas_id', $kelas)
                ->whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get();

            return response()->json($data);
        }

        // $kelas = Kelas::where('kategori_kelas', 'terbatas')->get();
        return view('ortu.jadwal');
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
    }
}
