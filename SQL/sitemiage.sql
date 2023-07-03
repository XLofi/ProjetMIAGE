create table if not exists parents
(
    id                int auto_increment
    primary key,
    personne_id       int          null,
    parent1_nom       varchar(255) null,
    parent1_prenom    varchar(255) null,
    parent1_email     varchar(255) null,
    parent1_telephone varchar(255) null,
    parent2_nom       varchar(255) null,
    parent2_prenom    varchar(255) null,
    parent2_email     varchar(255) null,
    parent2_telephone varchar(255) null
    );

create index personne_id
    on parents (personne_id);

create table if not exists personne
(
    id              int auto_increment
    primary key,
    Nom             varchar(255)     null,
    Prenom          varchar(255)     null,
    MotdePasse      varchar(255)     null,
    EtatCandidature varchar(255)     null,
    NomJeuneFille   varchar(255)     null,
    DateNaissance   date             null,
    Role            varchar(50)      null,
    Compte          char default 'E' not null
    )
    engine = InnoDB
    charset = latin1;

create table if not exists adresseetudiant
(
    id          int auto_increment
    primary key,
    Ville       varchar(255) null,
    CodePostal  varchar(10)  null,
    Email       varchar(255) null,
    Telephone   varchar(20)  null,
    Mobile      varchar(20)  null,
    personne_id int          null,
    constraint adresseetudiant_ibfk_1
    foreign key (personne_id) references personne (id)
    )
    engine = InnoDB
    charset = latin1;

create index personne_id
    on adresseetudiant (personne_id);

create table if not exists autresformations
(
    id          int auto_increment
    primary key,
    Formation   varchar(255) null,
    personne_id int          null,
    constraint autresformations_ibfk_1
    foreign key (personne_id) references personne (id)
    )
    engine = InnoDB
    charset = latin1;

create index personne_id
    on autresformations (personne_id);

create table if not exists baccalaureat
(
    id          int auto_increment
    primary key,
    Serie       varchar(255) null,
    Mention     varchar(255) null,
    Annee       int          null,
    Lieu        varchar(255) null,
    personne_id int          null,
    constraint baccalaureat_ibfk_1
    foreign key (personne_id) references personne (id)
    )
    engine = InnoDB
    charset = latin1;

create index personne_id
    on baccalaureat (personne_id);

create table if not exists candidatsl3miageapprentissage
(
    id                int auto_increment
    primary key,
    ContactEntreprise varchar(255) null,
    personne_id       int          null,
    constraint candidatsl3miageapprentissage_ibfk_1
    foreign key (personne_id) references personne (id)
    )
    engine = InnoDB
    charset = latin1;

create index personne_id
    on candidatsl3miageapprentissage (personne_id);

create table if not exists documents
(
    id                                  int auto_increment
    primary key,
    Photo                               blob null,
    LM                                  blob null,
    CV                                  blob null,
    RelevesNotesBac                     blob null,
    Diplomes                            blob null,
    JustificatifActiviteProfessionnelle blob null,
    DossierValidationSujet              blob null,
    personne_id                         int  null,
    constraint documents_ibfk_1
    foreign key (personne_id) references personne (id)
    )
    engine = InnoDB
    charset = latin1;

create index personne_id
    on documents (personne_id);

create table if not exists premiercycle
(
    id                           int auto_increment
    primary key,
    Annee1Intitule               varchar(255)  null,
    Annee1AnneeObtention         int           null,
    Annee1Lieu                   varchar(255)  null,
    Annee1Moyenne                decimal(4, 2) null,
    Annee2Intitule               varchar(255)  null,
    Annee2AnneeObtention         int           null,
    Annee2Lieu                   varchar(255)  null,
    Annee2Moyenne                decimal(4, 2) null,
    AutresDiplomesIntitule       varchar(255)  null,
    AutresDiplomesAnneeObtention int           null,
    AutresDiplomesLieu           varchar(255)  null,
    AutresDiplomesMoyenne        decimal(4, 2) null,
    personne_id                  int           null,
    constraint premiercycle_ibfk_1
    foreign key (personne_id) references personne (id)
    )
    engine = InnoDB
    charset = latin1;

create index personne_id
    on premiercycle (personne_id);

create table if not exists stagesentreprise
(
    id          int auto_increment
    primary key,
    Stage       varchar(255) null,
    Theme       varchar(255) null,
    personne_id int          null,
    constraint stagesentreprise_ibfk_1
    foreign key (personne_id) references personne (id)
    )
    engine = InnoDB
    charset = latin1;

create index personne_id
    on stagesentreprise (personne_id);

create table if not exists titulairebts
(
    id                    int auto_increment
    primary key,
    BTS                   varchar(255)  null,
    DUT                   varchar(255)  null,
    AvisResponsableEtudes text          null,
    RangClassement        varchar(50)   null,
    MoyenneEtudiant       decimal(4, 2) null,
    MoyennePromotion      decimal(4, 2) null,
    DateAvis              date          null,
    personne_id           int           null,
    constraint titulairebts_ibfk_1
    foreign key (personne_id) references personne (id)
    )
    engine = InnoDB
    charset = latin1;

create index personne_id
    on titulairebts (personne_id);

