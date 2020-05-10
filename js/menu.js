function menu(elt,item)
{
    if(window.outerWidth<996){
        document.getElementById('menu-col-1').style.display = 'none';
        document.getElementById('menu-col-2').style.display = 'none';
        document.getElementById('menu2-cover').style.display = 'block';
        document.getElementById('menu-col-4').style.left='50%';
    }
    document.getElementById('menu-col-3').classList.replace('col-4','col-6');
    document.getElementById('menu-col-4').classList.replace('col-8','col-6');
    document.getElementById('menu-col-3').style.borderRight='none';

    var m2 = document.getElementsByClassName("menu2");
    for (i = 0; i < m2.length; i++)
        m2[i].classList.remove("active-m2");

    elt.classList.add('active-m2');
    
    document.getElementById('menu-col-3').innerHTML='<p class="menu-about">Pondicherry Engineering College (PEC) is an Institution sponsored by the Union Territory of Pondicherry, India. The College was started in 1984 under the VII Five Year Plan. It is an autonomous Institution for the purposes of administration, staff recruitment and college development and is managed by a Board of Governors.</p>';
    document.getElementById('menu-col-4').innerHTML='<img src="../img/about.jpg" alt="college-img" style="width:18vw">';

    if(item==='gallery'){
        document.getElementById('menu-col-3').innerHTML='<a href="../home/gallery.php"><img src="../img/gallery.jpg" alt="college-img" width="260"></a>';
        document.getElementById('menu-col-4').innerHTML='';
    }
    else if(item==='oncampus'){
        if(window.outerWidth<996){
            document.getElementById('menu-col-3').classList.replace('col-6','col-4');
            document.getElementById('menu-col-4').classList.replace('col-6','col-8');
            document.getElementById('menu-col-4').style.left='35%';
        }
        document.getElementById('menu-col-3').style.borderRight='1px solid #707070';
        document.getElementById('menu-col-3').innerHTML='<ul><li onclick="location.href=\'../home/campus-life.html\'" class="menu3">Campus Life</li><li class="menu3" onmouseover="menu1(this,1)">Committees<img src="../img/forward.svg" class="forward" alt=">"></li><li class="menu3" onmouseover="menu1(this,2)">Cells<img src="../img/forward.svg" class="forward" alt=">"></li><li class="menu3" onmouseover="menu1(this,3)">Clubs<img src="../img/forward.svg" class="forward" alt=">"></li><li class="menu3" onmouseover="menu1(this,4)">Chapters<img src="../img/forward.svg" class="forward" alt=">"></li><li class="menu3" onclick="location.href=\'../home/facilities.html\'">Facilities</li></ul>';
        document.getElementById('menu-col-4').innerHTML='';
    }
    else if(item==='departments'){
        document.getElementById('menu-col-3').innerHTML='<ul><li onclick="location.href=\'../che/\'">Chemical Engineering</li><li onclick="location.href=\'../chem/\'">Chemistry</li><li onclick="location.href=\'../ce/\'">Civil Engineering</li><li onclick="location.href=\'../cse/\'">Computer Science and Engineering</li><li onclick="location.href=\'../ece/\'">Electronics and Communication Engineering</li><li onclick="location.href=\'../eee/\'">Electrical and Electronics Engineering</li></ul>';
        document.getElementById('menu-col-4').innerHTML='<ul><li onclick="location.href=\'../eie/\'">Electronics and Instrumentation Engineering</li><li onclick="location.href=\'../hss/\'">Humanities and Social Sciences</li><li onclick="location.href=\'../it/\'">Information Technology</li><li onclick="location.href=\'../maths/\'">Mathematics</li><li onclick="location.href=\'../me/\'">Mechanical Engineering</li><li onclick="location.href=\'../phy/\'">Physics</li></ul>';
    }
    
    if(window.outerWidth<996){

        if(item==='teqip'){
            location.href='http://www.teqip.pec.edu/';
        }else if(item==='about'){
            location.href='../home/about-pec.html';
        }else if(item==='gallery'){
            location.href='../home/gallery.php';
        }
        else if(item==='administration'){
            location.href='../home/administration.html';
        }

        setTimeout(()=>{
            document.getElementById('menu-col-3').style.display = 'block';
            document.getElementById('menu-col-4').style.display = 'block';
        },100)
    }
}
function menu1(elt,index)
{
    var m2 = document.getElementsByClassName("menu3");
    for (var i = 0; i < m2.length; i++)
        m2[i].classList.remove("active-m2");

    elt.classList.add('active-m2');

    if(index==1){
        document.getElementById('menu-col-4').innerHTML='<ul><li onclick="location.href=\'http://www.pec.edu/alumni.php\'">Alumni Association</li><li onclick="location.href=\'../home/CCC.php?id=National%20Cadet%20Corps\'">National Cadet Corps</li><li onclick="location.href=\'../home/CCC.php?id=National%20Service%20Scheme\'">National Service Scheme</li><li onclick="location.href=\'../home/CCC.php?id=Students%20Council\'">Students’ Council</li><li onclick="location.href=\'../home/CCC.php?id=Students%20Disciplinary%20Committee\'">Students’ Disciplinary Committee</li><li onclick="location.href=\'../home/CCC.php?id=Hostel\'">Hostel</li><li onclick="location.href=\'../home/CCC.php?id=PEC%20Newsletter\'">PEC Newsletter</li><li onclick="location.href=\'../home/CCC.php?id=Library\'">Library</li><li onclick="location.href=\'../home/CCC.php?id=PRERANA\'">PRERANA (SC/ST)</li></ul>';
    }else if(index==2){
        document.getElementById('menu-col-4').innerHTML='<ul><li onclick="location.href=\'../home/CCC.php?id=Center%20for%20Continuing%20Education\'">Center for Continuing Education (CCE)</li><li onclick="location.href=\'../home/CCC.php?id=Counselling%20and%20Career%20Guidance%20Cell\'">Counselling and Career Guidance Cell (CCGC)</li><li onclick="location.href=\'../home/CCC.php?id=Grievance%20Redressal%20Cell\'">Grievance Redressal Cell</li><li onclick="location.href=\'https://www.peciedc.com/\'">Innovation and Entrepreneurship Development Cell (IEDC)</li><li onclick="location.href=\'../home/CCC.php?id=Internal%20Quality%20Assurance%20Cell\'">Internal Quality Assurance Cell (IQAC)</li><li onclick="location.href=\'../home/CCC.php?id=IP%20Rights%20and%20Patenting%20Cell\'">IP Rights and Patenting Cell</li><li onclick="location.href=\'../home/CCC.php?id=Womens%20Cell\'">Womens’ Cell</li></ul>';
    }else if(index==3){
        document.getElementById('menu-col-4').innerHTML='<ul><li onclick="location.href=\'../home/CCC.php?id=Cultural%20Club\'">Cultural Club</li><li onclick="location.href=\'../home/CCC.php?id=Design%20Club\'">Design Club</li><li onclick="location.href=\'../home/CCC.php?id=Health,%20Hygiene%20and%20Environmental%20Club\'">Health, Hygiene and Environmental Club</li><li onclick="location.href=\'../home/CCC.php?id=Literary%20Club\'">Literary Club</li><li onclick="location.href=\'../home/CCC.php?id=Google%20DSC\'">Google DSC</li><li onclick="location.href=\'../home/CCC.php?id=Photography%20Club\'">Photography Club</li><li onclick="location.href=\'../home/CCC.php?id=Rotaract%20Club\'">Rotaract Club</li><li onclick="location.href=\'../home/CCC.php?id=Thamizh%20Mandram\'">Tamizh Mandram</li></ul>';
    }else if(index==4){
        document.getElementById('menu-col-4').innerHTML='<ul id="chapter-font"><li onclick="location.href=\'../home/CCC.php?id=Swayam-NPTEL%20-%20Students\'">Swayam/NPTEL - Students</li><li onclick="location.href=\'../home/CCC.php?id=Quality%20Enhancement%20in%20Engineering%20Education\'">Quality Enhancement in Engineering Education (QEEE)</li><li onclick="location.href=\'../home/CCC.php?id=Swayam-NPTEL%20-%20Staffs\'">Swayam/NPTEL - Staffs</li></ul>';
    }

}
document.addEventListener('scroll',()=>{
    if(window.outerWidth>980){
        if(window.pageYOffset>170){
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
    window.scrollTo(0,0);
    document.getElementsByClassName('menu-icon')[0].classList.toggle('change')
    document.getElementsByClassName('menu-icon')[1].classList.toggle('change')
}

function focusS(){
    if(window.outerWidth>996)
        document.getElementById('focusChk').focus();
    else{
        var searchInput =document.getElementById('collapseSearch');
        if(searchInput.className == "collapse") {         // focus when input is visible
            window.setTimeout(()=>{document.getElementById('focus').focus()},10);
        }
    }
}
document.getElementsByTagName('main')[0].style.opacity = '1';
if(document.getElementsByTagName('floatbtn')[0])
    document.getElementsByTagName('floatbtn')[0].style.opacity = '1';
document.getElementsByTagName('footer')[0].style.opacity = '1';
document.getElementsByTagName('header')[0].style.opacity = '1';
