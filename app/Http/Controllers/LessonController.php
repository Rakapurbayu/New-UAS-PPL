<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Models\LessonModel;

class LessonController extends Controller
{
    public function index()
    {
    return view ('Admin.index');
    }

    public function create()
    {
    return view ('Admin.create');
    }

    public function store(Request $request)
    {
    $data=[
        'id' => $request->id,
        'nama_matpel' => $request->nama_matpel,
        'desc_matpel' => $request->desc_matpel,
        'link_video' => $request->linkV
    ];
    LessonModel::create($request->all());
    return view ('index');
    }     
      public function search(Request $request)
      {
          $katakunci = $request->get('katakunci');
      
          $data = LessonModel::where('nama_matpel', 'like', '%'.$katakunci.'%')
              ->orWhere('desc_matpel', 'like', '%'.$katakunci.'%')
              ->orWhere('linkV', 'like', '%'.$katakunci.'%')
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
    dd('update');
    }
    public function destroy(string $id): RedirectResponse
    {
    dd('store');
    }
    }
    