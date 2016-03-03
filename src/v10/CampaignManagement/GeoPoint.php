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
 * Defines an object that contains the longitude and latitude coordinates of a geographical location.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj721599(v=msads.100).aspx GeoPoint Data Object
 * 
 * @used-by LocationAdExtension
 */
final class GeoPoint
{
    /**
     * The latitude specified in micro degrees.
     *
     * @var int
     */
    public $LatitudeInMicroDegrees;
    /**
     * The longitude specified in micro degrees.
     *
     * @var int
     */
    public $LongitudeInMicroDegrees;
}
