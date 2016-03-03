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
 * Adds one or more keywords to an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277513(v=msads.100).aspx AddKeywords Request Object
 * 
 * @uses Keyword
 * @used-by BingAdsCampaignManagementService::AddKeywords
 */
final class AddKeywordsRequest
{
    public $AdGroupId;
    public $Keywords;
}
