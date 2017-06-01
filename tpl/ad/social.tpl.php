<?

$vk = $this->getMeta($this->post['id'], 'vk');
$fb = $this->getMeta($this->post['id'], 'fb');
$ok = $this->getMeta($this->post['id'], 'ok');
$tw = $this->getMeta($this->post['id'], 'twi');
$inst = $this->getMeta($this->post['id'], 'inst');

?>

<div class="social-block social-wave">
	<div class="row social__row _adspp__social-row">
		
		<?
		if($vk != '') {
		?>
		<div class="cols social__cols _adspp__social-cols">
			
			<a href="<?=$vk;?>" target="_blank" class="social__item _vk">
				<svg class="icon-svg icon-vk" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#vk"></use>
				</svg>
			</a>
			
		</div>
		<?
		}
		?>
		
		<?
		if($fb != '') {
		?>
		<div class="cols social__cols _adspp__social-cols">
			
			<a href="<?=$fb;?>" target="_blank" class="social__item _fb">
				<svg class="icon-svg icon-fb" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#fb"></use>
				</svg>
			</a>
			
		</div>
		<?
		}
		?>
		
		<?
		if($ok != '') {
		?>
		<div class="cols social__cols _adspp__social-cols">
			
			<a href="<?=$ok;?>" target="_blank" class="social__item _ok">
				<svg class="icon-svg icon-ok" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#ok"></use>
				</svg>
			</a>
			
		</div>
		<?
		}
		?>
		
		<?
		if($tw != '') {
		?>
		<div class="cols social__cols _adspp__social-cols">
			
			<a href="<?=$tw;?>" target="_blank" class="social__item _tw">
				<svg class="icon-svg icon-tw" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#tw"></use>
				</svg>
			</a>
			
		</div>
		<?
		}
		?>
		
		<?
		if($inst != '') {
		?>
		<div class="cols social__cols _adspp__social-cols">
			
			<a href="<?=$inst;?>" target="_blank" class="social__item _inst">
				<svg class="icon-svg icon-inst" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#inst"></use>
				</svg>
			</a>
			
		</div>
		<?
		}
		?>
		
	</div>
</div> 