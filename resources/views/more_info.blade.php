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
           
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        {{ HTML::ul($errors->all()) }}
        
        {{ Form::open(array('url' => 'guest/book/checkin')) }}
            {{ Form::hidden('room', Input::get('room')) }}
            {{ Form::hidden('id_number', Input::get('id_number')) }}
           <div class="form-group">
             {{ Form::label('name', 'First Name') }}
             {{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
             {{ Form::label('name', 'Last Name') }}
             {{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
             {{ Form::label('name', 'Check In') }}
             {{ Form::input('datetime-local', 'check_in', Input::old('check_in'), array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
            {{ Form::submit('Proceed', array('class' => 'btn btn-primary')) }}
            </div>
        {{ Form::close() }}
        </div>
    </body>
</html>
