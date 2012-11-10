<?php
namespace Pmaechler\Workflow\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Step group
 *
 * @Flow\Entity
 */
class StepGroup {

	/**
	 * The name
	 * @var string
	 */
	protected $name;

	/**
	 * The entries
	 * @var \Doctrine\Common\Collections\Collection<\Pmaechler\Workflow\Domain\Model\Step>
	 * @ORM\OneToMany(mappedBy="stepGroup",cascade="persist")
	 */
	protected $steps;


	/**
	 * Get the Step group's name
	 *
	 * @return string The Step group's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Step group's name
	 *
	 * @param string $name The Step group's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
?>