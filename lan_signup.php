nes (158 sloc)  10.6 KB

<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2016 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Language file - User signup
 *
*/
if(!defined('PAGE_NAME'))
{
    define("PAGE_NAME", "Register");
}
/*
//define("LAN_103", "Quel nome utente non è valido. Scegline uno diverso");
//define("LAN_104", "Quel nome utente è stato preso. Scegline uno diverso");
//define("LAN_105", "Le due password non corrispondono");
//define("LAN_106", "Non sembra essere un indirizzo email valido");
define("LAN_108", "Registrazione completata");
define("LAN_185", "Hai lasciato vuoti i campi obbligatori");
// define("LAN_201", "Sì");
// define("LAN_200", "No");
// define("LAN_399", "Continua");
define("LAN_407", "Conserva questa email per tua informazione. La tua password è stata crittografata e non può essere recuperata se la perdi o la dimentichi. Puoi, tuttavia, richiedere una nuova password se ciò accade.\n\nGrazie per la registrazione.\n\nDa");
//define("LAN_408", "Esiste già un utente con quell'indirizzo email. Usa la schermata "password dimenticata" per recuperare la tua password.");
//define("LAN_409", "Caratteri non validi nel nome utente");
//define("LAN_411", "Quel nome visualizzato esiste già nel database, scegli un nome visualizzato diverso");
*/

define("LAN_EMAIL_01", "Gentile");
define("LAN_EMAIL_04", "Conserva questa email per tua informazione.");
define("LAN_EMAIL_05", "La tua password è stata crittografata e non può essere recuperata se la perdi o la dimentichi. Puoi, tuttavia, richiedere una nuova password se ciò accade.");
define("LAN_EMAIL_06", "Grazie per esserti registrato.");


define("LAN_SIGNUP_1", "Min.");
define("LAN_SIGNUP_2", "caratteri.");
define("LAN_SIGNUP_3", "Verifica del codice fallita.");
define("LAN_SIGNUP_4", "La tua password deve essere almeno ");
define("LAN_SIGNUP_5", "caratteri lunghi.");
//define("LAN_SIGNUP_6", "Tuo"); Vedi LAN_USER_75
//define("LAN_SIGNUP_7", "è richiesto"); Vedi LAN_USER_75
define("LAN_SIGNUP_8", "Grazie!");
define("LAN_SIGNUP_9", "Impossibile procedere.");
//define("LAN_SIGNUP_10", "Sì");
define("LAN_SIGNUP_11", ".");
define("LAN_SIGNUP_12", "per favore conserva il tuo nome utente e password annotati in un luogo sicuro in quanto non possono essere recuperati se li perdi.");
define("LAN_SIGNUP_13", "Ora puoi accedere dalla casella Login o da [qui].");
define("LAN_SIGNUP_14", "qui");
define("LAN_SIGNUP_15", "Contatta l'amministratore principale del sito");
define("LAN_SIGNUP_16", "se hai bisogno di assistenza.");
define("LAN_SIGNUP_17", "Conferma di avere almeno 13 anni di età.");
define("LAN_SIGNUP_18", "La tua registrazione è stata ricevuta e creata con le seguenti informazioni di accesso:" );
//define("LAN_SIGNUP_19", "Nome utente:"); // ora LAN_LOGINNAME
//define("LAN_SIGNUP_20", "Password:"); // ora LAN_PASSWORD
define("LAN_SIGNUP_21", "Il tuo account è attualmente contrassegnato come inattivo. Per attivare il tuo account vai al seguente link:");
define("LAN_SIGNUP_22", "clicca qui");
define("LAN_SIGNUP_23", "per accedere.");
define("LAN_SIGNUP_24", "Grazie per esserti registrato a");
define("LAN_SIGNUP_25", "Carica il tuo avatar");
define("LAN_SIGNUP_26", "Carica la tua fotografia");
//define("LAN_SIGNUP_27", "Mostra"); //non trovato in signup.php
//define("LAN_SIGNUP_28", "scelta di contenuti/liste di posta"); Ora LAN_USER_73
//define("LAN_SIGNUP_29", "Verrà inviata un'e-mail di verifica all'indirizzo e-mail che hai inserito qui, quindi deve essere valido.");
define("LAN_SIGNUP_30", "Se non desideri visualizzare il tuo indirizzo e-mail su questo sito, seleziona 'Sì' per l'opzione 'Nascondi indirizzo e-mail?'.");
//define("LAN_SIGNUP_31", "URL del tuo file XUP");
//define("LAN_SIGNUP_32", "Cos'è un file XUP?");
// define("LAN_SIGNUP_33", "Digita percorso o scegli avatar");
define("LAN_SIGNUP_34", "Nota: qualsiasi immagine caricata su questo server ritenuta inappropriata dagli amministratori verrà eliminata immediatamente.");
//define("LAN_SIGNUP_35", "Fai clic qui per registrarti utilizzando un file XUP");
define("LAN_SIGNUP_36", "Si è verificato un errore durante la creazione delle tue informazioni utente, contatta l'amministratore del sito");
define("LAN_SIGNUP_37", "Questa fase della registrazione è completa. L'amministratore del sito dovrà approvare la tua iscrizione. Una volta fatto ciò riceverai un'e-mail di conferma che ti avverte che la tua iscrizione è stata approvata.");
define("LAN_SIGNUP_38", "Hai inserito due indirizzi email diversi. Inserisci un indirizzo email valido nei due campi forniti");
define("LAN_SIGNUP_39", "Ridigita indirizzo e-mail:");
define("LAN_SIGNUP_40", "Attivazione non necessaria");
define("LAN_SIGNUP_41", "Il tuo account è già attivato.");
define("LAN_SIGNUP_42", "Si è verificato un problema, la mail di registrazione non è stata inviata, contatta l'amministratore del sito web.");
define("LAN_SIGNUP_43", "Email inviata");
define("LAN_SIGNUP_44", "E-mail di attivazione inviata a:");
define("LAN_SIGNUP_45", "Controlla la tua casella di posta.");
define("LAN_SIGNUP_47", "Invia nuovamente l'e -mail di attivazione");
define("LAN_SIGNUP_48", "Nome utente o e-mail");
define("LAN_SIGNUP_49", "Se ti sei registrato con l'indirizzo email sbagliato, oltre a compilare la casella sopra, digita qui un nuovo indirizzo email e la tua password:");
define("LAN_SIGNUP_50", "Nuova email");
define("LAN_SIGNUP_51", "Vecchia password");
//define("LAN_SIGNUP_52", "Password errata");//LAN_INCORRECT_PASSWORD
define("LAN_SIGNUP_53", "test di convalida del campo non riuscito");
define("LAN_SIGNUP_54", "Clicca qui per inserire i tuoi dati per registrarti");
//define("LAN_SIGNUP_55", "Quel nome visualizzato è troppo lungo. Scegline un altro");
//define("LAN_SIGNUP_56", "Quel nome visualizzato è troppo breve. Scegline un altro");
//define("LAN_SIGNUP_57", "Quel nome di accesso è troppo lungo. Scegline un altro");
define("LAN_SIGNUP_58", "Anteprima registrazione");
define("LAN_SIGNUP_59", "**** Se il collegamento non funziona, controlla che parte di esso non sia traboccato nella riga successiva. ****");
define("LAN_SIGNUP_60", "E -mail di registrazione richiesta di nuovo invio");
define("LAN_SIGNUP_61", "Invio riuscito");
define("LAN_SIGNUP_62", "Invio non riuscito");
define("LAN_SIGNUP_63", "Richiesta di nuovo invio e-mail di reimpostazione password");
define("LAN_SIGNUP_64", "Non sembrano essere informazioni utente valide");
define("LAN_SIGNUP_65", "Ti è stato assegnato il seguente nome di accesso");
define("LAN_SIGNUP_66", "Per favore prendine nota.");
define("LAN_SIGNUP_67", "Questo verrà assegnato dal sistema dopo la registrazione");
//define("LAN_SIGNUP_68","Errore: impossibile aprire il file XUP remoto");


define("LAN_SIGNUP_71", "Hai raggiunto il limite del sito per le registrazioni degli account. Effettua il login utilizzando uno dei tuoi altri account.");		// LAN_202
define("LAN_SIGNUP_72", "Grazie per esserti registrato su [sitename]! Ti abbiamo appena inviato un'email di conferma a [email]. Clicca sul link di conferma nell'email per completare la registrazione e attivare il tuo account.");  	// LAN_405
define("LAN_SIGNUP_73", "Grazie!");	// LAN_406
define("LAN_SIGNUP_74", "Il tuo account è stato attivato, per favore");	// LAN_401
define("LAN_SIGNUP_75", "Registrazione attivata");	// LAN_402
define("LAN_SIGNUP_76", "Grazie! Ora sei un membro registrato di");	// LAN_107
define("LAN_SIGNUP_77", "Questo sito è conforme al Children's Online Privacy Protection Act del 1998 (COPPA) e come tale non può accettare registrazioni da utenti di età inferiore ai 13 anni senza un documento di autorizzazione scritto da parte di un genitore o tutore. Per ulteriori informazioni, può leggere la normativa");	// LAN_109
define("LAN_SIGNUP_78", "Registrazione");	// LAN_110
define("LAN_SIGNUP_79", "Registrati");	// LAN_123
define("LAN_SIGNUP_80", "Inserisci i tuoi dati di seguito.");	// LAN_309
define("LAN_SIGNUP_81", "Nome utente: ");	// LAN_9
define("LAN_SIGNUP_82", "il nome che usi per accedere");	// LAN_10
define("LAN_SIGNUP_83", "Password: ");	// LAN_17
define("LAN_SIGNUP_84", "Ridigita la password: ");	// LAN_111
define("LAN_SIGNUP_85", "Nomi utente e password fanno distinzione tra maiuscole e minuscole.");	// LAN_400
//define("LAN_SIGNUP_86", "Indirizzo e-mail: "); // LAN_112 = LAN_USER_60
//define("LAN_SIGNUP_87", "Nascondi indirizzo email?: "); // LAN_113 = LAN_USER_83
//define("LAN_SIGNUP_88", "Ciò impedirà la visualizzazione del tuo indirizzo email sul sito"); // LAN_114
define("LAN_SIGNUP_89", "Nome visualizzato: ");		// LAN_7
define("LAN_SIGNUP_90", "il nome che verrà visualizzato sul sito");	// LAN_8
define("LAN_SIGNUP_91", "Nome reale: ");   // LAN_308
//define("LAN_SIGNUP_92", "il tuo vero nome, inclusi nome e cognome"); // LAN_310
define("LAN_SIGNUP_93", "Firma: ");	// LAN_120
define("LAN_SIGNUP_94", "Avatar: ");	// LAN_121
define("LAN_SIGNUP_95", "Inserisci il codice visibile nell'immagine");						// LAN_410
define("LAN_SIGNUP_96", "Dettagli di registrazione per");	// LAN_404 (usato nell'e-mail)
define("LAN_SIGNUP_97", "Benvenuto in");  	// LAN_403 (usato nell'e-mail)

define("LAN_SIGNUP_98", "Conferma il tuo indirizzo email");
define("LAN_SIGNUP_99", "Problema riscontrato");
define("LAN_SIGNUP_100", "Approvazione amministratore in attesa");
define("LAN_SIGNUP_101", "Aggiornamento dei record fallito - contatta l'amministratore del sito");
//define("LAN_SIGNUP_102", "Iscrizione rifiutata");
define("LAN_SIGNUP_103", "Troppi utenti stanno già utilizzando l'indirizzo IP: ");
define("LAN_SIGNUP_105", "Impossibile rispondere alla tua richiesta - contatta l'amministratore del sito");	// Due persone con la stessa password.
define("LAN_SIGNUP_106", "Impossibile rispondere alla tua richiesta - hai già un account qui?");   // Tentativo di impostare l'e-mail come esistente

define("LAN_LOGINNAME", "Nome utente");
//define("PASSWORD_LAN", "Password");
define("LAN_USERNAME", "Nome visualizzato");

define("LAN_SIGNUP_107", "La password deve contenere almeno [x] caratteri e includere almeno una lettera MAIUSCOLA e una cifra");
define("LAN_SIGNUP_108", "Deve essere un indirizzo email valido");
define("LAN_SIGNUP_109", "È sensibile a CaSe e non deve contenere spazi."); //TODO verifica rispetto ai requisiti regex
define("LAN_SIGNUP_110", "Il tuo nome completo");
define("LAN_SIGNUP_111", "Inserisci un URL per la tua immagine o scegli un avatar esistente.");
define("LAN_SIGNUP_112", "Sei attualmente connesso come amministratore principale.");

define("LAN_SIGNUP_113", "Abbonamenti");

define("LAN_SIGNUP_114", "La registrazione dell'utente è attualmente disabilitata.");
define("LAN_SIGNUP_115", "Anteprima e-mail di attivazione");
define("LAN_SIGNUP_116", "Anteprima dopo l'invio del modulo");
define("LAN_SIGNUP_117", "Invia un'attivazione di prova");
define("LAN_SIGNUP_118", "A [x]");
define("LAN_SIGNUP_119", "Non inviare email");
define("LAN_SIGNUP_120", "O");
define("LAN_SIGNUP_121", "Utilizza un indirizzo email diverso");

define("LAN_SIGNUP_122", "Informativa sulla privacy");
define("LAN_SIGNUP_123", "Termini e condizioni");
define("LAN_SIGNUP_124", "Iscrivendoti accetti le nostre [x] e le nostre [y].");
define("LAN_SIGNUP_125", "Min. [x] caratteri.");