<?php

// index.php
require_once 'model.php';
open_db_connection();

$posts = get_all_posts();

require_once 'templates/list.php';