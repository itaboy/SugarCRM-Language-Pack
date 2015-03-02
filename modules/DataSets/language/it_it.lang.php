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
  'LBL_EDIT_LAYOUT' => 'Modifica Layout',
  'LBL_PRESPACE_X' => 'Pre-Space Side:',
  'LBL_MODULE_NAME' => 'Formato Dati',
  'LBL_MODULE_TITLE' => 'Formato Dati: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Formato Dati',
  'LBL_LIST_FORM_TITLE' => 'Elenco Formato Dati',
  'LBL_LIST_NAME' => 'Nome Formato Dati',
  'LBL_LIST_QUERY_NAME' => 'Nome Query',
  'LBL_LIST_OUTPUT_DEFAULT' => 'Output Predefinito',
  'LBL_LIST_LIST_ORDER_Y' => 'Ordine Y',
  'LBL_LIST_LIST_ORDER_X' => 'Ordine X',
  'LBL_LIST_VISIBLE' => 'Visibile?',
  'LBL_LIST_EXPORTABLE' => 'Esportabile?',
  'LBL_LIST_HEADER' => 'Vedi Intestazione?',
  'LBL_NAME' => 'Nome Formato Dati:',
  'LBL_DESCRIPTION' => 'Descrizione:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_PARENT_DATASET' => 'Formato Dati Padre:',
  'LBL_QUERY_NAME' => 'Nome Query:',
  'LBL_OUTPUT_DEFAULT' => 'Tipo Output Prefefinito:',
  'LBL_LIST_ORDER_Y' => 'Slot ordine asse X:',
  'LBL_LIST_ORDER_X' => 'Slot ordine asse X:',
  'LBL_HEADER' => 'Mostra Intestazione:',
  'LBL_EXPORTABLE' => 'Esportabile (Solo File CSV):',
  'LBL_VISIBLE' => 'Formato Dati Visibile:',
  'LBL_TABLE_WIDTH' => 'Dimensione Tabella %:',
  'LBL_FONT_SIZE' => 'Dimensione Font:',
  'LBL_REPORT_NAME' => 'Nome Report:',
  'LBL_PRESPACE_Y' => 'Associa con il Formato Dati precedente :',
  'LBL_TABLE_WIDTH_TYPE' => 'Tipo Dimensione Tabella:',
  'LBL_BODY_TEXT_COLOR' => 'Colore Testo:',
  'LBL_HEADER_TEXT_COLOR' => 'Colore Testata:',
  'LBL_HEADER_BACK_COLOR' => 'Colore Sfondo Intestazione:',
  'LBL_BODY_BACK_COLOR' => 'Colore Sfondo del Corpo:',
  'LBL_USE_PREV_HEADER' => 'Raggruppa con l´intestazione precedente:',
  'LBL_CHILD_NAME' => 'Query Sub/Figlio:',
  'LBL_CUSTOM_LAYOUT' => 'Layout Personalizzato:',
  'LNK_LIST_REPORTMAKER' => 'Elenco Report Enterprise',
  'LNK_NEW_REPORTMAKER' => 'Nuovo Report',
  'LNK_LIST_DATASET' => 'Elenco Formato Dati',
  'LNK_NEW_DATASET' => 'Nuovo Formato Dati',
  'LNK_NEW_CUSTOMQUERY' => 'Nuova Query Personalizzata',
  'LNK_CUSTOMQUERIES' => 'Query Personalizzate',
  'LNK_NEW_QUERYBUILDER' => 'Crea Query',
  'LNK_QUERYBUILDER' => 'Costruttore Query',
  'LBL_ALL_REPORTS' => 'Tutti i Report',
  'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record?',
  'ERR_DELETE_RECORD' => 'Per eliminare il prodotto deve essere specificato il numero del record.',
  'LBL_LAYOUT_TYPE' => 'Tipo Layout:',
  'LBL_LAYOUT_PARENT_VALUE' => 'Valore Predefinito:',
  'LBL_LAYOUT_DISPLAY_TYPE' => 'Visualizza Tipo:',
  'LBL_LAYOUT_LIST_ORDER_X' => 'Elenco Ordine X:',
  'LBL_LAYOUT_LIST_ORDER_Z' => 'Elenco Ordine Z:',
  'LBL_MODIFY_HEAD' => 'Modifica Attributi Testata:',
  'LBL_MODIFY_BODY' => 'Modifica Attributi Corpo:',
  'LBL_BG_COLOR' => 'Colore Sfondo:',
  'LBL_WRAP' => 'Testo Wrap:',
  'LBL_DISPLAY_TYPE' => 'Visualizza Tipo:',
  'LBL_STYLE' => 'Stile Font:',
  'LBL_DISPLAY_NAME' => 'Visualizza Nome:',
  'LBL_FORMAT_TYPE' => 'Tipo Formato:',
  'LBL_FORMAT' => 'Formato:',
  'LBL_CELL_SIZE' => 'Grandezza Cella:',
  'LBL_HIDE_COLUMN' => 'Nascondi Colonna nel Report:',
  'LBL_FINISHED_BUTTON' => 'Finito',
  'CONFIRM_LAYOUT_DISABLE' => 'Disabilitando il layout personalizzato saranno cancellate tutte le proprietà sui layout personalizzati esistenti.',
  'LBL_LEFT' => 'Sinistra',
  'LBL_RIGHT' => 'Destra',
);

