<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher; // Add this line

/**
 * Tags seed.
 */
class DjTagsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $tags = [
            "8THSIN",
            "A Liga",
            "Adana Twins",
            "Adriano Pagani",
            "Alan Pinheiro",
            "Alberto Dias",
            "Albuquerque",
            "Alex Joker",
            "Alex Stein",
            "Alle Salles",
            "Alok",
            "Ammie Graves",
            "Amon Lima",
            "Anderson Noise",
            "Andre Gazola",
            "Andre Sarate",
            "Andrew Gracie",
            "Andy Bianchini",
            "Aninha",
            "Anna",
            "Any Mello",
            "Ari Bozza",
            "Ashibah",
            "Audax",
            "Barbara Labres",
            "Barja",
            "Barja",
            "Beowulf",
            "Bhaskar",
            "Blackout",
            "BLAZY",
            "Blepping Sauce",
            "Boghosian",
            "Breaking Beattz",
            "Breno Miranda",
            "Breno Rocha",
            "Bruno Be",
            "Bruno Furlan",
            "Bruno Martini",
            "Bubble Gum",
            "Cajun",
            "Carol Legally",
            "Cat Dealers",
            "Chemical Surf",
            "CISZAK",
            "Constantine",
            "Cool Keedz",
            "Coppola",
            "Cris Proenca",
            "Dakar",
            "Dan Lypher",
            "Dang3r",
            "Danne",
            "Dashdot",
            "Dazzo",
            "Devochka",
            "D-Groov",
            "Diefentaler",
            "Diego Miranda",
            "Dimitri S.",
            "Disform",
            "Dj Glen",
            "DjessiB",
            "DOM",
            "Doozie",
            "Dre Guazzelli",
            "Du Ferreira",
            "Dubdogz",
            "Dudu Pacheco",
            "Dudu Sax",
            "Dux",
            "Dyve",
            "EarStrip",
            "Ecologyk",
            "Eddgard Scandurra",
            "Edu Alves",
            "Edu Alves",
            "Edu Poppo",
            "Elekfantz",
            "Eli IWASA",
            "Elias Goca",
            "Ella What",
            "EVE",
            "Evokings",
            "F82",
            "FAB0",
            "Fabio Araujo",
            "Fabio Tepper",
            "Fabricio pecanha",
            "Fancy Inc",
            "Fatnotronic",
            "Felguk",
            "Felipe Fella",
            "Flow",
            "Flow & Zeo",
            "Fractall",
            "Fran Bortolossi",
            "Franco Pellegrini",
            "Ftampa",
            "Fusi & FalabeLLA",
            "Future Class",
            "Gabe",
            "Gabriel Boni",
            "Galck",
            "Ghostt",
            "Glitter",
            "Groove Delight",
            "GroundBass",
            "Guga Guizelini",
            "Gui Boratto",
            "Gustavo Bravetti",
            "Gustavo Koch",
            "Gustavo Mota",
            "Guy J",
            "HNQQ",
            "IAO",
            "Illusionize",
            "Ivan Arcuschin",
            "Jesus Luz",
            "Jetlag",
            "Jhonnie Pinton",
            "John Faily",
            "John Lee",
            "Jon Mesquita",
            "JORD",
            "Joy Corporation",
            "Julio Torres",
            "Junior_c",
            "Kesia",
            "Keskem",
            "Kolombo",
            "KVSH",
            "L_Cio",
            "Lacozta",
            "Lari Gadotti",
            "Latorre",
            "Lauren Lane",
            "Lazy Bear",
            "Leilah Moreno",
            "Leo Cruz",
            "Leo Cury",
            "Leo Janeiro",
            "Leozinho",
            "Liu",
            "Livit",
            "Lothief",
            "Loulou Players",
            "Low Disco",
            "Lowderz",
            "Luca Di Napoli",
            "Lucas Borchardt",
            "Lui Torcartto",
            "M A Z",
            "Mack",
            "MadDogz",
            "Malana",
            "Malifoo",
            "Malik Mustache",
            "Mandragora",
            "Manimal",
            "Marc Ransson",
            "Marcelo Botelho",
            "Marco Hanna",
            "Marky",
            "Mary Mesk",
            "Mastria",
            "Matheus Hartmann",
            "Max",
            "Max Grillo",
            "Melaine Ribbe",
            "Milena Coelho",
            "Milena Scheide",
            "MM",
            "Mojjo",
            "Nastia",
            "Natema",
            "Nato Medrado",
            "Nedu Lopes",
            "Nevermind",
            "Nicolau Marinho",
            "On a Beat",
            "Ornella",
            "OwnBoss",
            "P8",
            "Paulo Velloso",
            "Petrix",
            "Phill Mill",
            "Pic Schimitz",
            "Pimpo Gama",
            "Plastic Robot",
            "Pontifexx",
            "Puff",
            "Puka",
            "Radiomatik",
            "Rapha Fernandes",
            "Raul Mendes",
            "RDT",
            "Redzone",
            "RHR",
            "Ricardo Pazos",
            "RICCI",
            "Rivas",
            "Rocksted",
            "Rodrigo Luca",
            "Rodrigo Vieira",
            "Roger Lyra",
            "Roma",
            "Royal Inc",
            "Rrotik",
            "Sabrina Caldana",
            "Samhara",
            "Santti",
            "Sarah Stenzel",
            "Scarlatelli",
            "Scorsi",
            "Selva",
            "Sevenn",
            "Shadow Movement",
            "Shapeless",
            "Simple Jack",
            "SoFly",
            "Soldera",
            "Special M",
            "Stroka",
            "Swarup",
            "Tessuto",
            "thiago Gusman",
            "Thiago Mansur",
            "Thiago Zancaner",
            "Thomas Gandey",
            "Toigo",
            "Toigo",
            "Tom",
            "Tom Keller",
            "Tom's",
            "TouchTalk",
            "Tough Art",
            "Trindade",
            "Tzigane",
            "V.Falabella",
            "Vegas",
            "Vermont",
            "Vertshin",
            "Victor Guerreiro",
            "Victor Lou",
            "Victor Martelli",
            "Victor Ruiz",
            "Viktor Mora",
            "Vinne",
            "Vintage Culture",
            "Visage",
            "Volkoder",
            "Waio",
            "WAO",
            "WhyNot",
            "Windy City Classics",
            "Wizards",
            "Wolf Player",
            "Woo2Tech",
            "Zac",
            "Zelig",
            "Zerb",
            "Zerky",
            "Entourage",
            "Plus",
            "Artist Factory",
            "Nova",
            "BrasLive ",
            "Season Bookings",
            "Hypno",
            "Tune",
            "4Fly",
            "Suicide Lemon",
            "Briefing"
        ];

        $table = $this->table('dj_tags');
        foreach ($tags as $k => $tag) {
            $data  = [
              'tag_id'          => $k+1,
              'dj_id'    => $k+1,
              'created'         => date('Y-m-d H:m:s'),
              'modified'        => date('Y-m-d H:m:s')
            ];
            $table->insert($data)->save();
        }
    }
}
