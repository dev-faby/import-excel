<?php

namespace App\Command;

use App\Entity\Employer;
use Doctrine\ORM\EntityManagerInterface;
use Rap2hpoutre\FastExcel\FastExcel;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExportExcelCommand extends Command
{
    protected static $defaultName = 'db:import-excel';
    protected static $defaultDescription = 'Pérmet d\'import la fiche excel dans la base de donnée';

   /**
    * @var EntityManagerInterface
    */
    private EntityManagerInterface $entityManager;

    public function __construct(
        EntityManagerInterface $entityManagerInterface
        )
    {
        parent::__construct();
        $this->entityManager = $entityManagerInterface;
    }
    protected function configure(): void
    {
        $this
            //->addArgument('path', InputArgument::OPTIONAL, 'Chémin de la fichier')
            ->addOption('path', null, InputOption::VALUE_NONE, 'Chémin de la fichier')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        //$arg1 = $input->getArgument('arg1');

        $io->title('Import Excel');

        $collections = (new FastExcel)->import('import/TestTechnique-Import.xlsx');
        $io->progressStart();
        foreach ($io->progressIterate($collections) as $row) {
            $employer = new Employer();
            $employer->setCompteAffaire($row["Compte Affaire"]);
            $employer->setCompteEvenement($row["Compte évènement (Veh)"]);
            $employer->setCompteDernierEvenement($row["Compte dernier évènement (Veh)"]);
            $NumeroDeFiche = ($row["Numéro de fiche"] == "")? 0 : (int) $row["Numéro de fiche"];
            $employer->setNumeroDeFiche($NumeroDeFiche);
            $employer->setLibelleCivilite($row["Libellé civilité"]);
            $employer->setProprietaireActuelDuVehicule($row["Propriétaire actuel du véhicule"]);
            $employer->setNom($row['Nom']);
            $employer->setPrenom($row["Prénom"]);
            $employer->setNumNomDeLaVoie($row["N° et Nom de la voie"]);
            $employer->setComplementAdresse1($row["Complément adresse 1"]);
            $employer->setCodePostal($row["Code postal"]);
            $employer->setVille($row["Ville"]);
            $employer->setTelephoneDomicile($row["Téléphone domicile"]);
            $employer->setTelephoneJob($row["Téléphone job"]);
            $employer->setEmail($row["Email"]);
            $DateDeMiseEnCirculation = ($row["Date de mise en circulation"] == "")? null : $row["Date de mise en circulation"];
            $employer->setDateDeMiseEnCirculation($DateDeMiseEnCirculation);
            $DateAchat = ($row["Date achat (date de livraison)"] == "")?  null : $row["Date achat (date de livraison)"];
            $employer->setDateAchat($DateAchat);
            $DateDernierEvenement = ($row["Date dernier évènement (Veh)"] == "") ? null : $row["Date dernier évènement (Veh)"];
            $employer->setDateDernierEvenement($DateDernierEvenement);
            $employer->setLibelleMarque($row["Libellé marque (Mrq)"]);
            $employer->setLibelleModele($row["Libellé modèle (Mod)"]);
            $employer->setVersion($row["Version"]);
            $employer->setVin($row["VIN"]);
            $employer->setImmatriculation($row["Immatriculation"]);
            $employer->setTypeDeProspect($row["Type de prospect"]);
            $Kilometrage = ($row["Kilométrage"] == "") ? null : (int) $row["Kilométrage"];
            $employer->setKilometrage($Kilometrage);
            $employer->setLibelleEnergie($row["Libellé énergie (Energ)"]);
            $employer->setVendeurVn($row["Vendeur VN"]);
            $employer->setVendeurVo($row["Vendeur VO"]);
            $employer->setCommentaireDeFacturation($row["Commentaire de facturation (Veh)"]);
            $employer->setTypeVnVo($row["Type VN VO"]);
            $employer->setNumeroDeDossierVnVo($row["Numéro de dossier VN VO"]);
            $employer->setIntermediaireDeVenteVn($row["Intermediaire de vente VN"]);
            $DateEvenementVeh = ($row["Date évènement (Veh)"] == "") ? null : $row["Date évènement (Veh)"];
            $employer->setDateEvenementVeh($DateEvenementVeh);
            $employer->setOrigineEvenementVeh($row["Origine évènement (Veh)"]);
            $this->entityManager->persist($employer);
            $io->progressAdvance();
        }
        $this->entityManager->flush();
        $io->progressFinish();
        

        
        $io->success('Importation fait avec sucess');

        return Command::SUCCESS;
    }
}
