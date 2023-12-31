<?php
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
                    <li class="nav-item"><a class="btn btn-danger btn-primary" role="button" href="logout.php">Log out</a></li>
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
        <a href="despre_diabet1.php" class="nav-link active" aria-current="page">Diabet zaharat de tip 1</a>
      </li>
      <li>
        <a href="despre_diabet2.php" class="nav-link link-body-emphasis">Diabet zaharat de tip 2</a>
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
  <h1>Diabet zaharat tip 1</h1>
  <blockquote>Diabetul zaharat de tip 1 este o afectiune serioasa in care nivelul de glucoza din sange (glicemia) este prea mare din cauza ca organismul nu produce insulina. Se considera ca diabetul de tip 1 este o boala autoimuna in care sistemul imunitar ataca si distruge propriile celule din pancreas care produc insulina. Insulina este esentiala pentru a trai. Rolul insulinei este de a permite glucozei sa intre in celule pentru a fi transformata in energie. Un pacient cu diabet zaharat tip 1 va continua sa descompuna carbohidratii din alimente si bauturi. Glucoza obtinuta ajunge in sange, insa din cauza ca nu exista insulina care sa permita transportarea ei in celule, se acumuleaza in cantitati crescute determinand hiperglicemie. Un nivel constant crescut de glucoza in sange poate afecta organele majore din corp, cum sunt inima, vasele de sange, nervii, ochii si rinichii.

Complicatiile diabetului zaharat de tip 1 pot fi invalidante sau pot chiar sa puna viata in pericol. Diabetul de tip 1 este de obicei diagnosticat la copii si adultii tineri, desi poate sa apara la orice varsta. Pentru a supravietui, persoanele cu diabet de tip 1 trebuie sa-si faca insulina in fiecare zi. Diabetul zaharat de tip 1 reprezinta aproximativ 8% din toate cazurile de diabet.

In trecut, diabetul zaharat de tip 1 se mai numea si diabet juvenil sau diabet insulino-dependent.
  </blockquote>

<h2>Despre</h2>
<p>Diabetul zaharat este o boala care apare atunci cand glucoza din sange (glicemia) este prea mare. Asociatia Americana de Diabet (American Diabetes Association) considera o valoare normala a glicemiei recoltate pe nemancate (a jeun) de 60-99 mg/dl.
</p>
<h4>Mentinerea unei concentratii normale de glucoza in sange</h4>

<p>Pentru a intelege cum se produce diabetul zaharat, trebuie sa intelegi mai intai cum este procesata in mod normal glucoza in organism. Glucoza (principalul tip de zahar) este vitala pentru sanatate deoarece este principala sursa de energie pentru celule, inclusiv pentru creier. Exista doi hormoni care functioneaza impreuna pentru a mentine glucoza din sange (glicemia) in limite normale: insulina si glucagonul.
</p>
<h4>Glucoza:</h4>
<ul class="list-group ps-5">
  <li class="list-group-item">Glucoza provine din doua surse majore: alimentele consumate (principala sursa) si ficat.</li>
  <li class="list-group-item">Glucoza din alimente este absorbita din intestinul subtire in sange, de unde cu ajutorul insulinei patrunde in celule.</li>
  <li class="list-group-item">Ficatul produce glucoza pe care o stocheaza sub forma de glicogen.</li>
</ul>

<h4>Insulina:</h4>
<ul class="list-group ps-5">
    <li class="list-group-item">Insulina este un hormon care este produs de pancreas, o glanda situata in spatele stomacului.</li>
    <li class="list-group-item">Celulele beta specializate din pancreas secreta insulina in sange.</li>
    <li class="list-group-item">Cand mancam alimente care contin carbohidrati, glucoza este absorbita din intestin in sange.</li>
    <li class="list-group-item">Insulina circula in sange si ajuta glucoza din sange sa patrunda in celulele organismului, unde este folosita pentru obtinerea de energie.</li>
    <li class="list-group-item">Insulina scade astfel cantitatea de glucoza din sange.</li>
    <li class="list-group-item">Pe masura ce nivelul glucozei din sange scade, scade si secretia de insulina din pancreas.</li>
</ul>

<h4>Glucagon:</h4>
<ul class="list-group ps-5">
    <li class="list-group-item">Cand nivelul de glucoza este scazut, cum ar fi dupa o perioada in care nu am mai mancat, ficatul, sub actiunea unui alt hormon denumit glucagon, descompune glicogenul in glucoza.</li>
    <li class="list-group-item">Glucagonul creste astfel cantitatea de glucoza din sange. Astfel, se restabileste concentratia de glucoza in sange care este mentinuta in limitele normale.</li>
    <li class="list-group-item">Diabetul zaharat apare atunci cand glicemia este prea mare. Diabetul zaharat de tip 1 se produce din cauza ca pancreasul sintetizeaza foarte putina sau deloc insulina. Astfel, glucoza nu poate ajunge in celule si se acumuleaza in sange. Prea mult zahar in sange poate cauza consecinte serioase de sanatate.</li>
</ul>
<h2>Cauze</h2>
<blockquote>
Cauza exacta nu este pe deplin cunoscuta, dar se presupune ca exista o combinatie de factori genetici si din mediu (cum ar fi expunerea la virusuri). Frecvent, se considera ca diabetul zaharat de tip 1 este o boala autoimuna in care sistemul imunitar - al carui rol este de a lupta impotriva infectiilor bacteriene si virale - in mod gresit ataca si distruge propriile celule din pancreas care produc insulina. Astfel, absenta insulinei determina cresterea glicemiei care poate avea consecinte amenintatoare de viata.

Diabetul zaharat nu este cauzat de o anumita dieta sau de stilul de viata.
</blockquote>
<h2>Factori de risc</h2>
<ul class="list-group ps-5">
    <li class="list-group-item">Istoric familial. Daca ai un parinte sau un frate/sora cu diabet zaharat de tip 1 ai un risc crescut de a face aceasta afectiune.
    </li>
    <li class="list-group-item">Gene. Prezenta anumitor gene indica un risc crescut de a face diabet zaharat de tip 1.
    </li>
    <li class="list-group-item">Varsta. Desi diabetul zaharat de tip 1 poate sa apara la orice varsta, exista doua varfuri cand este mai frecvent: la copiii cu varsta cuprinsa intre 4 - 7 ani, respectiv 10 -14 ani.
    </li>
    <li class="list-group-item">Factori de mediu. Circumstante precum expunerea la o boala virala joaca probabil un rol in producerea diabetului de tip 1.
    </li>
    <li class="list-group-item">Prezenta autoanticorpilor. Diabetul zaharat de tip 1 este caracterizat printr-o distrugere mediata imun a celulelor beta pancreatice producatoare de insulina. Membrii familiei unui pacient cu diabet zaharat de tip 1 sunt testati pentru prezenta autoanticorpilor. Daca acestia sunt prezenti, exista un risc crescut de a face diabet de tip 1, insa nu toate persoanele care au acesti autoanticorpi vor face boala.
    </li>
</ul>
<h2>Semne si simptome</h2>
<blockquote>
Dureaza luni de zile sau ani pana cand celulele beta ale pancreasului sa fie distruse complet astfel incat sa nu mai produca deloc insulina. Cand pancreasul nu mai secreta insulina, simptomele apar rapid, in decurs de cateva zile pana la cateva saptamani, in special la copii. Odata ce simptomele apar, acestea pot fi severe.

Desi majoritatea persoanelor cu diabet zaharat de tip 1 sunt diagnosticate in copilarie si la varsta de tanar adult, simptomele sunt aceleasi la orice varsta. Este posibil ca adultii cu diabet zaharat de tip 1 sa nu recunoasca simptomele diabetului la fel de repede cum sunt identificate in cazul copiilor, ceea ce poate intarzia diagnosticarea si tratarea lor.

De aceea este atat de important sa mergi la un consult la medic de indata ce observi la tine sau la copilul tau aceste manifestari:
<ul class="list-group ps-5">
    <li class="list-group-item">Sete excesiva si urinare frecventa</li>
    <li class="list-group-item">Senzatie crescuta de foame</li>
    <li class="list-group-item">Vedere incetosata</li>
    <li class="list-group-item">Oboseala marcata</li>
    <li class="list-group-item">Pierdere in greutate inexplicabila</li>
    <li class="list-group-item">Mancarime sau scurgere genitala</li>
    <li class="list-group-item">Rani care se vindeca greu</li>
</ul>
Uneori, primele semne si simptome ale diabetului de tip 1 sunt manifestarile unei complicatii serioase, care poate pune viata in pericol, denumita cetoacidoza diabetica, cum ar fi:
<ul class="list-group ps-5">
    <li class="list-group-item">Respiratie cu miros fructat de mere crude (asemanator acetonei)</li>
    <li class="list-group-item">Piele rosie si uscata</li>
    <li class="list-group-item">Greata si varsaturi</li>
    <li class="list-group-item">Dureri abdominale</li>
    <li class="list-group-item">Dificultate in respiratie, cu respiratii ample, cu frecventa crescuta</li>
    <li class="list-group-item">Tulburare de atentie, letargie si confuzie care pot progresa catre coma si deces</li>
</ul>
Cetoacidoza diabetica apare atunci cand celulele din corp nu pot utiliza glucoza pentru obtinerea de energie si ca urmare vor incepe sa foloseasca lipidele (grasimile) - care nu necesita actiunea insulinei - pentru a-si obtine energia. In acest proces se produc si substante toxice pentru organism cunoscute sub denumirea de cetone (corpi cetonici) care se acumuleaza in sange si determina acidoza metabolica.

Cetoacidoza diabetica este o urgenta medicala care trebuie tratata in spital. Daca tu sau copilul tau aveti aceste semne si simptome, mergeti la cea mai apropiata camera de garda a unui spital sau suna imediat la 112!

</blockquote>
<h2>Complicatii</h2>
<blockquote>
In timp, un nivel constant crescut de glucoza in sange poate afecta organele majore din corp, inclusiv inima, vasele de sange, nervii, ochii si rinichii. Complicatiile diabetului zaharat de tip 1 pot fi invalidante sau pot chiar sa puna viata in pericol. Mentinerea unui nivel normal de zahar in sange poate reduce semnificativ riscul multora dintre aceste complicatii.

Complicatiile diabetului zaharat de tip 1 sunt:
<ul class="list-group ps-5">
    <li class="list-group-item">Boala arteriala coronariana</li>
    <li class="list-group-item">Accident vascular cerebral</li>
    <li class="list-group-item">Boala cronica renala</li>
    <li class="list-group-item">Neuropatie diabetica</li>
    <li class="list-group-item">Picior diabetic</li>
    <li class="list-group-item">Afectiuni oftalmologice</li>
    <li class="list-group-item">Afectiuni ale cavitatii bucale</li>
    <li class="list-group-item">Depresie</li>
    <li class="list-group-item">Complicatii ale sarcinii</li>
</ul>
</blockquote>
    <h4>Boli cardiovasculare</h4>
<blockquote>
Diabetul creste dramatic riscul de aparitie a unor afectiuni la nivelul inimii si vaselor de sange, cum ar fi boala arteriala coronariana cu durere in piept (angina) si infarct miocardic acut, accident vascular cerebral, ingustarea arterelor (ateroscleroza) si hipertensiune arteriala.
</blockquote>

<h4>Neuropatia diabetica</h4>
<blockquote>
Excesul de zahar poate leza peretii vaselor mici de sange (capilare) care hranesc nervii, in special la nivelul picioarelor cu aparitia leziunilor la nivelul nervilor (neuropatie). Lezarea nervilor de la nivelul membrelor se numeste neuropatie periferica si determina senzatia de furnicaturi, amorteala, arsura sau durere care de obicei incepe la varful degetelor de la picioare sau de la maini si se extinde treptat in sus. Daca glicemia nu este controlata, poate sa apara pierderea sensibilitatii la nivelul membrelor afectate. Pacientii cu diabet zaharat trebuie sa-si examineze zilnic picioarele si sa poarte incaltari largi, confortabile.

Leziunile nervilor care afecteaza tractul gastrointestinal pot cauza probleme digestive cu greata, varsaturi, diaree sau constipatie. La barbati, poate sa apara disfunctia erectila.
</blockquote>
<h4>Nefropatia diabetica</h4>
<blockquote>

Excesul de zahar poate leza peretii vaselor mici de sange (capilare) care hranesc nervii, in special la nivelul picioarelor cu aparitia leziunilor la nivelul nervilor (neuropatie). Lezarea nervilor de la nivelul membrelor se numeste neuropatie periferica si determina senzatia de furnicaturi, amorteala, arsura sau durere care de obicei incepe la varful degetelor de la picioare sau de la maini si se extinde treptat in sus. Daca glicemia nu este controlata, poate sa apara pierderea sensibilitatii la nivelul membrelor afectate. Pacientii cu diabet zaharat trebuie sa-si examineze zilnic picioarele si sa poarte incaltari largi, confortabile.

Leziunile nervilor care afecteaza tractul gastrointestinal pot cauza probleme digestive cu greata, varsaturi, diaree sau constipatie. La barbati, poate sa apara disfunctia erectila.
</blockquote>
<h4>Nefropatia diabetica</h4>
<blockquote>
Rinichii contin milioane de grupuri mici de vase de sange (glomeruli) care filtreaza deseurile din sange. Diabetul poate deteriora acest sistem delicat de filtrare. Lezarea severa a vaselor mici de sange din rinichi poate determina insuficienta renala sau boala cronica de rinichi, care poate necesita dializa sau transplant de rinichi.
</blockquote>
<h4>Retinopatia diabetica</h4>
<blockquote>
Diabetul poate deteriora vasele de sange ale retinei (retinopatie diabetica), determinand scaderea vederii si chiar orbire. De asemenea, diabetul zaharat creste riscul de aparitie a altor afectiuni oftalmologice serioase, cum ar fi glaucomul si cataracta.
</blockquote>
<h4>Piciorul diabetic</h4>
<p>
Leziunile nervilor si/sau afectarea fluxul sanguin la nivelul picioarelor cresc riscul aparitiei diferitelor complicatii. In special, pierderea sensibilitatii la nivelul picioarelor este deosebit de importanta, deoarece poate permite accidentarea si producerea de rani care sa treaca neobservate. In plus, circulatia defectuoasa va determina ca ranile sa se vindece foarte greu si sa apara complicatii infectioase care in final sa necesite amputatia unui deget, a piciorului sau a membrului inferior.
</p>
<h4>Afectiuni ale pielii si la nivelul cavitatii bucale</h4>
<p>
Diabetul creste riscul de infectii ale pielii si la nivelul gurii, cum sunt infectiile bacteriene si fungice. Inflamatia gingiilor (parodontita) si uscaciunea gurii sunt, de asemenea, mai frecvente. Parodontita este o cauza majora a pierderii dintilor si este asociata cu un risc crescut de boli cardiovasculare. Trebuie sa mergi regulat la stomatolog pentru diagnostic si tratament precoce.
</p>
<h4>Depresie</h4>
<p>
Simptomele depresiei sunt frecvente la persoanele cu diabet zaharat tip 1. Depresia poate afecta modul in care pacientul este capabil sa-si gestioneze boala.
Complicatii ale sarcinii
Nivelurile ridicate ale glicemiei pot fi periculoase atat pentru mama, cat si pentru fat. Riscul de avort spontan, nasterea unui fat mort si de malformatii congenitale creste atunci cand diabetul nu este bine controlat. Pentru mama, diabetul creste riscul de cetoacidoza diabetica, afectiuni oftalmologice (retinopatie diabetica), hipertensiune arteriala indusa de sarcina si preeclampsie.
</p>
<h2>Diagnostic</h2>
<p>
Atunci cand o persoana prezinta simptome si semne clare de diabet zaharat tip 1, medicul va recomanda efectuarea analizelor pentru diagnosticarea diabetului. O analiza simpla de sange va permite confirmarea bolii. Daca medicul considera ca ai diabet de tip 1 va cere efectuarea unor analize de sange pentru identificarea autoanticorpilor care sunt prezenti in diabetul de tip 1, insa sunt absenti in diabetul de tip 2. De asemenea, va analiza urina pentru prezenta corpilor cetonici, care sunt produsi de degradare ai lipidelor (grasimilor) folosite de corp pentru obtinerea de energie si care, de asemenea, indica tipul 1 de diabet.

Testarea glicemiei intr-un moment oarecare al zilei

Acest test poate fi efectuat in orice moment al zilei, independent de masa. Uneori, medicul poate folosi acest test pentru a diagnostica diabetul atunci cand sunt prezente simptomele caracteristice de diabet si cand nu se doreste sa se astepte 8 ore pentru ca glicemia sa fie recoltata pe nemancate.

<h5>Glicemia a jeun (pe nemancate)</h5>
<p>
Glicemia a jeun masoara nivelul glicemiei dimineata, pe nemancate (nu trebuie sa mananci cel putin 8 ore; poti bea apa).
</p>
<h5>Hemoglobina glicozilata - HbA1c</h5>

Hemoglobina glicozilata (HbA1c) este o analiza de sange care furnizeaza informatii estimative privind nivelurile medii ale glicemiei din ultimele 3 luni. Poti manca si bea inainte de aceasta analiza. Rezultatul este mentionat sub forma de procent si cu cat acesta este mai mare, cu atat nivelul mediu al glicemiei este mai mare. Deoarece testul reflecta nivelul mediu de glucoza din sange pe parcursul duratei de viata a celulelor rosii din sange nu este precis la persoanele care au anemie (numar scazut al eritrocitelor).
</p>
<h2>Cum sunt interpretate rezultatele acestor analize</h2>
<p>
Fiecare din analizele de mai sus foloseste o masuratoare diferita. De obicei, pentru a diagnostica diabetul, este necesar ca aceeasi metoda de testare sa fie repetata a doua zi. De asemenea, medicul poate folosi o a doua metoda pentru a confirma ca ai diabet.

Urmatoarele valori indica un rezultat normal al glicemiei, respectiv ca ai diabet sau prediabet:

<h5>Normal</h5>
<ul class="list-group ps-5">
    <li class="list-group-item">Glicemia pe nemancate (a jeun): < 99 mg/dL</li>
    <li class="list-group-item">HbA1c: < 5.7%</li>
    <li class="list-group-item">Glicemia recoltata intr-un moment oarecare al zilei: nu se aplica</li>
</ul>
<h5>Prediabet</h5>
<ul class="list-group ps-5">
    <li class="list-group-item">Glicemia pe nemancate (a jeun): 100-125 mg/dL</li>
    <li class="list-group-item">HbA1c: 5.7- 6.4%</li>
    <li class="list-group-item">Glicemia recoltata intr-un moment oarecare al zilei: nu se aplica</li>
</ul>
<h5>Diabet zaharat</h5>
<ul class="list-group ps-5">
    <li class="list-group-item">Glicemia pe nemancate (a jeun): >/=126 mg/dL</li>
    <li class="list-group-item">HbA1c: >/= 6.5%</li>
    <li class="list-group-item">Glicemia recoltata intr-un moment oarecare al zilei: >/= 200 mg/dL</li>
</ul>
</p>
<h2>Care sunt analizele care ajuta medicul sa stie ce tip de diabet zaharat ai?</h2>
<p>
Analizele de mai sus pot confirma ca ai diabet zaharat, insa nu pot identifica tipul de diabet. Uneori, medicul nu este sigur daca ai diabet de tip 1 sau diabet de tip 2. Un tip rar de diabet poate sa apara la copii – se numeste diabet monogenic si poate, de asemenea, sa fie confundat cu diabetul de tip 1. Diabetul monogenic reprezinta acea forma de diabet zaharat care rezulta in urma mutatiei unei singure gene. Tratamentul depinde de tipul de diabet pe care il ai, prin urmare, cunoasterea tipului de diabet este importanta.

Pentru a afla daca ai diabet de tip 1, medicul iti va recomanda efectuarea unor analize de sange pentru identificarea unor autoanticorpi - acestia sunt anticorpi care ataca in mod gresit celule beta de la nivelul pancreasului care produc insulina (anticorpi anti-celule insulare pancreatice). O persoana poate sa aiba acesti anticorpi care sa determine afectarea pancreasului fara insa sa aiba simptome pentru luni sau ani de zile. Prezenta acestor autoanticorpi specifici este un aspect frecvent in diabetul zaharat de tip 1, in special la debutul bolii, insa nu si in diabetul de tip 2 sau in diabetul monogenic.

Din cauza ca diabetul zaharat de tip 1 poate sa apara in cadrul aceleasi familii, medicul va recomanda efectuarea acestor autoanticorpi la rudele de gradul I (frate/sora, parinte sau copil) ale unui pacient cu diabet zaharat tip 1. Prezenta autoanticorpilor, chiar in absenta simptomelor de diabet, inseamna ca acea persoana are un risc mai crescut de a face aceasta afectiune.

Prezenta cetonelor – produse rezultate din descompunerea grasimilor – in urina sugereaza, de asemenea, diabet zaharat de tip 1, mai degraba decat de tip 2.
</p>
<h4>Dupa diagnostic</h4>
<p>
Odata ce ai fost diagnosticat cu diabet zaharat tip 1 vei merge regulat la medicul diabetolog care impreuna cu tine va gestiona diabetul. Medicul va verifica regulat nivelul hemoglobinei glicozilate (HbA1c). Obiectivul tinta pentru HbA1c poate varia in functie de varsta si de diversi alti factori. In general, Asociatia Americana de Diabet recomanda o valoare normala tinta < 7%, ceea ce se traduce printr-o medie estimata a glicemiei in ultimele 3 luni de 154 mg/dl.

In comparatie cu autotestarea zilnica regulata a glicemiei, hemoglobina glicozilata indica mai bine cat de bine functioneaza planul de tratament al diabetului. Un nivel crescut al hemoglobinei glicozilate poate semnala necesitatea de a schima regimul de insulina, planul de mese recomandat sau ambele.

Pe langa testarea hemoglobinei glicozilate, medicul va efectua periodic analize de sange si urina pentru a verifica nivelul de colesterol, functia hepatica si functia rinichilor. De asemenea, medicul iti va masura regulat tensiunea arteriala si va verifica aspectul picioarelor si al zonelor de la nivelul pielii unde iti testezi glicemia si administrezi insulina.
</p>
<h2>Tratament</h2>
<p>
Tratamentul pentru diabetul de tip 1 include:
<ul class="list-group ps-5">
    <li class="list-group-item">Administrarea de insulina</li>
    <li class="list-group-item">Stabilirea unui plan de masa care tine cont de cantitatea de carbohidrati, grasimi si proteine consumate</li>
    <li class="list-group-item">Monitorizarea frecventa a glicemiei</li>
    <li class="list-group-item">Alimentatie sanatoasa, variata</li>
    <li class="list-group-item">Practicarea regulata de activitate fizica si mentinerea unei greutati normale</li>
</ul>
Scopul este sa mentii nivelul glicemiei cat mai aproape de normal pentru a intarzia sau preveni complicatiile. In general, tinta este de a obtine o glicemie in timpul zilei inainte de masa intre 80 - 130 mg/dL si < 180 mg/dL la doua ore dupa masa.

<h4>Insulina</h4>
<p>
Toti pacientii cu diabet zaharat tip 1 vor avea nevoie de administrarea pe toata durata vietii de insulina injectabila.

<h5>Tipuri de insulina injectabila:</h5>

<ul class="list-group ps-5">
    <li class="list-group-item">Insulina cu actiune rapida incepe sa functioneze la aproximativ 15 minute dupa injectare, atingand un varf (un efect maxim) in aproximativ 1-2 ore dupa injectare. Activitatea dureaza 2-4 ore.</li>
    <li class="list-group-item">Insulina normala sau cu actiune scurta ajunge de obicei in sange in 30 de minute de la injectare, atingand varful in aproximativ 2-3 ore si este eficienta timp de aproximativ 3-6 ore.</li>
    <li class="list-group-item">Insulina cu actiune intermediara ajunge in fluxul sanguin la aproximativ 2-4 ore dupa injectare, atinge un efect maxim dupa 4-12 ore si actioneaza timp de aproximativ 12 - 18 ore.</li>
    <li class="list-group-item">Insulina cu actiune indelungata ajunge in sange la cateva ore dupa injectare si actioneaza 24 de ore.</li>
    <li class="list-group-item">Insulina cu actiune ultra indelungata ajunge in sange in sase ore si actioneaza >/= 36 de ore.</li>
</ul>
<h5>Administrarea insulinei</h5>

Insulina nu poate fi administrata pe cale orala sub forma unei pastile, deoarece ar fi descompusa in stomac, ceea ce ar preveni actiunea ei. Prin urmare, insulina trebuie injectata subcutanat (sub piele) sau adminstrata sub forma de pompa de insulina. Insulina poate fi injectata la nivelul abdomenului, bratelor, feselor si coapselor. Insulina se absoarbe in sange diferit in functie de locul de injectare. Insulina actioneaza cel mai rapid atunci cand se administreaza in abdomen. Pentru cele mai bune rezultate, se recomanda ca injectarea insulinei sa se faca in aceeasi zona de fiecare data, mai multe zile la rand (de exemplu: dimineata, in abdomen, la pranz, in bratul drept, la cina, in coapsa dreapta, la culcare, in coapsa stanga). Insulina nu se injecteaza fix in acelasi punct, ci de jur imprejurul zonei respective. Distanta intre doua puncte de injectare trebuie sa fie de 2-3 cm.


Exista doua metode principale de administrare a insulinei:

Injectii:

Stilou de insulina („pen”). Este un dispozitiv care injecteaza insulina sub piele printr-o apasare de buton. Este o metoda simpla si comoda de administrare a insulinei, foarte utila in special in cazul copiilor.
Cu ajutorul unei seringi de unica folosinta cu ac fin.
Frecvent, se foloseste o combinatie de tipuri de insulina care sa fie utilizate pe timpul zilei si noptii. Injectiile zilnice multiple care includ o combinatie de insulina cu actiune indelungata combinata cu o insulina cu actiune rapida imita utilizarea normala a insulinei de catre organism, comparativ cu regimurile mai vechi care necesitau doar una sau doua injectii pe zi. Studiile au aratat ca un regim de trei sau mai multe injectii de insulina pe zi imbunatateste controlul glicemiei.

<h5>Pompele de insulina:</h5>

<ul class="list-group ps-5">
    <li class="list-group-item">Sunt dispozitive electronice de mici dimensiuni care furnizeaza un aport continuu de insulina sub piele.</li>
    <li class="list-group-item">Dispozitivul care are aproximativ dimensiunea unui telefon mobil, este purtat in exteriorul corpului. Un tub conecteaza un rezervor de insulina la un cateter care este introdus sub pielea de la nivelul abdomenului. Acest tip de pompa poate fi purtat intr-o varietate de moduri: la nivelul taliei, in buzunar sau fixat de curele special concepute pentru pompa.</li>
    <li class="list-group-item">Exista, de asemenea, o optiune de pompa de insulina fara fir (wireless). POD-ul (piesa de plastic  care este pompa) contine si rezervorul si cateterul integrate in aceeasi structura. Cateterul minuscul este introdus sub piele. Poate fi purtat pe abdomen, pe partea inferioara a spatelui, la nivelul piciorului sau bratului. Programarea se face cu un dispozitiv wireless care comunica cu pod-ul.</li>
    <li class="list-group-item">Prin injectarea insuliniei de catre pompa, este imitat modul in care functioneaza pancreasul sanatos.</li>
    <li class="list-group-item">Rata bazala - pompa este programata pentru a distribui automat continuu cantitati mici de insulina cu actiune rapida. Aceasta doza constanta de insulina este cunoscuta drept rata bazala deoarece imita secretia bazala a insulinei de catre pancreas. Medicul diabetolog va programa rata bazala personalizat, in functie de nevoile fiecarui pacient.</li>
    <li class="list-group-item">Doza de bolus - o cantitate suplimentara de insulina poate fi administrata „la cerere” pentru a corespunde alimentelor pe care le consumi sau pentru a corecta hiperglicemia. Cand mananci, programezi pompa introducand cantitatea de carbohidrati pe care o consumi si glicemia actuala. Pompa iti va oferi ceea ce se numeste o doza de bolus de insulina pentru a-ti acoperi masa si pentru a-ti corecta glicemia daca este crescuta.</li>
</ul>
Studiile au aratat ca la unii pacienti pompa de insulina poate fi mai eficienta in controlul nivelului de zahar din sange decat injectiile de insulina. Totusi, multi pacienti cu diabet zaharat tip 1 obtin niveluri bune de glicemie prin administrarea insulinei injectabile. Pompa de insulina combinata cu un dispozitiv de monitorizare continua a glucozei pot asigura un control si mai strict al glicemiei.

<h3>Pancreas artificial</h3>
In septembrie 2016, Food and Drug Administration (FDA) din Statele Unite a aprobat primul pancreas artificial pentru pacientii cu diabet zaharat de tip 1 care au >/= 14 ani. Un al doilea pancreas artificial a fost aprobat in decembrie 2019. Dispozitivul mai este denumit aparat de livrare de insulina in bucla inchisa. Dispozitivul implantat conecteaza un dispozitiv de monitorizare continua a glicemiei, care verifica nivelul zaharului din sange la fiecare cinci minute, de o pompa de insulina. Dispozitivul furnizeaza automat cantitatea corecta de insulina atunci cand monitorul indica ca este necesar. Exista mai multe sisteme de pancreas artificial (in bucla inchisa) care sunt testate in prezent in studii clinice.

In ianuarie 2021 a fost introdus pe piata din Romania primul sistem de tip pancreas artificial - advanced hybrid closed loop - pentru pacientii cu diabet tip 1 care folosesc pompe de insulina. Dispozitivul care poate fi utilizat de pacienti cu varste intre 7 - 80 de ani foloseste un algoritm avansat care automatizeaza livrarea 24/7 atat a ratei bazale, cat si a bolusurilor de corectie, dupa cum este necesar.

</p>
<h2>Managementul bolii</h2>
<p>
In plus fata de tratamentul cu insulina si orice alte medicamente recomandate, iti pot gestiona boala avand grija de tine zi de zi. Spre deosebire de multe alte afectiuni cronice (care vor dura toata viata), diabetul zaharat de tip 1 este gestionat in cea mai mare parte de catre tine, cu sprijinul familiei si al altor persoane din viata ta care te pot ajuta, precum si al echipei medicale de ingrijire, din care fac parte medicul diabetolog, de familie, pediatru, oftalmolog, cardiolog, neurolog, stomatolog si dietetician nutritionist.

Respectarea planului de masa pentru diabet, practicarea unei activitati fizice in mod regulat si verificarea frecventa a glicemiei sunt cateva dintre modalitatile prin care iti poti ingriji boala. Daca intentionezi sa ai copii, este important sa incerci sa obtii un nivel al glicemiei cat mai aproape de limita normala inainte de a ramane gravida. Managementul diabetului de tip 1 poate fi dificil, insa tot acest efort este esential.

<h4>Alimentatie sanatoasa si calcularea carbohidratilor</h4>
Nu exista o dieta speciala pentru diabet. Cu toate acestea, este important ca alimentatia sa fie una sanatoasa care sa includa alimente calitative nutritional, sarace in grasimi si bogate in fibre, cum ar fi:

<ul class="list-group ps-5">
    <li class="list-group-item">Fructe</li>
    <li class="list-group-item">Legume</li>
    <li class="list-group-item">Cereale integrale</li>
</ul>
Ti se va recomanda sa mananci mai putine produse de origine animala si carbohidrati rafinati, cum ar fi painea alba si dulciurile. Acest plan de alimentatie sanatoasa este indicat inclusiv in cazul persoanelor fara diabet.

Va trebui sa inveti cum sa apreciezi cantitatea de carbohidrati din alimentele pe care le consumi, astfel incat sa iti poti administra suficienta insulina pentru a metaboliza corect acesti carbohidrati. Medicul diabetelog sau specialistul dietician te pot ajuta sa iti faci un plan de masa care este adaptat nevoilor tale.

<h4>Activitatea fizica</h4>
Fiecare dintre noi trebuie sa facem o activitate fizica regulata, iar pacientii cu diabet zaharat de tip 1 nu fac exceptie. Mai intai, discuta cu medicul tau ce tip de exercitii fizice le poti practica in siguranta. Apoi, alege acele activitati sau sporturi care iti plac, cum ar fi mersul pe jos sau inotul, si introdu-le in rutina zilnica. Propune-ti sa faci cel putin 150 de minute de exercitii aerobice pe saptamana, cu cel mult doua zile fara exercitii fizice. In cazul copiilor, tinta este de cel putin o ora de activitate fizica pe zi.

Intelege ca activitatea fizica scade glicemia. Daca incepi o noua activitate, verifica nivelul de zahar din sange mai des decat de obicei, pana cand vei intelege cum aceasta activitate iti afecteaza nivelul de glicemie. Poate fi necesar sa iti ajustezi planul de masa sau dozele de insulina pentru a compensa activitatea fizica crescuta.

<h4>Adopta pe toata viata un stil de viata sanatos</h4>
<h5>Participa activ la propriul tratament</h5>

<ul class="list-group ps-5">
    <li class="list-group-item">Stabileste o buna relatie cu medicul diabetolog, asistenta de diabetologie si specialistul nutritionist.</li>
    <li class="list-group-item">Cunoaste cat mai mult despre ce inseamna diabetul de tip 1.</li>
    <li class="list-group-item">Introdu alimentatia sanatoasa si activitatea fizica ca parte din rutina ta zilnica.</li>
    <li class="list-group-item">Fa-ti injectiile de insulina conform recomandarilor.</li>
    <li class="list-group-item">Masoara-ti singur glicemia, conform recomandarilor medicale.</li>
    <li class="list-group-item">Cunoaste cum sa interpretezi rezultatele, noteaza-le si discuta-le cu medicul diabetolog.</li>
    <li class="list-group-item">Recunoaste semnele hipoglicemiei si ale hiperglicemiei si cunoaste ce ai de facut in fiecare situatie.</li>
</ul>
    <h5>Identifica-te ca ai diabet</h5>
</p>
Poarta cu tine un document sau o bratara care specifica faptul ca ai diabet zaharat tip 1.
Asigura-te ca ai intotdeauna la dispozitie acasa, la serviciu si cand esti afara o trusa de urgenta care contine o injectie cu glucagon. Glucagonul este esential daca faci un episod de hipoglicemie deoarece actioneaza rapid si transforma glicogenul de la nivelul ficatului in glucoza cu cresterea glicemiei. In cazul in care nu ti-ai putea administra singur injectia, asigura-te ca persoanele din jur - colegii de munca, familia si prietenii - stiu cum sa foloseasca trusa de urgenta.
Efectueaza controalele regulate

Este important sa mergi regulat la medicul diabetolog si sa efectuezi analize si controale de specialitate care sa permita depistarea precoce a complicatiilor.
Examen de urina - pentru depistarea nefropatiei diabetice.
Examen oftalmologic si retinofotografia - pentru depistarea retinopatiei diabetice.
Examen neurologic si neurometria - pentru depistarea neuropatiei diabetice.
Examenul picioarelor de catre medicul specialist diabetolog - pentru depistarea complicatiilor la acest nivel.
Hemoglobina glicozilata (HbA1c) - indica media glicemiilor din ultimele 3 luni. In general, obiectivul este ca HbA1C sa fie < 7%. Intreaba medicul diabetolog care este procentul in cazul tau.
Colesterol, HDL-colesterol (colesterolul „bun”), LDL-colesterol (colesterolul „rau”) si trigliceride. Discuta cu medicul curant diabetolog care sunt valorile recomandate pentru tine.
Ingrijeste-ti cu atentie picioarele

Spala zilnic picioarele cu apa calduta. Usuca-le prin tamponare usoara si insista mai ales intre degete. Aplica o crema hidratanta.
Verifica aspectul picioarelor in fiecare zi pentru a identifica eventuale rani, roseata, umflaturi, vezicule sau taieturi. Mergi la medic daca ai o durere sau o rana la picior care nu se vindeca.
Controleaza-ti tensiunea arteriala si colesterolul

Consuma alimente sanatoase si practica regulat o activitate fizica.
Discuta cu medicul tau daca ai nevoie de tratament medicamentos.
Nu fuma

Fumatul creste riscul de complicatii ale diabetului, cum ar fi infarct miocardic acut, accident vascular cerebral, neuropatie si boala cronica de rinichi.
Consuma alcool responsabil

Alcoolul poate determina cresterea sau scaderea glicemiei, in functie de cat bei si daca mananci in acelasi timp.
Daca alegi sa bei, fa-o cu moderatie si intotdeauna in timpul masei.
Verifica intotdeauna nivelul glicemiei inainte de a te culca.
Controleaza stresul

Hormonii produsi in organism ca raspuns la stresul prelungit pot impiedica functionarea corecta a insulinei.
Controleaza stresul. Stabileste limite. Prioritizeaza sarcinile. Invata tehnici de relaxare. Dormi adecvat.
Fa-ti vaccinurile recomandate

Un nivel de glucoza in sange constant crescut slabeste sistemul imun.
Fa-ti anual vaccinul impotriva gripei. Discuta cu medicul diabetolog despre necesitatea efectuarii vaccinulul pneumococic care sa previna bolile invazive si pneumonia determinata de Streptococcus pneumoniae.
Centrul pentru Controlul si Prevenirea Bolilor (CDC) din Statele Unite recomanda vaccinarea impotriva hepatitei B daca nu ai fost vaccinat anterior stabilirii diagnosticului de diabet si ai intre 19-59 de ani. CDC recomanda vaccinarea cat mai curand posibil odata stabilit diagnosticul de diabet de tip 1. Daca ai > 60 de ani si ai diabet si nu ai fost vaccinat anterior, discuta cu medicul tau ce este indicat in cazul tau.

Situatii speciale
Anumite circumstante de viata necesita precautii speciale.

Condus

Hipoglicemia poate aparea in orice moment. Este recomandat sa iti verifici glicemia de fiecare data inainte de a conduce. Daca glicemia este < 70 mg/dL, mananca o gustare care contine 15 grame de carbohidrati. Retesteaza-te dupa 15 minute pentru a te asigura ca nivelul de zahar din sange a crescut la un nivel sigur.

Activitatea profesionala

Diabetul zaharat de tip 1 poate presupune provocari la locul de munca. De exemplu, daca lucrezi intr-un loc de munca care implica conducerea vehiculelor sau folosirea utilajelor grele, hipoglicemia ar putea prezenta un risc serios atat pentru tine, cat si pentru cei din jur.

Sarcina

Deoarece riscul de complicatii este mai mare in cazul femeilor insarcinate care au diabet zaharat de tip 1, medicii recomanda un consult preconceptional (inainte de a ramane insarcinata) si obtinerea unui nivel al hemoglobinei glicozilate HbA1c mai mic de 6,5% inainte de a incerca sa ramai gravida.

Riscul de malformatii congenitale este crescut daca mama are diabet de tip 1, in special atunci cand diabetul este prost controlat in primele 6-8 saptamani de sarcina. Gestionarea atenta a diabetului in timpul sarcinii poate reduce riscul de complicatii.

Persoanele in varsta

Pentru pacientii in varsta care sunt fragili sau au deficite cognitive, nu este practic sa se obtina un control strict al glicemiei care ar putea creste riscul de hipoglicemie. In cazul acestor pacienti, un obiectiv mai putin strict al HbA1c la valori < 8% poate fi mai adecvat.


Monitorizarea glicemiei acasa
Chiar daca iti faci injectiile de insulina si mananci conform unui program rigid, glicemia se poate schimba in mod imprevizibil. Medicul iti va explica cum se modifica nivelul zaharului din sange ca raspuns la mese, activitatea fizica, boala, medicamente, stres, modificari hormonale si consumul de alcool.

Masurarea glicemiei cu glucometru

In functie de tipul de regim cu insulina pe care il alegi sau de care ai nevoie, poate fi necesar sa iti verifici glicemia (nivelul zaharului din sange) cu ajutorul unui glucometru de cel putin patru ori pe zi.

Asociatia Americana de Diabet recomanda testarea nivelului de zahar din sange inainte de mese si gustari, inainte de culcare, inainte de a face o activitate fizica sau de a conduce si ori de cate ori consideri ca ai putea avea glicemia scazuta (hipoglicemie). Monitorizarea atenta a glicemiei este singura modalitate de a te asigura ca nivelul zaharului din sange ramane in intervalul tinta. Monitorizarea mai frecventa a glicemiei poate scadea nivelul hemoglobinei glicozilate.

Glucometrul este un aparat medical electronic, portabil, de dimensiuni mici, astfel incat il poti lua cu tine si folosi atunci cand este nevoie. Testarea presupune inteparea degetului (mijlociu sau inelar) pe partea laterala a varfului (nu in mijloc), folosind dispozitivul de intepare. Apasand usor se obtine o picatura de sange care este aplicata pe o banda de testare (o hartie speciala de unica folosinta) care se introduce in aparat. Rezultatul se obtine in cateva secunde si arata cata glucoza se gaseste in sangele tau la acel moment.

Intreaba medicul diabetolog cat de frecvent trebuie sa te testezi. Pastreaza notate aceste valori si adu-le la urmatorul consult la medic.

Monitorizarea continua a glicemiei

Monitorizarea continua a glicemiei (CGM - continuous glucose monitoring) este cea mai noua modalitate de a monitoriza nivelul zaharului din sange si poate fi deosebit de utila pentru prevenirea hipoglicemiei. Ofera o imagine completa, scotand in evidenta valorile joase si valorile ridicate pe care testul HbA1c si testul prin intepatura in deget nu le pot identifica intotdeauna. Glicemia masurata cu glucometru reprezinta doar valoarea din momentul respectiv.

Monitorizarea continua a glicemiei este asemanatoare cu testul Holter pentru tensiunea arteriala sau ECG. Masoara in timp real, zi si noapte, valorile glicemiei permitand sa cunosti cum evolueaza glicemia si iti ofera informatii suplimentare asupra efectului alimentatiei, efortului, medicatiei sau afectiunilor intercurente asupra glicemiei.

Dispozitivele de monitorizare continua ale glicemiei se fixeaza pe corp folosind un ac fin (senzor) introdus chiar sub piele, care verifica nivelul glucozei la fiecare cateva minute. Senzorul se ataseaza la un inregistrator de mici dimensiuni, care colecteaza si stocheaza informatia despre nivelul  glucozei in sange. Senzorul se implanteaza pentru o perioada de 3-6 zile. Datele stocate ajuta medicul diabetolog sa ajusteze schema de tratament pentru obtinerea unui control si mai bun al diabetului. Aparatul emite alerte atunci cand constata iminenta unor valori de hipo- sau hiperglicemie. De asemenea, exista pompe de insulina moderne care au integrat si un sistem de monitorizare glicemica continua.


Hipo si hiperglicemia
Uneori, in ciuda aplicarii tuturor recomandarilor, pot sa apara complicatii acute. Este important sa stii ce sa faci in aceste situatii. Discuta cu medicul diabetolog care sunt instructiunile pas cu pas pe care trebuie sa le aplici. Anumite complicatii pe termen scurt ale diabetului de tip 1, cum ar fi hipoglicemia sau cetoacidoza diabetica, necesita ingrijire imediata. Este important sa fii insotit la consultul de la medicul diabetolog de un membru al familiei care sa invete aceste instructiuni pentru a sti ce sa faca atunci cand vei avea nevoie de ajutor.

Hipoglicemia
Scaderea concentratiei de zahar din sange < 70 mg/dl sau hipoglicemia poate sa apara rapid si necesita sa fie tratata prompt. Hipoglicemia poate sa apara din diverse motive, cum ar fi saritul peste o masa, consumul unei cantitati mai mici de carbohidrati decat era stabilit in planul de masa, efectuarea unei activitati fizice mai intense decat in mod normal sau administrarea unei cantitati mai mari de insulina.

Este important sa stii care sunt simptomele hipoglicemiei, pentru a le recunoaste. De asemenea, este important sa-ti verifici valoarea glicemiei daca crezi ca aceasta ar putea fi scazuta. Cand ai indoieli, este mult mai sigur sa te testezi de fiecare data. Lasata netratata, hipoglicemia poate fi periculoasa. Daca constati ca ai hipoglicemie de mai multe ori pe saptamana, discuta cu medicul tau diabetolog pentru a vedea daca tratamentul trebuie schimbat.

Semnele si simptomele initiale ale hipoglicemiei sunt:

Transpiratie
Tremuraturi
Senzatia de foame
Ameteala sau senzatia de cap gol
Batai cardiace rapide sau neregulate (palpitatii)
Oboseala
Durere de cap
Vedere incetosata
Iritabilitate, nervozitate, anxietate
Ulterior, semnele si simptomele hipoglicemiei, care uneori pot fi confundate cu intoxicatia cu alcool la adolescenti si adulti, sunt:

Letargie
Confuzie
Schimbari de comportament, uneori semnificative
Tulburari de coordonare
Convulsii
Hipoglicemia care apare in timpul noptii te poate trezi din somn cu durere de cap si transpiratii profuze, cand vei constata ca pijamalele sunt imbibate de transpiratie. Ca urmare a secretiei hormonilor care sa contracareze valorile scuzute ale glicemiei, hipoglicemia nocturna poate determina uneori o glicemie neobisnuit de mare dimineata, conditie cunoscuta sub denumirea de efect Somogyi.

Lipsa de constientizare a simptomelor hipoglicemiei

Unii pacienti cu diabet zaharat de tip 1 isi pot pierde capacitatea de a simti cand nivelul zaharului din sange scade. In acest caz va fi dificil sa isi trateze prompt hipoglicemia, ceea ce poate avea consecinte grave. Lipsa de constientizare a hipoglicemiei apare cand organismul nu mai reactioneaza la un nivel scazut de zahar in sange cu simptome precum senzatia de cap gol sau durere de cap. Cu cat ai mai frecvent episoade de hipoglicemie, cu atat creste riscul de a pierde aceasta abilitate.

Aceasta conditie apare in urmatoarele situatii:

Ai diabet zaharat de tip 1 de mai mult de 5-10 ani.
Ai episoade frecvente de hipoglicemie.
Iei anumite medicamente, cum ar fi beta-blocantele pentru hipertensiune arteriala.
Daca poti evita sa ai un episod de hipoglicemie timp de cateva saptamani, este posibil sa iti recapeti capacitatea de a simti cand scaderea glucozei in sange devine iminenta. De asemenea, cresterea valorii tinta a glicemiei (de exemplu, de la 80-120 mg/dl la 100-140 mg/dl), cel putin temporar, poate ajuta la imbunatatirea gradului de constientizare a hipoglicemiei.

Daca suferi de lipsa de constientizare a hipoglicemiei este important sa-ti verifici glicemia cu ajutorul glucometrului mult mai des. Acest lucru este cu atat mai important inainte de a conduce sau de a face o activitate fizica.

Regula 15-15 pentru tratarea hipoglicemiei

Daca nivelul de glucoza in sange este scazut la valori de 55-69 mg/dl aplica imediat regula 15-15:

Consuma 15 grame de carbohidrati cu actiune rapida, cum ar fi o jumatate de cana de suc de fructe sau bautura carbogazoasa obisnuita (nu dietetica), 1 lingura de zahar, miere sau sirop, 3-4 tablete de glucoza, cateva bomboane sau alta sursa de zahar. Evita alimentele care contin si grasimi, cum ar fi ciocolata, deoarece acestea nu cresc glicemia la fel de repede, din cauza ca grasimea incetineste absorbtia zaharului.
Retesteaza-te dupa 15 minute pentru a te asigura ca glicemia este normala.
Daca glicemia este inca scazuta, mai bea 15 grame de carbohidrati si retesteaza-te dupa alte 15 minute.
Repeta pana cand obtii o valoare normala a glicemiei.
Apoi mananca o combinatie de alimente care contin glucide cu actiune prelungita, cum ar fi unt de arahide si biscuiti sau un sandvis cu branza sau carne, care sa ajute la stabilizarea zaharului din sange.
Daca nu ai la indemana un glucometru care sa iti permita masurarea glicemiei, insa ai simptome sugestive, trateaza-te ca si cand ai hipoglicemie si apoi testeaza-te de indata ce este posibil.

Tratamentul hipoglicemiei severe
Daca nu este netratata prompt, hipoglicemia poate progresa catre pierderea starii de constienta, care este o urgenta medicala. De asemenea, hipoglicemia 55 mg/dl nu poate fi tratata cu regula 15-15.

Daca se intampla acest lucru, este nevoie de injectarea in urgenta de glucagon - un hormon cu efect opus insulinei care stimuleaza eliberarea zaharului in sange. Glucagonul ajuta organismul sa transforme glicogenul de la nivelul ficatului in glucoza care este eliberata in sange.

Asigura-te ca ai intotdeauna la dispozitie acasa, la serviciu si cand esti afara o trusa de urgenta care contine o injectie cu glucagon. Asigura-te ca persoanele din jur - colegii de munca, familia si prietenii - stiu cum sa foloseasca trusa in cazul in care nu ti-ai putea administra singur injectia. Un document medical sau frecvent, o bratara de identificare ca ai diabet zaharat de tip 1, sunt esentiale. Personalul medical de pe ambulanta este instruit sa caute astfel de obiecte de identificare atunci cand ingrijesc o persoana care nu este constienta si astfel, care nu poate sa comunice.

Imediat dupa ce pacientului i s-a administrat in urgenta injectia cu glucagon, este important sa fie chemata salvarea. Daca persoana a lesinat din cauza nivelului scazut de zahar din sange, se va trezi de obicei in 15 minute dupa injectia cu glucagon. Daca nu se trezeste in 15 minute dupa injectie, ar trebui sa i se administreze inca o doza de glucagon.

Cand persoana este treaza si este capabila sa inghita:

Hraneste-o cu o sursa de zahar cu actiune rapida - o bautura racoritoare obisnuita (nu dietetica) sau suc de fructe.
Apoi, da-i sa manance o sursa de zahar cu actiune indelungata  - de exemplu, biscuiti si branza sau un sandvis cu carne.
Dupa un episod de hipoglicemie, in urmatoarele 24-48 de ore s-ar putea sa poti identifica mai greu semnele si simptomele precoce ale scaderii concentratiei de glucoza din sange. De aceea, este important sa-ti verifici mai des glicemia cu ajutorul glucometrului.

Hiperglicemia
Cresterea concentratiei de zahar din sange sau hiperglicemia poate sa apara din diverse motive, cum ar fi atunci cand mananci prea mult sau mananci alimente nepermise, cand nu-ti administrezi suficienta insulina sau cand ai o boala intercurenta.

Semnele si simptomele hiperglicemiei sunt:

Urinare frecventa
Senzatie de sete excesiva
Vedere incetosata
Oboseala
Iritabilitate
Senzatie de foame
Dificultate de concentrare
Daca suspectezi ca ai hiperglicemie, masoara-ti glicemia cu ajutorul glucometrului. Daca glicemia este mai mare decat valoarea maxima a intervalului tinta, este recomandat sa-ti administrezi o doza de  „corectie” - o doza suplimentara de insulina care ar trebui sa reduca glicemia la valoarea normala. Nivelurile crescute ale glicemiei nu scad la fel de repede cum au crescut. Discuta cu medicul tau diabetolog cat timp trebuie sa astepti pana cand sa iti verifici din nou glicemia. Daca folosesti o pompa de insulina, valorile crescute ale glicemiei din cand in cand ar putea insemna ca trebuie sa schimbi locul de amplasare a pompei.

Daca glicemia este mai mare de 240 mg/dl, verifica prezenta cetonelor  in urina folosind un kit special de urina. Nu fa exercitii fizice daca glicemia este > peste 240 mg/dl sau daca sunt prezente cetone in urina. Daca sunt prezente doar urme sau cantitati mici de cetone, bea mai multe lichide pentru a elimina cetonele.
Daca glicemia este in mod constant peste 300 mg/dl sau daca cetonele din urina raman ridicate, in ciuda administrarii unor doze suplimentare de insulina suna de urgenta la 112.
Cetoacidoza diabetica (cresterea cetonelor in urina)

Cetoacidoza diabetica este o urgenta medicala care trebuie tratata in spital. Daca tu sau copilul tau aveti aceste semne si simptome, mergeti la cea mai apropiata camera de garda a unui spital sau suna imediat la 112!

Cetoacidoza diabetica apare atunci cand celulele din corp nu pot utiliza glucoza pentru obtinerea de energie si ca urmare vor incepe sa foloseasca lipidele (grasimile) - care nu necesita actiunea insulinei - pentru a-si obtine energia. In acest proces se produc si substante toxice pentru organism cunoscute sub denumirea de cetone (corpi cetonici) care se acumuleaza in sange si determina acidoza metabolica.

Cele mai frecvente cauze de cetoacidoza diabetica sunt:

Boala intercurenta - cand esti bolnav, nu poti manca si bea ca de obicei, ceea ce face ca mentinerea unor valori normale ale glicemiei sa devina dificila.
Cand nu-ti administrezi doza de insulina sau iti administrezi o doza gresita sau cand pompa de insulina nu mai functioneaza.
Alte cauze sunt:

Infarct miocardic acut sau accident vascular cerebral.
Traumatism, cum ar fi un accident de masina.
Consumul de alcool sau droguri.
Anumite medicamente, cum ar fi unele diuretice si corticosteroizi (utilizati pentru a trata inflamatia).
Frecvent, semnele si simptomele cetoacidozei diabetice apar gradual. Manifestarile timpurii sunt:

Senzatie de sete intensa
Urinare frecventa
Daca nu este inceput tratamentul, vor apare rapid semne si simptome mai severe, cum ar fi:

Respiratie cu miros fructat de mere crude (asemanator acetonei)
Piele si gura uscata
Roseata fetei
Durere de cap
Dureri musculare
Oboseala marcata
Greata
Varsaturi
Durere abdominala
Uneori, cetoacioza diabetica este primul semn de diabet la persoanele care nu au fost inca diagnosticate. Daca banuiesti ca ai cetoacidoza metabolica, verifica in urina prezenta excesului de cetone folosind kitul special de testare. Daca exista cantitati mari de cetone in urina, suna imediat la 112.


Preventie
In prezent, diabetul zaharat de tip 1 nu poate fi prevenit. Oamenii de stiinta cerceteaza ce se intampla cu sistemul imun la pacientii cu diabet zaharat de tip 1 si incearca sa gaseasca noi medicamente care sa previna, sa opreasca evolutia sau sa vindece boala.

Cu toate acestea, controlul glicemiei, precum si al tensiunii arteriale si al colesterolului ajuta la prevenirea complicatiilor care pot apare atunci cand ai diabet. Desi managementul diabetului este o provocare, merita tot efortul pentru a-ti pastra cat mai mult starea de sanatate!

Surse de informatie:
www.cdc.gov
www.niddk.nih.gov
www.mayoclinic.org
www.diabetes.org.uk
www.viata-medicala.ro
</div>

    </main>
</body>
</html>
