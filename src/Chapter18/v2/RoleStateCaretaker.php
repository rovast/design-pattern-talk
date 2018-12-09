<?php

namespace Rovast\DesignPatternTalk\Chapter18\v2;

/**
 * Class RoleStateCaretaker.
 */
class RoleStateCaretaker
{
    /**
     * @var \Rovast\DesignPatternTalk\Chapter18\v2\RoleStateMemo roleStateMemo
     */
    public $roleStateMemo;

    public function setRoleStateMemo(RoleStateMemo $roleStateMemo)
    {
        $this->roleStateMemo = $roleStateMemo;
    }

    public function getRoleStateMomo()
    {
        return $this->roleStateMemo;
    }
}
