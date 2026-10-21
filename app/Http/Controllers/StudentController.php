<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = [
        //     [
        //         'no' => 1,
        //         'nis' => '10001',
        //         'name' => 'Muhammad Ahsan Fatahillah',
        //         'classroom' => '11 PPLG 3',
        //     ],
        //     [
        //         'no' => 2,
        //         'nis' => '10002',
        //         'name' => 'Budi Santoso',
        //         'classroom' => '11 PPLG 1',
        //     ],
        //     [
        //         'no' => 3,
        //         'nis' => '10003',
        //         'name' => 'Citra Lestari',
        //         'classroom' => '11 PPLG 2',
        //     ],
        //     [
        //         'no' => 4,
        //         'nis' => '10004',
        //         'name' => 'Dimas Pratama',
        //         'classroom' => '11 PPLG 3',
        //     ],
        //     [
        //         'no' => 5,
        //         'nis' => '10005',
        //         'name' => 'Eka Putri',
        //         'classroom' => '11 PPLG 1',
        //     ],
        //     [
        //         'no' => 6,
        //         'nis' => '10006',
        //         'name' => 'Fajar Ramadhan',
        //         'classroom' => '11 PPLG 2',
        //     ],
        //     [
        //         'no' => 7,
        //         'nis' => '10007',
        //         'name' => 'Gilang Saputra',
        //         'classroom' => '11 PPLG 3',
        //     ],
        //     [
        //         'no' => 8,
        //         'nis' => '10008',
        //         'name' => 'Hana Salsabila',
        //         'classroom' => '11 PPLG 1',
        //     ],
        //     [
        //         'no' => 9,
        //         'nis' => '10009',
        //         'name' => 'Indra Kurniawan',
        //         'classroom' => '11 PPLG 2',
        //     ],
        //     [
        //         'no' => 10,
        //         'nis' => '10010',
        //         'name' => 'Aulia ',
        //         'classroom' => '11 PPLG 1',
        //     ],
        // ];
        $students = Student::all();
        return view('admin.Student',[
            'students' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
