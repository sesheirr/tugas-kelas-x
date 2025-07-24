<!DOCTYPE html>
<html>
// kode sheira f, x ppl 2
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>Calculator</title>
</head>
<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
}

.calculator {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 300px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

input[type="number"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.result {
    margin-top: 20px;
    font-size: 18px;
    color: #333;
}
</style>
<body> 
     <div class="Calculator">
       <h2>Penjumlahan Sederhana<h2>
        <form method="POST">
            <input type="number" name="number1" placeholder="Masukan angka 1" required>
            <input type="number" name="number2" placeholder="Masukan angka 2" required>
            <input type="submit" value="Hitung">
       </form>
     <div class="result">    
           <?php
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
               $number1 = $_POST['number1'];
               $number2 = $_POST['number2'];
               $result = $number1 + $number2;
               // Menampilkan hasil penjumlahan dengan benar
    echo "Hasil penjumlahan: " . $number1 . " + " . $number2 . " = " . $result;
           }
           ?>
       </div>
      </div>
</body>
</html>
