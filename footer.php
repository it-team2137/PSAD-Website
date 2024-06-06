
<style>
  .footer {
  background-color: var(--test-color);
  color: black;
  display:flex;
  justify-content: space-evenly;
  padding:2vh 0;
  position: relative;
  bottom:0;
  width:100%;
  margin-top: 1vh;
  }
  .footer div {
  width:fit-content;
  text-align:center;
  }
  .footer-item {
  align-items: center;
  display:flex;
  color:var(--second-color)
  }
  .footer-img{
    height: 4vh;
    padding-right: 1vh;
  }
</style>
<div class="footer">
  <div class="footer-item"> <img class="footer-img" src="\images\icons\fb.svg">     <a href="https://www.facebook.com/PaphosArtStudios/">Facebook</a></div>
  <div class="footer-item"> <img class="footer-img" src="\images\icons\ig.svg"> <a href="https://www.instagram.com/psad_artschool/">Instagram</a></div>
  <div class="footer-item">Website by: ITteam2137<br>ALL IMAGES AND SITE CONTENT COPYRIGHT © 2024 PSAD - ALL RIGHTS RESERVED</div>
</div>


<script>

function setCookie(cname, cvalue){
    document.cookie = cname + "=" + cvalue + "; " + "expires=Thu, 01 Jan 2030 00:00:00 UTC";
}
function showCookie(){
    document.write(document.cookie);
}
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
function langChange(){
    let lang = getCookie("language");
    if (lang == "gr") {
        i18n.changeLanguage('gr')
    } else {
        i18n.changeLanguage('en')
    }
}
function mode() {
    let mode = getCookie("mode")
    if (mode == "dark") {
        swapStyleSheet('styles/dark.css')
    }
    else {
        swapStyleSheet('styles/style.css')
    }
}
function swapStyleSheet(sheet) {
    document.getElementById("pagestyle").setAttribute("href", sheet);  
}

</script>
<script src="./dist/dom-i18n.js"></script>
<script>
  var i18n = window.domI18n({
  selector: '[data-translatable]',
  separator: ' // ',
  languages: ['en', 'gr'],
  defaultLanguage: 'en',
});
</script>