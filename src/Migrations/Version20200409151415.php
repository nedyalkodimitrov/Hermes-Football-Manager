<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200409151415 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE match_list CHANGE is_starting is_starting TINYINT(1) DEFAULT NULL, CHANGE is_played is_played TINYINT(1) DEFAULT NULL, CHANGE goals goals INT DEFAULT NULL, CHANGE assits assits INT DEFAULT NULL, CHANGE saves saves INT DEFAULT NULL, CHANGE played_time played_time INT DEFAULT NULL, CHANGE start_time start_time INT DEFAULT NULL, CHANGE end_time end_time INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE match_list CHANGE is_starting is_starting TINYINT(1) NOT NULL, CHANGE is_played is_played TINYINT(1) NOT NULL, CHANGE goals goals INT NOT NULL, CHANGE assits assits INT NOT NULL, CHANGE saves saves INT NOT NULL, CHANGE played_time played_time INT NOT NULL, CHANGE start_time start_time INT NOT NULL, CHANGE end_time end_time INT NOT NULL');
    }
}
