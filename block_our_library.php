<?php

/**
 * Our Library block.
 *
 * @package   block_our_library
 * @copyright 1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_our_library extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_our_library');
    }

    function get_content() {
        global $CFG;

        require_once($CFG->libdir . '/filelib.php');

        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->footer = '';
        $this->content->text = '<a target="_new" href="http://hope.edu/lib">Library home page</a><br><a target="_new" href="http://hope.edu/lib/citing/index.html">Citing sources</a><br><a target="_new" href="http://hope.edu/lib/ask/">Ask a librarian</a>';

        return $this->content;
    }

}
