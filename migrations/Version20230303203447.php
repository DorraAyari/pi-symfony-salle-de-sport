<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230303203447 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE calendar DROP FOREIGN KEY FK_6EA9A1463C105691');
        $this->addSql('ALTER TABLE calendar DROP FOREIGN KEY FK_6EA9A1467ECF78B0');
        $this->addSql('ALTER TABLE calendar ADD CONSTRAINT FK_6EA9A1463C105691 FOREIGN KEY (coach_id) REFERENCES coach (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE calendar ADD CONSTRAINT FK_6EA9A1467ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE coach DROP image');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C3C105691');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C3C105691 FOREIGN KEY (coach_id) REFERENCES coach (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE calendar DROP FOREIGN KEY FK_6EA9A1467ECF78B0');
        $this->addSql('ALTER TABLE calendar DROP FOREIGN KEY FK_6EA9A1463C105691');
        $this->addSql('ALTER TABLE calendar ADD CONSTRAINT FK_6EA9A1467ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE calendar ADD CONSTRAINT FK_6EA9A1463C105691 FOREIGN KEY (coach_id) REFERENCES coach (id)');
        $this->addSql('ALTER TABLE coach ADD image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C3C105691');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C3C105691 FOREIGN KEY (coach_id) REFERENCES coach (id)');
    }
}
