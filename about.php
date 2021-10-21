<!DOCTYPE html>
<html>
<?php
  include('header.php');
?>
	

		<div class="tab">
  <button class="tablinks" onclick="Open(event, 'team')">Team</button>
  <button class="tablinks" onclick="Open(event, 'Veronica')">Veronica</button>
  <button class="tablinks" onclick="Open(event, 'patrik')">Patrik</button>
  <button class="tablinks" onclick="Open(event, 'lukas')">Lukas</button>
</div>

<div id="team" class="tabcontent">
  <h3>Team</h3>
  <p>Lorem ipsum dolor sit amet, ei diam fuisset percipitur usu, 
    sit laudem labore tacimates ut. Virtute efficiantur ne eos, 
    ancillae lobortis vim ad, tritani nostrud ne has. 
    Ad ius alia quas, mel duis summo corpora ea, errem saperet patrioque eum ut. 
    Cu veri feugait civibus ius, accusamus complectitur vim te.</p>
</div>

<div id="Veronica" class="tabcontent">
  <h3>Weronika</h3>
  <p>Lorem ipsum dolor sit amet, ei diam fuisset percipitur usu, 
    sit laudem labore tacimates ut. Virtute efficiantur ne eos, 
    ancillae lobortis vim ad, tritani nostrud ne has. Ad ius alia quas,
   mel duis summo corpora ea, errem saperet patrioque eum ut. Cu veri 
    feugait civibus ius, accusamus complectitur vim te.</p> 
</div>

<div id="patrik" class="tabcontent">
  <h3>Patrik</h3>
  <p>Lorem ipsum dolor sit amet, ei diam fuisset percipitur usu, 
    sit laudem labore tacimates ut. Virtute efficiantur ne eos, 
    ancillae lobortis vim ad, tritani nostrud ne has. Ad ius alia quas, 
    mel duis summo corpora ea, errem saperet patrioque eum ut. Cu veri feugait civibus ius, 
    accusamus complectitur vim te.</p>
</div>

<div id="lukas" class="tabcontent">
  <h3>Lukas</h3>
  <p>Lorem ipsum dolor sit amet, ei diam fuisset percipitur usu, 
    sit laudem labore tacimates ut. Virtute efficiantur ne eos, 
    ancillae lobortis vim ad, tritani nostrud ne has. Ad ius alia quas, 
    mel duis summo corpora ea, errem saperet patrioque eum ut. 
    Cu veri feugait civibus ius, accusamus complectitur vim te.</p>
</div>

<script>
function Open(evt, Name) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(Name).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</body>
</html>