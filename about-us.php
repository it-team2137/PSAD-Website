<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet"  id="pagestyle" href="styles/style.css">
    <link rel="stylesheet" href="styles/nav.css">
    <style>
        section{
            background-color: white;
        }
        #middle{
            width: 50%;
        }
        .text{
            font-size: 24pt;
            
        }
    </style>
</head>
<body onload="langChange(); darkm()">
<?php include_once 'navbar.php' ?>
<!-- <button onclick="setCookie('language', 'gr'); i18n.changeLanguage('gr');">GREEK</button>
<button onclick="setCookie('language', 'en'); i18n.changeLanguage('en')">ENGLISH</button> -->
<!-- <button onclick="showCookie()">Show cookie.</button> -->
<button onclick="mode()">Dark/Light mode</button>

<section>
    <div id="middle">
        <div data-translatable class="text">
            Our workshop is located just outside the centre of Paphos in Chloraka, in a pleasant and well-designed environment for artistic creation and learning.
There are classes for elementary, high school students and all selected Lyceum subjects. Adults are always welcome for individual or group classes. // Το εργαστήρι μας βρίσκεται μόλις έξω από το κέντρο της Πάφου στη Χλώρακα, σε ένα ευχάριστο και κατάλληλα διαμορφωμένο περιβάλλον για καλλιτεχνική δημιουργία και μάθηση.
Στον χώρο λειτουργούν τμήματα για παιδιά δημοτικού, γυμνασίου και όλων των επιλεγόμενων μαθημάτων Λυκείου. Οι ενήλικες είναι πάντα ευπρόσδεκτοι για ατομικά ή ομαδικά τμήματα  
        </div>
        <br>
        <div data-translatable class="text">
            Arts Center with art classes for children, teenagers and adults. Lessons in perspective and free drawing for high school students. Studio spaces and workshops for independent artists and to create visual portfolios.
            // Κέντρο Τεχνών με τμήματα διδασκαλίας τέχνης για παιδιά, εφήβους και ενήλικες. Μαθήματα προοπτικού και ελεύθερου σχεδίου για μαθητές λυκείου. Χώροι στούντιο και εργαστήρια για ανεξάρτητους καλλιτέχνες και για δημιουργία εικαστικών πορτφόλιων.  
        </div>
    </div>
</section>
<?php include_once 'footer.php' ?>
</body>
</html>