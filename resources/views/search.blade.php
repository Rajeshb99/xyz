@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Search</h1>

        <form action="{{ url('/search') }}" method="get">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="description">Product Description:</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter product description">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        @if(isset($results))
            <h2>Search Results</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($results as $result)
                        <tr>
                            <td>{{ $result->name }}</td>
                            <td>{{ $result->category->name }}</td>
                            <td>{{ $result->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
