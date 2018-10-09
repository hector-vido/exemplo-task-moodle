<?php

namespace local_pulso\task;
#require_once $CFG->dirroot . '/course/lib.php'; # Inclusão de arquivos do moodle aqui
defined('MOODLE_INTERNAL') || die();

class pulso extends \core\task\scheduled_task {

   # Nome exibido para os admins no painel
   public function get_name() {
      return 'Plugin Pulso';
   }

   public function execute() {
      file_put_contents('/tmp/pulso.log', date('Y-m-d h:i:s'), FILE_APPEND);
   }
}