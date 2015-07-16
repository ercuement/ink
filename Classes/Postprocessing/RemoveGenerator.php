<?php
/**
 * @todo    General file information
 *
 * @author  Tim Lochmüller
 */

namespace FRUIT\Ink\Postprocessing;

/**
 * @todo   General class information
 *
 * @author Tim Lochmüller
 */
class RemoveGenerator implements PostprocessingInterface {

	/**
	 * @param string $content
	 *
	 * @return string
	 */
	public function process($content) {
		return preg_replace('/<meta name="?generator"?.+?>/is', '', $content);
	}
}
