<?php
if(isset($_POST['pseudo']))
{
  $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
}
if(isset($_POST['mdp']))
{
  $_POST['mdp'] = htmlspecialchars($_POST['mdp']);
}

if(isset($_POST['title']))
{
  $_POST['title'] = htmlspecialchars($_POST['title']);
}
if(isset($_POST['text_article']))
{
  $_POST['text_article'] = htmlspecialchars($_POST['text_article']);
}
if(isset($_POST['search']))
{
  $_POST['search'] = htmlspecialchars($_POST['search']);
}
if(isset($_POST['text_comment']))
{
  $_POST['text_comment'] = htmlspecialchars($_POST['text_comment']);
}
?>
