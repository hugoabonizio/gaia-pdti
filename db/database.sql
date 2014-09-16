PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE infos (
	id INTEGER NOT NULL PRIMARY KEY,
	instituicao_id INTEGER NOT NULL,
	instituicao_nome VARCHAR(255),
	missao TEXT,
	visao TEXT,
	objetivos TEXT,
	swot_pforte TEXT,
	swot_pfraco TEXT,
	swot_oportunidades TEXT,
	swot_ameacas TEXT,
	logo_url VARCHAR(255)
);
INSERT INTO "infos" VALUES(1,1,'Algum Município','missao da empresa','visao da empresa', 'objetivos', 'ponto forte',	'pontos fracos', 'oportunidades', 'ameacas', 'http://i.imgur.com/G6w8Ft9.jpg');
COMMIT;

CREATE TABLE instituicoes (
  id SERIAL PRIMARY KEY,
  nome VARCHAR(255)
);