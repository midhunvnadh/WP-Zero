<?php
add_action('admin_menu', 'stp_api_add_admin_menu');
add_action('admin_init', 'stp_api_settings_init');

function stp_api_add_admin_menu()
{
    add_options_page('PSCMonk Management', 'PSCMonk Management', 'manage_options', 'settings-api-page', 'stp_api_options_page');
}

function stp_api_settings_init()
{
    register_setting('stpPlugin', 'stp_api_settings');
    add_settings_section(
        'stp_api_stpPlugin_section',
        __('', 'wordpress'),
        'stp_api_settings_section_callback',
        'stpPlugin'
    );

    add_settings_field(
        'monk_desc_short',
        __('Short Description', 'wordpress'),
        'short_desc_rndr',
        'stpPlugin',
        'stp_api_stpPlugin_section'
    );

    add_settings_field(
        'monk_desc_long',
        __('Long Description', 'wordpress'),
        'long_desc_rndr',
        'stpPlugin',
        'stp_api_stpPlugin_section'
    );

    /* Social */
    add_settings_field(
        'yt_link',
        __('YouTube Link', 'wordpress'),
        'link_yt_rndr',
        'stpPlugin',
        'stp_api_stpPlugin_section'
    );
    add_settings_field(
        'tg_link',
        __('Telegram Link', 'wordpress'),
        'link_tg_rndr',
        'stpPlugin',
        'stp_api_stpPlugin_section'
    );
    add_settings_field(
        'fb_link',
        __('Facebook Link', 'wordpress'),
        'link_fb_rndr',
        'stpPlugin',
        'stp_api_stpPlugin_section'
    );
    add_settings_field(
        'tw_link',
        __('Twitter Link', 'wordpress'),
        'link_tw_rndr',
        'stpPlugin',
        'stp_api_stpPlugin_section'
    );
}

function short_desc_rndr()
{
    $options = get_option('stp_api_settings');
?>
    <textarea name='stp_api_settings[monk_desc_short]' rows="5" cols="65"><?php echo $options['monk_desc_short']; ?></textarea>
<?php
}

function long_desc_rndr()
{
    $options = get_option('stp_api_settings');
?>
    <textarea name='stp_api_settings[monk_desc_long]' rows="5" cols="65"><?php echo $options['monk_desc_long']; ?></textarea>
<?php
}

/* Social Links */
function link_yt_rndr()
{
    $options = get_option('stp_api_settings');
?>
    <input name='stp_api_settings[yt_link]' value="<?php echo $options['yt_link']; ?>" />
<?php
}
function link_tg_rndr()
{
    $options = get_option('stp_api_settings');
?>
    <input name='stp_api_settings[tg_link]' value="<?php echo $options['tg_link']; ?>" />
<?php
}
function link_fb_rndr()
{
    $options = get_option('stp_api_settings');
?>
    <input name='stp_api_settings[fb_link]' value="<?php echo $options['fb_link']; ?>" />
<?php
}
function link_tw_rndr()
{
    $options = get_option('stp_api_settings');
?>
    <input name='stp_api_settings[tw_link]' value="<?php echo $options['tw_link']; ?>" />
<?php
}
/* End Social Links */


function stp_api_options_page()
{
?>
    <form action='options.php' method='post'>

        <h2>PSCMonk Theme Settings</h2>

        <?php
        settings_fields('stpPlugin');
        do_settings_sections('stpPlugin');
        submit_button();
        ?>

    </form>
<?php
}
