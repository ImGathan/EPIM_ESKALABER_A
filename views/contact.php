<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/EPIM_ESKALABER_A/public/css/contact.css">
</head>
<body>
    <div class="layout">
        <div class="bg">
            <h1>CONTACT FORM</h1>
        <form action="../controller/registerController.php" method="POST">
                    <div class="input-box">
                        <input type="text" name="name" placeholder=" " required>
                        <label for="name">Your Name</label>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" placeholder=" " required>
                        <label for="email"> YOUR email</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="message" placeholder=" " required>
                        <label for="message">Your Name</label>
                    </div>
                    <div class="btn">
                        <button type="submit">SUBMIT</button>
                    </div>
                </form>
            
        </div>
    </div>
</body>
</html>
