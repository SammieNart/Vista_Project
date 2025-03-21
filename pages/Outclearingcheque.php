<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outclearing Cheque</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        body {

            background-color: #f7d5d3;
        }
    </style>

    <?php
include ("../include/db_connect.php");
?>

</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-danger">
        <a href="#" class="navbar-brand mb-0 h1">
            <img src="..\images\vista-logo.png" class="logo-top1" width="50" height="50">
            <span class="navbar-brand mb-0 h1"><b>Vista Bank</b></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

        </button>
    </nav>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "Your form has been submitted";
        $bankcode = $_POST['bankcode'];
        $chequenos = $_POST['chequenos'];
        $rejreason = $_POST['rejreason'];


 
        

    $CRMDATAps1 = mysqli_query($dbc, "
    INSERT INTO `ft_outclearing_cheque`(`bankcode`,`chequenos`,`rejreason`)
    ) VALUES ('$bankcode','$chequenos','$rejreason')");


}
    
?>





    <div class=".container-fluid sm">
        <form action="" method="post" onsubmit="alert('Transaction has been submitted!');">
            <div class="row g-3">
                <h2 class="mb-4">Outclearing Cheque</h2>

                <ul class="nav nav-tabs" id="horizontalTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab-outwardremittance" data-bs-toggle="tab"
                            data-bs-target="#content-outwardremittance" type="button" role="tab"
                            aria-controls="content-outwardremittance" aria-selected="true">Outclearing Cheque</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-commission" data-bs-toggle="tab"
                            data-bs-target="#content-commission" type="button" role="tab" aria-controls="tab-commission"
                            aria-selected="false">Charge/Commission</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-audit" data-bs-toggle="tab" data-bs-target="#content-audit"
                            type="button" role="tab" aria-controls="tab-audit" aria-selected="false">Audit</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="content-outwardremittance" role="tabpanel"
                    aria-labelledby="tab-outwardremittance">
                    <div class="row ">

                        <!-- Bank Code  -->
                        <div class="mb-3 row">
                            <label class="col-sm-2  col-form-label">Bank Code</label>
                            <div class="col-sm-3 ">
                                <input type="text" class="form-control" name="bankcode">
                            </div>
                        </div>

                        <!-- Cheque Nos -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Cheque Nos</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="chequenos">
                            </div>
                        </div>

                        <!-- Instruction Code -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Rejection Reason</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="rejreason">
                            </div>
                        </div>

                        <!-- Value Date -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Bank Clearing Account</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="bankclear">

                            </div>
                        </div>

                        <!-- Currency -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Debit Currency</label>
                            <div class="col-sm-3 ">

                                <select class="form-select" name="bankop">
                                    <option>Credit</option>
                                    <option>Debit</option>
                                </select>

                            </div>
                        </div>

                        <!-- Ordering Customer -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Debit Value Date</label>
                            <div class="col-sm-3 ">
                                <input type="text" class="form-control" name="debitvalue">
                            </div>
                        </div>


                        <!-- Ordering Customer Code -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Debit Narrative</label>
                            <div class="col-sm-3 ">
                                <input type="text" class="form-control" name="debitnarrative">
                            </div>
                        </div>

                        <!-- Ordering Customer Account -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Cheque Amount</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="chequeamt">
                            </div>
                        </div>

                        <!-- IBAN-Ord -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Customer Amount</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="custamt">
                            </div>
                        </div>

                        <!-- Ordering Institution -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Beneficiary Name.1</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="benename">
                            </div>
                        </div>

                        <!-- Intermediary Institution -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Credit Currency</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="creditcur">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Credit Value Date </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="creditdate">
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <div class="tab-content">
                <div class="tab-pane fade show active" id="content-commission" role="tabpanel"
                    aria-labelledby="tab-commission">
                    <div class="tab-content active" id="charge-commission">

                        <!-- Commission Code -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Commission Code</label>
                            <div class="col-sm-10">
                                <div class="form-check  form-check-inline" name="commissioncode">
                                    <input class="form-check-input" type="radio" id="commission-none" value="none">
                                    <label class="form-check-label" for="commission-none">[None]</label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="radio" id="commission-credit"
                                        value="credit-less-charges" name="commissioncredit">
                                    <label class="form-check-label " for="commission-credit">Credit Less Charges</label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="radio" id="commission-debit"
                                        name="commissiondebit" value="debit-plus-charges">
                                    <label class="form-check-label" for="commissiondebit">Debit Plus Charges</label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="radio" id="commission-waive" value="waive"
                                        checked>
                                    <label class="form-check-label" for="commission-waive">Waive</label>
                                </div>
                            </div>
                        </div>

                        <!-- Commission Type -->
                        <div class="mb-3 row">
                            <label for="commission-type" class="col-sm-2 col-form-label">Commission Type</label>
                            <div class="col-sm-4">
                                <input type="text" id="commission-type" name="commissiontype" class="form-control">
                            </div>
                        </div>

                        <!-- Charge Account -->
                        <div class="mb-3 row">
                            <label for="charge-account" class="col-sm-2 col-form-label">Charge Account</label>
                            <div class="col-sm-4">
                                <input type="text" id="charge-account" name="chargeaccount" class="form-control">
                            </div>
                        </div>

                        <!-- Charged Customer -->
                        <div class="mb-3 row">
                            <label for="charged-customer" class="col-sm-2 col-form-label">Charged Customer</label>
                            <div class="col-sm-4">
                                <input type="text" id="charged-customer" name="chargedcustomer" class="form-control">
                            </div>
                        </div>

                        <!-- Amount Debited -->
                        <div class="mb-3 row">
                            <label for="amount-debited" class="col-sm-2 col-form-label">Amount Debited</label>
                            <div class="col-sm-4">
                                <input type="text" id="amount-debited" name="amountdebited" class="form-control">
                            </div>
                        </div>

                        <!-- Amount Credited -->
                        <div class="mb-3 row">
                            <label for="amount-credited" class="col-sm-2 col-form-label">Amount Credited</label>
                            <div class="col-sm-4">
                                <input type="text" id="amount-credited" name="amountcredited" class="form-control">
                            </div>
                        </div>

                        <!-- Delivery Reference -->
                        <div class="mb-3 row">
                            <label for="delivery-reference" class="col-sm-2 col-form-label">Delivery Reference</label>
                            <div class="col-sm-4">
                                <input type="text" id="delivery-reference" name="deliveryreference"
                                    class="form-control">
                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit For Authorization</button>
        </form>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>