<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\LessonModel;

class LessonController extends Controller
{
    public function index()
    {
        $data = LessonModel::paginate(5);
        return view('Lesson.index', compact('data'));
    }

    public function create()
    {
        return view('Lesson.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nama_matpel' => $request->nama_matpel,
            'desc_matpel' => $request->desc_matpel,
            'linkV' => $request->linkV // Menambahkan key 'linkV' sesuai kolom pada tabel lesson
        ];

        LessonModel::create($data);
        return redirect()->route('Lesson.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function search(Request $request)
    {
        $katakunci = $request->get('katakunci');

        $data = LessonModel::where('nama_matpel', 'like', '%' . $katakunci . '%')
            ->orWhere('desc_matpel', 'like', '%' . $katakunci . '%')
            ->orWhere('linkV', 'like', '%' . $katakunci . '%')
            ->paginate(5);

        return view('Lesson.index', compact('data'));
    }

    public function edit($id)
    {
        // Mendapatkan data lesson berdasarkan $id (misal menggunakan LessonModel)
        $lesson = LessonModel::find($id);
        // Inisialisasi variabel $mode dengan nilai 'edit'
        $mode = 'edit';
        return view('lesson.edit', compact('lesson', 'mode'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        // Validasi input dari form jika diperlukan
        $request->validate([
            'nama_matpel' => 'required',
            'desc_matpel' => 'required',
            'linkV' => 'required',
        ]);
    
        // Cari data lesson berdasarkan ID
        $lesson = LessonModel::find($id);
    
        if ($lesson) {
            // Update data lesson dengan data baru dari form
            $lesson->update([
                'nama_matpel' => $request->nama_matpel,
                'desc_matpel' => $request->desc_matpel,
                'linkV' => $request->linkV,
            ]);
    
            // Redirect ke halaman index lesson dengan pesan sukses
            return redirect()->route('Lesson.index')->with('success', 'Data berhasil diperbarui.');
        }
    
        // Jika data lesson tidak ditemukan, redirect ke halaman index lesson dengan pesan error
        return redirect()->route('Lesson.index')->with('error', 'Data tidak ditemukan.');
    }
    
    public function destroy(string $id): RedirectResponse
    {
        // Cari data lesson berdasarkan ID
        $lesson = LessonModel::find($id);
    
        if ($lesson) {
            // Hapus data lesson
            $lesson->delete();
    
            // Redirect ke halaman index lesson dengan pesan sukses
            return redirect()->route('Lesson.index')->with('success', 'Data berhasil dihapus.');
        }
    
        // Jika data lesson tidak ditemukan, redirect ke halaman index lesson dengan pesan error
        return redirect()->route('Lesson.index')->with('error', 'Data tidak ditemukan.');
    }
}
