<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Kelas;

class JadwalTerbatasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->ajax()) {

            $data = Jadwal::where('kategori_kelas', 'terbatas')
                ->whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get();

            return response()->json($data);
        }

        $kelas = Kelas::where('kategori_kelas', 'terbatas')->get();
        return view('admin.jadwal.terbatas.index', compact('kelas'));
    }

    public function jadwal(Request $request)
    {
        switch ($request->type) {

            // Add jadwal
            case 'add':
                $event = Jadwal::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                    'kelas_id' => $request->kelas_id,
                    'kategori_kelas' => 'terbatas'
                ]);

                return response()->json($event);
                break;

            // Update Jadwal        
            case 'update':
                $event = Jadwal::find($request->id)->update([
                    'start' => $request->start,
                    'end' => $request->end,
                ]);

                return response()->json($event);
                break;

            // Delete Jadwal    
            case 'delete':
                $event = Jadwal::find($request->id)->delete();

                return response()->json($event);
                break;

            default:
                break;
        }
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
        // Jadwal::create($request->all());

        // return back()->with('status', 'Jadwal berhasil disimpan !');
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
