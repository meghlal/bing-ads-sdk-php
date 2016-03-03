<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2016, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236306(v=msads.100).aspx GetEditorialReasonsByIds Response Object
 * 
 * @uses EditorialReasonCollection
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetEditorialReasonsByIds
 */
final class GetEditorialReasonsByIdsResponse
{
    public $EditorialReasons;
    public $PartialErrors;
}
