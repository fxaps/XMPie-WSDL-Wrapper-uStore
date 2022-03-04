<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\UserWS;

class UserWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetUserByEmail' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetUserByEmail',
  'GetUserByEmailResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetUserByEmailResponse',
  'User' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\User',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\ReturnObject',
  'GetUserByEmailAndStore' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetUserByEmailAndStore',
  'GetUserByEmailAndStoreResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetUserByEmailAndStoreResponse',
  'GetUser' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetUser',
  'GetUserResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetUserResponse',
  'GetUserByExternalID' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetUserByExternalID',
  'GetUserByExternalIDResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetUserByExternalIDResponse',
  'ValidateUser' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\ValidateUser',
  'ValidateUserResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\ValidateUserResponse',
  'ValidateUserInStore' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\ValidateUserInStore',
  'ValidateUserInStoreResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\ValidateUserInStoreResponse',
  'GetUserByCustomer' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetUserByCustomer',
  'GetUserByCustomerResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetUserByCustomerResponse',
  'AddCustomer' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\AddCustomer',
  'AddCustomerResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\AddCustomerResponse',
  'AddUser' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\AddUser',
  'AddUserResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\AddUserResponse',
  'AddUserInStore' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\AddUserInStore',
  'AddUserInStoreResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\AddUserInStoreResponse',
  'UpdateCustomer' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\UpdateCustomer',
  'UpdateCustomerResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\UpdateCustomerResponse',
  'UpdateUser' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\UpdateUser',
  'UpdateUserResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\UpdateUserResponse',
  'UpdateUserDetails' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\UpdateUserDetails',
  'UpdateUserDetailsResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\UpdateUserDetailsResponse',
  'GetStoreAdministratorList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetStoreAdministratorList',
  'GetStoreAdministratorListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetStoreAdministratorListResponse',
  'ArrayOfUser' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\ArrayOfUser',
  'GetStoreOperatorList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetStoreOperatorList',
  'GetStoreOperatorListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetStoreOperatorListResponse',
  'GetSuperUserList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSuperUserList',
  'GetSuperUserListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSuperUserListResponse',
  'GetSingleSignonUrlToWelcomePage' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSingleSignonUrlToWelcomePage',
  'GetSingleSignonUrlToWelcomePageResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSingleSignonUrlToWelcomePageResponse',
  'GetSingleSignonUrlToProductGroup' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSingleSignonUrlToProductGroup',
  'GetSingleSignonUrlToProductGroupResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSingleSignonUrlToProductGroupResponse',
  'GetSingleSignonUrlToProductDetails' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSingleSignonUrlToProductDetails',
  'GetSingleSignonUrlToProductDetailsResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSingleSignonUrlToProductDetailsResponse',
  'GetSingleSignonUrlToProductDetailsUsingExternalId' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSingleSignonUrlToProductDetailsUsingExternalId',
  'GetSingleSignonUrlToProductDetailsUsingExternalIdResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSingleSignonUrlToProductDetailsUsingExternalIdResponse',
  'GetSingleSigonUrlToOrderWizard' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSingleSigonUrlToOrderWizard',
  'GetSingleSigonUrlToOrderWizardResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSingleSigonUrlToOrderWizardResponse',
  'GetSingleSignonUrlToFinalizePage' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSingleSignonUrlToFinalizePage',
  'GetSingleSignonUrlToFinalizePageResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSingleSignonUrlToFinalizePageResponse',
  'GetSingleSignOnUrl' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSingleSignOnUrl',
  'GetSingleSignOnUrlResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\GetSingleSignOnUrlResponse',
  'MergeUserData' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\MergeUserData',
  'MergeUserDataResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_14_0\\WSAPI\\UserWS\\MergeUserDataResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @throws SoapFault
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost/ustorewsapi/UserWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the data of the user, which is assigned to entire system (all stores, according to the given login email.
     *
     * @param GetUserByEmail $parameters
     * @return GetUserByEmailResponse
     */
    public function GetUserByEmail(GetUserByEmail $parameters)
    {
      return $this->__soapCall('GetUserByEmail', array($parameters));
    }

    /**
     * Returns the data of the user, which is assigned to the given store, according to the given login email.
     *
     * @param GetUserByEmailAndStore $parameters
     * @return GetUserByEmailAndStoreResponse
     */
    public function GetUserByEmailAndStore(GetUserByEmailAndStore $parameters)
    {
      return $this->__soapCall('GetUserByEmailAndStore', array($parameters));
    }

    /**
     * Returns the data of the given user.
     *
     * @param GetUser $parameters
     * @return GetUserResponse
     */
    public function GetUser(GetUser $parameters)
    {
      return $this->__soapCall('GetUser', array($parameters));
    }

    /**
     * Returns the data of the user by given external ID.
     *
     * @param GetUserByExternalID $parameters
     * @return GetUserByExternalIDResponse
     */
    public function GetUserByExternalID(GetUserByExternalID $parameters)
    {
      return $this->__soapCall('GetUserByExternalID', array($parameters));
    }

    /**
     * Checks if a user with the given username and password exists.
     *
     * @param ValidateUser $parameters
     * @return ValidateUserResponse
     */
    public function ValidateUser(ValidateUser $parameters)
    {
      return $this->__soapCall('ValidateUser', array($parameters));
    }

    /**
     * Checks whether a user with the given email address (login) and password, when the login is unique in given Store, exists.
     *
     * @param ValidateUserInStore $parameters
     * @return ValidateUserInStoreResponse
     */
    public function ValidateUserInStore(ValidateUserInStore $parameters)
    {
      return $this->__soapCall('ValidateUserInStore', array($parameters));
    }

    /**
     * Returns the user data of the given customer.
     *
     * @param GetUserByCustomer $parameters
     * @return GetUserByCustomerResponse
     */
    public function GetUserByCustomer(GetUserByCustomer $parameters)
    {
      return $this->__soapCall('GetUserByCustomer', array($parameters));
    }

    /**
     * Creates a new user of Customer type with the given details.
     *
     * @param AddCustomer $parameters
     * @return AddCustomerResponse
     */
    public function AddCustomer(AddCustomer $parameters)
    {
      return $this->__soapCall('AddCustomer', array($parameters));
    }

    /**
     * Creates a new user with the given details and globally unique email address.
     *
     * @param AddUser $parameters
     * @return AddUserResponse
     */
    public function AddUser(AddUser $parameters)
    {
      return $this->__soapCall('AddUser', array($parameters));
    }

    /**
     * Creates a new user with the given details and assigns it to a given store.
     *
     * @param AddUserInStore $parameters
     * @return AddUserInStoreResponse
     */
    public function AddUserInStore(AddUserInStore $parameters)
    {
      return $this->__soapCall('AddUserInStore', array($parameters));
    }

    /**
     * Updates details of the user with the given ID
     *
     * @param UpdateCustomer $parameters
     * @return UpdateCustomerResponse
     */
    public function UpdateCustomer(UpdateCustomer $parameters)
    {
      return $this->__soapCall('UpdateCustomer', array($parameters));
    }

    /**
     * Updates details of the user with the given ID
     *
     * @param UpdateUser $parameters
     * @return UpdateUserResponse
     */
    public function UpdateUser(UpdateUser $parameters)
    {
      return $this->__soapCall('UpdateUser', array($parameters));
    }

    /**
     * Updates the details of the user. The ID of the user and the data to update are provided by the instance of the uStoreAPI.User object
     *
     * @param UpdateUserDetails $parameters
     * @return UpdateUserDetailsResponse
     */
    public function UpdateUserDetails(UpdateUserDetails $parameters)
    {
      return $this->__soapCall('UpdateUserDetails', array($parameters));
    }

    /**
     * Returns the list of users who are assigned the role of Administrator of the given Store.
     *
     * @param GetStoreAdministratorList $parameters
     * @return GetStoreAdministratorListResponse
     */
    public function GetStoreAdministratorList(GetStoreAdministratorList $parameters)
    {
      return $this->__soapCall('GetStoreAdministratorList', array($parameters));
    }

    /**
     * Returns the list of users who are assigned the role of Operator of the given Store.
     *
     * @param GetStoreOperatorList $parameters
     * @return GetStoreOperatorListResponse
     */
    public function GetStoreOperatorList(GetStoreOperatorList $parameters)
    {
      return $this->__soapCall('GetStoreOperatorList', array($parameters));
    }

    /**
     * Returns the list of users who are assigned the role of Superuser.
     *
     * @param GetSuperUserList $parameters
     * @return GetSuperUserListResponse
     */
    public function GetSuperUserList(GetSuperUserList $parameters)
    {
      return $this->__soapCall('GetSuperUserList', array($parameters));
    }

    /**
     * Returns an encrypted Single Sign on URL for landing in the Welcome page of the given store using the given culture.
     *
     * @param GetSingleSignonUrlToWelcomePage $parameters
     * @return GetSingleSignonUrlToWelcomePageResponse
     */
    public function GetSingleSignonUrlToWelcomePage(GetSingleSignonUrlToWelcomePage $parameters)
    {
      return $this->__soapCall('GetSingleSignonUrlToWelcomePage', array($parameters));
    }

    /**
     * Returns an encrypted Single Sign on URL for landing in the Product List page of the given product group.
     *
     * @param GetSingleSignonUrlToProductGroup $parameters
     * @return GetSingleSignonUrlToProductGroupResponse
     */
    public function GetSingleSignonUrlToProductGroup(GetSingleSignonUrlToProductGroup $parameters)
    {
      return $this->__soapCall('GetSingleSignonUrlToProductGroup', array($parameters));
    }

    /**
     * Returns an encrypted Single Sign on URL for landing in the Product Details page of the given product.
     *
     * @param GetSingleSignonUrlToProductDetails $parameters
     * @return GetSingleSignonUrlToProductDetailsResponse
     */
    public function GetSingleSignonUrlToProductDetails(GetSingleSignonUrlToProductDetails $parameters)
    {
      return $this->__soapCall('GetSingleSignonUrlToProductDetails', array($parameters));
    }

    /**
     * Returns an encrypted Single Sign on URL for landing in the Product Details page of the given product using the given culture.
     *
     * @param GetSingleSignonUrlToProductDetailsUsingExternalId $parameters
     * @return GetSingleSignonUrlToProductDetailsUsingExternalIdResponse
     */
    public function GetSingleSignonUrlToProductDetailsUsingExternalId(GetSingleSignonUrlToProductDetailsUsingExternalId $parameters)
    {
      return $this->__soapCall('GetSingleSignonUrlToProductDetailsUsingExternalId', array($parameters));
    }

    /**
     * Returns an encrypted Single Sign on URL for landing in the first page of the order wizard with the given details.
     *
     * @param GetSingleSigonUrlToOrderWizard $parameters
     * @return GetSingleSigonUrlToOrderWizardResponse
     */
    public function GetSingleSigonUrlToOrderWizard(GetSingleSigonUrlToOrderWizard $parameters)
    {
      return $this->__soapCall('GetSingleSigonUrlToOrderWizard', array($parameters));
    }

    /**
     * Returns an encrypted Single Sign on URL for landing in the Finalize page with the given details.
     *
     * @param GetSingleSignonUrlToFinalizePage $parameters
     * @return GetSingleSignonUrlToFinalizePageResponse
     */
    public function GetSingleSignonUrlToFinalizePage(GetSingleSignonUrlToFinalizePage $parameters)
    {
      return $this->__soapCall('GetSingleSignonUrlToFinalizePage', array($parameters));
    }

    /**
     * Obsolete. Use new GetSingleSignonUrlTo... services. Returns an encrypted Single Sign on URL with the given details.
     *
     * @param GetSingleSignOnUrl $parameters
     * @return GetSingleSignOnUrlResponse
     */
    public function GetSingleSignOnUrl(GetSingleSignOnUrl $parameters)
    {
      return $this->__soapCall('GetSingleSignOnUrl', array($parameters));
    }

    /**
     * Moves Cart items (including Drafts), created Orders, uploaded Recipient Lists and images from a source user (for example, Anonymous user) to a target user (for example, Registered User).
     *
     * @param MergeUserData $parameters
     * @return MergeUserDataResponse
     */
    public function MergeUserData(MergeUserData $parameters)
    {
      return $this->__soapCall('MergeUserData', array($parameters));
    }

}
