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
 * Deletes the specified media from an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766193(v=msads.100).aspx DeleteMedia Request Object
 * 
 * @used-by BingAdsCampaignManagementService::DeleteMedia
 */
final class DeleteMediaRequest
{
    public $AccountId;
    public $MediaIds;
}
