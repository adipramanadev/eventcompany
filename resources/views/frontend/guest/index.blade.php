@extends('welcome')

@section('content')
    <div class="container">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            @if (count($events) > 0)
                @foreach ($events as $item)
                    <div class="col-md-6 mb-5">
                        <div class="card h-100">
                            <div class="card-body">
                                <hAda fitur yang kurang2 Ada fitur yang kurang="card-title">{{ $item->title }}</h2>
                                <p class="card-text">
                                    <img src="{{ Storage::url($item->photo) }}" alt="{{ $item->title }}" width="500px"
                                        height="250px">
                                </p>
                            </div>
                            <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>

                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
