<?php
namespace App\service;

use App\Entity\Car;
use Doctrine\orm\EntityManagerInterface;

class CarService
{
    private $_entityManager;
    private $_listCar= [];

    public function __construct(EntityManagerInterface $em)
    {
        $this->_entityManager= $em;
        
    }

}    