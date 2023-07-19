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
    return view('Admin.index');
      }
    public function show(string $id): Response
    {
    dd('show');
    }
    public function edit($item)
    {
    return 'hi'.$item;
    }
    public function update(Request $request, string $id): RedirectResponse
    {
    dd('update');
    }
    public function destroy(string $id): RedirectResponse
    {
    dd('store');
    }
    }
    