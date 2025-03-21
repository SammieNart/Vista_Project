<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MT 103</title>
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
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="#" class="nav-link active"><b>Search</b></a>
                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link"><b>Contact IT</b></a>
                </li>
            </ul>
        </div>
    </nav>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "Your form has been submitted";

        $timeind = $_POST['timeind'];
        $bankop = $_POST['bankop'];
        $instcode = $_POST['instcode'];
        $valuedate = $_POST['valuedate'] ?? '';
        $currency = $_POST['currency'];
        $ordercust = $_POST['ordercust'];
        $ordercustco = $_POST['ordercustco'];
        $ibanord = $_POST['ibanord'];
        $orderingins = $_POST['orderingins'];
        $interins = $_POST['interins'];
        $ibaninter = $_POST['ibaninter'];
        $interbank = $_POST['interbank'];
        $acct = $_POST['acct'];
        $acctbank = $_POST['acctbank'];
        $ibanbank = $_POST['ibanbank'];
        $benecus = $_POST['benecus'];
        $bebeacct = $_POST['bebeacct'];
        $commissioncode = $_POST['commissioncode'] ?? '';
        $commissioncredit = $_POST['commissioncredit'] ?? '';
        $commissiondebit = $_POST['commissiondebit'] ?? '';
        $commissiontype = $_POST['commissiontype'];
        $chargeaccount = $_POST['chargeaccount'];
        $chargedcustomer = $_POST['chargedcustomer'];
        $amountdebited = $_POST['amountdebited'];
        $amountcredited = $_POST['amountcredited'];
        $deliveryreference = $_POST['deliveryreference'];


$CRMDATAps1 = mysqli_query($dbc, "INSERT INTO `ft_mt103`(`timeind`, `bankop`, `instcode`, `valuedate`, `currency`, `ordercust`, `ordercustco`, `ibanord`, `orderingins`, `interins`, `ibaninter`, `interbank`, `acct`, `acctbank`, `ibanbank`, `benecus`, `bebeacct`, `commissioncode`, `commissioncredit`, `commissiondebit`, `commissiontype`, `chargeaccount`, `chargedcustomer`, `amountdebited`, `amountcredited`, `deliveryreference`
) VALUES ('$timeind', '$bankop', '$instcode', '$valuedate', '$currency', '$ordercust', '$ordercustco', '$ibanord', '$orderingins', '$interins', '$ibaninter', '$interbank', '$acct', '$acctbank', '$ibanbank', '$benecus', '$bebeacct', '$commissioncode', '$commissioncredit', '$commissiondebit', '$commissiontype', '$chargeaccount', '$chargedcustomer', '$amountdebited', '$amountcredited', '$deliveryreference'
)");


}
    
?>





    <div class=".container-fluid sm">
        <form action="" method="post" onsubmit="alert('Transaction has been submitted!');">
            <div class="row g-3">
                <h2 class="mb-4">MT103</h2>

                <ul class="nav nav-tabs" id="horizontalTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab-outwardremittance" data-bs-toggle="tab"
                            data-bs-target="#content-outwardremittance" type="button" role="tab"
                            aria-controls="content-outwardremittance" aria-selected="true">MT103</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-commission" data-bs-toggle="tab"
                            data-bs-target="#content-commission" type="button" role="tab" aria-controls="tab-commission"
                            aria-selected="false">Charges</button>
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
                        <!-- Sender's Reference -->
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Transaction Currency</label>
                            <div class="col-sm-3">
                                <select class="form-select" name= "bankop">
                                    <option>GHS</option>
                                    <option>USD</option>
                                    <option>EUR</option>
                                </select>
                            </div>
                        </div>

                        <!-- Time Indication -->
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Debit Account</label>
                            <div class="col-sm-3 ">
                                <input type="text" class="form-control" name="timeind">
                            </div>
                        </div>

                        <!-- Bank Operation Code -->
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Debit Value Date</label>
                            <div class="col-sm-3"> 
                            <input type="date" class="form-control" name="timeind">     
                            </div>
                        </div>

                        <!-- Instruction Code -->
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Debit Narrative.1</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name ="instcode">
                            </div>
                        </div>

                        <!-- Value Date -->
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Instruction Code.1</label>
                            <div class="col-sm-3">
                                <p>SDVA</p>
                            </div>
                        </div>

                        <!-- Currency -->
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Ordering Customer Line 1.1</label>
                            <div class="col-sm-3 ">
                                <input type="text" class="form-control" name="currency">
                            </div>
                        </div>

                        <!-- Ordering Customer -->
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Beneficiary Cust. Account</label>
                            <div class="col-sm-3 ">
                                <input type="text" class="form-control" name = "ordercust">
                            </div>
                        </div>


                        <!-- Ordering Customer Code -->
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Beneficiary Customer Name</label>
                            <div class="col-sm-3 ">
                                <input type="text" class="form-control" name ="ordercustco">
                            </div>
                        </div>

                        <!-- Ordering Customer Account -->
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Beneficiary Cust. Address</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name ="ordercustac">
                            </div>
                        </div>

                        <!-- IBAN-Ord -->
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Beneficiary Cust. Address</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name ="ibanord">
                            </div>
                        </div>

                        <!-- Ordering Institution -->
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Ordering Institution (Tag 52).1:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name = "orderingins">
                            </div>
                        </div>

                        <!-- Intermediary Institution -->
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Credit Account</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name = "interins">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Cheque Number</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name= "ibaninter">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Credit Number</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="interbank">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Credit Amount</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name = "acct">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Credit Value Date</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name ="acctbank">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Treasury Rate</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name = "ibanbank">
                            </div>
                        </div>

                        <!-- Beneficiary Customer -->
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Message Priority</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name = "benecus">
                            </div>
                        </div>

                        <!-- Beneficiary Account No -->
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Bye pass RTGS limit rule</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name = "bebeacct">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label">Message d'Alerte.1</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name = "bebeacct">
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        <div class="tab-content">
        <div class="tab-pane fade show active" id="content-commission" role="tabpanel" aria-labelledby="tab-commission">
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
                            <input class="form-check-input" type="radio" id="commission-debit" name="commissiondebit"
                                value="debit-plus-charges">
                            <label class="form-check-label" for="commissiondebit">Debit Plus Charges</label>
                        </div>
                        <div class="form-check  form-check-inline">
                            <input class="form-check-input" type="radio" id="commission-waive" value="waive" checked>
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
                    <label for="charge-account" class="col-sm-2 col-form-label">Commiss Amt.1</label>
                    <div class="col-sm-4">
                        <input type="text" id="charge-account" name="chargeaccount" class="form-control">
                    </div>
                </div>    
        </div>

    </div>



   




        <div class="tab-content">

            <div class="tab-pane fade show active" id="content-audit" role="tabpanel" aria-labelledby="tab-audit">
                <div class="tab-content active" id="charge-audit">

                    <!-- Commission Code -->
                    <div class="mb-3 row">
                        <label for="over-ride" class="col-sm-2 col-form-label">Override.1</label>
                        <div class="col-sm-4">
                            <input type="text" id="bank-code" name="bankcode" class="form-control">
                        </div>
                    </div>  

                    <!-- Commission Type -->
                    <div class="mb-3 row">
                        <label for="record-status" class="col-sm-2 col-form-label">Record Status</label>
                        <div class="col-sm-4">
                            <input type="text" id="record-status" name="recordstatus" class="form-control">
                        </div>
                    </div>

                    <!-- Charge Account -->
                    <div class="mb-3 row">
                        <label for="curr-number" class="col-sm-2 col-form-label">Curr Number</label>
                        <div class="col-sm-4">
                            <input type="text" id="curr-number" name="currnumber" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputter-id" class="col-sm-2 col-form-label">Inputter Id.1</label>
                        <div class="col-sm-4">
                            <input type="text" id="inputter-id" name="inputterid" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="debit-currency" class="col-sm-2 col-form-label">Debit Currency</label>
                        <div class="col-sm-3">

                            <select class="form-select" name= "bankop">
                                <option>GHS</option>
                                <option>USD</option>
                                <option>EUR</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="date-time" class="col-sm-2 col-form-label">Date & Time.1</label>
                        <div class="col-sm-4">
                            <input type="date" id="date-time" name="" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="authoriser" class="col-sm-2 col-form-label">Authoriser</label>
                        <div class="col-sm-4">
                            <input type="text" id="authoriser" name="" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="company-code" class="col-sm-2 col-form-label">Company Code</label>
                        <div class="col-sm-4">
                            <input type="text" id="company-code" name="" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="department-code" class="col-sm-2 col-form-label">Department Code</label>
                        <div class="col-sm-4">
                            <input type="text" id="department-code" name="" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="auditor-id" class="col-sm-2 col-form-label">Audit Id</label>
                        <div class="col-sm-4">
                            <input type="text" id="auditor-id" name="" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="auditor-date" class="col-sm-2 col-form-label">Audit Date and Time</label>
                        <div class="col-sm-4">
                            <input type="text" id="auditor-date" name="" class="form-control">
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