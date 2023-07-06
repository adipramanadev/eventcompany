@extends('admin.master')

@section('title')
    <title>{{ __('Event Edit') }}</title>
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- /.col -->
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Event Edit') }}</h1>
                </div><!-- /.col -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    {{-- session errors --}}
                    @if ($errors->any() > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Event Page</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('events.update', $events->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" value="{{ $events->title }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" rows="5" class="form-control">{{ $events->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Kategori</label>
                                    <select name="category_id" class="form-control">
                                        <option value="0">Pilih</option>
                                        {{-- get category --}}
                                        @foreach ($categories as $category)
                                            {{-- jika kondisi {{ $category->id }} sama dengan {{ $events->category_id }} maka selected --}}
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == $events->category_id ? 'selected' : '' }}>
                                                {{ $category->namakategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="date">Tanggal</label>
                                    {{-- get date from database --}}
                                    <input type="date" name="start_time" value="{{ $events->start_time }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="venue">Venue</label>


                                    <input type="text" name="venue" value="{{ $events->venue }}" class="form-control">
                                </div>
                                <button type="submit" class="float-right btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
