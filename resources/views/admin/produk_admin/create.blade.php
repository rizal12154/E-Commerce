@extends('include.admin')

@section('title', 'Tambah Produk')

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
                                <li class="breadcrumb-item"><a href="/produk_admin">Produk</a></li>
                                <li class="breadcrumb-item active">Tambah Barang</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Tambah Barang</h4>
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
                                            <form method="POST" action="">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama Barang</label>
                                                    <input type="text"
                                                        @error('nama') value="{{ old('nama') }}" @enderror id="nama"
                                                        class="form-control" required placeholder="Nama Barang...">
                                                    @error('nama')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                                    <textarea
                                                        @error('deskripsi') value="{{ old('deskripsi') }}"
                                                        @enderror
                                                        class="form-control" id="deskripsi" rows="5" required placeholder="Deskripsi..."></textarea>
                                                    @error('deskripsi')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="harga" class="form-label">Harga</label>
                                                    <input type="text"
                                                        @error('harga') value="{{ old('harga') }}"
                                                        @enderror
                                                        id="harga" class="form-control" placeholder="Harga...">
                                                    @error('harga')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="gambar" class="form-label">Tambah gambar</label>
                                                    <input type="file"
                                                        @error('gambar') value="{{ old('gambar') }}"
                                                        @enderror
                                                        id="gambar" class="form-control">
                                                    @error('gambar')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="stok" class="form-label">Stok</label>
                                                    <input class="form-control"
                                                        @error('stok') value="{{ old('stok') }}"
                                                        @enderror
                                                        id="stok" type="number" name="number">
                                                    @error('stok')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror

                                                    <div class="mb-3">
                                                        <label for="id_kategori" class="form-label">Kategori
                                                            Barang</label>
                                                        <select
                                                            @error('id_kategori') value="{{ old('id_kategori') }}"
                                                            @enderror
                                                            class="form-select" id="id_kategori">
                                                            <option>Pilih Kategori</option>
                                                            @foreach ($kategori as $get)
                                                                <option value="{{ $get->id }}">{{ $get->kategori }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('id_kategori')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="/produk_admin" type="button" class="btn btn-danger">Kembali</a>
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
