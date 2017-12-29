PGDMP         *                u            edusmart    10.1    10.1 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           1262    16393    edusmart    DATABASE     �   CREATE DATABASE edusmart WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Ecuador.1252' LC_CTYPE = 'Spanish_Ecuador.1252';
    DROP DATABASE edusmart;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            �           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12924    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            �           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    16396    tipo    TABLE     e   CREATE TABLE tipo (
    cod_tipo integer NOT NULL,
    descripcion character varying(15) NOT NULL
);
    DROP TABLE public.tipo;
       public         postgres    false    3            �            1259    16394    Tipo_cod_tipo_seq    SEQUENCE     �   CREATE SEQUENCE "Tipo_cod_tipo_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public."Tipo_cod_tipo_seq";
       public       postgres    false    197    3            �           0    0    Tipo_cod_tipo_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE "Tipo_cod_tipo_seq" OWNED BY tipo.cod_tipo;
            public       postgres    false    196            �            1259    16597    alumno    TABLE     �   CREATE TABLE alumno (
    cod_alumno integer NOT NULL,
    descripcon text,
    grado_cod integer NOT NULL,
    curso_cod integer NOT NULL,
    usuario_cod integer NOT NULL
);
    DROP TABLE public.alumno;
       public         postgres    false    3            �            1259    16589    alumno_cod_alumno_seq    SEQUENCE     �   CREATE SEQUENCE alumno_cod_alumno_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.alumno_cod_alumno_seq;
       public       postgres    false    221    3            �           0    0    alumno_cod_alumno_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE alumno_cod_alumno_seq OWNED BY alumno.cod_alumno;
            public       postgres    false    217            �            1259    16593    alumno_curso_cod_seq    SEQUENCE     �   CREATE SEQUENCE alumno_curso_cod_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.alumno_curso_cod_seq;
       public       postgres    false    3    221            �           0    0    alumno_curso_cod_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE alumno_curso_cod_seq OWNED BY alumno.curso_cod;
            public       postgres    false    219            �            1259    16591    alumno_grado_cod_seq    SEQUENCE     �   CREATE SEQUENCE alumno_grado_cod_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.alumno_grado_cod_seq;
       public       postgres    false    3    221            �           0    0    alumno_grado_cod_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE alumno_grado_cod_seq OWNED BY alumno.grado_cod;
            public       postgres    false    218            �            1259    16595    alumno_usuario_cod_seq    SEQUENCE     �   CREATE SEQUENCE alumno_usuario_cod_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.alumno_usuario_cod_seq;
       public       postgres    false    3    221            �           0    0    alumno_usuario_cod_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE alumno_usuario_cod_seq OWNED BY alumno.usuario_cod;
            public       postgres    false    220            �            1259    16619    curso    TABLE     �   CREATE TABLE curso (
    cod_curso integer NOT NULL,
    fecha_ini date,
    fecha_fin date,
    hora_ini timestamp(6) without time zone,
    hora_fin timestamp(6) without time zone,
    estadocurso_cod integer NOT NULL,
    descripcion text NOT NULL
);
    DROP TABLE public.curso;
       public         postgres    false    3            �            1259    16615    curso_cod_curso_seq    SEQUENCE     �   CREATE SEQUENCE curso_cod_curso_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.curso_cod_curso_seq;
       public       postgres    false    224    3            �           0    0    curso_cod_curso_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE curso_cod_curso_seq OWNED BY curso.cod_curso;
            public       postgres    false    222            �            1259    16617    curso_estadocurso_cod_seq    SEQUENCE     �   CREATE SEQUENCE curso_estadocurso_cod_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.curso_estadocurso_cod_seq;
       public       postgres    false    3    224            �           0    0    curso_estadocurso_cod_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE curso_estadocurso_cod_seq OWNED BY curso.estadocurso_cod;
            public       postgres    false    223            �            1259    16472    docente    TABLE     �   CREATE TABLE docente (
    cod_docente integer NOT NULL,
    mail text,
    grado_cod integer NOT NULL,
    usuario_cod integer NOT NULL,
    materia_cod integer NOT NULL,
    curso_cod integer
);
    DROP TABLE public.docente;
       public         postgres    false    3            �            1259    16464    docente_cod_docente_seq    SEQUENCE     �   CREATE SEQUENCE docente_cod_docente_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.docente_cod_docente_seq;
       public       postgres    false    3    205            �           0    0    docente_cod_docente_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE docente_cod_docente_seq OWNED BY docente.cod_docente;
            public       postgres    false    201            �            1259    16898    docente_curso_cod_seq    SEQUENCE     �   CREATE SEQUENCE docente_curso_cod_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.docente_curso_cod_seq;
       public       postgres    false    3    205            �           0    0    docente_curso_cod_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE docente_curso_cod_seq OWNED BY docente.curso_cod;
            public       postgres    false    227            �            1259    16466    docente_grado_cod_seq    SEQUENCE     �   CREATE SEQUENCE docente_grado_cod_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.docente_grado_cod_seq;
       public       postgres    false    205    3            �           0    0    docente_grado_cod_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE docente_grado_cod_seq OWNED BY docente.grado_cod;
            public       postgres    false    202            �            1259    16470    docente_materia_cod_seq    SEQUENCE     �   CREATE SEQUENCE docente_materia_cod_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.docente_materia_cod_seq;
       public       postgres    false    205    3            �           0    0    docente_materia_cod_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE docente_materia_cod_seq OWNED BY docente.materia_cod;
            public       postgres    false    204            �            1259    16468    docente_usuario_cod_seq    SEQUENCE     �   CREATE SEQUENCE docente_usuario_cod_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.docente_usuario_cod_seq;
       public       postgres    false    3    205            �           0    0    docente_usuario_cod_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE docente_usuario_cod_seq OWNED BY docente.usuario_cod;
            public       postgres    false    203            �            1259    16628    estado_curso    TABLE     q   CREATE TABLE estado_curso (
    cod_cursoest integer NOT NULL,
    descripcion character varying(12) NOT NULL
);
     DROP TABLE public.estado_curso;
       public         postgres    false    3            �            1259    16626    estado_curso_cod_curso_seq    SEQUENCE     �   CREATE SEQUENCE estado_curso_cod_curso_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.estado_curso_cod_curso_seq;
       public       postgres    false    3    226            �           0    0    estado_curso_cod_curso_seq    SEQUENCE OWNED BY     N   ALTER SEQUENCE estado_curso_cod_curso_seq OWNED BY estado_curso.cod_cursoest;
            public       postgres    false    225            �            1259    16555    estado_tarea    TABLE     q   CREATE TABLE estado_tarea (
    cod_estadota integer NOT NULL,
    descripcion character varying(12) NOT NULL
);
     DROP TABLE public.estado_tarea;
       public         postgres    false    3            �            1259    16558    estado_tarea_cod_estadota_seq    SEQUENCE     �   CREATE SEQUENCE estado_tarea_cod_estadota_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.estado_tarea_cod_estadota_seq;
       public       postgres    false    3    215            �           0    0    estado_tarea_cod_estadota_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE estado_tarea_cod_estadota_seq OWNED BY estado_tarea.cod_estadota;
            public       postgres    false    216            �            1259    16495    grado    TABLE     t   CREATE TABLE grado (
    cod_grado integer NOT NULL,
    descripcion text NOT NULL,
    paralelo "char" NOT NULL
);
    DROP TABLE public.grado;
       public         postgres    false    3            �            1259    16493    grado_cod_grado_seq    SEQUENCE     �   CREATE SEQUENCE grado_cod_grado_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.grado_cod_grado_seq;
       public       postgres    false    3    209            �           0    0    grado_cod_grado_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE grado_cod_grado_seq OWNED BY grado.cod_grado;
            public       postgres    false    208            �            1259    16484    materia    TABLE     Z   CREATE TABLE materia (
    cod_materia integer NOT NULL,
    descripcion text NOT NULL
);
    DROP TABLE public.materia;
       public         postgres    false    3            �            1259    16482    materia_cod_materia_seq    SEQUENCE     �   CREATE SEQUENCE materia_cod_materia_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.materia_cod_materia_seq;
       public       postgres    false    207    3            �           0    0    materia_cod_materia_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE materia_cod_materia_seq OWNED BY materia.cod_materia;
            public       postgres    false    206            �            1259    16943    persona    TABLE     N  CREATE TABLE persona (
    cedula integer NOT NULL,
    nombre character varying(12) NOT NULL,
    seg_nombre character varying(12),
    apellido character varying(12) NOT NULL,
    seg_apellido character varying(12),
    f_nacimiento date,
    telefono integer,
    direccion text,
    docente_cod integer,
    alumno_cod integer
);
    DROP TABLE public.persona;
       public         postgres    false    3            �            1259    16941    persona_alumno_cod_seq1    SEQUENCE     �   CREATE SEQUENCE persona_alumno_cod_seq1
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.persona_alumno_cod_seq1;
       public       postgres    false    3    230            �           0    0    persona_alumno_cod_seq1    SEQUENCE OWNED BY     D   ALTER SEQUENCE persona_alumno_cod_seq1 OWNED BY persona.alumno_cod;
            public       postgres    false    229            �            1259    16939    persona_docente_cod_seq1    SEQUENCE     �   CREATE SEQUENCE persona_docente_cod_seq1
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.persona_docente_cod_seq1;
       public       postgres    false    3    230            �           0    0    persona_docente_cod_seq1    SEQUENCE OWNED BY     F   ALTER SEQUENCE persona_docente_cod_seq1 OWNED BY persona.docente_cod;
            public       postgres    false    228            �            1259    16527    tarea    TABLE     �   CREATE TABLE tarea (
    cod_tarea integer NOT NULL,
    fecha_ini date NOT NULL,
    fecha_fin date NOT NULL,
    materia_cod integer NOT NULL,
    grado_cod integer NOT NULL,
    "estadoT_cod" integer NOT NULL
);
    DROP TABLE public.tarea;
       public         postgres    false    3            �            1259    16525    tarea_cod_tarea_seq    SEQUENCE     �   CREATE SEQUENCE tarea_cod_tarea_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.tarea_cod_tarea_seq;
       public       postgres    false    3    211            �           0    0    tarea_cod_tarea_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE tarea_cod_tarea_seq OWNED BY tarea.cod_tarea;
            public       postgres    false    210            �            1259    16547    tarea_estadoT_cod_seq    SEQUENCE     �   CREATE SEQUENCE "tarea_estadoT_cod_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public."tarea_estadoT_cod_seq";
       public       postgres    false    211    3            �           0    0    tarea_estadoT_cod_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE "tarea_estadoT_cod_seq" OWNED BY tarea."estadoT_cod";
            public       postgres    false    214            �            1259    16540    tarea_grado_cod_seq    SEQUENCE     �   CREATE SEQUENCE tarea_grado_cod_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.tarea_grado_cod_seq;
       public       postgres    false    211    3            �           0    0    tarea_grado_cod_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE tarea_grado_cod_seq OWNED BY tarea.grado_cod;
            public       postgres    false    213            �            1259    16533    tarea_materia_cod_seq    SEQUENCE     �   CREATE SEQUENCE tarea_materia_cod_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.tarea_materia_cod_seq;
       public       postgres    false    211    3            �           0    0    tarea_materia_cod_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE tarea_materia_cod_seq OWNED BY tarea.materia_cod;
            public       postgres    false    212            �            1259    16452    usuario    TABLE     �   CREATE TABLE usuario (
    cod_usuario integer NOT NULL,
    nikcname character varying(12) NOT NULL,
    password character varying(12) NOT NULL,
    tipo_cod integer NOT NULL
);
    DROP TABLE public.usuario;
       public         postgres    false    3            �            1259    16448    usuario_cod_usuario_seq    SEQUENCE     �   CREATE SEQUENCE usuario_cod_usuario_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.usuario_cod_usuario_seq;
       public       postgres    false    3    200            �           0    0    usuario_cod_usuario_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE usuario_cod_usuario_seq OWNED BY usuario.cod_usuario;
            public       postgres    false    198            �            1259    16450    usuario_tipo_cod_seq    SEQUENCE     �   CREATE SEQUENCE usuario_tipo_cod_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.usuario_tipo_cod_seq;
       public       postgres    false    200    3            �           0    0    usuario_tipo_cod_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE usuario_tipo_cod_seq OWNED BY usuario.tipo_cod;
            public       postgres    false    199            �
           2604    16600    alumno cod_alumno    DEFAULT     h   ALTER TABLE ONLY alumno ALTER COLUMN cod_alumno SET DEFAULT nextval('alumno_cod_alumno_seq'::regclass);
 @   ALTER TABLE public.alumno ALTER COLUMN cod_alumno DROP DEFAULT;
       public       postgres    false    221    217    221            �
           2604    16601    alumno grado_cod    DEFAULT     f   ALTER TABLE ONLY alumno ALTER COLUMN grado_cod SET DEFAULT nextval('alumno_grado_cod_seq'::regclass);
 ?   ALTER TABLE public.alumno ALTER COLUMN grado_cod DROP DEFAULT;
       public       postgres    false    221    218    221            �
           2604    16602    alumno curso_cod    DEFAULT     f   ALTER TABLE ONLY alumno ALTER COLUMN curso_cod SET DEFAULT nextval('alumno_curso_cod_seq'::regclass);
 ?   ALTER TABLE public.alumno ALTER COLUMN curso_cod DROP DEFAULT;
       public       postgres    false    219    221    221            �
           2604    16603    alumno usuario_cod    DEFAULT     j   ALTER TABLE ONLY alumno ALTER COLUMN usuario_cod SET DEFAULT nextval('alumno_usuario_cod_seq'::regclass);
 A   ALTER TABLE public.alumno ALTER COLUMN usuario_cod DROP DEFAULT;
       public       postgres    false    220    221    221            �
           2604    16622    curso cod_curso    DEFAULT     d   ALTER TABLE ONLY curso ALTER COLUMN cod_curso SET DEFAULT nextval('curso_cod_curso_seq'::regclass);
 >   ALTER TABLE public.curso ALTER COLUMN cod_curso DROP DEFAULT;
       public       postgres    false    222    224    224            �
           2604    16623    curso estadocurso_cod    DEFAULT     p   ALTER TABLE ONLY curso ALTER COLUMN estadocurso_cod SET DEFAULT nextval('curso_estadocurso_cod_seq'::regclass);
 D   ALTER TABLE public.curso ALTER COLUMN estadocurso_cod DROP DEFAULT;
       public       postgres    false    223    224    224            �
           2604    16522    docente cod_docente    DEFAULT     l   ALTER TABLE ONLY docente ALTER COLUMN cod_docente SET DEFAULT nextval('docente_cod_docente_seq'::regclass);
 B   ALTER TABLE public.docente ALTER COLUMN cod_docente DROP DEFAULT;
       public       postgres    false    205    201    205            �
           2604    16476    docente grado_cod    DEFAULT     h   ALTER TABLE ONLY docente ALTER COLUMN grado_cod SET DEFAULT nextval('docente_grado_cod_seq'::regclass);
 @   ALTER TABLE public.docente ALTER COLUMN grado_cod DROP DEFAULT;
       public       postgres    false    202    205    205            �
           2604    16477    docente usuario_cod    DEFAULT     l   ALTER TABLE ONLY docente ALTER COLUMN usuario_cod SET DEFAULT nextval('docente_usuario_cod_seq'::regclass);
 B   ALTER TABLE public.docente ALTER COLUMN usuario_cod DROP DEFAULT;
       public       postgres    false    205    203    205            �
           2604    16478    docente materia_cod    DEFAULT     l   ALTER TABLE ONLY docente ALTER COLUMN materia_cod SET DEFAULT nextval('docente_materia_cod_seq'::regclass);
 B   ALTER TABLE public.docente ALTER COLUMN materia_cod DROP DEFAULT;
       public       postgres    false    204    205    205            �
           2604    16979    docente curso_cod    DEFAULT     h   ALTER TABLE ONLY docente ALTER COLUMN curso_cod SET DEFAULT nextval('docente_curso_cod_seq'::regclass);
 @   ALTER TABLE public.docente ALTER COLUMN curso_cod DROP DEFAULT;
       public       postgres    false    227    205            �
           2604    16631    estado_curso cod_cursoest    DEFAULT     u   ALTER TABLE ONLY estado_curso ALTER COLUMN cod_cursoest SET DEFAULT nextval('estado_curso_cod_curso_seq'::regclass);
 H   ALTER TABLE public.estado_curso ALTER COLUMN cod_cursoest DROP DEFAULT;
       public       postgres    false    225    226    226            �
           2604    16560    estado_tarea cod_estadota    DEFAULT     x   ALTER TABLE ONLY estado_tarea ALTER COLUMN cod_estadota SET DEFAULT nextval('estado_tarea_cod_estadota_seq'::regclass);
 H   ALTER TABLE public.estado_tarea ALTER COLUMN cod_estadota DROP DEFAULT;
       public       postgres    false    216    215            �
           2604    16498    grado cod_grado    DEFAULT     d   ALTER TABLE ONLY grado ALTER COLUMN cod_grado SET DEFAULT nextval('grado_cod_grado_seq'::regclass);
 >   ALTER TABLE public.grado ALTER COLUMN cod_grado DROP DEFAULT;
       public       postgres    false    209    208    209            �
           2604    16487    materia cod_materia    DEFAULT     l   ALTER TABLE ONLY materia ALTER COLUMN cod_materia SET DEFAULT nextval('materia_cod_materia_seq'::regclass);
 B   ALTER TABLE public.materia ALTER COLUMN cod_materia DROP DEFAULT;
       public       postgres    false    206    207    207            �
           2604    16972    persona docente_cod    DEFAULT     m   ALTER TABLE ONLY persona ALTER COLUMN docente_cod SET DEFAULT nextval('persona_docente_cod_seq1'::regclass);
 B   ALTER TABLE public.persona ALTER COLUMN docente_cod DROP DEFAULT;
       public       postgres    false    230    228    230            �
           2604    16965    persona alumno_cod    DEFAULT     k   ALTER TABLE ONLY persona ALTER COLUMN alumno_cod SET DEFAULT nextval('persona_alumno_cod_seq1'::regclass);
 A   ALTER TABLE public.persona ALTER COLUMN alumno_cod DROP DEFAULT;
       public       postgres    false    229    230    230            �
           2604    16530    tarea cod_tarea    DEFAULT     d   ALTER TABLE ONLY tarea ALTER COLUMN cod_tarea SET DEFAULT nextval('tarea_cod_tarea_seq'::regclass);
 >   ALTER TABLE public.tarea ALTER COLUMN cod_tarea DROP DEFAULT;
       public       postgres    false    210    211    211            �
           2604    16535    tarea materia_cod    DEFAULT     h   ALTER TABLE ONLY tarea ALTER COLUMN materia_cod SET DEFAULT nextval('tarea_materia_cod_seq'::regclass);
 @   ALTER TABLE public.tarea ALTER COLUMN materia_cod DROP DEFAULT;
       public       postgres    false    212    211            �
           2604    16542    tarea grado_cod    DEFAULT     d   ALTER TABLE ONLY tarea ALTER COLUMN grado_cod SET DEFAULT nextval('tarea_grado_cod_seq'::regclass);
 >   ALTER TABLE public.tarea ALTER COLUMN grado_cod DROP DEFAULT;
       public       postgres    false    213    211            �
           2604    16549    tarea estadoT_cod    DEFAULT     l   ALTER TABLE ONLY tarea ALTER COLUMN "estadoT_cod" SET DEFAULT nextval('"tarea_estadoT_cod_seq"'::regclass);
 B   ALTER TABLE public.tarea ALTER COLUMN "estadoT_cod" DROP DEFAULT;
       public       postgres    false    214    211            �
           2604    16399    tipo cod_tipo    DEFAULT     b   ALTER TABLE ONLY tipo ALTER COLUMN cod_tipo SET DEFAULT nextval('"Tipo_cod_tipo_seq"'::regclass);
 <   ALTER TABLE public.tipo ALTER COLUMN cod_tipo DROP DEFAULT;
       public       postgres    false    196    197    197            �
           2604    16455    usuario cod_usuario    DEFAULT     l   ALTER TABLE ONLY usuario ALTER COLUMN cod_usuario SET DEFAULT nextval('usuario_cod_usuario_seq'::regclass);
 B   ALTER TABLE public.usuario ALTER COLUMN cod_usuario DROP DEFAULT;
       public       postgres    false    200    198    200            �
           2604    16456    usuario tipo_cod    DEFAULT     f   ALTER TABLE ONLY usuario ALTER COLUMN tipo_cod SET DEFAULT nextval('usuario_tipo_cod_seq'::regclass);
 ?   ALTER TABLE public.usuario ALTER COLUMN tipo_cod DROP DEFAULT;
       public       postgres    false    199    200    200            �          0    16597    alumno 
   TABLE DATA               T   COPY alumno (cod_alumno, descripcon, grado_cod, curso_cod, usuario_cod) FROM stdin;
    public       postgres    false    221   S�       �          0    16619    curso 
   TABLE DATA               k   COPY curso (cod_curso, fecha_ini, fecha_fin, hora_ini, hora_fin, estadocurso_cod, descripcion) FROM stdin;
    public       postgres    false    224   x�       �          0    16472    docente 
   TABLE DATA               ]   COPY docente (cod_docente, mail, grado_cod, usuario_cod, materia_cod, curso_cod) FROM stdin;
    public       postgres    false    205   ��       �          0    16628    estado_curso 
   TABLE DATA               :   COPY estado_curso (cod_cursoest, descripcion) FROM stdin;
    public       postgres    false    226   ��       �          0    16555    estado_tarea 
   TABLE DATA               :   COPY estado_tarea (cod_estadota, descripcion) FROM stdin;
    public       postgres    false    215   ;�       �          0    16495    grado 
   TABLE DATA               :   COPY grado (cod_grado, descripcion, paralelo) FROM stdin;
    public       postgres    false    209   {�       �          0    16484    materia 
   TABLE DATA               4   COPY materia (cod_materia, descripcion) FROM stdin;
    public       postgres    false    207   ��       �          0    16943    persona 
   TABLE DATA               �   COPY persona (cedula, nombre, seg_nombre, apellido, seg_apellido, f_nacimiento, telefono, direccion, docente_cod, alumno_cod) FROM stdin;
    public       postgres    false    230   �       �          0    16527    tarea 
   TABLE DATA               `   COPY tarea (cod_tarea, fecha_ini, fecha_fin, materia_cod, grado_cod, "estadoT_cod") FROM stdin;
    public       postgres    false    211   ��       �          0    16396    tipo 
   TABLE DATA               .   COPY tipo (cod_tipo, descripcion) FROM stdin;
    public       postgres    false    197   ��       �          0    16452    usuario 
   TABLE DATA               E   COPY usuario (cod_usuario, nikcname, password, tipo_cod) FROM stdin;
    public       postgres    false    200   �       �           0    0    Tipo_cod_tipo_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('"Tipo_cod_tipo_seq"', 5, true);
            public       postgres    false    196            �           0    0    alumno_cod_alumno_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('alumno_cod_alumno_seq', 1, true);
            public       postgres    false    217            �           0    0    alumno_curso_cod_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('alumno_curso_cod_seq', 1, true);
            public       postgres    false    219            �           0    0    alumno_grado_cod_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('alumno_grado_cod_seq', 1, false);
            public       postgres    false    218            �           0    0    alumno_usuario_cod_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('alumno_usuario_cod_seq', 1, false);
            public       postgres    false    220            �           0    0    curso_cod_curso_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('curso_cod_curso_seq', 2, true);
            public       postgres    false    222            �           0    0    curso_estadocurso_cod_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('curso_estadocurso_cod_seq', 1, true);
            public       postgres    false    223            �           0    0    docente_cod_docente_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('docente_cod_docente_seq', 10, true);
            public       postgres    false    201            �           0    0    docente_curso_cod_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('docente_curso_cod_seq', 1, true);
            public       postgres    false    227            �           0    0    docente_grado_cod_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('docente_grado_cod_seq', 2, true);
            public       postgres    false    202            �           0    0    docente_materia_cod_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('docente_materia_cod_seq', 1, true);
            public       postgres    false    204            �           0    0    docente_usuario_cod_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('docente_usuario_cod_seq', 2, true);
            public       postgres    false    203            �           0    0    estado_curso_cod_curso_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('estado_curso_cod_curso_seq', 3, true);
            public       postgres    false    225            �           0    0    estado_tarea_cod_estadota_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('estado_tarea_cod_estadota_seq', 3, true);
            public       postgres    false    216            �           0    0    grado_cod_grado_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('grado_cod_grado_seq', 2, true);
            public       postgres    false    208            �           0    0    materia_cod_materia_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('materia_cod_materia_seq', 4, true);
            public       postgres    false    206            �           0    0    persona_alumno_cod_seq1    SEQUENCE SET     >   SELECT pg_catalog.setval('persona_alumno_cod_seq1', 3, true);
            public       postgres    false    229            �           0    0    persona_docente_cod_seq1    SEQUENCE SET     ?   SELECT pg_catalog.setval('persona_docente_cod_seq1', 6, true);
            public       postgres    false    228            �           0    0    tarea_cod_tarea_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('tarea_cod_tarea_seq', 1, false);
            public       postgres    false    210            �           0    0    tarea_estadoT_cod_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('"tarea_estadoT_cod_seq"', 1, false);
            public       postgres    false    214            �           0    0    tarea_grado_cod_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('tarea_grado_cod_seq', 1, false);
            public       postgres    false    213            �           0    0    tarea_materia_cod_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('tarea_materia_cod_seq', 1, false);
            public       postgres    false    212            �           0    0    usuario_cod_usuario_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('usuario_cod_usuario_seq', 3, true);
            public       postgres    false    198            �           0    0    usuario_tipo_cod_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('usuario_tipo_cod_seq', 1, true);
            public       postgres    false    199            �
           2606    16401    tipo Tipo_pkey 
   CONSTRAINT     M   ALTER TABLE ONLY tipo
    ADD CONSTRAINT "Tipo_pkey" PRIMARY KEY (cod_tipo);
 :   ALTER TABLE ONLY public.tipo DROP CONSTRAINT "Tipo_pkey";
       public         postgres    false    197            �
           2606    16608    alumno alumno_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY alumno
    ADD CONSTRAINT alumno_pkey PRIMARY KEY (cod_alumno);
 <   ALTER TABLE ONLY public.alumno DROP CONSTRAINT alumno_pkey;
       public         postgres    false    221            �
           2606    16625    curso curso_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY curso
    ADD CONSTRAINT curso_pkey PRIMARY KEY (cod_curso);
 :   ALTER TABLE ONLY public.curso DROP CONSTRAINT curso_pkey;
       public         postgres    false    224            �
           2606    16524    docente docente_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY docente
    ADD CONSTRAINT docente_pkey PRIMARY KEY (cod_docente);
 >   ALTER TABLE ONLY public.docente DROP CONSTRAINT docente_pkey;
       public         postgres    false    205                        2606    16633    estado_curso estado_curso_pkey 
   CONSTRAINT     _   ALTER TABLE ONLY estado_curso
    ADD CONSTRAINT estado_curso_pkey PRIMARY KEY (cod_cursoest);
 H   ALTER TABLE ONLY public.estado_curso DROP CONSTRAINT estado_curso_pkey;
       public         postgres    false    226            �
           2606    16565    estado_tarea estado_tarea_pkey 
   CONSTRAINT     _   ALTER TABLE ONLY estado_tarea
    ADD CONSTRAINT estado_tarea_pkey PRIMARY KEY (cod_estadota);
 H   ALTER TABLE ONLY public.estado_tarea DROP CONSTRAINT estado_tarea_pkey;
       public         postgres    false    215            �
           2606    16503    grado grado_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY grado
    ADD CONSTRAINT grado_pkey PRIMARY KEY (cod_grado);
 :   ALTER TABLE ONLY public.grado DROP CONSTRAINT grado_pkey;
       public         postgres    false    209            �
           2606    16492    materia materia_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY materia
    ADD CONSTRAINT materia_pkey PRIMARY KEY (cod_materia);
 >   ALTER TABLE ONLY public.materia DROP CONSTRAINT materia_pkey;
       public         postgres    false    207                       2606    16952    persona persona_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY persona
    ADD CONSTRAINT persona_pkey PRIMARY KEY (cedula);
 >   ALTER TABLE ONLY public.persona DROP CONSTRAINT persona_pkey;
       public         postgres    false    230            �
           2606    16532    tarea tarea_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY tarea
    ADD CONSTRAINT tarea_pkey PRIMARY KEY (cod_tarea);
 :   ALTER TABLE ONLY public.tarea DROP CONSTRAINT tarea_pkey;
       public         postgres    false    211            �
           2606    16458    usuario usuario_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (cod_usuario);
 >   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_pkey;
       public         postgres    false    200                       1259    16966    fki_fk_alumno_persona    INDEX     H   CREATE INDEX fki_fk_alumno_persona ON persona USING btree (alumno_cod);
 )   DROP INDEX public.fki_fk_alumno_persona;
       public         postgres    false    230            �
           1259    16653    fki_fk_curso_alumno    INDEX     D   CREATE INDEX fki_fk_curso_alumno ON alumno USING btree (curso_cod);
 '   DROP INDEX public.fki_fk_curso_alumno;
       public         postgres    false    221            �
           1259    16980    fki_fk_curso_docente    INDEX     F   CREATE INDEX fki_fk_curso_docente ON docente USING btree (curso_cod);
 (   DROP INDEX public.fki_fk_curso_docente;
       public         postgres    false    205                       1259    16973    fki_fk_docente_persona    INDEX     J   CREATE INDEX fki_fk_docente_persona ON persona USING btree (docente_cod);
 *   DROP INDEX public.fki_fk_docente_persona;
       public         postgres    false    230            �
           1259    16665    fki_fk_estadocur_curso    INDEX     L   CREATE INDEX fki_fk_estadocur_curso ON curso USING btree (estadocurso_cod);
 *   DROP INDEX public.fki_fk_estadocur_curso;
       public         postgres    false    224            �
           1259    16588    fki_fk_estadot_materia    INDEX     J   CREATE INDEX fki_fk_estadot_materia ON tarea USING btree ("estadoT_cod");
 *   DROP INDEX public.fki_fk_estadot_materia;
       public         postgres    false    211            �
           1259    16614    fki_fk_grado_alumno    INDEX     D   CREATE INDEX fki_fk_grado_alumno ON alumno USING btree (grado_cod);
 '   DROP INDEX public.fki_fk_grado_alumno;
       public         postgres    false    221            �
           1259    16509    fki_fk_grado_docente    INDEX     F   CREATE INDEX fki_fk_grado_docente ON docente USING btree (grado_cod);
 (   DROP INDEX public.fki_fk_grado_docente;
       public         postgres    false    205            �
           1259    16577    fki_fk_grado_tarea    INDEX     B   CREATE INDEX fki_fk_grado_tarea ON tarea USING btree (grado_cod);
 &   DROP INDEX public.fki_fk_grado_tarea;
       public         postgres    false    211            �
           1259    16521    fki_fk_materia_docente    INDEX     J   CREATE INDEX fki_fk_materia_docente ON docente USING btree (materia_cod);
 *   DROP INDEX public.fki_fk_materia_docente;
       public         postgres    false    205            �
           1259    16571    fki_fk_materia_tarea    INDEX     F   CREATE INDEX fki_fk_materia_tarea ON tarea USING btree (materia_cod);
 (   DROP INDEX public.fki_fk_materia_tarea;
       public         postgres    false    211            �
           1259    16659    fki_fk_usuario_alumno    INDEX     H   CREATE INDEX fki_fk_usuario_alumno ON alumno USING btree (usuario_cod);
 )   DROP INDEX public.fki_fk_usuario_alumno;
       public         postgres    false    221            �
           1259    16515    fki_fk_usuario_docente    INDEX     J   CREATE INDEX fki_fk_usuario_docente ON docente USING btree (usuario_cod);
 *   DROP INDEX public.fki_fk_usuario_docente;
       public         postgres    false    205                       2606    16967    persona fk_alumno_persona    FK CONSTRAINT     v   ALTER TABLE ONLY persona
    ADD CONSTRAINT fk_alumno_persona FOREIGN KEY (alumno_cod) REFERENCES alumno(cod_alumno);
 C   ALTER TABLE ONLY public.persona DROP CONSTRAINT fk_alumno_persona;
       public       postgres    false    230    2808    221                       2606    16648    alumno fk_curso_alumno    FK CONSTRAINT     p   ALTER TABLE ONLY alumno
    ADD CONSTRAINT fk_curso_alumno FOREIGN KEY (curso_cod) REFERENCES curso(cod_curso);
 @   ALTER TABLE ONLY public.alumno DROP CONSTRAINT fk_curso_alumno;
       public       postgres    false    224    2813    221            	           2606    16981    docente fk_curso_docente    FK CONSTRAINT     r   ALTER TABLE ONLY docente
    ADD CONSTRAINT fk_curso_docente FOREIGN KEY (curso_cod) REFERENCES curso(cod_curso);
 B   ALTER TABLE ONLY public.docente DROP CONSTRAINT fk_curso_docente;
       public       postgres    false    224    2813    205                       2606    16974    persona fk_docente_persona    FK CONSTRAINT     z   ALTER TABLE ONLY persona
    ADD CONSTRAINT fk_docente_persona FOREIGN KEY (docente_cod) REFERENCES docente(cod_docente);
 D   ALTER TABLE ONLY public.persona DROP CONSTRAINT fk_docente_persona;
       public       postgres    false    2791    205    230                       2606    16660    curso fk_estadocur_curso    FK CONSTRAINT     �   ALTER TABLE ONLY curso
    ADD CONSTRAINT fk_estadocur_curso FOREIGN KEY (estadocurso_cod) REFERENCES estado_curso(cod_cursoest);
 B   ALTER TABLE ONLY public.curso DROP CONSTRAINT fk_estadocur_curso;
       public       postgres    false    226    2816    224                       2606    16583    tarea fk_estadot_materia    FK CONSTRAINT     �   ALTER TABLE ONLY tarea
    ADD CONSTRAINT fk_estadot_materia FOREIGN KEY ("estadoT_cod") REFERENCES estado_tarea(cod_estadota);
 B   ALTER TABLE ONLY public.tarea DROP CONSTRAINT fk_estadot_materia;
       public       postgres    false    215    2806    211                       2606    16609    alumno fk_grado_alumno    FK CONSTRAINT     p   ALTER TABLE ONLY alumno
    ADD CONSTRAINT fk_grado_alumno FOREIGN KEY (grado_cod) REFERENCES grado(cod_grado);
 @   ALTER TABLE ONLY public.alumno DROP CONSTRAINT fk_grado_alumno;
       public       postgres    false    209    2799    221                       2606    16504    docente fk_grado_docente    FK CONSTRAINT     r   ALTER TABLE ONLY docente
    ADD CONSTRAINT fk_grado_docente FOREIGN KEY (grado_cod) REFERENCES grado(cod_grado);
 B   ALTER TABLE ONLY public.docente DROP CONSTRAINT fk_grado_docente;
       public       postgres    false    2799    205    209            
           2606    16572    tarea fk_grado_tarea    FK CONSTRAINT     n   ALTER TABLE ONLY tarea
    ADD CONSTRAINT fk_grado_tarea FOREIGN KEY (grado_cod) REFERENCES grado(cod_grado);
 >   ALTER TABLE ONLY public.tarea DROP CONSTRAINT fk_grado_tarea;
       public       postgres    false    2799    211    209                       2606    16516    docente fk_materia_docente    FK CONSTRAINT     z   ALTER TABLE ONLY docente
    ADD CONSTRAINT fk_materia_docente FOREIGN KEY (materia_cod) REFERENCES materia(cod_materia);
 D   ALTER TABLE ONLY public.docente DROP CONSTRAINT fk_materia_docente;
       public       postgres    false    2797    207    205                       2606    16578    tarea fk_materia_tarea    FK CONSTRAINT     v   ALTER TABLE ONLY tarea
    ADD CONSTRAINT fk_materia_tarea FOREIGN KEY (materia_cod) REFERENCES materia(cod_materia);
 @   ALTER TABLE ONLY public.tarea DROP CONSTRAINT fk_materia_tarea;
       public       postgres    false    2797    207    211                       2606    16459    usuario fk_tipo_usuario    FK CONSTRAINT     n   ALTER TABLE ONLY usuario
    ADD CONSTRAINT fk_tipo_usuario FOREIGN KEY (tipo_cod) REFERENCES tipo(cod_tipo);
 A   ALTER TABLE ONLY public.usuario DROP CONSTRAINT fk_tipo_usuario;
       public       postgres    false    200    197    2787                       2606    16654    alumno fk_usuario_alumno    FK CONSTRAINT     x   ALTER TABLE ONLY alumno
    ADD CONSTRAINT fk_usuario_alumno FOREIGN KEY (usuario_cod) REFERENCES usuario(cod_usuario);
 B   ALTER TABLE ONLY public.alumno DROP CONSTRAINT fk_usuario_alumno;
       public       postgres    false    200    2789    221                       2606    16510    docente fk_usuario_docente    FK CONSTRAINT     z   ALTER TABLE ONLY docente
    ADD CONSTRAINT fk_usuario_docente FOREIGN KEY (usuario_cod) REFERENCES usuario(cod_usuario);
 D   ALTER TABLE ONLY public.docente DROP CONSTRAINT fk_usuario_docente;
       public       postgres    false    2789    200    205            �      x�3���4A�=... �E      �   ,   x�3�420��50"(�Č�!C��ĒT �LN,����� �\
�      �   7   x�3��I���ӫL-H�rH�M���K���4�4BC.#�? �(������ ��R      �   0   x�3�H�K�L�+I�2�t�SH.-*��2�tN�KN�ILI����� �      �   0   x�3���K��-�I-��2�H�K�L�+I�2�t�+�ILI����� p�      �   4   x�3�(�Wp<�1_!%U�5�49193?O�)�839�ӑˈ�2��=... Ro      �   J   x�3��I�K/MT�T��,I-J,)-J�2��M,I�M,�LN,�2��O�L�I-�2�t�L�r���JA�1z\\\ }�{      �   d   x�330650503��I������L-H�1��Hp���[����q:'���$|�3�QԂ�s���[X�r����T��J���Q�������� �c �      �      x������ � �      �   9   x�3�t�)����2�t�ON�+I�2�tL����,.)JL�/�2��,�,I����� {a�      �   7   x�3�L�ML�L,�4426�4�2��I�L-H��ss�%���CUq��qqq �(p     