<?php

namespace ChrisGruen\ChessManager\Domain\Model;


class Player extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{
    /**
     * @var string
     */
    protected $name;
    
    /**
     * @var string
     */
    protected $dwz;
    
    /**
     * @var string
     */
    protected $phone;
    
    /**
     * @var int
     */
    protected $status;
    
    /**
     * @var int
     */
    protected $sort;

    /**
     *
     * @return \ChrisGruen\ChessManager\Domain\ModelPlayer
     */
    public function __construct()
    {

    }
    
    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set name
     *
     * @param string $name name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Get dwz
     *
     * @return string
     */
    public function getDwz()
    {
        return $this->dwz;
    }
    
    /**
     * Set dwz
     *
     * @param string $name name
     */
    public function setDwz($dwz)
    {
        $this->dwz = $dwz;
    }
    
    
    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /**
     * Set phone
     *
     * @param string $phone phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * Set status
     *
     * @param string $status status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    
    /**
     * Get sort
     *
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }
    
    /**
     * Set sort
     *
     * @param string $sort sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }

}