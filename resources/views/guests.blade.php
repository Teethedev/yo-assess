<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            tr:nth-child(even) {
               background-color: #f2f2f2
             }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           <table border="1">
    <thead>
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>ID Number</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
    @foreach($guests as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->first_name }}</td>
            <td>{{ $value->last_name }}</td>
            <td>{{ $value->id_number }}</td>
            <td>
                 <a href="{{ URL::to('guest/checkout/' . $value->booking->id ) }}">Checkout</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
        </div>
    </body>
</html>
