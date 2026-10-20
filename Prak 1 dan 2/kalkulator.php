<?php
// kalkulator.php
$hasil = null;
$pesan = '';
$a = '';
$b = '';
$operator = '+';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'] ?? '';
    $b = $_POST['b'] ?? '';
    $operator = $_POST['operator'] ?? '+';

    if (is_numeric($a) && is_numeric($b)) {
        $a = (float) $a;
        $b = (float) $b;

        switch ($operator) {
            case '+':
                $hasil = $a + $b;
                break;
            case '-':
                $hasil = $a - $b;
                break;
            case '*':
                $hasil = $a * $b;
                break;
            case '/':
                if ($b == 0) {
                    $pesan = 'Pembagian dengan nol tidak diperbolehkan.';
                } else {
                    $hasil = $a / $b;
                }
                break;
            default:
                $pesan = 'Operator tidak valid.';
        }
    } else {
        $pesan = 'Masukkan dua angka yang valid.';
    }
}
?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalkulator Sederhana</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 40px 16px;
        }

        .kalkulator {
            max-width: 420px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #1e293b;
        }

        input, select, button {
            box-sizing: border-box;
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            font-size: 16px;
        }

        button {
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        .hasil {
            padding: 14px;
            margin-top: 18px;
            background: #dcfce7;
            color: #166534;
            border-radius: 6px;
            overflow-wrap: anywhere;
        }

        .pesan {
            padding: 12px;
            margin-top: 18px;
            background: #fee2e2;
            color: #991b1b;
            border-radius: 6px;
        }
    </style>
</head>

<body>
    <div class="kalkulator">
        <h1>Kalkulator Sederhana</h1>

        <form method="post">
            <input
                type="number"
                step="any"
                name="a"
                placeholder="Angka pertama"
                value="<?= htmlspecialchars((string) $a) ?>"
                required>

            <select name="operator">
                <option value="+" <?= $operator === '+' ? 'selected' : '' ?>>Penjumlahan (+)</option>
                <option value="-" <?= $operator === '-' ? 'selected' : '' ?>>Pengurangan (-)</option>
                <option value="*" <?= $operator === '*' ? 'selected' : '' ?>>Perkalian (*)</option>
                <option value="/" <?= $operator === '/' ? 'selected' : '' ?>>Pembagian (/)</option>
            </select>

            <input
                type="number"
                step="any"
                name="b"
                placeholder="Angka kedua"
                value="<?= htmlspecialchars((string) $b) ?>"
                required>

            <button type="submit">Hitung</button>
        </form>

        <?php if ($pesan !== ''): ?>
            <div class="pesan">
                <?= htmlspecialchars($pesan) ?>
            </div>
        <?php endif; ?>

        <?php if ($hasil !== null): ?>
            <div class="hasil">
                <strong>Hasil Perhitungan</strong>
                <p>
                    <?= htmlspecialchars((string) $a) ?>
                    <?= htmlspecialchars($operator) ?>
                    <?= htmlspecialchars((string) $b) ?>
                    =
                    <strong><?= htmlspecialchars((string) $hasil) ?></strong>
                </p>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>