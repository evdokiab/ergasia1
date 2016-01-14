$(document).ready(function() {
  $("#menu").on("click", ".sightseeings", function() {
    $(".sightseeings ul").toggle(400);
    console.log("b")
  })
});
function  ValidationForm(){
  var x=document.forms["myform"]["name"].value;
  var y=document.forms["myform"]["message"].value;
  var z=document.forms["myform"]["lastname"].value;
  var t=document.forms["myform"]["phone-number"].value;
  var e=document.forms["myform"]["email"].value;
  var atpos = e.indexOf("@");
  var dotpos = e.lastIndexOf(".");
  if (x== ""){
    alert("ΤΟ Όνομα ΠΡΕΠΕΙ ΝΑ ΣΥΜΠΛΗΡΩΘΕΙ!");
    return false;
  } else if (z==""){
    alert("ΤΟ Επίθετο ΠΡΕΠΕΙ ΝΑ ΣΥΜΠΛΗΡΩΘΕΙ!");
    return false;
  } else if (t== ""){
    alert("ΤΟ Τηλέφωνο ΠΡΕΠΕΙ ΝΑ ΣΥΜΠΛΗΡΩΘΕΙ!");
    return false;
  } else if (e== ""){
    alert("ΤΟ email ΠΡΕΠΕΙ ΝΑ ΣΥΜΠΛΗΡΩΘΕΙ!");
    return false;
  } else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length) {
    alert("Not a valid e-mail address");
    return false;
  } else if (y== ""){
    alert("ΤΟ Μήνυμα ΠΡΕΠΕΙ ΝΑ ΣΥΜΠΛΗΡΩΘΕΙ!");
    return false;
  } else {
    alert("Η Αποστολή ΠΕΤΥΧΕ!");
    return false;
  }
}

function resetFunction() {
    document.getElementById("big-form").reset();
}

function  ValidationBigForm(){
  var x=document.forms["BigForm"]["MGH"].value;
  var y=document.forms["BigForm"]["SES"].value;
  var z=document.forms["BigForm"]["BWH"].value;
  var t=document.forms["BigForm"][""].value;
  var e=document.forms["BigForm"][""].value;
