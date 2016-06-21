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
 * DocRank is a plugin for Moodle v2.0 that counts the clicks documents
 * recieve and displays them in a chart. 
 *
 * RememberMe is a block type plugin for Moodle v2.0 made by students of the
 * Berlin School of Economics and Law and meant to be used by schools and
 * learning groups. It collects data on how often documents are viewed within
 * a course and visualises the result as a chart. This enables ranking of a
 * document's popularity and importance, urging users to read certain documents
 * or pay closer attention to them. The chart features various filters and
 * sortings.
 *
 * @package    moodle-block_DocRank
 * @category   block-plugin
 * @copyright  2016 ProPlug
 * @license
 */    

class block_docrank extends block_base {
    
    public function init() {
        /* add a headline */    
        $this->title = "Doc Rank";        
    }

    public function get_content() {
        
        /* if content not empty return content */ 
        if ($this->content !== null) {
            return $this->content;
        }
        
        /* create new standard class for plugin */    
        $this->content = new stdClass;
         $this->content->icons  = array();
        
        /* "import" global vars -> (config.php) */
        global $CFG;
        global $COURSE;

        /* add text to plugin body */   
        $this->content->text = '<a href= "'.$CFG->wwwroot.'/blocks/docrank/resource/docrank.php?courseid='.$COURSE->id.'" target="_blank"><img src="'.$CFG->wwwroot.'/blocks/docrank/images/icons/DocRank_icon_1.jpg" /></a>';
        
        /* return content */ 
        return $this->content;
    }

}
