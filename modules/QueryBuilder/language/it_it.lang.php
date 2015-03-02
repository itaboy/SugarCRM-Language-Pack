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
  'LBL_ADD_COLUMN_BUTTON_KEY' => 'C',
  'LBL_ADD_GROUPBY_BUTTON_KEY' => 'G',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_DETAILS_BUTTON_KEY' => 'D',
  'LBL_EDIT_BUTTON_KEY' => 'N',
  'LBL_RUN_BUTTON_KEY' => 'R',
  'LBL_MODULE_NAME' => 'Costruttore Query',
  'LBL_MODULE_TITLE' => 'Costruttore Query: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Costruttore Query',
  'LBL_LIST_FORM_TITLE' => 'Elenco Costruttore Query',
  'LBL_NEW_FORM_TITLE' => 'Crea Elemento',
  'LBL_PRODUCT' => 'Prodotto:',
  'LBL_RELATED_PRODUCTS' => 'Prodotto Collegato',
  'LBL_LIST_NAME' => 'Nome',
  'LBL_LIST_QUERY_TYPE' => 'Tipo',
  'LBL_LIST_BASE_MODULE' => 'Modulo Principale',
  'LBL_LIST_QUERY_LOCKED' => 'Bloccato?',
  'LBL_NAME' => 'Nome Costruttore Query:',
  'LBL_DESCRIPTION' => 'Descrizione:',
  'LBL_QUERY_TYPE' => 'Tipo Query :',
  'LBL_QUERY_LOCKED' => 'Query Bloccata:',
  'LBL_BASE_MODULE' => 'Modulo Principale:',
  'LNK_LIST_REPORTMAKER' => 'Elenco Report',
  'LNK_NEW_REPORTMAKER' => 'Crea Nuovo Report',
  'LNK_LIST_DATASET' => 'Elenco Data Set',
  'LNK_NEW_DATASET' => 'Crea Data Set',
  'LNK_NEW_CUSTOMQUERY' => 'Crea Query Personalizzata',
  'LNK_CUSTOMQUERIES' => 'Query Personalizzate',
  'LNK_NEW_QUERYBUILDER' => 'Crea Query',
  'LNK_QUERYBUILDER' => 'Costruttore Query',
  'LBL_ALL_REPORTS' => 'Tutti i Reports',
  'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record?',
  'ERR_DELETE_RECORD' => 'Per eliminare il prodotto deve essere specificato il numero del record.',
  'LBL_ADD_COLUMN _BUTTON_TITLE' => 'Aggiungi [Alt+C]',
  'LBL_ADD_COLUMN_BUTTON_LABEL' => 'Aggiungi Colonna',
  'LBL_ADD_GROUPBY_BUTTON_LABEL' => 'Aggiungi Raggruppamento',
  'LBL_ADD_GROUPBY _BUTTON_TITLE' => 'Aggiungi [Alt+G]',
  'LBL_NEW_BUTTON_TITLE' => 'Aggiungi [Alt+N]',
  'LBL_NEW_BUTTON_LABEL' => 'Crea nuovo',
  'LBL_DETAILS_BUTTON_TITLE' => 'Dettagli Report [Alt+D]',
  'LBL_DETAILS_BUTTON_LABEL' => 'Dettagli Report',
  'LBL_EDIT_BUTTON_TITLE' => 'Modifica Report[Alt+E]',
  'LBL_EDIT_BUTTON_LABEL' => 'Modifica Report',
  'LBL_RUN_BUTTON_TITLE' => 'Esegui Report [Alt+R]',
  'LBL_RUN_BUTTON_LABEL' => 'Esegui Report',
  'LBL_COLUMN_DISPLAY_SWITCH' => 'Sleziona un Tipo Colonna:',
  'LBL_COLUMN_NAME' => 'Nome Colonna:',
  'LBL_COLUMN_MODULE' => 'Modulo Colonna:',
  'LBL_GROUPBY_MODULE' => 'Raggruppa per Modulo:',
  'LBL_GROUPBY_FIELD' => 'Raggruppa per Campo:',
  'LBL_GROUPBY_CALC_MODULE' => 'Modulo Calcolo:',
  'LBL_GROUPBY_CALC_FIELD' => 'Campo Calcolo:',
  'LBL_GROUPBY_CALC_TYPE' => 'Tipo di Calcolo:',
  'LBL_GROUPBY_CALC' => 'Calcolo:',
  'LBL_GROUPBY_TYPE' => 'Tipo Gruppo:',
  'LBL_GROUPBY_AXIS' => 'Raggruppa per Asse:',
  'LBL_GROUPBY_QUALIFIER' => 'Intervallo di Tempo:',
  'LBL_GROUPBY_QUALIFIER_QTY' => 'Quantità Gruppo:',
  'LBL_GROUPBY_QUALIFIER_START' => 'Posizione Tempo di Partenza:',
  'LBL_CALC_NAME' => 'Nome Calcolo:',
  'LBL_CALC_TYPE' => 'Tipo Calcolo:',
  'LBL_FINISHED_BUTTON_TITLE' => 'Terminato',
  'LBL_FINISHED_BUTTON_LABEL' => 'Terminato',
  'LBL_LEFT_FIELD' => 'Campo a Sinistra:',
  'LBL_LEFT_MODULE' => 'Modulo a Sinistra:',
  'LBL_OPERATOR' => 'Operatore:',
  'LBL_RIGHT_FIELD' => 'Campo a Destra:',
  'LBL_RIGHT_MODULE' => 'Modulo a Destra:',
  'LBL_CALC_ENCLOSED' => 'Calcolo Eseguito:',
  'LBL_FILTER_TYPE' => 'Tipo Filtro:',
  'LBL_LIST_ORDER' => 'Lista d´Ordine:',
  'LBL_LEFT_TYPE' => 'Tipo Sinistra:',
  'LBL_RIGHT_TYPE' => 'Tipo Destra:',
  'LBL_LEFT_GROUP' => 'Gruppo a Sinistra:',
  'LBL_LEFT_VALUE' => 'Valore a Sinistra:',
  'LBL_RIGHT_GROUP' => 'Gruppo a Destra:',
  'LBL_RIGHT_VALUE' => 'Valore a Destra:',
  'LBL_PARENT_GROUP' => 'Gruppo Padre:',
);


