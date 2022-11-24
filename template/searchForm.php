<!DOCTYPE html>
<html>
    <head>
        <title>Tim kiem nhan vien</title>
        <style></style>
    </head>
    <body>
        <form name="searchForm" action="NhanVienController.php" method="post">
            <input type="hidden" name="controller" value="search">
            <table>
                <tr>
                    <th colspan="2">TIM KIEM NHAN VIEN</th>
                </tr>
                <tr>
                    <td>ID</td>
                    <td><input type="radio" name="choice" value="id"></td>
                  
                    <td>Ten nhan vien</td>
                    <td><input type="radio" name="choice" value="tennv"></td>
                
                    <td>Dia chi</td>
                    <td><input type="radio" name="choice" value="diachi"></td>
                </tr>
                <tr>
                    <td>Du lieu: </td>
                    <td><input type="text" value="" name="data"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                    <td><input type="reset" name="reset" value="Reset"></td>
                </tr>
            </table>
        </form>
    </body>
</html>