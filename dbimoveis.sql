CREATE DATABASE sistemadeimoveis;

USE sistemadeimoveis;

CREATE TABLE inquilinos (
  idinquilinos int NOT NULL AUTO_INCREMENT,
  nomeInquilino varchar(45) NOT NULL,
  cpfInquilino varchar(45) NOT NULL,
  telefoneInquilino varchar(45) NOT NULL,
  dataNascimentoInquilino date NOT NULL,
  id_imovel int NOT NULL,
  PRIMARY KEY (idinquilinos,cpfInquilino));
  
CREATE TABLE imovel (
  idimovel INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  Aluguel VARCHAR(45) NOT NULL,
  rua VARCHAR(45) NOT NULL,
  numero VARCHAR(45) NOT NULL,
  bairro VARCHAR(45) NOT NULL,
  estado VARCHAR(45) NOT NULL,
  cep VARCHAR(45) NOT NULL,
  PRIMARY KEY (idimovel));

ALTER TABLE inquilinos
ADD CONSTRAINT fk_id_imovel
FOREIGN KEY (id_imovel)
REFERENCES imovel(idimovel);

INSERT INTO `imovel` VALUES (8,'Alexandra Brito Marinho','2000,00 ','Thompson Crescent','6326','Portland','KS','45858',''),
(9,'Pérola Santarém Galvão','900,00','Kohler Avenue Suite','459 ','Missoula','IN ','28920',''),
(10,'Luzia Sanches Granjeiro','850,00','Price Harbor Suite','852 ','Bentonville','CO ','39819',''),
(11,'Henzo Frias Guedelha','450,00','Roberts Route Suite','831 ','Oklahoma ','WV','66980',''),
(12,'Óscar Festas Seabra','790,00','Fay Field Suite','943 ','Edmond','GA ','18078',''),
(13,'Melany Lobato Parracho','Patricia Radial Suite','Patricia Radial Suite','672 ','Huntington','NC ','74038','');

INSERT INTO `inquilinos` VALUES
 (18,'Patrícia Vera Rezende','14898587925','86985396571','2002-01-22',10),
 (19,'Nathan Henry Isaac Cavalcanti','51865242209','83991868041','1967-03-02',11),
 (20,'Thiago Márcio Almeida','27111437080','63999491258','1954-01-14',11),
 (21,'João Yuri Matheus Lopes','57319184141','67991518351','1987-05-18',13),
 (22,'Ryan Raul Joaquim Barbosa','94823318501','47987196583','1967-06-18',11),
 (23,'Raquel Cláudia da Paz','57113451250','98984992690','1992-02-03',13),
 (24,'Bruna Heloise Antonella Araújo','85777405797','91989531098','1997-02-20',11),
 (25,'Luanna Maria silva','57877366132','9872654896','1998-03-02',11),
 (26,'Tomás Nicolas Ferreira','93546995880','66989724326','1967-02-01',8),
 (27,'Josefa Elza Alves','23814717740','91992320370','1968-03-05',8),
 (28,'Letícia Milena Melo','18842149322','61985858667','2001-01-06',10),
 (29,'Raul Fábio Fernandes','16004735477','86996288675','1946-03-06',8),
 (30,'Antônia Isabela da Cruz','53884203452','82983382119','1983-03-06',10),
 (31,'Caleb Leonardo Jesus','50617589607','21992989766','1956-02-12',8),
 (32,'Lúcia Eduarda Souza','46422164130','92999483266','1947-01-25',10);

  
UPDATE imovel SET nome ='Alexandra Brito Marinho',  Aluguel='2000,00 ', rua='Thompson Crescent', numero='6326', bairro='Portland',estado= 'KS', cep='45858' WHERE cep='45858';
UPDATE inquilinos SET nomeInquilino ='Patrícia Vera Rezende',  cpfInquilino='14898587925 ', telefoneInquilino='86985396571', dataNascimentoInquilino='2002-01-22', id_imovel='11' WHERE cpfInquilino='14898587925'; 
DELETE FROM inquilinos WHERE cpfInquilino='51865242209';
DELETE FROM imovel WHERE cep='45858';
  

select * from imovel;
select * from inquilinos;