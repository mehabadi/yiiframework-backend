<?php

class WebUser extends CWebUser
{
    /**
     * Overrides a Yii method that is used for roles in controllers (accessRules).
     *
     * @param string $operation Name of the operation required (here, a role).
     * @param mixed $params (opt) Parameters for this operation, usually the object to access.
     * @return bool Permission granted?
     */
    public function checkAccess($operation, $params=array())
    {
        if (empty($this->id)) {
            // Not identified => no rights
            return false;
        }
        $role = $this->getState("roles");
        
        if (strtolower($role) === 'admin') {
            return true; // admin role has access to everything
        }
        // allow access if the operation request is the current user's role
        return (strtolower($operation) === strtolower($role));
    }
    
    public function allowUser($min_level) { //-1 no login required 0..3: admin level
        $current_level = -1;
        if ($this->userData !== null)
            $current_level = $this->userData->admin_level;
        if ($min_level > $current_level) {
            throw new CHttpException(403, 'You have no permission to view this content');
        }
    }
}
?>
