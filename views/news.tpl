<h1>NEWS</h1>

<a href="index.php?page=home">HOME</a>
<h3>Current page: {$current_page}</h3>

{if $current_page gt 1}
    <a href="index.php?page=news&pageno={$current_page - 1}">PREVIOUS</a>
{/if}

{if $current_page lt $number_of_pages}
    <a href="index.php?page=news&pageno={$current_page + 1}">NEXT</a>
{/if}

<h1>Number of pages: {$number_of_pages}</h1>

<p>
    {foreach from=$articles item=article}
        <h2>{$article[0]}</h2>
        <p>{$article[1]}</p>
        <img src="{$article[2]}" alt="">
    {/foreach}
</p>