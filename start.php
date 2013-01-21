<?php

function au_blog_widget_init() {
  elgg_unregister_widget_type('blog');
  elgg_register_widget_type('blog', elgg_echo('blog'), elgg_echo('blog:widget:description'), 'profile,dashboard,index,groups', TRUE);
}

elgg_register_event_handler('init', 'system', 'au_blog_widget_init');