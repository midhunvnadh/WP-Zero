<form role="search" method="get" class="row searchform" action="<?php echo home_url('/'); ?>" autocomplete="off">
    <div class="col-9 px-0">
        <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x('Search', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
    </div>
    <div class="col-3 px-0">
        <button type="submit" class="btn btn-primary" style="margin-left: 5px;"><i class="fas fa-search"></i></button>
    </div>

</form>