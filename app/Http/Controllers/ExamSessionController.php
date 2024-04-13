<?php

namespace App\Http\Controllers;

use App\Models\ExamSession;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(String $exam_id)
    {
        $examSession = ExamSession::where('exam_id', $exam_id)->get();

        return response()->json(['exam_session' => $examSession], 200);
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
    public function show(ExamSession $examSession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExamSession $examSession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExamSession $examSession)
    {
        //
    }
}
