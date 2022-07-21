<?php 
    echo "<head><title>My Guest Book</title></head>";
    $fp = fopen("guestbook.txt", "r");

    echo "<table border='1'>";
    echo "<tr><td>tanggal</td><td>Nama</td><td>alamat</td><td>email</td><td>status</td><td>komentar</td></tr>";

    while ($isi = fgets($fp)) {
        $pisah = explode('|', $isi);
       	echo "<tr><td>";
       	echo date('D-M-Y');
       	echo "</td><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td><td>$pisah[3]</td><td>$pisah[4]</td></tr>";
        /*echo "<tr><td>Tanggal: <td>:";
        echo date('D-M-y');
        echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
        echo "<tr><td>Alamat: </td><td>: $pisah[1] </td></tr>";
        echo "<tr><td>Email: </td><td>: $pisah[2] </td></tr>";
        echo "<tr><td>Status: </td><td>: $pisah[3] </td></tr>";
        echo "<tr><td>Komentar: </td><td>: $pisah[4] </td></tr>";
        echo "<tr><td><br></td><td><br></td></tr>";*/
    }

    echo "</table>";
    echo "<a href='tampilan.php'> Isi buku tamu </a>";

?>