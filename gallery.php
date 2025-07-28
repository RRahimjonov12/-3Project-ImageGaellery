<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<div class="gallery-container">
    <?php foreach($imageTitles as $src => $title):?>
    
               <a href="image.php?<?php echo http_build_query(['filename' => $src]); ?>" class="gallery-item">
                    <h1><?php echo e($title); ?></h1>
                    <img src="./images/<?php echo rawurlencode($src);?>" alt="<?php echo e($title);?>">
                </a>
    <?php endforeach; ?>
</div>


<?php include './views/footer.php'; ?>
