<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Filter Tanggal</title>
    <style>
        .filter-container {
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
            display: flex;
            gap: 10px;
            align-items: center;
        }
        input[type="date"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 8px 16px;
            background: linear-gradient(180deg, #5cdb62ff, #45a049);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2f6131ff;
        }
    </style>
</head>
<body>
    <form method="GET" action="tampil2.php" class="filter-container">
        <input type="date" name="startDate" id="startDate" value="<?php echo isset($_GET['startDate']) ? $_GET['startDate'] : '2025-04-01'; ?>">
        <input type="date" name="endDate" id="endDate" value="<?php echo isset($_GET['endDate']) ? $_GET['endDate'] : '2025-04-30'; ?>">
        <button type="submit">Tampilkan</button>
    </form>


    <script>
        function tampilkanData() {
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;

            alert(`Menampilkan data dari ${startDate} sampai ${endDate}`);

        }
    </script>
</body>
</html>