<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rubber Ducky SVG</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<style type="text/css">


@keyframes straightLine {
  50% {
    transform: translate3D(-50px, 40px, 50px);
  }
}

.duckling {
  animation: straightLine 2.5s infinite ease-in;
}

.duckling: :after {
  animation: straightLine 2.5s infinite ease-out;
}

#water-2 {
	animation: straightLine 2.5s infinite ease-in;
}

#water-2: :after {
	animation: straightLine 2.5s infinite ease-out;
}




	</style>
}
</head>
<body class="bg-faded">
    <main class="container py-4">
      <h1 class="pb-4 font-weight-bold text-center">Rubber Ducky Bath Time</h1>
      <?php include('../images/duck-svg.php'); ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script>

    </script>
</body>
</html>