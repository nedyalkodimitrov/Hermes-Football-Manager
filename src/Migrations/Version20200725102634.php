<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200725102634 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE shoes_type (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_53650B448CDE5729 (type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE training (id INT AUTO_INCREMENT NOT NULL, date VARCHAR(255) NOT NULL, shoesType INT DEFAULT NULL, trainingType INT DEFAULT NULL, INDEX IDX_D5128A8FBA344F41 (shoesType), INDEX IDX_D5128A8FFB3996A4 (trainingType), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE training_exercise (training INT NOT NULL, exercise INT NOT NULL, INDEX IDX_49BFC68BD5128A8F (training), INDEX IDX_49BFC68BAEDAD51C (exercise), PRIMARY KEY(training, exercise)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exercises (id INT AUTO_INCREMENT NOT NULL, division INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_FA149915E237E06 (name), UNIQUE INDEX UNIQ_FA149916DE44026 (description), INDEX IDX_FA1499110174714 (division), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE intensity_type (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_EB9D57EC8CDE5729 (type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE training_type (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8344106A8CDE5729 (type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
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

        $this->addSql('ALTER TABLE training DROP FOREIGN KEY FK_D5128A8FBA344F41');
        $this->addSql('ALTER TABLE training_exercise DROP FOREIGN KEY FK_49BFC68BD5128A8F');
        $this->addSql('ALTER TABLE training_exercise DROP FOREIGN KEY FK_49BFC68BAEDAD51C');
        $this->addSql('ALTER TABLE exercises DROP FOREIGN KEY FK_FA1499110174714');
        $this->addSql('ALTER TABLE training DROP FOREIGN KEY FK_D5128A8FFB3996A4');
        $this->addSql('DROP TABLE shoes_type');
        $this->addSql('DROP TABLE training');
        $this->addSql('DROP TABLE training_exercise');
        $this->addSql('DROP TABLE exercises');
        $this->addSql('DROP TABLE intensity_type');
        $this->addSql('DROP TABLE training_type');
    }
}
