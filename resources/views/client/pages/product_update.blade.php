<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/userAuth.css">
</head>

<body>

    <div class="main-block">
        <h1>Update Product</h1>
        <form action="{{route('product_update')}}" method="post" enctype="multipart/form-data">
            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif

            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">

            <hr>
            <label id="icon" for="name"></label>
            <input type="text" name="name" id="name" value="{{$product->name}}" autocomplete="off" />
            <span class="text text-danger">
                @error('name')
                    {{ $message }}
                @enderror
            </span>

            <label id="icon" for="quantity"></label>
            <input type="text" name="quantity" id="name" value="{{$product->quantity}}" autocomplete="off" />
            <span class="text text-danger">
                @error('quantity')
                    {{ $message }}
                @enderror
            </span>

            <label id="icon" for="price"></label>
            <input type="text" name="price" id="name" value="{{$product->price}}" autocomplete="off" />
            <span class="text text-danger">
                @error('price')
                    {{ $message }}
                @enderror
            </span>

            <div class="btn-block">
                <button type="submit">Update</button>
            </div>

            <hr>
            <div class="btn-block">
                <button type="button"><a href="{{ route('product_table') }}"
                        style="text-decoration:none; color: white;">See Product Table</a></button>
            </div>
        </form>
    </div>

</body>

</html>
