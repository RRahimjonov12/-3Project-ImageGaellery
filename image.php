
<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';
?>

<?php include './views/header.php'; ?>

                        <?php /*CONTENT */ ?>

<?php if(!empty($_GET['filename']) && !empty($imageTitles[$_GET['filename']])):?>
        <?php $src = $_GET['filename'];?>

        <h1><?php echo e($imageTitles[$src]);?></h1>

        <img src="./images/<?php echo e($src);?>" alt="<?php echo e($imageTitles[$src]);?>">

        <p><?php echo e($imageDescriptions[$src]);?></p>
<?php else: ?>
        <div class="notice">
        This image is not found!
        </div>
<?php endif; ?> 

<a href="gallery.php">back to home page</a>     
  
<br><br><br><br>
<?php include './views/footer.php'; ?>
