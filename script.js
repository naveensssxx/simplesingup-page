function singup() {
    var name = document.getElementById("name");
    var email = document.getElementById("Email");
    var mobile = document.getElementById("Mobile");
    var pw = document.getElementById("Password");

var f =new FormData();

f.append("n" , name.value);
f.append("e" , email.value);
f.append("m" , mobile.value);
f.append("p" , pw.value);

var r = new XMLHttpRequest();
r.onreadystatechange = function(){
    if(r.readyState == 4 && r.status == 200){
        var response= r.responseText;
        alert(response);

    }



}
r.open("POST" , "process.php" , true);
r.send(f);

}


