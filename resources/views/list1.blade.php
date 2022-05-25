@extends('layout.master')
@section('title', 'index')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Book Id</th>
                <th scope="col">Supplier Id</th>
                <th scope="col">Book Name</th>
                <th scope="col">Supplier Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($supplierbooks as $book)
                <tr>
                    <th scope="row">{{ $book->supplier_book_id }}</th>
                    <td>{{ $book->book_id }}</td>
                    <td>{{ $book->supplier_id }}</td>
                    <td>{{ $book->Title }}</td>
                    <td>{{ $book->supplier_name }}</td>
                    <td>
                        {{-- <a href="{{ route('edit', $book->book_id) }}" class="btn btn-success">Edit</a> --}}
                        <form action="{{ route('delete', $book->supplier_book_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
