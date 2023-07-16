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
        $data = pegawai::orderBy('nama', 'asc');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('aksi', function ($data) {
                return view('pegawai.tombol')->with('data', $data);
            })
            ->make(true);
    }
    public function create(): Response
    {
    dd('create');
    }
    public function store(Request $request): RedirectResponse
    {
    dd('store');
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
    