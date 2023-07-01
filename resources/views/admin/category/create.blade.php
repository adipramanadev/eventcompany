@extends('admin.master')

@section('title')
    <title>Tambah Data Category</title>
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- /.col -->
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Category</h1>
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
                {{-- session flash error --}}

                @if (session('error'))
                    @alert(['type' => 'danger'])
                    {!! session('error') !!}
                    @endalert
                @endif
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Tambah Data Category Event
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Kategori</label>
                                    <input type="text" required placeholder="Nama Kategori Event" name="namakategori"
                                        class="form-control">
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
