create table livros (
    id_livro serial primary key,
    titulo varchar(50) not null,
    autor varchar(150) not null,
    dt_lancamento date not null,
    editora varchar(150) not null,
    isbn varchar(20) not null,
    sinopse text,
    classificao_indicativa varchar(5) not null,
    disponibilidade disponibilidade_livro default 'disponivel'
);