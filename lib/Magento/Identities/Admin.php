<?php

namespace Magium\Magento\Identities;


class Admin extends AbstractEntity
{

    const IDENTITY = 'Admin';

    protected $account   = 'admin';
    protected $password  = '123123qa';

    public function getAccount()
    {
        return $this->account;
    }
    
}