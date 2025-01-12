@extends('include.admin')

@section('title', 'Tambah Kategori')

@section('admin')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/kategori">Kategori</a></li>
                                <li class="breadcrumb-item active">Tambah Kategori</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Tambah Kategori</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane show active" id="input-types-preview">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form method="POST" action="{{ route('kategori.store') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama Kategori</label>
                                                    <input type="text" name="nama"
                                                        @error('nama') value="{{ old('nama') }}" @enderror id="nama"
                                                        class="form-control" required placeholder="Nama Kategori...">
                                                    @error('nama')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{ route('kategori.index') }}" type="button" class="btn btn-danger">Kembali</a>
                                            </form>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row-->
                                </div> <!-- end preview-->

                            </div> <!-- end tab-content-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->

        </div> <!-- container -->

    </div>
@endsection
