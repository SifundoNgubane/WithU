<!DOCTYPE html>
<html lang="en">
<?php
include_once 'includes/header.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autofocus Field</title>
    <link rel="stylesheet" type="text/css" href="css/otp.css">
</head>

<body>
    <div class="container">
        <h1>ENTER OTP</h1>
        <div class="userInput">
            <input type="text" id="ist" maxlength="1" onkeyup="moveToNextField(this, 'sec')">
            <input type="text" id="sec" maxlength="1" onkeyup="moveToNextField(this, 'third')">
            <input type="text" id="third" maxlength="1" onkeyup="moveToNextField(this, 'fourth')">
            <input type="text" id="fourth" maxlength="1" onkeyup="moveToNextField(this, 'fifth')">
            <input type="text" id="fifth" maxlength="1">
        </div>
        <button id="redirectButton">CONFIRM</button>
    </div>

    <script>
        function moveToNextField(currentField, nextFieldId) {
            var currentValue = currentField.value;
            var maxLength = parseInt(currentField.getAttribute('maxlength'));

            if (currentValue.length >= maxLength) {
                document.getElementById(nextFieldId).focus();
            }
        }

        document.getElementById("redirectButton").addEventListener("click", function () {
            var userInput = document.getElementById("ist").value + document.getElementById("sec").value +
                            document.getElementById("third").value + document.getElementById("fourth").value +
                            document.getElementById("fifth").value;
            
            if (userInput === "12345") {
                window.location.href = "Firstcampaign.php";
            } else {
                alert("Invalid code. Access denied.");
            }
        });
    </script>
</body>

</html>
