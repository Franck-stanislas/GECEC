<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220812095144 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD code_id INT NOT NULL, ADD commune_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64927DAFE17 FOREIGN KEY (code_id) REFERENCES cec (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649131A4F72 FOREIGN KEY (commune_id) REFERENCES cec (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64927DAFE17 ON user (code_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649131A4F72 ON user (commune_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64927DAFE17');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649131A4F72');
        $this->addSql('DROP INDEX UNIQ_8D93D64927DAFE17 ON user');
        $this->addSql('DROP INDEX UNIQ_8D93D649131A4F72 ON user');
        $this->addSql('ALTER TABLE user DROP code_id, DROP commune_id');
    }
}
