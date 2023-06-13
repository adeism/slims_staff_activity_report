<?php
/**
 * Plugin Name: Staff Activity Report Plus
 * Plugin URI: https://github.com/adeism\slims_staff_activity_report
 * Description: when the user updates the biblio, items, and members are entered as counts in the report | ketika user melakukan update biblio, item, dan anggota masuk sebagai hitungan dalam laporan
 * Version: 0.1
 * Author: Ade Ismail Siregar
 * Author URI: https://github.com/adeism
 */

// get instance of plugin object
$plugin = \SLiMS\Plugins::getInstance();

// registering our plugin into bibliography module
$plugin->register('opac', 'show detail', __DIR__ . '/detail.inc.php')
