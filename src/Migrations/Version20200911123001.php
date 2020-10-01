<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200911123001 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE youth_team ADD image VARCHAR(255) DEFAULT NULL, ADD cover_image VARCHAR(255) DEFAULT NULL, CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE points points INT DEFAULT NULL, CHANGE played_games played_games INT DEFAULT NULL, CHANGE wins wins INT DEFAULT NULL, CHANGE lostGames lostGames INT DEFAULT NULL, CHANGE drawsGames drawsGames INT DEFAULT NULL, CHANGE goals goals INT DEFAULT NULL, CHANGE goalsInTheTeamDoor goalsInTheTeamDoor INT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2DDB4FB35E237E06 ON youth_team (name)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_2DDB4FB35E237E06 ON youth_team');
        $this->addSql('ALTER TABLE youth_team DROP image, DROP cover_image, CHANGE name name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE points points INT NOT NULL, CHANGE played_games played_games INT NOT NULL, CHANGE wins wins INT NOT NULL, CHANGE lostGames lostGames INT NOT NULL, CHANGE drawsGames drawsGames INT NOT NULL, CHANGE goals goals INT NOT NULL, CHANGE goalsInTheTeamDoor goalsInTheTeamDoor INT NOT NULL');
    }
}
