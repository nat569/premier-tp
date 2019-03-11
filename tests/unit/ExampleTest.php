<?php namespace App\Tests;
use App\Entity\Contact;
use App\Entity\Experience;
use App\Entity\Formation;
use App\Entity\Loisir;


class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \App\Tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $entity = new Contact (); 
        
        $this->assertEmpty($entity->getId());
        
        $entity->setName('Michel');
        $entity->setEmail('Michelatwanadoo.org');
        $entity->setNumeroTelephone(36303630);
        
        $this->assertEquals('Michel', $entity->getName());
        $this->assertEquals('Michelatwanadoo.org', $entity->getEmail());
        $this->assertEquals(36303630, $entity->getNumeroTelephone());
        
        
        $entity = new Experience (); 
        
        $this->assertEmpty($entity->getId());
        $entity->setName('Michel');
        $entity->setDebut(\DateTime::createFromFormat('d/m/y', '5/06/17'));
        $entity->setFin(\DateTime::createFromFormat('d/m/y', '10/02/19'));
        $entity->setEntreprise('Carrefour');
        $entity->setDomaine('Technologie');
        
        $this->assertEquals('Michel', $entity->getName());
        $this->assertEquals((\DateTime::createFromFormat('d/m/y', '5/06/17')), $entity->getDebut());
        $this->assertEquals((\DateTime::createFromFormat('d/m/y', '10/02/19')), $entity->getFin());
        $this->assertEquals('Carrefour', $entity->getEntreprise());
        $this->assertEquals('Technologie', $entity->getDomaine());
        
        
        
        $entity = new Formation (); 
        
        $this->assertEmpty($entity->getId());
        
        $entity->setName('Choriste');
        $entity->setDebut(6061999);
        $entity->setFin(7071999);
        $entity->setContenu('pizaiolo d exeption');
        
        $this->assertEquals('Choriste', $entity->getName());
        $this->assertEquals(6061999, $entity->getDebut());
        $this->assertEquals(7071999, $entity->getFin());
        $this->assertEquals('pizaiolo d exeption', $entity->getContenu());
      
        
        
        $entity = new Loisir (); 
        
        $this->assertEmpty($entity->getId());
        
        $entity->setName('Jongler');
        $entity->setCategory('Troubadour');
        $entity->setCompetencesQueCaTApportes('PleinsDeTrucsStylés');
        
        $this->assertEquals('Jongler', $entity->getName());
        $this->assertEquals('Troubadour', $entity->getCategory());
        $this->assertEquals('PleinsDeTrucsStylés', $entity->getCompetencesQueCaTApportes());
        
    }
}