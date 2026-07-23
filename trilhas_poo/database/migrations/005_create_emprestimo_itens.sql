create table emprestimo_intens (
    id_item serial primary key,
    id_livro int not null,
    id_emprestimo int not null,

    constraint fk_livro_item
        foreign key (id_livro)
        references livros(id_livro) 
        on delete cascade,

    constraint fk_emprestimo_item
        foreign key (id_emprestimo)
        references emprestimos(id_emprestimo)
        on delete cascade
);