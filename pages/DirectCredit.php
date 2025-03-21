<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DirectCredit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        body {

            background-color: #f7d5d3;
            
        }
        #pills-tab{
  background-color: wine;
}
    </style>

<?php
if (!file_exists("../include/db_connect.php")) {
    die("Database connection file not found.");
}
include("../include/db_connect.php");
?>

</head>


<body>



    <nav class="navbar navbar-expand-sm navbar-light bg-danger">
        <a href="#" class="navbar-brand mb-0 h1">
            <img src="..\images\vista-logo.png" class="logo-top1" width="50"
                height="50">
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

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo "Your form has been submitted";
    $debitaccount = $_POST['transactioncurrency'];
    $debitvaluedate = $_POST['debitvaluedate'];
    $debitnarrative = $_POST['debitnarrative'];
    $creditamount = $_POST['creditamount'];
    $bankcredit = $_POST['bankcredit'];
    $biccode = $_POST['biccode'];
    $creditvaluedate = $_POST['creditvaluedate'];
    $messagepriority = $_POST['messagepriority'];
    $byepass = $_POST['byepass'];
    $commissioncode = $_POST['commissioncode'] ?? '';
    $commissioncredit = $_POST['commissioncredit'] ?? '';
    $commissiondebit = $_POST['commissiondebit'] ?? '';
    $commissionwaive = $_POST['commissionwaive'] ?? '';
    $commissiontype = $_POST['commissiontype'];
    $commissionamt = $_POST['commissionamt'];


    $DirectCredit = mysqli_query($dbc, "INSERT INTO `ft_direct_credit`
    (`debitaccount`, `debitvaluedate`, `debitnarrative`, `creditamount`, `bankcredit`, `biccode`, 
     `creditvaluedate`, `messagepriority`, `byepass`, `commissioncode`, `commissioncredit`, 
     `commissiondebit`, `commissionwaive`, `commissiontype`, `commissionamt`)
    VALUES ('$debitaccount', '$debitvaluedate', '$debitnarrative', '$creditamount', '$bankcredit', 
            '$biccode', '$creditvaluedate', '$messagepriority', '$byepass', '$commissioncode', 
            '$commissioncredit', '$commissiondebit', '$commissionwaive', '$commissiontype', '$commissionamt')");



}

?>

    <div class=".container-fluid sm">

        <form action="" method="post" onsubmit="alert('Transaction has been submitted!');">

            <div class="row g-3">


                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-oremittance"
                            aria-selected="true">Outward Remittance</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-charges"
                            aria-selected="true">Charges</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-audit"
                            aria-selected="true">Audit</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-oremittance-tab">

                        <div id="outwardremittance" class="tabcontent">
                            <div class="mb-3 row">
                                <label for="transaction-currency" class="col-sm-2 col-form-label"
                                    class="form-control">Transaction
                                    Currency</label>
                                <div class="col-sm-4">
                                    <select id="transaction_currency" name="transactioncurrency">
                                        <option value="usd">USD</option>
                                        <option value="eur">GH</option>
                                        <option value="ghs">EUR</option>
                                    </select>

                                </div>

                            </div>


                            <div class="mb-3 row">
                                <label for="debit-account" class="col-sm-2 col-form-label">Debit Account</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="debitaccount" id="debit_account">
                                </div>

                            </div>


                            <div class="mb-3 row">
                                <label for="debit-value-date" class="col-sm-2 col-form-label">Debit ValueDate</label>
                                <div class="col-sm-4">
                                    <input type="date" id="debit-value-date" name="debitvaluedate" class="form-control">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="debit-narrative" class="col-sm-2 col-form-label required">Debit
                                    Narrative</label>
                                <div class="col-sm-4">
                                    <input type="text" id="debit-narrative" name="debitnarrative"
                                        class="form-control">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="credit-amount" class="col-sm-2 col-form-label required">Credit
                                    Amount</label>
                                <div class="col-sm-4">
                                    <input type="text" id="credit-amount" name="creditamount" class="form-control">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="bank-credit" class="col-sm-2 col-form-label required">Bank to be credited
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" id="bank-credit" name="bankcredit" class="form-control">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="bic-code" class="col-sm-2 col-form-label required">Participant Bic
                                    Code</label>
                                <div class="col-sm-4">
                                    <input type="text" id="bic-code" name="biccode" class="form-control">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="credit-value-date" class="col-sm-2 col-form-label required">Credit Value
                                    Date</label>
                                <div class="col-sm-4">
                                    <input type="date" id="credit-value-date" name="creditvaluedate"
                                        class="form-control">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="message-priority" class="col-sm-2 col-form-label required">Message
                                    Priority</label>
                                <div class="col-sm-4">
                                    <input type="text" id="message-priority" name="messagepriority"
                                        class="form-control">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="bye-pass" class="col-sm-2 col-form-label required">Bye Pass RTGS</label>
                                <div class="col-sm-4">
                                    <input type="text" id="bye-pass" name="byepass" class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-charges-tab">


                        <div id="charges" class="tabcontent">

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
                                        <input class="form-check-input" type="radio" id="commission-waive" value="commission-waive" name="commissionwaive" >
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

                            <div class="mb-3 row">
                                <label for="commission-amt" class="col-sm-2 col-form-label required">Commission
                                    Amt</label>

                                <div class="col-sm-4">
                                    <input type="text" id="commission-amt" name="commissionamt" class="form-control">
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-audit-tab">...
                    </div>
                </div>
                
            </div>


            <button type="submit" class="btn btn-primary">Submit For Authorization</button> 
        </form>

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>