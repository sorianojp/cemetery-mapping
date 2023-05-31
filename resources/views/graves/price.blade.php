@extends('layouts.app')
@section('content')
<div class="container my-5">
    @foreach ($lots as $lot)
    <div class="row">
        @foreach ($lot->sectors as $sector)
        <div class="col-sm-4">
            <h2>{{ $sector->name }}</h2>
            <table class="table table-bordered table-pagination">
                <thead>
                    <tr>
                        <th>Grave</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sector->graves as $grave)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <form action="{{ route('update_price', $grave->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input class="form-control" type="number" name="price" value="{{ $grave->price }}" onchange="this.form.submit()">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endforeach
    </div>
    @endforeach
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('.table-pagination').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'print'
            ]
        });
    });
</script>
@endsection
