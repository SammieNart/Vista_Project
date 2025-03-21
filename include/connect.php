<?php 

$host="localhost";
$user="root";
$pass="";
$dbname = "test";
$conn=new mysqli($host,$user,$pass,$dbname);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    echo "Failed to connect to DB: " . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

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
$mailing = $_POST['mailing'];
$paymethod = $_POST['paymethod'];
$commissionCode = $_POST['commissionCode'];
$commissionCodewaive = $_POST['commissionCodewaive'];
$commissionType = $_POST['commissionType'];
$commissionAmt = $_POST['commissionAmt'];
$commissionFor = $_POST['commissionFor'];
$chargeCode = $_POST['chargeCode'];
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
$fedFunds = $_POST['fedFunds'];
$message = $_POST['message'];
$iblcCodeCr = $_POST['iblcCodeCr'];
$iblccountrydr = $_POST['iblc-country-dr'];
$iblccountrycr = $_POST['iblc-country-cr'];
$iblccountrych = $_POST['iblc-country-ch'];
$futuredate = $_POST['futuredate'];
$blcodedr = $_POST['blccodedr'];
$Immediately = $_POST['Immediately'];
$ftbbandebit = $_POST['ftbbandebit'];
$ftbbancredit = $_POST['ftbbancredit'];
$snapinp = $_POST['snapinp'];
$snapauth = $_POST['snapauth'];
$snapid = $_POST['snap-id'];
$versioncheck = $_POST['versioncheck'];
$slipno = $_POST['slipno'];
$localchqnos = $_POST['localchqnos'];
$benaccount1 = $_POST['benaccount1'];
$benamount1 = $_POST['benamount1'];
$benefname1 = $_POST['benefname1'];
$applversion = $_POST['applversion'];
$narration = $_POST['narration'];
$transcur = $_POST['transcur'];
$tradedate = $_POST['tradedate'];
$exchangerate = $_POST['exchangerate'];
$debtheirref = $_POST['deb-their-ref'];
$credtheirref = $_POST['credtheirref'];
$currencylocal = $_POST['currencylocal'];
$amountlcy = $_POST['amountlcy'];
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
$drptable = $_POST['drptable'];
$bencustomer1 = $_POST['bencustomer1'];
$bencustomer2 = $_POST['bencustomer2'];
$bencustomer3 = $_POST['bencustomer3'];
$bencustomer4 = $_POST['bencustomer4'];
$rtgsmsgtype = $_POST['rtgsmsgtype'];
$rtgsid = $_POST['rtgsid'];
$rtgsofsstatus = $_POST['rtgsofsstatus'];
$benefacct = $_POST['benefacct'];
$altdebit = $_POST['altdebit'];
$participantbic = $_POST['participantbic'];
$participantb = $_POST['participantb'];
$altcredit =$_POST['altcredit'];
$isorrn = $_POST['isorrn'];
$isolocation = $_POST['isolocation'];
$recordstatus = $_POST['recordstatus'];
$currnumber = $POST['currnumber'];
$inputterchargecommission = $_POST['inputterchargecommission'];
$datetime = $_POST['datetime'];
$authoriser = $_POST['authoriser'];
$companycode = $_POST['companycode'];
$departmentcode = $_POST['departmentcode'];
$auditorchargecommission = $_POST['auditorchargecommission'];
$auditdatetime = $_POST['auditdatetime'];


}


// Prepare SQL query
$stmt = $conn->prepare("INSERT INTO fundstransfertest (debitAcctNo, currencyMktDr, debitCurrency, debitAmount, debitValueDate, creditTheirRef, creditAcctNo, creditMktCr, creditCurrency, creditAmount, creditValueDate, treasuryRate, negDealerRefNo, processingDate, orderingCust, orderingBank, acctWithBank, benAcctNo, bencustomer1, chequeNumber, paymentDetails, bcBankSortCode, receiverBank, recCorrBank, mailing, paymethod, commissionCode, commissionCodewaive, commissionType, commissionAmt, commissionFor, chargeCode, chargeType, chargeAmt, chargeFor, customerSpread, baseCurrency, profitCentreCust, profitCentreDept, priorityTxn, bkToBkInfo, exposureDate, fedFunds, message1, iblcCodeCr, iblccountrydr, iblccountrycr, iblccountrych, futuredate, blcodedr, Immediately, ftbbandebit, ftbbancredit, snapinp, snapauth, snapid, versioncheck, slipno, localchqnos, benaccount1, benamount1, benefname1, applversion, narration, bencustomer2, bencustomer3, bencustomer4, rtgsmsgtype, rtgsid, rtgsofsstatus, benefacct, altdebit, participantbic, participantb, altcredit, isorrn, isolocation, recordstatus, currnumber, inputterchargecommission,datetime1, authoriser, companycode, departmentcode, auditorchargecommission, auditdatetime, transcur, tradedate, exchangerate, debtheirref, credtheirref, currencylocal, amountlcy, relref, amountfcy, ftversion, msgpriority, rtgsresbypass, crdrmarker, bendetails, benefamount, remittanceinfo1, transcode, eventcode) 
VALUES ('$debitAcctNo', '$currencyMktDr', '$debitCurrency', '$debitAmount', '$debitValueDate', '$creditTheirRef', '$creditAcctNo', '$creditMktCr', '$creditCurrency', '$creditAmount', '$creditValueDate', '$treasuryRate', '$negDealerRefNo', '$processingDate', '$orderingCust', '$orderingBank', '$acctWithBank', '$benAcctNo', '$bencustomer1', '$chequeNumber', '$paymentDetails', '$bcBankSortCode', '$receiverBank', '$recCorrBank', '$mailing', '$paymethod', '$commissionCode', '$commissionCodewaive', '$commissionType', '$commissionAmt', '$commissionFor', '$chargeCode', '$chargeType', '$chargeAmt', '$chargeFor', '$customerSpread', '$baseCurrency', '$profitCentreCust', '$profitCentreDept', '$priorityTxn', '$bkToBkInfo', '$exposureDate', '$fedFunds', '$message', '$iblcCodeCr', '$iblccountrydr', '$iblccountrycr', '$iblccountrych', '$futuredate', '$blcodedr', '$Immediately', '$ftbbandebit', '$ftbbancredit', '$snapinp', '$snapauth', '$snapid', '$versioncheck', '$slipno', '$localchqnos', '$benaccount1', '$benamount1', '$benefname1', '$applversion', '$narration', '$bencustomer2', '$bencustomer3', '$bencustomer4', '$rtgsmsgtype', '$rtgsid', '$rtgsofsstatus', '$benefacct', '$altdebit', '$participantbic', '$participantb', '$altcredit', '$isorrn', '$isolocation', '$recordstatus', '$currnumber', '$inputterchargecommission', '$datetime', '$authoriser', '$companycode', '$departmentcode', '$auditorchargecommission', '$auditdatetime', '$transcur', '$tradedate', '$exchangerate', '$debtheirref', '$credtheirref', '$currencylocal', '$amountlcy', '$relref', '$amountfcy', '$ftversion', '$msgpriority', '$rtgsresbypass', '$crdrmarker', '$bendetails', '$benefamount', '$remittanceinfo1', '$transcode', '$eventcode')");
$stmt->bind_param("iii", );

// Execute query
if ($stmt->execute()) {
    echo "<h3 style='color: green;'>Data inserted successfully!</h3>";
} else {
    throw new Exception("Failed to insert data: " . $stmt->error);
}

// Close statement
$stmt->close();


// Close database connection
$conn->close();
?>
