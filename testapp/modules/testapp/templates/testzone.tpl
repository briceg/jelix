
<table>
   <tr><th>key</th><th>value</th></tr>
  {foreach $config as $conf}
  <tr><td>{$conf->ckey}</td><td>{$conf->cvalue}</td></tr>
  {/foreach}
</table>
<p>Count = {$nombre}</p>
<p>Count of value that contains "value" = {$nombrevalue}</p>

<p>Selection de deux energistrements:</p>
<table>
   <tr><th>key</th><th>value</th></tr>
  {foreach $petitconfig as $conf}
  <tr><td>{$conf->ckey}</td><td>{$conf->cvalue}</td></tr>
  {/foreach}
</table>


<p>This is a sample zone generated by {@jelix~jelix.framework.name@}</p>

<p>one conf key={$oneconf->ckey} value={$oneconf->cvalue}</p>
<p>Link to actions:</p>
<ul>
<li> "testapp~main_index@classic" : {jurl "testapp~main_index@classic"}</li>
<li> "main_index@classic": {jurl "main_index@classic"}</li>
<li> "main_index" : {jurl "main_index"}</li>
<li> "testapp~main_" : {jurl "testapp~main_"}</li>
<li> "testapp~#" : {jurl "testapp~#"}</li>
<li> "#~#" : {jurl "#~#"}</li>
<li> "@" : {jurl "@"}</li>
</ul>
