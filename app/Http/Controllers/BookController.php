<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\User;
use App\Models\ModelBook;

class BookController extends Controller
{

    private $ObjUser;
    private $ObjBook;

    public function __construct() {
        $this->ObjUser = new User();
        $this->ObjBook = new ModelBook();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = $this->ObjBook->all();
        return view('index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=$this->ObjUser->all();
        return view('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $cad=$this->ObjBook->create([
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price,
            'id_user'=>$request->id_user
        ]);
        if($cad){
            return redirect('books');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = $this->ObjBook->all()->find($id);
        return view('show', compact('book'));
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
    public function update(BookRequest $request, string $id)
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
