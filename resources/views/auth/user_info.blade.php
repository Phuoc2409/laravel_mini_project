<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Information</title>
    <link href="{{ asset('Eshopper/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('AddToCart/cart.css') }}" rel="stylesheet">
</head>

<body>
    @include('components.header.header-top')
    <div class="container">
        <div class="col-sm-6">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Tên</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tên</th>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Địa chỉ</th>
                        <td>{{ $user->address }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    @include('components.footer')
</body>

</html>
