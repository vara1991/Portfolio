<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200819102204 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE project_tool (project_id INT NOT NULL, tool_id INT NOT NULL, INDEX IDX_1962F6C9166D1F9C (project_id), INDEX IDX_1962F6C98F7B22CC (tool_id), PRIMARY KEY(project_id, tool_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE project_tool ADD CONSTRAINT FK_1962F6C9166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_tool ADD CONSTRAINT FK_1962F6C98F7B22CC FOREIGN KEY (tool_id) REFERENCES tool (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE tool_project');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tool_project (tool_id INT NOT NULL, project_id INT NOT NULL, INDEX IDX_3BD7DDAD166D1F9C (project_id), INDEX IDX_3BD7DDAD8F7B22CC (tool_id), PRIMARY KEY(tool_id, project_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE tool_project ADD CONSTRAINT FK_3BD7DDAD166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tool_project ADD CONSTRAINT FK_3BD7DDAD8F7B22CC FOREIGN KEY (tool_id) REFERENCES tool (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('DROP TABLE project_tool');
    }
}
