<?php
/**
 * Elgg bookmarks widget
 *
 * @package Bookmarks
 */
$widget = $vars['entity'];

// now we can get our content
$options = eligo_get_display_entities_options($widget);
$content = elgg_list_entities($options);


$content = elgg_list_entities($options);

echo $content;

if ($content) {
	$blog_url = "blog/owner/" . elgg_get_page_owner_entity()->username;
	$more_link = elgg_view('output/url', array(
		'href' => $blog_url,
		'text' => elgg_echo('blog:moreblogs'),
		'is_trusted' => true,
	));
	echo "<span class=\"elgg-widget-more\">$more_link</span>";
} else {
	echo elgg_echo('blog:noblogs');
}
