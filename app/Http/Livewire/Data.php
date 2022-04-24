<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Data extends Component
{
    public $qst_select;
    public $qsts = ["Noms des agriculteurs", "Superficie est supérieure à 500", "Parcelles situées à Arith dont la
    superficie est supérieure à 200 et inférieure à 500", "Parcelles avec le nom de leurs propriétaires", "Interventions effectuées entre le 07-11-2011 et le 09-02-2012", "Chaque intervention et le nom de la parcelle concernée", "Chaque intervention le nom de la parcelle concernée et le nom de
    l'employé.", "Interventions de l'employe Pernet", "la superficie totale des parcelles", "le nom de la plus grande parcelle", "le nom de la plus petite parcelle"];
    public $question1;
    public $question2;
    public $question3;
    public $question4;
    public $question5;
    public $question6;
    public $question7;
    public $question8;
    public $question9;
    public $question10;
    public $question11;

    public function render()
    {
        return view('livewire.data');
    }
}
