<form action="<?php echo esc_url(home_url('/')); ?>" method="GET">
    <div class="form-group">
        <label for="search" class="h4 font-italic">Search</label>
        <input type="text" class="form-control" id="search" name="s" value="<?php the_search_query(); ?>" />
    </div>
</form>
