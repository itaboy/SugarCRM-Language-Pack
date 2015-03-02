<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Enterprise Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-enterprise-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2010 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
	

$mod_strings = array (
  'ERR_DELETE_RECORD' => 'Per eliminare l´azienda deve essere specificato il numero del record.',
  'LBL_ACCEPT_THIS' => 'Accetti?',
  'LBL_COLON' => ':',
  'LBL_CONTACT_NAME' => 'Nome Contatto:',
  'LBL_DATE' => 'Data Inizio:',
  'LBL_DATE_TIME' => 'Data e Ora Inizio:',
  'LBL_DEFAULT_STATUS' => 'Pianificato',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cronologia',
  'LBL_DESCRIPTION' => 'Descrizione:',
  'LBL_DESCRIPTION_INFORMATION' => 'Descrizione',
  'LBL_DIRECTION' => 'Ordine',
  'LBL_DURATION' => 'Durata:',
  'LBL_HISTORY' => 'Cronologia',
  'LBL_HOURS_MINS' => '(ore/minuti)',
  'LBL_INVITEE' => 'Invitati',
  'LBL_LIST_CLOSE' => 'Chiudi',
  'LBL_LIST_CONTACT' => 'Contatto',
  'LBL_LIST_DATE' => 'Data',
  'LBL_LIST_DIRECTION' => 'Ordine',
  'LBL_LIST_DUE_DATE' => 'Data Scadenza',
  'LBL_LIST_FORM_TITLE' => 'Cronologia',
  'LBL_LIST_LAST_MODIFIED' => 'Ultima Modifica',
  'LBL_LIST_RELATED_TO' => 'Relativo a',
  'LBL_LIST_STATUS' => 'Stato',
  'LBL_LIST_SUBJECT' => 'Oggetto',
  'LBL_LIST_TIME' => 'Ora Inizio',
  'LBL_LOCATION' => 'Luogo:',
  'LBL_MEETING' => 'Riunione:',
  'LBL_MODULE_NAME' => 'Cronologia',
  'LBL_MODULE_TITLE' => 'Cronologia: Home',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Nuova Nota o Allegato',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Nuova Nota o Allegato [Alt+T]',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Nuovo Compito',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Nuovo Compito [Alt+N]',
  'LBL_OPEN_ACTIVITIES' => 'Attività Aperte',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Nuova Chiamata',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Nuova Chiamata[Alt+C]',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Nuova Riunione',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Nuova Riunione[Alt+M]',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Cronologia',
  'LBL_STATUS' => 'Stato:',
  'LBL_SUBJECT' => 'Oggetto:',
  'LBL_TIME' => 'Ora Inizio:',
  'LBL_TODAY' => 'per',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archivia Email',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archivia Email [Alt+K]',
  'LBL_UPCOMING' => 'I miei Prossimi Appuntamenti',
  'LNK_CALL_LIST' => 'Chiamate',
  'LNK_EMAIL_LIST' => 'Email',
  'LNK_IMPORT_NOTES' => 'Importa Note',
  'LNK_MEETING_LIST' => 'Visualizza Riunioni',
  'LNK_NEW_APPOINTMENT' => 'Nuovo Appuntamento',
  'LNK_NEW_CALL' => 'Nuova Chiamata',
  'LNK_NEW_EMAIL' => 'Archivia Email',
  'LNK_NEW_MEETING' => 'Nuova Riunione',
  'LNK_NEW_NOTE' => 'Nuova Nota o Allegato',
  'LNK_NEW_TASK' => 'Nuovo Compito',
  'LNK_NOTE_LIST' => 'Note',
  'LNK_TASK_LIST' => 'Compiti',
  'LNK_VIEW_CALENDAR' => 'Oggi',
  'NTC_NONE' => 'Nessuno',
  'NTC_NONE_SCHEDULED' => 'Niente di pianificato.',
  'NTC_REMOVE_INVITEE' => 'Sei sicuro di voler eliminare questo invitato dalla riunione?',
  'appointment_filter_dom' => 
  array (
    'last next_month' => 'il prossimo mese',
    'last this_month' => 'questo mese',
    'next Saturday' => 'la prossima settimana',
    'this Saturday' => 'questa settimana',
    'today' => 'oggi',
    'tomorrow' => 'domani',
  ),
);

