<?php

namespace App\Enums;

enum SettingScoringMethod: int
{
    case AVERAGEALLHEATTIMES = 1;
    case DROPSLOWESTTIME = 2;
    case TAKEFASTESTTIME = 3;
}
