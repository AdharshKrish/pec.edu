    var i = 0;
    var txt1;
    var txt; 
    var speed = 85;
    var x;
    var x1;
    start();
    function start(){
        txt1='CMS';
        txt ='ContentManagementSystem';
        setTimeout(delay,3000);}
    function delay(){
        if (i < (txt1.length + 8)) {                         
            document.getElementById("cms").innerHTML += txt1.charAt(i);
            i++;
            setTimeout(delay, speed);
        } else {
            i = 0;
            x=txt1.length;
            backward();
            setTimeout(typeWriter,3000);
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
            setTimeout(start,3000);
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
     
       
            var x;
            x = document.getElementById("username").value;
            if (x == "") {
                alert("Enter a Valid mail id or username");
                return false;
            }
            else{
                var email=document.getElementById("username").innerText;
                $.ajax({
                    url: "./DB_TRANS/login.php?role=webmaster",
              type: "GET",
              data: {email:email},
              contentType: false,
                    cache: false,
              processData:false,
              success: function(data)
              {
                document.getElementById("label_pass").innerHTML="";
                document.getElementById("label_pass").innerHTML="Password";
                document.getElementById("button").innerHTML="";
                document.getElementById("button").innerHTML="LOG IN";
                document.getElementById("username").placeholder="";
                document.getElementById("username").placeholder="  Password";
                document.getElementById("msg").innerHTML="Please check mail for OTP";
              }});

            }
        
    }

    function move() {
        document.getElementById("label1").innerHTML="Faculty Login";
        document.getElementById("otp").action="./DB_TRANS/login.php?role=faculty";
    }

    function move0() {
        document.getElementById("label1").innerHTML="Webmaster Login";
        document.getElementById("otp").action="./DB_TRANS/login.php?role=webmaster";
    }

    function move2() {
        document.getElementById("label1").innerHTML="Webhandler Login";
        document.getElementById("otp").action="./DB_TRANS/login.php?role=webhandler";
    }
    
    function empty() {
        var x;
        x = document.getElementById("roll-input").value;
        if (x == "") {
            alert("Enter a Valid Roll Number");
            return false;
        };
    }