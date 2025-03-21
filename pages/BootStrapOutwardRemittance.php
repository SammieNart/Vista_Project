<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OutwardRemittance</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        body {

            background-color: #f7d5d3;
        }
    </style>

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







    <div class=".container-fluid sm">
        <form action = "" method = "post" onsubmit="alert('Transaction has been submitted!');">
            <div class="row g-3">
                <h2 class="mb-4">OutwardRemittance</h2>

                <ul class="nav nav-tabs" id="horizontalTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab-outwardremittance" data-bs-toggle="tab"
                            data-bs-target="#content-outwardremittance" type="button" role="tab"
                            aria-controls="content-outwardremittance" aria-selected="true">OutwardRemittance</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-commission" data-bs-toggle="tab"
                            data-bs-target="#content-commission" type="button" role="tab" aria-controls="tab-commission"
                            aria-selected="false">Charge/Commission</button>
                    </li>
                </ul>

                <div class="tab-content">

                    <div class="tab-pane fade show active" id="content-outwardremittance" role="tabpanel"
                        aria-labelledby="tab-outwardremittance">
                        <div class="row ">
                            <!-- Outward Clearing Tab -->
                            <div id="outwardremittance" class="tab-pane fade show active">
                                <div class="mb-3 row">
                                    <label for="transaction_currency"
                                        class="col-sm-2 col-form-label required">Transaction Currency</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="transaction_currency" name="transactioncurrency"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="debit_account" class="col-sm-2 col-form-label required">Debit
                                        Account</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="debit_account" name="debitaccount" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="debit_value_date" class="col-sm-2 col-form-label">Debit Value
                                        Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" id="debit_value_date" name="debitvaluedate"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="debit_narrative" class="col-sm-2 col-form-label required">Debit
                                        Narrative.1</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="debit_narrative" name="debitnarrative" value=""
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="instruction_code" class="col-sm-2 col-form-label">Instruction
                                        Code.1</label>
                                    <div class="col-sm-4">
                                        <p>SDVA</p>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="ordering_customer" class="col-sm-2 col-form-label required">Ordering
                                        Customer Line 1.1</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="ordering_customer" name="orderingcustomer"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="beneficiary_account"
                                        class="col-sm-2 col-form-label required">Beneficiary Customer Account</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="beneficiary_account" name="beneficiaryaccount"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="beneficiary_name" class="col-sm-2 col-form-label required">Beneficiary
                                        Customer Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="beneficiary_name" name="beneficiaryname"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="beneficiary_address1"
                                        class="col-sm-2 col-form-label required">Beneficiary Customer Address</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="beneficiary_address1" name="beneficiaryaddress1"
                                            class="form-control mb-2">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="credit_account" class="col-sm-2 col-form-label required">Credit
                                        Account</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="credit_account" name="creditaccount"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="cheque_number" class="col-sm-2 col-form-label">Cheque Number</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="cheque_number" name="chequenumber" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="credit_amount" class="col-sm-2 col-form-label required">Credit
                                        Amount</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="credit_amount" name="creditamount" 
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="credit_value_date" class="col-sm-2 col-form-label">Credit Value
                                        Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" id="credit_value_date" name="creditvaluedate"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="treasury_rate" class="col-sm-2 col-form-label">Treasury Rate</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="treasury_rate" name="treasuryrate" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="message_priority" class="col-sm-2 col-form-label">Message
                                        Priority</label>
                                    <div class="col-sm-4">
                                        <select id="message_priority" name="messagepriority" class="form-select">
                                            <option value="">Select</option>
                                            <option value="high">High</option>
                                            <option value="normal">Normal</option>
                                            <option value="low">Low</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="bypass_rtgs" class="col-sm-2 col-form-label">Bypass RTGS Limit
                                        Rule</label>
                                    <div class="col-sm-4">
                                        <select id="bypass_rtgs" name="bypassrtgs" class="form-select">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="message_alerte" class="col-sm-2 col-form-label">Message
                                        d'Alerte.1</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="message_alerte" name="messagealerte"
                                            class="form-control">
                                    </div>
                                </div>

                            </div>

                        </div>


                        <!-- Audit Tab -->

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
                                        value="credit-less-charges" name = "commissioncredit">
                                    <label class="form-check-label " for="commission-credit">Credit Less Charges</label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="radio" id="commission-debit"
                                        name = "commissiondebit" value="debit-plus-charges">
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

                


        <button type="submit" class="btn btn-primary">Submit For Authorization</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>