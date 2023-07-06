@extends('admin.master')

@section('title')
    <title>{{ __('Event') }}</title>
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- /.col -->
                <div class="col-sm-6">
                    <h1 class="m-0">Event</h1>
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
                            <h3 class="card-title">Form Tambah Data</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('events.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Kategori</label>
                                    <select name="category_id" class="form-control">
                                        <option value="0">Pilih</option>
                                        {{-- get category --}}
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->namakategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="date">Tanggal</label>
                                    <input type="date" name="start_time" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="venue">Venue</label>
                                    <input type="text" name="venue" class="form-control">
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
