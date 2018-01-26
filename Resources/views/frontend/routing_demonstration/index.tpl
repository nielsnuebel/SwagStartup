{extends file="parent:frontend/index/index.tpl"}

{block name='frontend_index_content'}

	<h1>Ich bin die {$currentAction}-action </h1>

	<a href="{url controller='RoutingDemonstration' action=$nextAction}">
		{s name="GoToNextPage"}Nächste Seite{/s}
	</a>

{/block}