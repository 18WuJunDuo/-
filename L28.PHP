<?php
function checkinteger($Number)
{
 if($Number > 1)
 {
  return(checkinteger($Number-1));
 }
 elseif ($Number < 0)
 {

  return(checkInteger((-1)*$Number-1));
 }
 else
 {

    if(($Number > 0) AND ($Number <1))
    {
     return("当然不是");
    }
    else
    {
     return("是的");
    }

    }
} 
print("<b>0是整数吗？ </b>".checkinteger(0)."<br>\n");
print("<b>7是整数吗？ </b>".checkinteger(7)."<br>\n");
print("<b>3.5呢？</b>".checkinteger(-3.5)."<br>\n");
print("<b>那么-5呢？</b>".checkinteger(-5)."<br>\n");
print("<b>还有9.2？</b>".checkinteger(-9.2)."<br>\n");
?>