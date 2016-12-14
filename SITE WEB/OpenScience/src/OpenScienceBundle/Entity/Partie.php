<?php

namespace OpenScienceBundle\Entity;

/**
 * Partie
 */
class Partie
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $fkUser;

    /**
     * @var int
     */
    private $fkwa;

    /**
     * @var string
     */
    private $waLetters;

    /**
     * @var bool
     */
    private $waOkNok;

    /**
     * @var int
     */
    private $fkwb;

    /**
     * @var string
     */
    private $wbLetters;

    /**
     * @var bool
     */
    private $wbOkNok;

    /**
     * @var int
     */
    private $fkwc;

    /**
     * @var string
     */
    private $wcLetters;

    /**
     * @var bool
     */
    private $wcOkNok;

    /**
     * @var int
     */
    private $fkwd;

    /**
     * @var string
     */
    private $wdLetters;

    /**
     * @var bool
     */
    private $wdOkNok;

    /**
     * @var int
     */
    private $fkwe;

    /**
     * @var string
     */
    private $weletters;

    /**
     * @var bool
     */
    private $weOkNok;

    /**
     * @var datetime
     */
	private $date;
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fkUser
     *
     * @param integer $fkUser
     *
     * @return Partie
     */
    public function setFkUser($fkUser)
    {
        $this->fkUser = $fkUser;

        return $this;
    }

    /**
     * Get fkUser
     *
     * @return int
     */
    public function getFkUser()
    {
        return $this->fkUser;
    }

    /**
     * Set fkWa
     *
     * @param integer $fkwa
     *
     * @return Partie
     */
    public function setFkWa($fkwa)
    {
        $this->fkWa = $fkwa;

        return $this;
    }

    /**
     * Get fkWa
     *
     * @return int
     */
    public function getFkWa()
    {
        return $this->fkwa;
    }

    /**
     * Set w1Letters
     *
     * @param string $w1Letters
     *
     * @return Partie
     */
    public function setW1Letters($waLetters)
    {
        $this->waLetters = $waLetters;

        return $this;
    }

    /**
     * Get w1Letters
     *
     * @return string
     */
    public function getW1Letters()
    {
        return $this->waLetters;
    }

    /**
     * Set waOkNok
     *
     * @param boolean $waOkNok
     *
     * @return Partie
     */
    public function setWaOkNok($waOkNok)
    {
        $this->waOkNok = $waOkNok;

        return $this;
    }

    /**
     * Get waOkNok
     *
     * @return bool
     */
    public function getWaOkNok()
    {
        return $this->waOkNok;
    }

    /**
     * Set fkwb
     *
     * @param integer $fkwb
     *
     * @return Partie
     */
    public function setFkwb($fkwb)
    {
        $this->fkwb = $fkwb;

        return $this;
    }

    /**
     * Get fkwb
     *
     * @return int
     */
    public function getFkwb()
    {
        return $this->fkwb;
    }

    /**
     * Set wbLetters
     *
     * @param string $wbLetters
     *
     * @return Partie
     */
    public function setWbLetters($wbLetters)
    {
        $this->wbLetters = $wbLetters;

        return $this;
    }

    /**
     * Get wbLetters
     *
     * @return string
     */
    public function getWbLetters()
    {
        return $this->wbLetters;
    }

    /**
     * Set wbOkNok
     *
     * @param boolean $wbOkNok
     *
     * @return Partie
     */
    public function setWbOkNok($wbOkNok)
    {
        $this->wbOkNok = $wbOkNok;

        return $this;
    }

    /**
     * Get wbOkNok
     *
     * @return bool
     */
    public function getWbOkNok()
    {
        return $this->wbOkNok;
    }

    /**
     * Set fkwc
     *
     * @param integer $fkwc
     *
     * @return Partie
     */
    public function setFkwc($fkwc)
    {
        $this->fkwc = $fkwc;

        return $this;
    }

    /**
     * Get fkwc
     *
     * @return int
     */
    public function getFkwc()
    {
        return $this->fkwc;
    }

    /**
     * Set wcLetters
     *
     * @param string $wcLetters
     *
     * @return Partie
     */
    public function setWcLetters($wcLetters)
    {
        $this->wcLetters = $wcLetters;

        return $this;
    }

    /**
     * Get wcLetters
     *
     * @return string
     */
    public function getWcLetters()
    {
        return $this->wcLetters;
    }

    /**
     * Set wcOkNok
     *
     * @param boolean $wcOkNok
     *
     * @return Partie
     */
    public function setWcOkNok($wcOkNok)
    {
        $this->wcOkNok = $wcOkNok;

        return $this;
    }

    /**
     * Get wcOkNok
     *
     * @return bool
     */
    public function getWcOkNok()
    {
        return $this->wcOkNok;
    }

    /**
     * Set fkwd
     *
     * @param integer $fkwd
     *
     * @return Partie
     */
    public function setFkwd($fkwd)
    {
        $this->fkwd = $fkwd;

        return $this;
    }

    /**
     * Get fkwd
     *
     * @return int
     */
    public function getFkwd()
    {
        return $this->fkwd;
    }

    /**
     * Set wdLetters
     *
     * @param string $wdLetters
     *
     * @return Partie
     */
    public function setWdLetters($wdLetters)
    {
        $this->wdLetters = $wdLetters;

        return $this;
    }

    /**
     * Get wdLetters
     *
     * @return string
     */
    public function getWdLetters()
    {
        return $this->wdLetters;
    }

    /**
     * Set wdOkNok
     *
     * @param boolean $wdOkNok
     *
     * @return Partie
     */
    public function setWdOkNok($wdOkNok)
    {
        $this->wdOkNok = $wdOkNok;

        return $this;
    }

    /**
     * Get wdOkNok
     *
     * @return bool
     */
    public function getWdOkNok()
    {
        return $this->wdOkNok;
    }

    /**
     * Set fkwe
     *
     * @param integer $fkwe
     *
     * @return Partie
     */
    public function setFkwe($fkwe)
    {
        $this->fkwe = $fkwe;

        return $this;
    }

    /**
     * Get fkwe
     *
     * @return int
     */
    public function getFkwe()
    {
        return $this->fkwe;
    }

    /**
     * Set weletters
     *
     * @param string $weletters
     *
     * @return Partie
     */
    public function setWeletters($weletters)
    {
        $this->weletters = $weletters;

        return $this;
    }

    /**
     * Get weletters
     *
     * @return string
     */
    public function getWeletters()
    {
        return $this->weletters;
    }

    /**
     * Set weOkNok
     *
     * @param boolean $weOkNok
     *
     * @return Partie
     */
    public function setWeOkNok($weOkNok)
    {
        $this->weOkNok = $weOkNok;

        return $this;
    }

    /**
     * Get weOkNok
     *
     * @return bool
     */
    public function getWeOkNok()
    {
        return $this->weOkNok;
    }

    /**
     * Set waLetters
     *
     * @param string $waLetters
     *
     * @return Partie
     */
    public function setWaLetters($waLetters)
    {
        $this->waLetters = $waLetters;

        return $this;
    }

    /**
     * Get waLetters
     *
     * @return string
     */
    public function getWaLetters()
    {
        return $this->waLetters;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Partie
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
}
