<div class="wrap">
    <h1>hello word</h1>
    <form method="post" action="options.php">
        <?php settings_fields('duplicate_post_general') ?>
        <?php do_settings_sections('duplicate_post') ?>
        <?php submit_button() ?>
    </form>
</div>
