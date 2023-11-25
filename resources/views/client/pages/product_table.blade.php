@extends('client.layouts.masterlayout')

@section('content')
<h1 style="text-align: center; margin-top: 20px;">Products Table</h1>

<table class="table table-dark table-striped" >
    <thead>
        <tr>
            <th scope="col" style="padding-left: 30px">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <th scope="row" style="padding-left: 30px">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>
            <td>
                <form action="{{route('product_delete')}}" method="get">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                <form action="{{route('product_edit')}}" method="get">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <button type="submit">Update</button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
@endsection