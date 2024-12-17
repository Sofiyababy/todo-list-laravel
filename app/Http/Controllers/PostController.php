<?php
namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;

use function Laravel\Prompts\text;

class PostController extends Controller
{
    public function index()
    {
        $crud_app_db = crud::all();
        return view('crud_app_db.index', compact('crud_app_db'));
    }

    public function create()
    {
        return view('crud_app_db.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'email'=> 'required',
        ]);
    
        crud::create($validatedData);
    
        return redirect()->route('crud_app_db.index')->with('success', 'Post created successfully.');
    }    

    public function show(crud $crud_app_db)
    {
        return view('crud_app_db.show', compact('crud_app_db'));
    }

    public function edit(crud $crud_app_db)
    {
        return view('crud_app_db.edit', compact('crud_app_db'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|string|max:255',
        ]);
    
        // Find the post by ID and update only validated fields
        $crud_app_db = crud::findOrFail($id);
        $crud_app_db->update($validatedData);
    
        return redirect()->route('crud_app_db.index')->with('success', 'Post updated successfully.');
    }
      

    public function destroy(crud $crud_app_db)
    {
        $crud_app_db->delete();
        return redirect()->route('crud_app_db.index')->with('success', 'Post deleted successfully.');
    }
}
