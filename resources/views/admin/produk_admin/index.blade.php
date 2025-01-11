@extends('include.admin')

@section('title', 'Produk')

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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Produk</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Products</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-sm-5">
                                    <a href="/produk_admin/create" class="btn btn-danger mb-2"><i
                                            class="mdi mdi-plus-circle me-2"></i> Tambah Produk</a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                    <thead class="table-light">
                                        <tr>
                                            <th>No.</th>
                                            <th class="all">Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Kategori</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($produk as $get)
                                                <td>{{ $no++ }} </td>
                                                <td>{{ $get->nama }}</td>
                                                <td>{{ $get->deskripsi }}</td>
                                                <td>{{ $get->harga }}</td>
                                                <td>{{ $get->stok }}</td>
                                                <td>{{ $get->kategori->kategori }}</td>
                                                <td><img src="{{ asset('storage/' . $get->gambar) }}" alt="gambar"
                                                        style="width: 100px;"></td>
                                                <td class="table-action">
                                                    {{-- <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-eye"></i></a> --}}
                                                    <a href="javascript:void(0);" class="action-icon"> <i
                                                            class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i
                                                            class="mdi mdi-delete"></i></a>
                                                </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div>
@endsection
