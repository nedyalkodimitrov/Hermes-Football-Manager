<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200612204321 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE devision_request (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE division_request (id INT AUTO_INCREMENT NOT NULL, division INT DEFAULT NULL, team INT DEFAULT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_48B1BF6510174714 (division), INDEX IDX_48B1BF65C4E0A61F (team), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE division_request ADD CONSTRAINT FK_48B1BF6510174714 FOREIGN KEY (division) REFERENCES division (id)');
        $this->addSql('ALTER TABLE division_request ADD CONSTRAINT FK_48B1BF65C4E0A61F FOREIGN KEY (team) REFERENCES team (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE devision_request');
        $this->addSql('DROP TABLE division_request');
    }
}
