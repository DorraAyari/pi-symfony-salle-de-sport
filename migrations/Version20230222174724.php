<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230222174724 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours ADD salle_id INT DEFAULT NULL, CHANGE image image VARCHAR(255) NOT NULL, CHANGE desription description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CDC304035 FOREIGN KEY (salle_id) REFERENCES salle (id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9CDC304035 ON cours (salle_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CDC304035');
        $this->addSql('DROP INDEX IDX_FDCA8C9CDC304035 ON cours');
        $this->addSql('ALTER TABLE cours DROP salle_id, CHANGE image image VARCHAR(255) DEFAULT NULL, CHANGE description desription VARCHAR(255) NOT NULL');
    }
}
