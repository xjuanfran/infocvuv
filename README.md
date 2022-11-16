# Moodle plugin: local_infocvuv
## Motivation for this plugin
Info CVUV (Information Campus Virtual Universidad del Valle) is a customized Moodle plugin that hosts information (e.g. privacy policies, tutorials, FAQs, and others) for users of the Campus Virtual at Universidad del Valle.

These information files were directly hosted at /path/to/moodle/info-dintev/ using single PHP files, which required administrators and support engineers to place them in the web server without using any version control system such as Git or using a better rendering mechanism such as the mustache template system that Moodle offers. Now it is a simple plugin that follows the best Moodle practices and solves the previously mentioned problems, hence making it easier to maintain and to keep adding new functionalities.

## Installation
Run the following commands under Moodle root directory:
1. Clone this repository to <i>/path/to/moodle/local/infocvuv</i>:
```
git clone https://github.com/desarrolloant/moodle-local_infocvuv.git local/infocvuv
```
2. Upgrade the Moodle site using Moodle CLI:
```
php admin/cli/upgrade
```

## Copyright
Área de Nuevas Tecnologías - DINTEV - Universidad del Valle <desarrollo.ant@correounivalle.edu.co>
