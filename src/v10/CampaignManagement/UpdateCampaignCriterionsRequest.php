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
 * Updates one or more campaign criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913121(v=msads.100).aspx UpdateCampaignCriterions Request Object
 * 
 * @uses CampaignCriterion
 * @uses CampaignCriterionType
 * @used-by BingAdsCampaignManagementService::UpdateCampaignCriterions
 */
final class UpdateCampaignCriterionsRequest
{
    public $CampaignCriterions;
    public $CriterionType;
}
