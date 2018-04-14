CREATE TABLE client (
 client_name              SMALLINT(2) NOT NULL,
 client_addr               CHAR(14),
 contact_info               CHAR(13),
PRIMARY KEY (client_name));


INSERT INTO client VALUES (Jane,'Moorestreet','email: jane1092@email.com');
INSERT INTO client VALUES (John,'Tuam Road, Galway','email: john674838@email.com');
INSERT INTO client VALUES (Ryan,'Claregalway','contact: 0857384757');
INSERT INTO client VALUES (Sarah,'Knocknacara','contact: 0897462746');
INSERT INTO client VALUES (Emma,'Doughiska','contact: 083756483');

CREATE TABLE EMP (
 EMPNO               SMALLINT(4) NOT NULL,
 ENAME               CHAR(10),
 JOB                 CHAR(9),
 MGR                 SMALLINT(4),
 HIREDATE            VARCHAR(9),
 SAL                 DECIMAL(7,2),
 COMM                DECIMAL(7,2),
 DEPTNO              SMALLINT(2) NOT NULL,
FOREIGN KEY (DEPTNO) REFERENCES DEPT(DEPTNO),
PRIMARY KEY (EMPNO));



INSERT INTO EMP VALUES (7839,'KING','PRESIDENT',NULL,'17-NOV-81',5000,NULL,10);
INSERT INTO EMP VALUES (7698,'BLAKE','MANAGER',7839,'1-MAY-81',2850,NULL,30);
INSERT INTO EMP VALUES (7782,'CLARK','MANAGER',7839,'9-JUN-81',2450,NULL,10);
INSERT INTO EMP VALUES (7566,'JONES','MANAGER',7839,'2-APR-81',2975,NULL,20);
INSERT INTO EMP VALUES (7654,'MARTIN','SALESMAN',7698,'28-SEP-81',1250,1400,30);
INSERT INTO EMP VALUES (7499,'ALLEN','SALESMAN',7698,'20-FEB-81',1600,300,30);
INSERT INTO EMP VALUES (7844,'TURNER','SALESMAN',7698,'8-SEP-81',1500,0,30);
INSERT INTO EMP VALUES (7900,'JAMES','CLERK',7698,'3-DEC-81',950,NULL,30);
INSERT INTO EMP VALUES (7521,'WARD','SALESMAN',7698,'22-FEB-81',1250,500,30);
INSERT INTO EMP VALUES (7902,'FORD','ANALYST',7566,'3-DEC-81',3000,NULL,20);
INSERT INTO EMP VALUES (7369,'SMITH','CLERK',7902,'17-DEC-80',800,NULL,20);
INSERT INTO EMP VALUES (7788,'SCOTT','ANALYST',7566,'09-DEC-82',3000,NULL,20);
INSERT INTO EMP VALUES (7876,'ADAMS','CLERK',7788,'12-JAN-83',1100,NULL,20);
INSERT INTO EMP VALUES (7934,'MILLER','CLERK',7782,'23-JAN-82',1300,NULL,10);







CREATE TABLE client (
 client_name              CHAR(20) NOT NULL,
 client_addr               CHAR(14),
 other_client_details                 CHAR(13),
PRIMARY KEY (client_name));


INSERT INTO client VALUES ('Jane','Moorestreet','email: jane1092@email.com');
INSERT INTO client VALUES ('John','Tuam Road, Galway','email: john674838@email.com');
INSERT INTO client VALUES ('Ryan','Claregalway','contact: 0857384757');
INSERT INTO client VALUES ('Sarah','Knocknacara','contact: 0897462746');
INSERT INTO client VALUES ('Peter','Salthill','contact: 091763546');
INSERT INTO client VALUES ('Anne','Barna','n/a');




CREATE TABLE item (
 item_code               INT(10),
 item_name              CHAR(20) NOT NULL,
 item_quantity          INT(10),
 other_item_details                 CHAR(13),
PRIMARY KEY (item_code));


INSERT INTO item VALUES (875904,'Hammer',15,'Weight: 0.45kg');
INSERT INTO item VALUES (874321,'Jigsaw',5, '18V Li-ion');
INSERT INTO item VALUES (873450,'JackHammer', 3, '1240W');
INSERT INTO item VALUES (907684,'Angle Grdiner',9 ,'720W');
INSERT INTO item VALUES (578421,'Sander', 10, '230 - 240V');
INSERT INTO item VALUES (906958,'Cordless Drill', 13 , '18v 1.5Ah');