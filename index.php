<!DOCTYPE html>
<?php
session_start();
$_SESSION['count'] = 3;
?>
<html>

<head>
    <title>Sherlock holmes</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="termynal.css">

    <!-- <script src="terminal.js"></script>     -->
    <!-- <link rel="stylesheet" href="terminal.css"> -->

    <style>
        .bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            background-image: url(images/dark9Blured.jpg);
        }

        .set {
            font-family: 'Cairo', sans-serif;
            text-align: center;
            justify-content: center;
            color: red;
        }
    </style>
</head>

<body class="bg">

    <div class="d-flex container justify-content-center">
        <div class="row w-100">
            <div class="col text-center">
                <img src="images/ftcLogoWhiteNoText.png" class="set mx-auto" style="width:6.5em;">
                <h1 class="mx-auto" style="color:silver; font-size:1.75em;">نادي تقنية المستقبل</h1>
                <h1 class="set mt-5" style="font-size:3.75em; color:silver;">شارلوك هولمز</h1>

                <div class="row ml-auto text-center w-100">
                    <div id="termynal" data-termynal style="direction: rtl; margin: 2.5em auto; line-height: 2;" class="text-right">
                        <span data-ty="input" data-ty-prompt="~/SherlockHolmes/FTC/KSU/>">وقعت عدة أشياء غريبة في الآونة الأخيرة , طلبنا افضل المحققين لحلها , لم يستطع حلها احد ! , نريد مساعدتك في التحقيق وحل مشاكل تعقيدات الظواهر الغريبة</span>
                        <span style="color:red;" data-ty="input" data-ty-prompt="~/SherlockHolmes/FTC/KSU/>">تحذير : سيكون هناك تحقيق في جرائم قتل , وهذا يعني ان عليك اختيار القاتل الصحيح </span>
                        <span style="color:red;" data-ty="input" data-ty-prompt="~/SherlockHolmes/FTC/KSU/>">في حال انك اخترت واتهمت 3 اشخاص بريؤن وليسو قتلة , فسيتم سحب رخصة التحقيق منك , اختر القاتل بعد تحقيق دقيق وبعناية شديدة</span>
                        <span style="color:greenyellow;" data-ty="input" data-ty-prompt="~/SherlockHolmes/FTC/KSU/>">حظاً موفقاً</span>
                        <span data-ty="input" data-ty-prompt="~/SherlockHolmes/FTC/KSU/>"></span>

                        <span data-ty="input">/init -s SherlockHolmes</span>
                        <span data-ty="progress" data-ty-progressPercent="100"></span>
                        <span data-ty><a href="puzzles?puzzle=1" class="btn btn-dark brn-lg text-center d-block">ابدأ التحقيق!</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="termynal.js" data-termynal-container="#termynal"></script>
</body>

</html>