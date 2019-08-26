<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190826112431 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE estancia (id INT AUTO_INCREMENT NOT NULL, id_hotel INT DEFAULT NULL, noches INT DEFAULT NULL, personas INT DEFAULT NULL, habitacion VARCHAR(150) DEFAULT NULL, tipo_pension VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE estancia_pack (id_estancia INT NOT NULL, id_pack INT NOT NULL, PRIMARY KEY(id_estancia, id_pack)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grupo (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(1000) NOT NULL, descripcion VARCHAR(4000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hotel (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(500) DEFAULT NULL, descripcion VARCHAR(1000) DEFAULT NULL, ciudad VARCHAR(300) DEFAULT NULL, direccion VARCHAR(1000) DEFAULT NULL, comunidad VARCHAR(300) DEFAULT NULL, provincia VARCHAR(300) DEFAULT NULL, salida TIME DEFAULT NULL, llegada TIME DEFAULT NULL, telefono VARCHAR(15) DEFAULT NULL, email VARCHAR(200) DEFAULT NULL, web VARCHAR(500) DEFAULT NULL, imagen_portada INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hotel_servicio (id_hotel INT NOT NULL, id_servicio INT NOT NULL, anotacion VARCHAR(200) DEFAULT NULL, PRIMARY KEY(id_hotel, id_servicio)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imagen (id INT AUTO_INCREMENT NOT NULL, imagen VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imagenes_hotel (id_hotel INT NOT NULL, id_imagen INT NOT NULL, PRIMARY KEY(id_hotel, id_imagen)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pack (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(300) DEFAULT NULL, descripcion VARCHAR(1000) DEFAULT NULL, precio DOUBLE PRECISION DEFAULT NULL, grupo VARCHAR(200) DEFAULT NULL, imagen_portada INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pedido (id INT AUTO_INCREMENT NOT NULL, id_usuario INT DEFAULT NULL, id_estancia INT DEFAULT NULL, precio DOUBLE PRECISION DEFAULT NULL, usado TINYINT(1) DEFAULT NULL, fecha DATE DEFAULT NULL, fecha_fin DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE servicio (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(200) DEFAULT NULL, tipo VARCHAR(200) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, usuario VARCHAR(50) DEFAULT NULL, nombre VARCHAR(200) DEFAULT NULL, apellidos VARCHAR(500) DEFAULT NULL, direccion VARCHAR(400) DEFAULT NULL, ciudad VARCHAR(400) DEFAULT NULL, fecha_nacimiento DATE DEFAULT NULL, fecha_registro DATE DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

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
