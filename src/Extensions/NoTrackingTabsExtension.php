<?php

namespace Fromholdio\NoTrackingTabs\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

class NoTrackingTabsExtension extends DataExtension
{
    public function updateCMSFields(FieldList $fields)
    {
        $fields->removeByName('LinkTracking');
        $fields->removeByName('FileTracking');
    }
}
