<?php
function getYoutubeVideoId($url)
{
    $pattern = '/^(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i';
    preg_match($pattern, $url, $matches);
    return isset($matches[1]) ? $matches[1] : null;
}
?>



<link rel="stylesheet" href="<?= base_url("css/recipe_view.css") ?>">
<main id="main" class="main">
    <section class="section dashboard">


        <div class="container">
            <div class="recipe-header">
                <h1>
                    <?php echo $recipe->name; ?>
                </h1>
                <img src="<?php echo base_url('recipe/image/' . $recipe->id); ?>" alt="<?php echo $recipe->name; ?>" />
            </div>

            <p>
                <?php echo $recipe->description; ?>
            </p>

            <div class="recipe-header">
                <p>Receta subida por:
                    <b>
                        <?= $username ?>

                        <?php if (empty($photoUser)): ?>
                            <img src="<?= base_url("imagenes/profile.png") ?>" alt="Profile" id="profile-pic">
                        <?php else: ?>
                            <img src="data:image/jpeg;base64,<?= base64_encode($photoUser) ?>" alt="Profile"
                                id="profile-pic">
                        <?php endif; ?>

                    </b>
                </p>
            </div>

            <h2>Ingredientes</h2>
            <ul class="ingredient-list">
                <?php foreach ($ingredients as $ingredient) { ?>
                    <li class="ingredient-item">
                        <img src="../imagenes/ingredientes/<?php echo $ingredient->icon; ?>"
                            alt="<?php echo $ingredient->name; ?>" />
                        <span>
                            <?php echo $ingredient->amount; ?>
                        </span>
                    </li>
                <?php } ?>
            </ul>

            <h2>Instrucciones</h2>
            <p class="instructions">
                <?php echo $recipe->instructions; ?>
            </p>

            <?php if (!empty($recipe->link)): ?>
                <?php $videoId = getYoutubeVideoId($recipe->link); ?>
                <?php if ($videoId): ?>
                    <h2>Video de la receta</h2>
                    <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $videoId; ?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </section>

</main><!-- End #main -->
