<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotulenController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_user'        => 'required|integer',
            'id_bagian'      => 'required|integer',
            'tgl'            => 'required|date',
            'tahunajaran'    => 'required|string',
            'agenda'         => 'nullable|string',
            'kesimpulan'     => 'nullable|string',
            'id_guru'        => 'nullable|integer',
            'status'         => 'required|in:pending,approved,rejected',
            'tempat'         => 'nullable|string',
            'jenis_undangan' => 'required|in:umum,guru,siswa',
        ]);

        Notulen::create($request->all());

        return redirect()->route('notulen.index')->with('success', 'Notulen berhasil dibuat.');
    }
}
