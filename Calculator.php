<!-- Navneet-- code -->
<html><head>
<?php
error_reporting(0); 
// function for operation
function Fact($i){
static $a = 1;
if ($i > 1) {
$a = $a * $i;
$i--;
Fact($i);
}
return $a;
}?>
<?php
$_POST['val1'];
$_POST['opr'];
$_POST['val2'];

if(isset($_POST['number']) && empty($_POST['operator']))
{
  if(!empty($_POST['opr']))
   {    
      }
  else
   {
  if(!empty($_POST['val1']))
      {
   $_POST['val1'].=$_POST['number'];
   } else
   {
   $_POST['val1']=$_POST['number'];
      }
   }
}

if(!empty($_POST['operator']))
 {
  $_POST['opr']=$_POST['operator'];
 }
  if(isset($_POST['number']) && !empty($_POST['opr']) && empty($_POST['equal']))
    {
     if(!empty($_POST['val2']))
    {
   if(!empty($_POST['operator']))
     {
     }
   else
      {
   $_POST['val2'].=$_POST['number'];
   }
   }
    else
      {
   $_POST['val2']=$_POST['number'];
   }
  }
  
if(!empty($_POST['clear']))
      {
   $_POST['val1']='';
   $_POST['opr']='';
   $_POST['val2']='';
   }
if($_POST['equal']=='=')
    {
   $val1 = (!empty($_POST['val1']))?$_POST['val1']:"";
   $optr = (!empty($_POST['opr']))?$_POST['opr']:"";
   $val2 = (!empty($_POST['val2']))?$_POST['val2']:"";
  if($optr=='+')
       {
    $result = (float)$val1+(float)$val2;
    }
   elseif ($optr=='-')
       {
    $result = (float)$val1-(float)$val2;
    }
   elseif ($optr=='*')
       {
    $result = (float)$val1*(float)$val2;
    }
  elseif ($optr=='/')
       {
    $result = (float)$val1/(float)$val2;
    }
  elseif ($optr == '%')
       {     
   $result = (float)$val1%(float)$val2;
    }
    elseif($optr=='^')
    {
    $result=(float)$val1*(float)$val1;
        }
        elseif($optr=='cube')
    {
    $result=(float)$val1*(float)$val1*(float)$val1;
        }
        elseif($optr=='fact')
    {
    $result=fact((float)$val1);
        }
        elseif($optr=='sqrt')
    {
    $result=sqrt((float)$val1);
        }
        elseif($optr=='binary')
    {
    $result=decbin((float)$val1);
        }
   $_POST['note'];
   $_POST['val1']=$result;
   $_POST['opr']='';
   $_POST['val2']='';    
  }
  else
      {
   $val1 = (!empty($_POST['val1']))?$_POST['val1']:"";
   $optr = (!empty($_POST['opr']))?$_POST['opr']:"";
   $val2 = (!empty($_POST['val2']))?$_POST['val2']:"";
   $result = (!empty($_POST['clear']))?'':$val1.$optr.$val2;
  }
echo '<style>
     #buta{background:#D2EBF2;height:40px; width:40px; font-size:15px; font-weight:bold; color:#FA0909;font-family:times;text-align:center; border-radius:25px 25px 25px 25px}
     #equala{background:#D2EBF2;height:40px; width:93px; font-size:15px; font-weight:bold; color:#FA0909;font-family:times;text-align:center; border-radius:25px 25px 25px 25px}
     #txt{background:#D2EBF2;height:40px; width:290px; font-size:20px; font-weight:bold; color:#FA0909;font-family:times;text-align:center; border-radius:25px 25px 25px 25px}
    </style></head><body>';
echo '<center><form action = "#" method = "post">';
echo "<br><id='boxa'>";
echo $_POST['note'];
echo '<br><table border=1><tr><td><input type=text id=txt value='."$result".'></input></td></tr></table>';
echo '<table cellspacing="10" cellpadding="10" border=1>';
echo "<tr><td><input type='submit'  value='9'  name='number' id= 'buta'></div></input></td>";
echo "<td><input type='submit' value='8' name='number' id='buta'></div></input></td>";
echo "<td><input type='submit' value='7' name='number' id='buta'></div></input></td>";
echo "<td><input type='submit' value='*' name='operator' id='buta'></div></input></td></tr>";
echo "<tr><td><input type='submit' value='6' name='number' id='buta'></div></input></td>";
echo "<td><input type='submit' value='5' name='number' id='buta'></div></input></td>";
echo "<td><input type='submit' value='4' name='number' id='buta'></div></input></td>";
echo "<td><input type='submit' value='/' name='operator' id='buta'></div></input></td>";
echo "<tr><td><input type='submit' value='3' name='number' id='buta'></div></input></td>";
echo "<td><input type='submit' value='2' name='number' id='buta'></div></input></td>";
echo "<td><input type='submit' value='1' name='number' id='buta'></div></input></td>";
echo "<td><input type='submit' value='+' name='operator' id='buta'></div></input></td></tr>";
echo "<tr><td><input type='submit' value='0' name='number' id='buta'></div></input></td>";
echo "<td><input type='submit' value='.' name='number' id='buta'></div></input></td>";
echo "<td><input type='submit' value='%' name='operator' id='buta'></div></input></td>";
echo "<td><input type='submit' value='-' name='operator' id='buta'></div></input></td></tr>";
echo "<tr><td><input type='submit' value='^' name='operator' id='buta'></div></input></td>";
echo "<td><input type='submit' value='cube' name='operator' id='buta'></div></input></td>";
echo "<td><input type='submit' value='sqrt' name='operator' id='buta'></div></input></td>";
echo "<td><input type='submit' value='fact' name='operator' id='buta'></div></input></td></tr>";
echo '</table>';
echo '<table border=1>';
echo "<tr><td><input type='submit' value='binary' name='operator' id='equala'></div></input></td>";
echo "<td><input type='submit' value='clear' name='clear' id='equala'></div></input></td>";
echo "<td><input type='submit'  value='=' name='equal' id='equala'></div></input></td></tr>";
echo "<input type='hidden' value= '".$_POST['val1']."' name= 'val1' >";
echo "<input type='hidden' value= '".$_POST['opr']."' name= 'opr' >";
echo "<input type='hidden' value= '".$_POST['val2']."'  name= 'val2' >";
echo "<input type='hidden' value= 'navneet#calculator#hidden.' name= 'note' >";
echo '</form></div></center></body></html>';
?>