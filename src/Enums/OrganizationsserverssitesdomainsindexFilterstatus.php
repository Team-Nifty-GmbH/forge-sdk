<?php

declare(strict_types=1);

namespace TeamNifty\Forge\Enums;

enum OrganizationsserverssitesdomainsindexFilterstatus: string
{
    case CONNECTING = 'connecting';
    case DISABLED = 'disabled';
    case DISABLING = 'disabling';
    case ENABLED = 'enabled';
    case ENABLING = 'enabling';
    case PENDING = 'pending';
    case REMOVING = 'removing';
    case SECURING = 'securing';
    case UPDATING = 'updating';
}
