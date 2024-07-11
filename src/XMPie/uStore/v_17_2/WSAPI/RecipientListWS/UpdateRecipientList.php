<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS;

class UpdateRecipientList
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var RecipientList $recipientList
     */
    protected $recipientList = null;

    /**
     * @param string $username
     * @param string $password
     * @param RecipientList $recipientList
     */
    public function __construct($username = null, $password = null, $recipientList = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->recipientList = $recipientList;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\UpdateRecipientList
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\UpdateRecipientList
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return RecipientList
     */
    public function getRecipientList()
    {
      return $this->recipientList;
    }

    /**
     * @param RecipientList $recipientList
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\RecipientListWS\UpdateRecipientList
     */
    public function setRecipientList($recipientList)
    {
      $this->recipientList = $recipientList;
      return $this;
    }

}
