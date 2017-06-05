<?

$ad_page = get_field('ad_page', getParents($this->post['id']));

//var_dump($ad_page );

$radios = $this->getItems(array(
	'post_type' => 'page',
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order'   => 'ASC',
	'post_parent' => $ad_page->ID,
));

?>

<div class="content-block about-page" role="main">
	<div class="container content-container">
		
		<?
		$this->tpl('_/heading', array(
			'text' => t($this->post['id']),
			'header_prefix' => 'page-header__',
			'block_prefix' => '_ap__',
		));
		?>
		
		<div class="row _ap__row">
			<div class="cols _ap__cols cols-6">
				<a class="fancybox-preview img" href="<?=$this->path('img');?>/temp/about-item-lg.jpg" data-fancybox="about-gallery">
					<img src="<?=$this->path('img');?>/temp/about-item.jpg" alt="">
				</a>
			</div>
			<div class="cols _ap__cols cols-6">
				<div class="_ap__note">
					<div class="_ap__title">Страница находится в&nbsp;разработке</div>
				</div>
				
				<div class="wave__block _ap__wave">
					<div class="wave__row _ap__row-wave row">
						
						<?
						if(count($radios)){
							
							foreach($radios as $p) {
								
								$img_sm = $this->Imgs->postImg($p->ID, '257x125');
								
							?>
						
						<div class="wave__cols _ap__cols-wave cols">
							<a href="<?=l($p->ID);?>" class="wave__item">
								<span class="wave__logo-before"><img src="<?=$img_sm;?>"  alt=""></span>
								<span class="wave__logo-after"><img src="<?=$img_sm;?>" alt=""></span>
							</a>
						</div>
							
							<?
							}
						}
						?>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>