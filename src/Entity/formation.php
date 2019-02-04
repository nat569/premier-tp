<?php

namespace App\Entity;

use Syfony\Bridge\Doctrine\Validator\Constaints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

class Formation
    {
    protected $m_id; 
    protected $m_titre;
    protected $m_debut;
    protected $m_fin;
    protected $m_contenu;
    
    //asseceurs get
    public function get_m_titre()
    {
    return $this->m_titre;
    }
  
    public function get_m_debut()
    {
    return $this->m_debut;
    }
    
    public function get_m_fin()
    {
    return $this->m_fin;
    }
    
    public function get_m_contenu()
    {
    return $this->m_contenu;
    }
  
    //asseceurs set
    public function get_m_titre()
    {
    return $this->m_titre;
    }
  
    public function get_m_debut()
    {
    return $this->m_debut;
    }
    
    public function get_m_fin()
    {
    return $this->m_fin;
    }
    
    public function get_m_contenu()
    {
    return $this->m_contenu;
    }
  
    }
?>