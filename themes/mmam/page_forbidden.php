<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header_top.php'); ?>

<body <?php   if ($c->isEditMode()) { ?> class="editmode" <?php   } ?> id="pageid<?php  print $c->getCollectionID(); ?>">

<?php $this->inc('elements/header.php'); ?>

<main>
    <h1><?php echo t('403 Error') ?></h1>
    <p><?php echo t('You are not allowed to access this page.') ?></p>
</main>

<?php $this->inc('elements/footer.php'); ?>
