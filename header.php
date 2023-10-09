<?php
include 'components/php_composer.php';

$data_lang                     = (object) array(
    'langs'              => clsLoad::getArrayLangs(),
    'selected_lang'      => clsLoad::getSelectedLang(),
    'selected_lang_data' => array(),
);
$data_lang->selected_lang_data = isset($data_lang->langs[$data_lang->selected_lang]) ? $data_lang->langs[$data_lang->selected_lang] : array();

?>

<!-- start header -->
<header class="header-with-topbar">
    <!-- topbar -->
    <div class="top-header-area bg-black padding-10px-tb">
        <div class="container-lg top-menu">
                <div class="col-md-12 pe-lg-0 d-md-flex align-items-center justify-content-end nl-link js-translate-box" data-main-transalte="sr" id="gtranslate_wrapper">
                    <div class="js-translate-list">
                        <?php if ($data_lang->langs) { ?>
                            <?php foreach ($data_lang->langs as $type => $row) { ?>
                                <button class="translate-lang js-translate-lang <?= isset($data_lang->selected_lang_data->short) && $data_lang->selected_lang_data->short == $row->short ? 'active' : ''; ?>"
                                        data-transalte="<?= $row->short; ?>"
                                        title="<?= $row->long; ?>"><?= strtoupper($row->short); ?></button>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="d-none" id="google_translate_element2"></div>
                </div>
        </div>
    </div>
    <!-- end topbar -->
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-top header-dark-transparent background navbar-expand-lg">
        <div class="container-lg nav-header-container">
            <!-- start logo -->
            <div class="col-auto ps-0">
                <a href="index.php" title="VBS Bezbednost" class="logo"><img src="images/logo.png" data-at2x="images/logo.png" class="logo-dark default" alt="VBS Bezbednost"><img src="images/logo.png" data-at2x="images/logo.png" alt="VBS Bezbednost" class="logo-light"></a>
            </div>
            <!-- end logo -->
            <div class="col accordion-menu pe-0 pe-md-3">
                <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle-1">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                    <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="animate__fadeIn" data-out="animate__fadeOut">
                        <!-- start menu item -->
                        <li class="main-color">
                            <a href="index.php">Početna</a>
                        </li>
                        <!-- end menu item -->
                        <li class="main-color">
                            <a href="o-nama.php">O Nama</a>
                        </li>
                        <li class="main-color">
                            <a href="usluge.php">Usluge</a>
                        </li>
                        <li class="main-color">
                            <a href="reference.php">Reference</a>
                        </li>
                        <li class="main-color">
                            <a href="novosti.php">Novosti</a>
                        </li>
                        <?php /* <li class="main-color">
                            <a href="#">Karijera</a>
                        </li> */ ?>
                        <li class="main-color">
                            <a href="kontakt.php">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
<!-- end header -->
