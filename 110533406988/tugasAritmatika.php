<!DOCTYPE html>
<html>
<head><title>Operator Aritmatika</title></head>
<body>
<h1> Operasi Aritmatika</h1>
$angka1 = "0";
$angka2 = "0";
}
if(isset($_POST['operator'])){
$operator =$_POST['operator'];
}else{
$operator ="";
}
switch($operator){
case "+":
$hasil = $_POST["angka1"] + $_POST["angka2"];
break;
case "-":
$hasil = $_POST["angka1"] - $_POST["angka2"];
break;
$angka1 = "0";
$angka2 = "0";
}
if(isset($_POST['operator'])){
$operator =$_POST['operator'];
}else{
$operator ="";
}
switch($operator){
case "+":
$hasil = $_POST["angka1"] + $_POST["angka2"];
break;
case "-":
$hasil = $_POST["angka1"] - $_POST["angka2"];
break;
case "*":
$hasil = $_POST["angka1"] * $_POST["angka2"];
break;
case "/":
$hasil = $_POST["angka1"] / $_POST["angka2"];
break;
}
?>
<td><input type="submit" name="Aritmatika" value="="></td>
<td><input type="text" name="hasil"  value="<?=$hasil;?>"></td>

</tr>

</table>
</form>
</body>
</html>
