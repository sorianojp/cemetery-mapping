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
        
        <form action="{{ route('sectors.store') }}" method="POST">
            @csrf
        
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Sector Name:</label>
                                <input type="text" name="name" class="form-control" placeholder="Sector Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Select Lot</label>
                                <select class="form-control" name="lot_id">
                                @foreach ($lots as $lot)
                                <option value="{{ $lot->id }}">{{ $lot->name }}</option>
                                @endforeach
                                </select>
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