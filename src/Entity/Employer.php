<?php

namespace App\Entity;

use App\Repository\EmployerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmployerRepository::class)
 */
class Employer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CompteAffaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CompteEvenement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CompteDernierEvenement;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumeroDeFiche;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $LibelleCivilite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ProprietaireActuelDuVehicule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NumNomDeLaVoie;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $ComplementAdresse1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CodePostal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ville;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $TelephoneDomicile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $TelephonePortable;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $TelephoneJob;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Email;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateDeMiseEnCirculation;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateAchat;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateDernierEvenement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LibelleMarque;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $LibelleModele;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Version;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Vin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Immatriculation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TypeDeProspect;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Kilometrage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $LibelleEnergie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $VendeurVn;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $VendeurVo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CommentaireDeFacturation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $TypeVnVo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $NumeroDeDossierVnVo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $IntermediaireDeVenteVn;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateEvenementVeh;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $OrigineEvenementVeh;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompteAffaire(): ?string
    {
        return $this->CompteAffaire;
    }

    public function setCompteAffaire(string $CompteAffaire): self
    {
        $this->CompteAffaire = $CompteAffaire;

        return $this;
    }

    public function getCompteEvenement(): ?string
    {
        return $this->CompteEvenement;
    }

    public function setCompteEvenement(string $CompteEvenement): self
    {
        $this->CompteEvenement = $CompteEvenement;

        return $this;
    }

    public function getCompteDernierEvenement(): ?string
    {
        return $this->CompteDernierEvenement;
    }

    public function setCompteDernierEvenement(string $CompteDernierEvenement): self
    {
        $this->CompteDernierEvenement = $CompteDernierEvenement;

        return $this;
    }

    public function getNumeroDeFiche(): ?int
    {
        return $this->NumeroDeFiche;
    }

    public function setNumeroDeFiche(int $NumeroDeFiche): self
    {
        $this->NumeroDeFiche = $NumeroDeFiche;

        return $this;
    }

    public function getLibelleCivilite(): ?string
    {
        return $this->LibelleCivilite;
    }

    public function setLibelleCivilite(string $LibelleCivilite): self
    {
        $this->LibelleCivilite = $LibelleCivilite;

        return $this;
    }

    public function getProprietaireActuelDuVehicule(): ?string
    {
        return $this->ProprietaireActuelDuVehicule;
    }

    public function setProprietaireActuelDuVehicule(string $ProprietaireActuelDuVehicule): self
    {
        $this->ProprietaireActuelDuVehicule = $ProprietaireActuelDuVehicule;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getNumNomDeLaVoie(): ?string
    {
        return $this->NumNomDeLaVoie;
    }

    public function setNumNomDeLaVoie(string $NumNomDeLaVoie): self
    {
        $this->NumNomDeLaVoie = $NumNomDeLaVoie;

        return $this;
    }

    public function getComplementAdresse1(): ?string
    {
        return $this->ComplementAdresse1;
    }

    public function setComplementAdresse1(string $ComplementAdresse1): self
    {
        $this->ComplementAdresse1 = $ComplementAdresse1;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->CodePostal;
    }

    public function setCodePostal(string $CodePostal): self
    {
        $this->CodePostal = $CodePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): self
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getTelephoneDomicile(): ?string
    {
        return $this->TelephoneDomicile;
    }

    public function setTelephoneDomicile(?string $TelephoneDomicile): self
    {
        $this->TelephoneDomicile = $TelephoneDomicile;

        return $this;
    }

    public function getTelephonePortable(): ?string
    {
        return $this->TelephonePortable;
    }

    public function setTelephonePortable(?string $TelephonePortable): self
    {
        $this->TelephonePortable = $TelephonePortable;

        return $this;
    }

    public function getTelephoneJob(): ?string
    {
        return $this->TelephoneJob;
    }

    public function setTelephoneJob(?string $TelephoneJob): self
    {
        $this->TelephoneJob = $TelephoneJob;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getDateDeMiseEnCirculation(): ?\DateTimeInterface
    {
        return $this->DateDeMiseEnCirculation;
    }

    public function setDateDeMiseEnCirculation(?\DateTimeInterface $DateDeMiseEnCirculation): self
    {
        $this->DateDeMiseEnCirculation = $DateDeMiseEnCirculation;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->DateAchat;
    }

    public function setDateAchat(?\DateTimeInterface $DateAchat): self
    {
        $this->DateAchat = $DateAchat;

        return $this;
    }

    public function getDateDernierEvenement(): ?\DateTimeInterface
    {
        return $this->DateDernierEvenement;
    }

    public function setDateDernierEvenement(?\DateTimeInterface $DateDernierEvenement): self
    {
        $this->DateDernierEvenement = $DateDernierEvenement;

        return $this;
    }

    public function getLibelleMarque(): ?string
    {
        return $this->LibelleMarque;
    }

    public function setLibelleMarque(string $LibelleMarque): self
    {
        $this->LibelleMarque = $LibelleMarque;

        return $this;
    }

    public function getLibelleModele(): ?string
    {
        return $this->LibelleModele;
    }

    public function setLibelleModele(?string $LibelleModele): self
    {
        $this->LibelleModele = $LibelleModele;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->Version;
    }

    public function setVersion(?string $Version): self
    {
        $this->Version = $Version;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->Vin;
    }

    public function setVin(string $Vin): self
    {
        $this->Vin = $Vin;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->Immatriculation;
    }

    public function setImmatriculation(?string $Immatriculation): self
    {
        $this->Immatriculation = $Immatriculation;

        return $this;
    }

    public function getTypeDeProspect(): ?string
    {
        return $this->TypeDeProspect;
    }

    public function setTypeDeProspect(string $TypeDeProspect): self
    {
        $this->TypeDeProspect = $TypeDeProspect;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->Kilometrage;
    }

    public function setKilometrage(?int $Kilometrage): self
    {
        $this->Kilometrage = $Kilometrage;

        return $this;
    }

    public function getLibelleEnergie(): ?string
    {
        return $this->LibelleEnergie;
    }

    public function setLibelleEnergie(?string $LibelleEnergie): self
    {
        $this->LibelleEnergie = $LibelleEnergie;

        return $this;
    }

    public function getVendeurVn(): ?string
    {
        return $this->VendeurVn;
    }

    public function setVendeurVn(?string $VendeurVn): self
    {
        $this->VendeurVn = $VendeurVn;

        return $this;
    }

    public function getVendeurVo(): ?string
    {
        return $this->VendeurVo;
    }

    public function setVendeurVo(?string $VendeurVo): self
    {
        $this->VendeurVo = $VendeurVo;

        return $this;
    }

    public function getCommentaireDeFacturation(): ?string
    {
        return $this->CommentaireDeFacturation;
    }

    public function setCommentaireDeFacturation(?string $CommentaireDeFacturation): self
    {
        $this->CommentaireDeFacturation = $CommentaireDeFacturation;

        return $this;
    }

    public function getTypeVnVo(): ?string
    {
        return $this->TypeVnVo;
    }

    public function setTypeVnVo(?string $TypeVnVo): self
    {
        $this->TypeVnVo = $TypeVnVo;

        return $this;
    }

    public function getNumeroDeDossierVnVo(): ?string
    {
        return $this->NumeroDeDossierVnVo;
    }

    public function setNumeroDeDossierVnVo(?string $NumeroDeDossierVnVo): self
    {
        $this->NumeroDeDossierVnVo = $NumeroDeDossierVnVo;

        return $this;
    }

    public function getIntermediaireDeVenteVn(): ?string
    {
        return $this->IntermediaireDeVenteVn;
    }

    public function setIntermediaireDeVenteVn(?string $IntermediaireDeVenteVn): self
    {
        $this->IntermediaireDeVenteVn = $IntermediaireDeVenteVn;

        return $this;
    }

    public function getDateEvenementVeh(): ?\DateTimeInterface
    {
        return $this->DateEvenementVeh;
    }

    public function setDateEvenementVeh(?\DateTimeInterface $DateEvenementVeh): self
    {
        $this->DateEvenementVeh = $DateEvenementVeh;

        return $this;
    }

    public function getOrigineEvenementVeh(): ?string
    {
        return $this->OrigineEvenementVeh;
    }

    public function setOrigineEvenementVeh(string $OrigineEvenementVeh): self
    {
        $this->OrigineEvenementVeh = $OrigineEvenementVeh;

        return $this;
    }
}
