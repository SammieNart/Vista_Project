<!DOCTYPE html>
<html lang="en">
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancellation of Draft</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {

            background-color: #f7d5d3;
        }
    </style>
    <link rel="stylesheet" href="SNAP.css">
    <script src="SNAP.js"></script>

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

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "Your form has been submitted";

        $debitaccount = $_POST['debitaccount'];
        $draftcurrency = $_POST['draftcurrency'];
        $draftamount = $_POST['draftamount'];
        $drawnonaccount = $_POST['drawnonaccount'];
        $payeename = $_POST['payeename'];
        $stockregister = $_POST['stockregister'];
        $seriesid = $_POST['seriesid'];
        $commissioncoden = $_POST['commissioncoden'];
        $commissioncredit = $_POST['commissioncredit'];
        $commissiondebit = $_POST['commissiondebit'];
        $commissionwaive = $_POST['commissionwaive'];
        $commissiontype = $_POST['commissiontype'];
        $chargeaccount = $_POST['chargeaccount'];
        $chargedcustomer = $_POST['chargedcustomer'];
        $amountdebited = $_POST['amountdebited'];
        $amountcredited = $_POST['amountcredited'];
        $deliveryreference = $_POST['deliveryreference'];
        $overrchargecommissione = $_POST['overrchargecommissione'];
        $recordstatus = $_POST['recordstatus'];
        $currnumber = $_POST['currnumber'];
        $inputterchargecommission = $_POST['inputterchargecommission'];
        $datetime = $_POST['datetime'];
        $authoriser = $_POST['authoriser'];
        $companycode = $_POST['companycode'];
        $departmentcode = $_POST['departmentcode'];
        $auditorchargecommission = $_POST['auditorchargecommission'];
        $auditdatetime = $_POST['auditdatetime'];




        $CancellationDraft = mysqli_query($dbc, "
        INSERT INTO `ft_cancellation_draft`(`debitaccount`, `draftcurrency`, `draftamount`, `drawnonaccount`, `payeename`, `stockregister`, `seriesid`, `commissioncoden`, `commissioncredit`, `commissiondebit`, `commissionwaive`, `commissiontype`, `chargeaccount`, `chargedcustomer`, `amountdebited`, `amountcredited`, `deliveryreference`, `overrchargecommissione`, `recordstatus`, `currnumber`, `inputterchargecommission`, `datetime`, `authoriser`, `companycode`, `departmentcode`, `auditorchargecommission`, `auditdatetime`  

            
        ) VALUES (
            '$debitaccount', '$draftcurrency', '$draftamount', '$drawnonaccount', '$payeename', '$stockregister', '$seriesid', '$commissioncoden', '$commissioncredit', '$commissiondebit', '$commissionwaive', '$commissiontype', '$chargeaccount', '$chargedcustomer', '$amountdebited', '$amountcredited', '$deliveryreference', '$overrchargecommissione', '$recordstatus', '$currnumber', '$inputterchargecommission', '$datetime', '$authoriser', '$companycode', '$departmentcode', '$auditorchargecommission', '$auditdatetime'  

        )
    ");
    }
    ?>

    <div class=".container-fluid sm">

        <form action = "" method = "post" onsubmit="alert('Transaction has been submitted!');">
            <div class="row g-3">

                <ul class="nav nav-tabs" id="horizontalTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab-draft" data-bs-toggle="tab"
                            data-bs-target="#content-draft" type="button" role="tab" aria-controls="content-draft"
                            aria-selected="true">Cancellation Of Draft</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-charges" data-bs-toggle="tab" data-bs-target="#content-charges"
                            type="button" role="tab" aria-controls="content-charges"
                            aria-selected="false">Charges</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-audit" data-bs-toggle="tab" data-bs-target="#content-audit"
                            type="button" role="tab" aria-controls="content-audit" aria-selected="false">Audit</button>
                    </li>


                </ul>
            </div>

            <!-- Tab Content -->
            <div class="tab-content" id="canceldraft">
                <!-- Cancellation Draft Tab -->
                <div class="tab-pane fade show active" id="content-draft" role="tabpanel" aria-labelledby="tab-draft">
                    <div class="mb-3 row">
                        <label for="debit-account" class="col-sm-2 col-form-label">Debit Account</label>
                        <div class="col-sm-2">
                            <input type="text" id="debit-account" name="debitaccount">
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="draft-currency" class="col-sm-2 col-form-label">Draft Currency</label>
                        <div class="col-sm-2">
                            <input type="text" id="draft-currency" name="draftcurrency">
                        </div>

                    </div>

                    <div class="mb-3 row">
                        <label for="draft-amount" class="col-sm-2 col-form-label">Draft Amount</label>
                        <div class="col-sm-2">
                            <input type="text" id="draft-amount" name="draftamount">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="payee-details" class="col-sm-2 col-form-label">Payment Details.1</label>
                        <div class="col-sm-2">
                            <input type="text" id="payee-details" name="payeedetails">
                        </div>

                    </div>

                    <div class="mb-3 row">
                        <label for="draft-number" class="col-sm-2 col-form-label">Draft Number</label>
                        <div class="col-sm-2">
                            <input type="text" id="draft-number" name="draftnumber">
                        </div>

                    </div>

                    <div class="mb-3 row">
                        <label for="drawn-on-account" class="col-sm-2 col-form-label">Drawn on Account</label>
                        <div class="col-sm-2">
                            <input type="text" id="drawn-on-account" name="drawnonaccount">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="payee-name" class="col-sm-2 col-form-label">Payee Name</label>
                        <div class="col-sm-2">
                            <input type="text" id="payee-name" name="payeename">
                        </div>

                    </div>

                    <div class="mb-3 row">
                        <label for="stock-register" class="col-sm-2 col-form-label">Stock Register</label>
                        <div class="col-sm-2">
                            <input type="text" id="stock-register" name="stockregister">
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="series-id" class="col-sm-2 col-form-label">Series ID</label>
                        <div class="col-sm-2">
                            <input type="text" id="series-id" name="seriesid">
                        </div>

                    </div>

                </div>

                <div class="tab-pane fade" id="content-charges" role="tabpanel" aria-labelledby="tab-charge">
                    <div class="mb-3 row" name="commissioncode">
                        <label class="col-sm-2 col-form-label">Commission Code</label>
                        <div class="col-sm-10">
                            <div class="form-check  form-check-inline" >
                                <input class="form-check-input" type="radio" id="commission-none" value="none" name="commissioncoden">
                                <label class="form-check-label" for="commission-none">[None]</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="radio" id="commission-credit"
                                    value="credit-less-charges" name="commissioncredit">
                                <label class="form-check-label " for="commission-credit">Credit Less
                                    Charges</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="radio" id="commission-debit"
                                    name="commissiondebit" value="debit-plus-charges">
                                <label class="form-check-label" for="commissiondebit">Debit Plus
                                    Charges</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="radio" id="commission-waive" value="waive"
                                    checked name= "commissionwaive">
                                <label class="form-check-label" for="commission-waive">Waive</label>
                            </div>
                        </div>
                    </div>

                    <!-- Commission Type -->
                    <div class="mb-3 row">
                        <label for="commission-type" class="col-sm-2 col-form-label">Commission
                            Type</label>
                        <div class="col-sm-2">
                            <input type="text" id="commission-type" name="commissiontype" class="form-control">
                        </div>
                    </div>

                    <!-- Charge Account -->
                    <div class="mb-3 row">
                        <label for="charge-account" class="col-sm-2 col-form-label">Charge
                            Account</label>
                        <div class="col-sm-2">
                            <input type="text" id="charge-account" name="chargeaccount" class="form-control">
                        </div>
                    </div>


                    <!-- Charged Customer -->
                    <div class="mb-3 row">
                        <label for="charged-customer" class="col-sm-2 col-form-label">Charged
                            Customer</label>
                        <div class="col-sm-2">
                            <input type="text" id="charged-customer" name="chargedcustomer" class="form-control">
                        </div>
                    </div>

                    <!-- Amount Debited -->
                    <div class="mb-3 row">
                        <label for="amount-debited" class="col-sm-2 col-form-label">Amount
                            Debited</label>
                        <div class="col-sm-2">
                            <input type="text" id="amount-debited" name="amountdebited" class="form-control">
                        </div>
                    </div>

                    <!-- Amount Credited -->
                    <div class="mb-3 row">
                        <label for="amount-credited" class="col-sm-2 col-form-label">Amount
                            Credited</label>
                        <div class="col-sm-2">
                            <input type="text" id="amount-credited" name="amountcredited" class="form-control">
                        </div>
                    </div>

                    <!-- Delivery Reference -->
                    <div class="mb-3 row">
                        <label for="delivery-reference" class="col-sm-2 col-form-label">Delivery
                            Reference</label>
                        <div class="col-sm-2">
                            <input type="text" id="delivery-reference" name="deliveryreference" class="form-control">
                        </div>
                    </div>

                </div>



                <div class="tab-pane fade" id="content-audit" role="tabpanel" aria-labelledby="tab-audit">

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="content-audit" role="tabpanel"
                            aria-labelledby="tab-audit">


                            <div class="mb-3 row">
                                <label for="overrcharge-commissione"
                                    class="col-sm-2 col-form-label">Overrcharge-commissione.1</label>
                                <div class="col-sm-2">
                                    <input type="text" id="overrcharge-commissione" class="form-control"
                                        name="overrchargecommissione">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="record-status" class="col-sm-2 col-form-label">Record Status</label>
                                <div class="col-sm-2">
                                    <input type="text" id="record-status" class="form-control" name="recordstatus">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="curr-number" class="col-sm-2 col-form-label">Curr Number</label>
                                <div class="col-sm-2">
                                    <input type="text" id="curr-number" class="form-control" name="currnumber">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="inputter-charge-commission" class="col-sm-2 col-form-label">Curr
                                    Number</label>
                                <div class="col-sm-2">
                                    <input type="text" id="inputter-charge-commission" class="form-control"
                                        name="inputterchargecommission">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="date-time" class="col-sm-2 col-form-label">Date & Time.1</label>
                                <div class="col-sm-2">
                                    <input type="date" id="date-time" class="form-control" name="datetime">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="authoriser" class="col-sm-2 col-form-label">Authoriser</label>
                                <div class="col-sm-2">
                                    <input type="text" id="authoriser" class="form-control" name="authoriser">
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="company-code" class="col-sm-2 col-form-label">Company Code</label>
                                <div class="col-sm-2">
                                    <input type="text" id="company-code" class="form-control" name="companycode">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="department-code" class="col-sm-2 col-form-label">Department Code</label>
                                <div class="col-sm-2">
                                    <input type="text" id="department-code" class="form-control" name="departmentcode">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="auditor-charge-commission" class="col-sm-2 col-form-label">Auditor
                                    charge-commission</label>
                                <div class="col-sm-2">
                                    <input type="text" id="auditor-charge-commission" class="form-control"
                                        name="auditorchargecommission">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="audit-date-time" class="col-sm-2 col-form-label">Auditor
                                    charge-commission</label>
                                <div class="col-sm-2">
                                    <input type="text" id="audit-date-time" class="form-control" name="auditdatetime">
                                </div>
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