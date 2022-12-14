<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <title>Google Faq</title>
</head>

<body>
    <header class="nav_container">
        <nav class="nav_bar">
            <div class="logo">
                <img src="./google.png" alt="">
                <div>
                    <h1>Privacy e termini</h1>
                </div>

            </div>
            <div class="menu">
                <ul>
                    <?php
                    $links = [
                        [
                            'link' => '<a href="#">Introduzione</a>'
                        ],

                        [
                            'link' => '<a href="#">Norme sulla privacy</a>'
                        ],
                        [
                            'link' => '<a href="#">Termini di servizio</a>'
                        ],
                        [
                            'link' => '<a href="#">Tecnologie</a>'
                        ],
                        [
                            'link' => '<a href="#">Domande frequenti </a>'
                        ],

                    ];

                    foreach ($links as $value) {
                        $option = $value['link'];
                    ?>
                        <li class="option">

                            <?php
                            echo $option;
                            ?>
                        </li>
                    <?php

                    };
                    ?>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="text">
            <?php
            $faq = [
                [
                    'title' => 'Come state implementando la recente decisione della Corte di giustizia dell Unione europea (CGUE) relativa al diritto all oblio?',
                    'risposta' => '<p>La recente decisione della Corte di giustizia dell Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni </p><p>utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter </p><p>essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non pi?? rilevanti, o eccessivi.</p>
                     <p>Da quando questa decisione ?? stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura </p><p>complessa perch?? dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell individuo a controllare i suoi dati personali ed il</p><p> diritto di tutti di conoscere e distribuire le informazioni.<p>
                    <p>Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. </p><p>Dopodich?? valuteremo il tuo caso (tieni presente che potrebbe occorrere un po  di tempo perch?? abbiamo gi?? ricevuto tante richieste simili). Nel valutare la </p><p>richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi ?? un interesse pubblico a che le </p><p>informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua</p><p> condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo </p><p>non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d accordo con la nostra valutazione, puoi rivolgerti all Autorit??</p><p> garante per la protezione dei dati personali nel tuo paese.</p>
                    <p>Nei prossimi mesi lavoreremo a stretto contatto con le autorit?? per la protezione dei dati e con altre autorit?? per perfezionare il nostro approccio. La decisione </p><p>della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia</p><p> importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.</p>
                    <p>Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per</p><p> la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state</p><p> soggette a una rimozione.</p>',
                ],
                [
                    'title' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
                    'risposta' => '<p>Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi ?? imperativo offrire un elevata sicurezza e assicurarti che le tue</p><p>informazioni sono al sicuro e accessibili quando ne hai bisogno.</p>
                        <p>Siamo costantemente al lavoro per garantire un elevata sicurezza, proteggere la tua privacy e rendere Google ancora pi?? efficace ed efficiente per te.</p><p>Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le</p><p>tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due</p><p>passaggi e Impostazioni annunci. Cos??, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.</p>
                        Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.
                        Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.',
                ],
                [
                    'title' => 'Perch?? il mio account ?? associato a un paese?',
                    'risposta' => 'Il tuo account ?? associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:
                    p>La societ?? consociata Google che offre i servizi, tratta le tue informazioni ed ?? responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente</p><p>Google offre i propri servizi per i consumatori tramite una delle due societ?? seguenti:</p>
                    <p>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell Unione europea, oltre a Islanda, Liechtenstein e</p><p>Norvegia) o in Svizzera.</p><p>Google LLC, con sede negli Stati Uniti, per il resto del mondo.</p>
                    La versione dei termini che regola il nostro rapporto, che pu?? variare in base alle leggi locali.
                    <p>Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla societ?? consociata che li offre o dal paese a cui ?? associato il tuo</p><p>account.</p>',
                ],
                [
                    'title' => 'Stabilire il paese associato al tuo account',
                    'risposta' => '<p>Quando crei un nuovo Account Google, lo associamo a un paese in base a dove ?? stato creato. Per quanto riguarda gli account creati almeno un anno fa,</p><p>usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso pi?? tempo nell ultimo anno.</p>
                    <p>I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per</p><p>aggiornare l associazione del paese.</p>
                    <p>Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui</p><p>risiedi, l installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. Contattaci se</p><p>ritieni che il paese associato al tuo account sia sbagliato.</p>',
                ],
                [
                    'title' => 'Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?',
                    'risposta' => '<p>I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente</p><p>dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi</p><p>contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la</p><p>protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i</p><p>contenuti saranno stati rimossi e che Google avr?? rilevato l aggiornamento, le informazioni non verranno pi?? visualizzate nei risultati di ricerca di Google. In</p><p>caso di una richiesta di rimozione urgente, ?? inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.</p>',
                ],
                [
                    'title' => 'Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?',
                    'risposta' => '<p>In alcuni casi s??. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l indirizzo</p><p>Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l URL della pagina dei risultati di ricerca potrebbe contenere la query di</p><p>ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati</p><p>come parte dell URL negli URL referrer. Questo comportamento pu?? fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni</p><p>sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell URL referrer potrebbero essere disponibili mediante Google Analytics</p><p>o un API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all esatte parole chiave che hanno determinato</p><p>il clic su un annuncio.</p>',
                ],
            ];
            foreach ($faq as $key => $value) {
                $title = $value['title'];
                $post = $value['risposta'];
            ?><li class="title">

                    <?php
                    echo $title;
                    ?>
                </li>
                <li class="parag">

                    <?php
                    echo  $post;
                    ?>
                </li><?php

                    };
                        ?>
        </div>
    </main>
</body>

</html>