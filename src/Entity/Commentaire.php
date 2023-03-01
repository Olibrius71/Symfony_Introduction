<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="com_article_pk", columns={"id_article_from_com"})})
 * @ORM\Entity
 */
class Commentaire
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
     * @ORM\Column(name="desc_commentaire", type="string", length=1000, nullable=false)
     */
    private $descCommentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pseudo_commentaire", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $pseudoCommentaire = 'NULL';

    /**
     * @var \Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_article_from_com", referencedColumnName="id")
     * })
     */
    private $idArticleFromCom;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDescCommentaire(): string
    {
        return $this->descCommentaire;
    }

    /**
     * @return \Article
     */
    public function getIdArticleFromCom(): \Article
    {
        return $this->idArticleFromCom;
    }

    /**
     * @return string|null
     */
    public function getPseudoCommentaire(): ?string
    {
        return $this->pseudoCommentaire;
    }

    /**
     * @param string $descCommentaire
     */
    public function setDescCommentaire(string $descCommentaire): void
    {
        $this->descCommentaire = $descCommentaire;
    }

    /**
     * @param \Article $idArticleFromCom
     */
    public function setIdArticleFromCom(Article $idArticleFromCom): void
    {
        $this->idArticleFromCom = $idArticleFromCom;
    }

    /**
     * @param string|null $pseudoCommentaire
     */
    public function setPseudoCommentaire(?string $pseudoCommentaire): void
    {
        $this->pseudoCommentaire = $pseudoCommentaire;
    }
}
