<?php

require_once 'data.php';

foreach($publications as $item) {
    echo $item->printItem();
}