<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260108222336 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE feedbacks CHANGE nom name VARCHAR(255) NOT NULL, CHANGE Feedbacks feedback LONGTEXT NOT NULL, CHANGE date_envoi sent_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE message CHANGE nom name VARCHAR(255) NOT NULL, CHANGE date_envoi sent_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE patient ADD name VARCHAR(255) NOT NULL, ADD illness VARCHAR(255) NOT NULL, ADD assigned_doctor VARCHAR(255) NOT NULL, DROP nom, DROP maladie, DROP medecin_assigne, CHANGE date_visite visit_date DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE feedbacks CHANGE name nom VARCHAR(255) NOT NULL, CHANGE feedback Feedbacks LONGTEXT NOT NULL, CHANGE sent_at date_envoi DATETIME NOT NULL');
        $this->addSql('ALTER TABLE message CHANGE name nom VARCHAR(255) NOT NULL, CHANGE sent_at date_envoi DATETIME NOT NULL');
        $this->addSql('ALTER TABLE patient ADD nom VARCHAR(255) NOT NULL, ADD maladie VARCHAR(255) NOT NULL, ADD medecin_assigne VARCHAR(255) NOT NULL, DROP name, DROP illness, DROP assigned_doctor, CHANGE visit_date date_visite DATETIME NOT NULL');
    }
}
