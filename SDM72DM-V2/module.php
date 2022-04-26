<?php

declare(strict_types=1);

/*
 * @addtogroup bgetech
 * @{
 *
 * @package       BGETech
 * @file          module.php
 * @author        Michael Tröger <micha@nall-chan.net>
 * @copyright     2021 Michael Tröger
 * @license       https://creativecommons.org/licenses/by-nc-sa/4.0/ CC BY-NC-SA 4.0
 * @version       3.30
 *
 */
require_once __DIR__ . '/../libs/BGETechModule.php';  // diverse Klassen

/**
 * SDM72DM-V2 ist die Klasse für die SDM72DM-V2 ModBus Energie-Zähler der Firma B+G E-Tech
 * Erweitert BGETech.
 */
class SDM72DMV2 extends BGETech
{
    const PREFIX = 'SDM72DMV2';

    public static $Variables = [
        ['Phase 1 line to neutral volts', VARIABLETYPE_FLOAT, 'Volt.230', 0x0000, 4, 2, true],
        ['Phase 2 line to neutral volts', VARIABLETYPE_FLOAT, 'Volt.230', 0x0002, 4, 2, true],
        ['Phase 3 line to neutral volts', VARIABLETYPE_FLOAT, 'Volt.230', 0x0004, 4, 2, true],
        ['Phase 1 current', VARIABLETYPE_FLOAT, 'Ampere', 0x0006, 4, 2, true],
	['Phase 2 current', VARIABLETYPE_FLOAT, 'Ampere', 0x0008, 4, 2, true],
        ['Phase 3 current', VARIABLETYPE_FLOAT, 'Ampere', 0x000A, 4, 2, true],
        ['Phase 1 active power', VARIABLETYPE_FLOAT, 'Watt.14490', 0x000C, 4, 2, true],
        ['Phase 2 active power', VARIABLETYPE_FLOAT, 'Watt.14490', 0x000E, 4, 2, true],
	['Phase 3 active power', VARIABLETYPE_FLOAT, 'Watt.14490', 0x0010, 4, 2, true],
        ['Phase 1 apparent power', VARIABLETYPE_FLOAT, 'VA', 0x0012, 4, 2, true],
        ['Phase 2 apparent power', VARIABLETYPE_FLOAT, 'VA', 0x0014, 4, 2, true],
        ['Phase 3 apparent power', VARIABLETYPE_FLOAT, 'VA', 0x0016, 4, 2, true],
        ['Phase 1 reactive power', VARIABLETYPE_FLOAT, 'VaR', 0x0018, 4, 2, true],
        ['Phase 2 reactive power', VARIABLETYPE_FLOAT, 'VaR', 0x001A, 4, 2, true],
        ['Phase 3 reactive power', VARIABLETYPE_FLOAT, 'VaR', 0x001C, 4, 2, true],
        ['Average line to neutral volts', VARIABLETYPE_FLOAT, 'Volt.230', 0x002A, 4, 2, true],
        ['Average line current', VARIABLETYPE_FLOAT, 'Ampere', 0x002E, 4, 2, true],
        ['Sum of line currents', VARIABLETYPE_FLOAT, 'Ampere', 0x0030, 4, 2, true],
	['Total system power', VARIABLETYPE_FLOAT, 'Watt.14490', 0x0034, 4, 2, true],
        ['Total system volt amps', VARIABLETYPE_FLOAT, 'VA', 0x0038, 4, 2, true],
        ['Total system VAr', VARIABLETYPE_FLOAT, 'VaR', 0x003C, 4, 2, true],
        ['Frequency of supply voltages', VARIABLETYPE_FLOAT, 'Hertz.50', 0x0046, 4, 2, true], 
        ['Import active energy', VARIABLETYPE_FLOAT, 'Electricity', 0x0048, 4, 2, true],
        ['Export active energy', VARIABLETYPE_FLOAT, 'Electricity', 0x004A, 4, 2, true],
        ['Line 1 to Line 2 volts', VARIABLETYPE_FLOAT, 'Volt.230', 0x00C8, 4, 2, true],
	['Line 2 to Line 3 volts', VARIABLETYPE_FLOAT, 'Volt.230', 0x00CA, 4, 2, true],
	['Line 3 to Line 1 volts', VARIABLETYPE_FLOAT, 'Volt.230', 0x00CC, 4, 2, true],
	['Average line to line volts', VARIABLETYPE_FLOAT, 'Volt.230', 0x00CE, 4, 2, true],
	['Neutral current', VARIABLETYPE_FLOAT, 'Ampere', 0x00E0, 4, 2, true],
	['Total active energy', VARIABLETYPE_FLOAT, 'Electricity', 0x0156, 4, 2, true],
	['Total reactive energy', VARIABLETYPE_FLOAT, 'kVArh', 0x0158, 4, 2, true],
	['resettable total active energy', VARIABLETYPE_FLOAT, 'Electricity', 0x0180, 4, 2, true],
	['resettable import active energy', VARIABLETYPE_FLOAT, 'Electricity', 0x0184, 4, 2, true],
	['resettable export active energy', VARIABLETYPE_FLOAT, 'Electricity', 0x0186, 4, 2, true],
	['Net kWh (Import - Export)', VARIABLETYPE_FLOAT, 'Electricity', 0x018C, 4, 2, true],
	['Total import active power', VARIABLETYPE_FLOAT, 'Watt.14490', 0x0500, 4, 2, true],
	['Total export active power', VARIABLETYPE_FLOAT, 'Watt.14490', 0x0502, 4, 2, true]        
    ];
}
