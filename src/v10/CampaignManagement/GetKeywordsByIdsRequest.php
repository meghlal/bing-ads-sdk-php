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
 * Retrieves the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277505(v=msads.100).aspx GetKeywordsByIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetKeywordsByIds
 */
final class GetKeywordsByIdsRequest
{
    public $AdGroupId;
    public $KeywordIds;
}
