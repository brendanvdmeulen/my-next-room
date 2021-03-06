@extends('layouts.app')

@section('styles')
    <style>
        .card-img-top{
            height: 200px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('partials.side-filter')
            </div>
            <div class="col-md-9">
                <div class="row room-cards">
                    @if(isset($rooms) && count($rooms) > 0)
                        @foreach($rooms as $room)
                            @include('partials.room-card')
                        @endforeach
                    @else
                        <div class="col-md-12 text-center mt-4">
                            <h3>No Rooms that match your search</h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#available_from').datepicker({
                dateFormat: 'dd-mm-yy'
            });
        });
    </script>
@endsection
