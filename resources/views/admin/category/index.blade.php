@extends('admin.master')

@section('title')
    <title>Halaman Category</title>
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- /.col -->
                <div class="col-sm-6">
                    <h1 class="m-0">Category</h1>
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
                {{-- session flash --}}
                @if (session('success'))
                    @alert(['type' => 'success'])
                    {!! session('success') !!}
                    @endalert
                @endif
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('category.create') }}" class="btn btn-primary">Tambah data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Kategori</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
