function Search() {
    var name = document.getElementById("name").value;
   
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("show").innerHTML = this.responseText;
      }
      else
      {
           document.getElementById("show").innerHTML = this.status;
      }
    };
    xhttp.open("POST", "../control/customerhomepage.php", true);
   
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("name="+name);
  
}

function Price(e) {
  e.preventDefault();
  //console.log("Hello");
  if(chkbox.checked){
  var pid = document.getElementById("chkbox").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("print").innerHTML = this.responseText;
    }
    else
    {
         document.getElementById("print").innerHTML = this.status;
    }
  };
  xhttp.open("POST", "../control/customerhomepage.php", true);
 
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("pid="+pid);
}
else {
  document.getElementById("nothing").innerHTML = "";
}

}

function Order() {
  
  console.log("Hello");
  
  var pid = document.getElementById("chkbox").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ord").innerHTML = this.responseText;
    }
    else
    {
        // document.getElementById("print").innerHTML = this.status;
    }
  };
  xhttp.open("POST", "../control/customerhomepage.php", true);
 
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("pid="+pid);


}


