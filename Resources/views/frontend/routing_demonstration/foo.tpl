{extends file="parent:frontend/routing_demonstration/index.tpl"}
{block name='frontend_index_sidebar'}
{/block}

{block name='frontend_index_content'}
	{$smarty.block.parent}
	<p>Hier kommmt noch eine bisschen Text</p>

	<ul>
		{foreach $productNames as $productName}
			<li>{$productName}</li>
		{/foreach}
	</ul>
{/block}stop