<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        <?php
            $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem laborum ullam animi iusto debitis totam aliquam at veritatis, obcaecati vel necessitatibus aut eum, ex, saepe excepturi atque accusantium exercitationem amet";
            echo "<p class='text-success'> $str </p>";
            echo "<p class='text-primary'>" . strtoupper($str) . "</p>";
            echo "<span class='text-danger'>" . strlen($str) . "</span>";
            echo "<span class='text-warning'>" . str_word_count($str) . "</span>";
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>