<?php 

/**
 * @package ElGolem
 * @subpackage mod_github_badge
 * @version   1.0.0 - 04/08/2012
 * @author    Emmanuel Fontan
 * @copyright (C) 2012 Emmanuel Fontan
 * This module is based on the Github Badge project, created by Berker Peksag (@berkerpeksag) and Burak Yigit Kaya (@madbyk). Read more: http://github.com/berkerpeksag/github-badge.
 *
 * @license		GNU/GPL, see LICENSE.php
 * This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program.  If not, see http://www.gnu.org/licenses/.
 *
 *
 */

class modGithubBadgeHelper {

	/*
	################################################
	#                GET_GITHUBBADGE	           #
	################################################
	*/
	public static function get_githubbadge(&$params) {

		//Get Parameters
		$user_name = $params->get('user_name','');
		$support = $params->get('support','1');
		$g_analytics = $params->get('g_analytics','0');

		$moduleclass_sfx = $params->get('moduleclass_sfx','');
		
		//Generate the HTML
		if (empty($user_name)) {
			$html = '<p>Github Username Not Found</p>';
		} else {
			$html = '
				<iframe src="http://githubbadge.appspot.com/badge/'.$user_name.'?s='.$support.'&a='.$g_analytics.'" style="border: 0;height: 100%;width: 100%;overflow: hidden;" frameBorder="0"></iframe>
			';
		}
		
		return $html;
	}

}
