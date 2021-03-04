<?php
session_start();

// Puzzle 1
if (isset($_POST['btn1'])) {
   if (empty(trim($_POST['nameInput']))) {
      $_SESSION['errorMsg'] = "الرجاء ادخال اسم";
      header('location: /SherlockHolmes/puzzles?puzzle=1');
   } else {
      if (trim($_POST['nameInput']) == "احمد") {
         $_SESSION['pass1'] = true;
         header('location: /SherlockHolmes/puzzles?puzzle=2');
      } else {
         $_SESSION['errorMsg'] = "الاسم خاطئ , حاول مجدداً";
         header('location: /SherlockHolmes/puzzles?puzzle=1');
      }
   }
}

// Puzzle 2
if (isset($_POST['btn2'])) {
   if (empty(trim($_POST['nameInput']))) {
      $_SESSION['errorMsg'] = "الرجاء ادخال اسم";
      header('location: /SherlockHolmes/puzzles?puzzle=2');
   } else {
      if (trim($_POST['nameInput']) == "سعد") {
         $_SESSION['pass2'] = true;
         header('location: /SherlockHolmes/puzzles?puzzle=3');
      } else {
         $count = --$_SESSION['count'];
         $_SESSION['errorMsg'] = "الاسم خاطئ , حاول مجدداً , بقيت لديك $count محاولات";
         header('location: /SherlockHolmes/puzzles?puzzle=2');
      }
   }
}

// Puzzle 3
if (isset($_POST['btn3'])) {
   if (empty(trim($_POST['numberInput']))) {
      $_SESSION['errorMsg'] = "الرجاء ادخال رقم";
      header('location: /SherlockHolmes/puzzles?puzzle=3');
   } else {
      $temp =  trim($_POST['numberInput']);
      if ($temp == 23) {
         $_SESSION['pass3'] = true;
         header('location: /SherlockHolmes/puzzles?puzzle=4');
      } else {
         $_SESSION['errorMsg'] = "الرقم خاطئ , حاول مجدداً";
         header('location: /SherlockHolmes/puzzles?puzzle=3');
      }
   }
}

// Puzzle 4
if (isset($_POST['btn4'])) {
   if (empty(trim($_POST['nameInput']))) {
      $_SESSION['errorMsg'] = "الرجاء ادخال اسم";
      header('location: /SherlockHolmes/puzzles?puzzle=4');
   } else {
      if (trim($_POST['nameInput']) == "مروان") {
         $_SESSION['pass4'] = true;
         header('location: /SherlockHolmes/puzzles?puzzle=5');
      } else {
         $count = --$_SESSION['count'];
         $_SESSION['errorMsg'] = "الاسم خاطئ , حاول مجدداً , بقيت لديك $count محاولات";
         header('location: /SherlockHolmes/puzzles?puzzle=4');
      }
   }
}

//Puzzle 5
if (isset($_POST['btn5'])) {
   if (empty(trim($_POST['code'])) || !is_numeric(strval(trim($_POST['code'])))) {
      $_SESSION['errorMsg'] = "الرجاء ادخال رقم";
      header('location: /SherlockHolmes/puzzles?puzzle=5');
   } else {

      $msgArr = array(0, 0);

      $temp = trim(strval($_POST['code']));
      if (strlen($temp )!= 4) {
         $_SESSION['errorMsg'] = "الرجاء ادخال رقم مكون من 4 خانات";
         header('location: /SherlockHolmes/puzzles?puzzle=5');
      } else if ($temp == '3841') {
         $_SESSION['pass5'] = true;
         header('location: /SherlockHolmes/puzzles?puzzle=6');
      } else {

      // To check the position
      if (strpos($temp, "3") !== false) {
         $msgArr[0] += 1;
      }
      if (strpos($temp, "8") !== false) {
         $msgArr[0] += 1;
      }
      if (strpos($temp, "4") !== false) {
         $msgArr[0] += 1;
      }
      if (strpos($temp, "1") !== false) {
         $msgArr[0] += 1;
      }

      // To 
      if ($temp[0] == "3") {
         $msgArr[1] += 1;
      }
      if ($temp[1] == "8") {
         $msgArr[1] += 1;
      }
      if ($temp[2] == "4") {
         $msgArr[1] += 1;
      }
      if ($temp[3] == "1") {
         $msgArr[1] += 1;
      }

      $message = "";
      $message =  $message . "\nيوجد " . strval($msgArr[0]) . " ارقام صحيحة.";
      $message = $message . "\nيوجد " . strval($msgArr[1]) . " من هذه الأرقام في الخانات الصحيحة.";
      

      $_SESSION['errorMsg'] = $message;
      header('location: /SherlockHolmes/puzzles?puzzle=5');
   
      }
   }
}

// Puzzle 6
if (isset($_POST['btn6'])) {
   if (empty(trim($_POST['nameInput']))) {
      $_SESSION['errorMsg'] = "الرجاء ادخال اسم";
      header('location: /SherlockHolmes/puzzles?puzzle=6');
   } else {
      if (trim($_POST['nameInput']) == "زياد") {
         $_SESSION['pass6'] = true;
         header('location: /SherlockHolmes/puzzles?puzzle=7');
      } else {
         $count = --$_SESSION['count'];
         $_SESSION['errorMsg'] = "الاسم خاطئ , حاول مجدداً , بقيت لديك $count محاولات";
         header('location: /SherlockHolmes/puzzles?puzzle=6');
      }
   }
}

// Puzzle 7
if (isset($_POST['btn7'])) {
   if (empty(trim($_POST['nameInput']))) {
      $_SESSION['errorMsg'] = "الرجاء ادخال اسم";
      header('location: /SherlockHolmes/puzzles?puzzle=7');
   } else {
      $temp = strtoupper(trim($_POST['nameInput']));
      if ($temp == "الألماني" || $temp == "الالماني" || $temp == "الماني" || $temp == "ألماني") {
         $_SESSION['pass7'] = true;
         header('location: /SherlockHolmes/puzzles?puzzle=8');
      } else {
         $_SESSION['errorMsg'] = "الإسم خاطئ , حاول مجدداً.";
         header('location: /SherlockHolmes/puzzles?puzzle=7');
      }
   }
}

// Puzzle 8
if (isset($_POST['btn8'])) {
   if (empty(trim($_POST['nameInput']))) {
      $_SESSION['errorMsg'] = "الرجاء ادخال اسم";
      header('location: /SherlockHolmes/puzzles?puzzle=8');
   } else {
      $temp = strtoupper(trim($_POST['nameInput']));
      if ($temp == "BILL") {
         $_SESSION['pass8'] = true;
         // the end of the challenge
         header('location: /SherlockHolmes/final');
      } else {
         $count = --$_SESSION['count'];
         $_SESSION['errorMsg'] = "الاسم خاطئ , حاول مجدداً , بقيت لديك $count محاولات";
         header('location: /SherlockHolmes/puzzles?puzzle=8');
      }
   }
}
