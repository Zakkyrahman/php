<?php 
 $host="127.0.0.1";
 $user="root";
 $password="";
 $db="dbtoko";
 
 $koneksi=new mysqli($host, $user, $password, $db);

$sql="SELECT * FROM barang";

$hasil=mysqli_query($koneksi, $sql);

var_dump($hasil);

echo "<table border=2px>
        <thead>
            <tr>
                <th>
                    BARANG
                </th>
                <th>
                    HARGA
                </th>
                <th>
                    STOCK
                </th>
            </tr>
        </thead>
        <tbody>";

while($row=mysqli_fetch_array($hasil)){
    echo "<tr>";
        echo "<td> " . $row[1] . "</td>";
        echo "<td> " . $row[2] . "</td>";
        echo "<td> " . $row[3] . "</td>";
    echo "</tr>";
}

echo "  </tbody>
    </table>";

//pelanggan

$sql="SELECT * FROM pelanggan";
$hasil=mysqli_query($koneksi,$sql);

echo "<table border=2px>
<thead>
<tr>
    <th>
        PELANGGAN
    </th>
    <th>
        ALAMAT
    </th>
    <th>
        TELEPON
    </th>
</tr>
</thead>
<tbody>";

while($row=mysqli_fetch_array($hasil)){
    echo "<tr>";
        echo "<td>". $row[1]. "</td>";
        echo "<td>". $row[2]. "</td>";
        echo "<td>". $row[3]. "</td>";
    echo "</tr>";
}

echo "</tbody></table> "
?>