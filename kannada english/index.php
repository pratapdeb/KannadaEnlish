<?php include('server.php')?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>


<body>
<span><?php echo $errorMsg?></span>

<nav>
  <button class='save' onClick='saveFtn()' id ='savelink'>Save</button>
  <p>more words</p>
</nav>

<h1>Kannada English Dictionary</h1>

<div id='con'>

            
      <div id="container">
              <form method='post' action="index.php">
                  <input name='searchText' onClick='selectFtnS()'class='search' type="text" id="searchID" placeholder='Word to Translate'>
            
                <div id='bar'>
                    <button name='search' id ='searchBtn' type='submit'>
                      <div id='arrow'>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="43" viewBox="0 0 25 43" fill="none">
                          <path d="M3 3L22 21.5L3 39.5" stroke="black" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                      </div>
                    </button>
                  </div>
                </form>
          
        

              <div style='display:flex'class="transWord">
                <h3>Use Virtual Keyboard</h3>
              <div id='showMKeyboard' onClick=showMK()><h3 style='margin:18px' id='textKeyM'>Kannada</h3></div>
              <div id='showEKeyboard' onClick=showEK()><h3 id='textKeyE'>English</h3></div>
    
              
              <span><?php echo $engword?></span>

                  
                  <div id='keyBoard' style='display:none'class='board'>
  <div id='ಕ' onClick='ftn(id)' class='key'>ಕ</div>
  <div id='ಖ​' onClick='ftn(id)'class='key'>ಖ​</div>
  <div id='ಗ' onClick='ftn(id)'class='key'>ಗ</div>
  <div id='ಘ' onClick='ftn(id)'class='key'>ಘ</div>
  <div id='ಙ' onClick='ftn(id)'class='key'>ಙ</div>
  <div id='ಚ' onClick='ftn(id)'class='key'>ಚ</div>
  <div id='ಜ' onClick='ftn(id)'class='key'>ಜ</div>
  <div id='ಝ' onClick='ftn(id)'class='key'>ಝ</div>
  <div id='ಞ' onClick='ftn(id)'class='key'>ಞ</div>
  
  <div id='ಟ' onClick='ftn(id)'class='key'>ಟ</div>
  <div id='ಠ' onClick='ftn(id)'class='key'>ಠ</div>
  <div id='ಡ' onClick='ftn(id)'class='key'>ಡ</div>
  <div id='ಢ' onClick='ftn(id)'class='key'>ಢ</div>
  <div id='ಣ' onClick='ftn(id)'class='key'>ಣ</div>
  
  <div id='ತ' onClick='ftn(id)'class='key'>ತ</div>
  <div id='ಥ' onClick='ftn(id)'class='key'>ಥ</div>
  <div id='ದ' onClick='ftn(id)'class='key'>ದ</div>
  <div id='ಧ' onClick='ftn(id)'class='key'>ಧ</div>
  <div id='ನ' onClick='ftn(id)'class='key'>ನ</div>
  <div id='ಪ' onClick='ftn(id)'class='key'>ಪ</div>
  <div id='ಫ' onClick='ftn(id)'class='key'>ಫ</div>
  <div id='ಬ' onClick='ftn(id)'class='key'>ಬ</div>
  <div id='ಭ' onClick='ftn(id)'class='key'>ಭ</div>
  <div id='ಮ' onClick='ftn(id)'class='key'>ಮ</div>

  <div id='ಯ' onClick='ftn(id)'class='key'>ಯ</div>
   <div id='ರ' onClick='ftn(id)'class='key'>ರ</div>
   <div id='ಱ' onClick='ftn(id)'class='key'>ಱ</div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  <div id='ಲ' onClick='ftn(id)'class='key'>ಲ</div>
  <div id='ಳ' onClick='ftn(id)'class='key'>ಳ</div>
  <div id='ವ' onClick='ftn(id)'class='key'>ವ</div>
  <div id='ಹ' onClick='ftn(id)'class='key'>ಹ</div>
  
  <div id='ಶ' onClick='ftn(id)'class='key'>ಶ</div>
  <div id='ಷ' onClick='ftn(id)'class='key'>ಷ</div>
  
  <div id='ಸ' onClick='ftn(id)'class='key'>ಸ</div>
  <div id='ೞ' onClick='ftn(id)'class='key'>ೞ</div>

  <div id='ಅ' onClick='ftn(id)'class='key'>ಅ</div>
  <div id='ಆ' onClick='ftn(id)'class='key'>ಆ</div>
  <div id='ಈ' onClick='ftn(id)'class='key'>ಈ</div>
  <div id='ಉ' onClick='ftn(id)'class='key'>ಉ</div>
  
  
  <div id='ಊ' onClick='ftn(id)'class='key'>ಊ</div>

  <div id='ಋ' onClick='ftn(id)'class='key'>ಋ</div>
  <div id='ಌ' onClick='ftn(id)'class='key'>ಌ</div>
   <div id='ಎ' onClick='ftn(id)'class='key'>ಎ</div>
   <div id='ಏ' onClick='ftn(id)'class='key'>ಏ</div>
  
  
  <div id='ಐ' onClick='ftn(id)'class='key'>ಐ</div>
  <div id='ಒ' onClick='ftn(id)'class='key'>ಒ</div>
  <div id='ಓ' onClick='ftn(id)'class='key'>ಓ</div>
   <div id='ಔ' onClick='ftn(id)'class='key'>ಔ</div>

   <div id='ಾ' onClick='ftn(id)'class='key'></div>
    
  
  <div id='ೄ' onClick='ftn(id)'class='key'>ೄ</div>
  <div id='ೆ' onClick='ftn(id)'class='key'>ೆ</div>
  <div id='ೇ' onClick='ftn(id)'class='key'>ೇ</div>
   <div id='ೈ' onClick='ftn(id)'class='key'>ೈ</div>
   <div id='ೊ' onClick='ftn(id)'class='key'>ೊ</div>
  
  <div id='ೌ' onClick='ftn(id)'class='key'>ೌ</div>
  <div id='ಂ' onClick='ftn(id)'class='key'>ಂ</div>
  <div id='ಃ' onClick='ftn(id)'class='key'>ಃ</div>
   <div id='಼' onClick='ftn(id)'class='key'>಼</div>
   <div id='ೕ' onClick='ftn(id)'class='key'>ೕ</div>
  
   <div id='Space' style='width:136px' onClick='ftn(id)'class='key'>Space</div>
    <div id='Backspace' style='width:156px'onClick='ftn(id)'class='key'>Backscapce</div>
                    </div> 






  <div id='keyBoardE' style='display:none'class='board'>
                      
                      <div id='a' onClick='ftn(id)' class='key'>a</div>
                      <div id='b' onClick='ftn(id)'class='key'>b</div>
                      <div id='c' onClick='ftn(id)'class='key'>c</div>
                      <div id='d' onClick='ftn(id)'class='key'>d</div>
                      <div id='e' onClick='ftn(id)'class='key'>e</div>
                      <div id='f' onClick='ftn(id)'class='key'>f</div>
                      <div id='g' onClick='ftn(id)'class='key'>g</div>
                      <div id='h' onClick='ftn(id)'class='key'>h</div>
                      <div id='i' onClick='ftn(id)'class='key'>i</div>
                      
                      <div id='j' onClick='ftn(id)'class='key'>j</div>
                      <div id='k' onClick='ftn(id)'class='key'>k</div>
                      <div id='l' onClick='ftn(id)'class='key'>l</div>
                      <div id='m' onClick='ftn(id)'class='key'>m</div>
                      <div id='n' onClick='ftn(id)'class='key'>n</div>
                      
                      <div id='o' onClick='ftn(id)'class='key'>o</div>
                      <div id='p' onClick='ftn(id)'class='key'>p</div>
                      <div id='q' onClick='ftn(id)'class='key'>q</div>
                      <div id='r' onClick='ftn(id)'class='key'>r</div>
                      <div id='s' onClick='ftn(id)'class='key'>s</div>
                      <div id='t' onClick='ftn(id)'class='key'>t</div>
                      <div id='u' onClick='ftn(id)'class='key'>u</div>
                      <div id='v' onClick='ftn(id)'class='key'>v</div>
                      <div id='w' onClick='ftn(id)'class='key'>w</div>
                      <div id='x' onClick='ftn(id)'class='key'>x</div>
                      <div id='y' onClick='ftn(id)'class='key'>y</div>
                       <div id='z' onClick='ftn(id)'class='key'>z</div>
                       <div id='Space' style='width:136px' onClick='ftn(id)'class='key'>Space</div>
    <div id='Backspace' style='width:156px'onClick='ftn(id)'class='key'>Backscapce</div>
                                        </div>                
                  </div>
      </div>
  </div>
<div id="saveCon"> 
  <form method='post' action="index.php">
  <input onClick='selectFtnV()' name='newVWord' placeholder='Word in Kannada'class='search' id='vis' name='saveNewV'type="text">
  <input onClick='selectFtnE()' name='newEWord' placeholder='Word in English'class='search' id='eng' name='saveNewE'type="text">
  <button name='save' class='save' id ='saveBtn'>Save</button>
  </form>
</div>
</body>
<script src="myScript.js"></script>
</html>
