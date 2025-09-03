<?php
$tampilan = (int)($_POST['tampilan'] ?? 1);
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: antiquewhite;
        }

        .box {
            width: 300px;
            margin: 100px auto;
            padding: 22px;
            border: 2px solid black;
            background-color: white;
        }

        button {
            margin-top: 10px;
            background-color: yellowgreen;
        }
    </style>
</head>

<body>
    <div class="box">
        <?php if ($tampilan == 1): ?>
            <form method="post">
                Nama Anda : <input type="text" name="nama" required>
                <input type="hidden" name="tampilan" value="2">
                <button type="submit">Submit</button>
            </form>

        <?php elseif ($tampilan == 2): ?>
            <form method="post">
                Umur Anda : <input type="number" name="umur" required>
                <input type="hidden" name="nama" value="<?php echo $_POST['nama']; ?>">
                <input type="hidden" name="tampilan" value="3">
                <button type="submit">Submit</button>
            </form>

        <?php elseif ($tampilan == 3): ?>
            <form method="post">
                Hobi Anda : <input type="text" name="hobi" required>
                <input type="hidden" name="nama" value="<?php echo $_POST['nama']; ?>">
                <input type="hidden" name="umur" value="<?php echo $_POST['umur']; ?>">
                <input type="hidden" name="tampilan" value="4">
                <button type="submit">Submit</button>
            </form>

        <?php elseif ($tampilan == 4): ?>
            <p>Nama: <?php echo $_POST['nama']; ?></p>
            <p>Umur: <?php echo $_POST['umur']; ?></p>
            <p>Hobi: <?php echo $_POST['hobi']; ?></p>

        <?php endif; ?>
    </div>
</body>

</html>