<header class="page-header">
    <?php if ($this->paramList['eyebrow']) : ?>
        <span class="eyebrow"><?php echo $this->paramList['eyebrow'] ?></span>
    <?php endif; ?>
    <h1><?php echo $this->paramList['title'] ?></h1>
    <?php if ($this->paramList['subtitle']) : ?>
        <p><?php echo $this->paramList['subtitle'] ?></p>
    <?php endif; ?>
</header>
