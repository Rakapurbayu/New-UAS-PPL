<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseModel;

class CourseController extends Controller
{
    public function index()
    {
        $data = CourseModel::paginate(5);
        return view('Course.index', compact('data'));
    }

    public function create(): Response
    {
        return view('Course.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = [
            'nama_khursus' => $request->nama_khursus,
            'desc_khursus' => $request->desc_khursus,
            'sumber_khursus' => $request->sumber_khursus
        ];
        CourseModel::create($data);
        return redirect()->route('Course.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show(string $id): Response
    {
        // Mengambil data course berdasarkan $id (misal menggunakan CourseModel)
        $course = CourseModel::find($id);
        return view('Course.show', compact('course'));
    }

    public function edit(string $id): Response
    {
        // Mengambil data course berdasarkan $id (misal menggunakan CourseModel)
        $course = CourseModel::find($id);
        // Inisialisasi variabel $mode dengan nilai 'edit'
        $mode = 'edit';
        return view('Course.edit', compact('course', 'mode'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $data = [
            'nama_khursus' => $request->nama_khursus,
            'desc_khursus' => $request->desc_khursus,
            'sumber_khursus' => $request->sumber_khursus
        ];
        CourseModel::where('id', $id)->update($data);
        return redirect()->route('Course.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(string $id): RedirectResponse
    {
        CourseModel::destroy($id);
        return redirect()->route('Course.index')->with('success', 'Data berhasil dihapus.');
    }
    public function search(Request $request)
{
    $katakunci = $request->get('katakunci');

    $data = CourseModel::where('nama_matpel', 'like', '%' . $katakunci . '%')
                       ->orWhere('desc_matpel', 'like', '%' . $katakunci . '%')
                       ->orWhere('linkV', 'like', '%' . $katakunci . '%')
                       ->paginate(5);

    return view('Course.index', compact('data'));
}

}
