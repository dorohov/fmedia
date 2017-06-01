<?


$posts = $this->getItems(array(
	'post_type' => 'page',
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order'   => 'ASC',
	'post_parent' => $this->post['id'],
	
	//'tax_query' => array(array(
	//	'taxonomy' => 'project_taxonomies',
	//	'field' => 'slug',
	//	'terms' => array('residential'),
	//)),
	
));


?>


<div class="content-block ad-page" role="main">
	<div class="container content-container">
		
		<?
		$this->tpl('_/heading', array(
			'text' => t($this->post['id']),
			'header_prefix' => 'page-header__',
			'block_prefix' => '_adp__',
		));
		?>
		
		<div class="row _adp__row">
			<div class="cols _adp__cols">
				<div class="_adp__text-block text-block">
					<h2>Позвоните нам или оставьте заявку на заказ рекламы!</h2>
					<p>Мы предложим вам выгодные условия размещения рекламы<br> на наших радиостанциях.</p>
				</div>
				<div class="row _adp__row-form">				
					<div class="cols _adp__cols-form cols-5">				
						
						
						
						
						<form action="#" class="form-site block azbn-formsave-form"  >
							<h4 class="form__heading">Заказать рекламу</h4>	
							<div class="row form__row">
								<div class="cols form__cols">
									<div class="form__item">
										<input type="text" class="form__control form-control validate[required, custom[onlyLetterSp]]" id="f[name]" name="f[Имя]" placeholder="Ваше имя">
									</div>	
								</div>
								<div class="cols form__cols">
									<div class="form__item">
										<input type="tel" class="form__control form-control validate[required,custom[phone]]" id="f[tel]" name="f[Телефон]" placeholder="Ваш телефон"> 
									</div>	
								</div>
								<div class="cols form__cols">
									<div class="form__item">
										<input type="text" class="form__control form-control validate[required]" id="f[note]" name="f[Вопрос]" placeholder="Ваш комментарий"> 
									</div>	
								</div>
								<div class="cols form__cols full material-cols">
									<div class="material-switch form__item">
										<input class="material-switch__input validate[required]" id="f[processing]" name="f[processing]" type="checkbox" checked />
										<label for="f[processing]" class="material-switch__label">
											<span class="material-switch__before">
												<span class="material-switch__checkbox"></span>
											</span>
											<span class="material-switch__after"></span>
										</label>
										<label for="f[processing]" class="material-switch__text"> 
											Я согласен на обработку <a href="/agreement/">персональных данных</a>
										</label>
									</div>	
								</div>
								<div class="cols form__cols">
									<div class="form__btn-block">
										<button type="submit" class="btn-site btn-line btn-submit form__btn">
											Отправить заявку
											<span class="top-line"></span>
											<span class="bottom-line"></span>
										</button>
									</div>	 
								</div>		
							</div>	
							<div class="form__note azbn-formsave-form__result">Наш менеджер скоро свяжется с вами.</div>
						</form>


						
						
					</div>
					<div class="cols _adp__cols-form cols-7">
					
					<?
					if(count($posts)){
					?>
						
						<div class="wave__block _adp__wave">
							<div class="wave__row _adp__row-wave row">
							
					<?
						foreach($posts as $p) {
							
							$img_sm = $this->Imgs->postImg($p->ID, '257x125');
					?>
								<div class="wave__cols _adp__cols-wave cols">
									<a href="<?=l($p->ID);?>" class="wave__item">
										<span class="wave__logo-before"><img src="<?=$img_sm;?>"  alt=""></span>
										<span class="wave__logo-after"><img src="<?=$img_sm;?>" alt=""></span>
									</a>
								</div>
					<?
						}
					?>
							
							</div>
						</div>
						
					<?
					}
					?>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="_adp__bg" style="background-image: url(<?=get_field('bg_img', $this->post['id']);?>)"></div>
</div>


<?
$this->tpl('ad/other', array(
	
));
?>
