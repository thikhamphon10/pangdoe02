<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     
   .k {
            width: 900px;
            height: 400px;
            border: 2px solid #000;
            border-radius: 10px;
            padding: 20px;
            position: relative;
        }
   
</style>
</head>
<body><center>
<div class="k">
<table style="width:100%" >
     <tr>
        <td><h3>จาก</h3> </td>
     </tr>
     <tr>
           <td>ชื่อ<?php echo $_POST["name"];?> &nbsp; นามสกุล<?php echo $_POST["lastname"];?></td>
     </tr>
            <td>ที่อยู่<?php echo $_POST["address"];?> &nbsp; ตำบล<?php echo $_POST["district"];?> </td>
     </tr>
     <tr>
            <td>เขต/อำเภอ<?php echo $_POST["dis"];?> &nbsp; จังหวัด<?php echo $_POST["county"];?> &nbsp; รหัสไปรษณี<?php echo $_POST["code"];?></td>
     </tr>
      <tr>
            <td>เเบอร์โทร<?php echo $_POST["tel"];?> &nbsp; วันที่<?php echo $_POST["date"];?></td>
     </tr>
    
     <tr>
            <td></td>
     </tr>
     <tr>
            <td></td>
     </tr>
     <tr>
            <td></td>
     </tr>
     <tr>
            <td></td>
     </tr>


     
     <tr>
    
      <td colspan="2" rowspan="10"></td>
        <td><h3>ถึง</h3> </td>
     </tr>
      <tr>
           <td>ชื่อ<?php echo $_POST["namee"];?> &nbsp; นามสกุล<?php echo $_POST["lastnamee"];?></td>
      </tr>
      </tr>
            <td>ที่อยู่<?php echo $_POST["addres"];?> &nbsp; ตำบล<?php echo $_POST["districtt"];?> </td>
     </tr>
     <tr>
            <td>เขต/อำเภอ<?php echo $_POST["diss"];?> &nbsp; จังหวัด<?php echo $_POST["countyy"];?> &nbsp; รหัสไปรษณี<?php echo $_POST["codee"];?></td>
     </tr>
      <tr>
            <td>เเบอร์โทร<?php echo $_POST["tell"];?> &nbsp; วันที่<?php echo $_POST["datee"];?></td>
     </tr>
        </table>
</center>
</body>
</html>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
</table>

</body>
</html>