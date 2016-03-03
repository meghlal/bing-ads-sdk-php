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
 * Gets the negative keywords that are only associated with the specified campaigns or ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743730(v=msads.100).aspx GetNegativeKeywordsByEntityIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetNegativeKeywordsByEntityIds
 */
final class GetNegativeKeywordsByEntityIdsRequest
{
    public $EntityIds;
    public $EntityType;
    public $ParentEntityId;
}
