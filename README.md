 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 

 ********************************************************************************
 * Traduzione italiana a cura di Opensymbol è Copyright (C) Opensymbol Srl - ITALY.
 * This file is entirely created by Opensymbol Srl.
 * All Rights Reserved.
 * Contributor(s): Opensymbol Srl - www.opensymbol.it - Sugar Silver Partner..
 ********************************************************************************

ALCUNE AVVERTENZE SPECIALI SULLA RELEASE Sugar_it_IT_CE_PRO_ENT_5.0.0b - 14.03.2008

1. FONDAMENTALE: sembra che alcuni file di cache siano particolarmente persistenti
come ad esempio /cache/modules/Administration/language/ : non c'è verso di
eliminarli tramite gli strumenti standard di amministrazione.
Consiglio di ELIMINARE l&acute;intera cartella /cache/modules dopo aver caricato il
language pack (solo per prudenza salvatela da qualche parte)

2. Per chi ha modificato valori di dropdown sulla precedente versione (es. 4.5.1)
Da verificare a mano che i file contenuti in /custom/include/language siano
allineati, ossia tutti i file di lingua contenuti abbiano la stessa struttura e
le stesse informazioni caricate (al netto della differenza di lingua).

3. ELIMINATO un bug su Sugar che impedisce la modifica dei dropdown in lingue 
diverse dall&acute;inglese. Questo secondo i nostri test sistema anche gli altri language
pack (es. Francese).

4. Esistono delle aree non ancora tradotte, come gli help in linea a alcuni pulsanti
ci scusiamo e vi preghiamo di segnalare eventuali anomalie su 
http://www.sugarforge.org/forum/?group_id=249



CHANGELOG

Changelog da versione 5.0.0_GAd a versione 5.0.0b - 14.03.2008
1. Introdotta soluzione al problema dello Studio (dropdown in lingua)
2. Migliorati altri termini


Changelog da versione 5.0.0_GAc a versione 5.0.0_GAd - 24.12.2007
1. Raggiunto un livello di traduzione superiore al 90%
2. Migliorate alcune traduzioni errate (area CE / Pro / Ent)
3. Completata l&acute; area amministrazione (ricordatevi di cancellare il file in cache!!)
4. Tradotto il calendarietto java
5. Risolto errore in aggiunta condizioni in workflow
6. Sistemata area forecast
7. Sistemata area campagne
8. sostiuite le voci "Lista" con voci "Elenco"
9. Sistemate tutte le lettere accentate (à, è, ...)


ROADMAP

Miglioramento traduzione ... lavori in corso !