<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/Italian/lan_installer.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

define("LANINS_001", "e107 Installazione");


define("LANINS_002", "Passo");
define("LANINS_003", "1");
define("LANINS_004", "Selezione lingua");
define("LANINS_005", "Scegli la lingua da usare durante l'installazione");
//define("LANINS_006", "Imposta lingua");
define("LANINS_007", "4");
define("LANINS_008", "Verifica versioni PHP e MySQL/Verifica autorizzazioni file");
define("LANINS_009", "Ritesta i permessi dei file");
define("LANINS_010", "File non scrivibile: ");
define("LANINS_010a", "Cartella non scrivibile: ");
//define("LANINS_011", "Errore"); nuovo > ERRORE_LAN
define("LANINS_012", "Sembra che le funzioni MySQL non esistano. Questo probabilmente significa che l'estensione PHP MySQL non è installata o che la tua installazione PHP non è stata compilata con il supporto MySQL."); // aiuto per 012
define("LANINS_013", "Impossibile determinare il numero di versione di MySQL. Questo è un errore non fatale, quindi continua l'installazione, ma tieni presente che e107 richiede MySQL >= 3.23 per funzionare correttamente.");
define("LANINS_014", "Autorizzazioni file");
define("LANINS_015", "Versione PHP");
//define("LANINS_016", "MySQL");
define("LANINS_017", "PASS");
define("LANINS_018", "Assicurati che tutti i file elencati esistano e siano scrivibili dal server. Questo normalmente implica la loro CHMOD 777, ma gli ambienti variano - contatta il tuo host in caso di problemi.");
define("LANINS_019", "La versione di PHP installata sul tuo server non è in grado di eseguire e107. e107 richiede una versione PHP di almeno " . MIN_PHP_VERSION . " per funzionare correttamente. Aggiorna la tua versione di PHP o contatta il tuo host per un aggiornamento.");
//define("LANINS_020", "Continua installazione"); //LAN_CONTINUA
define("LANINS_021", "2");
define("LANINS_022", "Dettagli di MySQL Server" );
define("LANINS_023", "Inserisci qui le tue impostazioni MySQL. Se hai i permessi di root puoi creare un nuovo database spuntando la casella, in caso contrario devi creare un database o utilizzarne uno preesistente. Se si dispone di un solo database, utilizzare un prefisso in modo che altri script possano condividere lo stesso database. Se non conosci i tuoi dati MySQL contatta il tuo host web.");
define("LANINS_024", "MySQL Server:");
define("LANINS_025", "Nome utente MySQL:");
define("LANINS_026", "Password MySQL:");
define("LANINS_027", "Database MySQL:");
define("LANINS_028", "Crea database?");
define("LANINS_029", "Prefisso tabella:");
define("LANINS_030", "Il server MySQL che vorresti utilizzare con e107. Può anche includere un numero di porta. es. 'nome host:porta' o un percorso a un socket locale es. \":/percorso/a/socket\" per l'host locale.");
define("LANINS_031", "Il nome utente che desideri che e107 utilizzi per connettersi al tuo server MySQL");
define("LANINS_032", "La password per l'utente che hai appena inserito. Non deve contenere virgolette singole o doppie.");
define("LANINS_033", "Il database MySQL in cui desideri che e107 risieda, a volte indicato come uno schema. Deve iniziare con una lettera. Se l'utente dispone delle autorizzazioni per la creazione del database, puoi scegliere di creare il database automaticamente se non lo fa esistono già.");
define("LANINS_034", "Il prefisso che desideri venga utilizzato da e107 durante la creazione delle tabelle e107. Utile per installazioni multiple di e107 in uno schema di database.");
//define("LANINS_035", "Continua"); // LAN_CONTINUA
define("LANINS_036", "3");
define("LANINS_037", "Verifica connessione MySQL");
define("LANINS_038", "e Creazione database");
define("LANINS_039", "Assicurati di compilare tutti i campi, soprattutto MySQL Server, MySQL Username e MySQL Database (questi sono sempre richiesti dal MySQL Server)");
define("LANINS_040", "Errori");
define("LANINS_041", "e107 non è stato in grado di stabilire una connessione al server MySQL utilizzando le informazioni che hai inserito. Torna all'ultima pagina e assicurati che le informazioni siano corrette.");
define("LANINS_042", "Connessione al server MySQL stabilita e verificata.");
define("LANINS_043", "Impossibile creare database, assicurati di avere i permessi corretti per creare database sul tuo server.");
define("LANINS_044", "Database creato con successo.");
define("LANINS_045", "Fai clic sul pulsante per passare alla fase successiva.");
define("LANINS_046", "5");
define("LANINS_047", "Dettagli amministratore");
define("LANINS_048", "Estensione EXIF");
define("LANINS_049", "Le due password che hai inserito non sono le stesse. Torna indietro e riprova.");
define("LANINS_050", "Estensione XML");
define("LANINS_051", "Installato");
define("LANINS_052", "Non installato");
//define("LANINS_053", "e107 v2.x richiede l'installazione dell'estensione PHP XML. Contatta il tuo host o leggi le informazioni su [x] prima di continuare");
//define("LANINS_054", "e107 v2.x richiede l'installazione dell'estensione PHP EXIF. Contatta il tuo host o leggi le informazioni su [x] prima di continuare");
define("LANINS_055", "Conferma installazione");
define("LANINS_056", "6");
define("LANINS_057", "e107 ora ha tutte le informazioni necessarie per completare l'installazione. Fare clic sul pulsante per creare le tabelle del database e salvare tutte le impostazioni.");
define("LANINS_058", "7");
define("LANINS_060", "Impossibile leggere il file di dati sql Assicurati che il file [b]core_sql.php[/b] esista nella directory [b]/e107_core/sql[/b].");
define("LANINS_061", "e107 non è stato in grado di creare tutte le tabelle di database richieste. Si prega di cancellare il database e correggere eventuali problemi prima di riprovare.");


//define("LANINS_063", "Benvenuto in e107");

define("LANINS_069", "e107 è stato installato con successo! Per motivi di sicurezza ora dovresti impostare i permessi del file sul file [b]e107_config.php[/b] su 644. Elimina anche install.php dal tuo server dopo aver cliccato sul pulsante qui sotto. ");
define("LANINS_070", "e107 non è stato in grado di salvare il file di configurazione principale sul tuo server. Assicurati che il file [b]e107_config.php[/b] abbia i permessi corretti");
define("LANINS_071", "Installazione completata");

define("LANINS_072", "Nome utente amministratore");
define("LANINS_073", "Questo è il nome che utilizzerai per accedere al sito. Se desideri utilizzarlo anche come nome visualizzato");
define("LANINS_074", "Nome visualizzato amministratore");
//define("LANINS_075", "Questo è il nome che desideri che i tuoi utenti vedano visualizzato nel tuo profilo, forum e altre aree. Se desideri utilizzare lo stesso nome utente, lascia questo campo vuoto.");
define("LANINS_076", "Password amministratore");
define("LANINS_077", "Digita qui la password amministratore che desideri utilizzare");
define("LANINS_078", "Conferma password amministratore");
define("LANINS_079", "Digita nuovamente la password dell'amministratore per conferma");
define("LANINS_080", "E-mail amministratore");
define("LANINS_081", "Inserisci il tuo indirizzo email");

//define("LANINS_082", "utente@tuosito.com");

//Migliore segnalazione degli errori di creazione della tabella
define("LANINS_083", "Errore segnalato MySQL:");
define("LANINS_084", "Il programma di installazione non ha potuto stabilire una connessione al database");
define("LANINS_085", "Il programma di installazione non ha potuto selezionare il database:");

define("LANINS_086", "Nome utente amministratore, Password amministratore e Email amministratore sono campi obbligatori. Torna all'ultima pagina e assicurati che le informazioni siano state inserite correttamente.");

//define("LANINS_087", "Varie");
//define("LANINS_088", "Casa");
//define("LANINS_089", "Download");
//define("LANINS_090", "Membri");
//define("LANINS_091", "Invia notizie");
//define("LANINS_092", "Contattaci");
//define("LANINS_093", "Concede l'accesso alle voci di menu private");
//define("LANINS_094", "Esempio di classe del forum privato");
//define("LANINS_095", "Verifica integrità");

//define("LANINS_096", 'Ultimi commenti');
//define("LANINS_097", '[altro...]');
//define("LANINS_098", 'Articoli');
//define("LANINS_099", 'Prima pagina articoli ...');
//define("LANINS_100", 'Ultimi post del forum');
//define("LANINS_101", 'Aggiorna impostazioni menu');
//define("LANINS_102", 'Data/Ora');
//define("LANINS_103", 'Recensioni');
//define("LANINS_104", 'Esamina la prima pagina...');

define("LANINS_105", "Un nome di database o un prefisso che inizia con alcune cifre seguite da 'e' o 'E' non è accettabile");
define("LANINS_106", "AVVERTENZA - e107 non può scrivere nelle directory e/o nei file elencati. Anche se ciò non interromperà l'installazione di e107, significa che alcune funzionalità non sono disponibili. Sarà necessario modificare i permessi dei file per utilizzare queste funzionalità");

define("LANINS_107", "Nome sito Web");
define("LANINS_108", "Il mio sito Web");
define("LANINS_109", "Tema del sito Web");
//define("LANINS_110", "");
define("LANINS_111", "Includi contenuto/configurazione");
define("LANINS_112", "Riproduci rapidamente l'aspetto dell'anteprima o della demo del tema. (Se disponibile)");
define("LANINS_113", "Inserisci il nome di un sito Web");
define("LANINS_114", "Seleziona un tema");
define("LANINS_115", "Nome tema");
define("LANINS_116", "Tipo di tema");
define("LANINS_117", "Preferenze del sito Web");
define("LANINS_118", "Installa plugin");
define("LANINS_119", "Installa tutti i plugin che il tema potrebbe richiedere.");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php non è un file vuoto");
define("LANINS_122", "Potresti avere un'installazione esistente");
define("LANINS_123", "Facoltativo: il tuo nome pubblico o alias. Lascia vuoto per utilizzare il nome utente");
define("LANINS_124", "Scegli una password di almeno 8 caratteri");
define("LANINS_125", "e107 è stato installato correttamente!");
define("LANINS_126", "Per motivi di sicurezza dovresti ora impostare i permessi del file sul file e107_config.php su 644.");
define("LANINS_127", "Il database [x] esiste già. Sovrascrivilo? (tutti i dati esistenti andranno persi)");
define("LANINS_128", "Sovrascrivi");
define("LANINS_129", "Database non trovato.");

define("LANINS_134", "Installazione");
define("LANINS_135", "di");   //solo programma di installazione monouso come in .1 di 8 non sostituito da LAN_SEARCH_12
define("LANINS_136", "Database esistente cancellato");
define("LANINS_137", "Trovato database esistente");
//define("LANINS_138", "Versione");

define("LANINS_141", "Compila il modulo sottostante con i tuoi dettagli MySQL. Se non conosci queste informazioni, contatta il tuo provider di hosting. Puoi passare il mouse sopra ogni campo per ulteriori informazioni.");
define("LANINS_142", "IMPORTANTE: Rinomina e107.htaccess in .htaccess");
define("LANINS_144", "IMPORTANTE: Copia e incolla il contenuto di [b]e107.htaccess[/b] nel tuo file [b].htaccess[/b]. Fai attenzione a NON sovrascrivere i dati esistenti che potrebbe essere in esso.");
define("LANINS_145", "e107 v2.x richiede che PHP [x] sia installato. Contatta il tuo host o leggi le informazioni su [y] prima di continuare.");

define("LANINS_146", "Skin area amministratore");
define("LANINS_147", "Amministrazione");
