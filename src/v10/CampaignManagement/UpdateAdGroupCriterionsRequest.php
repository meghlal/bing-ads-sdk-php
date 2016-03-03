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
 * This service operation is reserved for future use.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277527(v=msads.100).aspx UpdateAdGroupCriterions Request Object
 * 
 * @uses AdGroupCriterion
 * @uses CriterionType
 * @used-by BingAdsCampaignManagementService::UpdateAdGroupCriterions
 */
final class UpdateAdGroupCriterionsRequest
{
    public $AccountId;
    public $AdGroupCriterions;
    public $CriterionType;
}
