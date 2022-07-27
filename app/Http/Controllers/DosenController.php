<?php

namespace App\Http\Controllers;

use App\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $response['status'] = true;
        $response['message'] = 'Dosen Berhasil Didapatkan';
        $response['data'] = Dosen::get();

        return json_encode($response);
    }

    public function create(Request $request)
    {
        Dosen::create([
            'nama_dosen' => $request->nama_dosen,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
        ]);

        $response['status'] = true;
        $response['message'] = 'Dosen Berhasil Di Tambahkan';

        return json_encode($response);
    }

    public function edit(Request $request)
    {
        $dosen = Dosen::find($request->id);

        $response['status'] = true;
        $response['message'] = 'Berhasil Tampilkan Dosen';
        $response['data'] = $dosen;

        return json_encode($response);
    }

    public function update(Request $request)
    {
        $dosen = Dosen::where('id', $request->id)->first();
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->jenis_kelamin = $request->jenis_kelamin;
        $dosen->jabatan = $request->jabatan;
        $dosen->save();

        if ($dosen) {
            $response['status'] = true;
            $response['message'] = 'Berhasil Update Dosen';
            $response['data'] = $dosen;
        } else {
            $response['status'] = false;
            $response['message'] = 'Gagal Update Dosen';
            $response['data'] = null;
        }

        return json_encode($response);
    }

    public function destroy(Request $request)
    {
        $dosen = Dosen::find($request->id);
        $dosen->delete();

        $response['status'] = true;
        $response['message'] = 'Dosen Berhasil Di Delete';

        return json_encode($response);
    }
}
