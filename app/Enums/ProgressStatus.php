<?php

namespace App\Enums;

enum ProgressStatus: string
{
    case InProgress = 'in_progress';
    case Completed = 'completed';
}
