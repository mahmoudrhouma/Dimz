<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)] 
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')] 
    private $id;

    #[ORM\Column(type: 'integer')]
    private $numCommande;

    #[ORM\Column(type: 'datetime')]
    private $dateVente;

    #[ORM\ManyToMany(targetEntity: Article::class, mappedBy:'commandes')]
    private $articles;

    #[ORM\OneToMany(targetEntity: LigneCommande::class, mappedBy:'commande')] 
    private $lignecommandes;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy:'commandes')] 
    private $user;

    public function __construct ()
    {
        $this->commandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumCommande(): ?int
    {
        return $this->numCommande;
    }

    public function setNumCommande(int $numCommande): self
    {
        $this->numCommande = $numCommande;

        return $this;
    }

    public function getDateVente(): ?\DateTimeInterface
    {
        return $this->dateVente;
    }

    public function setDateVente(\DateTimeInterface $dateVente): self
    {
        $this->dateVente = $dateVente;

        return $this;
    }

    public function getArticles(): Collection
    {
        return $this->articles;
    }
    
    public function getLigneCommandes(): Collection
    {
        return $this->lignecommandes;
    } 

    public function getUser(): Object
    {
        return $this->user;
    } 
}
