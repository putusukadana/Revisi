<?php
    /**
     * 1. buat koneksi ke DBMS mysql dan buka database mahasiswa
     * 2. buat query untuk menampilkan seluruh data dari tabel mhs
     * 3. execute query
     * 4. tampilkan data
     * 5. tutup koneksi
     */
    include_once("dbkoneksi.php");

    $sql = "SELECT KODE_BARANG, NAMA_BARANG, TANGGAL_PENGIRIMAN, KODE_SUPLAYER, NAMA_SUPLAYER FROM gudang;";

    $hsl = mysqli_query($cnn, $sql);

    echo "<table>
            <theader>
                <tr>    
                <th>No</th>
                <th>KODE_BARANG</th>
                <th>NAMA_BARANG</th>
                <th>TANGGAL_PENGIRIMAN</th>
                <th>KODE_SUPLAYER</th>
                <th>NAMA_SUPLAYER</th>
                <th><a href='formdatabarang.php'>TambahData</a></th>
                </tr>
            </theader>
            <tbody>";
            $no =1;
            while($h = mysqli_fetch_Array($hsl) ){
                // if($h["JK"]=="L"){
                //     $jk = "Laki-Laki";
                // }else{
                //     $jk = "Perempuan";
                // }
                echo "    <tr> 
                    <td>".$no."</td>
                    <td>".$h["KODE_BARANG"]."</td>
                    <td>".$h["NAMA_BARANG"]."</td>
                    <td>".$h["TANGGAL_PENGIRIMAN"]."</td>
                    <td>".$h["KODE_SUPLAYER"]."</td>
                    <td>".$h["NAMA_SUPLAYER"]."</td>
                    <td><a href='editdatabarang.php?n=".$h["KODE_BARANG"]."'>Edit</a> | <a href='hpsdatabarang.php?n=".$h["KODE_BARANG"]."'>Delete</a></td>
                </tr>";
                $no++;
            }
    echo "        </tbody>
    </table>";