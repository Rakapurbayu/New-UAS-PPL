<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
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
    LessonModel::create($data);
    return view ('Admin.index');
    }
    public function show(string $id): Response
    {
    dd('show');
    }
    public function edit(string $id): Response
    {
    dd('edit');
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
    