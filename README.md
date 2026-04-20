
# Use Tati Modas App
![alt text](public/assets/logo.png)
- A plataforma Use Tati Modas é um e-commerce desenvolvido com o ecossistema Laravel, focado em entregar uma experiência de compra centrada no usuário. O projeto foi arquitetado para priorizar a moda feminina, utilizando uma estética minimalista e moderna, sem abdicar da versatilidade necessária para a gestão de produtos de categorias diversas, como a moda masculina.

> 🚧 **Status:** Em desenvolvimento

## Estrutura do Repositório

## Stack Ferramental
- **FRAMEWORK**: Laravel13
- **FRONTEND**: TailwindCSS

## Documentação de Negócio

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
- [ ] O usuário deve poder conseguir visualizar um manual de ajuda;
- [ ] O usuário que quer algo específico, poderá acessar o canal alternativo (WhatsApp);


## Fluxograma de Desenvolvimento

![alt text](fluxograma.png)

# Estrutura do Banco de Dados

- [x] Usuários;
- [x] Endereço;
- [x] Produtos;
- [x] Carrinho;
- [x] Categoria;
- [x] Fornecedores;
- [x] Pedidos;
- [x] Ajuda;

## Arquitetura do Software (Controllers)

- UsersController: responsável pelo login/registro/perfil/reset de senha do usuário
- HelpController: responsável por exibir as dúvidas comuns de uso no sistema
- ProductController: responsável pela listagem/filtragem de produtos para os clientes
- CategoryController: responsável pela listagem de categórias e relacionamento com produtos
- CartController: responsável pelo carrinho de compras (adicionar, remover, visualizar)
- OrderController: responsável pelo histórico de pedidos e detalhe do pedido
- CheckoutController: responsável por finalizar a compra
- Admin\DashboardController: exibir estatistícas da plataforma - admin/dashboard.blade.php (view)
- Admin\ProductController: gerenciamento de produtos pelo admin (diferente do ProductController público - admin/products/index, create, edit (views))
- Admin\CategoryController: pode reaproveitar o CategoryController existente com prefixo de rota (admin/categories/index, create)
- Admin\SupplierController: cadastro de fornecedores (admin/suppliers/index, create) 
- Admin\OrderController: visualização de pedidos pelo admin (admin/orders/index.blade.php)

## Comandos para Iniciar o Projeto

- npm install
- npm run dev
[iniciar servidor javascript para utilizar tailwindcss]

- composer install
- php artisan serve
[iniciar servidor do php para disponibilizar a aplicação]

## Comandos de Desenvolvimento

- php artisan config:clear
[comando responsável por realizar uma limpeza no cache do laravel, assim sendo possível utilizar valores recentes do ".env". No caso, utilizado para mudança de idioma]
