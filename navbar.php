<a onclick="setCookie('language', 'gr'); i18n.changeLanguage('gr');" id="gr"></a>
<a onclick="setCookie('language', 'en'); i18n.changeLanguage('en');" id="en"></a>
<a onclick="setCookie('mode', 'dark'); mode()" id="dark-button"></a>
<a onclick="setCookie('mode', 'light'); mode()" id="light-button"></a>
<div id="banner-box">
  <img src="images\gallery\banner.jpg" id="banner">
  <img src="images\icons\psad-icon.svg" id="banner">
</div>
<nav id="navdiv">
    <ul id="navbar">
      
        <a href="index.php" class="m-link"><li id="no-border" class="m-item" data-translatable>HOME // ΑΡΧΙΚΉ</li></a>
        <a href="about-us.php" class="m-link"><li class="m-item" data-translatable>ABOUT US // ΣΧΕΤΙΚΑ ΜΕ ΕΜΑΣ</li></a>
        <a href="courses-work.php" class="m-link"><li class="m-item" data-translatable>COURSES-WORKSHOPS // ΜΑΘΗΜΑΤΑ-ΕΡΓΑΣΤΗΡΙΑ</li></a>
        <a href="erasmus.php" class="m-link"><li class="m-item" data-translatable>ERASMUS</li></a>
        <a href="events.php" class="m-link"><li class="m-item" data-translatable>EVENTS // ΕΚΔΗΛΩΣΕΙΣ</li></a>
        <a href="archive.php" class="m-link"><li class="m-item" data-translatable>ARCHIVE // ΑΡΧΕΙΟ</li></a>
        <a href="contact-us.php" class="m-link"><li class="m-item" data-translatable>CONTACT US // ΕΠΙΚΟΙΝΩΝΗΣΤΕ ΜΑΖΙ ΜΑΣ</li></a>
    </ul> 
</nav>

<script>

let prevScrollPos = window.pageYOffset;
window.addEventListener('scroll', function() {
  const currentScrollPos = window.pageYOffset;
    if (prevScrollPos > currentScrollPos) {
    document.getElementById("navdiv").style.transform = "translateY(0px)";
    } else {
    document.getElementById("navdiv").style.transform = "translateY(-200px)";
  }
  prevScrollPos = currentScrollPos;
});

</script>