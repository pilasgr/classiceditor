// Απενεργοποίηση του Gutenberg και ενεργοποίηση του Classic Editor
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('replace_editor', 'classic_editor_init');

function classic_editor_init() {
    return array(
        'default_editor' => 'classic',
    );
}
