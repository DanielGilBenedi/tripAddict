<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190827100916 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE estancia (id INT AUTO_INCREMENT NOT NULL, id_hotel_id INT NOT NULL, noches INT DEFAULT NULL, personas INT DEFAULT NULL, habitacion VARCHAR(150) DEFAULT NULL, tipo_pension VARCHAR(500) DEFAULT NULL, INDEX IDX_BAADE436298578D (id_hotel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE estancia_pack (id INT AUTO_INCREMENT NOT NULL, id_estancia_id INT NOT NULL, id_pack_id INT NOT NULL, INDEX IDX_2438C37625379932 (id_estancia_id), INDEX IDX_2438C376C7841B67 (id_pack_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grupo (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(1000) NOT NULL, descripcion VARCHAR(4000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hotel (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(500) DEFAULT NULL, descripcion VARCHAR(1000) DEFAULT NULL, ciudad VARCHAR(300) DEFAULT NULL, direccion VARCHAR(1000) DEFAULT NULL, comunidad VARCHAR(300) DEFAULT NULL, provincia VARCHAR(300) DEFAULT NULL, salida TIME DEFAULT NULL, llegada TIME DEFAULT NULL, telefono VARCHAR(15) DEFAULT NULL, email VARCHAR(200) DEFAULT NULL, web VARCHAR(500) DEFAULT NULL, imagen_portada INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hotel_servicio (id INT AUTO_INCREMENT NOT NULL, id_hotel_id INT NOT NULL, id_servicio_id INT NOT NULL, anotacion VARCHAR(200) DEFAULT NULL, INDEX IDX_89E720586298578D (id_hotel_id), INDEX IDX_89E7205869D86E10 (id_servicio_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imagen (id INT AUTO_INCREMENT NOT NULL, imagen VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imagenes_hotel (id INT AUTO_INCREMENT NOT NULL, id_hotel_id INT NOT NULL, INDEX IDX_AEBAF2DF6298578D (id_hotel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pack (id INT AUTO_INCREMENT NOT NULL, grupo_id INT NOT NULL, nombre VARCHAR(300) DEFAULT NULL, descripcion VARCHAR(1000) DEFAULT NULL, precio DOUBLE PRECISION DEFAULT NULL, imagen_portada INT DEFAULT NULL, INDEX IDX_97DE5E239C833003 (grupo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pedido (id INT AUTO_INCREMENT NOT NULL, id_pack_id INT NOT NULL, id_usuario_id INT NOT NULL, id_estancia_id INT NOT NULL, precio DOUBLE PRECISION DEFAULT NULL, usado TINYINT(1) DEFAULT NULL, fecha DATE DEFAULT NULL, fecha_fin DATE DEFAULT NULL, INDEX IDX_C4EC16CEC7841B67 (id_pack_id), INDEX IDX_C4EC16CE7EB2C349 (id_usuario_id), INDEX IDX_C4EC16CE25379932 (id_estancia_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE servicio (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(200) DEFAULT NULL, tipo VARCHAR(200) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, usuario VARCHAR(50) DEFAULT NULL, nombre VARCHAR(200) DEFAULT NULL, apellidos VARCHAR(500) DEFAULT NULL, direccion VARCHAR(400) DEFAULT NULL, ciudad VARCHAR(400) DEFAULT NULL, fecha_nacimiento DATE DEFAULT NULL, fecha_registro DATE DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE estancia ADD CONSTRAINT FK_BAADE436298578D FOREIGN KEY (id_hotel_id) REFERENCES hotel (id)');
        $this->addSql('ALTER TABLE estancia_pack ADD CONSTRAINT FK_2438C37625379932 FOREIGN KEY (id_estancia_id) REFERENCES estancia (id)');
        $this->addSql('ALTER TABLE estancia_pack ADD CONSTRAINT FK_2438C376C7841B67 FOREIGN KEY (id_pack_id) REFERENCES pack (id)');
        $this->addSql('ALTER TABLE hotel_servicio ADD CONSTRAINT FK_89E720586298578D FOREIGN KEY (id_hotel_id) REFERENCES hotel (id)');
        $this->addSql('ALTER TABLE hotel_servicio ADD CONSTRAINT FK_89E7205869D86E10 FOREIGN KEY (id_servicio_id) REFERENCES servicio (id)');
        $this->addSql('ALTER TABLE imagenes_hotel ADD CONSTRAINT FK_AEBAF2DF6298578D FOREIGN KEY (id_hotel_id) REFERENCES hotel (id)');
        $this->addSql('ALTER TABLE pack ADD CONSTRAINT FK_97DE5E239C833003 FOREIGN KEY (grupo_id) REFERENCES grupo (id)');
        $this->addSql('ALTER TABLE pedido ADD CONSTRAINT FK_C4EC16CEC7841B67 FOREIGN KEY (id_pack_id) REFERENCES pack (id)');
        $this->addSql('ALTER TABLE pedido ADD CONSTRAINT FK_C4EC16CE7EB2C349 FOREIGN KEY (id_usuario_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE pedido ADD CONSTRAINT FK_C4EC16CE25379932 FOREIGN KEY (id_estancia_id) REFERENCES estancia (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE estancia_pack DROP FOREIGN KEY FK_2438C37625379932');
        $this->addSql('ALTER TABLE pedido DROP FOREIGN KEY FK_C4EC16CE25379932');
        $this->addSql('ALTER TABLE pack DROP FOREIGN KEY FK_97DE5E239C833003');
        $this->addSql('ALTER TABLE estancia DROP FOREIGN KEY FK_BAADE436298578D');
        $this->addSql('ALTER TABLE hotel_servicio DROP FOREIGN KEY FK_89E720586298578D');
        $this->addSql('ALTER TABLE imagenes_hotel DROP FOREIGN KEY FK_AEBAF2DF6298578D');
        $this->addSql('ALTER TABLE estancia_pack DROP FOREIGN KEY FK_2438C376C7841B67');
        $this->addSql('ALTER TABLE pedido DROP FOREIGN KEY FK_C4EC16CEC7841B67');
        $this->addSql('ALTER TABLE hotel_servicio DROP FOREIGN KEY FK_89E7205869D86E10');
        $this->addSql('ALTER TABLE pedido DROP FOREIGN KEY FK_C4EC16CE7EB2C349');
        $this->addSql('DROP TABLE estancia');
        $this->addSql('DROP TABLE estancia_pack');
        $this->addSql('DROP TABLE grupo');
        $this->addSql('DROP TABLE hotel');
        $this->addSql('DROP TABLE hotel_servicio');
        $this->addSql('DROP TABLE imagen');
        $this->addSql('DROP TABLE imagenes_hotel');
        $this->addSql('DROP TABLE pack');
        $this->addSql('DROP TABLE pedido');
        $this->addSql('DROP TABLE servicio');
        $this->addSql('DROP TABLE user');
    }
}
