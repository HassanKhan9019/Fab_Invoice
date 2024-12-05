<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Invoice</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style-2.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    </head>
</head>

<body>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <div class="contanier">

        <div class="row">
            <div class="col-md-12">
                <button type="button" class="save-button">Save</button>
                <button type="button" class="export-button">Export PDF</button>
                <button type="button" class="add-button">Add Row</button>
                <button type="button" class="remove-button">Remove Row</button>

            </div>
        </div>
    </div>

    <div class="container invoice-container mb-5">

        <div class="row">
            <div class="col-md-12">
                <div class="header-img">
                    <img src="assets/images/head.png" alt="invoice-header" style="width: 100%; height: 140px;">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">

                <form action="#" class="p-1">

                    <div class="mb-2 d-flex align-items-center">
                        <label for="date" class="form-label mb-0 me-2">Date:</label>
                        <input type="date" class="form-control form-control-sm custom-width me-3">

                        <label for="Invoice" class="form-label mb-0 me-2">Invoice #</label>
                        <input type="text" class="form-control custom-width-1" placeholder="Enter Invoice Number">
                    </div>

                    <h3 class="mt-1 mb-2">Bill To:</h3>

                    <div class="mb-2 d-flex align-items-center">
                        <label for="Company" class="form-label mb-0 me-3">Company:</label>
                        <input type="text" class="form-control w-50" placeholder="Type Company Name">
                    </div>

                    <div class="mb-2 d-flex align-items-center">
                        <label for="address" class="form-label mb-0 me-4">Address:</label>
                        <input type="text" class="form-control custom-width-2" placeholder="Enter Address Here">
                    </div>

                    <div class="mb-2 d-flex align-items-center">
                        <label for="phone" class="form-label mb-0 me-2">Phone No:</label>
                        <input type="text" class="form-control custom-width-1 me-3" placeholder="Insert Phone Number">

                        <label for="postal-code" class="form-label mb-0 me-2">Postal Code:</label>
                        <input type="number" class="form-control custom-width-3" placeholder="Postal Code">
                    </div>

                    <div class="mb-2 d-flex align-items-center">
                        <label for="abn" class="form-label mb-0 me-5">ABN:</label>
                        <input type="text" class="form-control custom-width-1" placeholder="Insert ABN Number">
                    </div>

                    <div class="mb-0 d-flex align-items-center">
                        <!-- <label for="date" class="form-label mb-0 me-5">Date:</label>
                        <input type="date" class="form-control custom-width me-3"> -->

                        <label for="runsheet" class="form-label mb-0 me-2">RunSheet No:</label>
                        <input type="text" class="form-control custom-width-1" placeholder="Enter RunSheet Number">
                    </div>
                </form>


            </div>

            <div class="col-md-4">
                <div class="service-items">
                    <h4>For:</h4>
                    <h6>1. Assembly</h6>
                    <h6>2. Delivery</h6>
                    <h6>3. Repairs</h6>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-12">
                <table class="table-container">
                    <tr>
                        <th>Customer</th>
                        <th>Items Description</th>
                        <th>Amount</th>
                    </tr>

                    <tr>
                        <td>
                            <div class="mb-2 d-flex align-items-center">
                                <label for="Invoice" class="form-label mb-0 me-1">Invoice:</label>
                                <input type="text" class="form-control custom-width-4" placeholder="Invoice No">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-row flex-wrap justify-content-start">

                                <div class="form-check me-4">
                                    <input type="checkbox" class="form-check-input" id="deliv">
                                </div>

                                <div class="form-check me-4">
                                    <input type="checkbox" class="form-check-input" id="disas">
                                </div>

                                <div class="form-check me-4">
                                    <input type="checkbox" class="form-check-input" id="assem">
                                </div>

                                <div class="form-check me-3">
                                    <input type="checkbox" class="form-check-input" id="rub">
                                </div>

                                <div class="form-check me-4">
                                    <input type="checkbox" class="form-check-input" id="upst">
                                </div>

                                <div class="form-check custom-me-postive-1">
                                    <input type="checkbox" class="form-check-input" id="downst">
                                </div>

                                <div class="form-check custom-me-postive-2">
                                    <input type="checkbox" class="form-check-input" id="prem">
                                </div>

                                <div class="form-check me-3">
                                    <input type="checkbox" class="form-check-input" id="br-trans">
                                </div>

                                <div class="form-check me-3">
                                    <input type="checkbox" class="form-check-input" id="ins">
                                </div>

                                <div class="form-check me-3">
                                    <input type="checkbox" class="form-check-input" id="h-div">
                                </div>

                                <div class="form-check me-4">
                                    <input type="checkbox" class="form-check-input" id="vol">
                                </div>

                                <div class="form-check custom-me-postive-3">
                                    <input type="checkbox" class="form-check-input" id="water-con">
                                </div>

                                <div class="form-check me-4">
                                    <input type="checkbox" class="form-check-input" id="door-remove">
                                </div>

                                <div class="form-check me-3">
                                    <input type="checkbox" class="form-check-input" id="pup">
                                </div>

                            </div>

                            <div class="d-flex flex-row mb-3 text-left">
                                <div class="form-check-2">
                                    <label class="form-check-label" for="deliv">DELIV+</label>
                                </div>
                                <div class="form-check-2">
                                    <label class="form-check-label" for="disas">DISAS+</label>
                                </div>
                                <div class="form-check-2">
                                    <label class="form-check-label" for="assem">ASSEM+</label>
                                </div>
                                <div class="form-check-2">
                                    <label class="form-check-label" for="rub">RUB+</label>
                                </div>
                                <div class="form-check-2">
                                    <label class="form-check-label" for="upst">UPST+</label>
                                </div>
                                <div class="form-check-2">
                                    <label class="form-check-label" for="downst">DOWNST+</label>
                                </div>
                                <div class="form-check-2">
                                    <label class="form-check-label" for="prem">PREM+</label>
                                </div>
                                <div class="form-check-2">
                                    <label class="form-check-label" for="br-trans">BRTrans+</label>
                                </div>
                                <div class="form-check-2">
                                    <label class="form-check-label" for="ins">Ins+</label>
                                </div>
                                <div class="form-check-2">
                                    <label class="form-check-label" for="h-dliv">H/Dliv+</label>
                                </div>
                                <div class="form-check-2">
                                    <label class="form-check-label" for="vol">Vol+</label>
                                </div>
                                <div class="form-check-2">
                                    <label class="form-check-label" for="water-con">WaterCon+</label>
                                </div>
                                <div class="form-check-2">
                                    <label class="form-check-label" for="door-remove">Door/R+</label>
                                </div>
                                <div class="form-check-2">
                                    <div class="mb-2 d-flex align-items-center">
                                        <label for="pup" class="form-check-label">
                                            <select id="pup" class="custom-select label-custom-width">
                                                <option value="0">P/UP</option>
                                                <option value="1">P/UP(1)</option>
                                                <option value="2">P/UP(2)</option>
                                                <option value="3">P/UP(3)</option>
                                                <option value="4">P/UP(4)</option>
                                                <option value="5">P/UP(5)</option>
                                                <option value="6">P/UP(6)</option>
                                                <option value="7">P/UP(7)</option>
                                                <option value="8">P/UP(8)</option>
                                                <option value="9">P/UP(9)</option>
                                                <option value="10">P/UP(10)</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>$90.00</td>
                    </tr>
                </table>

            </div>
        </div>

        <div class="row mt-1 footer-bg">
            <div class="col-md-8">
                <div class="footer mt-3">
                    <p>Make all checks payable to Fab Transport services pty ltd
                        If you have any questions concerning this invoice,
                        use the following contact information</p>
                    <ul>
                        <li>Contact Name: Sam</li>
                        <li>Phone: 0403 729 966</li>
                        <li>Email: info@fabtransport.com.au</li>
                    </ul>
                    <h4>Thank You For Your Business!</h4>
                </div>
            </div>

            <div class="col-md-4 mt-5 ">
                <table class="table-container-2 mb-3 ml-5">
                    <tr style="background: #ed9a1e;">
                        <td><strong>Subtotal</strong> </td>
                        <td><strong>$120.00</strong></td>
                    </tr>
                    <form action="#">
                        <tr>
                            <td>Tax Rate</td>
                            <td class="text-center"><input type="text" class="form-control custom-width"
                                    placeholder="$0.00"></td>
                        </tr>
                        <tr style="background-color: #ffffff; ">
                            <td>Other Costs</td>
                            <td class="text-center"><input type="text" class="form-control custom-width"
                                    placeholder="$0.00"></td>
                        </tr>
                    </form>
                    <tr style="background: #ed9a1e;">
                        <td><strong>Total Cost</strong></td>
                        <td><strong>$200.00</strong></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    </div>

</body>

</html>