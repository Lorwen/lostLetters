<script>
function surligne(champ, erreur)
{
  if(erreur)
    champ.style.backgroundColor = "#fba";
  else
    champ.style.backgroundColor = "";
}


function verifPseudo(champ) //vérifie que la longueur est correcte
{
  if(champ,value.length < 2 || champ.value.length > 25)
  {
    surligne(champ, true);
    return false;
  }
  else
  {
    surligne(champ, false);
    return true;
  }
}
</script>
