<?php
/* vim:set tabstop=8 softtabstop=8 shiftwidth=8 noexpandtab: */
/**
 * Show Edit Playlist Row
 *
 * PHP version 5
 *
 * LICENSE: GNU General Public License, version 2 (GPLv2)
 * Copyright (c) 2001 - 2011 Ampache.org All Rights Reserved
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License v2
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 * @category	Template
 * @package	Template
 * @author	Karl Vollmer <vollmer@ampache.org>
 * @copyright	2001 - 2011 Ampache.org
 * @license	http://opensource.org/licenses/gpl-2.0 GPLv2
 * @version	PHP 5.2
 * @link	http://www.ampache.org/
 * @since	File available since Release 1.0
 */

?>
<td colspan="6">
<form method="post" id="edit_playlist_<?php echo $playlist->id; ?>" action="javascript:void(0);">
<table cellpadding="0" cellspacing="0">
<tr>
	<td>
		<input type="text" name="name" size="25" value="<?php echo scrub_out($playlist->name); ?>" />
	</td>
	<td>
		<?php $name = 'select_' . $playlist->type; ${$name} = ' selected="selected"'; ?>
		<select name="pl_type">
			<option value="public"<?php echo $select_public; ?>><?php echo _('Public'); ?></option>
			<option value="private"<?php echo $select_private; ?>><?php echo _('Private'); ?></option>
		</select>
	<td>
	<input type="hidden" name="id" value="<?php echo $playlist->id; ?>" />
	<input type="hidden" name="type" value="playlist_row" />
	<?php echo Ajax::button('?action=edit_object&id=' . $playlist->id . '&type=playlist_row','download',_('Save Changes'),'save_playlist_' . $playlist->id,'edit_playlist_' . $playlist->id); ?>
	</td>
</tr>
</table>
</form>
</td>

