<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
$dataProduk = array(
    array("Galaxy S21", "Samsung", 19000000, true),
    array("Galaxy A71", "Samsung", 6999000, false),
    array("iPhone 12 Pro Max", "Apple", 20999000, true),
    array("iPhone 12 Mini", "Apple", 10999000, false)
);

echo "<table>
<tr>
<th>Nama Produk</th>
<th>Merk</th>
<th>Harga</th>
<th>Status Stok</th>
</tr>";

foreach ($dataProduk as $item) {
    echo "<tr>";
    echo "<td>" . $item[0] . "</td>";
    echo "<td>" . $item[1] . "</td>";
    echo "<td>" . $item[2] . "</td>";
    echo "<td>" . ($item[3] ? "Tersedia" : "Tidak Tersedia") . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

<form action="order.php" method="post">
    <label for="nama">Nama Produk:</label><br>
    <input type="text" id="nama" name="nama" required><br>
    <label for="merk">Merk:</label><br>
    <input type="text" id="merk" name="merk" required><br>
    <label for="harga">Harga:</label><br>
    <input type="number" id="harga" name="harga" required><br>
    <label for="status">Status Stok:</label><br>
    <select id="status" name="status">
        <option value="tersedia">Tersedia</option>
        <option value="habis">Tidak Tersedia</option>
    </select><br>
    <input type="submit" value="Order">
</form>

</body>
</html>