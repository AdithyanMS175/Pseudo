<?php
$largest=' ';
$smallest=' ';
if(isset($_POST['btnfind'])!=null)
{
    $no1=$_POST['txtno1'];
    $no2=$_POST['txtno2'];
    $no3=$_POST['txtno3'];
    if($no1>$no2)
    {
        $lag=$no1;
    }
    else
    {
        $lag=$no2;
    }
    if($lag>$no3)
    {
        $largest=$lag;
    }
    else
    {
        $largest=$no3;
    }
    if($no1<$no2)
    {
        $smal=$no1;
    }
    else
    {
        $smal=$no2;
    }
    if($lag<$no3)
    {
        $smallest=$smal;
    }
    else
    {
        $smallest=$no3;
    }
    
}
?>

<html>
    <body>
    <form name="lagsmall" method="POST">
            <table border ="1" align="center">&nbsp;&nbsp;&nbsp;
            
                <tr>
                    <td>number1</td>
                    <td><input type="text" name="txtno1" placeholder="enter the number" required></td>
</tr>
<tr>
                    <td>number2</td>
                    <td><input type="text" name="txtno2" placeholder="enter the number" required></td>
</tr>
<tr>
                    <td>number3</td>
                    <td><input type="text" name="txtno3" placeholder="enter the number" required></td>
</tr>
<tr>
    <td colspan="2" align="center">
        <input type="submit" name="btnfind" value="find">
</td>
</tr>
<tr>
    <td>largest</td>
    <td>
    <?php 
    echo $largest; 
    ?>
    </td>
</tr>
<tr>
    <td>smallest</td>
    <td>
    <?php 
    echo $smallest; 
    ?>
    </td>
</tr>
</table>
</form>
</body>
</html>
