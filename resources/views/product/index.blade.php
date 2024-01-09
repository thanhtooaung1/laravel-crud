@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body shadow">
                        <a class="btn btn-success btn-sm mb-3" href="{{ route('product.create') }}"><i
                                class="fa-solid fa-plus"></i></a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->size }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('product.edit', $product->id) }}"
                                                    class="btn btn-outline-warning me-2">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a>

                                                <a href="{{ route('product.show', $product->id) }}"
                                                    class="btn btn-outline-info me-2">
                                                    <i class="fas fa-info"></i>
                                                </a>

                                                <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-outline-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
