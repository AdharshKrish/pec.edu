var lastTime = 0;

function flickerPauses(){
  if(lastTime < 5){
    lastTime++;
    return Math.random()*100;
  }else{
    lastTime = 0;
    return Math.random()*2300;
  }
}

function flicker() {
  $("#text").toggleClass('on');
  $("#core1").toggleClass('on1');
  setTimeout(flicker, flickerPauses());
}

flicker();


