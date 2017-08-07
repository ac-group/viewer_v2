<?php

namespace ViewerBundle\Entity;

/**
 * Layer
 */
class Layer
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $sourcetype;
    
    /**
     * @var string
     */
    private $params;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Layer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set source
     *
     * @param string $source
     *
     * @return Layer
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set sourcetype
     *
     * @param string $sourcetype
     *
     * @return Layer
     */
    public function setSourcetype($sourcetype)
    {
        $this->sourcetype = $sourcetype;

        return $this;
    }

    /**
     * Get sourcetype
     *
     * @return string
     */
    public function getSourcetype()
    {
        return $this->sourcetype;
    }
    
    /**
     * Set params
     *
     * @param string $params
     *
     * @return Layer
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Get params
     *
     * @return string
     */
    public function getParams()
    {
        return $this->params;
    }
    /**
     * @var boolean
     */
    private $active;


    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Layer
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }
    
    public function __toString() {
            if(is_null($this->getName())) {
        return 'NULL';
    }
        return $this->getName();
    }
    /**
     * @var string
     */
    private $type;


    /**
     * Set type
     *
     * @param string $type
     *
     * @return Layer
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
