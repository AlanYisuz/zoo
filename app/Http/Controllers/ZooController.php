<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZooController extends Controller
{
    public function index(){

        return "<h1>Zoologico</h1>"
        .'<ul>
        <li><a href="animal/vaca">Vaca</a></li>
        <li><a href="animal/tigre">Tigre</a></li>
        <li><a href="animal/jirafa">Jirafa</a></li>
        </ul>';
    }
    public function vaca(){
        return '<img src="http://localhost/zoo/public/images/vaca-blanco-negro-acostado-sobre-hierba_268835-811.jpg" style="width: 10rem">'.
        "<li><a href='/zoo/public'>Principal</a></li>";
    }
    public function tigre(){
        return "<h1>Zoologico</h1>".
        '<li><a href="/zoo/public">Principal</a></li>';
    }
    public function jirafa(){
        return "<h1>Zoologico</h1>".
        '<li><a href="/zoo/public">Principal</a></li>';
    }
}

?>

<!-- "<h1>Zoologico</h1>".
        '<img src="/img/vaca.jpg" alt="">
        <li><a href="/zoo/public">Principal</a></li>' -->

<!-- <img src="http://localhost/zoo/public/images/vaca-blanco-negro-acostado-sobre-hierba_268835-811.jpg" style="width: 10rem"> -->
