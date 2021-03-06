<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the shared entities such as negative keyword lists from the account's library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743728(v=msads.100).aspx GetSharedEntitiesByAccountId Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetSharedEntitiesByAccountId
 */
final class GetSharedEntitiesByAccountIdRequest
{
    public $SharedEntityType;
}
