<table border=1>
    <thead>
        <th>Nama</th>
        <th>Nim</th>
        <th>Aksi</th>
    </thead>
    <tbody>
<?php

    while($row = mysqli_fetch_assoc($result)) {
        $nim = $row['nim'];
        echo "<tr>";
        echo "<td>" . $row["nama"]. "</td>"; 
        echo "<td>" . $row["nim"]. "</td>";
        echo "<td>
            <a href='form_edit.php?nim=$nim'>Edit</a> | 
            <a href='delete.php?nim=$nim'>Hapus</a> | 
            
            </td>";
        echo "</tr>";
    }
?> 
    </tbody>
</table>