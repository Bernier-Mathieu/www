function popup() {
  var txt;
  if (confirm("Voulez allez revenir au menu principal ?")) {
    location.replace("http://localhost/Projets/javascript/index.php")
  } else {
    return;
  }
}