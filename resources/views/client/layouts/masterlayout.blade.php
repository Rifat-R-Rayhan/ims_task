<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventory Managment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <!-- Navbar content -->
        <div class="container-fluid">
            <button class="btn btn-outline-success" type="button"><a href="{{route('dashboard')}}"
                style="text-decoration:none; color: white;">Home</a></button>
            <button class="btn btn-outline-success" type="button"><a href="{{route('product_table')}}"
                style="text-decoration:none; color: white;">See Product Table</a>
            </button>
            <button class="btn btn-outline-success" type="button"><a href="{{route('product_add')}}"
                    style="text-decoration:none; color: white;">Add Product</a></button>

            <form class="d-flex" role="search" action="{{route('product_search')}}">
                @csrf
                <input class="form-control me-2" type="search" name="search" placeholder="Product name" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <button class="btn btn-sm btn-outline-secondary" type="button"><a href="{{ route('logout') }}"
                    style="text-decoration:none; color: white;">Logout</a></button>
        </div>
    </nav>


    <main>
        @hasSection('content')
            @yield('content')
        @else
            <h2 style="text-align: center">No content found</h2>
        @endif
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
