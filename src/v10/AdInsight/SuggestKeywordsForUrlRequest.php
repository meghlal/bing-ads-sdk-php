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
 * Suggests the possible keywords for the content located at the specified URL.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219319(v=msads.100).aspx SuggestKeywordsForUrl Request Object
 * 
 * @used-by BingAdsAdInsightService::SuggestKeywordsForUrl
 */
final class SuggestKeywordsForUrlRequest
{
    public $Url;
    public $Language;
    public $MaxKeywords;
    public $MinConfidenceScore;
    public $ExcludeBrand;
}
