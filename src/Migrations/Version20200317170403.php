<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200317170403 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE match_list (id INT AUTO_INCREMENT NOT NULL, `match` INT DEFAULT NULL, player INT DEFAULT NULL, is_starting TINYINT(1) NOT NULL, is_played TINYINT(1) NOT NULL, goals INT NOT NULL, assits INT NOT NULL, saves INT NOT NULL, played_time INT NOT NULL, start_time INT NOT NULL, end_time INT NOT NULL, UNIQUE INDEX UNIQ_25A7496A7A5BC505 (`match`), INDEX IDX_25A7496A98197A65 (player), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE match_list ADD CONSTRAINT FK_25A7496A7A5BC505 FOREIGN KEY (`match`) REFERENCES `match` (id)');
        $this->addSql('ALTER TABLE match_list ADD CONSTRAINT FK_25A7496A98197A65 FOREIGN KEY (player) REFERENCES player (id)');
        $this->addSql('ALTER TABLE match_stats CHANGE home_team_goals home_team_goals INT DEFAULT NULL, CHANGE away_team_goals away_team_goals INT DEFAULT NULL, CHANGE is_played is_played TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE match_list');
        $this->addSql('ALTER TABLE match_stats CHANGE home_team_goals home_team_goals INT NOT NULL, CHANGE away_team_goals away_team_goals INT NOT NULL, CHANGE is_played is_played TINYINT(1) NOT NULL');
    }
}
