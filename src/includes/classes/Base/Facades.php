<?php
declare (strict_types = 1);
namespace WebSharks\WpSharks\s2MemberX\Pro\Classes\Base;

use WebSharks\WpSharks\s2MemberX\Pro\Classes;
use WebSharks\WpSharks\s2MemberX\Pro\Interfaces;
use WebSharks\WpSharks\s2MemberX\Pro\Traits;
#
use WebSharks\WpSharks\s2MemberX\Pro\Classes\AppFacades as a;
use WebSharks\WpSharks\s2MemberX\Pro\Classes\SCoreFacades as s;
use WebSharks\WpSharks\s2MemberX\Pro\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;

/**
 * Pseudo-static facades.
 *
 * @since 160227 Initial release.
 */
abstract class Facades
{
    use Traits\Facades\ProductPermission;
    use Traits\Facades\Restriction;
    use Traits\Facades\RestrictionCaps;
    use Traits\Facades\Restrictions;
    use Traits\Facades\SecurityChecks;
    use Traits\Facades\SecurityGate;
    use Traits\Facades\Systematics;
    use Traits\Facades\UserPermission;
    use Traits\Facades\UserPermissions;
    use Traits\Facades\UserPermissionShortcodes;
}
