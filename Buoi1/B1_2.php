<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2</title>
    <style>
        table {
            width: 30%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 2px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th.center, td.center {
            text-align: center;
        }
        .Chiatrang {
            text-align: left; 
            margin-top: 20px;
        }
        .Chiatrang a {
            margin: 0 5px;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid black;
            border-radius: 25px;
            color: black;
        }
        
        
    </style>
</head>
<body>

    <?php
        $tongdong = 100;
        $sodongtrentrang = 10;
        $tranghienthi = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $dongbatdau = ($tranghienthi - 1) * $sodongtrentrang;
        $tongsotrang = ceil($tongdong / $sodongtrentrang);
    ?>

    <table>
        <thead>
            <tr>
                <th class="center">STT</th>
                <th class="center">Tên Sách</th>
                <th class="center">Nội Dung Sách</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $dongketthuc = min($dongbatdau + $sodongtrentrang, $tongdong); 
                for ($i = $dongbatdau + 1; $i <= $dongketthuc; $i++) {
                    echo "<tr>";
                    echo "<td class='left'>$i</td>";
                    echo "<td class='left'>Tên Sách $i</td>";
                    echo "<td class='left'>Nội Dung Sách $i</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <div class="Chiatrang">
        <?php
            if ($tranghienthi > 1) {
                echo "<a href='?page=" . ($tranghienthi - 1) . "'>Trang trước</a>";
            }
            if ($tranghienthi < $tongsotrang) {
                echo "<a href='?page=" . ($tranghienthi + 1) . "'>Trang sau</a>";
            }
        ?>
    </div>
</body>
</html>
