<?php
define('THEME_DIR', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());

// ENTITIES
require_once THEME_DIR . '/src/entities/index.php';

// CUSTOM POSTS
require_once THEME_DIR . '/src/cpts/index.php';

// ROUTES
require_once THEME_DIR . '/src/api/index.php';
