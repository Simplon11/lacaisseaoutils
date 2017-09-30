<?php

$navbar = '<li><a href="index.php">Accueil</a></li>
            <li><a href="annonceurs.php">Annonceurs</a></li>
            <li  class="active"><a href="#">Evevenements</a></li>';

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

  <div class="form-group">
    <label for="exampleSelect2" class="col-md-2">Typologie</label>
    <div class="col-md-4">
      <select multiple class="form-control" id="exampleSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
  </div>

<div class="form-group">
  <label for="example-date-input" class="col-md-2 col-form-label">Date début</label>
  <div class="col-md-4">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
  </div>
</div>

<div class="form-group">
  <label for="example-date-input" class="col-md-2 col-form-label">Date fin</label>
  <div class="col-md-4">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
  </div>
</div>

<div class="form-group">
  <label for="example-date-input" class="col-md-2 col-form-label">Distance (km)</label>
  <div class="col-md-4">
    <input class="form-control" type="number" id="example-number-input">
  </div>
</div>

  ';

include('layout.php');
