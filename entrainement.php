<?php

// Chapitre 1 Affichage

print "Bonjour <br>";
// ces deux instructions servent a afficher du contenu. Mais on va utiliser tout le temps echo. Plus rapide à l'exécution
echo "Bonjour <br>";
// je peux aussi afficher avec des simple quotes. Pas obligatoirement des doubles quotes
// je dois terminer toutes mes instructions avec le ;. Obligatoire
echo 'Salut <br>';

?>

<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit ipsam voluptatibus quisquam non pariatur cumque nisi temporibus accusantium, aliquam sint nesciunt tempora in modi distinctio repudiandae incidunt quidem quod deleniti?</p>
<!-- Cette syntaxe correspond a un passage PHP contracté
Nous l'utiliserons moins, mais il sera très pratique pour des cas particulier
Dans un passage contracté, je n'ai pas besoin de l'instruction echo pour obtenir un affichage -->
<?= "C'est lundi <br>" ?>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit ipsam voluptatibus quisquam non pariatur cumque nisi temporibus accusantium, aliquam sint nesciunt tempora in modi distinctio repudiandae incidunt quidem quod deleniti?</p>

<?php

// permet d'ecrire un commetaire sur une ligne

/* permet d'ecrire du commentaire
sur plusieurs lignes*/

// je mélange des balises html dans du php
echo "<strong>C'est l'année 2022</strong>";
echo "<h1>C'est l'accueil de mon site</h1>";
?>
<!-- attention cependant à ne pas faire trop d'allers retours de l'un vers l'autre tel que ci-dessous. C'est le début d'un code "sale" -->
<h1><?php echo"Ceci est ma première page" ?></h1>

<?php

// Chapitre 2 les variables
// je nomme ma variable.
// Je lui affecte une valeur grace au signe égal
$prenom = "Fred <br>";
echo $prenom;
// Une variable ne peut débuter par un chiffre (il peut y en avoir un par la suite, mais pas au début).Si elle commence par un chiffre, tout le code sera interrompu, erreur fatale.
// pas de caractères spéciaux. Le code fonctionnera, mais par convention,pas d'accent, de @ de / etc...
// donner un nom pertinent a vos variables. Que l'on comprenne très vite quelles valeurs elles vont contenir
// Si vous avec un nom composé pour la variable, vous pouvez utliser le snake_case, mais plus souvent le camelCase (par contre, pas de tiret du 6 entre les deux mots ou un espace)
$couleur = "orange";

// je peux changer la valeur de ma variable.
$prenom = "Aziz <br>";
// Attention, le nom d'une variable est sensible à la casse. Cela veut dire que si en dessous j'ecris echo $prenoms, ce nom ne sera pas reconnu, car je l'ai declaré au préalable sans le s à la fin
echo $prenom;

// les types de variables

$prenom = "Fred";
$entier = 23;
$decimal = 2.52;
$booleen = TRUE;

echo gettype($prenom) . "<br>";
echo gettype($entier) . "<br>";
echo gettype($decimal) . "<br>";
echo gettype($booleen) . "<br>";

// les constantes

// la constante doit etre declarée avec la fonction prédéfinie define()
// le premier argument qu'elle attend est le nom de cette constante. Obligatoirement ecrit en majuscules
//  le second argument sera la valeur de la constante, ici, Gonesse
define('VILLE', 'Gonesse');
echo VILLE . "<br>";

// contrairement à la variable, je ne peux lui réaffecter une nouvelle valeur.
// Cela générera un warning php Constant VILLE already defined
// define('VILLE', 'Paris');
// echo VILLE;

// Je choisirai la constante plutot que la variable, si je veux protéger cette valeur de toute modification ultérieure. Si je suis sur que cette valeur sera la même qlq soit x, et si en plus je dois empecher quiconque de la modifier par mégarde, alors je vais l'affecter à une constante
// ca sera le cas par exemple pour le chemin vers le dossier ou je veux uploader toutes les photos nécessaires au bon fonctionnement de mon site.
// ca sera le chemin vers mon dossier /img/ tout le temps et pas ailleurs.
// Alors, autant protéger ce chemin dans une constante

// les constantes magiques

echo __FILE__ . "<br>";
echo __LINE__ . "<br>";

// Chapitre 3 Concaténation et syntaxe

echo "Je m'appelle " , $prenom , " et ma couleur préférée est le " , $couleur , "<br>";
// je peux concaténer avec une virgule ou un point, le résultat sera similaire. Mais en général c'est le point qui est utilisé massivement
echo "Je m'appelle " . $prenom . " et ma couleur préférée est le " . $couleur . "<br>";

// Concaténation par affectation

$nombre1 = 45;
$nombre2 = 36;
// .= permet de concaténer par affectation. Je concatène avec le point, et j'affecte une nouvelle valeur avec le égal
echo $nombre1 .= $nombre2 . "<br>";
// attention, en faisant cela, vous perdez la valeur première de $nombre1 (qui était 45)
// vérifiez le avec le echo ci-dessous
echo $nombre1 . "<br>";
// si vous avez besoin de conserver  la valeur d'origine, alors il faudrait mieux declarer une nouvelle variable qui prendra la valeur concaténée comme ci-dessous
// $nombre3 = $nombre1 . $nombre2;

// Différence entre simples quotes et doubles quotes
echo "Aujourd'hui c'est lundi <br>";
// les deux permettent de la même manière d'afficher une chaine de caractères. Par contre, vous aurez parfois besoin d'un \ caracrtère d'échappement pour que votre code continue a etre valide. Voir ci-dessous. Sans les \, php pense que je ferme ma chaine de caractère alors que c'est une apostrophe dans le mot aujourd'hui.
echo 'Aujourd\'hui c\'est lundi <br>';

// Autre différence

echo "Ton prénom est $prenom <br>";
// selon que j'utilise des doubles ou simples quotes, ma variable sera interprétée dans le premier cas. Mais pas dans le deuxième, elle devient un simple élément de la chaine de carctères
echo 'Ton prénom est $prenom <br>';

// Chapitre 4 les opérateurs arithmétiques

$premierNombre = 4;
$secondNombre = 2;

// je peuxprocédr a des calculs de manière très simple, en appelant mes variables.
echo $premierNombre + $secondNombre . "<br>";
echo $premierNombre - $secondNombre . "<br>";
echo $premierNombre * $secondNombre . "<br>";
echo $premierNombre / $secondNombre . "<br>";

// il en existe deux autres, le modulo et l'exponentiation

// le modulo permet de connaitre le reste de la division
echo $premierNombre % $secondNombre . "<br>";
// l'exponentiation permet d'affecter la puissance du second au premier. Dans ce cas ci, 4 puissance 2 ou 4 au carré 
echo $premierNombre ** $secondNombre . "<br>";

// je peux aussi faire des opérations avec des opérateurs d'affectation ( +=, -=, *=, /=)
// Attention , comme pour tout à l'heure avec .=, cen 'est pas une simple opération. Je réaffecte automatiquement une nouvelle valeur et je perds donc celle d'origine.
// Le <br> n'est pas concaténer à la suite mais positionné en dessous volontairement pour ne pas générer un warning php (faites le test en le concaténant)
echo $premierNombre += $secondNombre;
echo "<br>";

//  Chapitre 5 Les conditions

$a = 22;
$b = 30;
$c = 48;
$d = 55;
$e = 60;

// première condition avec if/else

// dans cette condition je demande a vérifier si a est supérieur à b
if( $a > $b){
    // si c'est le cas, alors il va m'afficher le message ci-dessous
    // C'est le premier bloc d'instruction. Il est entre accolades
    echo ' Vrai, $a est bien supérieur à $b';
    // si en revanche ce n'est pas vrai, alors il va entrer dans le else
}else{
    // pour m'afficher le message du else
    // le second bloc d'instructions, les accolades du else
    echo 'Faux, $a n\'est pas supérieur à $b <br>';
}
// noter que je ne suis pas obligé de lui coder le else. Je peux lui demander de vérifier la condition, et si elle est vraie, m'afficher le premier message. Mais si elle ne se vérifie pas, lui de son coté, il ne fera rien. Je ne suis pas obligé de coder la porte de sortie (le else). Il devient implicite...tu ne fais rien, tu t'en fiches. Cela peut arriver de ne pas coder le else.

// seconde condition avec l'opérateur de comparaison && (AND)
// && oblige a ce que les deux conditions soient vérifiées pour qu'il entre de le TRUE
if($a > $b && $b < $c){
    echo "Vrai, les deux conditions sont vérifiées";
    // a n'étant toujours pas supérieur à b, et même si b est bien inférieur à c, alors il va entrer dans le else, le FALSE
}else{
    echo "Faux, au moins une des deux conditions n'est pas vérifiée <br>";
}

// troisiéme condition avc le OR ||. Cette fois, si j'ai une des 2 conditions qui est vérifiée, alors il va se diriger vers le premier bloc d'instruction. Si aucune n'est vérifiée alors il vire vers le second bloc d'instruction, le else, car c'est FALSE
if($a > $b || $b < $c){
    echo "Vrai, au moins une des deux conditions est vérifiées <br>";
}else{
    //La seconde condition étant vérifiée, il ne vas pas entrer dans le else
    echo "Faux, au moins une des deux conditions n'est pas vérifiée ";
}

//quatrieme condition avc XOR
//XOR est appelé le OU exclusif. si je décide de lyui soumettre deux conditions, il faudra absolument qu'il y'en au que une TRUE et l'autre FALSE
//So les 2 sont TRUE ou FALSE, il se dirigera obligatoirement vers la else, comme dans le cas présent.
if($a == 22 XOR $b == 30){
    echo "Vrai, une seule des deux conditions est vérifiée";
}else{
    // XOR se dirige vers ce else, car effectivement $a est bien égal a 22 et $b est aussi égal a 30.
    echo "Faux, les deux conditions sont vérifiées (sont vraies toutes les deux) <br>";
}

//cinquieme condition, avec l'aternative elseif, positionné entre la premiere condition et le else
if($a > $b){
    echo 'Vrai, $a est bien supérieur à $b';
    //La conditon du dessus étant fausse, il se dirife vers le elseif pour vérifier cette nouvelle conditon qui lui ai proposé. il va donc vérifier si celle ci est TRUE ou FALSE, a son tour
    // ci dessous, le ! signifiz NOT, le "contraire de". avc = a ses coptés on pourrait le traduire par "different de"
}elseif ( $a != 22) {
    echo 'Vrai, $a est différent de 22';
}else {
    //La condition du elseif étant aussi fausse, il dévie vers le else
    echo "Aucune des deux conditions ne se vérifie <br>";
}

//Dans le cadre d'un if/elseif il est obligatoire de coder le else. pas comme pour un if/else basique

//sixieme condition, une forme contractée du if/else, aussi appelé ternaire
// avec une ternaire, on commence avc ka condition ($d > $e) puis arrive le if (remplacé pas le ?) Jus apres c'ets le bloc d'instruction a exécuter si c'est TRUE (vrai: d est bien supérieur a e). Si je n'entree pas dans le True, alors je me dirige vers le else (remplacé par les :) et j'exécute son bloc d'instruction (cest faux)
echo ($d > $e) ? "Vrai d est bie, supérieur a e" : "c'est faux <br>";

//septième condition avec == et ===

$var1 = 100;
$var2 = '100'; 

if($var1 == $var2){
    echo "Vrai, elles ont la même valeur <br>";
}else{
    
    echo "Faux, leurs valeur sont différent";
}

//Dans le cas ci-dessus, on va rentrer dans le TRUE car == va comparer les valeurs 
//Dans le cas du dessous on va entrer dans le FALSe (else) carr === va aussi comparer leur type, qui sera différen. un integer vs un string
if($var1 === $var2){
    echo "Vrai, elles ont la même valeur et le même type <br>";
}else{
    echo "Faux, leurs valeur sont similaires, mais pas le type <br>";
}

//huitième condition avec la fonction prédéfinie isset()
// isset() est une instruction qui permet de tester si l'élément soumis existe ou non
//je pourrais aussi tester si !isset(), c'est a dire n'existe pas


// if(isset($test)){
//     echo "Vrai, cette variable existe";
// }else{
//     echo"Faux, cette variable n'existe pas <br>";
// }

//huit-bis syntaxe contractée
// ci dessous, pour d'habituer à la syntaxe ternaire, la même condition que celle au-dessus

echo (isset($test)) ? "Vrai, cette variable existe" : "Faux, cette variable n'existe pas <br>";

//neuvieme condition, la switch

$couleur = "bleu";
// elle est équivalente à if/elseif. Et plus rapide à l'execution si j'ai trop de elsif a tester (en temps relatif)
switch ($couleur) {
    case 'vert':
        echo "la couleur est bien vert";
        // le break doit etre codé, car même si la condition est vraie, il va passer à la condition suivante, sans s'arreter et afficher ce qui correspond au TRUE
        break;
    
    case 'rouge':
        echo "la couleur est bien rouge";
        break;

        case 'bleu':
            echo "la couleur est bien bleu <br>";
            break;
    default:
        echo "aucune couleur ne correspond";
        break;
}

//son equivalent avc if/elseif
if ($couleur == "vert") {
    echo "la couleur est bien vert";
}elseif ($couleur == "rouge") {
    echo "la couleur est bien rouge";
}elseif ($couleur == "bleu") {
    echo "la couleur est bien bleu <br>";
}else {
    echo "aucune couleur ne correspond";
}

// Chapitre 6 les fonctions prédéfinies

$phrase = "coucou c'est moi Ali j'habite à cergy";
// strlen et iconv_strlen servent toutes les 2 a calculer la longueur d'une chaine de caracteres
echo iconv_strlen($phrase) . "<br>";
echo strlen($phrase) . "<br>";

$phrase2 = "étés";
//la différence entre les deux c'est que strlen va aussi comptabiliser les caractere speciaux alors que iconv_strlen non.
//Concretements, avec l'exemple ci-dessous, strlen va compter 6 caractères (avec les 2accents) alors que iconv-strlen va en trouver seulement 4 //il faudra donc décider du moment ou on va plutot utiliser l'une et pas l'autre
echo iconv_strlen($phrase2) . "<br>";
echo strlen($phrase2);

echo substr($phrase,0, 21) . "<br>";

echo substr($phrase, 0, -1) . "<br>";

//fonction prédéfinie date()
echo date("d/m/y") . "<br>";

// fonction predefini empty()
//elle va me permettre de verifier si une variable a recu  un contenu si une valeur lui a été affecte

if (empty($phrase)) {
    echo"Vrai, cette variable n'a pas de contenu";
}else{ 
    echo "Faux, cette variable n'est pas vide <br>";
}

function salut($prenom){
    echo "bonjour" . $prenom . "<br>";
}

salut("ali");

function calculTva(){
    return 100*1.2;
}

echo calculTva() . "<br>";

function calculTva2($prix){
    return $prix*1.2;
}

echo calculTva(55) . "<br>";
echo calculTva2(155) . "<br>";

function calculTva3($prix, $taux){
    return $prix * $taux;
}

echo "45€ HT avc un taux de 5% me donnera un prix TTc de " . calculTva3(45, 1.05) . "€<br>";
echo "45€ HT avc un taux de 20% me donnera un prix TTc de " . calculTva3(45, 1.20) . "€<br>";

function calculTva4($prix, $taux = 1.2){
    return $prix * $taux;
}

echo "55€ HT avc un taux de 5% me donnera un prix TTc de " . calculTva4(55, 1.05). "€<br>";
echo "55€ HT avc une Tva par default qui donnera un prix TTc de " .  calculTva4(55);

//Chapitre 8 la portée des variables

?>

-----------------------espace global--------------------------

function monScript(){
    -------------------------espace local-----------------------
    bloc d'instructions
    -------------------------espace local-----------------------
}

code

-----------------------espace global--------------------------