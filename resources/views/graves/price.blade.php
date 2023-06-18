@extends('layouts.app')
@section('styles')
@endsection
@section('content')
<div class="container-fluid my-5">
    @foreach ($lots as $lot)
    <div class="row">
        @foreach ($lot->sectors as $sector)
        <div class="col-sm-4">
            <h2>{{ $sector->name }}</h2>
            <button type="button" class="btn btn-sm btn-primary my-2" onclick="printJS('printJS-form', 'html')">
                Print
            </button>
            <table class="table table-bordered table-pagination" id="printJS-form">
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
    // $(document).ready(function() {
    //     $('.table-pagination').DataTable({
    //         dom: 'Bfrtip',
    //         buttons: [
    //             'print'
    //         ]
    //     });
    // });

    $(document).ready(function () {
    $('.table-pagination').DataTable();
});
</script>
@endsection
