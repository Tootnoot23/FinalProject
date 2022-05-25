@extends('layout.master')
@section('title', 'index')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $book->book_id }}</th>
                    <td>{{ $book->Nama }}</td>
                    <td>Rp{{ $book->Harga }}</td>
                    <td>{{ $book->Jumlah }}</td>
                    <td><a href="/categories/{{ $book->Category->name }}"> {{ $book->Category->name }}</a></td>

                    <td>
                        <a href="{{ route('edit', $book->book_id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('delete', $book->book_id) }}" method="POST">
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
