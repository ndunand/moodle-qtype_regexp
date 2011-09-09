<?php  //$Id: mysql.php,v 1.1 2007/08/09 22:16:46 joseph_rezeau Exp $

// MySQL commands for upgrading this question type

function qtype_regexp_upgrade($oldversion=0) {
    global $CFG;

    if ($oldversion == 0) { // First time install
        $result = modify_database("$CFG->dirroot/question/type/regexp/db/mysql.sql");
        return $result;
    }

    // Question type was installed before. Upgrades must be applied

    if ($oldversion < 2007012800) {
        $result = modify_database("$CFG->dirroot/question/type/regexp/db/mysql02.sql");
        return $result;
        
    }

    return true;
}

?>