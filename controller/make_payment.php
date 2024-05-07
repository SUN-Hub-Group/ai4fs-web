<?php
// $dbconnect = mysqli_connect('localhost', 'aifscomn_ai4fs', 'ai4fs__@@2023', 'aifscomn_ai4fs');
$link = mysqli_connect('localhost', 'root', '', 'aifscomn_ai4fs');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

function generatePaymentID($prefix = 'AI4FS')
{
    // Get the current timestamp
    $timestamp = time();
    // Generate a random component
    $randomComponent = mt_rand(1000, 9999);
    // Combine prefix, timestamp, and random component
    $paymentID = $prefix . $timestamp . $randomComponent;
    return $paymentID;
}

if (isset($_POST["make_payment"])) {
    $total_amount = 0;
    $paymeny_exit = array();
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $fullName = mysqli_real_escape_string($link, $_POST['fullName']);
    $phoneNumber = mysqli_real_escape_string($link, $_POST['phoneNumber']);

    $emailExistsQuery = mysqli_query($link, "SELECT * FROM registrations WHERE email = '$email'");
    $emailExists = mysqli_num_rows($emailExistsQuery);

    if ($emailExists > 0) {
        foreach ($_POST as $key => $value) {
            if ($key === "make_payment" or $key === "email" or $key === "fullName" or $key === "phoneNumber") {
                continue;
            } else {
                $payment_reference = generatePaymentID();

                $payment_purpose = htmlspecialchars($key);
                $payment_value = intval($value);
                $total_amount += $payment_value;

                $paymentExistsQuery = mysqli_query($link, "SELECT COUNT(*) FROM payments WHERE payment_purpose = '$payment_purpose' AND status = 1");
                $paymentExists = mysqli_fetch_array($paymentExistsQuery)[0];

                if ($paymentExists > 0) {
                    $paymeny_exit[] = 0;
                } else {
                    $insert_payment_db = "INSERT INTO payments (email, payment_purpose, amount, reference, status) VALUES ('$email', '$payment_purpose', '$payment_value', '$payment_reference', '0')";
                    $paymeny_query = mysqli_query($link, $insert_payment_db);
                    $paymeny_exit[] = 1;
                }
            }
        }

        if (!in_array(0, $paymeny_exit)) {
            echo '<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Payment confirmation</h5>
                                                                    <a href="" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </a>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <strong>Name:</strong> <input readonly style="pointer-events: none; border: none; color: green; width: 400px;" class="no-border" type="text"  value="' . $fullName . '" id="name" ><br>
                                                                    <strong>Transaction Reference:</strong> <input readonly style="pointer-events: none; border: none; color: green;" class="no-border" type="text"  value="' . $payment_reference . '" id="reference"><br>
                                                                    <strong>Amount Total (₦):</strong> <input style="pointer-events: none; border: none; color: green;" value="' . intval($total_amount) + 300 . '" class="no-border" type="text" id="amount">
                                                                    
                                                                    <input type="hidden" id="email" value="' . $email . '">
                                                                    <input type="hidden" id="name" value="' . $fullName . '">
                                                                    <br>Also note that N300 will be charged from your account for the payment gateway (PAYSTACK). There are different cards options you can choose. Go ahead and make payment for <strong>Grantmanship for Innovation, Impact, and Sustainability</strong> Workshop<br>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="" class="btn btn-success" data-dismiss="modal"> Close </a>
                                                                    <script src="https://js.paystack.co/v1/inline.js"></script>
                                                                    
                                                                    <button  class="btn btn-outline-success" onclick="payWithPaystack()">Process to payment</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>';
        } else {
            echo '<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Payment confirmation</h5>
                                                                    <a href="" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </a>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <br> Oops! It seems like you have already registered and made a payment for the selected category. If you will like to make a payment for another category, please choose <b>only</b> the category you have not paid for yet."<br>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="" class="btn btn-success" data-dismiss="modal"> Close </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>';
        }

    } else {
        $insert_user = "INSERT INTO registrations (`name`, `email`, `phone`) VALUE ('$fullName', '$email', '$phoneNumber')";
        $user_query = mysqli_query($link, $insert_user);

        if ($user_query) {

            foreach ($_POST as $key => $value) {
                if ($key === "make_payment" or $key === "email" or $key === "fullName" or $key === "phoneNumber") {
                    continue;
                } else {
                    $payment_reference = generatePaymentID();
                    $payment_purpose = htmlspecialchars($key);
                    $payment_value = intval($value);
                    $total_amount += $payment_value;

                    $insert_payment_db = "INSERT INTO payments (email, payment_purpose, amount, reference, status) VALUES ('$email', '$payment_purpose', '$payment_value', '$payment_reference', '0')";
                    $paymeny_query = mysqli_query($link, $insert_payment_db);
                }
            }

            if ($paymeny_query) {
                echo '<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Payment confirmation</h5>
                                                                    <a href="" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </a>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <strong>Name:</strong> <input readonly style="pointer-events: none; border: none; color: green; width: 400px;" class="no-border" type="text"  value="' . $fullName . '" id="name" ><br>
                                                                    <strong>Transaction Reference:</strong> <input readonly style="pointer-events: none; border: none; color: green;" class="no-border" type="text"  value="' . $payment_reference . '" id="reference"><br>
                                                                    <strong>Amount Total (₦):</strong> <input style="pointer-events: none; border: none; color: green;" value="' . intval($total_amount) + 300 . '" class="no-border" type="text" id="amount">
                                                                    
                                                                    <input type="hidden" id="email" value="' . $email . '">
                                                                    <input type="hidden" id="name" value="' . $fullName . '">
                                                                    <br>Also note that N300 will be charged from your account for the payment gateway (PAYSTACK). There are different cards options you can choose. Go ahead and make payment for <strong>Grantmanship for Innovation, Impact, and Sustainability</strong> Workshop<br>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="" class="btn btn-success" data-dismiss="modal"> Close </a>
                                                                    <script src="https://js.paystack.co/v1/inline.js"></script>
                                                                    
                                                                    <button  class="btn btn-outline-success" onclick="payWithPaystack()">Process to payment</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>';
            }
        }
    }
}

function verify_payment($ref)
{
    global $link;
    $url = 'https://api.paystack.co/transaction/verify/' . $ref;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        [
            'Authorization: Bearer sk_test_c148fc52db3a5313fcf37d707f9cdf84a6e17ff5'
        ]
    );
    //send request
    $request = curl_exec($ch);
    //close connection
    curl_close($ch);
    //declare an array that will contain the result 
    $result = array();
    if ($request) {
        $result = json_decode($request, true);
    } else {
        return 0;

        exit();
    }
    if (!empty($result['data']['status']) and $result['data']['status'] == 'success') {
        $query = mysqli_query($link, "UPDATE payments SET status = 1 WHERE reference = '$ref' ");
        if ($query) {
            return 1;
        } else {
            return 0;
        }
    } else {
        return 0;
    }
}

if (isset($_GET['update_payment_status'])) {
    $paymentID = $_GET['reference'];

    $verify_respone = verify_payment($paymentID);
    if ($verify_respone == 1) {
        header('location: grantmanship.php?type=success&msg=Payment successful.');
    } else {
        header('location: grantmanship.php?type=error&msg=Payment failed.');
    }
}


function checkPaymentPaid($payment_type, $amount)
{
    global $link;
    global $email;
    $selectPayments = mysqli_query($link, "SELECT * FROM payments WHERE payment_type ='$payment_type' AND status = 1 AND user_id = '$email'");

    if (mysqli_num_rows($selectPayments) > 0) {
        $row = mysqli_fetch_array($selectPayments);
        if ($row["amount"] == $amount) {
            return 1;
        } elseif ($row["amount"] < $amount) {
            return $amount - $row["amount"];
        } else {
            return 0;
        }

    }
}