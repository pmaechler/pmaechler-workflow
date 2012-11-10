<?php
namespace Pmaechler\Workflow\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Step
 *
 * @Flow\Entity
 */
class Step {

	/**
	 * The name
	 * @var string
	 */
	protected $name;

	/**
	 * The order
	 * @var integer
	 */
	protected $order;

	/**
	 * The step group
	 * @var \Pmaechler\Workflow\Domain\Model\StepGroup
	 * @ORM\ManyToOne(inversedBy="steps")
	 */
	protected $stepGroup;

	/**
	 * The history entries
	 * @var \Doctrine\Common\Collections\Collection<\Pmaechler\Workflow\Domain\Model\History>
	 * @ORM\OneToMany(mappedBy="user",cascade="persist")
	 */
	protected $historyEntries;


	/**
	 * Get the Step's name
	 *
	 * @return string The Step's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Step's name
	 *
	 * @param string $name The Step's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Get the Step's order
	 *
	 * @return integer The Step's order
	 */
	public function getOrder() {
		return $this->order;
	}

	/**
	 * Sets this Step's order
	 *
	 * @param integer $order The Step's order
	 * @return void
	 */
	public function setOrder($order) {
		$this->order = $order;
	}

	/**
	 * Get the Step's step group
	 *
	 * @return \Pmaechler\Workflow\Domain\Model\StepGroup The Step's step group
	 */
	public function getStepGroup() {
		return $this->stepGroup;
	}

	/**
	 * Sets this Step's step group
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\StepGroup $stepGroup The Step's step group
	 * @return void
	 */
	public function setStepGroup($stepGroup) {
		$this->stepGroup = $stepGroup;
	}

}
?>