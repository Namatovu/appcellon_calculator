<<!DOCTYPE HTML>
<html lang="en-US">
<head>
 <meta charset="UTF-8">
 <title>Simple Calculator</title>
</head>
<style type="text/css">
table{
 width:60%; background-color:#80ced6; margin:0 auto; 
 box-shadow:10px 10px 30px #ccc; 
 border-bottom:20px solid #80ced6;
}
.result{
 width:60%; margin:0 auto; 
 background-color: #80ced6; height:100px; 
 margin-top:20px; padding:20px; color:white;box-shadow:10px 10px 30px #ccc; 
 font-family:verdana;
}
td{
font-size:20px; padding:5px; font-family:verdana; color:#fff;
}
input[type=text]{
 padding:5px; width:100px; font-size:10px;
}
input[type=submit]{
 padding:5px;  font-size:14px; 
 cursor:pointer;border:none;
 background:#808080; color:#333; width:300px; height:50px;
}
input[type=submit]:hover{
 background:#eee; color:#444;
}

h1{
 background-color:#80ced6; color:white; font-family:verdana; padding:20px;
}

</style>
<body>
 <form action="" method="post">
 <table>
 <center>
 <h1>My simple calculator</h1>
 <tr><td>Select Operation </td> 
 <td>
 <select name="operator" id="">
  <option>Select Operator</option>
  <option value="+">1.Add</option>
  <option value="-">2.Subtract</option>
  <option value="*">3.Multiply</option>
  <option value="/">4.Divide</option>
  </select></td></tr>
 
 <tr><td colspan="2">CodingInHeels@dimplegal</td></tr>
 </center>
 </table>
 </form>
 
 
 </div>
</body>
</html>