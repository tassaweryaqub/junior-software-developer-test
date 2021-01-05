<?php

namespace App\Company;

/**
 * Class Webgrowth
 *
 * @package App\Company
 */
class Webgrowth implements CompanyInterface
{       

    /** @var string $name */
    protected $name = 'WebGrowth BV';


     /**
     * Set a new company name
     *
     * @param string $name
     *
     * @return string|void
     */
    public function setName(string $name ) : string 
    {
        $this->name = $name;
    }


           /**
     * Get the company name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
        
     /**
     * Show the company its information
     *
     * @return string
     */
    public function information()
    {
        return sprintf('Hallo, wij zijn van %s', $this->getName());
    }
} 
