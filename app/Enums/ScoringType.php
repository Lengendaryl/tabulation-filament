<?php

namespace App\Enums;

enum ScoringType: string
{
    case POINT_BASED = 'point_based';
    case RANK_BASED = 'rank_based';
}
