<?php namespace ChannelAdvisor\Services\Admin;

use ChannelAdvisor\Services\Service;

class Admin extends Service
{
    public function getAuthorizationList($localID = null)
    {
        return $this->request()->GetAuthorizationList(array(
            'localID' => $localID,
        ));
    }

    public function requestAccess($localID)
    {
        return $this->request()->RequestAccess(array(
            'localID' => $localID,
        ));
    }
}