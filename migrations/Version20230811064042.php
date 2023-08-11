<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230811064042 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE employer (id INT AUTO_INCREMENT NOT NULL, compte_affaire VARCHAR(255) NOT NULL, compte_evenement VARCHAR(255) NOT NULL, compte_dernier_evenement VARCHAR(255) NOT NULL, numero_de_fiche INT NOT NULL, libelle_civilite VARCHAR(255) DEFAULT NULL, proprietaire_actuel_du_vehicule VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) DEFAULT NULL, num_nom_de_la_voie VARCHAR(255) NOT NULL, complement_adresse1 VARCHAR(255) DEFAULT NULL, code_postal VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, telephone_domicile VARCHAR(255) DEFAULT NULL, telephone_portable VARCHAR(255) DEFAULT NULL, telephone_job VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, date_de_mise_en_circulation DATE DEFAULT NULL, date_achat DATE DEFAULT NULL, date_dernier_evenement DATE NOT NULL, libelle_marque VARCHAR(255) NOT NULL, libelle_modele VARCHAR(255) DEFAULT NULL, version VARCHAR(255) DEFAULT NULL, vin VARCHAR(255) NOT NULL, immatriculation VARCHAR(255) DEFAULT NULL, type_de_prospect VARCHAR(255) NOT NULL, kilometrage INT DEFAULT NULL, libelle_energie VARCHAR(255) DEFAULT NULL, vendeur_vn VARCHAR(255) DEFAULT NULL, vendeur_vo VARCHAR(255) DEFAULT NULL, commentaire_de_facturation VARCHAR(255) DEFAULT NULL, type_vn_vo VARCHAR(255) DEFAULT NULL, numero_de_dossier_vn_vo VARCHAR(255) DEFAULT NULL, intermediaire_de_vente_vn VARCHAR(255) DEFAULT NULL, date_evenement_veh DATE NOT NULL, origine_evenement_veh VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE employer');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
