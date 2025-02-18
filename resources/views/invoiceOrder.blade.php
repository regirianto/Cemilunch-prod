<link rel="stylesheet" href="{{ asset('/assets/css/plugins/bootstrap.min.css') }}" />
<script src="{{ asset('/assets/js/plugins/bootstrap.min.js') }}"></script>

<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding invoice-wrapper">
    <div class="card">
        <div class="card-header p-4">
            <span class="pt-2 d-inline-block" data-abc="true"><img class="invoice-logo"
                    src="/assets/images/logo/logo-furniture.png" alt=""></span>
            <div class="float-right">
                <h3 class="mb-0">Invoice #BBB10234</h3>
                Date: 12 Jun,2019
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h5 class="mb-3">From:</h5>
                    <h3 class="text-dark mb-1">Cemilunch</h3>
                    <div>Jalan DR. Soepomo No 8, RT.1/RW.2, Menteng Dalam</div>
                    <div>Kecamatan Tebet,Jakarta Selatan 12870</div>
                    <div>Email: cemilunch@gmail.com</div>
                    <div>Phone: 0896-1826-2121</div>
                </div>
                <div class="col-sm-6 ">
                    <h5 class="mb-3">To:</h5>
                    <h3 class="text-dark mb-1">Akshay Singh</h3>
                    <div>478, Nai Sadak</div>
                    <div>Chandni chowk, New delhi, 110006</div>
                    <div>Email: info@tikon.com</div>
                    <div>Phone: +91 9895 398 009</div>
                </div>
            </div>
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="center">#</th>
                            <th>Item</th>
                            <th>Description</th>
                            <th class="right">Price</th>
                            <th class="center">Qty</th>
                            <th class="right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center">1</td>
                            <td class="left strong">Iphone 10X</td>
                            <td class="left">Iphone 10X with headphone</td>
                            <td class="right">$1500</td>
                            <td class="center">10</td>
                            <td class="right">$15,000</td>
                        </tr>
                        <tr>
                            <td class="center">2</td>
                            <td class="left">Iphone 8X</td>
                            <td class="left">Iphone 8X with extended warranty</td>
                            <td class="right">$1200</td>
                            <td class="center">10</td>
                            <td class="right">$12,000</td>
                        </tr>
                        <tr>
                            <td class="center">3</td>
                            <td class="left">Samsung 4C</td>
                            <td class="left">Samsung 4C with extended warranty</td>
                            <td class="right">$800</td>
                            <td class="center">10</td>
                            <td class="right">$8000</td>
                        </tr>
                        <tr>
                            <td class="center">4</td>
                            <td class="left">Google Pixel</td>
                            <td class="left">Google prime with Amazon prime membership</td>
                            <td class="right">$500</td>
                            <td class="center">10</td>
                            <td class="right">$5000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5">
                </div>
                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Subtotal</strong>
                                </td>
                                <td class="right">$28,809,00</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Discount (20%)</strong>
                                </td>
                                <td class="right">$5,761,00</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">VAT (10%)</strong>
                                </td>
                                <td class="right">$2,304,00</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Total</strong>
                                </td>
                                <td class="right">
                                    <strong class="text-dark">$20,744,00</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .invoice-wrapper .invoice-logo {
        width: 150px;
        height: 100%;
        filter: grayscale(100%);
    }

    .invoice-wrapper .card {
        margin-bottom: 30px;
        border: none;
        -webkit-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
        -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
        box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    }


    .invoice-wrapper .card-header {
        background-color: #fff;
        border-bottom: 1px solid #e6e6f2;
    }

    .invoice-wrapper h3 {
        font-size: 20px;
    }

    .invoice-wrapper h5 {
        font-size: 15px;
        line-height: 26px;
        color: #3d405c;
        margin: 0px 0px 15px 0px;
        font-family: 'Circular Std Medium';
    }

    .invoice-wrapper .text-dark {
        color: #3d405c !important;
    }
</style>
