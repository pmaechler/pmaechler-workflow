<?php
namespace Pmaechler\Workflow\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Role
 *
 * @Flow\Entity
 */
class Role {

	/**
	 * The name
	 * @var string
	 */
	protected $name;


	/**
	 * Get the Role's name
	 *
	 * @return string The Role's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Role's name
	 *
	 * @param string $name The Role's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
?>