<?


?>

<div class="content-block ad-new-page" role="main">
	<div class="container content-container">
		<div class=" _adnp__inner wave__ad-inner">
			<div class="_adnp__logotip "><img src="<?=$this->path('img');?>/default/wave-107.8.png" alt=""></div>
			<div class="row _adnp__row wave__ad-row">
				<div class="cols _adnp__cols wave__ad-cols cols-6 _banner">
					<div class="_adnp__banner"><img src="<?=$this->path('img');?>/temp/banner-107.8.jpg" alt=""></div>
				</div>	
				<div class="cols _adnp__cols wave__ad-cols cols-6">
					<div class="_adnp__soc-block wave__ad-soc-block ">					
						
						<?
						$this->tpl('ad/social', array());
						?>
						
					</div>
					<div class="text-block _adnp__text-block wave__ad-text-block">
						<?=c($this->post['id']);?>
					</div>
					<p class="_adnp__ppt wave__ad-ppt"><a href="<?=get_field('pdf', $this->post['id']);?>" target="_blank">Посмотреть презентацию (pdf)</a></p>
				</div>
				<div class="cols _adnp__cols wave__ad-cols cols-6">
					<div class="text-block _adnp__text-block wave__ad-text-block"> 
						<?=get_field('contact_html', $this->post['id']);?>
					</div>
					
					
					
					
					<form action="#" class="form-site block _adnp__form wave__ad-form azbn-formsave-form"  >
						<h4 class="form__heading">Заказать рекламу<br> на Новом радио Орёл</h4>	
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
	<div class="_adnp__bg wave__ad-bg" style="background-image: url(<?=$this->path('img');?>/bg/bg-wave-107.8.png)"></div>
</div>