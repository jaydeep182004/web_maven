<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1 align="center" style="background-color: lime;" class="heading">Select Checkboxes</h1>
        <hr class="heading">
        <br>
        <div class="container">
            <form method="POST" action="fourth_page.php" onsubmit="return validateCheckboxes()">
                <?php

                // print_r($_POST['number']);
                $inputValues = isset($_POST['number']) ? $_POST['number'] : [];
                for ($i = 0; $i < count($inputValues); $i++) {
                    $value = $inputValues[$i];
                    echo '<div class="mb-3">
            <label for="checkbox' . $i . '" class="form-label">input ' . ($i + 1) . '</label>
            <input type="text" class="form-control" id="inputBox' . $i . '" value="' . $value . '" readonly>
            <input type="checkbox" id="checkbox' . $i . '" name="checkbox[]" value="' . $value . '">
        </div>';
                }
                ?>
                <button type="button" class="btn btn-info" onclick="checkAll()">Check All</button>
                <button type="button" class="btn btn-danger" onclick="clearAll()">Clear All</button>
                <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <script>
            function checkAll() {
                var checkboxes = document.getElementsByName('checkbox[]');
                checkboxes.forEach((checkbox) => {
                    checkbox.checked = true;
                });
            }

            function clearAll() {
                var checkboxes = document.getElementsByName('checkbox[]');
                checkboxes.forEach((checkbox) => {
                    checkbox.checked = false;
                });
            }
        </script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    