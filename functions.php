<?php
add_action('tha_head_top', 'rsc_head_top');
function rsc_head_top() {
  echo '<!-- HOOK: tha_head_top -->';
}
add_action('tha_head_bottom', 'rsc_head_bottom');
function rsc_head_bottom() {
  echo '<!-- HOOK: tha_head_bottom -->';
}

add_action('tha_header_before', 'rsc_header_before');
function rsc_header_before() {
  rsc_hook_html('tha_header_before');
}
add_action('tha_header_after', 'rsc_header_after');
function rsc_header_after() {
  rsc_hook_html('tha_header_after');
}
add_action('tha_header_top', 'rsc_header_top');
function rsc_header_top() {
  rsc_hook_html('tha_header_top');
}
add_action('tha_header_bottom', 'rsc_header_bottom');
function rsc_header_bottom() {
  rsc_hook_html('tha_header_bottom');
}

add_action('tha_content_before', 'rsc_content_before');
function rsc_content_before() {
  rsc_hook_html('tha_content_before');
}
add_action('tha_content_after', 'rsc_content_after');
function rsc_content_after() {
  rsc_hook_html('tha_content_after');
}
add_action('tha_content_top', 'rsc_content_top');
function rsc_content_top() {
  rsc_hook_html('tha_content_top');
  ?>
  <div class="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Suggestion!</strong> Check the source of &lt;head&gt; to see what the script and style SRCs are like.
  </div>
  <?php
}
add_action('tha_content_bottom', 'rsc_content_bottom');
function rsc_content_bottom() {
  rsc_hook_html('tha_content_bottom');
}

add_action('tha_entry_before', 'rsc_entry_before');
function rsc_entry_before() {
  rsc_hook_html('tha_entry_before');
}
add_action('tha_entry_after', 'rsc_entry_after');
function rsc_entry_after() {
  rsc_hook_html('tha_entry_after');
}
add_action('tha_entry_top', 'rsc_entry_top');
function rsc_entry_top() {
  rsc_hook_html('tha_entry_top');
}
add_action('tha_entry_bottom', 'rsc_entry_bottom');
function rsc_entry_bottom() {
  rsc_hook_html('tha_entry_bottom');
}

add_action('tha_comments_before', 'rsc_comments_before');
function rsc_comments_before() {
  rsc_hook_html('tha_comments_before');
}
add_action('tha_comments_after', 'rsc_comments_after');
function rsc_comments_after() {
  rsc_hook_html('tha_comments_after');
}

add_action('tha_sidebars_before', 'rsc_sidebars_before');
function rsc_sidebars_before() {
  rsc_hook_html('tha_sidebars_before');
}
add_action('tha_sidebars_after', 'rsc_sidebars_after');
function rsc_sidebars_after() {
  rsc_hook_html('tha_sidebars_after');
}
add_action('tha_sidebars_top', 'rsc_sidebars_top');
function rsc_sidebars_top() {
  rsc_hook_html('tha_sidebars_top');
}
add_action('tha_sidebars_bottom', 'rsc_sidebars_bottom');
function rsc_sidebars_bottom() {
  rsc_hook_html('tha_sidebars_bottom');
}

add_action('tha_footer_before', 'rsc_footer_before');
function rsc_footer_before() {
  rsc_hook_html('tha_footer_before');
}
add_action('tha_footer_after', 'rsc_footer_after');
function rsc_footer_after() {
  rsc_hook_html('tha_footer_after');
}
add_action('tha_footer_top', 'rsc_footer_top');
function rsc_footer_top() {
  rsc_hook_html('tha_footer_top');
}
add_action('tha_footer_bottom', 'rsc_footer_bottom');
function rsc_footer_bottom() {
  rsc_hook_html('tha_footer_bottom');
}

function rsc_hook_html($content) {
  echo '<pre class="hook ' . $content . '">' . $content . '</pre>';
}

add_action('init', 'rsc_init');
function rsc_init() {
  remove_theme_support('bootstrap-top-navbar');
}

add_action('wp_enqueue_scripts', 'rsc_enqueue_scripts');
function rsc_enqueue_scripts() {
  wp_enqueue_script('jquery');
}

add_action('wp_head', 'rsc_head');
function rsc_head() { ?>
<script type="text/javascript">
  $(document).ready(function() {
    $('.hook').hide();
    
    $('.menu-showhide-hooks a').click(function(e) {
      $('.hook').toggle();
      $(this).popover('hide');
      e.preventDefault();
    });
    
    $('.menu-showhide-hooks a').popover({
      "title":"Important!",
      "content":"Click this to show indicators.",
      "placement":"right",
      "trigger":"manual"
    }).popover('show');
  });
</script>
<?php }