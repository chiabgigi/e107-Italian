<?php
/*
* Sistema del sito web e107
*
* Copyright (C) 2008-2017 e107 Inc (e107.org)
* Rilasciato secondo i termini e le condizioni del
* GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
*
* File in lingua italiana - termini generici e LAN di sistema
*
*/
setlocale(LC_ALL,'it_IT.UTF-8', 'it_IT.utf8' , 'it_it.utf8', 'it');
define("CORE_LC", "it");
define("CORE_LC2", "it");
// define("TEXTDIRECTION","rtl");
// deprecato: tutti i Language Pack devono essere UTF-8
//define("CHARSET", "utf-8"); // per un vero sito multilingue. :)
define("CORE_LAN1", "Errore: il tema è mancante.\\n\\nCambia i temi utilizzati nelle tue preferenze (area di amministrazione) o carica i file per il tema corrente sul server.");
//obsolete define("CORE_LAN2'," \\1 ha scritto:");// "\\1" rappresenta il nome utente.
//obsoleto define("CORE_LAN3", "file allegato disabilitato"); // Non utilizzato in 0.8
define("CORE_LAN4", "Cancella install.php dal tuo server");
define("CORE_LAN5", "se non lo fai c'è un potenziale rischio per la sicurezza del tuo sito web");
define("CORE_LAN6", "La protezione dalle inondazioni su questo sito è stata attivata e sei avvisato che se continui a richiedere pagine potresti essere bannato.");
define("CORE_LAN7", "Core sta tentando di ripristinare le preferenze dal backup automatico.");
define("CORE_LAN8", "Errore preferenze core");
define("CORE_LAN9", "Impossibile ripristinare il core dal backup automatico. Esecuzione interrotta.");
define("CORE_LAN10", "Rilevato cookie danneggiato - disconnesso.");

// Piè di pagina
define("CORE_LAN11", "Tempo di rendering: ");
define("CORE_LAN12", "sec (");
define("CORE_LAN13", "% di quello per le query) ");
define("CORE_LAN14", "%2.3f cpu sec (%2.2f%% carico, %2.3f avvio). Orologio: ");
define("CORE_LAN15", "Query DB: ");
define("CORE_LAN16", "Memoria: ");

// img.bb
define("CORE_LAN17", "[immagine disabilitata]");
define("CORE_LAN18", "Immagine: ");

define("CORE_LAN_B", "B");
define("CORE_LAN_KB", "kB");
define("CORE_LAN_MB", "MB");
define("CORE_LAN_GB", "GB");
define("CORE_LAN_TB", "TB");

define("EMESSLAN_TITLE_INFO" , "Informazioni di sistema" );
define("EMESSLAN_TITLE_ERROR" , "Errore" );
define("EMESSLAN_TITLE_SUCCESS" , "Successo" );
define("EMESSLAN_TITLE_WARNING" , "Avviso" );
define("EMESSLAN_TITLE_DEBUG" , "Debug di sistema" );

define("LAN_NO_PERMISSIONS", "Non hai il permesso per visualizzare questa pagina.");
define("LAN_EDIT", "Modifica");
define("LAN_DELETE", "Elimina");
define("LAN_DEFAULT", "Predefinito");
define("LAN_MORE", "Altro..");
define("LAN_LESS", "..Meno");
define("LAN_READ_MORE", "Leggi di più..");
define("LAN_GOPAGE", "Vai alla pagina");
define("LAN_GOTOPAGEX", "Vai alla pagina [x]");
define("LAN_GO", "Vai");
define("LAN_SUBMIT", "Invia");
define("LAN_NONE", "Nessuno");
define("LAN_WARNING", "Attenzione!");
define("LAN_ERROR", "Errore");
define("LAN_ANONYMOUS", "Anonimo");
define("LAN_EMAIL_SUBS", "-email-");
define("LAN_ACTIVE", "Attivo");
define("LAN_YES", "Sì");
define("LAN_NO", "No");
define("LAN_OK", "OK");
define("LAN_ACTIONS", "Azioni");
define("LAN_THANK_YOU", "Grazie");
define("LAN_CONTINUE", "Continua");
define("LAN_ENTER", "Invio");
define("LAN_ENTER_CODE", "Inserisci codice");
define("LAN_INVALID_CODE", "Codice inserito non corretto.");
define("LAN_SEARCH", "Cerca");
define("LAN_VIEW", "Vista");
define("LAN_CLICK_TO_VIEW" , "Fai clic per visualizzare"); //TODO altrove
define("LAN_SORT", "Ordina");
define("LAN_ORDER_BY", "Ordina per");
define("LAN_ASCENDING", "Crescente");
define("LAN_DESCENDING", "Discendente");
define("LAN_SHARE", "Condividi");
define("LAN_BACK", "Indietro");
define("LAN_NAME", "Nome");
define("LAN_DESCRIPTION", "Descrizione");
define("LAN_CANCEL", "Annulla");
define("LAN_DATE", "Data");
define("LAN_DATE_POSTED", "Data di pubblicazione");
define("LAN_POSTED_BY", "Inviato da");
define("LAN_JSCONFIRM", "Sei sicuro?");
define("LAN_IP", "IP");
define("LAN_IP_ADDRESS", "Indirizzo IP");
define("LAN_AUTHOR", "Autore");
define("LAN_CATEGORY", "Categoria");
define("LAN_CATEGORIES", "Categorie");
define("LAN_GUEST", "Ospite");
define("LAN_NEXT", "Avanti");
define("LAN_PREVIOUS", "Precedente");
define("LAN_LOGIN", "Login");
define("LAN_LOGOUT", "Logout");
define("LAN_VERIFY", "Verifica" );
define("LAN_SETTINGS" , "Impostazioni");
define("LAN_PASSWORD" , "Password");
define("LAN_INCORRECT_PASSWORD", "Password errata");
define("LAN_TYPE", "Tipo");
define("LAN_SCREENSHOT", "Schermata");
define("LAN_FILE", "File");
define("LAN_YOUTUBE_VIDEO", "Video YouTube");
define("LAN_YOUTUBE_PLAYLIST", "Playlist di YouTube");
define("LAN_FILETYPES", "Tipi di file");
define("LAN_FILE_NOT_FOUND", "File non trovato");
define("LAN_FILES", "File");
define("LAN_SIZE", "Dimensione");
define("LAN_VERSION", "Versione");
define("LAN_DOWNLOAD", "Download");
define("LAN_DOWNLOAD_NO_PERMISSION", "File non trovato o non hai il permesso per scaricare questo file!");
define("LAN_WEBSITE", "Sito Web");
define("LAN_COMMENTS", "Commenti");
define("LAN_LOCATION", "Posizione");
define("LAN_NO_RECORDS_FOUND", "Nessun record trovato");
define("LAN_RATING", "Valutazione");
define("LAN_IMAGE", "Immagine");
define("LAN_ABOUT", "About");
define("LAN_TITLE", "Titolo");
define("LAN_MESSAGE", "Messaggio");
define("LAN_USER", "Utente");
define("LAN_EMAIL", "Indirizzo e-mail");
define("LAN_WROTE", "scritto"); // come ha scritto Giovanni.." ";
define("LAN_RE_ORDER", "Riordina");
define("LAN_RELATED", "Correlato");
define("LAN_CLOSE", "Chiudi");
define("LAN_EXPAND", "Espandi");
define("LAN_LIST", "Elenco");
define("LAN_DATESTAMP", "Timbro data");
define("LAN_SUBJECT", "Oggetto");

define("LAN_ENTER_USRNAME_EMAIL", "Inserisci il tuo nome utente o email"); // admin php campo al passaggio del mouse nome amministratore
define("LAN_PWD_REQUIRED", "È richiesta la password"); // admin php hover campo password amministratore
define("LAN_SHOW", "Mostra");
define("LAN_GENERATE", "Genera");
define("LAN_SUMMARY", "Riepilogo");  // TODO più file utilizzano la sostituzione del riepilogo
define("LAN_REQUIRED_BLANK", "I campi obbligatori sono stati lasciati vuoti.");
define("LAN_PLEASEWAIT", "Attendere per favore");
define("LAN_CHOOSE_FILE", "Scegli un file");

define("LAN_REQUIRED", "Richiesto");

define("LAN_DEVELOPERMODE_CHECK", "[b]La modalità sviluppatore è attualmente abilitata. Usa questa modalità solo durante lo sviluppo![/b] [br]Disattiva la modalità sviluppatore quando usi il tuo sito web in produzione live. Quando la modalità sviluppatore è abilitata, le informazioni riservate può essere mostrato al pubblico!");

