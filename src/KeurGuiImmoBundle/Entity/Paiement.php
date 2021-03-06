<?php

namespace KeurGuiImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="Paiement")
 * @ORM\Entity(repositoryClass="KeurGuiImmoBundle\Repository\PaiementRepository")
 */
class Paiement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePaiement", type="datetime")
     */
    private $datePaiement;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;

    /**
     * @var int
     *
     * @ORM\Column(name="periode", type="integer")
     */
    private $periode;

     /**
     * @ORM\ManyToOne(targetEntity="KeurGuiImmoBundle\Entity\Contrat")
     * @ORM\JoinColumn(name="idContrat", referencedColumnName="id")
     */
    private $contrat;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set datePaiement
     *
     * @param \DateTime $datePaiement
     *
     * @return Paiement
     */
    public function setDatePaiement($datePaiement)
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    /**
     * Get datePaiement
     *
     * @return \DateTime
     */
    public function getDatePaiement()
    {
        return $this->datePaiement;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Paiement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return int
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set periode
     *
     * @param integer $periode
     *
     * @return Paiement
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return int
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set contrat
     *
     * @param \KeurGuiImmoBundle\Entity\Contrat $contrat
     *
     * @return Paiement
     */
    public function setContrat(\KeurGuiImmoBundle\Entity\Contrat $contrat = null)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return \KeurGuiImmoBundle\Entity\Contrat
     */
    public function getContrat()
    {
        return $this->contrat;
    }
}
