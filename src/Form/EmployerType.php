<?php

namespace App\Form;

use App\Entity\Employer;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EmployerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('CompteAffaire', TextType::class)
            ->add('CompteEvenement', TextType::class)
            ->add('CompteDernierEvenement', TextType::class)
            ->add('NumeroDeFiche', IntegerType::class)
            ->add('LibelleCivilite', TextType::class)
            ->add('ProprietaireActuelDuVehicule', TextType::class)
            ->add('Nom', TextType::class)
            ->add('Prenom', TextType::class)
            ->add('NumNomDeLaVoie', IntegerType::class)
            ->add('ComplementAdresse1', TextType::class)
            ->add('CodePostal', TextType::class)
            ->add('Ville', TextType::class)
            ->add('TelephoneDomicile')
            ->add('TelephonePortable')
            ->add('TelephoneJob')
            ->add('Email', EmailType::class)
            ->add('DateDeMiseEnCirculation', DateType::class)
            ->add('DateAchat', DateType::class)
            ->add('DateDernierEvenement', DateType::class)
            ->add('LibelleMarque', TextType::class)
            ->add('LibelleModele', TextType::class)
            ->add('Version', TextType::class)
            ->add('Vin', TextType::class)
            ->add('Immatriculation', TextType::class)
            ->add('TypeDeProspect', TextType::class)
            ->add('Kilometrage', IntegerType::class)
            ->add('LibelleEnergie', TextType::class)
            ->add('VendeurVn', TextType::class)
            ->add('VendeurVo', TextType::class)
            ->add('CommentaireDeFacturation', TextareaType::class)
            ->add('TypeVnVo', TextType::class)
            ->add('NumeroDeDossierVnVo', IntegerType::class)
            ->add('IntermediaireDeVenteVn', TextType::class)
            ->add('DateEvenementVeh', DateType::class)
            ->add('OrigineEvenementVeh', TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employer::class,
        ]);
    }
}
