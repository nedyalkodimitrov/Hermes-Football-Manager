<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200530054914 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE matches CHANGE Is_played Is_played TINYINT(1) DEFAULT NULL, CHANGE is_dalayed is_dalayed TINYINT(1) DEFAULT NULL, CHANGE is_friendly is_friendly TINYINT(1) DEFAULT NULL, CHANGE is_canceled is_canceled TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE matches CHANGE Is_played Is_played TINYINT(1) NOT NULL, CHANGE is_dalayed is_dalayed TINYINT(1) NOT NULL, CHANGE is_friendly is_friendly TINYINT(1) NOT NULL, CHANGE is_canceled is_canceled TINYINT(1) NOT NULL');
    }
}
