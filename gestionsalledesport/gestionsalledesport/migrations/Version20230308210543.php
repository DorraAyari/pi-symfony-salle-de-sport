<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308210543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation ADD reponses_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404E4084792 FOREIGN KEY (reponses_id) REFERENCES reponse_reclamation (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CE606404E4084792 ON reclamation (reponses_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404E4084792');
        $this->addSql('DROP INDEX UNIQ_CE606404E4084792 ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP reponses_id');
    }
}
