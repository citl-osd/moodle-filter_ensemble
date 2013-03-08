<?php

//  Converts arbitrary EV urls into appropriate embed codes.
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
    global $CFG;

    $newtext = $text;
    $search = '#<a href="http(s)?://plugin.moodle.ensemblevideo.com\?([^"]*)".*</a>#isU';
    $newtext = preg_replace_callback($search, array('filter_ensemble', 'callback'), $newtext);

    if (is_null($newtext) or $newtext === $text) {
      return $text;
    }

    return $newtext;
  }

  private function callback($matches) {
    $settings = array();
    parse_str(html_entity_decode(urldecode($matches[2])), $settings);
    $ensembleURL = get_config('ensemble', 'ensembleURL');
    if ($settings['type'] === 'video') {
      $width = isset($settings['width']) ? $settings['width'] : 640;
      $height = isset($settings['height']) ? $settings['height'] : 360;
      $source = $ensembleURL . '/app/plugin/embed.aspx?ID=' . $settings['id'] . '&autoPlay=' . $settings['autoplay'] . '&displayTitle=' . $settings['showtitle'] . '&hideControls=' . $settings['hidecontrols'] . '&showCaptions=' . $settings['showcaptions'] . '&width=' . $width . '&height=' . $height;
      return '<iframe src="' . $source . '" frameborder="0" style="width: ' . $width . 'px;height:' . ($height + 56) . 'px;" allowfullscreen></iframe>';
    } else if ($settings['type'] === 'playlist') {
      $source = $ensembleURL . '/app/plugin/embed.aspx?DestinationID=' . $settings['id'];
      return '<iframe src="' . $source . '" frameborder="0" style="width:800px;height:850px;" allowfullscreen></iframe>';
    }
  }

}
