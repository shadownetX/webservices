<?php

namespace CityBundle\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class City
 * @package CityBundle\Model
 * @Serializer\ExclusionPolicy("all")
 */
class City
{
    /**
     * @Serializer\Expose()
     */
    protected $codePostal;

    public function __construct($cp)
    {
        $this->codePostal = $cp;
    }

}