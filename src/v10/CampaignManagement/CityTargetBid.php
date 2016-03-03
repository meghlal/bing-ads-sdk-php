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
 * Defines a specific city target with bid adjustment.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd796932(v=msads.100).aspx CityTargetBid Data Object
 * 
 * @used-by CityTarget
 */
final class CityTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted city.
     *
     * @var int
     */
    public $BidAdjustment;
    /**
     * The city to target.
     *
     * @var string
     */
    public $City;
    /**
     * Set this element to true if you want to exclude the location from targeting.
     *
     * @var bool
     */
    public $IsExcluded;
}
