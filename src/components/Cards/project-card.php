<?php
function readJSONFile($filename)
{
    try {
        $jsonContents = file_get_contents($filename);

        if ($jsonContents === false) {
            throw new Exception('Impossible de lire le fichier JSON');
        }

        $data = json_decode($jsonContents, true);

        if ($data === null) {
            throw new Exception('Le contenu du fichier JSON est invalide');
        }

        return $data;
    } catch (Exception $e) {
        echo 'Une erreur est survenue : ' . $e->getMessage();
    }
}

$filename = 'src/lib/dummy-data.json';
$data = readJSONFile($filename);
?>

<?php foreach ($data as $project) : ?>
    <div class="project-card-container">
        <div class="project-card">
            <div class="project-card-header">
                <h3 class="project-card-title"><?= $project['name'] ?></h3>
                <p class="project-card-description"><?= $project['description'] ?></p>
            </div>
            <div class="project-card-content">
                <div class="project-card-image-container">
                    <img src="<?= $project['image'] ?>" alt="">
                </div>
                <div class="project-card-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptate ex fugit est quisquam, ut veritatis eligendi iure expedita corrupti nobis aliquam rem adipisci eos omnis earum ipsam? Reiciendis molestias tempora blanditiis earum omnis delectus eveniet, harum molestiae perferendis eligendi nesciunt hic officiis ipsa! Obcaecati tenetur officia voluptatum laboriosam minus.
                    </p>
                    <p class="project-card-tech">
                        Technologies :
                        <span><?= implode(', ', $project['tech']) ?></span>
                    </p>
                </div>
            </div>
            <div class="project-card-footer">
                <a href="<?= $project['link'] ?>" target="_blank" class="project-card-link">
                    <span class="project-card-link-icon">
                        <img src="src/assets/icons/arrow-up-right-from-square-solid.svg" alt="">
                    </span>
                    <span class="project-card-link-text">
                        Voir le projet
                    </span>
                </a>
                <a href="/" target="_blank" class="project-card-link">
                    <span class="project-card-link-icon">
                        <img src="src/assets/icons/github.svg" alt="">
                    </span>
                    <span class="project-card-link-text">Github</span>
                </a>
            </div>
        </div>
    </div>
<?php endforeach; ?>