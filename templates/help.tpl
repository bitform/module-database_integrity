{include file='modules_header.tpl'}

  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><img src="images/icon.gif" width="34" height="34" /></td>
    <td class="title"><a href="./">{$L.module_name|upper}</a> &raquo; {$L.word_help|upper}</td>
  </tr>
  </table>

  {include file="messages.tpl"}

  <div class="margin_bottom_large">
    {$L.text_help}
  </div>

{include file='modules_footer.tpl'}