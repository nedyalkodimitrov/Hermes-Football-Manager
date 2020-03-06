<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200229075505 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE coach_to_team_request (id INT AUTO_INCREMENT NOT NULL, coaches INT DEFAULT NULL, teams INT DEFAULT NULL, dates VARCHAR(255) NOT NULL, INDEX IDX_AF654976C4131765 (coaches), INDEX IDX_AF65497696C22258 (teams), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE division_to_team_request (id INT AUTO_INCREMENT NOT NULL, divisions INT DEFAULT NULL, teams INT DEFAULT NULL, dates VARCHAR(255) NOT NULL, INDEX IDX_B9348C901C40C31 (divisions), INDEX IDX_B9348C9096C22258 (teams), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team_to_coach_request (id INT AUTO_INCREMENT NOT NULL, teams INT DEFAULT NULL, coaches INT DEFAULT NULL, dates VARCHAR(255) NOT NULL, INDEX IDX_B8686EAA96C22258 (teams), INDEX IDX_B8686EAAC4131765 (coaches), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team_to_division_request (id INT AUTO_INCREMENT NOT NULL, teams INT DEFAULT NULL, divisions INT DEFAULT NULL, dates VARCHAR(255) NOT NULL, INDEX IDX_6E8BC24E96C22258 (teams), INDEX IDX_6E8BC24E1C40C31 (divisions), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE coach_to_team_request ADD CONSTRAINT FK_AF654976C4131765 FOREIGN KEY (coaches) REFERENCES coach (id)');
        $this->addSql('ALTER TABLE coach_to_team_request ADD CONSTRAINT FK_AF65497696C22258 FOREIGN KEY (teams) REFERENCES team (id)');
        $this->addSql('ALTER TABLE division_to_team_request ADD CONSTRAINT FK_B9348C901C40C31 FOREIGN KEY (divisions) REFERENCES division (id)');
        $this->addSql('ALTER TABLE division_to_team_request ADD CONSTRAINT FK_B9348C9096C22258 FOREIGN KEY (teams) REFERENCES team (id)');
        $this->addSql('ALTER TABLE team_to_coach_request ADD CONSTRAINT FK_B8686EAA96C22258 FOREIGN KEY (teams) REFERENCES team (id)');
        $this->addSql('ALTER TABLE team_to_coach_request ADD CONSTRAINT FK_B8686EAAC4131765 FOREIGN KEY (coaches) REFERENCES coach (id)');
        $this->addSql('ALTER TABLE team_to_division_request ADD CONSTRAINT FK_6E8BC24E96C22258 FOREIGN KEY (teams) REFERENCES team (id)');
        $this->addSql('ALTER TABLE team_to_division_request ADD CONSTRAINT FK_6E8BC24E1C40C31 FOREIGN KEY (divisions) REFERENCES division (id)');
        $this->addSql('ALTER TABLE player_to_team_request DROP FOREIGN KEY FK_C961DE3F98197A65');
        $this->addSql('ALTER TABLE player_to_team_request DROP FOREIGN KEY FK_C961DE3FC4E0A61F');
        $this->addSql('DROP INDEX IDX_C961DE3FC4E0A61F ON player_to_team_request');
        $this->addSql('DROP INDEX IDX_C961DE3F98197A65 ON player_to_team_request');
        $this->addSql('ALTER TABLE player_to_team_request ADD players INT DEFAULT NULL, ADD teams INT DEFAULT NULL, DROP player, DROP team, CHANGE date dates VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE player_to_team_request ADD CONSTRAINT FK_C961DE3F264E43A6 FOREIGN KEY (players) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_to_team_request ADD CONSTRAINT FK_C961DE3F96C22258 FOREIGN KEY (teams) REFERENCES team (id)');
        $this->addSql('CREATE INDEX IDX_C961DE3F264E43A6 ON player_to_team_request (players)');
        $this->addSql('CREATE INDEX IDX_C961DE3F96C22258 ON player_to_team_request (teams)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE coach_to_team_request');
        $this->addSql('DROP TABLE division_to_team_request');
        $this->addSql('DROP TABLE team_to_coach_request');
        $this->addSql('DROP TABLE team_to_division_request');
        $this->addSql('ALTER TABLE player_to_team_request DROP FOREIGN KEY FK_C961DE3F264E43A6');
        $this->addSql('ALTER TABLE player_to_team_request DROP FOREIGN KEY FK_C961DE3F96C22258');
        $this->addSql('DROP INDEX IDX_C961DE3F264E43A6 ON player_to_team_request');
        $this->addSql('DROP INDEX IDX_C961DE3F96C22258 ON player_to_team_request');
        $this->addSql('ALTER TABLE player_to_team_request ADD player INT DEFAULT NULL, ADD team INT DEFAULT NULL, DROP players, DROP teams, CHANGE dates date VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE player_to_team_request ADD CONSTRAINT FK_C961DE3F98197A65 FOREIGN KEY (player) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_to_team_request ADD CONSTRAINT FK_C961DE3FC4E0A61F FOREIGN KEY (team) REFERENCES team (id)');
        $this->addSql('CREATE INDEX IDX_C961DE3FC4E0A61F ON player_to_team_request (team)');
        $this->addSql('CREATE INDEX IDX_C961DE3F98197A65 ON player_to_team_request (player)');
    }
}
