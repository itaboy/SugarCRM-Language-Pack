<?php

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
 * by SugarCRM are Copyright (C) 2004-2011 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/




if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$mod_strings = array (
  'LBL_ID' => 'ID',
  'LBL_URL' => 'URL',
  'LBL_PASSWORD' => 'Password',
  'LBL_CLUSTER' => 'Cluster',
  'LBL_DCECLUSTERS_SUBPANEL_TITLE' => 'Clusters',
  'LBL_UPGRADE_LIVE' => 'Aggiornamento Live',
  'LBL_DB_PASS' => 'DB Password',
  'LBL_TEAM' => 'Team',
  'LBL_TEAM_ID' => 'Id Team',
  'LBL_ASSIGNED_TO_ID' => 'Id Utente Assegnato',
  'LBL_ASSIGNED_TO_NAME' => 'Assegnato a',
  'LBL_DATE_ENTERED' => 'Data Creazione',
  'LBL_DATE_MODIFIED' => 'Data Modifica',
  'LBL_MODIFIED' => 'Modificato Da',
  'LBL_MODIFIED_ID' => 'Modificato Da Id',
  'LBL_MODIFIED_NAME' => 'Modificato Da Nome',
  'LBL_CREATED' => 'Creato Da',
  'LBL_CREATED_ID' => 'Creato Da Id',
  'LBL_DESCRIPTION' => 'Informazioni Aggiuntive',
  'LBL_DELETED' => 'Cancellato',
  'LBL_NAME' => 'Nome',
  'LBL_DCEINSTANCE' => 'Istanze',
  'LBL_CREATED_USER' => 'Creato da Utente',
  'LBL_MODIFIED_USER' => 'Modificato da Utente',
  'LBL_LIST_FORM_TITLE' => 'Elenco Istanze',
  'LBL_MODULE_NAME' => 'Istanze',
  'LBL_MODULE_TITLE' => 'Istanze',
  'LNK_NEW_RECORD' => 'Nuova Istanza',
  'LNK_LIST' => 'Istanze',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Istanze',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
  'LBL_DCEINSTANCES_SUBPANEL_TITLE' => 'Istanze Duplicate',
  'LBL_DCE_INSTANCES_SUBPANEL_TITLE' => 'Istanze',
  'LBL_NEW_FORM_TITLE' => 'Nuove Istanze',
  'LBL_ACCOUNT' => 'Azienda',
  'LBL_LICENSE_KEY' => 'Chiava di Licenza',
  'LBL_LAST_ACCESSED' => 'Ultmo Accesso',
  'LBL_NUMBER_ACTIVE_USER' => 'Numero Utenti Attivi',
  'LBL_LICENSED_USERS' => 'Utenti con Licenza',
  'LBL_SUGAR_EDITION' => 'Versione Sugar',
  'LBL_SUGAR_VERSION' => 'Versione Sugar',
  'LBL_TYPE' => 'Tipo Istanza',
  'LBL_LICENSE_DURATION' => 'Durata della Licenza',
  'value' => 'Informazioni Aggiuntive',
  'LBL_INTERNAL_RECORD' => 'Record Interno',
  'LBL_LICENSE_OC' => 'Licenza OC',
  'LBL_FIRST_NAME' => 'Nome',
  'LBL_DEMO_DATA' => 'Data Demo',
  'LBL_ACCOUNT_ID' => 'ID Azienda',
  'LBL_ADMIN_PASS' => 'Password Admin',
  'LBL_LICENSE_USER' => 'Utente delle Licenza',
  'LBL_TEMPLATE_ID' => 'ID Modello',
  'LBL_TEMPLATE' => 'Modello',
  'LBL_PARENT' => 'Duplicato di',
  'LBL_DCEACTIONS_SUBPANEL_TITLE' => 'Azioni',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Aziende',
  'LBL_DCETEMPLATES_SUBPANEL_TITLE' => 'Modelli',
  'LBL_CASES_SUBPANEL_TITLE' => 'Reclami',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
  'LBL_USERS_SUBPANEL_TITLE' => 'Utenti',
  'LBL_GET_KEY' => 'Ottieni Chiave',
  'LBL_UPDATE_KEY' => 'Aggiorna Chiave',
  'LBL_DISABLE_KEY' => 'Disabilita Chiave',
  'LBL_ENABLE_KEY' => 'Abilita Chiave',
  'LBL_NODE' => 'Nodo',
  'LBL_LICENSE_START_DATE' => 'Data Inizio Licenza',
  'LBL_LICENSE_EXPIRE_DATE' => 'Data Scadenza Licenza',
  'LNK_NEW_INSTANCE' => 'Crea Istanza',
  'LNK_INSTANCE_LIST' => 'Visualizza Istanze',
  'LNK_UPGRADE' => 'Aggiornamento',
  'LBL_CONFIRM_DELETE' => 'Sei sicuro di voler creare la funzione "Elimina Azione " per questa istanza?',
  'LBL_CONFIRM_DEPLOY' => 'Non ci sono Utenti o Contatti associati a questa istanza. Continuare?',
  'LBL_CONFIRM_USER_DEPLOY' => 'Non ci sono Utenti associati a questa istanza. Continuare?',
  'LBL_CONFIRM_CONTACT_DEPLOY' => 'Non ci sono Contatti associati a questa istanza. Continuare?',
  'LBL_ACTION_QUEUED' => 'Azione in coda',
  'LBL_CLONE' => 'Duplica',
  'LBL_POPULATED_ON_SAVE' => 'Popolamento in salvataggio',
  'LBL_UPDATE_KEY_USER_ID' => 'Aggiorna ID Utente Chiave',
  'LBL_GET_KEY_USER_ID' => 'Ottieni ID Utente Chiave',
  'LBL_GET_KEY_SUCCESS' => 'Chiave ottenuta con successo!',
  'LBL_GET_KEY_FAILURE' => 'Errore durante il processo di conseguimento della Chiave.',
  'LBL_EXTEND_TERM_BY' => 'Prolunga il termine per',
  'LBL_DAYS' => 'giorni',
  'LBL_YEARS' => 'anni',
  'LBL_KEY_DISABLED' => 'Chiave Disabilitata',
  'LBL_DCEUPGRADE_STEP_1_TITLE' => 'Aggiornamento: Step 1',
  'LBL_DCEUPGRADE_STEP_2_TITLE' => 'Aggiornamento: Step 2',
  'LBL_BACK' => 'Indietro',
  'LBL_NEXT' => 'Avanti',
  'LBL_UPGRADE_TO_CLONE' => 'Aggiorna per duplicare',
  'LBL_UPGRADE_OPTIONS' => 'Opzioni Aggiornamento',
  'LBL_CLONE_ON_ERROR' => 'Errore nel duplicato',
  'LBL_DATE_PLANNED' => 'Data Pianificata',
  'ERR_NO_TEMPLATE_AVAILABLE' => 'Nessun modello disponibile',
  'LBL_TO_TEMPLATE' => 'A Modello',
  'LBL_FROM_TEMPLATE' => 'Da Modello',
  'LBL_SELECT_TEMPLATE' => 'Seleziona un modello',
  'LBL_DB_USER' => 'DB Utente',
  'LBL_ADMIN_USER' => 'Utente Amministratore del Sistema',
  'LBL_CLUSTER_ID' => 'ID Cluster',
  'LBL_FROM_COPY_TEMPLATE' => 'Da Copia Modello',
  'LBL_INSTANCE_PATH' => 'Percorso Istanza',
  'LBL_PARENT_ID' => 'Duplicato di ID',
  'LBL_SI_CONFIG_FILE' => 'File config SI',
  'LBL_SUPPORT_USER' => 'Supporto Utenti',
  'ERR_DUPLICATE_NAME' => 'Nome Istanza già esistente.',
  'ERR_CLUSTER_ID_MISSING' => 'id_Cluster è nullo',
  'ERR_NO_TPL_TO_UPGRADE_TO' => 'Nessun modello di aggiornamento.',
  'ERR_BANNED_NAME' => 'Nome Istanza non consentito.',
  'ERR_NEED_UPDATE_OR_GET_KEY' => 'E´ stato cambiato un campo di licenza. E´necessario aggiornare la chiave o ottenere una nuova chiave.',
  'ERR_BANNED_CHARACTER' => 'Questo Nome Istanza non contiene caratteri alfanumerici.',
);


