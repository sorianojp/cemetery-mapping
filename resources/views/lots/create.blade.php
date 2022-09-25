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
        
        <form action="{{ route('lots.store') }}" method="POST">
            @csrf
        
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Lot Name:</label>
                                <input type="text" name="name" class="form-control" placeholder="Lot Name">
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        
        </form>
</div>
@endsection