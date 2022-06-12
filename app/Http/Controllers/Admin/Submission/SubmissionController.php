<?php

namespace App\Http\Controllers\Admin\Submission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSubmission;
use App\Models\Submission;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions = Submission::all();
        return view('admin.submission', compact('submissions'));
    }

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

    public function destroy(Submission $submission)
    {
        $submission->delete();

        return response()->json(['message' => 'Submission has been deleted'], 200);
    }
}
