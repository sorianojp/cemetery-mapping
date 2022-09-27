@extends('layouts.app')

@section('content')


<div class="container my-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('persons.store', $grave) }}" method="POST">
            @csrf
            <h1>Grave {{ $grave->id }}</h1>

            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Lastname:</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Firstname:</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Middle Initial:</label>
                        <input type="text" name="mi" class="form-control" placeholder="Middle Initial">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Born:</label>
                        <input type="date" name="born" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Died:</label>
                        <input type="date" name="died" class="form-control">
                    </div>
                </div>

                <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
</div>
@endsection
