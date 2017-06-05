<?

$__block_class = 'text-page';
$__block_prefix = '_tp__';

?>

<div class="content-block <?=$__block_class;?>" role="main">
	<div class="container content-container">
		
		
		<?
		$this->tpl('_/heading', array(
			'text' => t($this->post['id']),
			'header_prefix' => 'page-header__',
			'block_prefix' => '_cp__',
		));
		?>
		
		<div class="text-block">
			
			<?=c($this->post['id']);?>
			
		</div>
	</div>
</div>