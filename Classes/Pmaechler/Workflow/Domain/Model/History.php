<?php
namespace Pmaechler\Workflow\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A History
 *
 * @Flow\Entity
 */
class History {

	/**
	 * The customer
	 * @var \Pmaechler\Workflow\Domain\Model\Customer
	 * @ORM\ManyToOne(inversedBy="historyEntries")
	 */
	protected $customer;

	/**
	 * The user
	 * @var \Pmaechler\Workflow\Domain\Model\User
	 * @ORM\ManyToOne(inversedBy="historyEntries")
	 */
	protected $user;

	/**
	 * The step
	 * @var \Pmaechler\Workflow\Domain\Model\Step
	 * @ORM\ManyToOne(inversedBy="historyEntries")
	 */
	protected $step;

	/**
	 * The timestamp
	 * @var \DateTime
	 */
	protected $timestamp;


	/**
	 * Get the History's customer
	 *
	 * @return \Pmaechler\Workflow\Domain\Model\Customer The History's customer
	 */
	public function getCustomer() {
		return $this->customer;
	}

	/**
	 * Sets this History's customer
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Customer $customer The History's customer
	 * @return void
	 */
	public function setCustomer($customer) {
		$this->customer = $customer;
	}

	/**
	 * Get the History's user
	 *
	 * @return \Pmaechler\Workflow\Domain\Model\User The History's user
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * Sets this History's user
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\User $user The History's user
	 * @return void
	 */
	public function setUser($user) {
		$this->user = $user;
	}

	/**
	 * Get the History's step
	 *
	 * @return \Pmaechler\Workflow\Domain\Model\Step The History's step
	 */
	public function getStep() {
		return $this->step;
	}

	/**
	 * Sets this History's step
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Step $step The History's step
	 * @return void
	 */
	public function setStep($step) {
		$this->step = $step;
	}

	/**
	 * Get the History's timestamp
	 *
	 * @return \DateTime The History's timestamp
	 */
	public function getTimestamp() {
		return $this->timestamp;
	}

	/**
	 * Sets this History's timestamp
	 *
	 * @param \DateTime $timestamp The History's timestamp
	 * @return void
	 */
	public function setTimestamp($timestamp) {
		$this->timestamp = $timestamp;
	}

}
?>