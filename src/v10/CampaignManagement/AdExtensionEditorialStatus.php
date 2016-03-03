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
 * Defines the editorial review status values of an ad extension.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn249989(v=msads.100).aspx AdExtensionEditorialStatus Value Set
 * 
 * @used-by AdExtensionAssociation
 */
final class AdExtensionEditorialStatus
{
    /** The ad extension passed editorial review. */
    const Active = 'Active';
    /** The ad extension failed editorial review. */
    const Disapproved = 'Disapproved';
    /** One or more elements of the ad extension is undergoing editorial review. */
    const Inactive = 'Inactive';
    /** The ad extension passed editorial review in one or more markets, and one or more elements of the ad extension is undergoing editorial review in another market. */
    const ActiveLimited = 'ActiveLimited';
}
