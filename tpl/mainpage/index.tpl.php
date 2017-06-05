<?

?>
<div class="header-index-block">
	<div class="_hib__inner">
		<div class="container _hib__container">
			<h1 class="_hib__heading">
				Реклама<br> на радио
			</h1>	
			<div id="carousel-header" class="carousel slide carousel-fade _hib__carousel" data-ride="carousel">
				<?
				
				$ad_page = get_field('ad_page', $this->post['id']);
				
				//var_dump($ad_page );
				
				$radios = $this->getItems(array(
					'post_type' => 'page',
					'posts_per_page' => -1,
					'orderby' => 'menu_order',
					'order'   => 'ASC',
					'post_parent' => $ad_page->ID,
				));
				
				if(count($radios)){
				?>
				<ol class="carousel-indicators _hib__carousel-indicators">
				<?
					$i = 0;
					
					foreach($radios as $p) {
				?>
					<li 
						data-target="#carousel-header" 
						data-slide-to="<?=$i;?>" 
						data-wave="<?=$this->getMeta($p->ID, 'wave');?>"
						class="<?if($i == 0) { ?>active<? } ?>"
					>
						<span><?=t($p->ID);?></span>
					</li>
				
				<?
						$i++;
					}
				?>
				</ol>
				<?
				}
				?>
				
				<div class="carousel-inner _hib__carousel-inner">
					<?
					
					if(count($radios)){
						
						$i = 0;
						
						foreach($radios as $p) {
					?>
					
					<div class="item <?if($i == 0) { ?>active<? } ?> _hib__carousel-item">
						<a href="<?=l($p->ID);?>"><img src="<?=get_field('mainpage-header__logo', $p->ID);?>" alt=""></a>
					</div>
					
					<?
							$i++;
						}
						
					}
					
					?>
					
				</div>
			</div>
		</div>
	</div>
	<div class="_hib__bg" style="background-image: url(<?=get_field('bg_img', $this->post['id']);?>);"></div> 	
</div>


<?
$client_logos = get_field('client_logos', $this->post['id']);
if(count($client_logos)) {
?>

<div class="clients-index-block">
	<div class="_cib__inner">
		<div class="container _cib__container">
			<h2 class="_cib__heading index-header-block">Нам доверяют</h2>
			<div class="_cib__owl">
				
				<?
				foreach($client_logos as $p) {
				?>
				<div class="_cib__owl-item">
					<img src="<?=$this->Imgs->rawImg($p, 'full');?>" alt="" />
				</div>
				<?
				}
				?>
				
			</div>	
		</div>
	</div>
</div>

<?
}
?>



<?
$news = $this->getItems(array(
	'post_type' => 'post',
	'posts_per_page' => 2,
	'orderby' => 'date',
	'order'   => 'DESC',
));

if(count($news)) {
?>

<div class="news-index-block">
	<div class="container _nib__container">
		<h2 class="_nib__heading index-header-block">Новости</h2>
		<div class="_nib__inner">
			<?
				/*
					сюда подгружаем 2 последние новости.
					Выводим:
						1) Дату
						2) Заголовок
						3) Короткое описание
						4) Превью
						5) Ссылку
						6) Логотип радиостанции, к которому относиться новость (логотипы должны автоматом создаваться из одного логотипа, который заливается на страницу конкретной радиостанции)
				*/
				/*
					для первой новости меняем значение $news_class
					$news_class = "news-item right";
					для второй новости
					$news_class = "news-item left";
				*/
				//$news_class = 'news-item';
				$news_block = 'news__';
				$prefix_block = '_nih__';
				/*
					для первой новости меняем значение $news_preview_line
					$news_preview_line="line-top";
					для второй новости
					$news_preview_line="line-bottom";
				*/
				$news_preview_line="line-top";

				/* этот шаблон можно использовать на странице новости с параметрами

				$news_class = "news-item right"
				$news_block = "news__"
				$prefix_block = "_np__"
				$news_preview_line = "line-top"

				*/
			
			foreach($news as $_i => $p) {
				
				if($_i % 2) {
					$news_preview_line = 'line-bottom';
					$news_class = 'news-item left';
				} else {
					$news_preview_line = 'line-top';
					$news_class = 'news-item right';
				}
				
				$link = l($p->ID);
				$date = get_the_date('d F Y', $p->ID);
				$img_sm = $this->Imgs->postImg($p->ID, 'full');
				$title = t($p->ID);
				$preview = get_the_excerpt($p->ID);
				
				$fm_station = intval($this->getMeta($p->ID, 'fm_station'));
				
				if($fm_station > 0) {
					$fm_station_img = $this->Imgs->postImg($fm_station, 'full');
				}
				
			?>
			<article class="<?=$news_class;?>">
				<div class="row <?=$news_block;?>row">
					<div class="cols <?=$news_block;?>left-cols <?=$prefix_block;?>news-left-cols">
						<a href="<?=$link;?>" class="<?=$news_block;?>preview">
							<img src="<?=$img_sm;?>" alt="">
							<span class="<?=$news_block;?>preview-line <?=$prefix_block;?>news-preview-line">
								<svg class="icon-svg icon-<?=$news_preview_line;?>" role="img">
									<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#<?=$news_preview_line;?>"></use>
								</svg>
							</span>
							<div class="<?=$news_block;?>preview-wave <?=$prefix_block;?>news-preview-wave"><img src="<?=$fm_station_img;?>" alt=""></div>
						</a>
					</div>
					<div class="cols <?=$news_block;?>right-cols <?=$prefix_block;?>news-right-cols">
						<div class="<?=$news_block;?>inner <?=$prefix_block;?>news-inner">
							<div class="<?=$news_block;?>date <?=$prefix_block;?>news-date"><?=$date;?></div>
							<h4 class="<?=$news_block;?>heading <?=$prefix_block;?>news-heading"><a href="<?=$link;?>"><?=$title;?></a></h4>
							<div class="<?=$news_block;?>note <?=$prefix_block;?>news-note"><?=$preview;?></div>
							<div class="row <?=$news_block;?>row-inner <?=$prefix_block;?>news-row-inner">
								<div class="cols <?=$news_block;?>cols-link <?=$prefix_block;?>news-cols-link">
									<a href="<?=$link;?>" class="<?=$news_block;?>next">
										читать далее
										<span>
										<svg class="icon-svg icon-arrows-next" role="img">
											<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#arrows-next"></use>
										</svg></span>
									</a>
								</div>
								<div class="cols <?=$news_block;?>cols-wave <?=$prefix_block;?>news-cols-wave">
									<img src="<?=$fm_station_img;?>" alt="">
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</article> 
			
			<?
			
			}
			
			?>
			
		</div>
		<div class="_nib__btn-block">
			<a href="<?=l(4);?>" class="btn-site btn-line btn-news-all">
				Все новости
				<span class="top-line"></span>
				<span class="bottom-line"></span>
			</a>
		</div>
	</div>
</div>

<?
}
?>



<?	
	$this->tpl(
		'contacts/block', 
		array(
			"class"=>"contacts-block-index",
			"prefix_block" => "_cnp__",
		)
	);
?>