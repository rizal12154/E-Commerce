    <script type="text/javascript" src="{{ asset('') }}js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('') }}js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('') }}js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('') }}js/carousel.js"></script>
    <script type="text/javascript" src="{{ asset('') }}js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="{{ asset('') }}js/lazysize.min.js"></script>
    <script type="text/javascript" src="{{ asset('') }}js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="{{ asset('') }}js/wow.min.js"></script>
    <script type="text/javascript" src="{{ asset('') }}js/multiple-modal.js"></script>
    <script type="text/javascript" src="{{ asset('') }}js/main.js"></script>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnIncrease = document.querySelector('.btn-increase');
            const btnDecrease = document.querySelector('.btn-decrease');
            const inputQuantity = document.querySelector('.quantity-product');
            const totalHargaDisplay = document.querySelector('#total-harga-display');
            const hiddenJumlah = document.querySelector('#jumlah-produk');
            const hiddenHargaTotal = document.querySelector('#harga-total');
            const hargaSatuan = {{ $produk->harga }}; // Harga satuan produk

            // Fungsi untuk memperbarui harga total
            function updateHargaTotal() {
                const quantity = parseInt(inputQuantity.value);
                const totalHarga = hargaSatuan * quantity;
                totalHargaDisplay.textContent = totalHarga.toLocaleString('id-ID');
                hiddenJumlah.value = quantity;
                hiddenHargaTotal.value = totalHarga;
            }

            // Event listener untuk tombol increase
            btnIncrease.addEventListener('click', function() {
                inputQuantity.value = parseInt(inputQuantity.value) + 1;
                updateHargaTotal();
            });

            // Event listener untuk tombol decrease
            btnDecrease.addEventListener('click', function() {
                if (parseInt(inputQuantity.value) > 1) {
                    inputQuantity.value = parseInt(inputQuantity.value) - 1;
                    updateHargaTotal();
                }
            });

            // Event listener untuk input manual quantity
            inputQuantity.addEventListener('input', function() {
                if (inputQuantity.value < 1) {
                    inputQuantity.value = 1;
                }
                updateHargaTotal();
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const quantityInput = document.querySelector('.quantity-product');
            const totalPriceDisplay = document.getElementById('total-harga-display');
            const hiddenTotalPrice = document.getElementById('harga-total');
            const hargaSatuan = {{ $produk->harga }}; // Harga produk satuan

            function updateTotalPrice() {
                const jumlah = parseInt(quantityInput.value);
                if (!isNaN(jumlah) && jumlah > 0) {
                    const totalHarga = jumlah * hargaSatuan;
                    totalPriceDisplay.textContent = totalHarga.toLocaleString('id-ID');
                    hiddenTotalPrice.value = totalHarga;
                }
            }

            // Event listener untuk input jumlah
            quantityInput.addEventListener('input', updateTotalPrice);
            quantityInput.addEventListener('change', updateTotalPrice);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnDecrease = document.querySelector('.btn-decrease');
            const btnIncrease = document.querySelector('.btn-increase');
            const quantityInput = document.querySelector('.quantity-product');
            const totalPriceDisplay = document.querySelector('.total-price');
            const hargaSatuan = 50000; // Harga satuan produk

            function updateTotalPrice() {
                const jumlah = parseInt(quantityInput.value);
                if (!isNaN(jumlah) && jumlah > 0) {
                    const totalHarga = jumlah * hargaSatuan;
                    totalPriceDisplay.textContent = `Rp. ${totalHarga.toLocaleString('id-ID')}`;
                }
            }

            btnDecrease.addEventListener('click', function() {
                let jumlah = parseInt(quantityInput.value);
                if (jumlah > 1) {
                    quantityInput.value = jumlah - 1;
                    updateTotalPrice();
                }
            });

            btnIncrease.addEventListener('click', function() {
                let jumlah = parseInt(quantityInput.value);
                quantityInput.value = jumlah + 1;
                updateTotalPrice();
            });

            // Update total harga saat input diubah langsung
            quantityInput.addEventListener('input', updateTotalPrice);
        });
    </script> --}}
