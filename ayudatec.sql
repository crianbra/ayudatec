create database ayudatec;
use ayudatec;
create schema public;

-- Table: public.cita

-- DROP TABLE public.cita;

CREATE TABLE public.cita
(
    descripcion text COLLATE pg_catalog."default",
    fecha timestamp(4) without time zone,
    idcita integer NOT NULL,
    usuarioid integer,
    CONSTRAINT cita_pkey PRIMARY KEY (idcita),
    CONSTRAINT idcita_idusuario FOREIGN KEY (usuarioid)
        REFERENCES public.usuario (idusuario) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.cita
    OWNER to postgres;
    
    
    -- Table: public.estado_cita

-- DROP TABLE public.estado_cita;

CREATE TABLE public.estado_cita
(
    idestadocita integer NOT NULL,
    descripcion text COLLATE pg_catalog."default",
    citaid integer,
    CONSTRAINT estado_cita_pkey PRIMARY KEY (idestadocita),
    CONSTRAINT idestadocita_idcita FOREIGN KEY (citaid)
        REFERENCES public.cita (idcita) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.estado_cita
    OWNER to postgres;
    
    -- Table: public.calificacion

-- DROP TABLE public.calificacion;

CREATE TABLE public.calificacion
(
    idcalificacion integer NOT NULL,
    rating integer,
    comentario text COLLATE pg_catalog."default",
    usuarioid integer,
    CONSTRAINT calificacion_pkey PRIMARY KEY (idcalificacion),
    CONSTRAINT idcalificacion_idusuario FOREIGN KEY (usuarioid)
        REFERENCES public.usuario (idusuario) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.calificacion
    OWNER to postgres;