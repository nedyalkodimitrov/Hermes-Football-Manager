<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200725104040 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE exercises DROP FOREIGN KEY FK_FA1499110174714');
        $this->addSql('DROP INDEX IDX_FA1499110174714 ON exercises');
        $this->addSql('ALTER TABLE exercises CHANGE division intensityType INT DEFAULT NULL');
        $this->addSql('ALTER TABLE exercises ADD CONSTRAINT FK_FA14991FFCDE876 FOREIGN KEY (intensityType) REFERENCES intensity_type (id)');
        $this->addSql('CREATE INDEX IDX_FA14991FFCDE876 ON exercises (intensityType)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE exercises DROP FOREIGN KEY FK_FA14991FFCDE876');
        $this->addSql('DROP INDEX IDX_FA14991FFCDE876 ON exercises');
        $this->addSql('ALTER TABLE exercises CHANGE intensitytype division INT DEFAULT NULL');
        $this->addSql('ALTER TABLE exercises ADD CONSTRAINT FK_FA1499110174714 FOREIGN KEY (division) REFERENCES intensity_type (id)');
        $this->addSql('CREATE INDEX IDX_FA1499110174714 ON exercises (division)');
    }
}
