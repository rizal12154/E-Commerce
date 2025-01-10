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
                                            <form>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama Barang</label>
                                                    <input type="text" id="nama" class="form-control" required
                                                        placeholder="Nama Barang...">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                                    <textarea class="form-control" id="deskripsi" rows="5" required placeholder="Deskripsi..."></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="harga" class="form-label">Harga</label>
                                                    <input type="text" id="harga" class="form-control"
                                                        placeholder="Harga...">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="gambar" class="form-label">Tambah gambar</label>
                                                    <input type="file" id="gambar" class="form-control">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="stok" class="form-label">Stok</label>
                                                    <input class="form-control" id="stok" type="number"
                                                        name="number">

                                                    <div class="mb-3">
                                                        <label for="example-select" class="form-label">Kategori
                                                            Barang</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>

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
