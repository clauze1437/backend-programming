<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # mengambil data dari database
        $students = Students::all();

        $result = [
            'pesan' => 'berhasil menampilkan data students',
            'data' => $students
        ];

        return response()->json($result, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # menangkap data dari database
        $student = Students::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);

        $result = [
            'pesan' => 'students berhasil ditambahkan',
            'data' => $student
        ];

        return response()->json($result, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show($students)
    {
        # Menampilkan 1 data students

        # jika data ada, kembalikan data itu
        # jika tidak ada, kembalikan pesan tidak ada

        # jika variable ada nilai, dan diconvert ke boolean -> true
        # jika variable tidak ada nilai, dan diconvert ke boolean -> false
        $student = Students::find($students);

        if ($student) {
            $result = [
                'pesan' => 'Get Detail Students',
                'data' => $student
            ];

            return response()->json($result, 200);
        } else {
            $result = [
                'pesan' => 'Data not found'
            ];

            return response()->json($result, 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $students)
    {
        # mengedit 1 data students

        $student = Students::find($students);

        if ($student) {
            $student->update($request->all());

            $result = [
                'pesan' => 'Update data sukses',
                'data' => $student
            ];

            return response()->json($result, 200);
        } else {
            $result = [
                'pesan' => 'Data not found'
            ];

            return response()->json($result, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($students)
    {
        # menghapus 1 data students
        $student = Students::find($students);

        if ($student) {
            $student->delete();

            $result = [
                'pesan' => 'Data berhasil dihapus',
                'data' => $student
            ];

            return response()->json($result, 200);
        } else {
            $result = [
                'pesan' => 'Data not found',
                'data' => $student
            ];

            return response()->json($result, 404);
        }
    }
}
