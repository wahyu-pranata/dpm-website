<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSubmission;
use App\Models\Submission;

class SubmissionController extends Controller
{
    public function store(StoreSubmission $request)
    {
        $submission = new Submission();
        $submission->name = $request->name;
        $submission->faculity = $request->faculity;
        $submission->generation = $request->generation;
        $submission->study_program = $request->study_program;
        $submission->submission = $request->submission;
        $submission->save();

        return response()->json(['message' => 'Submission has been added'], 200);
    }
}
