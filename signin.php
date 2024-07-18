<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $TITLE; ?></title>

    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <h4 class="text-center mt-3"><?= $TITLE; ?></h4>
    </div>
    <select name="lang_login" id="lang_login" class="form-control">
        <option value="en" <?php if ($_SESSION["lang"] == 'en') {
                                echo "selected";
                            } ?>>English</option>
        <option value="th" <?php if ($_SESSION["lang"] == 'th') {
                                echo "selected";
                            } ?>>ไทย</option>
    </select>


    <script src="assets/vendor/jquery/jquery.min.js" crossorigin="anonymous"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
    <script>
        $("#lang_login").change(function() {
            $.ajax({
                type: 'POST',
                data: {
                    lang: $("#lang_login").val()
                },
                url: 'change_language.php',
                success: function(data) {
                    location.reload()
                }
            });
        });
    </script>
</body>

</html>