<form>
<input type="text" readonly value="<?php echo($_GET['path']); ?>" onmouseup="this.select();">
<button class="btn-right" onclick="window.open($(this).parent().children('input').val(), '_blank'); return false;">Open in new Codiad</button>
<script type="text/javascript">
	$('#modal-content input').focus();
</script>
</form>
