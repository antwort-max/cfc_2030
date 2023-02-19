<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use App\Models\Document\DocumentDocument;
use App\Models\User;
use App\Models\Config\AdministrativeArea;
use App\Models\Document\DocumentFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentDocumentController extends Controller
{
    public function index()
    {
        $data = DocumentDocument::get();
       // dd($data);
        return view('document.document.index', compact('data'))->with('info', 'Listado de documentos');
    }

    public function create()
    {
        $administrative_area = AdministrativeArea::pluck('name', 'id');
        $user = User::pluck('name', 'id');
        $document_file = DocumentFile::pluck('name', 'id');

        return view('document.document.create', compact('administrative_area', 'user', 'document_file'));
    }

    public function store(Request $request)
    {
        $document_document             = New DocumentDocument;
        $document_document->user_id    = e($request->user_id);
        $document_document->area_id    = e($request->area_id);
        $document_document->file_id    = e($request->file_id);
        $document_document->name       = e($request->name);
        $document_document->status     = e($request->status);
        $document_document->version    = e($request->version);
        $document_document->comment    = e($request->comment);

        if ($request->hasFile('file'))
        {
            $document_document->file  = $request->file('file')->store('document', 'public');
            $document_document->file_name = $request->file('file')->getClientOriginalName();
        }
        $document_document->save();
    }

    public function show($id)
    {
        $document_document = DocumentDocument::findOrFail($id);
       // dd($document_document);
        return view('document.document.show', compact('document_document'));
    }

    public function edit(DocumentDocument $documentDocument)
    {
        //
    }

    public function update(UpdateDocumentDocumentRequest $request, DocumentDocument $documentDocument)
    {
        //
    }

    public function destroy(DocumentDocument $documentDocument)
    {
        //
    }
}
