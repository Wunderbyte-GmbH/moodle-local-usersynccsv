<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * The synccsvconf_error event.
 *
 * @package    local_usersynccsv
 * @copyright  2016 onwards Antonello Moro {http://antonellomoro.it}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace local_usersynccsv\event;
defined('MOODLE_INTERNAL') || die();
/**
 * The synccsvconf_error event class.
 *
 * @package    local_usersynccsv
 * @copyright  2016 onwards Antonello Moro {http://antonellomoro.it}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class synccsvconf_error extends \core\event\base {
    /**
     * Event init
     */
    protected function init() {
        $this->data['edulevel'] = self::LEVEL_OTHER;
        $this->data['crud'] = 'c';
        $this->context = \context_system::instance();
    }

    /**
     * Get the name of the event
     * @return string
     */
    public static function get_name() {
        return get_string('synccsvconf_error-event', 'local_usersynccsv');
    }

    /**
     * Get the description of the event
     * @return string
     */
    public function get_description() {
        return get_string('synccsveeventconferrdescription', 'local_usersynccsv'). " {$this->objectid} {$this->other}.";
    }

    /**
     * Get the url of the event
     * @return string
     */
    public function get_url() {
        return '';
    }
}