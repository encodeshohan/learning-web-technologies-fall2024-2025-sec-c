function edit_user(event){
    event.preventDefault();
    let old_uname = document.getElementById("old_uname").value;
    let uname = document.getElementById("new_uname1").value;
    let ename = document.getElementById("new_ename1").value;
    let cname = document.getElementById("new_cname1").value;
    let contact = document.getElementById("new_contact1").value;
    let password = document.getElementById("new_password1").value;


    let xhttp = new XMLHttpRequest();
    xhttp.open("post", "../controller/edit_user_check.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("old_name=" + old_uname + "&new_uname=" + uname + "old_ename=" + old_ename + "&new_ename=" + ename + "old_cname=" + old_cname + "&new_cname=" + cname + "old_contact=" + old_contact + "&new_contact=" + contact "&new_password=" + password );
    
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("display").innerText = this.response;
        }
    };
}

