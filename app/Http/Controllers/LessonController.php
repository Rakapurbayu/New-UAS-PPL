<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades;
use App\Models\LessonModel;

class LessonController extends Controller
{
    public function index()
    {
        $data = LessonModel::orderBy('id')->paginate(5);
        return view('Admin.index', compact('data'));
    }    

    public function create()
    {
    return view ('Admin.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'nama_matpel'=>'required',
        'desc_matpel'=>'required',
        'linkV'=>'required|unique:lesson,LinkV'
    ],
    [
        'nama_matpel.required'=>'Nama Mata Pelajaran Wabjib Diisi',
        'desc_matpel.required'=>'Deskripsi Mata Pelajaran Wabjib Diisi',
        'linkV.unique'=>'Link Sudah Ada',
        'linkV.required'=>'Link Mata Pelajaran Wabjib Diisi',
    ]);
    $data = [
        'nama_matpel' => $request->nama_matpel,
        'desc_matpel' => $request->desc_matpel,
        'linkV' => $request->linkV
    ];
    $lesson=LessonModel::create($data);
    if ($lesson){
        return redirect()->route('Lesson.index')->with('success','Data Berhasil Disimpan');
    }

      }
    public function show(string $id): Response
    {
    dd('show');
    }
    public function edit($id)
    {
    // Mendapatkan data lesson berdasarkan $id (misal menggunakan LessonModel)
    $lesson = LessonModel::find($id);
    // Inisialisasi variabel $mode dengan nilai 'edit'
    $mode = 'edit';
    return view('Admin.edit', compact('lesson', 'mode'));
    }
    public function update(Request $request, string $id): RedirectResponse
    {
    $request->validate([
        'nama_matpel' => 'required',
        'desc_matpel' => 'required',
        'linkV' => 'required|unique:lesson,linkV,' . $id // Menambahkan $id untuk mengabaikan data saat ini pada validasi unik
    ], [
        'nama_matpel.required' => 'Nama Mata Pelajaran Wajib Diisi',
        'desc_matpel.required' => 'Deskripsi Mata Pelajaran Wajib Diisi',
        'linkV.unique' => 'Link Sudah Ada',
        'linkV.required' => 'Link Mata Pelajaran Wajib Diisi',
    ]);

    // Ambil data berdasarkan ID
         $lesson = LessonModel::find($id);

    if (!$lesson) {
        // Data tidak ditemukan, lakukan sesuatu (misalnya tampilkan pesan kesalahan atau alihkan pengguna)
    }

        // Update data dengan data baru
         $lesson->nama_matpel = $request->nama_matpel;
        $lesson->desc_matpel = $request->desc_matpel;
         $lesson->linkV = $request->linkV;
         $lesson->save();

        return redirect()->route('Lesson.index')->with('success', 'Data Berhasil Diperbarui');
    }
    public function destroy(string $id): RedirectResponse
    {
        $lesson = LessonModel::find($id);
        $lesson->delete();
        return redirect()->route('Lesson.index')->with('success', 'Data berhasil dihapus.');
    }
    }
    