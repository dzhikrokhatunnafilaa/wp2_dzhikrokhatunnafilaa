<<<<<<< HEAD
<html>

<head>
    <title>Tampil Data Matakuliah</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">Tampil Data Mata Kuliah</th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <th>:</th>
                <td><?= $kode; ?></td>
            </tr>
            <tr>
                <td>Nama MTK</td>
                <td>:</td>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><?= $sks; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><a href="<?= base_url('matakuliah'); ?>">Kembali</a></td>
            </tr>
        </table>
    </center>
</body>

</html>
=======
<html> 
<head> 
        <title>Tampil Data Matakuliah</title>
 </head> 
 <body>     
     <center>         
         <table>             
            <tr>                
                <th colspan="3"> Tampil Data Mata Kuliah</th>             
            </tr>             
            <tr>                 
                <td colspan="3">                     
                <hr>                 
            </td>             
        </tr>            
        <tr>                 
            <th>Kode MTK</th>                 
            <th>:</th>                 
            <td>                     
                <?= $kode; ?>                 
            </td>             
        </tr>             
        <tr>                 
            <td>Nama MTK</td>                 
            <td>:</td>                 
            <td><?= $nama; ?></td>             
        </tr>             
        <tr>                 
            <td>SKS</td>                 
            <td>:</td>                 
            <td><?= $sks; ?>          
        </td>             
    </tr>             
    <tr>                 
        <td colspan="3" align="center">                     
            <a href="<?= base_url('matakuliah'); ?>">Kembali</a>                 
        </td>
        </tr>         
    </table>     
</center> 
</body> 
 </html>
>>>>>>> 73e0b997d2a42375080be599dc8909c9a94125c5
