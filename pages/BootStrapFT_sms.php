<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FundsTransferSMS</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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



    $transactionType = $_POST['transactionType'];
    $debitAcctNo = $_POST['debitAcctNo'];
    $currencyMktDr = $_POST['currencyMktDr'];
    $debitCurrency = $_POST['debitCurrency'];
    $debitAmount = $_POST['debitAmount'];
    $debitValueDate = $_POST['debitValueDate'];
    $creditTheirRef = $_POST['creditTheirRef'];
    $creditAcctNo = $_POST['creditAcctNo'];
    $creditMktCr = $_POST['creditMktCr'];
    $creditCurrency = $_POST['creditCurrency'];
    $creditAmount = $_POST['creditAmount'];
    $creditValueDate = $_POST['creditValueDate'];
    $treasuryRate = $_POST['treasuryRate'];
    $negDealerRefNo = $_POST['negDealerRefNo'];
    $processingDate = $_POST['processingDate'];
    $orderingCust = $_POST['orderingCust'];
    $orderingBank = $_POST['orderingBank'];
    $acctWithBank = $_POST['acctWithBank'];
    $benAcctNo = $_POST['benAcctNo'];
    $bencustomer1 = $_POST['ben-customer1'];
    $chequeNumber = $_POST['chequeNumber'];
    $paymentDetails = $_POST['paymentDetails'];
    $bcBankSortCode = $_POST['bcBankSortCode'];
    $receiverBank = $_POST['receiverBank'];
    $recCorrBank = $_POST['recCorrBank'];
    $mailing = isset($_POST['mailing']) ? $_POST['mailing'] : null;
    $paymethod = $_POST['paymethod'];
    $commissionType = $_POST['commissionType'];
$commissionAmt = $_POST['commissionAmt'];
$commissionFor = $_POST['commissionFor'];
$chargeCode = $_POST['chargeCode'] ?? '';
$chargeType = $_POST['chargeType'];
$chargeAmt = $_POST['chargeAmt'];
$chargeFor = $_POST['chargeFor'];
$customerSpread = $_POST['customerSpread'];
$baseCurrency = $_POST['baseCurrency'];
$profitCentreCust = $_POST['profitCentreCust'];
$profitCentreDept = $_POST['profitCentreDept'];
$priorityTxn = $_POST['priorityTxn'];
$bkToBkInfo = $_POST['bkToBkInfo'];
$exposureDate = $_POST['exposureDate'];
$fedfunds = $_POST['fedfunds'] ?? '';
$message = $_POST['message'];
$iblcCodeCr = $_POST['iblcCodeCr'];
$iblccountrydr = $_POST['iblccountrydr'];
$iblccountrycr = $_POST['iblc-country-cr'];
$iblccountrych = $_POST['iblc-country-ch'];
$futuredate = $_POST['futuredate'];
$blcodedr = $_POST['blccodedr'];
$Immediately = $_POST['Immediately'] ?? '';
$ftbbandebit = $_POST['ftbbandebit'];
$ftbbancredit = $_POST['ftbbancredit'];
$snapinp = $_POST['snapinp'];
$snapauth = $_POST['snapauth'] ?? '';
$snapid = $_POST['snap-id'];
$versioncheck = $_POST['versioncheck'];
$slipno = $_POST['slipno'];
$localchqnos = $_POST['localchqnos'];
$benaccount1 = $_POST['benaccount1'];
$benamount1 = $_POST['benamount1']?? '';
$benefname1 = $_POST['benefname1'];
$applversion = $_POST['applversion'] ?? '';
$narration = $_POST['narration'];
$bencustomer2 = $_POST['bencustomer2'];
$bencustomer3 = $_POST['bencustomer3'];
$bencustomer4 = $_POST['bencustomer4'];
$rtgsmsgtype = $_POST['rtgsmsgtype'] ?? '';
$rtgsid = $_POST['rtgsid'] ?? '';
$rtgsofsstatus = $_POST['rtgsofsstatus'];
$benefacct = $_POST['benefacct'];
$altdebit = $_POST['altdebit'];
$participantbic = $_POST['participantbic'];
$participantb = $_POST['participantb'];
$altcredit = $_POST['altcredit'];
$isorrn = $_POST['isorrn'];
$isolocation = $_POST['isolocation'];
$recordstatus = $_POST['recordstatus'];
$currnumber = $_POST['currnumber'];
$inputterchargecommission = $_POST['inputterchargecommission'] ?? '';
$datetime = $_POST['datetime'] ?? '';
$authoriser = $_POST['authoriser'];
$companycode = $_POST['companycode'];
$departmentcode = $_POST['departmentcode'];
$auditorchargecommission = $_POST['auditorchargecommission'] ?? '';
$auditdatetime = $_POST['auditdatetime'] ?? '';
$transcur = $_POST['transcur'];
$tradedate = $_POST['tradedate'];
$exchangerate = $_POST['exchangerate'];
$debtheirref = $_POST['debtheirref'];
$credtheirref = $_POST['credtheirref'];
$currencylocal = $_POST['currencylocal'];
$amountlcy = $_POST['amountlcy'] ?? '';
$relref = $_POST['relref'];
$amountfcy = $_POST['amountfcy'];
$ftversion = $_POST['ftversion'];
$msgpriority = $_POST['msgpriority'];
$rtgsresbypass = $_POST['rtgsresbypass'];
$crdrmarker = $_POST['crdrmarker'];
$bendetails = $_POST['bendetails'];
$benefamount = $_POST['benefamount'];
$remittanceinfo1 = $_POST['remittanceinfo1'];
$transcode = $_POST['transcode'];
$eventcode = $_POST['eventcode'];





$CRMDATApsl = mysqli_query($dbc, "
INSERT INTO `ft_test` (
    `transactionType`, `debitAcctNo`, `currencyMktDr`, `debitCurrency`, `debitAmount`, `debitValueDate`, 
    `creditTheirRef`, `creditAcctNo`, `creditMktCr`, `creditCurrency`, `creditAmount`, `creditValueDate`, 
    `treasuryRate`, `negDealerRefNo`, `processingDate`, `orderingCust`, `orderingBank`, `acctWithBank`, 
    `benAcctNo`, `bencustomer1`, `chequeNumber`, `paymentDetails`, `bcBankSortCode`, `receiverBank`, 
    `recCorrBank`, `mailing`, `paymethod`, `commissionType`, `commissionAmt`, `commissionFor`, `chargeCode`, 
    `chargeType`, `chargeAmt`, `chargeFor`, `customerSpread`, `baseCurrency`, `profitCentreCust`, `profitCentreDept`, 
    `priorityTxn`, `bkToBkInfo`, `exposureDate`, `fedfunds`, `message`, `iblcCodeCr`, `iblccountrydr`, `iblccountrycr`, 
    `iblccountrych`, `futuredate`, `blcodedr`, `Immediately`, `ftbbandebit`, `ftbbancredit`, `snapinp`, `snapauth`, 
    `snapid`, `versioncheck`, `slipno`, `localchqnos`, `benaccount1`, `benamount1`, `benefname1`, `applversion`, 
    `narration`, `bencustomer2`, `bencustomer3`, `bencustomer4`, `rtgsmsgtype`, `rtgsid`, `rtgsofsstatus`, `benefacct`, 
    `altdebit`, `participantbic`, `participantb`, `altcredit`, `isorrn`, `isolocation`, `recordstatus`, `currnumber`, 
    `inputterchargecommission`, `datetime`, `authoriser`, `companycode`, `departmentcode`, `auditorchargecommission`, 
    `auditdatetime`, `transcur`, `tradedate`, `exchangerate`, `debtheirref`, `credtheirref`, `currencylocal`, 
    `amountlcy`, `relref`, `amountfcy`, `ftversion`, `msgpriority`, `rtgsresbypass`, `crdrmarker`, `bendetails`, 
    `benefamount`, `remittanceinfo1`, `transcode`, `eventcode`
) VALUES (
    '$transactionType', '$debitAcctNo', '$currencyMktDr', '$debitCurrency', '$debitAmount', '$debitValueDate', 
    '$creditTheirRef', '$creditAcctNo', '$creditMktCr', '$creditCurrency', '$creditAmount', '$creditValueDate', 
    '$treasuryRate', '$negDealerRefNo', '$processingDate', '$orderingCust', '$orderingBank', '$acctWithBank', 
    '$benAcctNo', '$bencustomer1', '$chequeNumber', '$paymentDetails', '$bcBankSortCode', '$receiverBank', 
    '$recCorrBank', '$mailing', '$paymethod', '$commissionType', '$commissionAmt', '$commissionFor', '$chargeCode', 
    '$chargeType', '$chargeAmt', '$chargeFor', '$customerSpread', '$baseCurrency', '$profitCentreCust', '$profitCentreDept', 
    '$priorityTxn', '$bkToBkInfo', '$exposureDate', '$fedfunds', '$message', '$iblcCodeCr', '$iblccountrydr', '$iblccountrycr', 
    '$iblccountrych', '$futuredate', '$blcodedr', '$Immediately', '$ftbbandebit', '$ftbbancredit', '$snapinp', '$snapauth', 
    '$snapid', '$versioncheck', '$slipno', '$localchqnos', '$benaccount1', '$benamount1', '$benefname1', '$applversion', 
    '$narration', '$bencustomer2', '$bencustomer3', '$bencustomer4', '$rtgsmsgtype', '$rtgsid', '$rtgsofsstatus', '$benefacct', 
    '$altdebit', '$participantbic', '$participantb', '$altcredit', '$isorrn', '$isolocation', '$recordstatus', '$currnumber', 
    '$inputterchargecommission', '$datetime', '$authoriser', '$companycode', '$departmentcode', '$auditorchargecommission', 
    '$auditdatetime', '$transcur', '$tradedate', '$exchangerate', '$debtheirref', '$credtheirref', '$currencylocal', 
    '$amountlcy', '$relref', '$amountfcy', '$ftversion', '$msgpriority', '$rtgsresbypass', '$crdrmarker', '$bendetails', 
    '$benefamount', '$remittanceinfo1', '$transcode', '$eventcode'

)");



     
}

?>

    <div class=".container-fluid sm">
        <form action="" method="post" onsubmit="alert('Transaction has been submitted!');">

            <div class="row g-3">

                <ul class="nav nav-tabs" id="horizontalTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab-ftSMS" data-bs-toggle="tab"
                            data-bs-target="#content-ftSMS" type="button" role="tab" aria-controls="content-ftSMS"
                            aria-selected="true">FundsTransferSMS</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-audit" data-bs-toggle="tab" data-bs-target="#content-audit"
                            type="button" role="tab" aria-controls="tab-audit" aria-selected="false">Audit</button>
                    </li>
                </ul>

                <div class="tab-content">

                    <div class="tab-pane fade show active" id="content-ftSMS" role="tabpanel"
                        aria-labelledby="tab-ftSMS">
                        <div class="row">
                            <!-- Transaction Type -->
                            <div class="mb-3 row">
                                <label for="transactionType" class="col-sm-2 col-form-label">Transaction Type</label>
                                <div class="col-sm-2">
                                    <select id="transactionType" class="form-select" name= "transactionType">
                                        <option>ACSM</option>
                                        <option>DBT</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Debit Acct No -->
                            <div class="mb-3 row">
                                <label for="debitAcctNo" class="col-sm-2 col-form-label">Debit Acct No</label>
                                <div class="col-sm-2">
                                    <input type="text" id="debitAcctNo" class="form-control" name="debitAcctNo">
                                </div>

                            </div>
                            <!-- Currency Mkt Dr -->
                            <div class="mb-3 row">
                                <label for="currencyMktDr" class="col-sm-2 col-form-label">Currency Mkt Dr</label>
                                <div class="col-sm-2">
                                    <input type="text" id="currencyMktDr" class="form-control" value="1"
                                        name="currencyMktDr">
                                </div>
                            </div>
                            <!-- Debit Currency -->
                            <div class="mb-3 row">
                                <label for="debitCurrency" class="col-sm-2 col-form-label">Debit Currency</label>
                                <div class="col-sm-2">
                                    <input type="text" id="debitCurrency" class="form-control" name="debitCurrency">
                                </div>
                            </div>
                            <!-- Debit Amount -->
                            <div class="mb-3 row">
                                <label for="debitAmount" class="col-sm-2 col-form-label">Debit Amount</label>
                                <div class="col-sm-2">
                                    <input type="text" id="debitAmount" class="form-control" name="debitAmount">
                                </div>
                            </div>
                            <!-- Debit Value Date -->
                            <div class="mb-3 row">
                                <label for="debitValueDate" class="col-sm-2 col-form-label">Debit Value Date</label>
                                <div class="col-sm-2">
                                    <input type="date" id="debitValueDate" class="form-control" name="debitValueDate">
                                </div>
                            </div>
                            <!-- Credit Their Ref -->
                            <div class="mb-3 row">
                                <label for="creditTheirRef" class="col-sm-2 col-form-label">Credit Their Ref</label>
                                <div class="col-sm-2">
                                    <input type="text" id="creditTheirRef" class="form-control" name="creditTheirRef">
                                </div>
                            </div>
                            <!-- Credit Acct No -->
                            <div class="mb-3 row">
                                <label for="creditAcctNo" class="col-sm-2 col-form-label">Credit Acct No</label>
                                <div class="col-sm-2">
                                    <input type="text" id="creditAcctNo" class="form-control" name="creditAcctNo">
                                </div>

                            </div>
                            <!-- More fields here -->
                            <div class="mb-3 row">
                                <label for="creditMktCr" class="col-sm-2 col-form-label">Currency Mkt Cr</label>
                                <div class="col-sm-2">
                                    <input type="text" id="creditMktCr" class="form-control" name="creditMktCr">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="creditCurrency" class="col-sm-2 col-form-label">Credit Currency</label>
                                <div class="col-sm-2">
                                    <input type="text" id="creditCurrency" class="form-control" name="creditCurrency">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="creditAmount" class="col-sm-2 col-form-label">Credit Amount</label>
                                <div class="col-sm-2">
                                    <input type="text" id="creditAmount" class="form-control" name="creditAmount">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="creditValueDate" class="col-sm-2 col-form-label">Credit Value Date</label>
                                <div class="col-sm-2">
                                    <input type="date" id="creditValueDate" class="form-control" name="creditValueDate">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="treasuryRate" class="col-sm-2 col-form-label">Treasury Rate</label>
                                <div class="col-sm-2">
                                    <input type="text" id="treasuryRate" class="form-control" name="treasuryRate">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="negDealerRefNo" class="col-sm-2 col-form-label">Neg Dealer Ref No</label>
                                <div class="col-sm-2">
                                    <input type="text" id="negDealerRefNo" class="form-control" name="negDealerRefNo">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="processingDate" class="col-sm-2 col-form-label">Processing Date</label>
                                <div class="col-sm-2">
                                    <input type="date" id="treasuryRate" class="form-control" name="processingDate">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="orderingCust" class="col-sm-2 col-form-label">Ordering Cust.1</label>
                                <div class="col-sm-2">
                                    <input type="text" id="treasuryRate" class="form-control" name="orderingCust">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="orderingBank" class="col-sm-2 col-form-label">Ordering Bank.1</label>
                                <div class="col-sm-2">
                                    <input type="text" id="orderingBank" class="form-control" name="orderingBank">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="acctWithBank" class="col-sm-2 col-form-label">Acct With Bank.1</label>
                                <div class="col-sm-2">
                                    <input type="text" id="acctWithBank" class="form-control" name="acctWithBank">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="benAcctNo" class="col-sm-2 col-form-label">Ben Acct No</label>
                                <div class="col-sm-2">
                                    <input type="text" id="benAcctNo" class="form-control" name="benAcctNo">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="ben-customer1" class="col-sm-2 col-form-label">Ben Customer.1</label>
                                <div class="col-sm-2">
                                    <input type="text" id="ben-customer1" class="form-control" name="ben-customer1">
                                </div>

                            </div>


                            <div class="mb-3 row">
                                <label for="chequeNumber" class="col-sm-2 col-form-label">Cheque Number</label>
                                <div class="col-sm-2">
                                    <input type="text" id="chequeNumber" class="form-control" name="chequeNumber">
                                </div>

                            </div>


                            <div class="mb-3 row">
                                <label for="paymentDetails" class="col-sm-2 col-form-label">Payment Details.1</label>
                                <div class="col-sm-2">
                                    <input type="text" id="paymentDetails" class="form-control" name="paymentDetails">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="bcBankSortCode" class="col-sm-2 col-form-label">Bc Bank Sort Code</label>
                                <div class="col-sm-2">
                                    <input type="text" id="bcBankSortCode" class="form-control" name="bcBankSortCode">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="receiverBank" class="col-sm-2 col-form-label">Receiver Bank</label>
                                <div class="col-sm-2">
                                    <input type="text" id="receiverBank" class="form-control" name="receiverBank">
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="recCorrBank" class="col-sm-2 col-form-label">Rec Corr Bank.1</label>
                                <div class="col-sm-2">
                                    <input type="text" id="recCorrBank" class="form-control" name="recCorrBank">
                                </div>

                            </div>

                        </div>

                        <!-- Mailing Section -->
                        <div class="mb-3 ">
                            <div class="form-check-inline">
                                <label for="mailing" class="form-check-label">Mailing</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" id="mailingNone" name="mailing" value="None"
                                    class="form-check-input">
                                <label for="mailingNone" class="form-check-label">None</label>

                            </div>
                            <div class="form-check-inline">
                                <input type="radio" id="mailingBank" name="mailing" value="Bank"
                                    class="form-check-input">
                                <label for="mailingBank" class="form-check-label">Bank</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" id="mailingBen" name="mailing" value="Ben" class="form-check-input">
                                <label for="mailingBen" class="form-check-label">Ben</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" id="mailingCust" name="mailing" value="Cust"
                                    class="form-check-input">
                                <label for="mailingCust" class="form-check-label">Cust</label>
                            </div>
                        </div>



                        <!--Pay Method-->
                        <div class="mb-3 row">
                            <label for="paymethod" class="col-sm-2 col-form-label">Pay Method</label>
                            <div class="col-sm-2">
                                <select id="paymethod" class="form-select" name="paymethod">
                                    <option>Momo</option>
                                </select>
                            </div>
                        </div>
                        <!--Commission Code-->
                        <div class="mb-3">
                            <div class="form-check-inline">
                                <label for="mailing" class="form-check-label" name="commissionCo">Commission Code</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" id="commissionCodeNone"  value="None"
                                    class="form-check-input">
                                <label for="commissionCodeNone" class="form-check-label">None</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" id="commissionCodecredit" 
                                    value="CreditLessCharges" class="form-check-input">
                                <label for="commissionCodecredit" class="form-check-label">Credit Less Charges</label>

                            </div>
                            <div class="form-check-inline">
                                <input type="radio" id="commissionCodedebit" 
                                    value="DebitPlusCharges" class="form-check-input">
                                <label for="commissionCodedebit" class="form-check-label">Debit Plus Charges</label>

                            </div>
                            <div class="form-check-inline">
                                <input type="radio" id="commissionCodewaive" name="commissionCodewaive" value="Waive"
                                    class="form-check-input">
                                <label for="commissionCodewaive" class="form-check-label">Waive</label>

                            </div>


                        </div>

                        <div class="mb-3 row">
                            <label for="commissionType" class="col-sm-2 col-form-label">Commission Type.1</label>
                            <div class="col-sm-2">
                                <input type="text" id="commissionType" class="form-control" name="commissionType">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="commissionAmt" class="col-sm-2 col-form-label">Commission Amt.1</label>
                            <div class="col-sm-2">
                                <input type="text" id="commissionAmt" class="form-control" name="commissionAmt">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="commissionFor" class="col-sm-2 col-form-label">Commission For.1</label>
                            <div class="col-sm-2">
                                <input type="text" id="commissionFor" class="form-control" name="commissionFor">
                            </div>
                        </div>



                        <!-- Charge Fields -->
                        <div class="form-check-inline">
                            <label for="chargeCode" name = "chargeCode">Charge Code</label>

                            <label><input type="radio"  value="None"> [None]</label>
                            <label><input type="radio"  value="CreditLessCharges"> Credit Less
                                Charges</label>
                            <label><input type="radio"  value="DebitPlusCharges"> Debit Plus
                                Charges</label>
                            <label><input type="radio"  value="Waive"> Waive</label>

                        </div>


                        <div class="mb-3 row">
                            <label for="chargeType" class="col-sm-2 col-form-label">Charge Type.1</label>
                            <div class="col-sm-2">
                                <input type="text" id="chargeType" class="form-control" name="chargeType">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="chargeAmt" class="col-sm-2 col-form-label">Charge Amt.1</label>
                            <div class="col-sm-2">
                                <input type="text" id="chargeAmt" class="form-control" name="chargeAmt">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="chargeFor" class="col-sm-2 col-form-label">Charge For.1</label>
                            <div class="col-sm-2">
                                <input type="text" id="chargeFor" class="form-control" name="chargeFor">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="customerSpread" class="col-sm-2 col-form-label">Customer Spread</label>
                            <div class="col-sm-2">
                                <input type="text" id="customerSpread" class="form-control" name="customerSpread">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="baseCurrency" class="col-sm-2 col-form-label">Base Currency</label>
                            <div class="col-sm-2">
                                <input type="text" id="baseCurrency" class="form-control" name="baseCurrency">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="profitCentreCust" class="col-sm-2 col-form-label">Profit Centre Cust</label>
                            <div class="col-sm-2">
                                <input type="text" id="profitCentreCust" class="form-control" name="profitCentreCust">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="profitCentreDept" class="col-sm-2 col-form-label">Profit Centre Dept</label>
                            <div class="col-sm-2">
                                <input type="text" id="profitCentreDept" class="form-control" name="profitCentreDept">
                            </div>
                        </div>


                        <div class="form-check-inline">
                            <label>Return To Dept</label>
                            <label><input type="radio" name="returnToDept" value="None"> [None]</label>
                            <label><input type="radio" name="returnToDept" value="No"> No</label>
                            <label><input type="radio" name="returnToDept" value="Yes"> Y</label>
                        </div>


                        <div class="mb-3 row">
                            <label for="priorityTxn" class="col-sm-2 col-form-label">Priority Txn</label>
                            <div class="col-sm-2">
                                <input type="text" id="priorityTxn" class="form-control" name="priorityTxn">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="bkToBkInfo" class="col-sm-2 col-form-label">Bk To Bk Info.1</label>
                            <div class="col-sm-2">
                                <input type="text" id="bkToBkInfo" class="form-control" name="bkToBkInfo">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="exposureDate" class="col-sm-2 col-form-label">Exposure Date</label>
                            <div class="col-sm-2">
                                <input type="date" id="exposureDate" class="form-control" name="exposureDate">
                            </div>
                        </div>

                        <!--  Radio-->
                        <div class="form-check-inline">
                            <label>Fed Funds</label>
                            <label><input type="radio" name="fedFunds" value="None"> [None]</label>
                            <label><input type="radio" name="fedFunds" value="No"> No</label>
                            <label><input type="radio" name="fedFunds" value="Yes"> Y</label>

                        </div>

                        <div class="mb-3 row">
                            <label for="message" class="col-sm-2 col-form-label">Message.1</label>
                            <div class="col-sm-2">
                                <input type="text" id="message" class="form-control" name="message">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="iblcCodeCr" class="col-sm-2 col-form-label">IBLC.CODE-CR</label>
                            <div class="col-sm-2">
                                <input type="text" id="iblcCodeCr" class="form-control" name="iblcCodeCr">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="iblcCodeCr" class="col-sm-2 col-form-label">IBLC.CODE-CR</label>
                            <div class="col-sm-2">
                                <input type="text" id="iblcCodeCr" class="form-control" name="iblcCodeCr">
                            </div>
                        </div>

                        <!--IBLC.COUNTRY-CR dropdown-->
                        <div class="mb-3 row">
                            <label for="iblcCountryCr" class="col-sm-2 col-form-label">IBLC.COUNTRY-CR</label>
                            <div class="col-sm-2">
                                <select id="iblcCountryCr" class="form-select">
                                    <option>None</option>
                                </select>
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="iblc-country-dr" class="col-sm-2 col-form-label">IBLC.COUNTRY-DR</label>
                            <div class="col-sm-2">
                                <input type="text" id="iblc-country-dr" class="form-control" name="iblccountrydr">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="iblc-country-cr" class="col-sm-2 col-form-label">IBLC.COUNTRY-CR</label>
                            <div class="col-sm-2">
                                <input type="text" id="iblc-country-cr" class="form-control" name="iblc-country-cr">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="iblc-country-ch" class="col-sm-2 col-form-label">IBLC.COUNTRY-CH</label>
                            <div class="col-sm-2">
                                <input type="text" id="iblc-country-ch" class="form-control" name="iblc-country-ch">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="future-date" class="col-sm-2 col-form-label">Future Date</label>
                            <div class="col-sm-2">
                                <input type = "date" id="Future Date" class="form-control" name="futuredate">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="iblc-code-dr" class="col-sm-2 col-form-label">IBLC.CODE-DR</label>
                            <div class="col-sm-2">
                                <input type="text" id="iblc-code-dr" class="form-control" name="blccodedr">
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Immediately">
                            <label class="form-check-label" for="Immediately">
                                Immediately
                            </label>
                        </div>

                        <div class="mb-3 row">
                            <label for="ft-bban-debit" class="col-sm-2 col-form-label">Ft Bban Debit</label>
                            <div class="col-sm-2">
                                <input type="text" id="ft-bban-debit" class="form-control" name="ftbbandebit">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="t-bban-credit" class="col-sm-2 col-form-label">Ft Bban Credit</label>
                            <div class="col-sm-2">
                                <input type="text" id="ft-bban-credit" class="form-control" name="ftbbancredit">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="snap-inp" class="col-sm-2 col-form-label">Snap Inp</label>
                            <div class="col-sm-2">
                                <input type="text" id="snap-inp" class="form-control" name="snapinp">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="snap-auth" class="col-sm-2 col-form-label">Snap Auth</label>
                            <div class="col-sm-2">
                                <input type="text" id="snap-auth" class="form-control" name="snap-auth">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="snap-id" class="col-sm-2 col-form-label">Snap Id</label>
                            <div class="col-sm-2">
                                <input type="text" id="snap-id" class="form-control" name="snap-id">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="version-check" class="col-sm-2 col-form-label">Version Check</label>
                            <div class="col-sm-2">
                                <input type="text" id="version-check" class="form-control" name="versioncheck">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="slip-no" class="col-sm-2 col-form-label">Slip No</label>
                            <div class="col-sm-2">
                                <input type="text" id="slip-no" class="form-control" name="slipno">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="local-chq-nos" class="col-sm-2 col-form-label">Local Chq Nos</label>
                            <div class="col-sm-2">
                                <input type="text" id="local-chq-nos" class="form-control" name="localchqnos">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="ben-account-1" class="col-sm-2 col-form-label">Ben Account.1</label>
                            <div class="col-sm-2">
                                <input type="text" id="ben-account-1" class="form-control" name="benaccount1">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="ben-amount-1" class="col-sm-2 col-form-label" name="benamount1">Ben Amount.1</label>
                            <div class="col-sm-2">
                                <input type="text" id="ben-amount-1" class="form-control" >
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="benef-name-1" class="col-sm-2 col-form-label">Benef Name.1</label>
                            <div class="col-sm-2">
                                <input type="text" id="benef-name-1" class="form-control" name="benefname1">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="appl-version" class="col-sm-2 col-form-label">Appl Version</label>
                            <div class="col-sm-2">
                                <input type="text" id="appl-version" class="form-control" name="applversion">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="narration" class="col-sm-2 col-form-label">Narration</label>
                            <div class="col-sm-2">
                                <input type="text" id="narration" class="form-control" name="narration">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="trans-cur" class="col-sm-2 col-form-label">Trans Cur</label>
                            <div class="col-sm-2">
                                <input type="text" id="trans-cur" class="form-control" name="transcur">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="trade-date" class="col-sm-2 col-form-label">Trade Date</label>
                            <div class="col-sm-2">
                                <input type="text" id="trade-date" class="form-control" name="tradedate">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="exchange-rate" class="col-sm-2 col-form-label">Exchange Rate</label>
                            <div class="col-sm-2">
                                <input type="text" id="exchange-rate" class="form-control" name="exchangerate">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="deb-their-ref" class="col-sm-2 col-form-label">Deb Their Ref</label>
                            <div class="col-sm-2">
                                <input type="text" id="deb-their-ref" class="form-control" name="debtheirref">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="cred-their-ref" class="col-sm-2 col-form-label">Cred Their Ref</label>
                            <div class="col-sm-2">
                                <input type="text" id="cred-their-ref" class="form-control" name="credtheirref">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="currency-local" class="col-sm-2 col-form-label">Currency Local</label>
                            <div class="col-sm-2">
                                <input type="text" id="currency-local" class="form-control" name="currencylocal">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="amount-lcy" class="col-sm-2 col-form-label">Amount Lcy</label>
                            <div class="col-sm-2">
                                <input type="text" id="Amount Lcy" class="form-control" name="amount-lcy">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="rel-ref" class="col-sm-2 col-form-label">Rel Ref</label>
                            <div class="col-sm-2">
                                <input type="text" id="rel-ref" class="form-control" name="relref">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="amount-fcy" class="col-sm-2 col-form-label">Amount Fcy</label>
                            <div class="col-sm-2">
                                <input type="text" id="amount-fcy" class="form-control" name="amountfcy">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="ft-version" class="col-sm-2 col-form-label">Ft Version</label>
                            <div class="col-sm-2">
                                <input type="text" id="ft-version" class="form-control" name="ftversion">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="msg-priority" class="col-sm-2 col-form-label">Msg Priority</label>
                            <div class="col-sm-2">
                                <input type="text" id="msg-priority" class="form-control" name="msgpriority">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="rtgs-res-bypass" class="col-sm-2 col-form-label">Rtgs Res Bypass</label>
                            <div class="col-sm-2">
                                <input type="text" id="rtgs-res-bypass" class="form-control" name="rtgsresbypass">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="rtgs-res-bypass" class="col-sm-2 col-form-label">Rtgs Res Bypass</label>
                            <div class="col-sm-2">
                                <input type="text" id="rtgs-res-bypass" class="form-control" name="rtgs-res-bypass">
                            </div>
                        </div>
                        <!--  Radio-->

                        <div class="form-check-inline">
                            <label>Cr Dr Marker</label>
                            <label><input type="radio" name="crdrmarker" value="none" checked> [None]</label>
                            <label><input type="radio" name="crdrmarker" value="c"> C</label>
                            <label><input type="radio" name="crdrmarker" value="d"> D</label>
                        </div>

                        <div class="mb-3 row">
                            <label for="ben-details" class="col-sm-2 col-form-label">Ben Details</label>
                            <div class="col-sm-2">
                                <input type="text" id="ben-details" class="form-control" name="bendetails">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="benef-amount" class="col-sm-2 col-form-label">Benef Amount</label>
                            <div class="col-sm-2">
                                <input type="text" id="benef-amount" class="form-control" name="benefamount">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="remittance-info1" class="col-sm-2 col-form-label">Remittance Info1</label>
                            <div class="col-sm-2">
                                <input type="text" id="remittance-info1" class="form-control" name="remittanceinfo1">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="trans-code" class="col-sm-2 col-form-label">Trans Code</label>
                            <div class="col-sm-2">
                                <input type="text" id="trans-code" class="form-control" name="transcode">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="event-code" class="col-sm-2 col-form-label">Event Code</label>
                            <div class="col-sm-2">
                                <input type="text" id="event-code" class="form-control" name="eventcode">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="drp-table" class="col-sm-2 col-form-label">Drp Table</label>
                            <div class="col-sm-2">
                                <input type="text" id="drp-table" class="form-control" name="drptable">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="ben-customer1" class="col-sm-2 col-form-label">Ben Customer1</label>
                            <div class="col-sm-2">
                                <input type="text" id="ben-customer1" class="form-control" name="bencustomer1">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="ben-customer2" class="col-sm-2 col-form-label">Ben Customer2</label>
                            <div class="col-sm-2">
                                <input type="text" id="ben-customer2" class="form-control" name="bencustomer2">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="ben-customer3" class="col-sm-2 col-form-label">Ben Customer3</label>
                            <div class="col-sm-2">
                                <input type="text" id="ben-customer3" class="form-control" name="bencustomer3">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="ben-customer4" class="col-sm-2 col-form-label">Ben Customer4</label>
                            <div class="col-sm-2">
                                <input type="text" id="ben-customer4" class="form-control" name="bencustomer4">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="ben-customer4" class="col-sm-2 col-form-label">Ben Customer4</label>
                            <div class="col-sm-2">
                                <input type="text" id="ben-customer4" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="rtgs-msg-type" class="col-sm-2 col-form-label">Rtgs Msg Type</label>
                            <div class="col-sm-2">
                                <input type="text" id="rtgs-msg-type" class="form-control" name="rtgsmsgtype">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="rtgs-id" class="col-sm-2 col-form-label">Rtgs Id</label>
                            <div class="col-sm-2">
                                <input type="text" id="rtgs-id" class="form-control" name="rtgsid">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="rtgs-ofs-status" class="col-sm-2 col-form-label">Rtgs Ofs Status</label>
                            <div class="col-sm-2">
                                <input type="text" id="rtgs-ofs-status" class="form-control" name="rtgsofsstatus">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="benef-acct" class="col-sm-2 col-form-label">Benef Acct</label>
                            <div class="col-sm-2">
                                <input type="text" id="benef-acct" class="form-control" name="benefacct">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="alt-debit" class="col-sm-2 col-form-label">Alt Debit</label>
                            <div class="col-sm-2">
                                <input type="text" id="alt-debit" class="form-control" name="altdebit">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="participant-bic" class="col-sm-2 col-form-label">Participant Bic</label>
                            <div class="col-sm-2">
                                <input type="text" id="participant-bic" class="form-control" name="participantbic">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="participantb" class="col-sm-2 col-form-label">Participantb</label>
                            <div class="col-sm-2">
                                <input type="text" id="participantb" class="form-control" name="participantb">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="alt-credit" class="col-sm-2 col-form-label">Alt Credit</label>
                            <div class="col-sm-2">
                                <input type="text" id="alt-credit" class="form-control" name="altcredit">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="iso-rrn" class="col-sm-2 col-form-label">Iso Rrn</label>
                            <div class="col-sm-2">
                                <input type="text" id="iso-rrn" class="form-control" name="isorrn">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="iso-location" class="col-sm-2 col-form-label">Iso Location</label>
                            <div class="col-sm-2">
                                <input type="text" id="iso-location" class="form-control" name="isolocation">
                            </div>
                        </div>
                    </div>


                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="content-audit" role="tabpanel"
                            aria-labelledby="tab-audit">


                            <div class="mb-3 row">
                                <label for="overrcharge-commissione"
                                    class="col-sm-2 col-form-label">Overrcharge-commissione.1</label>
                                <div class="col-sm-2">
                                    <input type="text" id="overrcharge-commissione" class="form-control"
                                        name="overrcharge-commissione">
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

                    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary">Submit For Authorization</button>
    </div>








                </div>

            </div>
        </form>
    </div>









    <!-- Submit Button -->
   



    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>