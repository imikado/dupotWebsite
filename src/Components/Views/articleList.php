<?php

use MyWebsite\Apis\IconApi;
use MyWebsite\Apis\TextApi;

?>
<div class="article-stats">
    <div class="article-stat">
        <span class="article-stat-value"><?php echo $this->paramList['articleCount'] ?></span>
        <span class="article-stat-label">articles</span>
    </div>
    <div class="article-stat">
        <span class="article-stat-value"><?php echo $this->paramList['repoCount'] ?></span>
        <span class="article-stat-label">dépôts de code source</span>
    </div>
    <div class="article-stat">
        <span class="article-stat-value"><?php echo $this->paramList['firstYear'] ?>–<?php echo $this->paramList['lastYear'] ?></span>
        <span class="article-stat-label">dans GNU/Linux Magazine</span>
    </div>
</div>

<div class="article-timeline">
    <?php foreach ($this->paramList['articleListByYear'] as $year => $articleList) : ?>

        <section class="article-year">
            <h2 class="article-year-title"><?php echo $year ?></h2>

            <div class="article-year-list">
                <?php foreach ($articleList as $article) : ?>

                    <article class="card article-card">
                        <div class="article-issue<?php echo $article->special ? ' is-special' : '' ?>" title="<?php echo $article->magazine ?><?php echo $article->special ? ' hors-série' : '' ?> n°<?php echo implode(', ', $article->issues) ?>">
                            <span class="article-issue-label"><?php echo $article->special ? 'HS' : 'N°' ?></span>
                            <span class="article-issue-number"><?php echo $article->issues[0] ?></span>
                            <?php if (count($article->issues) > 1) : ?>
                                <span class="article-issue-more">+<?php echo count($article->issues) - 1 ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="article-content">
                            <div class="magazine-meta">
                                <?php echo ucfirst($article->month) ?> <?php echo $article->year ?>
                                &middot; <?php echo $article->magazine ?><?php echo $article->special ? ' HS' : '' ?> <?php echo implode(', ', $article->issues) ?>
                            </div>
                            <h3><?php echo TextApi::frenchSpacing($article->article) ?></h3>
                            <p><?php echo TextApi::frenchSpacing($article->body) ?></p>
                            <div class="card-platforms">
                                <?php foreach ($article->tags as $tagLoop) : ?>
                                    <span class="tag-pill"><?php echo $tagLoop ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="article-repos">
                            <?php foreach ($article->repos as $repoLoop) : ?>
                                <a class="btn btn-ghost btn-repo" href="<?php echo $repoLoop->url ?>" target="_blank"><?php echo IconApi::render('github') ?><?php echo $repoLoop->label ?? 'Code source' ?></a>
                            <?php endforeach; ?>
                        </div>
                    </article>

                <?php endforeach; ?>
            </div>
        </section>

    <?php endforeach; ?>
</div>
