<?php
/***************************************************************
 *  Copyright notice
 *
 *  Copyright (c) 2009, AOE media GmbH <dev@aoemedia.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

require_once t3lib_extMgm::extPath('l10nmgr') . 'domain/translation/class.tx_l10nmgr_domain_translation_element.php';

/**
 * Collection that holds tx_l10nmgr_domain_translation_element
 *
 * class.tx_l10nmgr_domain_translation_elementCollection.php
 *
 * @author Michael Klapper <klapper@aoemedia.de>
 * @copyright Copyright (c) 2009, AOE media GmbH <dev@aoemedia.de>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version $Id$
 * @date $Date$
 * @since 24.04.2009 - 14:08:39
 * @package TYPO3
 * @subpackage extensionkey
 * @access public
 */
class tx_l10nmgr_domain_translation_elementCollection extends ArrayObject {

	/**
	 * @access public
	 * @throws tx_mvc_exception_argumentOutOfRange
	 * @author Michael Klapper <michael.klapper@aoemedia.de>
	 * @return tx_l10nmgr_domain_translation_element
	 */
	public function offsetGet($index) {

		if (! parent::offsetExists($index)) {
			throw new tx_mvc_exception_argumentOutOfRange('Index "' . var_export($index, true) . '" for tx_l10nmgr_domain_translation_element are not available');
		}

		return parent::offsetGet($index);
	}

	/**
	 *
	 * @param mixed $index
	 * @param tx_l10nmgr_domain_translation_element $Element
	 * @throws InvalidArgumentException
	 * @author Michael Klapper <michael.klapper@aoemedia.de>
	 * @return void
	 */
	public function offsetSet($index, $Element) {

		if (! $Element instanceof tx_l10nmgr_domain_translation_element ) {
			throw new InvalidArgumentException('Wrong parameter type given, "tx_l10nmgr_domain_translation_element" expected!');
		}

		parent::offsetSet($index, $Element);
	}

	/**
	 *
	 * @param tx_l10nmgr_domain_translation_element $Element
	 * @throws InvalidArgumentException
	 * @author Michael Klapper <michael.klapper@aoemedia.de>
	 * @return void
	 */
	public function append($Element) {

		if (! $Element instanceof tx_l10nmgr_domain_translation_element ) {
			throw new InvalidArgumentException('Wrong parameter type given, "tx_l10nmgr_domain_translation_element" expected!');
		}

		parent::append($Element);
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/l10nmgr/domain/translation/class.tx_l10nmgr_domain_translation_elementCollection.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/l10nmgr/domain/translation/class.tx_l10nmgr_domain_translation_elementCollection.php']);
}

?>