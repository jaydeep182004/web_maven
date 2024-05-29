<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1 align="center" style="background-color: lime;" class="heading">User Enter Input Boxes</h1>
        <hr class="heading">
        <br>
        <form method="post" action="third_page.php" onsubmit="return validateForm()">
            <?php
            $Number = isset($_POST['exampleInputNumber']) ? $_POST['exampleInputNumber'] : 0;
            $Number = max(3, $Number);
            for ($i = 1; $i <= $Number; $i++) {
                echo '<div class="mb-3">
                        <label for="inputBox' . $i . '" class="form-label">Enter Number box ' . $i . '</label>
                        <input type="text" class="form-control" name="number[]" id="inputBox' . $i . '">
                    </div>';
            }
            ?>
            <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function validateForm() {
            var inputs = document.querySelectorAll('input[name="number[]"]');
            var filledCount = 0;

            inputs.forEach(function(input) {
                if (input.value.trim() !== '') {
                    filledCount++;
                }
            });

            if (filledCount < 3) {
                alert('Please fill in at least 3 input boxes.');
                return false;
            }

            return true;
        }
    </script>
</body>

</html>
