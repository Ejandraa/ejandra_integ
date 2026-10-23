<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Validation\Rule;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success'=>true,
            'data'=>Student::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
}