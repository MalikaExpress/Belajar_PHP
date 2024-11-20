<table border="2">
    <?php
    $dataProduk = array(
                //nama produk, merk, harga, status stok
    array("Galaxy S21", "Samsung", 19000000, true),
    array("Galaxy A71", "Samsung", 6999000, false),
    array("iPhone 12 Pro Max", "Apple", 20999000, true),
    array("iPhone 12 Mini", "Apple", 10999000, false),
    );

    foreach ($dataproduk as $product) {
        echo "<tr>";
        echo "<td>" . $product['nama'] . "</td>";
        echo "<td>" . $student['kelas'] . "-" . $student['jurusan'] . "</td>";
        echo "</tr>";
    }
?>