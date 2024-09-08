
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
    color: #49108B;
    margin: 0;
    padding: 0;
    overflow: hidden;
    height: 100vh;
    background-color: #F3F8FF;
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
}
form{
    background-color: #F3F8FF;
    display: flex;
    flex-direction: column;
    padding: 40px;
    border: 2px solid #49108B;
    box-shadow: 2px 2px 10px #7d30e17a;
    border-radius: 10px;
    position: relative;
}
h2{
    text-align: center;
}
td, th {
  padding: 14px 6px;
}
tr td:first-child{
    text-align: right;
    color: #49108B;
}
label {
    font-size: 18px;
    margin-bottom: 5px; 
    display: block;
}
input{
    border-radius: 5px;
    border: 1px solid #49108B;
}
input:focus{
    outline: solid #49108B;
}
input[type="text"], input[type="number"], input[type="mail"] {
    padding: 5px;
}
input[type="submit"] {
    color: #F3F8FF;
    grid-column: span 2;
    height: 36px;
    background-color: #49108B;
    border: none;
    border-radius: 10px;
    font-weight: bold;
    margin-bottom: 5px;
    margin-top: 10px;
}
input[type="submit"]:hover{
    background-color: #9448ea;
    transition: 0.4s;
}
span.error{
    position: absolute;
    padding-top: 2px;
    font-size: 12px;
    color: #ff0000;
}
#err{
    color: #ff0000;
    text-align: center;
    position: absolute;
    left: 50%;
    bottom: 3%;
    transform: translate(-50%,-50%);
    width: 100%;
}
button{ 
    color: #F3F8FF;
    grid-column: span 2;
    height: 36px;
    background-color: #49108B;
    border: none;
    border-radius: 10px;
    font-weight: bold;
    margin-top: 20px;
    width: 100%;
}
button:hover{
    background-color: #9448ea;
    transition: 0.4s;
}
a{
    text-decoration: none;
    color: #F3F8FF;
}
</style>
<body>
    <div class="container">
        <form>
            <h2>Nhập thành công!</h2>
            <table>
                <tr>
                    <td>Tên sách:</td>
                    <td><?php echo $_POST["tensach"] ?></td>
                </tr>
                <tr>
                    <td>Tác giả:</td>
                    <td><?php echo $_POST["tacgia"] ?></td>
                </tr>
                <tr>
                    <td>Nhà xuất bản:</td>
                    <td><?php echo $_POST["nhaxuatban"] ?></td>
                </tr>
                <tr>
                    <td>Năm xuất bản:</td>
                    <td><?php echo $_POST["namxuatban"] ?></td>
                </tr>
            </table>
            <button><a href="Bai1js.php">Quay lại</a></button>
        </form>
    </div>
</body>
</html>