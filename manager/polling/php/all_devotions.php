<?php

require_once "../../includes/functions/config.php";
blockUrlHackers('../../login', $_SESSION['adminId']);

$result = fetchAll("devotions", "devotion_id", 0, 9);

if ($result) {
    $devotions = $result;
}

?>
        <section id="hover-effects" class="card">
            <div class="card-body">
                <div class="card-block my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery">
                    <div class="grid-hover">
                        <h5 class="text-bold-400 text-uppercase">Devotions</h5>
                        <div class="row">

                            <?php
                            if (!empty($devotions)) {
                                foreach ($devotions as $devotion) {
                                    extract($devotion); ?>

                                    <div class="col-md-6 col-lg-4">
                                        <figure class="effect-winston">
                                            <img src="devotion_images/<?= $devotion_image; ?>" width="100%" alt="img06">
                                            <figcaption>
                                                <p>

                                                    <a href="edit_devotion?devotion_id=<?= $devotion_id; ?>"><i class="fa fa-fw fa-edit"></i></a>
                                                    <a class="text-danger" data-id="<?= $devotion_id; ?>" onclick="delete_devotion(this)"><i class="fa fa-fw fa-trash-o"></i></a>
                                                </p>
                                            </figcaption>
                                        </figure>
                                        <h5 class="text-center text-light rounded p-1" style="width: 95%; background: linear-gradient(to right, saddlebrown, firebrick);"><b><?= $devotion_title; ?></b></h5>
                                    </div>

                                <?php } } ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

<script src="polling/js/all_devotions.js"></script>
