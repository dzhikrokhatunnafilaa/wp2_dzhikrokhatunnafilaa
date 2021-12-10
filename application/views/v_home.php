<!DOCTYPE html>
<html>
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<body>

    <h3>Order Sepatu</h3>

    <div>
        <form action="<?= base_url('sepatu/cetak'); ?>" method="post">
            <label for="nama">Nama Pembeli</label>
            <input type="text" id="nama" name="nama" placeholder="Your name..">

            <label for="nohp">No Hp</label>
            <input type="text" id="nohp" name="nohp" placeholder="Your last name..">

            <label for="merek">Merek</label>
            <select id="merek" name="merek">
                <option value="Nike">Nike - 375000</option>
                <option value="Adidas">Adidas - 300000</option>
                <option value="Kickers">Kickers - 250000</option>
                <option value="Eiger">Eiger - 275000</option>
                <option value="Bucherri">Bucherri - 400000</option>
            </select>

            <label for="ukuran">Ukuran Sepatu</label>
            <select id="ukuran" name="ukuran">
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>