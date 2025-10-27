<?php

declare(strict_types=1);

namespace TeamNifty\Forge\Enums;

enum UpdatePhpCliVersionRequestPhpVersion: string
{
    case _5_6 = '5.6';
    case _7_0 = '7.0';
    case _7_1 = '7.1';
    case _7_2 = '7.2';
    case _7_3 = '7.3';
    case _7_4 = '7.4';
    case _8_0 = '8.0';
    case _8_1 = '8.1';
    case _8_2 = '8.2';
    case _8_3 = '8.3';
    case _8_4 = '8.4';
    case _8_5 = '8.5';
}
