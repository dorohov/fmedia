<?


?>

<div class="content-block ad-sport-page" role="main">
	<div class="container content-container">
		<div class=" _adspp__inner wave__ad-inner">
			<div class="row _adspp__row wave__ad-row">
				<div class="cols _adspp__cols wave__ad-cols cols-5 _banner">
					<div class="_adspp__banner "><img src="<?=$this->path('img');?>/temp/banner-98.5.png" alt=""></div>
				</div>	
				<div class="cols _adspp__cols wave__ad-cols cols-7 _text">	
					<div class="_adspp__soc-block wave__ad-soc-block ">
						
						<?
						$this->tpl('ad/social', array());
						?>
						
					</div>	
					<div class="text-block _adspp__text-block wave__ad-text-block">
						<?=c($this->post['id']);?>
					</div>		
					<div class="text-block _adspp__text-block wave__ad-text-block"> 
						<?=get_field('contact_html', $this->post['id']);?>
						<p class="_adspp__ppt wave__ad-ppt"><a href="<?=get_field('pdf', $this->post['id']);?>" target="_blank">Посмотреть презентацию (pdf)</a></p>	
					</div>
				</div>
				<div class="cols _adspp__cols wave__ad-cols cols-4 _form">
					
					
					
					
					
					
					<form action="#" class="form-site block _adnp__form wave__ad-form azbn-formsave-form"  >
						<h4 class="form__heading">Заказать рекламу<br> на Спорт FM Орёл</h4>	
						<div class="row form__row">
							<div class="cols form__cols">
								<div class="form__item">
									<input type="text" class="form__control form-control validate[required, custom[onlyLetterSp]]" id="f[name]" name="f[Имя]" placeholder="Ваше имя">
								</div>	
							</div>
							<div class="cols form__cols">
								<div class="form__item">
									<input type="email" class="form__control form-control validate[required,custom[email]]" id="f[email]" name="f[email]" placeholder="Ваш E-mail"> 
								</div>	
							</div>
							<div class="cols form__cols">
								<div class="form__item">
									<input type="tel" class="form__control form-control validate[required,custom[phone]]" id="f[tel]" name="f[Телефон]" placeholder="Ваш номер телефона"> 
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
			</div>
		</div>
	</div>
	<div class="_adspp__bg wave__ad-bg" style="background-image: url(<?=$this->path('img');?>/bg/bg-wave-98.5.png)" data-text="Будь в тонусе вместе с нами слушай радио «Спорт&nbsp;FM»"></div>
</div>