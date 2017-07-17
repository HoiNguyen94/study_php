<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
            $a = isset($_POST['a']) ? $_POST['a'] : '';
            $b = isset($_POST['b']) ? $_POST['b'] : '';
            $c = isset($_POST['c']) ? $_POST['c'] : '';
            $nghiem = '';
            $delta ='';
            if(isset($_POST["a"]) && $_POST["b"] && $_POST["c"]){
                if($a<>0){
                    $delta= pow($b,2)-4*$a*$c;
                }
           }
        ?>
    <form action="" method="post">
        <table width =" 800px" border="1px" style="background: #00B8AE">
            <tr>
                <td colspan="4" bgcolor="#78b43d" style="text-align:center"><strong>Giải phương trình bậc 2 </strong></td>
            </tr>
            <tr>
                <td width="" style="text-align: center"> PT bậc nhất 2: </td>
                <td width="" style="text-align: center">A:<input name="a" type="text" />X <sup>2</sup>  + </td>
                <td width="" style="text-align: center">B:<input name="b" type="text"  />X + </td>
                <td width="" style="text-align: center">C:<input name="c" type="text"> =0 </td>
            </tr>
            <tr>
                <td  colspan="8"> Nghiệm của PT là:
                <?php 
                if ($a==0){
                    if ($b==0){
                        echo $nghiem="Phương trình có vô số nghiệm";                
                    }
                    if ($b<>0){
                        echo $nghiem="Phương trình vô nghiệm";
                    }
                }
                if($delta < 0){
                    echo $nghiem = 'Phương trình vô nghiệp';
                }
                else if($delta == 0){
                    echo $nghiem = 'Phương trình nghiệp kép x1 = x2 = ' .(-$b/2*$a);
                }
                else {                    
                    $x1=(-$b+sqrt($delta))/(2*$a);
                    $x2=(-$b-sqrt($delta))/(2*$a);
                    echo $nghiem="Phương trình có 2 nghiệm phân biệt x1=".round($x1,2).",x2=".round($x2,2);
                }

                ?>
                </td>                
            </tr>
            <tr>
                <td colspan="4" align="center" valign="middle"><input type="submit"  value="Giải PT" /></td>
            </tr>
        </table>
    </form>
    </body>
</html>