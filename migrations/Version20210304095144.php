<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210304095144 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acces (id INT AUTO_INCREMENT NOT NULL, utilisateur_id_id INT NOT NULL, INDEX IDX_D0F43B10B981C689 (utilisateur_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE access (id INT AUTO_INCREMENT NOT NULL, utilisateur_id_id INT NOT NULL, autorisation_id_id INT NOT NULL, document_id_id INT NOT NULL, INDEX IDX_6692B54B981C689 (utilisateur_id_id), INDEX IDX_6692B543B0E139B (autorisation_id_id), INDEX IDX_6692B5416E5E825 (document_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE delet_acces (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE delete_acces (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B10B981C689 FOREIGN KEY (utilisateur_id_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE access ADD CONSTRAINT FK_6692B54B981C689 FOREIGN KEY (utilisateur_id_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE access ADD CONSTRAINT FK_6692B543B0E139B FOREIGN KEY (autorisation_id_id) REFERENCES autorisation (id)');
        $this->addSql('ALTER TABLE access ADD CONSTRAINT FK_6692B5416E5E825 FOREIGN KEY (document_id_id) REFERENCES documents (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE acces');
        $this->addSql('DROP TABLE access');
        $this->addSql('DROP TABLE delet_acces');
        $this->addSql('DROP TABLE delete_acces');
        $this->addSql('DROP TABLE document');
    }
}
