/* CRIANDO BASE DE DADOS */
CREATE DATABASE scpe;

/* CONECTANDO A BASE DE DADOS */
USE scpe;

/* CRIANDO TABELAS */
CREATE TABLE users(
  id INTEGER AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(250) UNIQUE NOT NULL,
  email_verified_at timestamp,
  password VARCHAR(250) NOT NULL,
  remenber_token VARCHAR(255),
  created_at timestamp,
  updated_at timestamp,
  PRIMARY KEY(id)
);

CREATE TABLE failedJobs(
  idFailedJobs INTEGER,
  connection TEXT,
  queue TEXT,
  payload LONGTEXT,
  exception LONGTEXT,
  PRIMARY KEY(idFailedJobs)
);

CREATE TABLE passwordResets(
  email varchar(250),
  token varchar(250),
  created_at timestamp,
  index(email)
);

CREATE TABLE curso(
    idCurso INTEGER,
    nomeCurso VARCHAR(100) UNIQUE NOT NULL,
    PRIMARY KEY(idCurso)
);

CREATE TABLE disciplina(
    idDisciplina INTEGER,
    nomeDisciplina VARCHAR(100) UNIQUE NOT NULL,
    PRIMARY KEY(idDisciplina)
);

CREATE TABLE grade(
    idGrade INTEGER,
    anoGrade year NOT NULL,
    semestreGrade ENUM('1','2','3') NOT NULL,
    id_Curso INTEGER NOT NULL,
    PRIMARY KEY(idGrade)
);

CREATE TABLE professor(
    idProfessor INTEGER,
    nomeProfessor VARCHAR(100) UNIQUE NOT NULL,
    PRIMARY KEY(idProfessor)
);

/* TABELAS ASSOCIATIVAS */
CREATE TABLE disciplinaProfessor(
    id_Disciplina INTEGER,
    id_Professor INTEGER,
    PRIMARY KEY(id_Disciplina, id_Professor)
);

CREATE TABLE disciplinaCursoGrade(
    id_Disciplina INTEGER,
    id_Curso INTEGER,
    id_Grade INTEGER,
    ementa LONGTEXT,
    PRIMARY KEY(id_Disciplina, id_Curso, id_Grade)
);

/* FOREIGN KEYS */
ALTER TABLE disciplinaProfessor
ADD CONSTRAINT fk_disciplina_disciplinaProfessor
FOREIGN KEY(id_Disciplina)
REFERENCES disciplina(idDisciplina);

ALTER TABLE disciplinaProfessor
ADD CONSTRAINT fk_professor_disciplinaProfessor
FOREIGN KEY(id_Professor)
REFERENCES professor(idProfessor);

ALTER TABLE grade
ADD CONSTRAINT fk_curso_grade
FOREIGN KEY(id_Curso)
REFERENCES curso(idCurso);

ALTER TABLE disciplinaCursoGrade
ADD CONSTRAINT fk_curso_disciplinaCursoGrade
FOREIGN KEY(id_Curso)
REFERENCES curso(idCurso);

ALTER TABLE disciplinaCursoGrade
ADD CONSTRAINT fk_disciplina_disciplinaCursoGrade
FOREIGN KEY(id_Disciplina)
REFERENCES disciplina(idDisciplina);

ALTER TABLE disciplinaCursoGrade
ADD CONSTRAINT fk_grade_disciplinaCursoGrade
FOREIGN key(id_Grade)
REFERENCES grade(idGrade);

/* INSERINDO DADOS NA BASE DE DADOS */
INSERT INTO curso
VALUES(1, 'Ciências da Computação'),
      (2, 'Ciências Econômicas'),
      (3, 'Segurança da Informação');

INSERT INTO grade
VALUES(1,2020,'1',1),
	  (2,2019,'2',1),
	  (3,2018,'3',1),
	  (4,2020,'1',2),
	  (5,2019,'2',2),
	  (6,2018,'3',2),
	  (7,2020,'1',3),
	  (8,2019,'2',3),
	  (9,2018,'3',3);

INSERT INTO disciplina
VALUES(1, 'Algorítmos e Estrutura de Dados I'),
      (2, 'Comunicação Corporativa'),
      (3, 'Fundamentos da Computação'),
      (4, 'Linguagem de Programação I'),
      (5, 'Lógica Aplicada a Computação'),
      (6, 'Matemática'),
      (7, 'Algorítmos e Estrutura de Dados II'),
      (8, 'Estatística Aplicada a Computação'),
      (9, 'Linguagem de Programação II'),
      (10, 'Matemática Aplicada'),
      (11, 'Psicologia Aplicada'),
      (12, 'Sistemas Digitais'),
      (13, 'Algorítmos e Estrutura de Dados III'),
      (14, 'Arquitetura de Computadores I'),
      (15, 'Cálculo Diferencial e Integral I'),
      (16, 'Interação Humano-Computador'),
      (17, 'Laboratório de Arquitetura de Computadores'),
      (18, 'Teoria da Computação'),
      (19, 'Comunicação Empresarial'),
      (20, 'Introdução à Contabilidade'),
      (21, 'Introdução à Metodologia de Estudo e Pesquisa'),
      (22, 'Introdução à Microeconomia'),
      (23, 'Introdução ao Comércio Exterior'),
      (24, 'Sociologia Aplicada aos Negócios'),
      (25, 'Universo de Atuação do Gestor'),
      (26, 'Concepção e Estrutura das Organizações'),
      (27, 'Contabilidade Básica'),
      (28, 'Direito e Legislação'),
      (29, 'Estatística'),
      (30, 'Filosofia e Ética'),
      (31, 'Introdução à Macroeconomia'),
      (32, 'Políticas de Comércio Exterior'),
      (33, 'Tecnologia da Informação Aplicada a Negócios'),
      (34, 'Contabilidade Social'),
      (35, 'Empreendedorismo'),
      (36, 'Estatística Econômica'),
      (37, 'Estrutura das Demonstrações Contábeis'),
      (38, 'História Econômica Geral'),
      (39, 'Matemática Financeira'),
      (40, 'Algoritmos e Estruturas Básicas	'),
      (41, 'Arquitetura de Computadores'),
      (42, 'Comunicação e Expressão'),
      (43, 'Língua Inglesa I'),
      (44, 'Sistemas Embarcados'),
      (45, 'Arquiteturas Avançadas'),
      (46, 'Conceitos Básicos de Redes'),
      (47, 'Estatística Aplicada'),
      (48, 'Língua Inglesa II'),
      (49, 'Sistemas Operacionais'),
      (50, 'Gestão de Projetos'),
      (51, 'Linguagem Script'),
      (52, 'Segurança em Computação em Nuvem'),
      (53, 'Segurança em Redes de Computadores I'),
      (54, 'Técnicas de Comutação e Roteamento');

INSERT INTO professor
VALUES(1, 'Renato Carioca Duarte'),
      (2, 'Carlos Eduardo Bognar'),
      (3, 'Nelson Bartello'),
      (4, 'Aparecido Vlademir de Freitas');

INSERT INTO disciplinaProfessor
VALUES(1, 1),
      (3, 2),
      (6, 3),
      (7, 4),
      (1, 4),
      (13, 4);

INSERT INTO disciplinaCursoGrade
VALUES(1, 1, 1, 'Ementa: Algorítmos e Estrutura de Dados I'),
      (2, 1, 1, 'Ementa: Comunicação Corporativa'),
      (3, 1, 1, 'Ementa: Fundamentos da Computação'),
      (4, 1, 1, 'Ementa: Linguagem de Programação I'),
      (5, 1, 1, 'Ementa: Lógica Aplicada a Computação'),
      (6, 1, 1, 'Ementa: Matemática'),
      (7, 1, 2, 'Ementa: Algorítmos e Estrutura de Dados II'),
      (8, 1, 2, 'Ementa: Estatística Aplicada a Computação'),
      (9, 1, 2, 'Ementa: Linguagem de Programação II'),
      (10, 1, 2, 'Ementa: Matemática Aplicada'),
      (11, 1, 2, 'Ementa: Psicologia Aplicada'),
      (12, 1, 2, 'Ementa: Sistemas Digitais'),
      (13, 1, 3, 'Ementa: Algorítmos e Estrutura de Dados III'),
      (14, 1, 3, 'Ementa: Arquitetura de Computadores I'),
      (15, 1, 3, 'Ementa: Cálculo Diferencial e Integral I'),
      (16, 1, 3, 'Ementa: Interação Humano-Computador'),
      (17, 1, 3, 'Ementa: Laboratório de Arquitetura de Computadores'),
      (18, 1, 3, 'Ementa: Teoria da Computação'),
      (19, 2, 4, 'Ementa: Comunicação Empresarial'), 
      (20, 2, 4, 'Ementa: Introdução à Contabilidade'),
      (21, 2, 4, 'Ementa: Introdução à Metodologia de Estudo e Pesquisa'),
      (22, 2, 4, 'Ementa: Introdução à Microeconomia'),
      (23, 2, 4, 'Ementa: Introdução ao Comércio Exterior'),
      (6, 2, 4, 'Ementa: Matemática'),
      (24, 2, 4, 'Ementa: Sociologia Aplicada aos Negócios'),
      (25, 2, 4, 'Ementa: Universo de Atuação do Gestor'),
      (26, 2, 5, 'Ementa: Concepção e Estrutura das Organizações'),
      (27, 2, 5, 'Ementa: Contabilidade Básica'),
      (28, 2, 5, 'Ementa: Direito e Legislação'),
      (29, 2, 5, 'Ementa: Estatística'),
      (30, 2, 5, 'Ementa: Filosofia e Ética'),
      (31, 2, 5, 'Ementa: Introdução à Macroeconomia'),
      (32, 2, 5, 'Ementa: Políticas de Comércio Exterior'),
      (33, 2, 5, 'Ementa: Tecnologia da Informação Aplicada a Negócios'),
      (34, 2, 6, 'Ementa: Contabilidade Social'),
      (35, 2, 6, 'Ementa: Empreendedorismo'),
      (36, 2, 6, 'Ementa: Estatística Econômica'),
      (37, 2, 6, 'Ementa: Estrutura das Demonstrações Contábeis'),
      (38, 2, 6, 'Ementa: História Econômica Geral'),
      (39, 2, 6, 'Ementa: Matemática Financeira'),
      (40, 3, 7, 'Ementa: Algoritmos e Estruturas Básicas'),
      (41, 3, 7, 'Ementa: Arquitetura de Computadores'),
      (42, 3, 7, 'Ementa: Comunicação e Expressão'),
      (43, 3, 7, 'Ementa: Língua Inglesa I'),
      (5, 3, 7, 'Ementa: Lógica Aplicada à Computação'),
      (11, 3, 7, 'Ementa: Psicologia aplicada'),
      (44, 3, 7, 'Ementa: Sistemas Embarcados'),
      (45, 3, 8, 'Ementa: Arquiteturas Avançadas'),
      (46, 3, 8, 'Ementa: Conceitos Básicos de Redes'),
      (47, 3, 8, 'Ementa: Estatística Aplicada'),
      (48, 3, 8, 'Ementa: Língua Inglesa II'),
      (4, 3, 8, 'Ementa: Linguagem de Programação I'),
      (49, 3, 8, 'Ementa: Sistemas Operacionais'),
      (50, 3, 9, 'Ementa: Gestão de Projetos'),
      (51, 3, 9, 'Ementa: Linguagem Script'),
      (52, 3, 9, 'Ementa: Segurança em Computação em Nuvem'),
      (53, 3, 9, 'Ementa: Segurança em Redes de Computadores I'),
      (54, 3, 9, 'Ementa: Técnicas de Comutação e Roteamento');

/* 
*   QUERYS UTILIZADAS PELOS WEBSERVERS 
*/

/*   Retorna Lista de todos os Cursos   */
SELECT 
	c.idCurso AS 'Cod',
    c.nomeCurso AS 'Nome'
FROM curso c
ORDER BY c.nomeCurso ASC;

/* Retorna Lista contendo id, Ano e Semestre do Grade referente ao Curso */
SELECT 
    g.idGrade AS 'Cod',
    g.anoGrade AS 'Ano',
    g.semestreGrade AS 'Semestre'
FROM curso c
INNER JOIN grade g
ON c.idCurso = g.id_Curso
WHERE g.id_Curso = 1
ORDER BY g.anoGrade DESC; 

/* Retorna Lista contendo id, nome da Disciplina referente ao Curso e Grade */
SELECT 
    d.idDisciplina AS 'Cod',
    d.nomeDisciplina AS 'Nome'
FROM disciplinaCursoGrade dcg
INNER JOIN curso c
ON c.idCurso = dcg.id_Curso
INNER JOIN disciplina d
ON d.idDisciplina = dcg.id_Disciplina
INNER JOIN grade g
ON g.idGrade = dcg.id_Grade
WHERE (dcg.id_curso = 1 AND dcg.id_Grade = 1)
ORDER BY d.nomeDisciplina ASC;

/* Retorna Ementa referente ao Curso, Grade e Disciplina */
SELECT 
    dcg.ementa AS 'Ementa'
FROM disciplinaCursoGrade dcg
INNER JOIN curso c
ON c.idCurso = dcg.id_Curso
INNER JOIN disciplina d
ON d.idDisciplina = dcg.id_Disciplina
INNER JOIN grade g
ON g.idGrade = dcg.id_Grade
WHERE (dcg.id_curso = 1 AND dcg.id_Grade = 1 AND d.idDisciplina = 1);

/* Persiste os Dados alterados da 'Ementa' na Base de Dados */
UPDATE disciplinaCursoGrade
SET ementa = 'Ementa: Algorítmos e Estrutura de Dados I'
WHERE (id_Disciplina = 1 AND id_Curso = 1 AND id_Grade = 1);