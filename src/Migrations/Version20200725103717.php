<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200725103717 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE intensity_type (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE training_type (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE training ADD CONSTRAINT FK_D5128A8FBA344F41 FOREIGN KEY (shoesType) REFERENCES shoes_type (id)');
        $this->addSql('ALTER TABLE training ADD CONSTRAINT FK_D5128A8FFB3996A4 FOREIGN KEY (trainingType) REFERENCES training_type (id)');
        $this->addSql('ALTER TABLE training_exercise ADD CONSTRAINT FK_49BFC68BD5128A8F FOREIGN KEY (training) REFERENCES training (id)');
        $this->addSql('ALTER TABLE training_exercise ADD CONSTRAINT FK_49BFC68BAEDAD51C FOREIGN KEY (exercise) REFERENCES exercises (id)');
        $this->addSql('ALTER TABLE exercises ADD CONSTRAINT FK_FA1499110174714 FOREIGN KEY (division) REFERENCES intensity_type (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE exercises DROP FOREIGN KEY FK_FA1499110174714');
        $this->addSql('ALTER TABLE training DROP FOREIGN KEY FK_D5128A8FFB3996A4');
        $this->addSql('DROP TABLE intensity_type');
        $this->addSql('DROP TABLE training_type');
        $this->addSql('ALTER TABLE training DROP FOREIGN KEY FK_D5128A8FBA344F41');
        $this->addSql('ALTER TABLE training_exercise DROP FOREIGN KEY FK_49BFC68BD5128A8F');
        $this->addSql('ALTER TABLE training_exercise DROP FOREIGN KEY FK_49BFC68BAEDAD51C');
    }
}
