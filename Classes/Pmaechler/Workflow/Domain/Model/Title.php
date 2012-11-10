<?php
namespace Pmaechler\Workflow\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Title
 *
 * @Flow\Entity
 */
class Title {

	/**
	 * The name
	 * @var string
	 */
	protected $name;

	/**
	 * The entries
	 * @var \Doctrine\Common\Collections\Collection<\Pmaechler\Workflow\Domain\Model\Customer>
	 * @ORM\OneToMany(mappedBy="title",cascade="persist")
	 */
	protected $customers;


	/**
	 * Get the Title's name
	 *
	 * @return string The Title's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Title's name
	 *
	 * @param string $name The Title's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
?>