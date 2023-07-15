@extends('admin.master')

@section('title')
    <title>Ticket</title>
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- /.col -->
                <div class="col-sm-6">
                    <h1 class="m-0">Tiket</h1>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Data</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                    placeholder="Masukkan Title">
                            </div>
                            <div class="form-group">
                                <label for="event_id">Nama Event</label>
                                <select name="event_id" id="event_id" class="form-control">
                                    <option value="">Pilih</option>
                                    @foreach ($events as $event)
                                        <option value="{{ $event->id }}">{{ $event->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
