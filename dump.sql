--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: infos; Type: TABLE; Schema: public; Owner: ldphxungmtlhvu; Tablespace: 
--

CREATE TABLE infos (
    info_attr character varying(200),
    info_value text,
    instituicao_id integer
);


ALTER TABLE public.infos OWNER TO ldphxungmtlhvu;

--
-- Name: infos_backup; Type: TABLE; Schema: public; Owner: ldphxungmtlhvu; Tablespace: 
--

CREATE TABLE infos_backup (
    id integer NOT NULL,
    instituicao_id integer NOT NULL,
    instituicao_nome character varying(255),
    missao text,
    visao text,
    objetivos text,
    swot_pforte text,
    swot_pfraco text,
    swot_oportunidades text,
    swot_ameacas text,
    logo_url character varying(255)
);


ALTER TABLE public.infos_backup OWNER TO ldphxungmtlhvu;

--
-- Name: meetings; Type: TABLE; Schema: public; Owner: ldphxungmtlhvu; Tablespace: 
--

CREATE TABLE meetings (
    id integer NOT NULL,
    organ_id integer,
    m_date date DEFAULT ('now'::text)::date,
    m_time time without time zone DEFAULT ('now'::text)::time with time zone,
    local text,
    participants text,
    systems text,
    infra text,
    processes text,
    people text,
    owner_id integer
);


ALTER TABLE public.meetings OWNER TO ldphxungmtlhvu;

--
-- Name: meetings_id_seq; Type: SEQUENCE; Schema: public; Owner: ldphxungmtlhvu
--

CREATE SEQUENCE meetings_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.meetings_id_seq OWNER TO ldphxungmtlhvu;

--
-- Name: meetings_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ldphxungmtlhvu
--

ALTER SEQUENCE meetings_id_seq OWNED BY meetings.id;


--
-- Name: organs; Type: TABLE; Schema: public; Owner: ldphxungmtlhvu; Tablespace: 
--

CREATE TABLE organs (
    id integer NOT NULL,
    owner_id integer,
    name character varying(200),
    description text
);


ALTER TABLE public.organs OWNER TO ldphxungmtlhvu;

--
-- Name: organs_id_seq; Type: SEQUENCE; Schema: public; Owner: ldphxungmtlhvu
--

CREATE SEQUENCE organs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.organs_id_seq OWNER TO ldphxungmtlhvu;

--
-- Name: organs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ldphxungmtlhvu
--

ALTER SEQUENCE organs_id_seq OWNED BY organs.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: ldphxungmtlhvu
--

ALTER TABLE ONLY meetings ALTER COLUMN id SET DEFAULT nextval('meetings_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: ldphxungmtlhvu
--

ALTER TABLE ONLY organs ALTER COLUMN id SET DEFAULT nextval('organs_id_seq'::regclass);


--
-- Data for Name: infos; Type: TABLE DATA; Schema: public; Owner: ldphxungmtlhvu
--

INSERT INTO infos VALUES ('logo_url', 'http://i.imgur.com/lObpINY.jpg', 1);
INSERT INTO infos VALUES ('objetivos', 'esse é o objetivo!!', 1);
INSERT INTO infos VALUES ('organizacional', 'estrutura organizacional 5551', 1);
INSERT INTO infos VALUES ('metodologia', 'METODOLOGIA', 1);
INSERT INTO infos VALUES ('redes', 'redess2', 1);
INSERT INTO infos VALUES ('instituicao_nome', 'Prefeitura Municipal de Guaraci', 1);
INSERT INTO infos VALUES ('descricao', 'descrição ttt 2<img src="http://pandora-111331.sae1.nitrousbox.com:80/public/uploads/GAIA 1.jpg" title="Image: http://pandora-111331.sae1.nitrousbox.com:80/public/uploads/GAIA 1.jpg">', 1);
INSERT INTO infos VALUES ('servidores', 'Os servidores estão localizados nas cidades citadas na tabela a seguir.<br><br><br><b>Tabela 1</b><br><br>__TABELA_place__', 1);
INSERT INTO infos VALUES ('visao', 'essa é a visão', 1);
INSERT INTO infos VALUES ('missao', 'essa é a missão<br><ul><li>dfgdfgdfg</li><li>fdddd', 1);
INSERT INTO infos VALUES ('swot_pforte', 'pontos fortes ', 1);
INSERT INTO infos VALUES ('swot_pfraco', 'pontos fracos', 1);
INSERT INTO infos VALUES ('swot_oportunidades', 'oportunidades', 1);
INSERT INTO infos VALUES ('swot_ameacas', 'ameaçassss', 1);


--
-- Data for Name: infos_backup; Type: TABLE DATA; Schema: public; Owner: ldphxungmtlhvu
--

INSERT INTO infos_backup VALUES (1, 1, 'Município de Ibiporã', 'essa é a missao<br>', 'visao da empresa<br><br><img alt="" src="http://pandora-111331.sae1.nitrousbox.com:80/public/uploads/69f75a6cbd139e7c1361b80df3e22b3f (3).jpg" title="Image: http://pandora-111331.sae1.nitrousbox.com:80/public/uploads/69f75a6cbd139e7c1361b80df3e22b3f (3).jpg"><br>aaaa<br><br>', 'objetivo<br><br><br><br><br><br>', 'ponto forte', 'pontos fracos', 'oportunidades', 'ameacas', 'http://i.imgur.com/lObpINY.jpg');


--
-- Data for Name: meetings; Type: TABLE DATA; Schema: public; Owner: ldphxungmtlhvu
--

INSERT INTO meetings VALUES (6, 4, '2015-02-20', '10:00:00', 'Prefeitura', 'José<br>João<br><br>', 'fazemos tudo na mão', 'Internet ruim          <br>Internet ruim<br>Wifi ruim', 'Os pedidos se perdem          <br>temos vários problemas<br><br>', 'A equipe não trabalha bem', 1);
INSERT INTO meetings VALUES (7, 4, '2015-02-20', '11:00:00', 'teste', 'João<br>JOsé', '', '', '', '<ul><li>tudo está ótimo</li><li>teste teste</li><li>outro teste</li></ul>', 1);
INSERT INTO meetings VALUES (8, 4, '2014-01-06', '02:02:00', '22222', '', '', '', '', '', 1);
INSERT INTO meetings VALUES (5, 4, '2015-02-19', '22:09:00', 'Lugar', 'aaaaa', 'qqqq', 'wwwwww', 'aeeeee', 'aaaaa', 1);
INSERT INTO meetings VALUES (1, 4, '2014-11-05', '12:54:00', 'Localllddsddsdsd', 'Equipe FAUEL e representante da Secretaria', '<ul><li>Problemas no Equiplano no que tange ao envio de processos para os setores da Prefeitura (Atualmente, só consegue enviar processos para a Secretaria de Obras);</li><li>Sistema de Gestão de Protocolo Unificado que permita, inclusive, que o cidadão acompanhe o andamento do processo;</li><li>Aquisição de Software: AUTOCAD, REVIT ou Sketch Up;</li></ul>', '<ul><li>Computadores mais potentes, visto que o trabalho exige;</li><li>Plotter de alto desempenho;</li><li>Aumentar espaço no diretório;</li><li>Está muito ruim</li></ul>', '<ul><li>Registro de Ocorrências (Service desk poderia resolver);</li><li>Liberar acessos ao YOUTUBE, visto que a Secretaria necessita para as atividades do cotidiano;</li><li>Comunicar via SKYPE, por exemplo. Ferramentas colaborativas para facilitar os processos de comunicação;</li><li>Há vários problemas</li></ul>', '<ul><li>Nenhum comentário;</li><li>Teste&nbsp;</li></ul>', 1);


--
-- Name: meetings_id_seq; Type: SEQUENCE SET; Schema: public; Owner: ldphxungmtlhvu
--

SELECT pg_catalog.setval('meetings_id_seq', 8, true);


--
-- Data for Name: organs; Type: TABLE DATA; Schema: public; Owner: ldphxungmtlhvu
--

INSERT INTO organs VALUES (4, 1, 'Secretaria de Planejamento', 'Uma descrição sobre o orgão');
INSERT INTO organs VALUES (6, 1, 'secretaria de esportes', 'secretaria de esportes');


--
-- Name: organs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: ldphxungmtlhvu
--

SELECT pg_catalog.setval('organs_id_seq', 6, true);


--
-- Name: infos_pkey; Type: CONSTRAINT; Schema: public; Owner: ldphxungmtlhvu; Tablespace: 
--

ALTER TABLE ONLY infos_backup
    ADD CONSTRAINT infos_pkey PRIMARY KEY (id);


--
-- Name: organs_pkey; Type: CONSTRAINT; Schema: public; Owner: ldphxungmtlhvu; Tablespace: 
--

ALTER TABLE ONLY organs
    ADD CONSTRAINT organs_pkey PRIMARY KEY (id);


--
-- Name: public; Type: ACL; Schema: -; Owner: ldphxungmtlhvu
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM ldphxungmtlhvu;
GRANT ALL ON SCHEMA public TO ldphxungmtlhvu;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

