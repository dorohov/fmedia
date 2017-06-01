<?
	$class_footer = 'footer-site';
	$prefix_footer = 'footer__';
	
	$__parent = getParents($this->post['id']);
	
	if(get_post_type($this->post['id']) == 'post' || $this->post['id'] == 63 || is_404()) {
		$__parent = 1;
	}
	
	$contact__inst = getContact('inst', $__parent);
	$contact__phone1 = getContact('phone1', $__parent);
	$contact__adr = getContact('adr', $__parent);
	$contact__email = getContact('email', $__parent);
	
	/*
		id = 1 "Главная",
		id = 2 "Реклама",
		id = 3 "О нас",
		id = 4 "Новости",
		id = 5 "Спецпроекты",
		id = 6 "Контакты",
		id = 7 "Новое Радио Орёл",
		id = 8 "Европа Плюс Орёл",
		id = 9 "Радио 7 Орёл",
		id = 10 "Спорт FM Орёл",
		id = 11 "Милицейская волна Орёл",
		id = 12 "Новое радио Белгород",
		id = 13 "Персональные данные"
	*/
?>
<footer class="<?=$class_footer;?>">	
	<div class="container <?=$prefix_footer;?>container">
		<div class="row <?=$prefix_footer;?>row">			
			<div class="cols <?=$prefix_footer;?>copyright-cols">
				<a href="<?=l(1);?>">
					<span class="_logo"><svg class="icon-svg icon-logotip" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#logotip"></use></svg></span>
				</a>
			</div>
			<div class="cols <?=$prefix_footer;?>contacts-cols">
				<div class="row <?=$prefix_footer;?>contacts-row">
					<?if ($contact__phone1 != '') {?>
					<div class="cols">						
						<div class="<?=$prefix_block;?>contacts-item">
							<a href="tel:<?=phone($contact__phone1);?>" class="<?=$prefix_block;?>phone"><?=$contact__phone1;?></a>
						</div>
					</div>
					<?}?>
					<?if ($contact__adr != '') {?>
					<div class="cols">						
						<div class="<?=$prefix_footer;?>contacts-item">
							<?=$contact__adr;?>
						</div>
					</div>
					<?}?>
					<?if ($contact__email != '') {?>
					<div class="cols">
						<div class="<?=$prefix_footer;?>contacts-item">
							<a href="mailto:<?=$contact__email;?>"><?=$contact__email;?></a>
						</div>						
					</div>
					<?}?>
				</div>	
			</div>
			<div class="cols <?=$prefix_footer;?>dorohovdesign-cols">
				<div class="row <?=$prefix_footer;?>dorohovdesign__row">
					<div class="cols">
						<div>Создание сайта</div>
					</div>
					<div class="cols">
						<div class="<?=$prefix_footer;?>dorohovdesign__logo">
							<a href="http://www.dorohovdesign.ru/" target="_blank">
								<svg class="icon-svg icon-dorohovdesign" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#dorohovdesign"></use></svg>
							</a>
						</div>	
					</div>
				</div>				 
			</div>	
		</div>
	</div>
</footer>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="<?=$this->path('js');?>/jquery-3.2.1.min.js" ></script>
<script src="<?=$this->path('js');?>/document-ready.js" ></script>
<script src="<?=$this->path('js');?>/document-ready-azbn.js" ></script>

<script src="<?=$this->path('js');?>/bootstrap.min.js" ></script>
<script src="<?=$this->path('js');?>/device.min.js" ></script>

<script src="<?=$this->path('js');?>/svg4everybody.min.js" ></script>
<script>svg4everybody();</script>

<?
	//Для id = 1 "Главная"
	if($this->getMeta($this->post['id'], 'post_function') == 'mainpage') {
	//if(in_array($this->post['id'], array(1))) {
		$this->tpl('_/script/googleMap', array());
		$this->tpl('_/script/owl', array());
	}
	if($this->getMeta($this->post['id'], 'post_function') == 'ad') {
		$this->tpl('_/script/validationEngine', array());
		$this->tpl(
			'_/modal/reviews', 
			array(
				"class_modals"=>"modal-reviews",
				"prefix_modals" => "modal-reviews__",
				"heading_modals" => "Выберите город",
			)
		);
	}
	//Для id = 3 "О нас"
	if($this->getMeta($this->post['id'], 'post_function') == 'about') {
		$this->tpl('_/script/fancybox3', array());
	}
	//Для id = 6 "Контакты"
	if($this->getMeta($this->post['id'], 'post_function') == 'contacts') {
		$this->tpl('_/script/googleMap', array());
	}
	if($this->getMeta($this->post['id'], 'post_function') == 'text') {
		$this->tpl('_/script/validationEngine', array());
	}
	//Для страниц записи новости,
	if(get_post_type($this->post['id']) == 'post') {
		$this->tpl('_/script/fancybox3', array());
	}
	$this->tpl('_/script/metrics', array()); 
?> 

<? wp_footer(); ?>
</body>
</html>