<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SAE Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header class="text-center m-0 bg-primary text-white py-3 mb-4">
    <h1>SAE MANAGER</h1>
</header>
<div>
    <?php echo $menu->getAffichage();  ?>
</div>

<div>
    <?= $module_html ?>
</div>

<footer>
</footer>
</body>
</html>
