<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // Data dummy sementara sebelum ada database
    private array $members = [
        ['id' => 1, 'nama' => 'Fawwaz Al Ghifari', 'nim' => '3125600024', 'email' => 'fawwaz@mhs.pens.ac.id', 'nomor_telepon' => '081234567890', 'alamat' => 'Surabaya', 'status' => 'Aktif'],
        ['id' => 2, 'nama' => 'Laudy Kartika Buchori', 'nim' => '3125600022', 'email' => 'laudy@mhs.pens.ac.id', 'nomor_telepon' => '081298765432', 'alamat' => 'Surabaya', 'status' => 'Aktif'],
        ['id' => 3, 'nama' => 'Reyvan Andycka Farrel Alinskie', 'nim' => '3125600026', 'email' => 'reyvan@mhs.pens.ac.id', 'nomor_telepon' => '081233334444', 'alamat' => 'Sidoarjo', 'status' => 'Nonaktif'],
    ];

    public function index()
    {
        $members = $this->members;
        
        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(StoreMemberRequest $request)
    {
        // Jika lolos validasi, ambil datanya
        $validated = $request->validated();

        // Redirect dengan membawa pesan sukses
        return redirect()->route('members.index')
            ->with('success', "Anggota \"{$validated['nama']}\" berhasil ditambahkan (data dummy, belum tersimpan ke database).");
    }

    // Method sisanya dibiarkan return string dummy dulu (akan dibahas di modul selanjutnya)
    public function show(string $id)
    {
        return "MemberController@show, id: {$id}";
    }

    public function edit(string $id)
    {
        return "MemberController@edit, id: {$id}";
    }

    public function update(Request $request, string $id)
    {
        return "MemberController@update, id: {$id}";
    }

    public function destroy(string $id)
    {
        return "MemberController@destroy, id: {$id}";
    }
}