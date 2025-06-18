<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cetak Hasil Penilaian</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 14px;
        }

        th {
            height: 30px;
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 3px;
        }

        thead {
            background: lightgray;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2 class="center">Hasil Penilaian Pemilihan Smartphone 2025 Terbaik Menggunakan Metode Weighted Product</h2>
    <!-- <img src="/assets/images/abti.png"> -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Rumah Makan</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            foreach ($hasil as $row) : ?>
                <tr>
                    <td class="center"><?= ++$no ?></td>
                    <td><?= $row->nama_alternatif ?></td>
                    <td class="center"><?= floatval($row->nilai) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>