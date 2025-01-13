@include('include.css')
@section('title', 'Pembayaran')

<div class="content">
    <div class="container-fluid">
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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Payment Content-->
                        <div class="tab-pane" id="payment-information">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h4 class="mt-2">Payment Selection</h4>
                                    <p class="text-muted mb-4">Choose a payment method to proceed with your order.</p>

                                    <!-- Looping metode pembayaran -->
                                    @foreach ($metodePembayaran as $metode)
                                        <div class="border p-3 mb-3 rounded">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-check">
                                                        <input type="radio" id="BillingOptRadio{{ $metode['id'] }}"
                                                            name="billingOptions"
                                                            class="form-check-input metode-pembayaran"
                                                            value="{{ $metode['id'] }}">
                                                        <label class="form-check-label font-16 fw-bold"
                                                            for="BillingOptRadio{{ $metode['id'] }}">{{ $metode['nama'] }}</label>
                                                    </div>
                                                    <p class="mb-0 ps-3 pt-1">
                                                        @if ($metode['id'] === 'paypal')
                                                            You will be redirected to PayPal website to complete your
                                                            purchase securely.
                                                        @elseif ($metode['id'] === 'kartu_kredit')
                                                            Safe money transfer using your bank account. We support
                                                            Mastercard, Visa, and others.
                                                        @elseif ($metode['id'] === 'transfer_bank')
                                                            Transfer securely using direct bank transfer.
                                                        @elseif ($metode['id'] === 'cod')
                                                            Pay with cash when your order is delivered.
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                    <img src="assets/images/payments/{{ $metode['icon'] }}"
                                                        height="30" alt="{{ $metode['nama'] }}-img">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <!-- Tombol untuk melanjutkan -->
                                    <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <a href="/pesanan"
                                                class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                <i class="mdi mdi-arrow-left"></i> Kembali
                                            </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-sm-end">
                                                <button type="button" class="btn btn-primary btn-open-modal">
                                                    Confirm Payment
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="border p-3 mt-4 mt-lg-0 rounded">
                                        <h4 class="header-title mb-3">Order Summary</h4>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap table-centered mb-0">
                                                <tbody>
                                                    @php
                                                        $keranjang = session('keranjang', []);
                                                        $totalHarga = 0;
                                                    @endphp
                                                    @forelse ($keranjang as $item)
                                                        @php
                                                            $itemTotal = $item['harga'] * $item['jumlah'];
                                                            $totalHarga += $itemTotal;
                                                        @endphp
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ asset($item['gambar']) }}"
                                                                        alt="{{ $item['nama'] }}" class="me-2"
                                                                        height="48">
                                                                    <div>
                                                                        <span class="fw-bold">{{ $item['nama'] }}</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>{{ $item['jumlah'] }}</td>
                                                            <td>Rp {{ number_format($item['harga'], 2, ',', '.') }}
                                                            </td>
                                                            <td>Rp {{ number_format($itemTotal, 2, ',', '.') }}</td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="4" class="text-center">Keranjang belanja
                                                                kosong.</td>
                                                        </tr>
                                                    @endforelse

                                                    @if (!empty($keranjang))
                                                        <tr>
                                                            <td colspan="3" class="text-end fw-bold">Sub Total:</td>
                                                            <td>Rp {{ number_format($totalHarga, 2, ',', '.') }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="text-end fw-bold">Pengiriman:</td>
                                                            <td>Gratis</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="text-end fw-bold">Total:</td>
                                                            <td class="fw-bold">Rp
                                                                {{ number_format($totalHarga, 2, ',', '.') }}</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Konfirmasi Pembayaran -->
                            <div id="paymentConfirmationModal" class="modal fade" tabindex="-1" role="dialog"
                                aria-labelledby="paymentConfirmationModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title fw-6" id="paymentConfirmationModalLabel">Payment
                                                Confirmation</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="tf-page-cart-checkout">
                                                <div class="d-flex align-items-center justify-content-between mb_15">
                                                    <div class="fs-18">Date</div>
                                                    <p>{{ now()->format('d/m/Y') }}</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb_15">
                                                    <div class="fs-18">Payment Method</div>
                                                    <p id="selected-payment-method"></p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb_24">
                                                    <div class="fs-22 fw-6">Subtotal</div>
                                                    <span class="total-value">Rp
                                                        {{ number_format($totalHarga, 2, ',', '.') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex gap-10">
                                            <a href="/pesanan" class="btn btn-outline-secondary w-50">
                                                Cancel Payment
                                            </a>
                                            <a href="{{ route('pesanan.show', ['id' => $pesananId]) }}"
                                                class="btn btn-primary w-50">
                                                Confirm Payment
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Payment Information Content-->
                    </div> <!-- end tab content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row-->

    @include('include.footer')
    @include('include.js')
