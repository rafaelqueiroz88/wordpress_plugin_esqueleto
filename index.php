<?php
	/*
	Plugin Name: nome do plugin aqui
	Plugin URI: pagina-plugin.com
	Description: descricao do plugin aqui
	Author: nome do autor aqui
	Author: URI: pagina-representante-plugin.com
	Version: 0.1
	*/

	add_action("admin_menu", "novoMenuAdmin"); //a função admin_menu é uma função padrão wp, a função novoMenuAdmin será invocada abaixo

	include_once "views/pagina_principal.php";

	include_once "views/funcao_um.php";

	include_once "views/funcao_dois.php";

	function novoMenuAdmin()
	{
		//nome_plugin aparece na url, portanto seria interessante utilizar o nome do plugin
		add_menu_page("Menu Principal", "Menu Principal", 4, "nome_plugin", "menu_principal"); //encontre a classe menu_principal em pagina_principal.php

		add_submenu_page("nome_plugin", "Função 1", "Botao_1", 4, "funcao_um", "NomeFuncaoUm"); //encontre a classe NomeFuncaoUm em funcao_um.php

		add_submenu_page("nome_plugin", "Função 2", "Botao_2", 4, "funcao_dois", "NomeFuncaoDois"); //encontre a classe NomeFuncaoDois em funcao_dois.php

	}
