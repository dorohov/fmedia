<?

$audio = $this->getItems(array(
	'post_type' => 'azbnelement',
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order'   => 'ASC',
	//'post_parent' => 0,
	'tax_query' => array(array(
		'taxonomy' => 'azbnelement_taxonomies',
		'field' => 'slug',
		'terms' => array('orel-audio'),
	)),
));

$video = $this->getItems(array(
	'post_type' => 'azbnelement',
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order'   => 'ASC',
	//'post_parent' => 0,
	'tax_query' => array(array(
		'taxonomy' => 'azbnelement_taxonomies',
		'field' => 'slug',
		'terms' => array('orel-video'),
	)),
));

?>


<div class="content-block ad-av-page" role="main">
	<div class="container content-container">
		
		<?
		if(count($audio)) {
		?>
		
		<div class="_adavp__list">
			
			<?
			$this->tpl('_/heading', array(
				'text' => 'Аудио продакшн',
				'header_prefix' => 'page-header__',
				'block_prefix' => '_adavp__',
			));
			?>
			
			<div class="_adavp__row row">
				
				<?
				foreach($audio as $p) {
				?>
				
				<div class="_adavp__cols cols cols-3">
					<div class="audio__block">
						<div class="audio__item">
							<div class="audio__preview">
								<img src="<?=$this->Imgs->postImg($p->ID, 'full');?>" alt="">
							</div>
							<div class="audio__track">
								<audio controls preload="none">
									<source src="<?=get_field('mediafile', $p->ID);?>" type="audio/mpeg">
								</audio>
							</div>
						</div>	
						<h4 class="audio__heading"><?=t($p->ID);?></h4>
						<div class="audio__note"><?=c($p->ID);?></div>
					</div>
				</div>
				
				<?
				}
				?>
				
			</div>
		</div>
		
		<?
		}
		?>
		
		
		<?
		if(count($video)) {
		?>
		
		<div class="_adavp__list">
			
			<?
			$this->tpl('_/heading', array(
				'text' => 'Видео продакшн',
				'header_prefix' => 'page-header__',
				'block_prefix' => '_adavp__',
			));
			?>
			
			<div class="_adavp__row row">
				
				<?
				foreach($audio as $p) {
				?>
				
				<div class="_adavp__cols cols cols-6">
					<div class="video__block">
						<div class="video__item">
							<video preload="none" controls="controls" poster="<?=$this->Imgs->postImg($p->ID, 'full');?>">
								<source src="<?=get_field('mediafile', $p->ID);?>" type="video/mp4"> 
							</video>
						</div>	
						<h4 class="video__heading"><?=t($p->ID);?></h4>
						<div class="video__note"><?=c($p->ID);?></div>
					</div>
				</div>
				
				<?
				}
				?>
				
			</div>
		</div>
		
		<?
		}
		?>
		
		<?
		$ad_page = get_field('ad_page', getParents($this->post['id']));
		?>
		<div class="_adavp__btn-block">
			<a href="<?=l($ad_page->ID);?>" class="btn-site btn-line btn-ad-item">
				Другие услуги
				<span class="top-line"></span>
				<span class="bottom-line"></span>
			</a>
		</div>
	</div>
</div>