<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetUserByEmail;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetUserByEmailResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\User;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetUserByEmailAndStore;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetUserByEmailAndStoreResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetUser;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetUserResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetUserByExternalID;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetUserByExternalIDResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\ValidateUser;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\ValidateUserResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\ValidateUserInStore;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\ValidateUserInStoreResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetUserByCustomer;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetUserByCustomerResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\AddCustomer;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\AddCustomerResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\AddUser;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\AddUserResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\AddUserInStore;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\AddUserInStoreResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\UpdateCustomer;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\UpdateCustomerResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\UpdateUser;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\UpdateUserResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\UpdateUserDetails;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\UpdateUserDetailsResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetStoreAdministratorList;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetStoreAdministratorListResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\ArrayOfUser;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetStoreOperatorList;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetStoreOperatorListResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSuperUserList;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSuperUserListResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSingleSignonUrlToWelcomePage;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSingleSignonUrlToWelcomePageResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSingleSignonUrlToProductGroup;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSingleSignonUrlToProductGroupResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSingleSignonUrlToProductDetails;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSingleSignonUrlToProductDetailsResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSingleSignonUrlToProductDetailsUsingExternalId;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSingleSignonUrlToProductDetailsUsingExternalIdResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSingleSigonUrlToOrderWizard;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSingleSigonUrlToOrderWizardResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSingleSignonUrlToFinalizePage;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSingleSignonUrlToFinalizePageResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSingleSignOnUrl;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\GetSingleSignOnUrlResponse;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\MergeUserData;
use XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\UserWS\MergeUserDataResponse;


class FabricateUserWS
{
    private $paramAutoSet;

    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     * @return GetUserByEmail
     */
    public function GetUserByEmail($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserByEmail = new GetUserByEmail();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserByEmail, $methodName)) {
                $GetUserByEmail->$methodName($paramValue);
            }
        }
        return $GetUserByEmail;
    }


    /**
     * @param array $paramAutoSet
     * @return GetUserByEmailResponse
     */
    public function GetUserByEmailResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserByEmailResponse = new GetUserByEmailResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserByEmailResponse, $methodName)) {
                $GetUserByEmailResponse->$methodName($paramValue);
            }
        }
        return $GetUserByEmailResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return User
     */
    public function User($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $User = new User();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($User, $methodName)) {
                $User->$methodName($paramValue);
            }
        }
        return $User;
    }


    /**
     * @param array $paramAutoSet
     * @return GetUserByEmailAndStore
     */
    public function GetUserByEmailAndStore($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserByEmailAndStore = new GetUserByEmailAndStore();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserByEmailAndStore, $methodName)) {
                $GetUserByEmailAndStore->$methodName($paramValue);
            }
        }
        return $GetUserByEmailAndStore;
    }


    /**
     * @param array $paramAutoSet
     * @return GetUserByEmailAndStoreResponse
     */
    public function GetUserByEmailAndStoreResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserByEmailAndStoreResponse = new GetUserByEmailAndStoreResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserByEmailAndStoreResponse, $methodName)) {
                $GetUserByEmailAndStoreResponse->$methodName($paramValue);
            }
        }
        return $GetUserByEmailAndStoreResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetUser
     */
    public function GetUser($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUser = new GetUser();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUser, $methodName)) {
                $GetUser->$methodName($paramValue);
            }
        }
        return $GetUser;
    }


    /**
     * @param array $paramAutoSet
     * @return GetUserResponse
     */
    public function GetUserResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserResponse = new GetUserResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserResponse, $methodName)) {
                $GetUserResponse->$methodName($paramValue);
            }
        }
        return $GetUserResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetUserByExternalID
     */
    public function GetUserByExternalID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserByExternalID = new GetUserByExternalID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserByExternalID, $methodName)) {
                $GetUserByExternalID->$methodName($paramValue);
            }
        }
        return $GetUserByExternalID;
    }


    /**
     * @param array $paramAutoSet
     * @return GetUserByExternalIDResponse
     */
    public function GetUserByExternalIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserByExternalIDResponse = new GetUserByExternalIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserByExternalIDResponse, $methodName)) {
                $GetUserByExternalIDResponse->$methodName($paramValue);
            }
        }
        return $GetUserByExternalIDResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return ValidateUser
     */
    public function ValidateUser($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ValidateUser = new ValidateUser();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ValidateUser, $methodName)) {
                $ValidateUser->$methodName($paramValue);
            }
        }
        return $ValidateUser;
    }


    /**
     * @param array $paramAutoSet
     * @return ValidateUserResponse
     */
    public function ValidateUserResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ValidateUserResponse = new ValidateUserResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ValidateUserResponse, $methodName)) {
                $ValidateUserResponse->$methodName($paramValue);
            }
        }
        return $ValidateUserResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return ValidateUserInStore
     */
    public function ValidateUserInStore($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ValidateUserInStore = new ValidateUserInStore();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ValidateUserInStore, $methodName)) {
                $ValidateUserInStore->$methodName($paramValue);
            }
        }
        return $ValidateUserInStore;
    }


    /**
     * @param array $paramAutoSet
     * @return ValidateUserInStoreResponse
     */
    public function ValidateUserInStoreResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ValidateUserInStoreResponse = new ValidateUserInStoreResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ValidateUserInStoreResponse, $methodName)) {
                $ValidateUserInStoreResponse->$methodName($paramValue);
            }
        }
        return $ValidateUserInStoreResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetUserByCustomer
     */
    public function GetUserByCustomer($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserByCustomer = new GetUserByCustomer();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserByCustomer, $methodName)) {
                $GetUserByCustomer->$methodName($paramValue);
            }
        }
        return $GetUserByCustomer;
    }


    /**
     * @param array $paramAutoSet
     * @return GetUserByCustomerResponse
     */
    public function GetUserByCustomerResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserByCustomerResponse = new GetUserByCustomerResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserByCustomerResponse, $methodName)) {
                $GetUserByCustomerResponse->$methodName($paramValue);
            }
        }
        return $GetUserByCustomerResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return AddCustomer
     */
    public function AddCustomer($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddCustomer = new AddCustomer();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddCustomer, $methodName)) {
                $AddCustomer->$methodName($paramValue);
            }
        }
        return $AddCustomer;
    }


    /**
     * @param array $paramAutoSet
     * @return AddCustomerResponse
     */
    public function AddCustomerResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddCustomerResponse = new AddCustomerResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddCustomerResponse, $methodName)) {
                $AddCustomerResponse->$methodName($paramValue);
            }
        }
        return $AddCustomerResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return AddUser
     */
    public function AddUser($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddUser = new AddUser();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddUser, $methodName)) {
                $AddUser->$methodName($paramValue);
            }
        }
        return $AddUser;
    }


    /**
     * @param array $paramAutoSet
     * @return AddUserResponse
     */
    public function AddUserResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddUserResponse = new AddUserResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddUserResponse, $methodName)) {
                $AddUserResponse->$methodName($paramValue);
            }
        }
        return $AddUserResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return AddUserInStore
     */
    public function AddUserInStore($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddUserInStore = new AddUserInStore();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddUserInStore, $methodName)) {
                $AddUserInStore->$methodName($paramValue);
            }
        }
        return $AddUserInStore;
    }


    /**
     * @param array $paramAutoSet
     * @return AddUserInStoreResponse
     */
    public function AddUserInStoreResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddUserInStoreResponse = new AddUserInStoreResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddUserInStoreResponse, $methodName)) {
                $AddUserInStoreResponse->$methodName($paramValue);
            }
        }
        return $AddUserInStoreResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return UpdateCustomer
     */
    public function UpdateCustomer($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateCustomer = new UpdateCustomer();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateCustomer, $methodName)) {
                $UpdateCustomer->$methodName($paramValue);
            }
        }
        return $UpdateCustomer;
    }


    /**
     * @param array $paramAutoSet
     * @return UpdateCustomerResponse
     */
    public function UpdateCustomerResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateCustomerResponse = new UpdateCustomerResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateCustomerResponse, $methodName)) {
                $UpdateCustomerResponse->$methodName($paramValue);
            }
        }
        return $UpdateCustomerResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return UpdateUser
     */
    public function UpdateUser($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateUser = new UpdateUser();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateUser, $methodName)) {
                $UpdateUser->$methodName($paramValue);
            }
        }
        return $UpdateUser;
    }


    /**
     * @param array $paramAutoSet
     * @return UpdateUserResponse
     */
    public function UpdateUserResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateUserResponse = new UpdateUserResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateUserResponse, $methodName)) {
                $UpdateUserResponse->$methodName($paramValue);
            }
        }
        return $UpdateUserResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return UpdateUserDetails
     */
    public function UpdateUserDetails($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateUserDetails = new UpdateUserDetails();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateUserDetails, $methodName)) {
                $UpdateUserDetails->$methodName($paramValue);
            }
        }
        return $UpdateUserDetails;
    }


    /**
     * @param array $paramAutoSet
     * @return UpdateUserDetailsResponse
     */
    public function UpdateUserDetailsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateUserDetailsResponse = new UpdateUserDetailsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateUserDetailsResponse, $methodName)) {
                $UpdateUserDetailsResponse->$methodName($paramValue);
            }
        }
        return $UpdateUserDetailsResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetStoreAdministratorList
     */
    public function GetStoreAdministratorList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStoreAdministratorList = new GetStoreAdministratorList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStoreAdministratorList, $methodName)) {
                $GetStoreAdministratorList->$methodName($paramValue);
            }
        }
        return $GetStoreAdministratorList;
    }


    /**
     * @param array $paramAutoSet
     * @return GetStoreAdministratorListResponse
     */
    public function GetStoreAdministratorListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStoreAdministratorListResponse = new GetStoreAdministratorListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStoreAdministratorListResponse, $methodName)) {
                $GetStoreAdministratorListResponse->$methodName($paramValue);
            }
        }
        return $GetStoreAdministratorListResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return ArrayOfUser
     */
    public function ArrayOfUser($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfUser = new ArrayOfUser();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfUser, $methodName)) {
                $ArrayOfUser->$methodName($paramValue);
            }
        }
        return $ArrayOfUser;
    }


    /**
     * @param array $paramAutoSet
     * @return GetStoreOperatorList
     */
    public function GetStoreOperatorList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStoreOperatorList = new GetStoreOperatorList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStoreOperatorList, $methodName)) {
                $GetStoreOperatorList->$methodName($paramValue);
            }
        }
        return $GetStoreOperatorList;
    }


    /**
     * @param array $paramAutoSet
     * @return GetStoreOperatorListResponse
     */
    public function GetStoreOperatorListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStoreOperatorListResponse = new GetStoreOperatorListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStoreOperatorListResponse, $methodName)) {
                $GetStoreOperatorListResponse->$methodName($paramValue);
            }
        }
        return $GetStoreOperatorListResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSuperUserList
     */
    public function GetSuperUserList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSuperUserList = new GetSuperUserList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSuperUserList, $methodName)) {
                $GetSuperUserList->$methodName($paramValue);
            }
        }
        return $GetSuperUserList;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSuperUserListResponse
     */
    public function GetSuperUserListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSuperUserListResponse = new GetSuperUserListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSuperUserListResponse, $methodName)) {
                $GetSuperUserListResponse->$methodName($paramValue);
            }
        }
        return $GetSuperUserListResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSingleSignonUrlToWelcomePage
     */
    public function GetSingleSignonUrlToWelcomePage($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSingleSignonUrlToWelcomePage = new GetSingleSignonUrlToWelcomePage();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSingleSignonUrlToWelcomePage, $methodName)) {
                $GetSingleSignonUrlToWelcomePage->$methodName($paramValue);
            }
        }
        return $GetSingleSignonUrlToWelcomePage;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSingleSignonUrlToWelcomePageResponse
     */
    public function GetSingleSignonUrlToWelcomePageResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSingleSignonUrlToWelcomePageResponse = new GetSingleSignonUrlToWelcomePageResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSingleSignonUrlToWelcomePageResponse, $methodName)) {
                $GetSingleSignonUrlToWelcomePageResponse->$methodName($paramValue);
            }
        }
        return $GetSingleSignonUrlToWelcomePageResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSingleSignonUrlToProductGroup
     */
    public function GetSingleSignonUrlToProductGroup($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSingleSignonUrlToProductGroup = new GetSingleSignonUrlToProductGroup();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSingleSignonUrlToProductGroup, $methodName)) {
                $GetSingleSignonUrlToProductGroup->$methodName($paramValue);
            }
        }
        return $GetSingleSignonUrlToProductGroup;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSingleSignonUrlToProductGroupResponse
     */
    public function GetSingleSignonUrlToProductGroupResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSingleSignonUrlToProductGroupResponse = new GetSingleSignonUrlToProductGroupResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSingleSignonUrlToProductGroupResponse, $methodName)) {
                $GetSingleSignonUrlToProductGroupResponse->$methodName($paramValue);
            }
        }
        return $GetSingleSignonUrlToProductGroupResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSingleSignonUrlToProductDetails
     */
    public function GetSingleSignonUrlToProductDetails($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSingleSignonUrlToProductDetails = new GetSingleSignonUrlToProductDetails();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSingleSignonUrlToProductDetails, $methodName)) {
                $GetSingleSignonUrlToProductDetails->$methodName($paramValue);
            }
        }
        return $GetSingleSignonUrlToProductDetails;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSingleSignonUrlToProductDetailsResponse
     */
    public function GetSingleSignonUrlToProductDetailsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSingleSignonUrlToProductDetailsResponse = new GetSingleSignonUrlToProductDetailsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSingleSignonUrlToProductDetailsResponse, $methodName)) {
                $GetSingleSignonUrlToProductDetailsResponse->$methodName($paramValue);
            }
        }
        return $GetSingleSignonUrlToProductDetailsResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSingleSignonUrlToProductDetailsUsingExternalId
     */
    public function GetSingleSignonUrlToProductDetailsUsingExternalId($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSingleSignonUrlToProductDetailsUsingExternalId = new GetSingleSignonUrlToProductDetailsUsingExternalId();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSingleSignonUrlToProductDetailsUsingExternalId, $methodName)) {
                $GetSingleSignonUrlToProductDetailsUsingExternalId->$methodName($paramValue);
            }
        }
        return $GetSingleSignonUrlToProductDetailsUsingExternalId;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSingleSignonUrlToProductDetailsUsingExternalIdResponse
     */
    public function GetSingleSignonUrlToProductDetailsUsingExternalIdResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSingleSignonUrlToProductDetailsUsingExternalIdResponse = new GetSingleSignonUrlToProductDetailsUsingExternalIdResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSingleSignonUrlToProductDetailsUsingExternalIdResponse, $methodName)) {
                $GetSingleSignonUrlToProductDetailsUsingExternalIdResponse->$methodName($paramValue);
            }
        }
        return $GetSingleSignonUrlToProductDetailsUsingExternalIdResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSingleSigonUrlToOrderWizard
     */
    public function GetSingleSigonUrlToOrderWizard($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSingleSigonUrlToOrderWizard = new GetSingleSigonUrlToOrderWizard();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSingleSigonUrlToOrderWizard, $methodName)) {
                $GetSingleSigonUrlToOrderWizard->$methodName($paramValue);
            }
        }
        return $GetSingleSigonUrlToOrderWizard;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSingleSigonUrlToOrderWizardResponse
     */
    public function GetSingleSigonUrlToOrderWizardResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSingleSigonUrlToOrderWizardResponse = new GetSingleSigonUrlToOrderWizardResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSingleSigonUrlToOrderWizardResponse, $methodName)) {
                $GetSingleSigonUrlToOrderWizardResponse->$methodName($paramValue);
            }
        }
        return $GetSingleSigonUrlToOrderWizardResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSingleSignonUrlToFinalizePage
     */
    public function GetSingleSignonUrlToFinalizePage($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSingleSignonUrlToFinalizePage = new GetSingleSignonUrlToFinalizePage();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSingleSignonUrlToFinalizePage, $methodName)) {
                $GetSingleSignonUrlToFinalizePage->$methodName($paramValue);
            }
        }
        return $GetSingleSignonUrlToFinalizePage;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSingleSignonUrlToFinalizePageResponse
     */
    public function GetSingleSignonUrlToFinalizePageResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSingleSignonUrlToFinalizePageResponse = new GetSingleSignonUrlToFinalizePageResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSingleSignonUrlToFinalizePageResponse, $methodName)) {
                $GetSingleSignonUrlToFinalizePageResponse->$methodName($paramValue);
            }
        }
        return $GetSingleSignonUrlToFinalizePageResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSingleSignOnUrl
     */
    public function GetSingleSignOnUrl($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSingleSignOnUrl = new GetSingleSignOnUrl();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSingleSignOnUrl, $methodName)) {
                $GetSingleSignOnUrl->$methodName($paramValue);
            }
        }
        return $GetSingleSignOnUrl;
    }


    /**
     * @param array $paramAutoSet
     * @return GetSingleSignOnUrlResponse
     */
    public function GetSingleSignOnUrlResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSingleSignOnUrlResponse = new GetSingleSignOnUrlResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSingleSignOnUrlResponse, $methodName)) {
                $GetSingleSignOnUrlResponse->$methodName($paramValue);
            }
        }
        return $GetSingleSignOnUrlResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return MergeUserData
     */
    public function MergeUserData($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $MergeUserData = new MergeUserData();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($MergeUserData, $methodName)) {
                $MergeUserData->$methodName($paramValue);
            }
        }
        return $MergeUserData;
    }


    /**
     * @param array $paramAutoSet
     * @return MergeUserDataResponse
     */
    public function MergeUserDataResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $MergeUserDataResponse = new MergeUserDataResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($MergeUserDataResponse, $methodName)) {
                $MergeUserDataResponse->$methodName($paramValue);
            }
        }
        return $MergeUserDataResponse;
    }


}

?>
