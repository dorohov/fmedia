<?

//$__block_class = 'text-page';
//$__block_prefix = '_tp__';

$fm_station = intval($this->getMeta($this->post['id'], 'fm_station'));

if($fm_station > 0) {
	$fm_station_img = $this->Imgs->postImg($fm_station, 'full');
}

?>

<div class="content-block news-item-page " role="main">
	<div class="container content-container">
		<div class="row _nip__row">
			<div class="cols _nip__cols cols-6">
				<div class="news__date _nip__news-date"><?=get_the_date('d F Y', $this->post['id']);?></div>
				<h1 class="news__heading _nip__news-heading"><?=t($this->post['id']);?></h1>
				<div class="text-block _nip__text-block">
					<?=c($this->post['id']);?>
				</div>
			</div>	
			<div class="cols _nip__cols cols-6">
				<a href="<?=$this->Imgs->postImg($this->post['id'], 'full');?>" data-fancybox="gallery-news" class="news__preview">
					<img src="<?=$this->Imgs->postImg($this->post['id'], 'full');?>" alt="">
					<span class="news__preview-line _nip__news-preview-line">
						<svg class="icon-svg icon-line-top" role="img">
							<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#line-top"></use>
						</svg>
					</span>
					
					<?
					if($fm_station_img != '') {
					?>
					<div class="news__preview-wave _nip__news-preview-wave"><img src="<?=$fm_station_img;?>" alt=""></div>
					<?
					}
					?>
					
				</a>
			</div>		
		</div>
		<div class="_nip__btn-block">
			<a href="javascript:history.back();" class="btn-site btn-line btn-news-back">
				Вернуться назад
				<span class="top-line"></span>
				<span class="bottom-line"></span>
			</a>
		</div>
		
	</div>
</div>