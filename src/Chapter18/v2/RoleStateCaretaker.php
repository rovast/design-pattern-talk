<?php

namespace Rovast\DesignPatternTalk\Chapter18\v2;

/**
 * Class RoleStateCaretaker
 *
 * @package \Rovast\DesignPatternTalk\Chapter18\v2
 */
class RoleStateCaretaker
{
    /**
     * @var \Rovast\DesignPatternTalk\Chapter18\v2\RoleStateMemo  roleStateMemo
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
