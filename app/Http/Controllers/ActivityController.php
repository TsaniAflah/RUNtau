<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function readdata()
    {
        // ambil data dari table activity
        $activity = DB::table('activity')->get();

        // mengirim ke file activity untuk ditampilkan data
        return view('activity', ['activity' => $activity]);
    }

    //untuk mengirim data dari file activity
    public function input()
    {
        return view('activity');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam database
        DB::table('activity')->insert([
            'Course' => $request->Course,
            'Time' => $request->Time,
            'Date' => $request->Date,
            'Classroom' => $request->Classroom,
            'Lecturer' => $request->Lecturer
        ]);

        return redirect('/tampildata');
    }

    public function edit($course)
    {
        #ambil data ativity dari Course
        $activity = DB::table('activity')->where('Course', $course)->get();
        #passing data
        return view('edit', ['activity' => $activity]);
    }

    public function update(request $request)
    {
        DB::table('activity')->where('Course', $request->Course)->update([
            'Course' => $request->Course,
            'Time' => $request->Time,
            'Date' => $request->Date,
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
