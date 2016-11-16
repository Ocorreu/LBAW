{include file='common/header.tpl'}
	
	<div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
			<p class="pull-right visible-xs">
				<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
			</p>
            <div class="jumbotron">
				<h2>Ajuda e suporte</h2><br><br>
				<p>Bem-vindo à página de ajuda e suporte do jornal online News4You.</p><br>
				<p>Esta página possui a função de apresentar os vários atributos do jornal em detalhe, deste modo oferecendo a melhor orientação possível a novos leitores para tornar a sua experiência agradável e tentando esclarecer potenciais dúvidas existentes.</p><br>
				<h4>1. Login e Registo</h4><br><br>
				<p>Os leitores podem autenticar-se no News4You. Precisarão de preencher o seu nome, apelido, email e password (a password terá de ser colocada duas vezes para o sistema a confirmar). Para além disto, os leitores podem-se registar como leitor autenticado, jornalista ou editor, dependendo da sua posição intendida. Durante o processo de registo, o News4You coloca uma imagem "default" para cada um dos seus utilizadores, no entanto, estes têm a opção de serem eles a escolher uma imagem para se representarem no News4You.</p><br>
				<p>Após o registo, os leitores acedem às suas contas no News4You através do processo de login, onde é-lhes pedido para inserirem o email e a password que colocaram no processo de registo. Se este requisito for cumprido, o leitor estará "logado", ou seja, a sua sessão no News4You estará ativa. Convém mencionar que o administrador já tem conta predefinida, logo pode fazer login sem ter que se registar primeiro.</p><br>
				<p>Quando um leitor ativa a sua sessão, a zona superior de cada página, que antes apresentava hiperligações para as páginas de login e registo, agora apresenta o email do utilizador logado (que, por sua vez, apresenta uma hiperligação para o perfil do utilizador) e a hiperligação "logout", para quando o utilizador quiser sair da sua sessão e a zona superior volta a estar como estava antes.</p><br>
				<h4>2. Perfis</h4><br><br>
				<p>No News4You, cada utilizador possui o seu próprio perfil, e cada perfil apresenta informação pertinente ao seu utilizador.</p><br>
				<p>Essa informação inclui o nome do utilizador, o seu endereço e-mail, o tipo de utilizador, o número de comentários que o utilizador escreveu e o número de notícias que o utilizador marcou como favoritas.</p><br>
				<p>Existem vários tipos de perfis, cada um deles baseado no tipo de utilizador, e todos eles apresentam a informação acima descrita. No entanto, os perfis podem apresentar informação adicional, dependendo do tipo de perfil. Os tipos de perfis são os seguintes:</p><br>
				<p>2.1. Perfil de Leitor - Não apresenta qualquer informação para além da descrita acima.</p><br>
				<p>2.2. Perfil de Jornalista - Também apresenta as notícias escritas pelo utilizador, o número de notícias publicadas pelo utilizador e, se o jornalista em questão estiver logado no News4You, opções de criar notícias novas, editar/alterar as suas notícias e apagar as suas notícias.</p><br>
				<p>2.3. Perfil de Editor - Equivalente ao perfil de jornalista, mas adicionalmente, apresenta uma tabela de notícias por aprovar e, se o editor em questão estiver logado no News4You, o editor pode escolher aprovar as notícias na tabela ou eliminá-las, conforme o nível de satisfação de requisitos da notícia.</p><br>
				<p>2.4. Perfil de Administrador - Também apresenta uma tabela de utilizadores que funciona da mesma maneira que a tabela de notícias do editor, incluíndo a função de aprovar ou eliminar utilizadores quando o adminstrador se encontra logado no News4You.</p><br>
				<p>Para além disto tudo, um utilizador pode também editar o seu perfil, podendo optar por mudar a sua password e/ou a sua imagem.</p><br>
				<h4>3. Notícias</h4><br><br>
				<p>As notícias são o elemento fundamental de qualquer jornal. O News4You tem o objetivo de apresentar as suas notícias de um modo adequado.</p><br>
				<p>Em primeiro lugar, temos as notícias da página principal, obviamente. Estas estão organizadas por ordem decrescente pelas datas em que foram criadas, a mais recente sendo a notícia de destaque, que ocupa mais espaço que as outras notícias presentes na página principal.</p><br>
				<p>Na página principal, as notícias estão apresentadas de tal maneira que apenas o título e a imagem são visíveis. Para visualizar o conteúdo de cada notícia, é preciso clicar em "ver detalhes" (no caso da notícia de destaque, basta clicar no título). A assinatura do autor possui uma hiperligação que conduz ao seu perfil.</p><br>
				<h4>4. Pesquisa e Categoria</h4><br><br>
				<p>Se o leitor estiver à procura de uma notícia em particular, pode sempre optar por fazer um método de pesquisa, onde insere palavras-chave pertinentes à(s) notícia(s) que procura no campo "Procurar por:" presente na zona superior de cada página e depois clicar na tecla "enter".</p><br>
				<p>A operação de pesquisa funciona com base nas chamadas "tags". As tags estão separadas por vírgulas, cada uma delas é uma palavra e não existem duas tags iguais na mesma notícia. Quando cria uma notícia, o autor insere algumas tags relevantes à notícia que está a criar. Se as palavras-chave inseridas pelo leitor forem algumas dessas tags, a notícia que as possui encontrar-se-á nas notícias encontradas na pesquisa resultante. Embora as tags sejam as peças fundamentais da pesquisa, a pesquisa também se pode basear no título da notícia, no nome do autor da notícia, em segmentos da notícia em si, etc.</p><br>
				<p>Cada notícia possui uma categoria. Existem cinco diferentes categorias possíveis: "Política", "Economia", "Cultura", "Mundo" e "Desporto".</p><br> 
				<p>No lado direito de cada página, encontra-se uma coluna de hiperligações. A primeira, denominada "Início", conduz à página principal. Cada uma das cinco outras hiperligações representa uma das cinco categorias e conduz somente a notícias que sejam dessa mesma categoria. A ordem dessas notícias é semelhante à das notícias da página principal.</p><br>
				<h4>5. Comentários e Favoritos</h4><br><br>
				<p>Cada notícia pode ser comentada ou marcada como favorita. Estas acções podem ser realizadas por leitores que se encontrem autenticados e logados.</p><br>
				<p>Quando um utilizador escreve um comentário a uma notícia, esse comentário é transferido para a lista de comentários dessa notícia (sendo essa lista visualizável pelo público) e é retirado da dita lista quando esse mesmo utilizador decide apagá-lo (ao clicar em "X"). Cada comentário presente nessa lista mostra também o apelido do autor desse comentário, que é em si uma hiperligação para o perfil desse autor.</p><br>
				<p>O utilizador pode também marcar uma notícia como favorita se ainda não o fez, ou desmarcar se já o fez. Um utilizador pode fazer mais que um comentário, mas não pode marcar a mesma notícia como favorita mais que uma vez.</p><br>
				<h4>Notas Finais</h4>
				<p>Após ler esta página, é esperado que o leitor consiga obter um nível de conhecimento adequado relativamente a este jornal.</p><br>
				<p>No caso de dúvidas que persistam, é possível contactar-nos usando [DATA EXPUNGED]</p><br>
			</div>
		</div><!--/.col-xs-12.col-sm-9-->

    {include file='common/sidebar.tpl'}
		
    </div><!--/row-->
<br>
<hr>

{include file='common/footer.tpl'}