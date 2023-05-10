@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" />
<style>
    .grave {
        position: absolute;
        cursor: move;
    }
</style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                @if($sector->name == 'EMERALD')
                    <img src="{{ asset('images/phase1/EMERALD.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'RUBY')
                    <img src="{{ asset('images/phase1/RUBY.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'GARNET')
                    <img src="{{ asset('images/phase1/GARNET.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'AMETHYST')
                    <img src="{{ asset('images/phase1/AMETHYST.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'DIAMOND 1')
                    <img src="{{ asset('images/phase1/DIAMOND 1.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'DIAMOND 2')
                    <img src="{{ asset('images/phase1/DIAMOND 2.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'PEARL')
                    <img src="{{ asset('images/phase1/PEARL.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'OPAL')
                    <img src="{{ asset('images/phase1/OPAL.jpg') }}" class="img-fluid">


                    @elseif($sector->name == 'CITRINE')
                    <img src="{{ asset('images/phase2/CITRINE.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'SAPPHIRE')
                    <img src="{{ asset('images/phase2/SAPPHIRE.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'PERIDOT')
                    <img src="{{ asset('images/phase2/PERIDOT.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'TOPAZ')
                    <img src="{{ asset('images/phase2/TOPAZ.jpg') }}" class="img-fluid">



                    @elseif($sector->name == 'ZIRCON')
                    <img src="{{ asset('images/phase3/ZIRCON.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'ONYX')
                    <img src="{{ asset('images/phase3/ONYX.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'ALEXANDRITE')
                    <img src="{{ asset('images/phase3/ALEXANDRITE.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'SARDONYX')
                    <img src="{{ asset('images/phase3/SARDONYX.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'AQUAMARINE')
                    <img src="{{ asset('images/phase3/AQUAMARINE.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'TURQUOISE')
                    <img src="{{ asset('images/phase3/TURQUOISE.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'TOURMALINE')
                    <img src="{{ asset('images/phase3/TOURMALINE.jpg') }}" class="img-fluid">
                    @elseif($sector->name == 'MOONSTONE')
                    <img src="{{ asset('images/phase3/MOONSTONE.jpg') }}" class="img-fluid">

                    @else
                        <p>Location Image Not Set!</p>
                @endif
            </div>
            <div class="col-sm-8">
                <h1 class="my-5">{{ $sector->name }} Graves</h1>
                @foreach($graves as $grave)
                    @if($grave->person)
                    <a href="{{ route('persons.show', ['person' => $grave->person, 'grave_number' => $loop->iteration]) }}" class="btn btn-sm btn-danger grave" data-toggle="tooltip" data-placement="top" title="{{ $grave->person->full_name }}" data-id="{{ $grave->id }}" style="left: {{ $grave->position ? explode(',', $grave->position)[0] : 0 }}px; top: {{ $grave->position ? explode(',', $grave->position)[1] : 0 }}px;">
                            {{ $loop->iteration }}
                            <!-- {{ $grave->id }} -->
                        </a>
                    @else
                        <a href="{{ route('persons.create', $grave) }}" class="btn btn-sm btn-primary grave" data-id="{{ $grave->id }}" style="left: {{ $grave->position ? explode(',', $grave->position)[0] : 0 }}px; top: {{ $grave->position ? explode(',', $grave->position)[1] : 0 }}px;">
                            {{ $loop->iteration }}
                            <!-- {{ $grave->id }} -->
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script>
    $(function() {
        $('.grave').draggable({
            stop: function(event, ui) {
                var graveId = $(this).data('id');
                var position = ui.position;
                // $.ajax({
                //     url: '/graves/' + graveId + '/position',
                //     method: 'PUT',
                //     data: {
                //         _token: '{{ csrf_token() }}',
                //         position: position.left + ',' + position.top
                //     }
                // });
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
</script>

@endsection
@endsection
