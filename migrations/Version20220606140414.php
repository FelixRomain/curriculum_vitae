<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220606140414 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD about LONGTEXT DEFAULT NULL, ADD goal LONGTEXT DEFAULT NULL, ADD curriculum_vitae VARCHAR(255) DEFAULT NULL, ADD path_instagram VARCHAR(255) DEFAULT NULL, ADD path_linkedin VARCHAR(255) DEFAULT NULL, ADD last_name VARCHAR(255) NOT NULL, ADD first_name VARCHAR(255) NOT NULL, ADD job VARCHAR(255) DEFAULT NULL, ADD hidden TINYINT(1) NOT NULL, ADD deleted TINYINT(1) NOT NULL, ADD avatar VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP about, DROP goal, DROP curriculum_vitae, DROP path_instagram, DROP path_linkedin, DROP last_name, DROP first_name, DROP job, DROP hidden, DROP deleted, DROP avatar');
    }
}