<?php
    require("mysql_connect.php");
    $sql = "SELECT * FROM doctori";
    $doctori = $conn->query($sql);
session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page or show an access denied message
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>HealthFox</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="user.php">HealthFox</a>
            </button>
            <div>
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="btn btn-danger" role="button" href="logout.php">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="d-flex">
  <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="user.php" class="nav-link link-body-emphasis">Home</a>
      </li>
      <li>
        <a href="despre_diabet1.php" class="nav-link link-body-emphasis">Diabet zaharat de tip 1</a>
      </li>
      <li>
        <a href="despre_diabet2.php" class="nav-link active" aria-current="page">Diabet zaharat de tip 2</a>
      </li>
      <li>
        <a href="predictie_user.php" class="nav-link link-body-emphasis">Probabilitatea de a face diabet</a>
      </li>
      <li>
        <a href="specialist.php" class="nav-link link-body-emphasis">Discuta cu un specialist</a>
      </li>

    </ul>
  </div>
  <div>
  Diabet zaharat tip 2
Diabetul zaharat de tip 2 este cel mai frecvent tip de diabet, reprezentand 90% dintre toate cazurile de diabet.

Diabetul zaharat este o boala care apare atunci cand glicemia (glucoza sau zaharul din sange) este prea mare. Glucoza este vitala pentru sanatate deoarece este principala sursa de energie pentru celule si provine in principal din alimentele pe care le consumam. Insulina, un hormon produs de pancreas, ajuta glucoza sa patrunda in celule pentru a fi folosita pentru obtinerea de energie. In diabetul zaharat de tip 2, pancreasul nu produce suficienta insulina sau aceasta nu este utilizata bine, conditie care se numeste rezistenta la insulina.

Poti face diabet zaharat de tip 2 la orice varsta, inclusiv in copilarie sau adolescenta. Totusi, acest tip de diabet apare mai frecvent la persoanele de varsta mijlocie (> 45 ani) si in varsta. Frecvent, dar nu intotdeauna, se asociaza cu greutate corporala crescuta (suprapondere) sau cu obezitate, care in sine pot duce la insulino-rezistenta si cresterea nivelului de glucoza in sange.

Simptomele pot fi similare celor din diabetul zaharat de tip 1, insa adesea sunt mai putin evidente. Multi pacienti nu au deloc simptome. De aceea, diabetul de tip 2 poate ramane nedepistat pentru multi ani dupa debut, pacientul fiind diagnosticat frecvent cand apare o complicatie sau ca urmare a testarii de rutina a glucozei in sange. Principalul aspect al tratamentului diabetului de tip 2 il reprezinta un stil de viata sanatos - in special o crestere a activitatii fizice si o alimentatie sanatoasa. Daca initial pacientii isi pot gestiona boala cu aceste masuri, odata cu trecerea timpului, majoritatea persoanelor cu diabet zaharat de tip 2 va avea nevoie de medicamente antidiabetice orale si/sau insulina pentru a-si controla nivelul de glucoza din sange.

Epidemiologie
Editia a 10-a a Atlasului de Diabet pentru anul 2021 publicat de Federatia Internationala de Diabet (IDF Diabetes Atlas 10th edition) evidentiaza o crestere la nivelul lumii continua a prevalentei diabetului (procentului din populatie care are boala), confirmand ca diabetul este o provocare globala semnificativa pentru sanatatea si starea de bine a pacientilor, familiilor lor si societatii.

In lume
Diabetul in cifre in lume in anul 2021:

1 din 10 adulti (20-79 de ani) traiesc cu diabet zaharat (537 de milioane). Se estimeaza ca acest numar va creste la 643 de milioane pana in 2030 si la 783 de milioane pana in 2045.
Aproximativ 1 din 2 adulti (240 milioane) cu diabet nu sunt diagnosticati.
3 din 4 adulti cu diabet traiesc in tari cu venituri mici si medii.
La fiecare 5 secunde moare 1 pacient din cauza diabetului - in anul 2021, diabetul a fost responsabil pentru 6.7 milioane de decese.
541 de milioane de adulti au prediabet avand un risc crescut de a face diabet zaharat de tip 2.
In Europa
Diabetul in cifre in Europa in anul 2021:

1 din 11 adulti (61 milioane) traieste cu diabet zaharat.
Numarul de adulti cu diabet zaharat va ajunge la 67 milioane pana in 2030 si 69 milioane pana in 2045.
Peste 1 din 3 (36%) adulti care au diabet zaharat nu sunt diagnosticati.
1.1 milioane pacienti au murit din cauza diabetului in 2021.
In Romania
1 din 9 romani are diabet zaharat (1.278.300 din populatia adulta de 14.545.800 persoane in anul 2020).
1 din 3 romani are prediabet, ceea ce inseamna ca aproximativ 3 milioane de persoane sunt la risc de a dezvolta diabet zaharat tip 2.
Numarul de pacienti cu diabet zaharat tip 2 creste odata cu inaintarea in varsta, categoria cea mai afectata fiind adultii cu varsta 60-79 ani.
Diabetul este mai frecvent la barbati, iar prediabetul la femei.
823.000 de pacienti sunt tratati prin Programul National de Diabet Zaharat.
Cauze
Pentru a intelege cum se produce diabetul zaharat, trebuie sa intelegi cum este procesata in mod normal glucoza (zaharul) in organism. Exista 2 surse majore de glucoza: glucoza absorbita la nivelul intestinului din alimentele denumite carbohidrati si cea produsa si stocata in ficat. Cand nivelul de glucoza este scazut, ca de exemplu atunci cand nu ai mancat de ceva timp, ficatul va descompune rezervele de glicogen cu formarea de glucoza pentru a mentine nivelul de glicemie in limite normale.

Glucoza este foarte importanta pentru organism, fiind principala sursa de energie pentru fiecare celula din corp. Glucoza din sange va patrunde in celule cu ajutorul insulinei. Insulina este un hormon produs de pancreas, o glanda care se gaseste in abdomen, in spatele stomacului. Insulina actioneaza ca o cheie care permite zaharului din sange sa intre in celule unde este folosit ca energie. Insulina scade cantitatea de zahar din sange (glicemia). Pe masura ce cantitatea de glicemie se reduce, scade si secretia de insulina produsa de pancreas.

Daca ai diabet zaharat de tip 2, pancreasul secreta insulina, insa celule nu raspund normal la aceasta. Aceasta conditie se numeste rezistenta la insulina sau insulino-rezistenta. Ca urmare, pancreasul va produce si mai multa insulina pentru a incerca sa faca celulele sa preia glucoza din sange. In cele din urma, pancreasul nu poate face fata sa secrete si mai multa insulina pentru a depasi aceasta rezistenta. Ca urmare, in loc sa intre in celule, glucoza din sange creste, determinand aparitia prediabetului (in care glicemia este peste valoarea normala, insa mai mica decat valoarea de diagnostic pentru diabet) si a diabetului zaharat de tip 2. Nu se cunoaste cu exactitate de ce se intampla asta, insa se crede ca o combinatie de factori genetici si din mediu ar avea un rol.

Factorii de risc
Riscul de a face diabet zaharat de tip 2 depinde de o combinatie de factori, cum ar fi predispozitia genetica si stilul de viata.

Ai un risc crescut de a face diabet zaharat tip 2 daca ai peste 45 de ani, esti sedentar si supraponderal sau obez. Greutatea in plus determina uneori rezistenta la insulina si este frecventa la persoanele cu diabet zaharat de tip 2.

Poti afla simplu daca greutatea ta este anormala calculandu-ti Indicele de Masa Corporala (IMC). IMC este un raport intre greutate si inaltime. Se calculeaza impartind greutatea, in kilograme, la patratul inaltimii, in metri (kg/m2). Organizatia Mondiala a Sanatatii (OMS) defineste "excesul de greutate"/ supraponderea ca un IMC >/= 25 si obezitatea ca un IMC >/= 30.

Un indice al masei corporale > 30 creste exponential riscul de complicatii si patologii asociate, dintre care cele mai grave sunt diabetul zaharat si bolile cardiovasculare.

Localizarea grasimii corporale este, de asemenea, importanta. Grasimea suplimentara de la nivelul burtii (grasime abdominala sau viscerala) este legata de rezistenta la insulina, diabetul de tip 2 si boala arteriala coronariana.

Daca esti femeie si ai circumferinta taliei peste 88 cm sau daca esti barbat si ai peste 102 cm in talie, ai un risc crescut.

Desi nu putem modifica istoricul familial sau varsta, putem modifica factorii de risc legati de stilul de viata, ca de exemplu alegerea unei alimentatii sanatoase, practicarea de activitate fizica regulata si controlul greutatii.

Aceste modificari ale stilului de viata pot reduce probabilitatea de a face prediabet si diabet zaharat de tip 2.

Factorii de risc asociati cu diabetul de tip 2 sunt:

Varsta >/= 45 ani
Istoric familial de diabet
Suprapondere si obezitate (IMC >/= 25)
Sedentarism (inactivitatea fizica < 3 ori/saptamana)
Alimentatie nesanatoasa
Prediabet  - conditia medicala in care glicemia este peste valoarea normala, insa mai mica decat valoarea de diagnostic pentru diabet (110-125 mg/dL)
Istoricul de diabet gestational (diabet aparut in timpul sarcinii) sau nasterea unui nou-nascut cu greutate > 4000 grame
Hipertensiunea arteriala (HTA)
HDL-colesterol (colesterolul „bun”) scazut si trigliceridele crescute
Boala arteriala coronariana si accidentul vascular cerebral
Depresia
Sindromul de ovare polichistice
Acanthosis nigricans  - o afectiune a pielii care devine mai inchisa la culoare si mai ingrosata, in special in zona pliurilor (in jurul gatului, inghinal si axilar).
Simptome
Adesea, simptomele diabetului zaharat de tip 2 se dezvolta lent - pe parcursul mai multor ani - si pot fi atat de putin evidente incat s-ar putea sa nu le observi. Multe persoane cu diabet de tip 2 nu au deloc simptome. Unii oameni nu afla ca au diabet de tip 2 decat atunci cand apare o complicatie, cum ar fi vederea incetosata sau afectiuni cardiace. De aceea, este important sa cunosti care sunt factorii de risc pentru aparitia diabetului zaharat de tip 2 pentru a merge la medicul de familie pentru a te testa.

Simptomele de diabet sunt:

Sete excesiva si urinare frecventa
Senzatie crescuta de foame
Pierdere in greutate inexplicabila
Oboseala marcata
Vedere incetosata
Amorteala sau furnicaturi la nivelul picioarelor sau mainilor
Rani care nu se vindeca
Infectii frecvente, in special infectii bacteriene si fungice la nivelul pielii sau gurii si la femei,  infectii vaginale
Complicatii
Persoanele cu diabet zaharat au un risc crescut de a dezvolta o serie de probleme importante de sanatate. Un nivel constant ridicat de glucoza in sange poate duce la boli serioase care afecteaza inima si vasele de sange, ochii, rinichii si nervii. In plus, persoanele cu diabet au un risc mai mare de a face infectii. Aceste complicatii se dezvolta gradual - cu cat ai diabet zaharat de mai mult timp – si cu cat glicemia este mai putin controlata – cu atat este mai mare riscul de complicatii pe termen lung. In cele din urma, complicatiile pot determina invaliditate sau chiar pot sa puna viata in pericol. In multe tari dezvoltate, diabetul zaharat de tip 2 este o cauza principala de boli cardiovasculare, orbire, insuficienta renala si amputatie a membrelor inferioare.

Controlul nivelului de glucoza din sange, al tensiunii arteriale si al colesterolului cat mai aproape de normal poate ajuta la intarzierea aparitiei sau prevenirea complicatiilor. De aceea, persoanele cu diabet zaharat au nevoie de monitorizare regulata, de-a lungul intregii vieti.

Boli cardiovasculare
Glicemia necontrolata afecteaza inima si vasele de sange si poate determina complicatii fatale, cum ar fi boala arteriala coronariana (care duce la infarct miocardic) si accident vascular cerebral. Bolile cardiovasculare reprezinta cea mai frecventa cauza de deces la persoanele cu diabet zaharat tip 2. Hipertensiunea arteriala, colesterolul ridicat, glicemia crescuta si alti factori de risc contribuie la cresterea riscului de complicatii cardiovasculare.

Boala cronica de rinichi (nefropatia diabetica)
Rinichii contin milioane de grupuri mici de vase de sange (glomeruli) care filtreaza deseurile din sange. Diabetul poate deteriora acest sistem delicat de filtrare. Lezarea severa a vaselor mici de sange din dializa sau transplant de rinichi. Boala de rinichi este mult mai frecventa la persoanele cu diabet zaharat rinichi poate determina insuficienta renala sau boala cronica de rinichi, care poate necesita decat la cele fara diabet. Mentinerea unui nivel cat mai aproape de normal al glicemiei si controlul tensiunii arteriale pot reduce foarte mult riscul de aparitie a bolilor renale.

Neuropatia diabetica
Cand glicemia este necontrolata, excesul de zahar poate leza peretii vaselor mici de sange (capilare) care hranesc nervii. Diabetul zaharat poate cauza leziuni ale nervilor de la nivelul intregului corp. Poate fi afectat un singur nerv sau o intreaga retea de nervi. Pot apare probleme de digestie (cu greata, varsaturi, diaree sau constipatie), iar la barbati poate apare disfunctia erectila.

Unele dintre zonele cel mai frecvent afectate sunt extremitatile, in special picioarele. Lezarea nervilor de la nivelul membrelor se numeste neuropatie periferica si determina durere, senzatia de arsura, furnicaturi sau intepaturi care frecvent incep la nivelul varfului degetelor de la picioare sau de la maini si se extind treptat in sus. Daca neuropatia nu este tratata, poate sa apara pierderea sensibilitatii. In special pierderea sensibilitatii la nivelul picioarelor este deosebit de importanta, deoarece poate permite accidentarea si producerea de rani care sa treaca neobservate, ceea ce poate cauza infectii grave care in final sa necesite amputatia unui deget, a piciorului sau a membrului inferior. Persoanele cu diabet zaharat au un risc de amputatie a membrelor de 25 de ori mai mare comparativ cu cel al persoanelor fara diabet. Cu toate acestea, cu un management adecvat, o mare parte a amputatiilor cauzate de diabet poate fi prevenita. Pacientii cu diabet zaharat tip 2 trebuie sa-si examineze zilnic picioarele si sa poarte incaltari largi, confortabile.

Retinopatia diabetica
Majoritatea persoanelor cu diabet zaharat tip 2 va dezvolta o forma de boala la nivelul retinei (retinopatie) care poate cauza scaderea vederii si chiar orbire. Nivelurile constant ridicate de glucoza din sange, impreuna cu hipertensiunea arteriala si colesterolul ridicat, sunt principalele cauze ale retinopatiei diabetice, deoarece afecteaza vasele de sange de la nivelul retinei. Aceasta complicatie poate fi gestionata prin controale oftalmologice regulate si mentinerea nivelului de glucoza si colesterol cat mai aproape de normal. De asemenea, diabetul zaharat creste riscul de aparitie a altor afectiuni oftalmologice serioase, cum ar fi glaucomul si cataracta.

Afectiuni la nivelul cavitatii bucale
Persoanele cu diabet zaharat tip 2 au un risc crescut de parodontita (inflamatia gingiilor) daca glicemia nu este controlata corespunzator.

Parodontita este o cauza majora a pierderii dintilor si este asociata cu un risc crescut de boli cardiovasculare. Trebuie sa mergi regulat la stomatolog pentru diagnosticul si tratamentul precoce.

Afectiuni ale pielii
Diabetul zaharat predispune la aparitia unor probleme la nivelul pielii, inclusiv la infectii bacteriene si fungice.

Afectarea auzului
Problemele de auz sunt mai frecvente la persoanele cu diabet.

Dementa Alzheimer
Diabetul zaharat de tip 2 poate creste riscul de dementa, cum ar fi boala Alzheimer. Cu cat controlul glicemiei este mai slab, cu atat riscul este mai mare. Nu se cunoste insa cu exactitate care este relatia dintre cele doua afectiuni.

Depresie
Simptomele depresiei sunt frecvente la persoanele cu diabet zaharat tip 2. Depresia poate afecta modul in care pacientul este capabil sa-si gestioneze diabetul.

Diagnostic
Medicii recomanda testarea de rutina (screening) pentru diabetul de tip 2 daca:

Ai >/= 45 de ani
Ai intre 19 si 44 de ani si esti supraponderal sau obez si ai unul sau mai multi alti factori de risc pentru diabet
Ai avut diabet gestational
Desi diabetul zaharat de tip 2 apare frecvent la adulti, si copiii si adolescentii pot face diabet de tip 2. De aceea, medicii recomanda testarea copiilor cu varste cuprinse intre 10 si 18 ani care sunt supraponderali sau obezi si au cel putin alti 2 factori de risc pentru dezvoltarea diabetului zaharat:

Desi diabetul zaharat de tip 2 apare frecvent la adulti, si copiii si adolescentii pot face diabet de tip 2. De aceea, medicii recomanda testarea copiilor cu varste cuprinse intre 10 si 18 ani care sunt supraponderali sau obezi si au cel putin alti 2 factori de risc pentru dezvoltarea diabetului zaharat:

Greutate mica la nastere
Mama a avut diabet gestational in timp ce era insarcinata cu ei
Orice factor de risc mentionat la Factorii de risc pentru diabetul de tip 2
Ce teste se folosesc pentru diagnosticul diabetului si prediabetului?
Pentru a diagnostica daca ai diabet sau prediabet, cel mai adesea medicul va recomanda urmatoarele analize de sange: glicemia a jeun (pe nemancate) si HbA1c (hemoglobina glicozilata). In unele cazuri, se poate utiliza o testare a glicemiei intr-un moment oarecare al zilei.

Glicemia a jeun (pe nemancate)
Glicemia a jeun masoara nivelul glicemiei dimineata, pe nemancate (nu trebuie sa mananci cel putin 8 ore; poti bea apa).

Hemoglobina glicozilata - HbA1c
Hemoglobina glicozilata (HbA1c) este o analiza de sange care furnizeaza informatii estimative privind nivelurile medii ale glicemiei din ultimele 3 luni.

Poti manca si bea inainte de aceasta analiza. Rezultatul este mentionat sub forma de procent si cu cat acesta este mai mare, cu atat nivelul mediu al glicemiei este mai mare. Deoarece testul reflecta nivelul mediu de glucoza din sange pe parcursul duratei de viata a celulelor rosii din sange nu este precis la persoanele care au anemie (numar scazut al eritrocitelor).

Testarea glicemiei intr-un moment oarecare al zilei
Acest test poate fi efectuat in orice moment al zilei, independent de masa (aleatoriu sau „random” in engleza). Uneori, medicul poate folosi acest test pentru a diagnostica diabetul atunci cand sunt prezente simptomele caracteristice de diabet si cand nu se doreste sa se astepte 8 ore pentru ca glicemia sa fie recoltata pe nemancate.

Cum sunt interpretate rezultatele acestor analize
Fiecare din analizele de mai sus foloseste o masuratoare diferita. De obicei, pentru a diagnostica diabetul, este necesar ca aceeasi metoda de testare sa fie repetata a doua zi. De asemenea, medicul poate folosi o a doua metoda pentru a confirma ca ai diabet.

Urmatoarele valori indica un rezultat normal al glicemiei, respectiv ca ai diabet sau prediabet:

Normal
Glicemia pe nemancate (a jeun): < 99 mg/dL
HbA1c: < 5.7%
Glicemia recoltata intr-un moment oarecare al zilei: nu se aplica
Prediabet
Glicemia pe nemancate (a jeun): 100-125 mg/dL
HbA1c: 5.7- 6.4%
Glicemia recoltata intr-un moment oarecare al zilei: nu se aplica
Diabet zaharat
Glicemia pe nemancate (a jeun): >/=126 mg/dL
HbA1c: >/= 6.5%
Glicemia recoltata intr-un moment oarecare al zilei: >/= 200 mg/dL
Managementul bolii
Diabetul zaharat este o boala cronica care poate fi controlata printr-un management corect, avand grija de tine zi de zi. Spre deosebire de multe alte afectiuni, diabetul zaharat de tip 2 este gestionat in cea mai mare parte de catre tine, cu sprijinul echipei medicale de ingrijire, din care fac parte medicul diabetolog, de familie, oftalmolog, cardiolog, neurolog, stomatolog, dietetician nutritionist, precum si altele persoane din viata ta care te pot ajuta.

Gestionarea diabetului poate fi o provocare, insa merita tot efortul pentru a-ti imbunatati sanatatea!

Diabetul poate afecta aproape fiecare parte a corpului. Prin urmare, va trebui sa pastrezi in limite cat mai normale nivelul de glucoza din sange. Controlul glicemiei, precum si al tensiunii arteriale si al colesterolului ajuta la prevenirea complicatiilor care pot aparea atunci cand ai diabet.

Tratamentul corect al diabetului inseamna:
Sa adopti pe toata viata un stil de viata sanatos, care inseamna:

Sa urmezi planul de alimentatie sanatoasa recomandat. Cheia este sa mananci o varietate de alimente sanatoase din toate grupele de alimente, in cantitatile mentionate in planul tau de mese. Medicul diabetolog iti va recomanda cantitatea de alimente si numarul de calorii pe care trebuie sa le consumi in fiecare zi. Alege fructe si legume, fasole, cereale integrale, pui sau curcan fara piele, peste, carne slaba si lapte si branza fara grasimi sau cu continut scazut de grasimi. Opteaza pentru alimente care au mai putine calorii daca trebuie sa scazi in greutate. Limiteaza alimentele nesanatoase care contin grasimi saturate si grasimi trans (unt, creme, produse de patiserie, etc.), zahar si sare. Consuma grasimi nesaturate pe care le gasesti in avocado, nuci, ulei de masline sau alt ulei vegetal. Bea apa in loc de bauturi indulcite cu zahar.
Sa incluzi in rutina zilnica miscarea - stabileste-ti ca obiectiv sa fii mai activ din punct de vedere fizic. Incerca sa faci miscare cel putin 30 de minute in majoritatea zilelor saptamanii. Mersul in ritm rapid si inotul sunt modalitati foarte bune de a face miscare mai multa. Daca acum esti sedentar, intreba medicul ce tip de activitati fizice sunt potrivite in cazul tau.
Sa nu fumezi. Tigara electronica nu este o optine sigura, de asemenea.
Sa consumi moderat alcool - nu mai mult de o unitate de alcool/zi daca esti femeie, respectiv 2 unitati, daca esti barbat. Daca iti administrezi insulina sau iei medicamente antidiabetice orale care cresc cantitatea de insulina produsa de corp, alcoolul poate face ca nivelul glicemiei sa scada prea mult. Acest lucru este valabil mai ales daca nu ai mancat. Cel mai bine este sa mananci ceva cand bei alcool.
Sa participi activ la propriul tratament:
Sa iti masori singur glicemia, conform recomandarilor medicale
Sa stii sa interpretezi rezultatele si sa le discuti cu medicul de familie sau specialist diabetolog
Sa te cantaresti si sa-ti masori talia regulat
Sa-ti observi si sa-ti ingrijesti zilnic picioarele
Sa efectuezi regulat analize si investigatii care sa permita depistarea precoce a complicatiilor:
Hemoglobina glicozilata (HbA1c) - indica media glicemiilor din ultimele 3 luni. In general, obiectivul este ca HbA1C sa fie < 7%. Intreaba medicul diabetolog care este procentul in cazul tau.
Colesterol, HDL-colesterol (colesterolul „bun”), LDL-colesterol (colesterolul „rau”), trigliceride. Discuta cu medicul curant diabetolog care sunt valorile recomandate pentru tine. Daca ai peste 40 de ani, poate fi nevoie sa iei un medicament denumit statina.
Examen de urina - pentru depistarea nefropatiei diabetice.
Examen oftalmologic si retinofotografia - pentru depistarea retinopatiei diabetice.
Examen neurologic si neurometria - pentru depistarea neuropatiei diabetice.
Examenul picioarelor de catre medicul specialist diabetolog - pentru depistarea complicatiilor la acest nivel.
Sa respecti exact administrarea tuturor medicamentelor:
Recomandate pentru controlul glicemiei, respectiv pentru controlul tensiunii arteriale, colesterolului, trigliceridelor etc.
Medicamentele trebuie luate chiar daca te simti bine si ai obtinut controlul tensiunii arteriale si al colesterolului.
Discuta cu medicul daca trebuie sa iei aspirina pentru preventia infarctului miocardic sau a accidentului vascular cerebral.
Spune-i medicului daca au aparut reactii adverse.
Sa efectuezi controalele periodice la medicul diabetolog:
Asa cum sunt planificate, chiar daca nu ai acuze si „nimic nu te supara”
Monitorizarea glicemiei acasa
Pentru multi pacienti cu diabet, masurarea glicemiei acasa
(automonitorizarea glicemiei) reprezinta o parte semnificativa a ingrijirii lor, fiind cu atat mai importanta in cazul in care sunt tratati cu insulina sau cu antidiabetice orale. Pacientul cu diabet zaharat si persoana care il ingrijeste sunt instruiti cum sa efectueze autotestarea, cum sa inregistreze datele si sa inteleaga semnificatia lor tocmai pentru a putea interveni si modifica schema terapeutica, dieta si activitatea fizica si pentru a informa medicul specialist diabetolog.

Masurarea glicemiei acasa cu glucometru
Modalitatea cea mai utilizata de a verifica valoarea glicemiei acasa este cu ajutorul glucometrului. Acesta este un aparat medical electronic, portabil, de dimensiuni mici, astfel incat il poti lua cu tine si folosi atunci cand este nevoie. Testarea presupune inteparea degetului (mijlociu sau inelar) pe partea laterala a varfului (nu in mijloc), folosind dispozitivul de intepare.

Apasand usor se obtine o picatura de sange care este aplicata pe o banda de testare (o hartie speciala de unica folosinta) care se introduce in aparat.

Rezultatul se obtine in cateva secunde si arata cata glucoza se gaseste in sangele tau la acel moment.

Intreaba medicul diabetolog cat de frecvent trebuie sa te testezi. Pastreaza notate aceste valori si adu-le la urmatorul consult la medic. In general, in cazul pacientilor cu diabet zaharat tip 2 este recomandata automonitorizarea glicemiei acasa cand acestia fac tratament cu insulina.

De asemenea, testarea este  indicata cand se suspecteaza episoade de hipoglicemie in cazul pacientilor tratati cu antidiabetice orale sau la cei la care nu se poate obtine valoarea tinta recomandata a glicemiei, in special in cazul unor boli intercurente.

Monitorizarea continua a glicemiei
Monitorizarea continua a glicemiei este o alta modalitate de a verifica valorile glucozei din sange. Daca glicemia masurata cu glucometrul reprezinta valoarea zaharului din sange din momentul testarii, monitorizarea continua a glicemiei permite cunoasterea in timp real a valorilor glicemiei.

Majoritatea aparatelor de monitorizare continua a glicemiei folosesc un senzor minuscul care este introdus sub piele. Senzorul masoara nivelul de glucoza din fluidul dintre celulele corpului la fiecare cateva minute si poate arata modificari ale nivelului de glucoza atat pe parcursul zilei, cat si al noptii. Daca aparatul arata ca o valoare mare sau mica a glicemiei, ar trebui sa verifici cu un glucometru inainte de a face orice modificare a planului de alimentatie, a activitatii fizice sau a medicamentelor administrate.

Monitorizarea continua a glicemiei este utila in special pentru persoanele care folosesc insulina si au probleme cu glicemia scazuta (hipoglicemie).

Valorile tinta recomandate pentru nivelurile de glucoza din sange
Recomandari standard facute de Asociatia Americana de Diabet (American Diabetes Association) pentru persoanele cu diabet si care nu sunt insarcinate sunt:

Inainte de masa: 80 - 130 mg/dL
Dupa 1- 2 ore dupa masa: < 180 mg/dL
Discuta cu medicul tau diabetolog despre cel mai bun interval tinta in cazul tau si comunica-i acestuia  daca nivelurile de glucoza sunt frecvent peste sau sub intervalul tinta. Intervalul in cazul tau poate fi diferit daca ai alte afectiuni sau daca glicemia este frecvent anormala. Urmeaza intotdeauna recomandarile medicului tau curant.

Ce se intampla daca nivelul de glucoza din sange devine prea scazut?
Uneori, nivelul de glucoza din sange scade sub valoarea normala, ceea ce se numeste hipoglicemie. Pentru majoritatea persoanelor cu diabet zaharat, se considera un nivel de glicemie prea scazut atunci cand este < 70 mg/dL.

Semnele si simptomele ca nivelul glicemiei este prea mic sunt:

Senzatia de foame
Transpiratie
Tremuraturi
Slabiciune
Dificultate in gandire
Lesin
Hipoglicemia poate pune viata in pericol si trebuie tratata imediat:

Mananca sau bea ceva dulce (suc indulcit, bomboane) imediat
In cazurile mai severe, se administreaza glucoza intravenos sau un medicament denumit glucagon la nivel muscular
Daca ai frecvent hipoglicemie, este important sa informezi medicul diabetolog curant care poate face schimbari in schema ta de tratament
Ce se intampla daca nivelul glucozei din sange devine prea mare?
O valoare crescuta a glicemiei se numeste hiperglicemie. Informeaza medicul diabetolog daca ai frecvent valori peste limita tinta recomandata - este posibil sa fie nevoie de o schimbare a planului de mese, a programului de activitate fizica sau a schemei de medicamente.

Semnele si simptomele ca nivelul glicemiei este prea mare sunt:

Senzatie de sete
Senzatie de oboseala sau slabiciune
Dureri de cap
Urinare frecventa
Vedere incetosata
Tratament
Medicatie
Unele persoane cu diabet zaharat de tip 2 isi pot gestiona boala facand alegeri alimentare sanatoase si fiind mai activi fizic. Totusi, multi pacienti cu diabet de tip 2 au nevoie si de medicamente pentru diabet. Aceste medicamente pot include pastile pentru diabet (medicamente antidiabetice orale) sau medicamente care sunt administrate injectabil la nivelul pielii, cum ar fi insulina.

Principalele medicamente antidiabetice orale sunt:

Metformina: reduce rezistenta la insulina si permite organismului sa-si foloseasca mai eficient propria insulina. Este considerat in majoritatea ghidurilor din intreaga lume tratamentul de prima linie pentru diabetul zaharat de tip 2, in special la pacientii supraponderali si obezi.
Derivatii de sulfoniluree: stimuleaza pancreasul pentru a creste productia de insulina.
Odata cu trecerea timpului, este posibil sa ai nevoie de mai mult de un medicament antidiabetic oral pentru a-ti controla glicemia. Chiar daca nu iti faci insulina, este posibil sa ti se recomande administrarea temporara de insulina in momente speciale, cum ar fi in timpul sarcinii sau cand esti internat in spital.

Chirurgia bariatrica
Initial, chirurgia bariatrica a fost folosita pentru scaderea in greutate, insa ulterior studiile au demonstrat efecte benefice si pe termen lung in tratarea si, in unele cazuri, chiar remisia diabetului zaharat de tip 2 la persoanele obeze. Unele persoane cu diabet pot sa nu mai aiba nevoie de medicamentele pentru diabet dupa o interventia de chirurgie bariatrica.

Daca si pentru cat timp se imbunatateste nivelul glucozei din sange pare sa varieze in functie de pacient, de tipul de interventie chirurgicala bariatrica si de cantitatea de kilograme pe care persoana o pierde. Alti factori includ durata diabetului si daca persoana foloseste sau nu insulina.

Mecanismele prin care actioneaza chirurgia bariatrica pentru tratamentul diabetului zaharat tip 2 sunt:

Pierderea rapida si pe termen lung in greutate
Pierderea grasimii abdominale
Reducerea semnificativa a cantitatii de mancare care ajuta la controlul aportului alimentar si al glicemiei
Efectul benefic al hormonilor gastrointestinali in controlul glicemiei. Glicemiile pacientilor scad dramatic la cateva zile de la operatie, chiar inainte de pierderea in greutate, astfel incat unii pacientii nu mai au nevoie medicamente si dozele de insulina pot fi reduse la jumatate.
Diabetul zaharat de tip 2 poate fi remis prin chirurgie bariatrica la 8 din 10 pacienti
Acestea sunt datele studiului efectuat de Centru de Excelenta in Chirurgie Metabolica si Bariatrica din Ponderas Academic Hospital. Acesta este singurul Centru de Excelenta din Europa de Est care are dubla acreditare internationala: europeana si americana. 80% din pacientii cu diabet zaharat tip 2 asociat obezitatii operati bariatric au inregistrat remisiunea diabetului. La un an de la realizarea interventiei de chirurgie bariatrica, pacientii nu au mai avut nevoie de insulina sau tratament medicamentos oral si au avut valori normale ale glicemiei si ale hemoglobinei glicozilate.

„Rezultatele inregistrate de pacientii nostri ne confirma inca o data beneficiul extraordinar pe care chirurgia bariatrica il aduce in viata lor. Spre exemplu, in randul pacientilor insulino-dependenti, ameliorarea diabetului se manifesta prin reducerea dozelor de insulina chiar din primele zile dupa operatia bariatrica, iar in lunile urmatoare multi dintre pacienti ajung sa nu mai aiba nevoie de nicio doza de insulina. Concret, analiza interna arata ca 30% dintre pacientii insulino-dependenti nu mai necesita insulina dupa prima luna de la operatie”, a precizat Prof. Dr. Catalin Copaescu, Chirurg de Excelenta, Director Medical Ponderas Academic Hospital.

Citeste aici mai multe despre efectele chirurgiei bariatrice asupra diabetului zaharat tip 2 si altor complicatii ale obezitatii.

Preventie
Evolutia diabetului de tip 2 poate fi incetinita sau boala poate fi chiar prevenita. Cu cat ai diabet mai mult timp, cu atat ai un risc mai mare de a face complicatii, astfel incat incetinirea progresului bolii chiar si cu cativa ani iti va aduce beneficii importante. Poti preveni sau intarzia evolutia diabetului de tip 2 pierzand in greutate, urmand un plan de alimentatie cu un numar redus de calorii si fiind activ fizic in majoritatea zilelor saptamanii. Intreba medicul diabetolog daca ar trebui sa iei medicamentul pentru diabet metformina, cu scopul de a preveni sau intarzia evolutia diabetului de tip 2.

Ce poti face pentru a reduce riscul de a face diabet tip 2
Poti face multe pentru a reduce riscul de a face diabet zaharat de tip 2.

Discuta cu medicul de familie despre ce masuri sunt indicate in cazul tau.

Slabeste si mentine o greutate normala. Poti preveni sau intarzia evolutia diabetului daca scazi in greutate un procent de 5-7% din greutatea initiala. De exemplu, daca cantaresti 90 de kilograme, obiectivul ar fi sa slabesti aproximativ 4-6 kilograme.
Fa mai multa miscare. Fa cel putin 30 de minute de activitate fizica moderata pe zi, 5 zile pe saptamana. Daca nu ai fost activ pana acum, discuta cu medicul tau despre cele mai bune activitati fizice in cazul tau. De asemenea, este important sa fii consultat inainte de a incepe orice program de exercitii pentru a te asigura ca poti face efort fizic in siguranta. Incepe sa faci miscare in mod treptat si ia pauze regulat.
Mananca alimente sanatoase de cele mai multe ori. Manca portii mai mici pentru a reduce cantitatea de calorii pe care o consumi in fiecare zi si pentru a reusi sa pierzi in greutate. Alegerea alimentelor cu mai putine grasimi este o alta modalitate de a reduce caloriile. Bea apa in loc de bauturi indulcite.
Ce poti face daca ai prediabet
Prediabetul  reprezinta conditia medicala in care glicemia este peste valoarea normala, insa nu suficient de ridicata astfel incat sa se poata pune diagnosticul de diabet (glicemie 100-125 mg/dL). A avea prediabet este o afectiune serioasa, deoarece creste riscul de a dezvolta diabet zaharat de tip 2. Multi din aceiasi factori de risc pentru diabetul de tip 2 predispun, de asemenea, la prediabet. Alte denumiri pentru prediabet sunt: toleranta scazuta la glucoza sau alterarea glicemiei a jeun (pe nemancate).

Prediabetul este asimptomatic si nu poate fi descoperit decat la analizele uzuale de screening.

Aproximativ 1 din 3 romani are prediabet. Pacientul tipic cu prediabet este supraponderal sau obez, cu obezitate abdominala, in general cu o varsta medie peste 40 de ani, hipertensiv si cu un profil lipidic modificat (valori crescute ale colesterolului total, trigliceridelor si valori scazute ale colesterolului „bun” HDL).

Daca ai prediabet poti preveni sau intarzia aparitia diabetului zaharat tip 2 prin adoptarea unui stil de viata sanatos: sa devii mai activ fizic, sa scazi in greutate si sa urmezi un plan de dieta cu un continut scazut in calorii.

Ce poti face daca ai avut diabet gestational
Diabetul gestational este un tip de diabet care se dezvolta in timpul sarcinii.

De cele mai multe ori, diabetul gestational dispare dupa ce copilul se naste.

Totusi, riscul mamei de a face diabet zaharat de tip 2 ramane crescut in decurs de 5 pana la 10 ani de la sarcina. De asemenea, copilul poate avea un risc mai mare sa devina obez si sa dezvolte diabet de tip 2 mai tarziu in viata. Alege un stil de viata sanatos care sa te ajute atat pe tine, cat si pe copilul tau:

Fa-ti analizele pentru diabet dupa 6-12 saptamani de la nastere. Daca glicemia este inca mare, este posibil sa ai diabet zaharat de tip 2. Daca glicemia este normala, ar trebui sa fii testata la fiecare 3 ani pentru a diagnostica din timp diabetul zaharat de tip 2.
Fii mai activa si alege alimente sanatoase astfel incat sa mentii greutatea normala.
Alapteaza-ti copilul. Alaptarea ofera copilului echilibrul optim de nutrienti si te ajuta sa arzi caloriile.
Discuta cu medicului diabetolog daca ar trebui sa iei medicamentul pentru diabet metformin pentru a ajuta la prevenirea diabetului zaharat de tip 2.
Ziua Mondiala a Diabetului
Ziua Mondiala a Diabetului are loc in fiecare an in data de 14 noiembrie, la initiativa Federatiei Internationale de Diabet (IDF), cu sprijinul Organizatiei Mondiale a Sanatatii (OMS). Aceasta zi este marcata la nivel international de catre toate asociatiile membre ale Federatiei Internationale de Diabet, de furnizorii de servicii de sanatate, cat si de persoanele care au diabet, fiind cea mai mare campanie mondiala de informare asupra diabetului.

Temele pentru Ziua Mondiala a Diabetului
In fiecare an, Ziua Mondiala a Diabetului se concentreaza pe o tema aparte.

Din anul 2010 pana in prezent, tema campaniei este prevenirea diabetului si educarea cu privire la aceasta boala, scopul acestui eveniment fiind o mai buna informare a persoanelor care sufera de diabet:

2010: „Preia controlul asupra diabetului. Acum!”
2011: „Nu intarzia, incepe de azi lupta cu diabetul!”
2012: „Diabetul - profilaxia este cheia!”
2013: „Si tu poti controla diabetul!”
2014: „Controlul diabetului se afla pe masa ta!”
2015: “Alimentatia sanatoasa si diabetul”
2016: “Cu ochii la diabet”
2017: “Femeile si diabetul”
2018 - 2019: ”Familia si diabetul”
2020: „Asistentele medicale au un impact considerabil”
Pentru anii 2021 - 2023, tema Zilei Mondiale a Diabetului este „Acces la ingrijirea pentru diabet: daca nu acum, atunci cand?”, subliniind importanta accesului tuturor pacientilor cu diabet la ingrijire medicala continua pentru controlul bolii si prevenirea complicatiilor.

Surse de informatie:
https://diabetesatlas.org/
http://www.casan.ro
www.umfiasi.ro
www.niddk.nih.gov
www.cdc.gov
www.medlineplus.gov
www.mayoclinic.org
  </div>
    </main>
</body>
</html>
