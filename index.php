<?php
require_once 'config.php';

// Libs
require_once SOURCE_BASE . 'libs/router.php';

// Models
require_once SOURCE_BASE . 'models/todo.model.php';

// DB
require_once SOURCE_BASE . 'db/datasource.php';
require_once SOURCE_BASE . 'db/todo.query.php';

require_once SOURCE_BASE . 'libs/post.php';

use function lib\route;

session_start();

require_once SOURCE_BASE . 'partials/header.php';


$rpath = str_replace(BASE_CONTEXT_PATH, '', CURRENT_URI);
$method = strtolower($_SERVER['REQUEST_METHOD']);


route($rpath,$method);


require_once SOURCE_BASE . 'partials/footer.php';