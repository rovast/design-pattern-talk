<?php
/**
 * Created by PhpStorm.
 * User: rovast
 * Date: 2018-12-24
 * Time: 22:22.
 */

namespace Rovast\DesignPatternTalk\Chapter25\v2;

class UnitedNationsSecurityCouncil extends UnitedNations
{
    /**
     * @var USA
     */
    private $colleague1;

    /**
     * @return USA
     */
    public function getColleague1(): USA
    {
        return $this->colleague1;
    }

    /**
     * @param USA $colleague1
     *
     * @return UnitedNationsSecurityCouncil
     */
    public function setColleague1(USA $colleague1): self
    {
        $this->colleague1 = $colleague1;

        return $this;
    }

    /**
     * @var Iraq
     */
    private $colleague2;

    /**
     * @return Iraq
     */
    public function getColleague2(): Iraq
    {
        return $this->colleague2;
    }

    /**
     * @param Iraq $colleague2
     *
     * @return UnitedNationsSecurityCouncil
     */
    public function setColleague2(Iraq $colleague2): self
    {
        $this->colleague2 = $colleague2;

        return $this;
    }

    public function declare(string $message, Country $country)
    {
        if ($country === $this->colleague1) {
            $this->colleague2->getMessage($message);
        } else {
            $this->colleague1->getMessage($message);
        }
    }
}
