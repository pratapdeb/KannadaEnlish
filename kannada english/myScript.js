var saveCon=document.getElementById('saveCon');
var savelink=document.getElementById('savelink');
var sp=document.getElementsByTagName('span')[1];
var selectSaveV=document.getElementById('vis');
var selectSaveE=document.getElementById('eng');
var inp;
var src=document.getElementById('searchID');
var flag=false;
var flag2=false;

//Focus to input fiels onclick for virtual keyboard 
selectFtnS=()=>
{
  inp=src;
  console.log('gksgjso');
}
selectFtnV=()=>
{
  inp=selectSaveV;
}
selectFtnE=()=>
{
inp=selectSaveE;
}

//Save new word to the database
saveFtn=()=>
{
 console.log('savelink');

  if(!flag)
  {saveCon.style.display='block';
  flag=true;
  saveCon.style.transition='all 10s';
   savelink.style.color='red';
    savelink.style.width='40px';
    savelink.innerHTML='X';
    sp.style.display='none';
  }
  else{
  saveCon.style.display='none';
   flag=false;
  saveCon.style.transition='all 10s';
    
   savelink.style.color='white';
    savelink.style.width='100px';
    savelink.innerHTML='Save'; 
  }
}

//keyboard
var flag2=false;
var flag3=false;
var key=document.getElementsByClassName('key');
var keyBoard=document.getElementById('keyBoard');
var keyBoardE=document.getElementById('keyBoardE');
var textKeyM=document.getElementById('textKeyM');
var textKeyK=document.getElementById('textKeyE');
//console.log(key[0]);
ftn=(i)=>
{

  if(i==='Space') {
    //console.log(i);
    inp.value=inp.value+' ';
  }
  else if(i==='Backspace')
  {
    //console.log(typeof(inp.value));
    inp.value=inp.value.substr(0,inp.value.length-1);
  }
  else inp.value=inp.value+i;
//console.log(i);
}
//show english keyboard and hide Kannada
showEK=()=>
{
  if(!flag3)
  {
    keyBoardE.style.display='block';
    textKeyE.innerHTML=" Close";
    textKeyE.style.color='red';
    flag3=true;
    sp.style.display='none';

    textKeyM.innerHTML="Kannada";
     textKeyM.style.color='#333';
    keyBoard.style.display='none';
   flag2=false;

   
  }
  else{
    textKeyE.innerHTML="English";
     textKeyE.style.color='#333';
    keyBoardE.style.display='none';
   flag3=false;
  
  }
  
}

//show kannada Keyboard and hide english keyboard
showMK=()=>
{

  if(!flag2)
  {
    keyBoard.style.display='block';
    textKeyM.innerHTML=" Close";
    textKeyM.style.color='red';
    flag2=true;
    sp.style.display='none';
  
    textKeyE.innerHTML="English";
     textKeyE.style.color='#333';
    keyBoardE.style.display='none';
   flag3=false;
  }

  else{
    textKeyM.innerHTML="Kannada";
     textKeyM.style.color='#333';
    keyBoard.style.display='none';
   flag2=false;
  }
}
