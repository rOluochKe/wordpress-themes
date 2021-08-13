<div class="container">

    <div class="post mb-5">
        <div class="media">
            <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo the_post_thumbnail_url("thumbnail"); ?>" alt="image">
            <div class="media-body">
                <h3 class="title mb-1"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                <div class="meta mb-1"><span class="date"><?php echo the_date(); ?></span><span class="comment"><a href="#"><?php echo comments_number(); ?></a></span></div>
                <div class="intro"><?php echo the_excerpt(); ?></div>
                <a class="more-link" href="<?php echo the_permalink(); ?>">Read more &rarr;</a>
            </div>
            <!--//media-body-->
        </div>
        <!--//media-->
    </div>
</div>