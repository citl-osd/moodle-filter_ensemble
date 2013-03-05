<?php

//  Converts repo-generated urls or stock ensemble code to ATLAS player code
//
//  Copyright (C) 2012 Liam Moran, Nathan Baxley
//  University of Illinois
//  Copyright (C) 2013 Symphony Video, Inc.
//
//  This program is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//

defined('MOODLE_INTERNAL') || die();

class filter_ensemble extends moodle_text_filter {

	public function filter($text, array $options = array()) {
		return $text;
		// global $CFG;

		// // FIXME - would I ever want it disabled?  Is this necessary?
		// if (!isset($CFG->filter_ensemble_enable)) {
		// 	set_config('filter_ensemble_enable', '');
		// }

	 //  $newtext = $text;
  //   if ($CFG->filter_ensemble_enable) {
	 //    $search = '#<a href="http(s)?://plugin.moodle.ensemblevideo.com?([^"]*)".*</a>#is';
  //   	$newtext = preg_replace_callback($search, array('filter_ensemble', 'callback'), $newtext);
  //   }

  //   if (is_null($newtext) or $newtext === $text) {
  //     // error or not filtered
  //   	return $text;
  //   }

  //   return $newtext;
  }

 //  private function callback($matches) {
 //  	print_r($matches);
 //  	return 'foo';
 //  	// FIXME - need to grab ensemble url from configuration
	// }

}
