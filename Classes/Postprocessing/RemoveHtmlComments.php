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
class RemoveHtmlComments implements PostprocessingInterface {

	/**
	 * @param string $content
	 *
	 * @return string
	 */
	public function process($content) {
		return preg_replace('/<!--(.*?)-->/s', '', $content);
	}
}
