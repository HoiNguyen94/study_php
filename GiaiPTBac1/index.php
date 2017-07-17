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
        if (isset($_POST["a"]) && isset($_POST["b"])){
            $a=$_POST["a"];
            $b=$_POST["b"];
            if ($a==0){
                if ($b==0){
                    $nghiem="Phương trình có vô số nghiệm";                
                }
                if ($b<>0){
                    $nghiem="Phương trình vô nghiệm";
                }
            }
            else {
                $x= -($b/$a);
                $x=round($x,2);
                $nghiem= "x= $x";
            }
            }
        
    ?>
        <form action="" method="post">
            <table width="744" border="1"  style=" background: #CDDC39;" >
                <tr>
                    <td colspan="3" bgcolor="#00B8AE" style="text-align:center"><strong>Giải phương trình bậc 1 </strong></td>
                </tr>
                <tr>
                    <td width="120" style="text-align: center"> PT bậc nhất 1 Ẩn: </td>
                    <td width="250" style="text-align: center">A:<input name="a" type="text" />X + </td>
                    <td width="352" style="text-align: center">B:<input name="b" type="text"  /> = 0</td>
                </tr>
                <tr>
                    <td colspan="3"> Nghiệm của PT là:<input name="x" type="text" style="text-align: center; color:#00B8AE " value="<?php  if(isset($nghiem)) echo $nghiem; ?>" /> </td>
                </tr>
                <tr>
                    <td colspan="3" align="center" valign="middle"><input type="submit" name="chao" value="Giải" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>
