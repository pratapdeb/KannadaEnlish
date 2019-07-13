<?php

//connect to database


$saveE="";
$saveV="";
$engword='';
$errorMsg='';

$db = mysqli_connect('localhost','root','','langauge');

if(isset($_POST['save']))
{

    $saveV=mysqli_real_escape_string($db,$_POST['newVWord']);
    $saveE=mysqli_real_escape_string($db,$_POST['newEWord']);

}


if(empty($saveE)||empty($saveV))
    {

            //show empty erray msg
            //$errorMsg="<p>Field Empty</p>";
    }

else{

        $sql_check_query="SELECT * FROM word_table WHERE VIS = '$saveV' or ENG = '$saveE' LIMIT 1";
        $results=mysqli_query($db,$sql_check_query);
        $alreadyexistMsg=mysqli_fetch_assoc($results);
        
if($alreadyexistMsg)
{
    if(($alreadyexistMsg['VIS']===$saveV)||($alreadyexistMsg['eng']===$saveE))
    {
        $errorMsg="<p>Words Already Exists</p>";

    }
}
else{
    //insert into database

        $sql="INSERT INTO word_table(VIS,ENG) VALUES('$saveV','$saveE')";
        mysqli_query($db,$sql);
        
    }



}






if(isset($_POST['search']))
{

    $word=mysqli_real_escape_string($db,$_POST['searchText']);

    $query="SELECT * FROM word_table WHERE VIS='$word'";

    $results=mysqli_query($db,$query);

    $dataObj=mysqli_fetch_assoc($results);

 if($dataObj)
 {

    $engword="<h2>Translated English Word :".$dataObj['ENG']."</h2>";

 }
 else
 {
   $engword="<h2 style='color:red'>No Data found search another word OR save one</h2>";
 }
}


?>