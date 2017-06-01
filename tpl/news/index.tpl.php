<?

//$__block_class = 'text-page';
//$__block_prefix = '_tp__';

if($this->post['id'] == 166) {
	$news_cat = 'belgorod';
} else {
	$news_cat = 'orel';
}

$posts = $this->getItems(array(
	'post_type' => 'post',
	'posts_per_page' => -1,
	'orderby' => 'date',
	'order'   => 'DESC',
	
	//'post_parent' => 0,
	'tax_query' => array(array(
		'taxonomy' => 'category',
		'field' => 'slug',
		'terms' => array($news_cat),
	)),
	
));
//foreach($posts as $p) {
//	echo "<a href=\"" . l($p->ID) . "\" >{$p->post_title}</a>";
//}

?>

<div class="content-block news-page" role="main">
	<div class="container content-container">
		
		<?
		$this->tpl('_/heading', array(
			'text' => t($this->post['id']),
			'header_prefix' => 'page-header__',
			'block_prefix' => '_np__',
		));
		?>
		
		<div class="row _np__row">
		
		<?
		if(count($posts)) {
			foreach($posts as $p) {
				
				$link = l($p->ID);
				$date = get_the_date('d F Y', $p->ID);
				$img_sm = $this->Imgs->postImg($p->ID, '525x307');
				$title = t($p->ID);
				$preview = get_the_excerpt($p->ID);
				
				$fm_station = $this->getMeta($p->ID, 'fm_station');
				
				if(count($fm_station)) {
					
					$fm_station = intval($fm_station[0]);
					
					$fm_station_img = $this->Imgs->postImg($fm_station, 'full');
					
				}
				
		?>
			
			<div class="cols _np__cols cols-4">
				
				<article class="news-item right">
					<div class="row news__row">
						<div class="cols news__left-cols _np__news-left-cols">
							<a href="<?=$link;?>" class="news__preview">
								<img src="<?=$img_sm;?>" alt="">
								<span class="news__preview-line _np__news-preview-line">
									<svg class="icon-svg icon-line-top" role="img">
										<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#line-top"></use>
									</svg>
								</span>
								
								<?
								if($fm_station_img != '') {
								?>
								<div class="news__preview-wave _np__news-preview-wave"><img src="<?=$fm_station_img;?>" alt=""></div>
								<?
								}
								?>
								
							</a>
						</div>
						<div class="cols news__right-cols _np__news-right-cols">
							<div class="news__inner _np__news-inner">
								<div class="news__date _np__news-date"><?=$date;?></div>
								<h4 class="news__heading _np__news-heading"><a href="<?=$link;?>"><?=$title;?></a></h4>
								<div class="news__note _np__news-note"><?=$preview;?></div>
								<div class="row news__row-inner _np__news-row-inner">
									<div class="cols news__cols-link _np__news-cols-link">
										<a href="<?=$link;?>" class="news__next">
											читать далее
											<span>
												<svg class="icon-svg icon-arrows-next" role="img">
													<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#arrows-next"></use>
												</svg>
											</span>
										</a>
									</div>
									
									<?
									if($fm_station_img != '') {
									?>
									<div class="cols news__cols-wave _np__news-cols-wave">
										<img src="<?=$fm_station_img;?>" alt="">
									</div>
									<?
									}
									?>
									
								</div>
								
							</div>
						</div>
					</div>
				</article> 
				
			</div>
			
		<?
			}
		}
		?>
		
		</div>
		
	</div>
</div>