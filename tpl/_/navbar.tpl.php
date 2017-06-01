<?
	$class_navbar = 'navbar-site ';
	
	//if($this->getMeta($this->post['id'], 'post_function') == 'mainpage') {
	//	$class_navbar = $class_navbar . 'scroll';
	//}
	
	$prefix_navbar = 'navbar__';

	$class_modals = 'modal-location';
	$prefix_modals = 'modal-location__';
	
	$__parent = getParents($this->post['id']);
	
	if(get_post_type($this->post['id']) == 'post' || $this->post['id'] == 63 || is_404()) {
		$__parent = 1;
	}
	
	$contact__inst = getContact('inst', $__parent);
	$contact__phone1 = getContact('phone1', $__parent);
	
	if($__parent == 1) {
		$menu_id = 2;
	} else {
		$menu_id = 4;
	}
	
?>

 <nav class="navbar <?=$class_navbar;?>">
 	<div class="container <?=$prefix_navbar;?>container">
 		<div class="row <?=$prefix_navbar;?>row">
 			<div class="cols <?=$prefix_navbar;?>col-header"> 				
				<div class="<?=$prefix_navbar;?>header">
					<div class="row <?=$prefix_navbar;?>row-header ">
						<div class="cols <?=$prefix_navbar;?>col-hamburger">
							<div class="<?=$prefix_navbar;?>hamburger">
								<button class="<?=$prefix_navbar;?>hamburger-btn hamburger hamburger--arrow" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false" data-toggle-nav=".navbar-site" data-body="html" data-collapse-nav=".navbar__collapse">
									<span class="hamburger-box">
										<span class="hamburger-inner"></span>
									</span>
								</button>
							</div>
						</div>
						<div class="cols <?=$prefix_navbar;?>col-brand">
							<a class="<?=$prefix_navbar;?>brand" href="/">
								<span class="_logo"><svg class="icon-svg icon-logotip" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#logotip"></use></svg></span>
							</a>
						</div>
					</div>
				</div>
 			</div>
 			<div class="cols <?=$prefix_navbar;?>col-collapse">
				<div class="<?=$prefix_navbar;?>collapse" >
					<div class="<?=$prefix_navbar;?>collapse-inner">
						<div class="row <?=$prefix_navbar;?>collapse-row" >
							<div class="cols <?=$prefix_navbar;?>nav-cols" >
								<ul class="<?=$prefix_navbar;?>nav">
									
									<?
									$menu_items = $this->getMenu($menu_id);
									//__theme_ed($menu_items);
									if(count($menu_items)) {
										foreach($menu_items as $_item) {
											
											//if(!is_front_page()) {}
											if(($__parent != $this->post['id']) || ($__parent == $this->post['id'] && $this->post['id'] != $_item->object_id)) {
									?>
									<li class="<?=$prefix_navbar;?>nav-item <?if($this->post['id'] == $_item->object_id){?>is--active<?}?> ">
										<a href="<?=$_item->url;?>" class="<?=$prefix_navbar;?>nav-link">
											<?=$_item->title;?>
											<span class="<?=$prefix_navbar;?>nav-line"></span>
										</a> 
									</li>
									<?
											}
										}
									}
									?>
									
								</ul>
							</div>
							<div class="cols <?=$prefix_navbar;?>tel-cols" >
								<a href="tel:<?=phone($contact__phone1);?>" class="<?=$prefix_navbar;?>tel"><?=$contact__phone1;?></a>
							</div>
							<? if($contact__inst != ''){?>
							<div class="cols <?=$prefix_navbar;?>soc-cols" >
								<a href="<?=$contact__inst;?>" class="<?=$prefix_navbar;?>soc" target="_blank">
									<svg class="icon-svg icon-inst" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#inst"></use></svg>
								</a>
							</div>
							<?}?>
							<div class="cols <?=$prefix_navbar;?>select-cols" >
								<button type="button" class="btn-site <?=$prefix_navbar;?>btn-select" data-toggle="modal" data-target="#modal-location">
									<span class="icon"><svg class="icon-svg icon-arrows-down" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#arrows-down"></use></svg></span>
									<?=t($__parent);?>
								</button>
							</div>
						</div>
					</div>
				</div>
 			</div>
 		</div>
 	</div>
</nav>

<div class="modal fade <?=$class_modals;?>" id="modal-location" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog <?=$prefix_modals;?>dialog">
		<div class="modal-body <?=$prefix_modals;?>body" >
			<button type="button" class="btn-site btn-close modal-close" data-dismiss="modal" aria-hidden="true">
				<svg class="icon-svg icon-cancel" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#cancel"></use></svg>
			</button>
			<div class="modal-content <?=$prefix_modals;?>content">
				<h3 class="modal-title <?=$prefix_modals;?>title">Выберите город</h3>
				<div class="modal-note <?=$prefix_modals;?>note">		
					<ul class="<?=$prefix_modals;?>list">
						
						<?
						$city_items = $this->getMenu(5);
						if(count($city_items)) {
							foreach($city_items as $_item) {
						?>
						
						<li class=" <?if($__parent == $_item->object_id || $this->post['id'] == $_item->object_id){?>is--active<?}?> " ><a href="<?=$_item->url;?>"><?=$_item->title;?></a></li>
						
						<?
							}
						}
						?>
						
					</ul>
				</div>
			</div> 
		</div>
	</div>
</div>