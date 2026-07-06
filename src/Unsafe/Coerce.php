<?php

$unsafeCoerce = function($x) use (&$unsafeCoerce) { return $x; };

$exports['unsafeCoerce'] = $unsafeCoerce;
return $exports;
