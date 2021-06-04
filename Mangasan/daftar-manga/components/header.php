<?php


require_once(__DIR__ . '/../helper/factory.php');
require_once(__DIR__ . '/../helper/set.php');

$mangas = Factory::getMangas();
$request = URLHelper::getMangasRequest();
$titles = array();
$genres = array();

foreach ($mangas as $manga) {
    if (!in_array($manga->title, $titles)) $titles[] = $manga->title;
    if (!in_array($manga->genre, $genres)) $genres[] = $manga->genre;
}
?>
<nav class="navbar navbar-expand-lg navbar-light pt-3 pb-3 ps-2 ps-lg-5 pe-2 pe-lg-5">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pt-3 pt-lg-0" id="navbarNavDropdown">
            <a class="navbar-brand" href="/daftar-film">
                <img src="../assets/favicon.png" class="pb-1" /><span class="ms-2 text-xl link">Mangasan</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown ms-4">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= empty($request->title) ? 'Pilih Title' : $request->title ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php foreach ($titles as $title) : ?>
                            <li><a class="dropdown-item" href="/daftar-manga?title=<?= $title ?>&genre=<?= $request->genre?>"><?= $title ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                </li>
                <li class="nav-item dropdown ms-4">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= empty($request->genre) ? 'Pilih Genre' : $request->genre ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php foreach ($genres as $genre) : ?>
                            <li><a class="dropdown-item" href="/daftar-manga?title=<?= $request->title ?>&genre=<?= $genre ?>"><?= $genre ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
