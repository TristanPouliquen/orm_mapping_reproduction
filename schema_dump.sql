CREATE TABLE entity_a (
    id INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY (id)
) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB;

CREATE TABLE entity_b (
    id INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY (id)
) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB;

CREATE TABLE entity_c (
    id          INT AUTO_INCREMENT NOT NULL,
    entity_b_id INT                NOT NULL,
    entity_a_id INT DEFAULT NULL,
    password    VARCHAR(255)       NOT NULL,
    INDEX IDX_74D4098861A7459D (entity_b_id),
    INDEX IDX_74D409887312EA73 (entity_a_id),
    PRIMARY KEY (id)
) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB;

ALTER TABLE entity_c
    ADD CONSTRAINT FK_74D4098861A7459D FOREIGN KEY (entity_b_id) REFERENCES entity_b (id);
ALTER TABLE entity_c
    ADD CONSTRAINT FK_74D409887312EA73 FOREIGN KEY (entity_a_id) REFERENCES entity_a (id);
