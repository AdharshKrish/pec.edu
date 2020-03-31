    var i = 0;
    var txt1;
    var txt; 
    var speed = 95;
    var x;
    var x1;
    start();
    function start(){
        txt1='CMS';
        txt ='ContentManagementSystem';
        setTimeout(delay,2000);}
    function delay(){
        if (i < (txt1.length + 8)) {                         
            document.getElementById("cms").innerHTML += txt1.charAt(i);
            i++;
            setTimeout(delay, speed);
        } else {
            i = 0;
            x=txt1.length;
            backward();
            setTimeout(typeWriter,2000);
        }        
    }
    function typeWriter() {
        if (i < (txt.length + 15)) {             
            document.getElementById("cms").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        } else {  
            i=0;
            x=txt.length;
            backward();            
            setTimeout(start,2000);
        }
    }
    function backward(){
        if(x>0) {
          x1=txt.slice(0,x-1);
          document.getElementById("cms").innerHTML=x1;
           x--;
          setTimeout(backward,speed);
        }
        else{ 
            x=0;
        }
    }

    function change(){
        document.getElementById("label_pass").innerHTML="";
        document.getElementById("label_pass").innerHTML="Password";
        document.getElementById("button").innerHTML="";
        document.getElementById("button").innerHTML="LOG IN";
        document.getElementById("username").placeholder="";
        document.getElementById("username").placeholder="  Password";
        document.getElementById("msg").innerHTML="Please check mail for OTP";
    }

    function move() {
        document.getElementById('rec').style.transform = "translate(300%,0)";
        document.getElementById("otp").action="./DB_TRANS/facultylogin.php?role=faculty";
        document.getElementById("label1").innerHTML="Faculty Login";
        document.getElementById('web').style.display="block";
        document.getElementById('cell').style.display="none";
        // setTimeout("window.location.href='faculty.html'",2000);
    }

    function move0() {
        document.getElementById("label1").innerHTML="Webmaster Login";        
        document.getElementById('rec').style.transform = "translate(12%,0)";
        document.getElementById("otp").action="./DB_TRANS/login.php?role=webmaster";
        document.getElementById('web').style.display="block";
        document.getElementById('cell').style.display="none";        
        // setTimeout("window.location.href='webmaster.html'",2000);
    }

    function move2() {
        document.getElementById("label1").innerHTML="Webhandler Login";
        document.getElementById("otp").action="./DB_TRANS/login.php?role=webhandler";
        document.getElementById('rec').style.transform = "translate(500%,0)";
        document.getElementById('web').style.display="block";
        document.getElementById('cell').style.display="none";
    }
    function move3()
    {
        document.getElementById("label1").innerHTML="4Cs Login";
        document.getElementById("otp").action="./DB_TRANS/ccc_login.php?role=ccc";
        document.getElementById('rec').style.transform = "translate(835%,0)";
        document.getElementById('web').style.display="none";
        document.getElementById('cell').style.display="flex";
    }
