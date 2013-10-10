<form>
<input type="text" readonly value="<?php echo($_GET['path']); ?>">
<button class="btn-right" onclick="window.open($(this).parent().children('input').val(), '_blank'); return false;">Open in new Codiad</button>
</form>
