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
 * Defines an object that contains the keyword and a list of keyword categories that the keyword might belong to.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219282(v=msads.100).aspx KeywordCategoryResult Data Object
 * 
 * @uses KeywordCategory
 * @used-by GetKeywordCategoriesResponse
 */
final class KeywordCategoryResult
{
    /**
     * The keyword being categorized.
     *
     * @var string
     */
    public $Keyword;
    /**
     * An array of KeywordCategory objects that contains a keyword category and a score that indicates the confidence that the keyword belongs to that keyword category.
     *
     * @var KeywordCategory[]
     */
    public $KeywordCategories;
}
