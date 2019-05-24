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
            <td>Room Number</td>
            <td>Status</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($rooms as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->room_number }}</td>
            <td>{{ $value->available }}</td>
            <td>
                @if ($value->available)
                 <a href="{{ URL::to('identity/' . $value->id) }}">Book</a>
                 @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
        </div>

        <a href="{{ URL::to('guest/') }}">Guests</a>
    </body>
</html>
