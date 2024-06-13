<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" id="pagestyle" href="styles/style.css">
    <link rel="preload" href="/styles/dark.css" as="style">
    <style>
*{
    box-sizing:border-box
}
.container{
    display: flex;
    position:relative;
    justify-content: center;
    align-items: center;
    height: 100%;
}
.mySlides{
    display: flex;
    justify-content: center;
    align-items: center;
}
.gallery-item{
    width: 80vh;
}
.next,.prev{
    cursor:pointer;
    position:absolute;
    width:auto;
    padding:16px;
    color:#fff;
    font-weight:700;
    font-size:20px;
    border-radius:0 3px 3px 0;
    user-select:none;
    -webkit-user-select:none}
.next{
    right:0;
    border-radius:3px 0 0 3px
}
.prev{
    left:0;
}
.next:hover,.prev:hover{
    background-color:rgba(0,0,0,.8)
}
.numbertext{
    color:#f2f2f2;
    font-size:12px;
    padding:8px 12px;
    position:absolute;
    top:0
}
.row:after{
    content:"";
    display:table;
    clear:both
}
.demo{
    opacity:.6
}
.active,.demo:hover{
    opacity:1
}
.overlay{
    height:100%;
    width:0;
    position:fixed;
    z-index:10;
    left:0;
    top:0;
    background-color:#000;
    background-color:rgba(0,0,0,.9);
    overflow-y: hidden;
    overflow-x: hidden;
    transition:.5s
}
.overlay-content{
    position:relative;
    width:100%;
    text-align:center;
    height: 100%;
}
.overlay a{
    padding:8px;
    text-decoration:none;
    font-size:36px;
    color:#818181;
    display:block;
    transition:.3s
}
.overlay a:focus,.overlay a:hover{
    color:#f1f1f1
}
.closebtn{
    z-index: 12;
}
.overlay .closebtn
{
    position:absolute;
    top:20px;
    right:45px;
    font-size:60px
}@media screen and (max-height:450px){
    .overlay a{
        font-size:20px
    }
    .overlay .closebtn{
        font-size:40px;
        top:15px;
        right:35px}
}
    </style>
</head>
<?php
$photo = 1;
?>
<body onload="langChange(); mode()">
<?php include_once 'navbar.php' ?>
<main class="wraper">
<?php include_once 'archive-menu.php'?>
<div class="title"><div class="text text-up" style=" width: fit-content;" data-translatable>ARCHIVE // ΑΡΧΕΙΟ</div></div>
<section class="flex archive">
    <div class="flex row center" >
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
    </div>
    <div class="flex row center">
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
    </div>
    <div class="flex row center">
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
    </div>
    <div class="flex row center">
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
    </div>
    <div class="flex row center">
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
        <div class="flex img-box" onclick="openNav();currentSlide(<?php echo $photo;?>)"><img class="archive-item" src="/images/archive/get<?php echo $photo;$photo += 1?>.jpeg" alt=""></div>
    </div>
</section>

<?php include_once 'footer.php' ?>

</main>
</body>
</html>