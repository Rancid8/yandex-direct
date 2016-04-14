<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Biplane\YandexDirect\Api\V5SoapClient;

/**
 * Auto-generated code.
 */
class AdGroups extends V5SoapClient
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/adgroups?wsdl';

    /**
     * Constructor.
     *
     * @param EventDispatcherInterface $dispatcher
     * @param User $user
     */
    public function __construct(EventDispatcherInterface $dispatcher, User $user)
    {
        parent::__construct($user->resolveWsdl(self::ENDPOINT), $dispatcher, $user, array(
            'classmap' => array(
                'MobileAppAdActionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum',
                'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
                'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
                'YesNoEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoEnum',
                'YesNoUnknownEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoUnknownEnum',
                'CurrencyEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum',
                'StateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StateEnum',
                'PriorityEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityEnum',
                'PositionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PositionEnum',
                'CountryCodeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CountryCodeEnum',
                'StatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusEnum',
                'StatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusSelectionEnum',
                'ExtensionStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum',
                'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
                'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
                'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
                'MobileOperatingSystemTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileOperatingSystemTypeEnum',
                'OperationEnum' => 'Biplane\YandexDirect\Api\V5\Contract\OperationEnum',
                'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
                'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
                'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
                'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
                'ApiExceptionMessage' => 'Biplane\YandexDirect\Api\V5\Contract\ApiExceptionMessage',
                'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
                'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
                'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
                'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
                'AdGroupFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupFieldEnum',
                'MobileAppAdGroupFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdGroupFieldEnum',
                'DynamicTextAdGroupFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextAdGroupFieldEnum',
                'AdGroupTypesEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum',
                'AdGroupStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupStatusSelectionEnum',
                'AdGroupAppIconStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupAppIconStatusSelectionEnum',
                'DomainUrlProcessingStatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DomainUrlProcessingStatusEnum',
                'AdGroupsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupsSelectionCriteria',
                'AdGroupBase' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupBase',
                'AdGroupAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupAddItem',
                'AdGroupGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupGetItem',
                'TargetDeviceTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TargetDeviceTypeEnum',
                'TargetCarrierEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TargetCarrierEnum',
                'AppAvailabilityStatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AppAvailabilityStatusEnum',
                'MobileAppAdGroupGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdGroupGet',
                'MobileAppAdGroupUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdGroupUpdate',
                'MobileAppAdGroupAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdGroupAdd',
                'DynamicTextAdGroup' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextAdGroup',
                'DynamicTextAdGroupGet' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextAdGroupGet',
                'AdGroupUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupUpdateItem',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdGroupsRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdGroupsResponse',
                'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdGroupsRequest',
                'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdGroupsResponse',
                'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateAdGroupsRequest',
                'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateAdGroupsResponse',
                'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdGroupsRequest',
                'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdGroupsResponse'
            )
        ));
    }

    /**
     * get.
     *
     * @param Contract\GetAdGroupsRequest $parameters
     * @return Contract\GetAdGroupsResponse
     */
    public function get(Contract\GetAdGroupsRequest $parameters)
    {
        return $this->invoke('get', array($parameters));
    }

    /**
     * add.
     *
     * @param Contract\AddAdGroupsRequest $parameters
     * @return Contract\AddAdGroupsResponse
     */
    public function add(Contract\AddAdGroupsRequest $parameters)
    {
        return $this->invoke('add', array($parameters));
    }

    /**
     * update.
     *
     * @param Contract\UpdateAdGroupsRequest $parameters
     * @return Contract\UpdateAdGroupsResponse
     */
    public function update(Contract\UpdateAdGroupsRequest $parameters)
    {
        return $this->invoke('update', array($parameters));
    }

    /**
     * delete.
     *
     * @param Contract\DeleteAdGroupsRequest $parameters
     * @return Contract\DeleteAdGroupsResponse
     */
    public function delete(Contract\DeleteAdGroupsRequest $parameters)
    {
        return $this->invoke('delete', array($parameters));
    }


}

