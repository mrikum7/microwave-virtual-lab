{if $pager|is_array}
<div class="point"> {if $cur_page eq '0'} <span class="underline" >First</span> |
  {else} <a href="?page=0{if $queryString ne ""}{$queryString}{/if}{if $queryString1 ne ""}{$queryString1}{/if}" class="black">First</a> | 
  {/if}
  
  {foreach item=key from=$pager}
  {if $key.current} <span class="page-c" >{$key.name}</span> | 
  {else}<a href="?page={$key.page}{if $queryString ne ""}{$queryString}{/if}{if $queryString1 ne ""}{$queryString1}{/if}" class="black">{$key.name}</a> | {/if}
  {/foreach}
  
  {if $cur_page eq $last_page} <span class="underline" >Last</span> {else} <a href="?page={$last_page}{if $queryString ne ""}{$queryString}{/if}{if $queryString1 ne ""}{$queryString1}{/if}" class="black">Last</a> {/if} </div>
{/if}