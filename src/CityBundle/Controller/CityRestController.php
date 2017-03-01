<?php

namespace CityBundle\Controller;

use CityBundle\Model\City;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CityRestController extends Controller
{

    public function getCityAction($codePosal)
    {
        $patternValidation = '#\d{5,5}#';

        if (!preg_match($patternValidation, $codePosal) || strlen($codePosal) <> 5) {
            $errors['errors']['code_postal'] = "5 digits only";

            return $errors;
        } else {
            $city = new City($codePosal);
            return $city;
        }
    }
}