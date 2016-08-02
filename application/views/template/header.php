<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bem vindo ao CE Fácil</title>
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker").datepicker();
                $("#anim").on("change", function () {
                    $("#datepicker").datepicker("option", "showAnim", $(this).val());
                });
            });
        </script>
    </head>
    <body>
        <div id="container" style="margin-top: 60px;">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">CE Fácil</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                        <!-- <ul class="nav navbar-nav">
                             <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                             <li><a href="#">Link</a></li>
                             <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                 <ul class="dropdown-menu" role="menu">
                                     <li><a href="#">Action</a></li>
                                     <li><a href="#">Another action</a></li>
                                     <li><a href="#">Something else here</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#">Separated link</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#">One more separated link</a></li>
                                 </ul>-->
                        </li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Pesquisar">
                            </div>
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right" style="margin: 5px;">
                            <a href="#" class="btn btn-success">Entrar no sistema</a>
                        </ul>
                    </div>
                </div>
            </nav>
        </div><!-- /example -->