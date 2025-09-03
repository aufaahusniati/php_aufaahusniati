<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: antiquewhite;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: black;
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th,
        td {
            border: 2px solid black;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .search-form {
            background-color: #f8f9fa;
            padding: 20px;
            border: 2px solid black;
            border-radius: 5px;
            margin-top: 16px;
        }

        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-row label {
            width: 100px;
            font-weight: bold;
            margin-right: 10px;
        }

        .form-row input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }

        .search-btn {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .search-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Data Orang dan Hobi</h1>

        <?php if (count($results) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Hobi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $row): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['nama']); ?></td>
                            <td><?php echo htmlspecialchars($row['alamat']); ?></td>
                            <td><?php echo htmlspecialchars($row['hobi_list'] ?? 'Tidak ada hobi'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <div class="search-form">
            <h3>Pencarian Data</h3>
            <form method="POST" action="">
                <div class="form-row">
                    <label for="search_nama">Nama :</label>
                    <input type="text" id="search_nama" name="search_nama"
                        value="<?php echo htmlspecialchars($searchNama); ?>" placeholder="Masukkan nama">
                </div>
                <div class="form-row">
                    <label for="search_alamat">Alamat :</label>
                    <input type="text" id="search_alamat" name="search_alamat"
                        value="<?php echo htmlspecialchars($searchAlamat); ?>" placeholder="Masukkan alamat">
                </div>
                <div class="form-row">
                    <label for="search_hobi">Hobi :</label>
                    <input type="text" id="search_hobi" name="search_hobi"
                        value="<?php echo htmlspecialchars($searchHobi); ?>" placeholder="Masukkan hobi">
                </div>
                <button type="submit" class="search-btn">Cari</button>
            </form>
        </div>
    </div>
</body>

</html>