startTime();
//timer clock
function startTime() {
    var d = new Date();
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var date = "";
    var hours = d.getHours();
    var minutes = d.getMinutes();
    var second = d.getSeconds();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12;
    minutes = minutes < 10 ? '0'+minutes : minutes;
    second = second <10? '0'+second:second;
    var strTime = hours + ':' + minutes +':' + second +' ' + ampm;
    date=months[d.getMonth()]+" "+d.getDate()+" "+d.getFullYear()+" | "+strTime;
    document.getElementById('date').innerHTML=date;
    var t = setTimeout(startTime, 200);
}
