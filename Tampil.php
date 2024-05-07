<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tampil</title>
<body>
    <table style="margin: auto;margin-top:50px""">
        <thead >
            <tr>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $file = "";
                
            $anggota = file_get_contents($file);
            $data = ;

            foreach ($data as $key => $value) {
                    $npm = $value['npm'];
                    echo "<tr>";
                    echo "<td>" . $value['npm'] . "</td>";
                    echo "<td>" . $value['nama'] . "</td>";
                    echo "<td>" . $value['kelas'] . "</td>";
                    echo "<td>" . $value['jenis_kelamin'] . "</td>";
                    echo "<td><a href=?" . $value['npm'] . "'><svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 640 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z'/></svg>
                    </a>| <a href=?" . $value['npm'] . "'><svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 640 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M633.8 458.1L362.3 248.3C412.1 230.7 448 183.8 448 128 448 57.3 390.7 0 320 0c-67.1 0-121.5 51.8-126.9 117.4L45.5 3.4C38.5-2 28.5-.8 23 6.2L3.4 31.4c-5.4 7-4.2 17 2.8 22.4l588.4 454.7c7 5.4 17 4.2 22.5-2.8l19.6-25.3c5.4-6.8 4.1-16.9-2.9-22.3zM96 422.4V464c0 26.5 21.5 48 48 48h350.2L207.4 290.3C144.2 301.3 96 356 96 422.4z'/></svg>
                    </a></td>";
                    echo "</tr>";
            }
            ?>
        </tbody>
    </table>
<center><button > <a href="">Kembali</a> </button></center>
</body>
</html>
