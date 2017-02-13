{assign var="title" value=""}
{assign var="keywords" value=""}
{assign var="description" value=""}
{extends file='../base/base.tpl'}
{block name=main}
    <link rel="stylesheet" href="{$static}/style/index.css">
    <div class="container-fluid" style="padding:0;">
        <table class="table table-hover">
            {foreach from=$projects key=key item=project}
                <tr class="active" id="{$key}">
                    <th colspan="2">{$project['name']}</th>
                </tr>
                {foreach from=$project['projects'] item=value}
                    <tr>
                        <td>
                            <a target="_blank" href="{$value['url']}"
                               title="{$value['name']}">{$value['name']}</a>
                        </td>
                        <td>
                            {$value['about']}
                        </td>
                    </tr>
                {/foreach}
            {/foreach}
        </table>
    </div>
{/block}