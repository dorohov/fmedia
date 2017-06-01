<?

$__parent = getParents($this->post['id']);

$contact__inst = getContact('inst', $__parent);
$contact__adr = getContact('adr', $__parent);
$contact__email = getContact('email', $__parent);
$contact__phone1 = getContact('phone1', $__parent);
$contact__phone2 = getContact('phone2', $__parent);
$contact__phone3 = getContact('phone3', $__parent);

?>

<div class="<?=$param["class"];?>">
	<div class="container <?=$param["prefix_block"];?>container">
		<div class="<?=$param["prefix_block"];?>panel">
			<div class="page-header-block <?=$param["prefix_block"];?>header-block">
				<h1 class="page-header__heading">Контакты</h1>		
			</div>
			<div class="<?=$param["prefix_block"];?>text">
				<?=c($this->post['id']);?>
			</div>
			<div class="row <?=$param["prefix_block"];?>row">
				<div class="cols <?=$param["prefix_block"];?>cols">
					<div class="<?=$param["prefix_block"];?>item">
						<div class="<?=$param["prefix_block"];?>item-icon tel">
							<svg class="icon-svg icon-tel" role="img">
								<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#tel"></use>
							</svg>
						</div>
						<div><a href="tel:<?=phone($contact__phone1);?>" class="<?=$param["prefix_block"];?>phone"><?=$contact__phone1;?></a></div>
						<? if ($contact__phone2 != '') {?>
						<div><a href="tel:<?=phone($contact__phone2);?>" class="<?=$param["prefix_block"];?>phone"><?=$contact__phone2;?></a></div>
						<?}?>
						<? if ($contact__phone3 != '') {?>
						<div><a href="tel:<?=phone($contact__phone3);?>" class="<?=$param["prefix_block"];?>phone"><?=$contact__phone3;?></a></div>
						<?}?>
					</div>
				</div> 
				<? if ($contact__adr != '') {?>
				<div class="cols <?=$param["prefix_block"];?>cols">
					<div class="<?=$param["prefix_block"];?>item ">
						<div class="<?=$param["prefix_block"];?>item-icon address">						
							<svg class="icon-svg icon-address" role="img">
								<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#address"></use>
							</svg>
						</div>
						<?=$contact__adr;?>
					</div>
				</div>
				<?}?>
				<? if ($contact__email != '') {?>
				<div class="cols <?=$param["prefix_block"];?>cols">
					<div class="<?=$param["prefix_block"];?>item">
						<div class="<?=$param["prefix_block"];?>item-icon">		
							<svg class="icon-svg icon-mailto" role="img">
								<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#mailto"></use>
							</svg>
						</div>
						<a href="mailto:<?=$contact__email;?>" class="<?=$param["prefix_block"];?>mailto"><?=$contact__email;?></a>
					</div>
				</div>
				<?}?>
			</div>
			<?if($this->post['id'] == 6 ) {
				/*
					сюда выводим логотипы и ссылки на радиостанции соответствующего города.
				*/				
					$prefix_wave="wave__";
					$prefix_block="_cnp__";
				?>
				<div class="<?=$param["prefix_wave"];?>block <?=$param["prefix_block"];?>wave">
					<div class="<?=$param["prefix_wave"];?>row <?=$param["prefix_block"];?>row-wave row">
						<div class="<?=$param["prefix_wave"];?>cols <?=$param["prefix_block"];?>cols-wave cols">
							<a href="<?/*ссылка*/?>">
								<img src="<?/*уменьшенная копия логотипа со страницы радиостанции*/?>" alt="">
							</a>
						</div>
					</div>
				</div>
			<?}?>
		</div>		
	</div>
	<div id="map-google-office" class="<?=$param["prefix_block"];?>map"></div>
</div>