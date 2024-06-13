<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" id="pagestyle" href="styles/style.css">
    <link rel="preload" href="styles/dark.css" as="style">
    <link rel="stylesheet" id="navstyle" href="">
    <style>
        #about  {
        font-size: 1.4rem;
        width:32vw;
        padding: none;
        text-align: center;
        color: var(--second-color);
        transition: background-color 0.6s;
        align-self: center;
        }
        .flex-about {
            display:flex;
            flex-direction: row;
            justify-content:center;
            align-items: center;
            margin-top: 10vh;
        }
        .box {
            display:flex;
            width: 50%;
            position:relative;
            justify-self: center;
            align-items:center;
            align-self: center;
            
        }
        img {
            width:100%;
            display:block;
        }
        #content {
            position: absolute;
            display:flex;
            width:100%;
            height:80%;
            left:0;
            background:rgba(0,0,0,0.75);
            justify-content:center;
            align-items:center;
            flex-direction:column;
            font-size: 1.1rem;
            font-size-adjust: ;
            min-height:none;
            min-width:none;
            padding:0;
            color:white;
            text-align: center;
            transition: background-color 0.6s;
            opacity:0;
            transition:0.6s;
        }
        #content:hover {
            opacity:1;

        }
        
        

    </style>
</head>
<?php include_once 'navbar.php' ?>
<main class="wraper">


<section class="flex-about">
        <div data-translatable class="text" id="about">
            Our workshop is located just outside the centre of Paphos in Chloraka, in a pleasant and well-designed environment for artistic creation and learning.
There are classes for elementary, high school students and all selected Lyceum subjects. Adults are always welcome for individual or group classes. // Το εργαστήρι μας βρίσκεται μόλις έξω από το κέντρο της Πάφου στη Χλώρακα, σε ένα ευχάριστο και κατάλληλα διαμορφωμένο περιβάλλον για καλλιτεχνική δημιουργία και μάθηση.
Στον χώρο λειτουργούν τμήματα για παιδιά δημοτικού, γυμνασίου και όλων των επιλεγόμενων μαθημάτων Λυκείου. Οι ενήλικες είναι πάντα ευπρόσδεκτοι για ατομικά ή ομαδικά τμήματα  
        </div>
        <div class="box">
            <img src="/images/about-us/studio.jpg">
            <div data-translatable class="text" id="content" >
                Arts Center with art classes for children, teenagers and adults. Lessons in perspective and free drawing for high school students. Studio spaces and workshops for independent artists and to create visual portfolios.
                // Κέντρο Τεχνών με τμήματα διδασκαλίας τέχνης για παιδιά, εφήβους και ενήλικες. Μαθήματα προοπτικού και ελεύθερου σχεδίου για μαθητές λυκείου. Χώροι στούντιο και εργαστήρια για ανεξάρτητους καλλιτέχνες και για δημιουργία εικαστικών πορτφόλιων.  
            </div> 
        </div>
        
    
</section>
<?php include_once 'footer.php' ?>
</main>
</body>
</html>