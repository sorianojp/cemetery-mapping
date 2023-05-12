@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" />
<style>
    .grave {
        position: absolute;
        /* cursor: move; */
    }
</style>
@endsection
@section('content')
<div class="container-fluid my-5">
<h1 class="text-center font-weight-bold">MAP</h1>

<div style="width: 2476px; height: 2100px;"></div>
</div>
   <div class="container-fluid my-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <div class="row">
                @foreach ($lots as $lot)
                <div class="col-sm-4 my-2">
                    <h3 class="font-weight-bold text-center d-none">{{ $lot->name }}</h3>
                    <div class="p-4 rounded-lg ">
                    <p class="font-weight-light text-center text-white d-none">Sectors</p>
                    <div style="width: 50px; height: 50px;"></div>
                        <div class="row">
                            @foreach ($lot->sectors as $sector)
                            <div class="col-sm-6">
                            <div style="width: 50px; height: 50px;"></div>
                                    <a href="{{ route('sectors.graves', $sector) }}" class="btn btn-sm btn-primary d-none">{{ $sector->name }}</a>
                                
                                <div class="p-2 rounded-lg my-1">
                                <div style="width: 50px; height: 50px;"></div>
                                    <p class="font-weight-light text-center text-white d-none">Graves</p>
                                    @foreach ($sector->graves as $grave)
                                        @if($grave->person)
                                        <a href="{{ route('persons.show', ['person' => $grave->person, 'grave_number' => $loop->iteration]) }}" class="bg-danger text-white grave text-xs" data-toggle="tooltip" data-placement="top" title="{{ $grave->person->full_name }}" data-id="{{ $grave->id }}" style="width: 50px; height: 25px; left: {{ $grave->position ? explode(',', $grave->position)[0] : 0 }}px; top: {{ $grave->position ? explode(',', $grave->position)[1] : 0 }}px;">
                                                {{ $loop->iteration }}
                                        </a>


                                        @else
                                        <a href="{{ route('persons.create', $grave) }}" class="bg-primary text-white grave" data-id="{{ $grave->id }}" style="width: 50px; height: 25px; left: {{ $grave->position ? explode(',', $grave->position)[0] : 0 }}px; top: {{ $grave->position ? explode(',', $grave->position)[1] : 0 }}px;">
                                            {{ $loop->iteration }}
                                        </a>
                                        @endif

                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    @section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<!-- <script>
    $(function() {
        $('.grave').draggable({
            stop: function(event, ui) {
                var graveId = $(this).data('id');
                var position = ui.position;
                const form = new FormData()
                form.append('position', `${position.left},${position.top}`)
                var url = `/graves/${graveId}/position`;
                axios.post(url, form).then(response => {
                        console.log(response)
                    }).catch(error => {
                        console.log(error)
                    })


            }
        });
    });
</script> -->

@endsection
@endsection
