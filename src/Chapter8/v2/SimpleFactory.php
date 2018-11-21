<?php

namespace Rovast\DesignPatternTalk\Chapter8\v2;

/**
 * Class SimpleFactory
 *
 * @package \Rovast\DesignPatternTalk\Chapter8\v2
 */
class SimpleFactory
{
    /**
     * @param string $type
     * @return \Rovast\DesignPatternTalk\Chapter8\v2\Leifeng
     * @author ROVAST
     */
    public function createLeifeng(string $type)
    {
        $map = [
            '志愿者' => new Volunteer(),
            '学生'   => new Undergraduate(),
        ];

        return $map[$type];
    }
}
