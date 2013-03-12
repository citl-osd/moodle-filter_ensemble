<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_configtextarea('filter_ensemble_urls', get_string('urls','filter_ensemble'),
                   get_string('urls_desc', 'filter_ensemble'), ''));
}
