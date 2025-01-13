@include('include.css')

@section('title', 'Checkout')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Checkout</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Steps Information -->
                        <div class="tab-content">

                            <!-- Billing Content-->
                            <div class="tab-pane show active" id="billing-information">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="mt-2">Billing information</h4>

                                        <p class="text-muted mb-4">Fill the form below in order to
                                            send you the order's invoice.</p>

                                        <form action="{{ route('pesanan.simpanSementara') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="billing-first-name" class="form-label">First
                                                            Name</label>
                                                        <input class="form-control" type="text" name="first_name"
                                                            placeholder="Enter your first name" id="billing-first-name"
                                                            value="{{ old('first_name', $billingInformation['first_name'] ?? '') }}"
                                                            required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="billing-last-name" class="form-label">Last
                                                            Name</label>
                                                        <input class="form-control" type="text" name="last_name"
                                                            placeholder="Enter your last name" id="billing-last-name"
                                                            value="{{ old('last_name', $billingInformation['last_name'] ?? '') }}"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="billing-phone" class="form-label">Phone <span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" name="phone"
                                                            placeholder="(xx) xxx xxxx xxx" id="billing-phone"
                                                            value="{{ old('phone', $billingInformation['phone'] ?? '') }}"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="billing-address" class="form-label">Address</label>
                                                        <input class="form-control" type="text" name="address"
                                                            placeholder="Enter full address" id="billing-address"
                                                            value="{{ old('address', $billingInformation['address'] ?? '') }}"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="billing-town-city" class="form-label">Town /
                                                            City</label>
                                                        <input class="form-control" type="text" name="city"
                                                            placeholder="Enter your city name" id="billing-town-city"
                                                            value="{{ old('city', $billingInformation['city'] ?? '') }}"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Provinsi</label>
                                                        <select data-toggle="select2" title="Provinsi" name="provinsi"
                                                            id="provinsi" class="form-control">
                                                            <option value="">Pilih Provinsi</option>
                                                            @foreach ($provinces as $province)
                                                                <option value="{{ $province['id'] }}">
                                                                    {{ $province['nama'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-sm-6">
                                                    <a href="/keranjang"
                                                        class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                        <i class="mdi mdi-arrow-left"></i> Back to Shopping Cart
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="text-sm-end">
                                                        <a href="{{ route('pesanan.bayar') }}"
                                                            class="btn btn-danger">
                                                            <i class="mdi mdi-truck-fast me-1"></i> Save Billing &
                                                            Proceed
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="border p-3 mt-4 mt-lg-0 rounded">
                                            <h4 class="header-title mb-3">Order Summary</h4>

                                            <div class="table-responsive">
                                                <table class="table table-nowrap table-centered mb-0">
                                                    <tbody>
                                                        @php
                                                            $keranjang = session('keranjang', []); // Ambil data keranjang dari session
                                                            $totalHarga = 0;
                                                        @endphp

                                                        @forelse ($keranjang as $item)
                                                            @php
                                                                $itemTotal = $item['harga'] * $item['jumlah']; // Hitung total harga per item
                                                                $totalHarga += $itemTotal; // Tambahkan ke total harga
                                                            @endphp
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset($item['gambar']) }}"
                                                                            alt="{{ $item['nama'] }}" class="me-2"
                                                                            height="48">
                                                                        <div>
                                                                            <span
                                                                                class="fw-bold">{{ $item['nama'] }}</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>{{ $item['jumlah'] }}</td>
                                                                <td>Rp {{ number_format($item['harga'], 2, ',', '.') }}
                                                                </td>
                                                                <td>Rp {{ number_format($itemTotal, 2, ',', '.') }}
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="4" class="text-center">Keranjang
                                                                    belanja kosong.</td>
                                                            </tr>
                                                        @endforelse

                                                        @if (!empty($keranjang))
                                                            <tr>
                                                                <td colspan="3" class="text-end fw-bold">Sub Total:
                                                                </td>
                                                                <td>Rp {{ number_format($totalHarga, 2, ',', '.') }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3" class="text-end fw-bold">
                                                                    Pengiriman:</td>
                                                                <td>Gratis</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3" class="text-end fw-bold">Total:
                                                                </td>
                                                                <td class="fw-bold">Rp
                                                                    {{ number_format($totalHarga, 2, ',', '.') }}</td>
                                                            </tr>
                                                        @endif
                                                    </tbody>

                                                </table>
                                            </div>
                                            <!-- end table-responsive -->
                                        </div> <!-- end .border-->

                                    </div> <!-- end col -->
                                </div> <!-- end row-->
                            </div>
                            <!-- End Billing Information Content-->

                        </div> <!-- end tab content-->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- container -->

</div> <!-- content -->

@include('include.footer')
@include('include.js')
