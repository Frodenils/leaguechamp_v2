<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function index()
    {
        $champs=array("Aatrox", "Ahri","Akali","Akshan","Alistar","Amumu","Anivia","Annie","Aphelios","Ashe","ASol","Azir","Bard","Blitzcrank",
        "Brand","Braum","Caitlyn","Camille","Cassiopeia","ChoGath","Corki","Darius","Diana","Draven","Ekko","Elise","Evelynn","Ezreal","Fiddlesticks",
        "Fiora","Fizz","Galio","Gangplank","Garen","Gnar","Gragas","Graves","Gwen","Hecarim","Heimerdinger","Illaoi","Irelia","Ivern","Janna","Jarvan","Jax",
        "Jayce","Jhin","Jinx","Kaisa","Kalista","Karma","Karthus","Kassadin","Katarina","Kayle","Kayn","Kennen","Khazix","Kindred","Kled","KogMaw","Leblanc",
        "LeeSin","Leona","Lillia","Lissandra","Lucian","Lulu","Lux","MasterYi","Malphite","Malzahar","Maokai","MissFortune","Mordekaiser","Morgana","Mundo","Nami","Nasus",
        "Nautilus","Neeko","Nidalee","Nocturne","NunuWillump","Olaf","Orianna","Ornn","Pantheon","Poppy","Pyke","Qiyana","Quinn","Rakan","Rammus","RekSai","Rell",
        "RenataGlasc","Renekton","Rengar","Riven","Rumble","Ryze","Samira","Sejuani","Senna","Seraphine","Sett","Shaco","Shen","Shyvana","Singed","Sion","Sivir",
        "Skarner","Sona","Soraka","Swain","Sylas","Syndra","TahmKench","Taliyah","Talon","Taric","Teemo","Thresh","Tristana","Trundle","Tryndamere","TwistedFate",
        "Twitch","Udyr","Urgot","Varus","Vayne","Veigar","VelKoz","Vex","Vi","Viego","Viktor","Vladimir","Volibear","Warwick","Wukong","Xayah","Xerath","XinZhao",
        "Yasuo","Yone","Yorick","Yuumi","Zac","Zed","Zeri","Ziggs","Zilean","Zoe","Zyra",
        );
        $nbval = count($champs);
        $val1=$champs[rand(0,$nbval-1)];
        $val2=$champs[rand(0,$nbval-1)];
        $val3=$champs[rand(0,$nbval-1)];
        $val4=$champs[rand(0,$nbval-1)];
        $val5=$champs[rand(0,$nbval-1)];
        $val6=$champs[rand(0,$nbval-1)];

        return view('pages.random',[
            "val1" => $val1,
            "val2" => $val2,
            "val3" => $val3,
            "val4" => $val4,
            "val5" => $val5,
            "val6" => $val6,
        ]);
    }
}
