# ATENÇÃO
Este repositório é um clone do repositório original no qual aqui foram excluídos os controllers, rotas, migrations e models que comprometessem a segurança do domínio em questão, pois este é um projeto para cliente real. O objetivo da criação desta clonagem é divulgar o trabalho em equipe do grupo 4 de PHP do treinamento Entra21 da Blusoft/Fapesc. Caso você, como empresa contratante, deseje ver o código na íntegra, solicite acesso ao repositório original entrando em contato com algum dos integrantes. Os dados dos mesmos estão na seção Developers.

<h1> Projeto Eva</h1>
<h3> TCC do programa de capacitação Entra21</h3>

<!-- TABLE OF CONTENTS -->
<details>
  <summary name="indice">Índice</summary>
  <ol>
    <li><a href="#projeto">Sobre o projeto</a></li>
    <li><a href="#estrutura">Estrutura do projeto</a></li>
    <li><a href="#backlog">Backlog do projeto</a></li>
    <li><a href="#log">Log de eventos</a></li>
    <li><a href="#tecnologias">Dependências e Tecnologias usadas</a></li>
    <li><a href="#link">Projeto online</a></li>
    <li><a href="#developers">Developers</a></li>
    <li><a href="#professor">Professor</a></li>
  </ol>
</details>

<h2 name="link">Projeto online</h2>
<a href="https://projetoeva.herokuapp.com/">Projeto Eva</a> <br/>
<p align="right">(<a href="#indice">voltar ao indice</a>)</p>

<h2 name="projeto"> Sobre o projeto  </h2>
Este projeto foi realizado pelos colaboradores Alessandro Geras, <a href="https://github.com/Eliabe-Ribeiro-22">Eliabe Ribeiro</a> e <a href="https://github.com/Vinnie-Jung">Vinícius Jung</a> com o objetivo de ajudar uma instituição não governamental, chamada Espaço Vida e Saúde, localizada na cidade de Garopaba, no qual são realizados vários tipos de atendimentos para atender pacientes com autismo. <br><br>

No projeto, estão presentes recursos que permitem o contato e a divulgação dos profissionais da área da psicologia, bem como a democratização do acesso a esse tipo de serviço. Existirá um recurso em que as pessoas cadastradas terão seu atendimento documentado e disponibilizado para acompanhamento familiar. Também será adicionada uma página de eventos onde serão exibidas diversas palestras educacionais a respeito do autismo. <br>
<p align="right">(<a href="#indice">voltar ao indice</a>)</p>

<h2 name="estrutura"> Estrutura do projeto  </h2>
O projeto está totalmente responsivo e seguindo os padrões REST.<br />
Adicionado sistema de mensageria<br />
Implantado sistema de recuperação de senhas por email<br /><br />

<ins>Painel Administrativo do Administrador: </ins><br>
Criada ferramenta de avisos gerais para o Administrador do site poder fazer notificações que serão exibidas na página inicial. As notificações serão expiradas a partir de uma data específica escolhida pelo Administrador. Caso o Administrador deseje antecipar a exclusão de alguma notificação, haverá um botão para antecipar o fim da mensagem.<br />

Botão para criação e edição de palestras.<br />

Função para procurar usuários do site com opção para promover ao nível de Profissional ou rebaixar um Profissional para usuário.<br> <br>

<ins>Painel Administrativo do Profissional: </ins><br>
Implantado recurso para procurar usuários do site com opção para inserir informações de consulta para que a família do paciente possa acompanhar o seu desenvolvimento, diminuindo assim o número de visitas que a família faz com o profissional para obter um feedback das sessões de atendimento.

Botão para criação e edição de palestras.<br /><br />

<ins>Páginas e componentes: </ins>
<ul>
    <li>Cabeçalho adicionado como layout, contendo logo e menu, sendo replicado em todas as páginas automaticamente e totalmente responsivo.</li>
    <li>Rodapé adicionado como layout, contendo informações do projeto, link e QR Code para o usuário se cadastrar no grupo de Whatsapp da instituição, sendo replicado em todas as páginas automaticamente e totalmente responsivo.</li>
    <li>Página Home, contendo uma seção de boas-vindas com opção de login da plataforma e outra seção com flex-box com links atrelados a outras páginas.</li>
    <li>Página Palestras, contendo um formulário para pesquisar palestras na qual são mostradas em uma timeline em ordem de data descrescente.</li>
    <li>Página Palestra, contendo um sistema dinâmico de permissões onde os usuários comuns podem ver mais informações sobre uma determinada palestra e tendo as opções de ingressar ou sair dela. E para os administradores e profissionais, um formulário para edição desta palestra, além de poder ver os usuários que estão inscritos. Ambos podem ver um link que poderá estar disponível como material extra.</li>
    <li>Página Minha Conta, contendo um sistema dinâmico de permissões onde os usuários comuns podem os eventos aos quais estão inscritos e também acessar o quadro de consultas em que aparecerão todos os seus atendimentos realizados para acompanhamento familiar. E para os administradores e profissionais, acesso aos seus respectivos painéis administrativos.</li>
</ul>
<p align="right">(<a href="#indice">voltar ao indice</a>)</p>

<h2 name="backlog">Backlog do projeto</h2>
<a href="https://trello.com/b/eadpGobh/projeto-eva-scrum">Ver SCRUM</a><br/>
<a href="https://trello.com/b/IrQOIx85/projeto-eva-kanban">Ver KANBAN - Alessandro</a><br/>
<a href="https://trello.com/b/tEHIGePz/projeto-eva-kanban-eliabe">Ver KANBAN - Eliabe</a><br/>
<a href="https://trello.com/b/MHHX9mSR/projeto-eva-kanban">Ver KANBAN - Vinícius</a>
<p align="right">(<a href="#indice">voltar ao indice</a>)</p>

<h2 name="log">Log de eventos</h2>

<h4> 01/08 - Segunda - Alessandro</h4>
Criado repositório no Github chamado ProjetoEva <br/>
Criado conta no Heroku chamado ProjetoEva <br/>
Criado banco de dados PostgreSQL no Heroku<br/>
Criado layout com cabeçalho, contendo o logo da instituição e um menu responsivo que ganha características de um menu mobile.
Criada a branch <em>index</em> para ser utilizada como página principal.

<h4> 03/08 - Quarta - Eliabe</h4>
Criada a página principal do site, contendo uma seção de boas-vindas com opção de login da plataforma
e outra seção com flex-box com links atrelados a outras páginas

<h4> 05/08 - Sexta - Vinícius </h4>
Criada a estrutura do rodapé da página principal do site junto com a sua estilização, contendo dados como contatos e localização, além de possuir link e QR code de acesso ao grupo de Whatsapp da instituição.

<h4> 08/08 - Segunda - Eliabe</h4>
Criada a branch <em>courses</em> para a permitir ao usuário a possibilidade de inserção de cursos na agenda exibida na plataforma.

<h4> 08/08 - Segunda - Vinícius </h4>
Realizado o merge das branchs <em>master</em> e <em>index</em>.

<h4> 17/08 - Quarta - Vinícius </h4>
Criado o formulário de criação e busca de palestras da página "palestras". <br/>
Adicionados os estilos do formulário.

<h4> 18/08 - Quinta - Alessandro </h4>
Criada a timeline de eventos da página "palestras". <br/>
Adicionado os estilos da timeline e configurado para ser responsivo, fazendo com que a timeline de duas colunas, fique apenas com uma na versão mobile.

<h4> 19/08 - Sexta - Alessandro </h4>
Criado JS para redirecionar uma palestra clicada na página "palestras" para uma rota dinâmica na página "palestra". Também para fazer a passagem de dados desta palestra para autocompletar o formulário de edição de palestras e para identificar a palestra nas rotas dinâmicas de edição e exclusão para administradores e ingresso e saída para usuários. <br>
Realizado o merge das branchs <em>master</em> e <em>palestras</em>.<br>

<h4> 26/08 - Sexta - Alessandro </h4>
Criada a branch <em>palestra</em> para ser utilizada para visualizar dinamicamente cada palestra, na qual os administradores e usuários poderão interagir com suas respectivas regras de usuário.<br>
Criado rotas para autenticação de usuários.

<h4> 27/08 - Sábado - Alessandro </h4>
Criado funções de autenticação de usuários no controller <em>UsersController</em>.

<h4> 28/08 - Domingo - Alessandro </h4>
Por segurança, foi migrado a configuração de todas as rotas de estavam definidas por caminhos, para rotas por nome.
Criada página de <em>login</em>.

<h4> 29/08 - Segunda - Alessandro </h4>
A equipe definiu que por excesso de rotas, funções e views sobre autenticação que estão sendo criadas neste momento na branch <em>palestra</em>, seria melhor renomear esta branch para <em>auth</em> e mais tarde será criada uma nova branch <em>palestra</em> para os futuros commits sobre a devida rota.<br>
Criada rota de logout.

<h4> 30/08 - Terça - Alessandro </h4>
Criada rota e página para cadastro de usuários.<br>
Atualização de bibliotecas no controller <em>UsersController</em> para funções de autenticação, hash e mail.

<h4> 31/08 - Quarta - Vinícius (MUDANÇA NO PEDIDO DO CLIENTE)</h4>
A pedido do cliente, a base PostgreSQL foi migrada do Heroku para o ElephantSQL. O motivo da migração se deve ao fato de que o serviço de banco de dados do Heroku passará a ser cobrado e, por tal razão, foi solicitada a mudança para que se mantenha um serviço gratuito.

<h4> 01/09 - Quinta - Alessandro </h4>
Criada rota e página para recuperação de senha por e-mail.<br>

<h4> 02/09 - Sexta - Alessandro </h4>
Criada conta no Gmail para o serviço de SMTP do Laravel.<br>
Configurada a função para envio de email com token para recuperação da senha.<br>
Executada migration da tabela password_resets.

<h4> 03/09 - Sábado - Alessandro </h4>
Criada rota para receber o link do email de recuperação de senha.<br>
Criado formulário para receber o token enviado pelo link do email de recuperação de senha e para inserir a nova senha.

<h4> 04/09 - Domingo - Alessandro </h4>
Criada função para validar o token recebido pelo email de recuperação de senha e salvar a nova senha inserida.<br>
Realizado o merge das branchs <em>master</em> e <em>auth</em>.<br>
Atualizado o filtro de dados para remover eventos com data expirada.<br>
Atualizado a timezone para GMT-3.

<h4> 05/09 - Segunda - Eliabe </h4>
Criada branch <em>palestra</em>. <br/>
Criada página palestra para visualizar os eventos por ID. <br/>
Atualizado os models User e Palestra para relação many to many.

<h4> 06/09 - Terça - Eliabe </h4>
Atualizada página de palestra para visualizar as informações de um palestra. <br/>
Instalação virtual do Toastr.

<h4> 07/09 - Quarta - Eliabe </h4>
Criado interfaces sobre regras de usuário para administradores e usuários comuns na página "palestra".<br/>
Configurado Toastr.

<h4> 09/09 - Sexta -Eliabe </h4> 
Criado formulário para editar palestras na página "palestra".

<h4> 10/09 - Sábado - Eliabe </h4>
Realizado o merge das branchs <em>master</em> e <em>palestra</em>.

<h4> 11/09 - Domingo - Eliabe </h4>
Criado views das páginas de erro: 404 e 403.

<h4> 12/09 - Segunda - Vinícius </h4>
Criada uma nova branch chamada "permission". <br />
Realizado o download e instalação das dependências da ferramenta Spatie na nova branch. <br />

<h4> 13/09 - Terça - Vinícius </h4>
Realizado o merge da branch "permission" na master. <br />
Criada uma nova branch chamada "dashboard". <br />
Criada a página de dashboard para usuário logado.  <br /> 

<h4> 14/09 - Quarta - Vinícius </h4>
Adicionadas regras de permissão para usuários. <br />
Criada a validação de preenchimento dos campos de login. <br />
Adicionada a opção de trocar/atualizar informações do perfil, que ficará na página de dashboard. <br />
Criado middleware para análise e validação do usuário, verificando se a conta tem permissões de administrador ou não e, também, se a mesma existe. <br />
Criada a tabela de "permissão" via migration.

<h4> 15/09 - Quinta - Vinícius </h4>
Adicionado o CSS para a página de dashboard (minha conta). <br />
Adicionado um carrosel na página de dashboard para a visualização de palestras. <br />
Adicionado o CSS das notificações. (Recurso para o cargo de "profissionais" na hierarquia definida).

<h4> 16/09 - Sexta - Vinícius</h4>
Adicionado carrosel de palestras visível para profissionais e administradores (branch dashboard).

<h4> 18/09 - Domingo - Eliabe </h4>
Refatoração e reestilização da página Palestras.

<h4> 19/09 - Segunda - Eliabe </h4>
Refatoração para disponibilizar aos administradores e profissionais, informações de um usuário escolhido por ele.

<h4> 19/09 - Segunda - Vinícius</h4>
Branch dashboard: <br />
Adicionados os CSSs dos botões. <br />
Substituido o botão de pesquisa pelo input dinâmico (barra de pesquisa) e seu CSS.  <br />
Criado banco de dados para os avisos do administrador.  <br />
Modificadas as rotas de avisos com autenticação.  <br />  <br />

**Sobre os avisos:** Os avisos gerais criados pelo administrador aparecerão na página principal ("Home Page") em formato de pop-up para o visitante. Tal mecanismo foi criado justamente para que os administradores consigam comunicar algo para os usuários de forma geral, sem precisar entrar em contato de forma direta por e-mail ou por redes sociais. Além disso, será possível definir o tempo em que um aviso ficará ativo a partir da data e horário definidos em sua criação. Caso se queira que determinado aviso geral seja excluído antecipadamente, será possível efetuar a exclusão de forma manual por meio da dashboard.

<h4> 20/09 - Terça - Alessandro</h4>
Inserido novos logos e imagens a pedido do cliente. <br>
Agora serão dois logos ao invés de um. Atualização na página principal e em todos os formulários de autenticação.<br>
Imagens atualizadas na flexbox da página inicial.

<h4> 20/09 - Terça - Vinícius</h4>
Reposicionado o botão de criação de palestras, localizado agora na página de dashboard de profissionais e administradores. <br>
Refatorado código das palestras e permissões para criação.

<h4> 21/09 - Quarta - Vinícius</h4>
Implementada a pesquisa de usuários por meio de um botão na dashboard do profissional e do administrador.

<h4> 21/09 - Quarta - Eliabe</h4>
Realizado o merge das branchs <em>master</em> e <em>dashboard</em>.

<h4> 22/09 - Quinta - Eliabe</h4>
Criação de migration da tabela consultas. <br>
Criada tabela para amostra de informações do usuário. <br>
Configurada permissão para que o Administrador promova um usuário para profissional. <br>
Configurada permissão para que o Administrador rebaixe um Profissional para usuário.

<h4> 22/09 - Quinta - Eliabe</h4>
Configurada permissão para que o profissional cadastre informações de consulta na conta do usuário. <br>
Configurada permissão para que o profissional visualize todas as consultas do usuário, filtrando as consultas do profissional para que apareçam somente consultas que ele fez, ocultando consultas feitas por outros Profissionais por questão de sigilo. <br>
Criação da página Usuário. <br>
Criação da página Consulta.
Refatoração final da Navbar - Início da Sprint de testes.

<h4> 30/09 - Sexta - Eliabe </h4>
Iniciada implantação do DarkMode na página inicial do site
Refatoração final da Navbar - Início da Sprint de testes.

<h4>01/10 - Sábado - Eliabe </h4>
Inserido imagens e vídeos acerca do Projeto EVA, que foram requisitos pelo cliente.
Implementado DarkMode na página Inicial do site
Implementada randomização de frases acerca do autismo, em que cada vez que o visitante acessa a página inicial, essa frase é alterada.
Responsividade da página inicial.

<h4> 04/10 - Terça - Eliabe </h4>
Refatoração final da página palestras - Início da Sprint de testes.
Responsividade da página Palestras.

<h4> 09/10 - Domingo - Eliabe </h4>
Refatoração final da página palestra - Início da Sprint de testes.
Responsividade da página Palestra.

<h4> 15/10 - Sábado - Alessandro</h4>
Responsividade e Refatoração de código para Tailwind da view de Usuários da página Dashboard. <br>
Responsividade e Refatoração de código para Tailwind da view de Administradores e Profissionais da página Dashboard. <br>
Responsividade e Refatoração de código para Tailwind da view de Administradores da página Usuários. <br>
Darkmode configurado na página Dashboard. <br>
Darkmode configurado na página Usuários. <br>
Refatoração final da página Dashboard - Início da Sprint de testes.

<h4> 16/10 - Domingo - Alessandro</h4>
Responsividade e Refatoração de código para Tailwind da view de Profissionais da página Usuários.

<h4> 17/10 - Segunda - Alessandro</h4>
Consertado erros do próprio Tailwind sobre herança de propriedades de pai para filho. <br>
Refatoração final da página Usuários - Início da Sprint de testes. <br>
Responsividade e Refatoração de código para Tailwind da página Consultas. <br>
Darkmode configurado na página Consultas. <br>
Refatoração final da página Consultas - Início da Sprint de testes.

<h4> 24/10 - Segunda - Alessandro</h4>
Finalizada todas as sprints de testes e responsividades. <br>
Todos os códigos refatorados. <br>
Excluída todas as branchs antigas.

<p align="right">(<a href="#indice">voltar ao indice</a>)</p>

<h2 name="tecnologias">Dependências e Tecnologias usadas</h2>
O site será feito em PHP utilizando ferramentas do framework Laravel e terá um auxílio de Javascript para o controle de alguns eventos e interações com CSS. O banco de dados que será utilizado é o PostgreSQL e terá um sistema de hierarquia de usuários (permissões). O projeto terá seu deploy feito no Heroku.<br><br>

<a href="https://laravel.com/">Laravel</a> <br/>
<a href="https://tailwindcss.com/">TailwindCSS</a> <br/>
<a href="https://www.javascript.com/">Javascript</a> <br/>
<a href="https://www.postgresql.org/">PostgreSQL</a> <br/>
<a href="https://github.com/CodeSeven/toastr">Toastr</a> <br/>
<a href="https://kenwheeler.github.io/slick/">Slick</a> <br/>

<p align="right">(<a href="#indice">voltar ao indice</a>)</p>

## Developers<br /> <a name="developers"></a>

Alessandro Geras<br/>
[Curriculum Vitae](https://alessandrogeras.github.io/Curriculum) <br/>
[Linkedin](https://www.linkedin.com/in/alessandrogeras) <br/>
[Github](https://github.com/AlessandroGeras) <br>
[Gmail](mailto:alessandrogeras@gmail.com) <br>

#

Eliabe<br/>
[Curriculum Vitae](https://github.com/Eliabe-Ribeiro-22/Eliabe-Ribeiro-22/blob/main/README.md) <br>
[Linkedin](https://www.linkedin.com/in/eliabe-ribeiro-mota-b9a1b7233/) <br>
[Github](https://github.com/Eliabe-Ribeiro-22) <br>
[Gmail](mailto:developer.eliabe@gmail.com) <br>
[Outlook](mailto:eliaberibeiro06@hotmail.com)<br/>

#

Vinícius Jung<br/>
[Linkedin](https://www.linkedin.com/in/vinicius-jung) <br>
[Github](https://github.com/Vinnie-Jung) <br>
[Outlook](mailto:viniciusjung@outlook.com) <br><br>

<p align="right">(<a href="#indice">voltar ao indice</a>)</p>


## Professor<br /> <a name="professor"></a>

Adriano Machado<br/>
[Linkedin](https://www.linkedin.com/in/xadrak/) <br>

<p align="right">(<a href="#indice">voltar ao indice</a>)</p>
