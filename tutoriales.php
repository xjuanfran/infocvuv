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
 * Tutoriales page.
 *
 * @package    local_infocvuv
 * @author     2022 Juan Felipe Orozco Escobar <juanfe.ores@gmail.com>
 * @copyright  2022 Área de Nuevas Tecnologías - DINTEV - Universidad del Valle <desarrollo.ant@correounivalle.edu.co>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require(__DIR__ . '/../../config.php');

// Page configuration.
$PAGE->set_url(new moodle_url('/local/infocvuv/tutoriales.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('tutorials', 'local_infocvuv'));
$PAGE->set_pagelayout('standard');

// Rendering page.
echo $OUTPUT->header();

$templatecontext = [
    'students_icon' => $OUTPUT->image_url('icono_estudiantes', 'local_infocvuv'),
    'students_icon_alt' => get_string('students_icon_alt', 'local_infocvuv'),
    'student_regulations_url' => get_string('student_regulations_url', 'local_infocvuv'),
    'student_tutorial_url' => get_string('student_tutorial_url', 'local_infocvuv'),
    'professors_icon' => $OUTPUT->image_url('icono_profesores', 'local_infocvuv'),
    'professors_icon_alt' => get_string('professors_icon_alt', 'local_infocvuv'),
    'users_enter_cv_url' => get_string('users_enter_cv_url', 'local_infocvuv'),
    'users_restore_password_url' => get_string('users_restore_password_url', 'local_infocvuv'),
    'users_change_password_url' => get_string('users_change_password_url', 'local_infocvuv'),
    'users_enroll_student_url' => get_string('users_enroll_student_url', 'local_infocvuv'),
    'users_unenroll_student_url' => get_string('users_unenroll_student_url', 'local_infocvuv'),
    'users_change_user_rol_url' => get_string('users_change_user_rol_url', 'local_infocvuv'),
    'users_create_groups_url' => get_string('users_create_groups_url', 'local_infocvuv'),
    'users_read_messages_url' => get_string('users_read_messages_url', 'local_infocvuv'),
    'courses_create_course_url' => get_string('courses_create_course_url', 'local_infocvuv'),
    'courses_restart_course_url' => get_string('courses_restart_course_url', 'local_infocvuv'),
    'courses_configure_course_url' => get_string('courses_configure_course_url', 'local_infocvuv'),
    'courses_add_delete_section_url' => get_string('courses_add_delete_section_url', 'local_infocvuv'),
    'courses_free_space_url' => get_string('courses_free_space_url', 'local_infocvuv'),
    'courses_import_data_url' => get_string('courses_import_data_url', 'local_infocvuv'),
    'courses_tabs_with_restrictions_url' => get_string('courses_tabs_with_restrictions_url', 'local_infocvuv'),
    'courses_export_students_to_excel_url' => get_string('courses_export_students_to_excel_url', 'local_infocvuv'),
    'resources_concepts_url' => get_string('resources_concepts_url', 'local_infocvuv'),
    'resources_create_assignment_url' => get_string('resources_create_assignment_url', 'local_infocvuv'),
    'resources_assignment_with_restrictions_url' => get_string('resources_assignment_with_restrictions_url', 'local_infocvuv'),
    'resources_file_url' => get_string('resources_file_url', 'local_infocvuv'),
    'resources_private_files_url' => get_string('resources_private_files_url', 'local_infocvuv'),
    'resources_url_url' => get_string('resources_url_url', 'local_infocvuv'),
    'resources_forum_url' => get_string('resources_forum_url', 'local_infocvuv'),
    'resources_duplicate_url' => get_string('resources_duplicate_url', 'local_infocvuv'),
    'resources_chat_url' => get_string('resources_chat_url', 'local_infocvuv'),
    'resources_latex_url' => get_string('resources_latex_url', 'local_infocvuv'),
    'questionnaires_questionnaire_url' => get_string('questionnaires_questionnaire_url', 'local_infocvuv'),
    'questionnaires_question_bank_url' => get_string('questionnaires_question_bank_url', 'local_infocvuv'),
    'questionnaires_add_questions_to_questionnaire_url' => get_string('questionnaires_add_questions_to_questionnaire_url', 'local_infocvuv'),
];

echo $OUTPUT->render_from_template('local_infocvuv/tutoriales', $templatecontext);

echo $OUTPUT->footer();
