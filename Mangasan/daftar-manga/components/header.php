<?php


require_once(__DIR__ . '/../helper/factory.php');
require_once(__DIR__ . '/../helper/set.php');

$mangas = Factory::getMangas();
$request = URLHelper::getMangasRequest();
$titles = array();

foreach ($mangas as $manga) {
    if (!in_array($manga->title, $titles)) $titles[] = $manga->title;
}
?>
<nav class="navbar navbar-expand-lg navbar-light pt-3 pb-3 ps-2 ps-lg-5 pe-2 pe-lg-5">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pt-3 pt-lg-0" id="navbarNavDropdown">
            <a class="navbar-brand" href="/daftar-mangas">
                <img src="../assets/favicon.png" class="pb-1" /><span class="ms-2 text-xl link">Mangasan</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown ms-4">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= empty($request->title) ? 'Pilih Title' : $request->title ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php foreach ($titles as $title) : ?>
                            <li><a class="dropdown-item" href="<?= $manga->link ?>"><?= $title ?></a></li>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <li><a class="dropdown-item" href="https://id.wikipedia.org/wiki/One_Piece">One Piece</a></li>
                                                    <li><a class="dropdown-item" href="https://id.wikipedia.org/wiki/Naruto">Naruto</a></li>
                                                    <li><a class="dropdown-item" href="https://id.wikipedia.org/wiki/Demon_Slayer:_Kimetsu_no_Yaiba">Demon Slayer: Kimetsu no Yaiba</a></li>
                                                    <li><a class="dropdown-item" href="https://id.wikipedia.org/wiki/Hunter_%C3%97_Hunter">Hunter x Hunter</a></li>
                                                    <li><a class="dropdown-item" href="https://id.wikipedia.org/wiki/Attack_on_Titan">Attack On Titan</a></li>
                                                </ul>
                        <?php endforeach; ?>
                        </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
