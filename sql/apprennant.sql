/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     06/03/2020 15:48:47                          */
/*==============================================================*/


drop table if exists Apprenant;

drop table if exists tuteur;

/*==============================================================*/
/* Table: tuteur                                                */
/*==============================================================*/
create table tuteur
(
   telephone              varchar(255),
   nom                    varchar(255),
   prenom                 varchar(255),
   domicile               varchar(255),
   primary key (telephone)
);
/*==============================================================*/
/* Table: Apprenant                                             */
/*==============================================================*/
create table Apprenant
(
   rang                 int not null,
   tel_tuteur           varchar(255),
   nom                  varchar(255),
   prenom               varchar(255),
   date_de_naissance    varchar(255),
   ville_origine        varchar(255),
   etablissement        varchar(255),
   contact              varchar(255),
   photo                varchar(255),
   primary key (rang),
   key AK_Identifier_1 (tel_tuteur)
);


alter table Apprenant add constraint FK_Association_1 foreign key (tel_tuteur)
      references tuteur (telephone) on delete restrict on update restrict;

