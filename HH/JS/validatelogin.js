
function Name()
{
    
    var n=document.getElementById("name").value;
    
 
   if(n.length>5)
    {
        document.getElementById("error").innerHTML="";
    }
    else 
    {
        document.getElementById("error").innerHTML="invalid name";
        
        
    }
}

function Lname()
{
    
    var n=document.getElementById("lname").value;
    
 
   if(n.length>3)
    {
        document.getElementById("lerror").innerHTML="";
    }
    else 
    {
        document.getElementById("lerror").innerHTML="invalid name";
        
        
    }
}

function Mobile()
{
    
    var mobile=document.getElementById("mobno").value;
    
 if(Number.isSafeInteger(mobile)) //&& mobile.length>=8)
    {
        document.getElementById("moberr").innerHTML="";
        
    }
    else 
    {
        
        document.getElementById("moberr").innerHTML="invalid Number";
        
        
    }
}


function username()
{
    var domains=[".com",".net",".org",".edu"]
    var un=document.getElementById("userid").value;
    var check=un.substr((un.length-4),4);
   // if(check!=".com")
   if(domains.includes(check))
    {
        document.getElementById("error1").innerHTML="Your email is: "+un;
        
        //return (true);
        //return un;
    }
    else 
    {
        document.getElementById("error1").innerHTML="invalid email format";
        //return 0;
        
    }
    //return true;
}
function Checkpassword()
{
   
   var pw=document.getElementById("password").value;
   //console.log(pw.length); 
    if(pw.length<=5)
    {
        document.getElementById("error2").innerHTML="invalid password";
        return 0;
    }
    else 
    {
      
        document.getElementById("error2").innerHTML="Your password is: "+pw;
        document.getElementById("error2").style.color=white;
        return pw;
        
    }
return true;
}
function validatedate(inputText)
  {
  var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
 
  if(inputText.value.match(dateformat))
  {
  document.form1.text1.focus();
  
  var opera1 = inputText.value.split('/');
  var opera2 = inputText.value.split('-');
  lopera1 = opera1.length;
  lopera2 = opera2.length;
  
  if (lopera1>1)
  {
  var pdate = inputText.value.split('/');
  }
  else if (lopera2>1)
  {
  var pdate = inputText.value.split('-');
  }
  var dd = parseInt(pdate[0]);
  var mm  = parseInt(pdate[1]);
  var yy = parseInt(pdate[2]);
  
  var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];
  if (mm==1 || mm>2)
  {
  if (dd>ListofDays[mm-1])
  {
  alert('Invalid date format!');
  return false;
  }
  }
  if (mm==2)
  {
  var lyear = false;
  if ( (!(yy % 4) && yy % 100) || !(yy % 400)) 
  {
  lyear = true;
  }
  if ((lyear==false) && (dd>=29))
  {
  alert('Invalid date format!');
  return false;
  }
  if ((lyear==true) && (dd>29))
  {
  alert('Invalid date format!');
  return false;
  }
  }
  }
  else
  {
  alert("Invalid date format!");
  document.form1.text1.focus();
  return false;
  }
  }

function detail()
{
    if(username()!="")
  
    {
        
        document.getElementById("details").innerHTML="Your email is: "+un+ "And password is "+pw;
       
    }
    else 
    {
        document.getElementById("error3").innerHTML="";
        return false;
        
    }
    //var pw=document.getElementById("password").value;
    //var un=document.getElementById("email").value;
    alert("Your email is: "+un+ "And password is "+pw);
    //return false;
}







