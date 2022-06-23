<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $libelle;

    #[ORM\Column(type: 'string', length: 255)]
    private $description;

    #[ORM\Column(type: 'string', length: 255)]
    private $reference;

    #[ORM\Column(type: 'integer')]
    private $quantite;

    #[ORM\Column(type: 'boolean')]
    private $etat;

    #[ORM\Column(type: 'decimal', precision: 10, scale: '0')]  
    private $prixAchat;

    #[ORM\Column(type: 'decimal', precision: 10, scale: '0')]
    private $prixVente;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $sold;

    #[ORM\Column(type: 'datetime')]
    private $dateAjout;

    #[ORM\ManyToMany(targetEntity: Commande::class, inversedBy:'articles')]
    private $commandes;
    
    #[ORM\ManyToOne(targetEntity: Marque::class, inversedBy:'articles')] 
    private $marque;

    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy:'articles')] 
    private $categorie;

    #[ORM\OneToMany(targetEntity: Image::class, mappedBy:'article')] 
    private $images;

    public function __construct ()
    {
        $this->articles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle; 

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function isEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getPrixAchat(): ?string
    {
        return $this->prixAchat;
    }

    public function setPrixAchat(string $prixAchat): self
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    public function getPrixVente(): ?string
    {
        return $this->prixVente;
    }

    public function setPrixVente(string $prixVente): self
    {
        $this->prixVente = $prixVente;

        return $this;
    }

    public function getSold(): ?int
    {
        return $this->sold;
    }

    public function setSold(?int $sold): self
    {
        $this->sold = $sold;

        return $this;
    }

    public function getDateAjout(): ?\DateTimeInterface
    {
        return $this->dateAjout;
    }

    public function setDateAjout(\DateTimeInterface $dateAjout): self
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    public function getCommandes(): Collection
    {
        return $this->commandes;
    } 

    public function getMarque(): Object
    {
        return $this->marque;
    } 

    public function getCategorie(): Object
    {
        return $this->categorie;
    } 

    public function getImages(): Collection
    {
        return $this->images;
    } 
}
