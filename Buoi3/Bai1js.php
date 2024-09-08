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
    </style>
<body>
    <div class="container">
        <form name = "Form" method="post" onsubmit="return validateForm()" action="Bai1hienthi.php">
            <h2>ĐIỀN THÔNG TIN</h2>
                <table>
                    <tr>
                        <td><label for="tenSach">Tên sách:</label></td>
                        <td>
                            <input type="text" id="tenSach" name="tensach"><br>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tacGia">Tác giả:</label></td>
                        <td>
                            <input type="text" id="tacGia" name="tacgia"><br>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nhaXuatBan">Nhà xuất bản:</label></td>
                        <td>
                            <input type="text" id="nhaXuatBan" name="nhaxuatban"><br>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="namXuatBan">Năm xuất bản:</label></td>
                        <td>
                            <input type="text" id="namXuatBan" name="namxuatban"><br>
                        </td>
                    </tr>
                </table> 
                <input type="submit" name="submit" value="Gửi">
        </form>
    </div>
    <script src="Bai1.js"></script>
</body>
</html>