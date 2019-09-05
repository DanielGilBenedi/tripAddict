<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190904101104 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pack CHANGE precio precio DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE pack_aleatorio DROP FOREIGN KEY FK_BBD95F517C8F29D');
        $this->addSql('ALTER TABLE pack_aleatorio DROP FOREIGN KEY FK_BBD95F557D5D73');
        $this->addSql('DROP INDEX IDX_BBD95F557D5D73 ON pack_aleatorio');
        $this->addSql('DROP INDEX IDX_BBD95F517C8F29D ON pack_aleatorio');
        $this->addSql('ALTER TABLE pack_aleatorio ADD maximo DOUBLE PRECISION NOT NULL, ADD minimo DOUBLE PRECISION NOT NULL, ADD imagen_portada VARCHAR(1000) NOT NULL, DROP id_pack1_id, DROP id_pack2_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pack CHANGE precio precio NUMERIC(6, 2) DEFAULT NULL');
        $this->addSql('ALTER TABLE pack_aleatorio ADD id_pack1_id INT NOT NULL, ADD id_pack2_id INT NOT NULL, DROP maximo, DROP minimo, DROP imagen_portada');
        $this->addSql('ALTER TABLE pack_aleatorio ADD CONSTRAINT FK_BBD95F517C8F29D FOREIGN KEY (id_pack2_id) REFERENCES pack (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE pack_aleatorio ADD CONSTRAINT FK_BBD95F557D5D73 FOREIGN KEY (id_pack1_id) REFERENCES pack (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_BBD95F557D5D73 ON pack_aleatorio (id_pack1_id)');
        $this->addSql('CREATE INDEX IDX_BBD95F517C8F29D ON pack_aleatorio (id_pack2_id)');
    }
}
