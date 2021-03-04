<!DOCTYPE html>
<?php session_start(); ?>

<html>

<head>
   <title>puzzles</title>
   <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
   <style>
      .bg {
         height: 100%;
         background-repeat: no-repeat;
         background-position: center;
         background-size: cover;
         background-attachment: fixed;

      }

      .set {
         font-family: 'Cairo', sans-serif;
         color: white;
         text-align: center;
         font-size: 25px;
         margin-top: 30px;
         text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;

      }
   </style>
</head>
<?php if (isset($_SESSION['count']) && $_SESSION['count'] == 0) { ?>
   <!-- game over -->
   <?php
   // To block access to the puzzles after the game is over , (as a new player)
   for ($i = 0; $i <= 10; $i++) {
      unset($_SESSION['pass' . $i]);
   }
   ?>

   <body class="bg" style="background-image: url(images/dark6Blured.jpg);">
      <div class="container set bg-text" style="color: white;">
         <h1 class="display-3" style="text-align:center; margin-top:180px;color:red;">! تم سحب رخصة التحقيق منك </h1>
         <a style="font-size:27px;margin-top:10px;" href="/SherlockHolmes/" class="btn btn-dark btn-lg">حاول مجدداً</a>
      </div>
   </body>
<?php } else if (isset($_GET['puzzle']) && $_GET['puzzle'] == 1) { ?>
   <!-- Puzzle 1 -->

   <body class="bg" style="background-image: url(images/scaryBlured.jpg);">

      <?php if (isset($_SESSION['errorMsg'])) { ?>
         <div class="container set" style="color: white;">
            <span style="color:red; font-size:30px;margin-top: 0px;">
               <?php
               echo $_SESSION['errorMsg'];
               echo "<br>";
               unset($_SESSION['errorMsg']);
               ?>
            </span>
         </div>
      <?php } ?>

      <div class="container set bg-text" style="color: white;">
         <h1 class="display-3" style="text-align:center; margin-top:45px;color:royalblue;">استخرج الإسم</h1>
         <p>في يوم ما <span style="color: red;">انتقلنا</span> إلى العيش بمنزل جديد نظرا لتغير طبيعة عمل زوجي ، كان المنزل الجديد جميلا للغاية واسعا وأثاثه على أحدث طراز ، لقد تيقنت أننا سنهنأ بالعيش فيه ؛ ولكن لاحظت شيئا غريبا على ابنتي الصغيرة التي لم تتجاوز العام الواحد من عمرها بعد ، كانت عندما تبكي كعادتها وعادة كل مولود على الفور تستقطع بكائها بضحكات عالية ، وكان هذا الأمر مخيف بالنسبة لي ، <span style="color: red;">حتى</span> جاءت ليلة ارتفع صوت بكاء صغيرتي فهممت إليها وبمجرد اقترابي من حجرة نومها سمعت صوتا جميلا يغني لها ، فبدأت ابنتي في الضحك بصوت عال كما تفعل ، اقتربت أكثر لأكتشف هوية <span style="color: red;">من </span> تغني لابنتي وإذا بها امرأة غريبة لم تقع عيني عليها من قبل ، تمكنت من تمييز شكلها ، فهي امرأة متوسطة القامة تتسم ببياض لون بشرتها وأيضا شعرها ، اقتربت أكثر لأميز ملامح وجهها غير أنها اختفت في لمح البصر ، تجمد جسدي بالكامل مما رأيت ، على الفور اخذت ابنتي واتجهت نحو <span style="color: red;">درج </span> الغرفة ومن ثم أخبرت زوجي بما حدث ورحلنا عن المنزل ولكن مازالت ابنتي تضحك بأصوات عالية أثناء بكائها.
         </p>
         <h4 style="color: #FFE55E; font-size:25px; text-align:center; margin-top:60px">تلميح: الكلمات التي باللون الاحمر هي المفتاح </h4>
         <h4 style="color: #FFE55E; font-size:25px; text-align:center; margin-top:40px">: اسمي هو</h4>

         <div class="container">
            <div class="row justify-content-center text-center" style="margin-top: 12px;">
               <form action="Server" method="POST">
                  <div class="form-group">
                     <div class="input-group">
                        <input class="form-control" type="text" name="nameInput">
                     </div>
                     <button class="btn btn-dark" name="btn1" style="margin-top: 10px;">! تحقق</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
<?php } else if (isset($_GET['puzzle']) && $_GET['puzzle'] == 2 && isset($_SESSION['pass1']) && $_SESSION['pass1'] == true) { ?>
   <!-- Puzzle 2 -->

   <body class="bg" style="background-image: url(images/dark4Blured.jpg);">

      <?php if (isset($_SESSION['errorMsg'])) { ?>
         <div class="container set" style="color: white;">
            <span style="color:red; font-size:30px;margin-top: 0px;">
               <?php
               echo $_SESSION['errorMsg'];
               echo "<br>";
               unset($_SESSION['errorMsg']);
               ?>
            </span>
         </div>
      <?php } ?>

      <div class="container set" style="color: white;">
         <h1 class="display-3" style="text-align:center; margin-top:45px;color:royalblue;">من هو القاتل</h1>
         <p>ذهب ساعي البريد لتوصيل بعض الطرود الى منزل قديم , وعند دخوله المنزل وجد رجل مقتول بطلق في الجبين , اتصل مباشرة بالشرطة حتى تحقق في عملية القتل , وبعدما جاء ضابط الشرطة اتهم ثلاثة اشخاص , الاول خالد ساعي البريد ومن ثم اسماء مربية المنزل واخيراً سعد ابن الرجل المقتول , تم استجواب جميع المتهم بهم , قال ساعي البريد : "كنت اقوم بتوصيل البريد للرجل ثم وجدته مقتولاً وملقى على الأرض" , قال الابن : "كنت اقوم بتصوير ابي ثم وجدت شخص ضربة بمسدس من خلفه وقتله" , واخيراً قالت مربية المنزل : "كنت نائمة بعد مجهود طويل في المنزل ولم ارى احدا" , احتار الضابط في معرفة القاتل , فمن هو <span style="color:red;">القاتل</span> ؟
         </p>
         <h6 style="color: #FFE55E; font-size:15px; text-align:center; margin-top:60px">اختر بعناية</h6>
         <h4 style="color: #FFE55E; font-size:25px; text-align:center; margin-top:20px">: اسم القاتل هو</h4>

         <div class="container">
            <div class="row justify-content-center text-center" style="margin-top: 12px;">
               <form action="Server" method="POST">
                  <div class="form-group">
                     <div class="input-group">
                        <input class="form-control" type="text" name="nameInput">
                     </div>
                     <button class="btn btn-dark" name="btn2" style="margin-top: 10px;">! اتهم</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>

<?php } else if (isset($_GET['puzzle']) && $_GET['puzzle'] == 3 && isset($_SESSION['pass2']) && $_SESSION['pass2'] == true) { ?>
   <!-- Puzzle 3 -->

   <body class="bg" style="background-image: url(images/spaceBlurred.jpg);">

      <?php if (isset($_SESSION['errorMsg'])) { ?>
         <div class="container set" style="color: white;">
            <span style="color:red; font-size:30px;margin-top: 0px;">
               <?php
               echo $_SESSION['errorMsg'];
               echo "<br>";
               unset($_SESSION['errorMsg']);
               ?>
            </span>
         </div>
      <?php } ?>

      <style>
         * {
            direction: rtl;
         }

         img {
            border: .05em solid black;
            width: 2.75em;
         }
      </style>
      <div class="container set bg-text" style="color: white;">
         <h1 class="display-3" style="text-align:center; margin-top:45px;color:royalblue;">استخرج الرقم</h1>
         <p>الأرقام على اليسار تمثل مجموع كل صف, واما الأرقام في الأسفل تمثل مجموع كل عامود!<br> أخرج الرياضي الذي بداخلك, هل تستطيع أن تجد العدد الذي يمثل علامة الإستفهام؟
         </p>

         <table class="mt-4 table table-sm table-bordered  table-dark " style="color: white;">
            <tr>
               <td class="align-middle p-0" scope="row"><img draggable="false" src="images/theif1.svg"></td>
               <td class="align-middle p-0"><img draggable="false" src="images/theif2.svg"></td>
               <td class="align-middle p-0"><img draggable="false" src="images/theif2.svg"></td>
               <td class="align-middle p-0"><img draggable="false" src="images/theif3.svg"></td>
               <td class="align-middle p-0">14</td>
            </tr>
            <tr>
               <td class="align-middle p-0" scope="row"><img draggable="false" src="images/theif1.svg"></td>
               <td class="align-middle p-0"><img draggable="false" src="images/theif1.svg"></td>
               <td class="align-middle p-0"><img draggable="false" src="images/theif3.svg"></td>
               <td class="align-middle p-0"><img draggable="false" src="images/theif3.svg"></td>
               <td class="align-middle p-0">20</td>
            </tr>
            <tr>
               <td class="align-middle p-0" scope="row"><img draggable="false" src="images/theif4.svg"></td>
               <td class="align-middle p-0"><img draggable="false" src="images/theif3.svg"></td>
               <td class="align-middle p-0"><img draggable="false" src="images/theif2.svg"></td>
               <td class="align-middle p-0"><img draggable="false" src="images/theif4.svg"></td>
               <td class="align-middle p-0">26</td>
            </tr>
            <tr>
               <td class="align-middle p-0" scope="row"><img draggable="false" src="images/theif3.svg"></td>
               <td class="align-middle p-0"><img draggable="false" src="images/theif3.svg"></td>
               <td class="align-middle p-0"><img draggable="false" src="images/theif2.svg"></td>
               <td class="align-middle p-0"><img draggable="false" src="images/theif4.svg"></td>
               <td class="align-middle p-0">23</td>
            </tr>
            <tr>
               <td class="align-middle p-0"><span style="color: red; font-weight: bolder; font-size:  3rem;">?</span>
               </td>
               <td class="align-middle p-0">18</td>
               <td class="align-middle p-0">12</td>
               <td class="align-middle p-0">30</td>
            </tr>
         </table>

         <div class="container">
            <h4 style="color: #FFE55E; font-size:25px; text-align:center; margin-top:40px">الرقم هو :</h4>
            <div class="row justify-content-center text-center" style="margin-top: 12px;">
               <form action="Server" method="POST">
                  <div class="form-group">
                     <div class="input-group">
                        <input class="form-control" type="text" name="numberInput">
                     </div>
                     <button class="btn btn-dark" name="btn3" style="margin-top: 10px;">تحقق !</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>





<?php } else if (isset($_GET['puzzle']) && $_GET['puzzle'] == 4 && isset($_SESSION['pass3']) && $_SESSION['pass3'] == true) { ?>
   <!-- Puzzle 4 -->

   <body class="bg" style="background-image: url(images/dark7Blured.jpg);">

      <?php if (isset($_SESSION['errorMsg'])) { ?>
         <div class="container set" style="color: white;">
            <span style="color:red; font-size:30px;margin-top: 0px;">
               <?php
               echo $_SESSION['errorMsg'];
               echo "<br>";
               unset($_SESSION['errorMsg']);
               ?>
            </span>
         </div>
      <?php } ?>

      <div class="container set" style="color: white;">
         <h1 class="display-3" style="text-align:center; margin-top:45px;color:royalblue;">من هو القاتل</h1>
         <p class="">في مساء احدى الايام تلقت الشرطة بلاغاً عن جريمة قتل في احدى الفنادق ! , حضرت الشرطة وحضر المحققون لمسرح الجريمة , اثناء التحقيق تم الاشتباه بشكل رئيسي بأربعة اشخاص وهم : مهند , ورامي , ومروان , ورياض , وعند استجوابهم عن ماذا كانو يفعلون اثناء وقوع الجريمة , قال مهند : "لقد كنت استمتع بوقتي امام التلفاز" , وقال رامي : "كنت بغرفتي اخطط لتوفير المال الخاص بي" , وقال مروان: "كنت استمتع بمشاهدة الطيور وسماع تغريدها الجميل" , واخيراً قال رياض : "لقد كنت بالمطبخ اجهز طعام العشاء" , بعد الاستماع افادات المشتبه بهم , من هو <span style="color:red;">القاتل</span> ؟
         </p>
         <h6 style="color: #FFE55E; font-size:15px; text-align:center; margin-top:60px">اختر بعناية</h6>
         <h4 style="color: #FFE55E; font-size:25px; text-align:center; margin-top:20px">: اسم القاتل هو</h4>

         <div class="container">
            <div class="row justify-content-center text-center" style="margin-top: 12px;">
               <form action="Server" method="POST">
                  <div class="form-group">
                     <div class="input-group">
                        <input class="form-control" type="text" name="nameInput">
                     </div>
                     <button class="btn btn-dark" name="btn4" style="margin-top: 10px;">! اتهم</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>

<?php } else if (isset($_GET['puzzle']) && $_GET['puzzle'] == 5 && isset($_SESSION['pass4']) && $_SESSION['pass4'] == true) { ?>
   <!-- Puzzle 5 -->

   <body class="bg" style="background-image: url(images/cellBlurred.jpg);">

      <?php if (isset($_SESSION['errorMsg'])) { ?>
         <div class="container set" style="color: white;">
            <span style="color:red; font-size:30px;margin-top: 0px;">
               <?php
               echo $_SESSION['errorMsg'];
               echo "<br>";
               unset($_SESSION['errorMsg']);
               ?>
            </span>
         </div>
      <?php } ?>

      <style>
         * {
            direction: rtl;
         }
      </style>
      <div class="container set bg-text" style="color: white;">
         <h1 class="display-3" style="text-align:center; margin-top:45px;color:royalblue;">خزنة السجين #1337</h1>
         <p>تم العثور على خزنة سجين قام بسرقة أموالاً من أحد البنوك,<br>لكن السجين رفض أن يصرح بالرقم السري الخاص بالخزنة
            <br>هل تستطيع أن تستخرج الرقم ؟<br>
         </p>

         <div class="container">
            <h4 style="color: #FFE55E; font-size:18px; text-align:center; ">الرقم مكون من 4 خانات</h4>
            <h4 style="color: #FFE55E; font-size:25px; text-align:center; ">رقم الخزنة هو :</h4>
            <form action="Server" method="POST" class="w-100">
               <div class="btn-group-vertical ml-4 mt-3" role="group">
                  <div class="btn-group">
                     <input type="text" maxlength=4 class="text-center form-control-lg mb-3" style="height:2.5em; width: 100%;" id="code" name="code">
                  </div>
                  <div class="btn-group" style="direction: ltr; height: 2.5em; width: 12em;">
                     <button type="button" class="m-auto border border-primary btn btn btn-dark py-3" onclick="if(document.getElementById('code').value.length>=4) return; document.getElementById('code').value=document.getElementById('code').value + '1';">1</button>
                     <button type="button" class="m-auto border border-primary btn btn-dark py-3" onclick="if(document.getElementById('code').value.length>=4) return; document.getElementById('code').value=document.getElementById('code').value + '2';">2</button>
                     <button type="button" class="m-auto border border-primary btn btn-dark py-3" onclick="if(document.getElementById('code').value.length>=4) return; document.getElementById('code').value=document.getElementById('code').value + '3';">3</button>
                  </div>
                  <div class="btn-group" style="direction: ltr; height: 2.5em; width: 12em;">
                     <button type="button" class="m-auto border border-primary btn btn-dark py-3" onclick="if(document.getElementById('code').value.length>=4) return; document.getElementById('code').value=document.getElementById('code').value + '4';">4</button>
                     <button type="button" class="m-auto border border-primary btn btn-dark py-3" onclick="if(document.getElementById('code').value.length>=4) return; document.getElementById('code').value=document.getElementById('code').value + '5';">5</button>
                     <button type="button" class="m-auto border border-primary btn btn-dark py-3" onclick="if(document.getElementById('code').value.length>=4) return; document.getElementById('code').value=document.getElementById('code').value + '6';">6</button>
                  </div>
                  <div class="btn-group" style="direction: ltr; height: 2.5em; width: 12em;">
                     <button type="button" class="m-auto border border-primary btn btn-dark py-3" onclick="if(document.getElementById('code').value.length>=4) return; document.getElementById('code').value=document.getElementById('code').value + '7';">7</button>
                     <button type="button" class="m-auto border border-primary btn btn-dark py-3" onclick="if(document.getElementById('code').value.length>=4) return; document.getElementById('code').value=document.getElementById('code').value + '8';">8</button>
                     <button type="button" class="m-auto border border-primary btn btn-dark py-3" onclick="if(document.getElementById('code').value.length>=4) return; document.getElementById('code').value=document.getElementById('code').value + '9';">9</button>
                  </div>
                  <div class="form-group">
                     <div class="input-group">
                        <div class="btn-group" style="direction: ltr; height: 2.5em; width: 12em;">
                           <button type="button" class="m-auto border border-primary btn btn-dark py-3 px-1" onclick="document.getElementById('code').value=document.getElementById('code').value.slice(0, -1);">مسح</button>
                           <button type="button" class="m-auto border border-primary btn btn-dark py-3" onclick="if(document.getElementById('code').value.length>=4) return; document.getElementById('code').value=document.getElementById('code').value + '0';">0</button>
                           <button type="submit" class="m-auto border border-primary btn btn-primary py-3 px-1" name="btn5" onclick="">تحقق</button>
                        </div>
                     </div>
            </form>
         </div>
      </div>
      </div>
      </div>
   </body>

<?php } else if (isset($_GET['puzzle']) && $_GET['puzzle'] == 6 && isset($_SESSION['pass5']) && $_SESSION['pass5'] == true) { ?>
   <!-- Puzzle 6 -->

   <body class="bg" style="background-image: url(images/dark15Blured.jpg);">

      <?php if (isset($_SESSION['errorMsg'])) { ?>
         <div class="container set" style="color: white;">
            <span style="color:red; font-size:30px;margin-top: 0px;">
               <?php
               echo $_SESSION['errorMsg'];
               echo "<br>";
               unset($_SESSION['errorMsg']);
               ?>
            </span>
         </div>
      <?php } ?>

      <div class="container set" style="color: white;">
         <h1 class="display-3" style="text-align:center; margin-top:45px;color:royalblue;">من هو القاتل</h1>
         <p>وقعت جريمة قتل في احدى المطاعم , وصلت الشرطة مع المحققين على الفور الى مسرح الجريمة , تم استجواب جميع الزبائن في المطعم كل على حده , قال حاتم : "لقد كنت وقتها ادفع فاتورة العشاء" , وقال فارس : "كنت في ذلك الوقت اتابع اعمالي على الانترنت" , وقال زياد : "لقد كنت اقف منتظراً في الصف لدخول الحمام" , وقال يوسف : "عندما وقعت الجريمة كنت اتكلم على هاتفي المحمول" , بعد سماع الافادات , من هو <span style="color:red;">القاتل</span> ؟
         </p>
         <h6 style="color: #FFE55E; font-size:15px; text-align:center; margin-top:60px">اختر بعناية</h6>
         <h4 style="color: #FFE55E; font-size:25px; text-align:center; margin-top:20px">: اسم القاتل هو</h4>

         <div class="container">
            <div class="row justify-content-center text-center" style="margin-top: 12px;">
               <form action="Server" method="POST">
                  <div class="form-group">
                     <div class="input-group">
                        <input class="form-control" type="text" name="nameInput">
                     </div>
                     <button class="btn btn-dark" name="btn6" style="margin-top: 10px;">! اتهم</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>

<?php } else if (isset($_GET['puzzle']) && $_GET['puzzle'] == 7 && isset($_SESSION['pass6']) && $_SESSION['pass6'] == true) { ?>
   <!-- Puzzle 7 -->

   <body class="bg" style="background-image: url(images/dark11Blurred.jpg);">

      <?php if (isset($_SESSION['errorMsg'])) { ?>
         <div class="container set" style="color: white;">
            <span style="color:red; font-size:30px;margin-top: 0px;">
               <?php
               echo $_SESSION['errorMsg'];
               echo "<br>";
               unset($_SESSION['errorMsg']);
               ?>
            </span>
         </div>
      <?php } ?>

      <style>
         * {
            direction: rtl;
         }
      </style>
      <div class="container set bg-text" style="font-size: 1.5em; color: white; line-height: 100%;">
         <h1 class="display-3" style="text-align:center; margin-top:45px; margin-bottom: 35px; color:royalblue;">استخرج الشخص</h1>
         <ul class="list-group p-0">
            <li class="list-group-item bg-dark border-secondary">هناك خمسة منازل بجانب بعضها على صف واحد, وكل منزل له لون يختلف عن الاخر. </li>
            <li class="list-group-item bg-dark border-secondary">كل منزل يسكنه شخص جنسيته مختلفه عن الآخرين. </li>
            <li class="list-group-item bg-dark border-secondary">كل شخص من السكان يربي حيوان مختلف عن الاخرين, ولديه مشروب مفضل يختلف عن الاخرين, ويأكل نوعاًً من الدونات مختلف عن الأخرين.</li>
            <li class="list-group-item bg-dark border-secondary">الحقائق: </li>
            <li class="list-group-item bg-dark border-secondary">البريطاني يسكن في المنزل الأحمر.</li>
            <li class="list-group-item bg-dark border-secondary">السويدي يربي كلب.</li>
            <li class="list-group-item bg-dark border-secondary">الدنماركي يشرب الشاي.</li>
            <li class="list-group-item bg-dark border-secondary">المنزل الأخضر على يسار المنزل الأبيض.</li>
            <li class="list-group-item bg-dark border-secondary">مالك المنزل الأخضر يشرب القهوة.</li>
            <li class="list-group-item bg-dark border-secondary">الشخص الذي يأكل الدونات السادة يربي عصفور.</li>
            <li class="list-group-item bg-dark border-secondary">مالك المنزل الأصفر يأكل الدونات بالفستق.</li>
            <li class="list-group-item bg-dark border-secondary">الشخص الذي يسكن في المنزل الواقع في المنتصف يشرب الحليب.</li>
            <li class="list-group-item bg-dark border-secondary">النرويجي يسكن بالمنزل الاول.</li>
            <li class="list-group-item bg-dark border-secondary">الشخص الذي يأكل الدونات بالشوكولاتة يسكن بجانب الشخص الذي يربي قطة.</li>
            <li class="list-group-item bg-dark border-secondary">الشخص الذي يربي خيل يسكن بجانب الشخص الذي يأكل الدونات بالفستق.</li>
            <li class="list-group-item bg-dark border-secondary">الشخص الذي يأكل الدونات بالفراولة يشرب شراب من الشعير.</li>
            <li class="list-group-item bg-dark border-secondary">الألماني يأكل الدونات بالفانيلا.</li>
            <li class="list-group-item bg-dark border-secondary">النرويجي لديه جار منزله أزرق.</li>
            <li class="list-group-item bg-dark border-secondary">الشخص الذي يأكل الدونات بالشوكولاتة لديه جار يشرب الماء.</li>
            <li class="list-group-item bg-dark border-secondary">المطلوب عليك هو اكتشاف من يربي السمك ؟</li>
         </ul>
         <div class="container">
            <h4 style="color: #FFE55E; font-size:16px; text-align:center; margin-top:20px">سوف تحتاج إلى ورقة وقلم</h4>
            <h4 style="color: #FFE55E; font-size:25px; text-align:center; ">الشخص هو (جنسية الشخص) :</h4>
            <div class="row justify-content-center text-center" style="margin-top: 12px;">
               <form action="Server" method="POST">
                  <div class="form-group">
                     <div class="input-group">
                        <input class="form-control" type="text" name="nameInput">
                     </div>
                     <button class="btn btn-dark" name="btn7" style="margin-top: 10px;">تحقق !</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>

<?php } else if (isset($_GET['puzzle']) && $_GET['puzzle'] == 8 && isset($_SESSION['pass7']) && $_SESSION['pass7'] == true) { ?>
   <!-- Puzzle 8 -->

   <body class="bg" style="background-image: url(images/dark13Blured.jpg);">

      <?php if (isset($_SESSION['errorMsg'])) { ?>
         <div class="container set" style="color: white;">
            <span style="color:red; font-size:30px;margin-top: 0px;">
               <?php
               echo $_SESSION['errorMsg'];
               echo "<br>";
               unset($_SESSION['errorMsg']);
               ?>
            </span>
         </div>
      <?php } ?>

      <div class="container set" style="color: white;">
         <h1 class="display-3" style="text-align:center; margin-top:45px;color:royalblue;">من هو القاتل</h1>
         <p>

            اختفى محقق مكلف بالتحقيق في قضية سرقة نفط , لذا ذهبت الشرطة الى اخر مكان كان يتواجد فيه المحقق , وعندما وصلوا الى ذلك المكان , وجدو ورقة مكتوب عليها الارقام التالية (7718 51 5508 34 57735 710) , تم الاشتباه بشكل رئيسي بثلاثة اشخاص
            <br>
            (BILL , TODD , JOHN)
            <br>
            ! حاول فك الشيفرة لمعرفة من هو <span style="color:red;">القاتل</span>
         </p>
         <h6 style="color: #FFE55E; font-size:15px; text-align:center; margin-top:60px">اختر بعناية</h6>
         <h4 style="color: #FFE55E; font-size:25px; text-align:center; margin-top:20px">: اسم القاتل هو</h4>

         <div class="container">
            <div class="row justify-content-center text-center" style="margin-top: 12px;">
               <form action="Server" method="POST">
                  <div class="form-group">
                     <div class="input-group">
                        <input class="form-control" type="text" name="nameInput">
                     </div>
                     <button class="btn btn-dark" name="btn8" style="margin-top: 10px;">! اتهم</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>

<?php } else {
   require('E404.php');
} ?>

</html>