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

        <form method="POST" action="{{ route('persons.update', $person) }}">
                @csrf
                @method('PUT')

            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Lastname:</label>
                        <input type="text" name="owner_lastname" class="form-control" placeholder="Lastname" value="{{ old('owner_lastname', $person->owner_lastname) }}">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Firstname:</label>
                        <input type="text" name="owner_firstname" class="form-control" placeholder="Firstname" value="{{ old('owner_firstname', $person->owner_firstname) }}">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Middle Initial:</label>
                        <input type="text" name="owner_mi" class="form-control" placeholder="Middle Initial" value="{{ old('owner_mi', $person->owner_mi) }}">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Payment</label>
                        <select class="form-control" name="payment">
                        <option value="Paid">Paid</option>
                        <option value="Unpaid">Unpaid</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                        <option value=""></option>
                        <option value="Reserved">Reserved</option>
                        </select>
                    </div>
                </div>
                <!-- <div class="col-sm-6">
                    <div class="form-group">
                        <label>Payment</label>
                        <select class="form-control" name="payment">
                        <option value="Paid">Paid</option>
                        <option value="Unpaid">Unpaid</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                        <option value=""></option>
                        <option value="Reserved">Reserved</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    @foreach ($users as $user)
                        <div>
                            <input type="checkbox" name="relatives[]" value="{{ $user->id }}" 
                            @if($person->users->contains($user->id)) checked @endif>
                            <label>{{ $user->getFullNameAttribute() }}</label>
                        </div>
                    @endforeach
                </div> -->
                <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
</div>
@endsection
