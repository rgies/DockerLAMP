<html>
<head>
    <title>Hello World</title>
</head>
<body>
    <h1>Herzlich Willkommen !!!</h1>
    <?php if($_ENV["HOSTNAME"]) {?><h3>My hostname is <?php echo $_ENV["HOSTNAME"]; ?></h3><?php } ?>
    <?php if($_ENV["NAME"]) {?><h4>My name is <?php echo $_ENV["NAME"]; ?></h4><?php } ?>


</body>
</html>