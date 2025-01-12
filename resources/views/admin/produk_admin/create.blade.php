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
                                            <form method="POST" action="{{ route('produk.store') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama Barang</label>
                                                    <input type="text" name="nama" value="{{ old('nama') }}"
                                                        id="nama"
                                                        class="form-control @error('nama') is-invalid @enderror" required
                                                        placeholder="Nama Barang...">
                                                    @error('nama')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" rows="5"
                                                        required placeholder="Deskripsi...">{{ old('deskripsi') }}</textarea>
                                                    @error('deskripsi')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="harga" class="form-label">Harga</label>
                                                    <input type="number" name="harga" value="{{ old('harga') }}"
                                                        id="harga"
                                                        class="form-control @error('harga') is-invalid @enderror" required
                                                        placeholder="Harga...">
                                                    @error('harga')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="gambar" class="form-label">Tambah Gambar</label>
                                                    <input type="file" name="gambar" id="gambar"
                                                        class="form-control @error('gambar') is-invalid @enderror">
                                                    @error('gambar')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="stok" class="form-label">Stok</label>
                                                    <input type="number" name="stok" value="{{ old('stok') }}"
                                                        id="stok"
                                                        class="form-control @error('stok') is-invalid @enderror" required
                                                        placeholder="Stok...">
                                                    @error('stok')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="kategori_id" class="form-label">Kategori Barang</label>
                                                    <select name="kategori_id" id="kategori_id"
                                                        class="form-select @error('kategori_id') is-invalid @enderror"
                                                        required>
                                                        <option value="" disabled selected>Pilih Kategori</option>
                                                        @foreach ($kategori as $get)
                                                            <option value="{{ $get->id }}"
                                                                {{ old('kategori_id') == $get->id ? 'selected' : '' }}>
                                                                {{ $get->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('kategori_id')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{ route('produk.index') }}" class="btn btn-danger">Kembali</a>
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
