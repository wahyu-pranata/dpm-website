<?php

namespace App\Http\Controllers\Admin\Document;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Http\Requests\StoreDocument;
use App\Http\Requests\UpdateDocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        return view('admin.document', compact('documents'));
    }

    public function store(StoreDocument $request)
    {
        $document =  new Document();
        $document->title = $request->title;
        $document->description = $request->description;
        $document->user_id = $request->user_id;

        if($request->file('image_path')){            
            $image_path = $request->file('image_path')->store(Document::IMAGE_PATH);
            $document->image_path = $image_path;
        }

        if($request->file('file_path')){            
            $file_path = $request->file('file_path')->store(Document::FILE_PATH);
            $document->file_path = $file_path;
        }

        $document->save();
        
        return response()->json(['message' => 'Document has been added'], 200);
    }

    public function destroy(Document $document)
    {
        if($document->image_path)
                Storage::delete($document->image_path);

        if($document->file_path)
                Storage::delete($document->file_path);

        $document->delete();

        return response()->json(['message' => 'Document has been deleted'], 200);
    }

    public function update(UpdateDocument $request, Document $document)
    {
        $document->title      = $request->title;
        $document->description = $request->description;

        if($request->file('image_path')){
            if($document->image_path)
                Storage::delete($document->image_path);
            
            $image_path = $request->file('image_path')->store(Document::IMAGE_PATH);
            $document->image_path = $image_path;
        }

        if($request->file('file_path')){
            if($document->file_path)
                Storage::delete($document->file_path);
            
            $file_path = $request->file('file_path')->store(Document::FILE_PATH);
            $document->file_path = $file_path;
        }

        $document->save();
        
        return response()->json(['message' => 'Document has been updated'], 200);
    }
}
