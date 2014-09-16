<?php

namespace MyProject\Database;
use Another\another_class as myclass;

require_once 'another.php';
echo __NAMESPACE__;

//throw new \Exception('An exception');

use Exception;
throw new \Exception('An exception');
