<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function readdata()
    {
        // ambil data dari table reservasi
        $activity = DB::table('activity')->get();

        // mengirim ke alamat reservasi untuk ditampilkan data
        return view('datareservasi', ['activity' => $activity]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam database
        DB::table('activity')->insert([
            'Course' => $request->Course,
            'Time' => $request->Time,
            'Classroom' => $request->Classroom,
            'Lecturer' => $request->Lecturer
        ]);

        return redirect('/tampildata');
    }

    public function edit($course)
    {
        #ambil data reservasi dari nama
        $activity = DB::table('activity')->where('Course', $course)->get();
        #passing data
        return view('edit', ['activity' => $activity]);
    }

    public function update(request $request)
    {
        DB::table('activity')->where('Course', $request->Course)->update([
            'Course' => $request->Course,
            'Time' => $request->Time,
            'Classroom' => $request->Classroom,
            'Lecturer' => $request->Lecturer
        ]);
        return redirect('/tampildata');
    }

    public function hapus($course)
    {
        DB::table('activity')->where('Course', $course)->delete();
        return redirect('/tampildata');
    }
}
