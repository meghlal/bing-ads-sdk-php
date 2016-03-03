<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2016, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */

namespace BingAds\v10\AdInsight;

/**
 * Given a list of existing ad groups, this operation returns for each a list of suggested bids and estimated performance statistics.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219284(v=msads.100).aspx GetBidLandscapeByAdGroupIds Response Object
 * 
 * @uses AdGroupBidLandscape
 * @used-by BingAdsAdInsightService::GetBidLandscapeByAdGroupIds
 */
final class GetBidLandscapeByAdGroupIdsResponse
{
    public $BidLandscape;
}
