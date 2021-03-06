@extends('layouts.default')

@section('title', 'Create Major')

@section('content')

    <form action="/majors" method="POST" class="form-group mt-4">
        @method('POST')
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name')  }}">
        </div>

        <div class="form-group">
            <label>Abbr</label>
            <input type="text" class="form-control" name="abbr" value="{{ old('abbr')  }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection
