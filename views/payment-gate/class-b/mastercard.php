<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/ESKABALER_A/public/css/mastercard.css">
</head>
<body>
    <div class="layout">
        <div class="pay">
            <div class="metode">
                <div class="visa-img ">
                    <img src="http://localhost/ESKABALER_A/public/images/Visa.png" alt="visa">
                </div>
                <div class="mastercard-img ">
                    <img src="http://localhost/ESKABALER_A/public/images/mastercard.png" alt="mc">
                </div>
                <div class="indomaret-img ">
                    <img src="http://localhost/ESKABALER_A/public/images/indomaret.png" alt="indo">
                </div>
                <div class="alfamart-img ">
                    <img src="http://localhost/ESKABALER_A/public/images/alfamart.png" alt="alfa">
                </div>
            </div>
            <div class="form">
                <form action="">
                    <div class="input-box">
                        <input type="text" name="username" placeholder=" " required>
                        <label for="">Your Name</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="num" placeholder=" " required>
                        <label for="">Card Number</label>
                    </div>
                    <div class="line-form">
                        <div class="input-box">
                            <input type="text" name="Expiry" placeholder=" " required>
                            <label for="">Expiry Date</label>
                        </div>
                        <div class="input-box">
                            <input type="text" name="CCV" placeholder=" " required>
                            <label for="">CCV</label>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="btn">
                <button class="btn1">< BACK</button>
                <button class="btn2">CONFIRM PAYMENT</button>
            </div>
        </div>
        <div class="qr">
            <img src="http://localhost/ESKABALER_A/public/images/QR.png" alt="">
        </div>
    </div>
</html>