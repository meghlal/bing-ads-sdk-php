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
 * Applies an add, update, or delete action to each of the specified BiddableAdGroupCriterion or NegativeAdGroupCriterion, which each contain a ProductPartition.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913134(v=msads.100).aspx ApplyProductPartitionActions Request Object
 * 
 * @uses AdGroupCriterionAction
 * @used-by BingAdsCampaignManagementService::ApplyProductPartitionActions
 */
final class ApplyProductPartitionActionsRequest
{
    public $CriterionActions;
}
