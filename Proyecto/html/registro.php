﻿<?php


?>
  <div id="formularioRegistro">
    <form class="form-horizontal" role="form">
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-4">
          <input type="email" size="100" class="form-control" id="email" placeholder="Enter email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-4">          
          <input type="password" size="100" class="form-control" id="pwd" placeholder="Enter password">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4">Introduzca su fecha de nacimiento</label>
      </div>
      <div class="form-group">
	      
	      <div class="col-sm-1">  
	      <label class="modificacion-formulario control-label col-sm-2" for="sel1">Dia</label>
	      <select class="form-control" id="sel1">
	        <option>1</option>
	        <option>2</option>
	        <option>3</option>
	        <option>4</option>
	      </select>
	      </div>
	     
	      <div class="col-sm-1">  
	       <label class="modificacion-formulario control-label col-sm-1" for="sel1">Mes</label>
	      <select class="form-control" id="sel1">
	        <option>1</option>
	        <option>2</option>
	        <option>3</option>
	        <option>4</option>
	      </select>
	      </div>
	      
	      <div class="col-sm-1">  
	      <label class="modificacion-formulario control-label col-sm-1" for="sel1">Año</label>
	      <select class="form-control" id="sel1">
	        <option>1</option>
	        <option>2</option>
	        <option>3</option>
	        <option>4</option>
	      </select>
	      </div>
	      
      </div>
      <div class="form-group">  
        <div class="col-sm-2">
          <a class="btn azm-social azm-btn azm-facebook" href="#">
            <i class="fa fa-facebook"></i>
            Log in with Facebook
          </a>
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Registrarse</button>
        </div>
      </div>
    </form>
  </div>