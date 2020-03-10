<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200307081649 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE `match` (id INT AUTO_INCREMENT NOT NULL, division INT DEFAULT NULL, date VARCHAR(255) NOT NULL, time VARCHAR(255) NOT NULL, homeTeam INT DEFAULT NULL, awayTeam INT DEFAULT NULL, INDEX IDX_7A5BC505BBFC6AEF (homeTeam), INDEX IDX_7A5BC50522501995 (awayTeam), INDEX IDX_7A5BC50510174714 (division), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE super_admin (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `match` ADD CONSTRAINT FK_7A5BC505BBFC6AEF FOREIGN KEY (homeTeam) REFERENCES team (id)');
        $this->addSql('ALTER TABLE `match` ADD CONSTRAINT FK_7A5BC50522501995 FOREIGN KEY (awayTeam) REFERENCES team (id)');
        $this->addSql('ALTER TABLE `match` ADD CONSTRAINT FK_7A5BC50510174714 FOREIGN KEY (division) REFERENCES division (id)');
        $this->addSql('ALTER TABLE player_to_team_request DROP FOREIGN KEY FK_C961DE3F264E43A6');
        $this->addSql('ALTER TABLE player_to_team_request DROP FOREIGN KEY FK_C961DE3F96C22258');
        $this->addSql('DROP INDEX IDX_C961DE3F264E43A6 ON player_to_team_request');
        $this->addSql('DROP INDEX IDX_C961DE3F96C22258 ON player_to_team_request');
        $this->addSql('ALTER TABLE player_to_team_request ADD player INT DEFAULT NULL, ADD team INT DEFAULT NULL, DROP players, DROP teams, CHANGE dates date VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE player_to_team_request ADD CONSTRAINT FK_C961DE3F98197A65 FOREIGN KEY (player) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_to_team_request ADD CONSTRAINT FK_C961DE3FC4E0A61F FOREIGN KEY (team) REFERENCES team (id)');
        $this->addSql('CREATE INDEX IDX_C961DE3F98197A65 ON player_to_team_request (player)');
        $this->addSql('CREATE INDEX IDX_C961DE3FC4E0A61F ON player_to_team_request (team)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE `match`');
        $this->addSql('DROP TABLE super_admin');
        $this->addSql('ALTER TABLE player_to_team_request DROP FOREIGN KEY FK_C961DE3F98197A65');
        $this->addSql('ALTER TABLE player_to_team_request DROP FOREIGN KEY FK_C961DE3FC4E0A61F');
        $this->addSql('DROP INDEX IDX_C961DE3F98197A65 ON player_to_team_request');
        $this->addSql('DROP INDEX IDX_C961DE3FC4E0A61F ON player_to_team_request');
        $this->addSql('ALTER TABLE player_to_team_request ADD players INT DEFAULT NULL, ADD teams INT DEFAULT NULL, DROP player, DROP team, CHANGE date dates VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE player_to_team_request ADD CONSTRAINT FK_C961DE3F264E43A6 FOREIGN KEY (players) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_to_team_request ADD CONSTRAINT FK_C961DE3F96C22258 FOREIGN KEY (teams) REFERENCES team (id)');
        $this->addSql('CREATE INDEX IDX_C961DE3F264E43A6 ON player_to_team_request (players)');
        $this->addSql('CREATE INDEX IDX_C961DE3F96C22258 ON player_to_team_request (teams)');
    }
}
