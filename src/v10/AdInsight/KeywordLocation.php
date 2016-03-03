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
 * Defines an object that contains the location, network, device, and the percentage of time that a user entered a search query.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219301(v=msads.100).aspx KeywordLocation Data Object
 * 
 * @used-by KeywordLocationResult
 */
final class KeywordLocation
{
    /**
     * The device of the user who entered the search query.
     *
     * @var string
     */
    public $Device;
    /**
     * The country, state, metropolitan area, or city where users entered the search query.
     *
     * @var string
     */
    public $Location;
    /**
     * The percentage of time that users searched for the keyword from the location.
     *
     * @var float
     */
    public $Percentage;
}
