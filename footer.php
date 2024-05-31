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