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