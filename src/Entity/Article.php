<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="art_categ_fk", columns={"id_categ_from_art"})})
 * @ORM\Entity
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_article", type="string", length=100, nullable=false)
     */
    private $titreArticle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="desc_article", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $descArticle = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pseudo_article", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $pseudoArticle = 'NULL';

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categ_from_art", referencedColumnName="id")
     * })
     */
    private $idCategFromArt;


    public function getId()
    {
        return $this->id;
    }

    public function getTitreArticle()
    {
        return $this->titreArticle;
    }

    public function getDescArticle()
    {
        return $this->descArticle;
    }

    public function getIdCategFromArt()
    {
        return $this->idCategFromArt;
    }

    /**
 * @return string|null
    */
    public function getPseudoArticle(): ?string
    {
        return $this->pseudoArticle;
    }


    /**
     * @param string|null $descArticle
     */
    public function setDescArticle(?string $descArticle): void
    {
        $this->descArticle = $descArticle;
    }


    /**
     * @param string $titreArticle
     */
    public function setTitreArticle(string $titreArticle): void
    {
        $this->titreArticle = $titreArticle;
    }

    /**
     * @param string|null $pseudoArticle
     */
    public function setPseudoArticle(?string $pseudoArticle): void
    {
        $this->pseudoArticle = $pseudoArticle;
    }

    /**
     * @param Categorie $idCategFromArt
     */
    public function setIdCategFromArt(Categorie $idCategFromArt): void
    {
        $this->idCategFromArt = $idCategFromArt;
    }


    public function __toString(): string
    {
        return $this->titreArticle . " écrit par " . $this->pseudoArticle;
    }
}
