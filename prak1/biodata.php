<?php
// biodata.php

function statusKelulusan(float $ipk): string
{
    if ($ipk >= 3.50) return 'Sangat Memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlu Peningkatan';
}

$mahasiswa = [
    'nim' => '4524210112',
    'nama' => 'Muhamad Ibnul fida',
    'fakultas' => 'Fakultas Teknik',
    'prodi' => 'Teknik Informatika',
    'semester' => 5,
    'ipk' => 3.72
];
?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 40px 16px;
        }

        .kartu {
            max-width: 500px;
            margin: auto;
            padding: 28px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #1e293b;
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 12px;
            margin-bottom: 8px;
            background: #f8fafc;
            border-radius: 6px;
            overflow-wrap: anywhere;
        }

        .predikat {
            margin-top: 20px;
            padding: 16px;
            background: #dcfce7;
            color: #166534;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="kartu">
        <h1>Biodata Mahasiswa</h1>

        <ul>
            <?php foreach ($mahasiswa as $kunci => $nilai): ?>
                <li>
                    <strong><?= htmlspecialchars(ucfirst($kunci)) ?>:</strong>
                    <?= htmlspecialchars((string) $nilai) ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="predikat">
            <strong>Predikat Akademik:</strong>
            <?= htmlspecialchars(statusKelulusan((float) $mahasiswa['ipk'])) ?>
        </div>
    </div>
</body>

</html>