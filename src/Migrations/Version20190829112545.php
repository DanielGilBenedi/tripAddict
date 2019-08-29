<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190829112545 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE pack_aleatorio (id INT AUTO_INCREMENT NOT NULL, id_pack1_id INT NOT NULL, id_pack2_id INT NOT NULL, precio DOUBLE PRECISION NOT NULL, titulo VARCHAR(255) NOT NULL, INDEX IDX_BBD95F557D5D73 (id_pack1_id), INDEX IDX_BBD95F517C8F29D (id_pack2_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pack_aleatorio ADD CONSTRAINT FK_BBD95F557D5D73 FOREIGN KEY (id_pack1_id) REFERENCES pack (id)');
        $this->addSql('ALTER TABLE pack_aleatorio ADD CONSTRAINT FK_BBD95F517C8F29D FOREIGN KEY (id_pack2_id) REFERENCES pack (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE pack_aleatorio');
    }
}
