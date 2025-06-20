<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotulenController extends Controller
{
    public function store(Request $request)
        {
            $lastUser = Notulen::max('id_user') ?? 0;
            $lastBagian = Notulen::max('id_bagian') ?? 0;
            $lastGuru = Notulen::max('id_guru') ?? 0;

            $notulen = new Notulen();
            $notulen->id_user = $lastUser + 1;
            $notulen->id_bagian = $lastBagian + 1;
            $notulen->id_guru = $lastGuru + 1;

            $notulen->tgl = $request->tgl;
            $notulen->tahunajaran = $request->tahunajaran;
            $notulen->agenda = $request->agenda;
            $notulen->kesimpulan = $request->kesimpulan;
            $notulen->status = $request->status;
            $notulen->tempat = $request->tempat;
            $notulen->jenis_undangan = $request->jenis_undangan;

            $notulen->save();

            return redirect()->route('notulen.index')->with('success', 'Data notulen berhasil disimpan.');
        }

        public function storePeserta(Request $request)
    {
        $request->validate([
            'id_notulen'     => 'required|integer',
            'nama_peserta'   => 'required|string',
            'jabatan'        => 'nullable|string',
            'jabatan_rapat'  => 'nullable|string',
            'ttd'            => 'nullable|string',
            'urutan'         => 'nullable|string|max:2',
        ]);

        PesertaNotulen::create($request->all());

        return redirect()->route('peserta_notulen.index')->with('success', 'Peserta notulen berhasil ditambahkan.');
    }
}
