@include('layouts.css')

<body class="wrapper-invoice">
    <section class="invoice-section">
        <div class="cus-container2">
            <div class="top">
                <a href="#" class="tf-btn btn-fill animate-hover-btn">
                    Print this invoice
                </a>
            </div>
            <div class="box-invoice">
                <div class="header">
                    <div class="wrap-top">
                        <div class="box-left">
                            <a href="index.html">
                                <img src="images/logo/logo.svg" alt="logo" class="logo">
                            </a>
                        </div>
                        <div class="box-right">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="title">Invoice #</div>
                                <span class="code-num">0043128641</span>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-date">
                        <div class="box-left">
                            <label for="">Invoice date:</label>
                            <span class="date">03/10/2024</span>
                        </div>
                        <div class="box-right">
                            <label for="">Due date:</label>
                            <span class="date">03/10/2024</span>
                        </div>
                    </div>
                    <div class="wrap-info">
                        <div class="box-left">
                            <div class="title">Supplier</div>
                            <div class="sub">Jobio LLC</div>
                            <p class="desc">2301 Ravenswood Rd Madison,
                                <br> WI 53711
                            </p>
                        </div>
                        <div class="box-right">
                            <div class="title">Customer</div>
                            <div class="sub">John Doe</div>
                            <p class="desc">329 Queensberry Street, North Melbourne <br> VIC 3051, Australia.</p>
                        </div>
                    </div>
                    <div class="wrap-table-invoice">
                        <table class="invoice-table">
                            <thead>
                                <tr class="title">
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>VAT (20%)</th>
                                    <th>Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="content">
                                    <td>Standard Plan</td>
                                    <td>$443.00</td>
                                    <td>$921.80</td>
                                    <td>$9243</td>
                                </tr>
                                <tr class="content">
                                    <td>Extra Plan</td>
                                    <td>$413.00 </td>
                                    <td>$912.80</td>
                                    <td>$5943</td>
                                </tr>
                                <tr class="content">
                                    <td class="total">Total Due</td>
                                    <td></td>
                                    <td></td>
                                    <td class="total">$9,750</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="footer">
                    <ul class="box-contact">
                        <li>www.ecomus.com</li>
                        <li>invoice@ecomus.com</li>
                        <li>(123) 123-456</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    @include('layouts.js')
