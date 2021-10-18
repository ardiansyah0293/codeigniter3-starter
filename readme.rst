##############################
What is CodeIgniter 3 Starter
##############################

| CodeIgniter 3 starter is an Modification of Application Development Framework from Codeigniter.
| Some libraries added, ex: template (use Bootstrap 4.6 starter template)  
| autoload :database,session
| change : index.php
| add : .htaccess

| RewriteEngine On\
| RewriteCond %{REQUEST_FILENAME} !-f
| RewriteCond %{REQUEST_FILENAME} !-d
| RewriteRule ^(.*)$ index.php/$1 [L]


*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
original  of Codeigniter 3.1.11
<https://api.github.com/repos/bcit-ci/CodeIgniter/zipball/refs/tags/3.1.11>`.

**************************
Changelog and New Features
**************************

- Remove index.php ( add .htaccess and setting to autoload.php & config.php)
- Add template libraries
- Add template with bootstrap 4.6
See pages <https://getbootstrap.com/docs/4.6/getting-started/introduction/>`.
- Add user Login system
- Add csrf protection


*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Just Clone it or download.
Create database ci3starter / import from this repository ci3starter.sql

*******
License
*******
- License of Codeigniter 3 ::
Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.
- About Bootstrap 4.6
<https://getbootstrap.com/docs/4.6/about/overview/>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_
-  `Bootstrap 4.6 <https://getbootstrap.com/docs/4.6/getting-started/introduction/>`_


Report error / bug issues to my personal email `Panel <mailto:ardiansyah0293@gmail.com>`_

***************
Acknowledgement
***************

Thank To Codeigniter team, EllisLab, Bootstrap, Fontawesome, all the
contributors to the CodeIgniter 3 Starter project and you, the user.
