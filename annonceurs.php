<?php

$navbar = '<li><a href="index.php">Accueil</a></li>
            <li class="active"><a href="#">Annonceurs</a></li>
            <li><a href="evenements.php">Evevenements</a></li>';

$body = '
  <div class="form-group">
    <label for="exampleSelect2" class="col-md-2">Thématique</label>
    <div class="col-md-4">
      <select multiple class="form-control"  id="exampleSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
  </div>
  ';

include('layout.php');
