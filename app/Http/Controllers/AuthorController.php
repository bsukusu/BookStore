<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Http\Requests\AuthorRequest;

class AuthorController extends Controller
{
    public function show(Author $authors)
    {
        $authors = Author::all();
        return view('authors', compact('authors'));
    }
    public function create(Author $authors)
    {
        return view('admin.author-create');
    }

    public function store(AuthorRequest $request)
    {
        Author::create([
    'name' =>$request->name,
    ]);
        return redirect('authors')->with('message', 'successfully created.');
    }
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect('authors')->with('message', 'successfully deleted.');
    }
    public function update(AuthorRequest $request, Author $author)
    {
        $author->update([
               'name' =>$request->name
               ]);
        return redirect('authors')->with('message', 'successfully updated.');
    }
    public function edit(Author $author)
    {
        $author = Author::all()->first();
        return view('admin.author-update', compact('author'));
    }
}
