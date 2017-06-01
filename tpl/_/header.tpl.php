<!DOCTYPE html>
<html <?php language_attributes();?> > 
<head>
<?
$this->tpl('_/head', array());
wp_head();
?>
</head>
<body <?php body_class(''); ?>
	data-azbn7='{"php_process_session":"","path":{"root":""}}'
	data-azbn7__mdl__api='{"request_method":"POST","access_as":"profile","key":""}'
	data-azbn7__mdl__map__coord='<?=getContact('coord' , getParents($this->post['id']));?>'
	>

<?
$this->tpl('_/navbar');
?>
<?
/*
if(is_front_page()) {
	
}
?>

<div>
<?
$posts = $this->getItems(array(
	'post_type' => 'page',
	'posts_per_page' => -1,
	'orderby' => 'menu_order title date',
	'order'   => 'ASC',
	
	//'post_parent' => 0,
	//'tax_query' => array(array(
	//	'taxonomy' => 'project_taxonomies',
	//	'field' => 'slug',
	//	'terms' => array('residential'),
	//)),
	
));
foreach($posts as $p) {
	echo "<a href=\"" . l($p->ID) . "\" >{$p->post_title}</a>";
}
?>
</div>
<?
*/
?>