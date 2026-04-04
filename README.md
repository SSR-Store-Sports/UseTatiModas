
# Documentação Projeto Use Tati Modas
- Finalidade: Loja de Roupas Online
- Ferramenta para desenvolvimento: Laravel (php)

# Entidades (tabelas):
- Usuários;
- Endereço;
- Produtos;
- Categorias;
- Estoque;
- Fornecedores;
- Pedidos;

## RFs (requisitos funcionais):
Funcionalidade que o usuário interage de alguma forma.

- [ ] O usuário deve poder se cadastrar;
- [ ] O usuário deve poder se logar;
- [ ] O usuário deve poder alterar sua senha;
- [ ] O usuário deve poder obter o seu perfil de um usuário logado;
- [ ] O usuário deve poder visualizar todos os produtos;
- [ ] O usuário deve poder buscar por produto(s);
- [ ] O usuário deve poder selecionar um produto gerando o carrinho de compras;
- [ ] O usuário deve poder finalizar a compra (gerar venda);
- [ ] O usuário deve poder visualizar o histórico de compras;
- [ ] O funcionário/administrador deve poder cadastrar um fornecedor;
- [ ] O funcionário/administrador deve poder cadastrar um produto;
- [ ] O funcionário/administrador deve poder gerenciar o estoque de produtos (atualizar stock).
- [ ] O administrador pode desativar um usuário;
- [ ] O administrador deve poder cadastrar um usuário como funcionário/administrador;
- [ ] O administrador deve poder alterar a senha de um usuário;

## RNFs (requisitos não-funcionais):
Não funcionalidades, mais tratativas.

- [ ] O usuário deve ter a senha criptografada no banco de dados usando Bcrypt;
- [ ] O usuário deve ser identificado por um JWT (JSON Web Token) entre as requisições;
- [ ] O usuário deve ser identificado por cargos;
- [ ] O usuário não autenticado deve ter um cookie de identificação para o carrinho de compras;
- [ ] O usuário se for funcionário/administrador terá que usar o google authenticator;
- [ ] O usuário só pode alterar três vezes no mês sua senha;
- [ ] O usuário deve conseguir resetar a senha através de um token encaminhado no email/gmail;
- [ ] O usuário não deve conseguir usar o sistema se estiver desativado;
- [ ] O usuário não deve poder se cadastrar com um usuário duplicado;
- [ ] O estoque do produto deve refletir a baixa após o usuário finalizar a compra;
- [ ] O produto deve deve incluir impostos (ex.: ICMS);
- [ ] Todas as datas devem estar convertidas conforme locale configurado (ex: DD/MM/YYYY)
- [ ] Todas as funcionalidades devem retornar status HTTP apropriado (200, 201, 400, etc);

## RNs (Regras de negócios):
A instituição decide, o proprietário do software dita.

- [ ] O usuário deve se cadastrar utilizando:
- [ ] O usuário deve aceitar os termos para se cadastrar;
- [ ] O usuário recebe por padrão o cargo de cliente;
- [ ] O usuário pode consultar até 10 items por página;
- [ ] O usuário pode adicionar até 15 items no carrinho de compras;
- [ ] O usuário pode filtrar produtos por categoria;
- [ ] O usuário pode filtrar produtos por nome;
- [ ] O usuário que quer algo específico, poderá acessar o canal alternativo (WhatsApp);

# Fluxograma de Desenvolvimento

![alt text](fluxograma.png)
