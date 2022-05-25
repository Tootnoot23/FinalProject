<?php

namespace App\Http\Controllers;

use App\Models\SupplierBook;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreSupplierBookRequest;
use App\Http\Requests\UpdateSupplierBookRequest;

class SupplierBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupplierBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SupplierBook  $supplierBook
     * @return \Illuminate\Http\Response
     */
    public function show(SupplierBook $supplierBook)
    {
        $supplierbooks = DB::table('supplier_books')
            ->join('books', 'supplier_books.book_id', '=', 'books.book_id')
            ->join('suppliers', 'supplier_books.supplier_id', '=', 'suppliers.supplier_id')
            ->get();
        return view('list1', compact('supplierbooks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SupplierBook  $supplierBook
     * @return \Illuminate\Http\Response
     */
    public function edit(SupplierBook $supplierBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierBookRequest  $request
     * @param  \App\Models\SupplierBook  $supplierBook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupplierBookRequest $request, SupplierBook $supplierBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SupplierBook  $supplierBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupplierBook $supplierBook)
    {
        //
    }
}
