<?php

defined('MOODLE_INTERNAL') || die(); # Verifica se está rodando através do moodle
$plugin->version = 2018031200; # YYYYMMDDXX, versão do plugin, onde XX é a versão incremental do mesmo dia
$plugin->requires = 2014051200; # Mesmo caso acima, mas especifica a versão mínima aceitável do moodle
$plugin->cron = 0; # Antigo modelo de contrab, ignorar
$plugin->component = 'local_pulso'; # tipo_nome
$plugin->maturity = MATURITY_STABLE; # MATURITY_ALPHA, MATURITY_BETA, MATURITY_RC ou MATURITY_STABLE
$plugin->release = 1.0; # Versão da release