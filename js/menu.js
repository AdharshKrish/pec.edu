function menu(elt,item)
{
    if(window.outerWidth<996){
        document.getElementById('menu-col-1').style.display = 'none';
        document.getElementById('menu-col-2').style.display = 'none';
        document.getElementById('menu2-cover').style.display = 'block';
        document.getElementById('menu-col-3').style.display = 'block';
        document.getElementById('menu-col-4').style.display = 'block';
        document.getElementById('menu-col-4').style.left='50%';
    }
    document.getElementById('menu-col-3').classList.replace('col-4','col-6');
    document.getElementById('menu-col-4').classList.replace('col-8','col-6');
    document.getElementById('menu-col-3').style.borderRight='none';

    var m2 = document.getElementsByClassName("menu2");
    for (i = 0; i < m2.length; i++)
        m2[i].classList.remove("active-m2");

    elt.classList.add('active-m2');
    
    if(item==='gallery'){
        document.getElementById('menu-col-3').innerHTML='<img src="../img/gallery.jpg" alt="college-img" width="260">';
        document.getElementById('menu-col-4').innerHTML='';
    }
    else if(item==='oncampus'){
        if(window.outerWidth<996){
            document.getElementById('menu-col-3').classList.replace('col-6','col-4');
            document.getElementById('menu-col-4').classList.replace('col-6','col-8');
            document.getElementById('menu-col-4').style.left='35%';
        }
        document.getElementById('menu-col-3').style.borderRight='1px solid #707070';
        document.getElementById('menu-col-3').innerHTML='<ul><li class="menu3">Campus&nbsp;Life</li><li class="menu3" onmouseover="menu1(this,1)">Committees<img src="../img/forward.svg" style="float:right;height:15px;margin-top:1.5vw" alt=">"></li><li class="menu3" onmouseover="menu1(this,2)">Cells<img src="../img/forward.svg" style="float:right;height:15px;margin-top:1.5vw" alt=">"></li><li class="menu3" onmouseover="menu1(this,3)">Clubs<img src="../img/forward.svg" style="float:right;height:15px;margin-top:1.5vw" alt=">"></li><li class="menu3" onmouseover="menu1(this,4)">Chapters<img src="../img/forward.svg" style="float:right;height:15px;margin-top:1.5vw" alt=">"></li><li class="menu3">Facilities</li></ul>';
        document.getElementById('menu-col-4').innerHTML='';
    }
    else if(item==='departments'){
        document.getElementById('menu-col-3').innerHTML='<ul><li>Chemical Engineering</li><li>Chemistry</li><li>Civil Engineering</li><li>Computer Science and Engineering</li><li>Electronics and Communication Engineering</li></ul>';
        document.getElementById('menu-col-4').innerHTML='<ul><li>Electronics and Instrumentation Engineering</li><li>Humanities and Social Sciences</li><li>Information Technology</li><li>Mathematics</li><li>Mechanical Engineering</li><li>Physics</li></ul>';
    }
    else{
        document.getElementById('menu-col-3').innerHTML='<p class="menu-about">Pondicherry Engineering College (PEC) is an Institution sponsored by the Union Territory of Pondicherry, India. The College was started in 1984 under the VII Five Year Plan. It is an autonomous Institution for the purposes of administration, staff recruitment and College development and is managed by a Board of Governors. <a href="http://www.pec.edu">Read more..</a></p>';
        document.getElementById('menu-col-4').innerHTML='<img src="../img/about.jpg" alt="college-img" style="width:18vw">';
    }
}
function menu1(elt,index)
{
    var m2 = document.getElementsByClassName("menu3");
    for (var i = 0; i < m2.length; i++)
        m2[i].classList.remove("active-m2");

    elt.classList.add('active-m2');

    if(index==1){
        document.getElementById('menu-col-4').innerHTML='<ul><li>Alumni Association</li><li>Examination Wing</li><li>Internal Complaints Committee</li><li>National Cadet Corps</li><li>National Service Scheme</li><li>Students’ Council</li><li>Students’ Disciplinary Committee</li></ul>';
    }else if(index==2){
        document.getElementById('menu-col-4').innerHTML='<ul><li>Center for Continuing Education</li><li>Counselling and Career Guidance Cell</li><li>Grievance Redressal Cell</li><li>Innovation and Entrepreneurship Development Cell</li><li>Internal Quality Assurance Cell</li><li>IP Rights and Patenting Cell</li><li>SC/ST Cell</li><li>Womens’ Cell</li></ul>';
    }else if(index==3){
        document.getElementById('menu-col-4').innerHTML='<ul><li>Cultural Club</li><li>Design Club</li><li>Health, Hygiene and Environmental Club</li><li>Literary Club</li><li>Multimedia Club</li><li>Photography Club</li><li>Rotaract Club</li><li>Tamil Mandram</li></ul>';
    }else if(index==4){
        document.getElementById('menu-col-4').innerHTML='<ul id="chapter-font"><li>National Programme on Technology Enhanced Learning</li><li>Quality Enhancement in Engineering Education</li><li>Swayam</li></ul>';
    }
}
document.addEventListener('scroll',()=>{
    if(window.outerWidth>980){
        if(window.pageYOffset>100){
            document.getElementsByClassName('mob-btn')[0].style.display='block';
        }
        else{
            document.getElementsByClassName('mob-btn')[0].style.display='none';

        }
    }else{
        document.getElementsByClassName('mob-btn')[0].style.display='block';
    }
});

$(window).resize(function() {
        // window.setTimeout(()=>{location.reload()},1500);
        if(window.outerWidth>996){
            document.getElementById('menu-col-1').style.display = 'block';
            document.getElementById('menu-col-2').style.display = 'block';
            document.getElementById('menu2-cover').style.display = 'none';
            document.getElementById('menu-col-3').innerHTML='';
            document.getElementById('menu-col-4').innerHTML='';
            document.getElementById('menu-col-4').style.left='0';
        }
});

function goBack(){
    document.getElementById('menu-col-1').style.display = 'block';
    document.getElementById('menu-col-2').style.display = 'block';
    document.getElementById('menu2-cover').style.display = 'none';
    document.getElementById('menu-col-3').style.display = 'none';
    document.getElementById('menu-col-4').style.display = 'none';
}

function change(){
    document.getElementsByClassName('menu-icon')[0].classList.toggle('change')
    document.getElementsByClassName('menu-icon')[1].classList.toggle('change')
}

function focusS(){
    window.scrollTo(0,0);setTimeout(()=>{document.getElementById('focus').focus();},0);
    document.getElementById('focusChk').focus();
}