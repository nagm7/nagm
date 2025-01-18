<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نجم</title>
    <style>
        body{
            margin-top: 50px;
            border-radius: 10px;

            height: 100vh;
            width: 100vw;
            position: relative;
   

        }
                form{
            align-items: center;
           justify-items: center;
           margin: auto;
            
        }
        fieldset{
            border: solid 3px rgb(0, 0, 0);
            border-radius: 20px;
            box-shadow: rgb(3, 118, 141) -5px 10px 10px;
        }
        legend{
            color: blueviolet;
        }
.m1{
    border: #7cdef6 solid 3px;

display: flex;
align-items: center;
justify-self: center;
}








td{
    border: solid 1px;
    padding: 200px;
}
.sup{
            color: rgb(255, 255, 255);
            background: rgb(70, 238, 168);
            width: 300px;
            transform: translate(0px,0px);
            box-shadow: 3px 5px 4px rgb(84, 209, 231);
            border-radius: 10px;
            border: rgb(58, 219, 255); 
            padding: 10px;
            margin: 10px 5px 10px 15px;
            border: rgb(197, 31, 16); ;

          }
          .sup:hover{
           cursor: pointer;
           background: rgb(134, 105, 101);
           transform: scale(1.05);
          }
    </style>
</head>
<body>
    <form action="index.html" method="get">
        <fieldset> 
        <legend > Information </legend>
          <p id="n1"></p>
          <p id="p1"> </p>
            <input type="submit" class="sup" value="الرجوع للرئيسية" onclick="location.href=">
            
    <script>
        const par = new URLSearchParams(window.location.search);
        const n1 = document.getElementById('n1'); 
        const n2 = par.get('name'); 
        n1.textContent=`Your name Is : ${n2}` ;
        const p1 = document.getElementById('p1'); 
        const p2 = par.get('pa'); 
        n1.textContent=`Your name Is : ${n2}` ;
        p1.textContent = `Password : ${p2}` ;
        console.log(document.cookie) ;
        </script>
        <br>

<?php
setcookie("nagm",'mohammed',time()+60*60*24);
?>
<br>
<?php
if(isset($_COOKIE["nagm"]))
{
    echo  " تم ايجاد الكوكيز";
}
else{
    echo "غير موجود الكوكيز";
}

?>
<br>
<?php
session_start();
if(!empty($_SESSION['nagm'])){
    $_SESSION['nagm']++;
}else{
    $_SESSION['nagm']=1;
}
echo $_SESSION['nagm'];

?>
</body>
</html>