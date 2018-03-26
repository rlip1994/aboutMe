<?php
/**
 * @package		Komento
 * @copyright	Copyright (C) 2012 Stack Ideas Private Limited. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 *
 * Komento is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<div class="kmt-form-editor">
	<div>
		<textarea name="commentInputArea" id="commentInput" class="commentInput input textarea" cols="50" rows="10" tabindex="44" required placeholder="<?php echo Jtext::_('COM_KOMENTO_FRONTPAGE_COMMENT'); ?>:"></textarea>
		<?php // echo $editor->display('commentInput', '', '100%', '150', '10', '10', false); ?>
	</div>
</div>
