create table emprestimos (
    id_emprestimo serial primary key,
    dt_emprestimo timestamp default current_timestamp,
    dt_devolucao timestamp default (current_timestamp + interval '7 days'),
    id_usuario int not null,
    status status_emprestimo default 'ativo',

    constraint fk_usuario_emprestimo
        foreign key (id_usuario)
        references usuarios(id_user)
        on delete cascade
);