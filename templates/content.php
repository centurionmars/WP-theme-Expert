<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <div class="post-preview">
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="post-title">
                                <?php the_title(); ?>
                            </h2>
                            <h3 class="post-subtitle">

                            </h3>
                        </a>
                        <p class="post-meta">نوشته شده توسط :
                            <a href="#"> <?php the_author(); ?> </a>
                            <?php the_date(); ?></p>
                    </div>
                    <hr>
                <?php endwhile; ?>
            <?php endif; ?>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>
