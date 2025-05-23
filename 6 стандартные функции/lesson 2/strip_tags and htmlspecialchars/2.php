<?php
    $str = 'html, <b>php</b>, js';
    echo strip_tags($str, ['<b>'] );