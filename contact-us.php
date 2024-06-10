<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" id="pagestyle" href="styles/style.css">
    <link rel="stylesheet" href="styles/formstyle.css">
</head>
<body onload="langChange(); mode();">
<?php include_once 'navbar.php' ?>
<main class="wraper">


<section id="flex-contact">
    <div id="main-contact" class="text"><div class="text-up">CONTACT US</div>
        <div id="box2">
            <div id="msg-contact">
                <div class="text-up">Message us</div>
                <?php include_once 'form.php'?>
            </div>
            <div id="social-contact">
                <div class="text-up">Socials</div>
                <div id="social"><img class="icons" src="\images\gallery\gallery5.jpg" alt="img prof" height="50vh">Michalis Theodosiou</div>
                <div id="social"><img class="icons" src="\images\icons\phone.svg" alt="img prof" height="50vh">What's Up!&nbsp<button id="revbutton" style="display:block;" onclick="reveal()">Reavel</button><div id="rev" style="display:none;">&nbsp+357 99 268300</div></div>
                <div id="social"><img class="icons" src="\images\icons\ig.svg" alt="img prof" height="50vh">Instagram</div>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4010.5986825700256!2d32.413964845464854!3d34.793622182435165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14e70745d7b16ea7%3A0xd697a54f81b24ae6!2sPaphos%20Studios%20of%20Art%20and%20Design!5e0!3m2!1sen!2s!4v1717948842704!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    </div>
</section>

<?php include_once 'footer.php' ?>
</main>
</body>
</html>