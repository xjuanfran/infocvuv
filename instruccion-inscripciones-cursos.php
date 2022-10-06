<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Course registration IRACV page.
 *
 * @package    local_infocvuv
 * @author     2022 Juan Felipe Orozco Escobar <juanfe.ores@gmail.com>
 * @copyright  2022 Área de Nuevas Tecnologías - DINTEV - Universidad del Valle <desarrollo.ant@correounivalle.edu.co>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require(__DIR__ . '/../../config.php');

// Page configuration.
$PAGE->set_url(new moodle_url('/local/infocvuv/instruccion-inscripciones-cursos.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title('Instrucciones Inscripción Cursos en el Campus Virtual');
$PAGE->set_pagelayout('standard');

// Rendering page.
echo $OUTPUT->header();

echo $OUTPUT->render_from_template('local_infocvuv/instruccion-inscripciones-cursos', '');

echo $OUTPUT->footer();
