<?php
namespace Pmaechler\Workflow\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Quote
 *
 * @Flow\Entity
 */
class Quote {

	/**
	 * The name
	 * @var string
	 */
	protected $name;

	/**
	 * The price
	 * @var integer
	 */
	protected $price;

	/**
	 * The entries
	 * @var \Doctrine\Common\Collections\Collection<\Pmaechler\Workflow\Domain\Model\Customer>
	 * @ORM\OneToMany(mappedBy="title",cascade="persist")
	 */
	protected $customers;


	/**
	 * Get the Quote's name
	 *
	 * @return string The Quote's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Quote's name
	 *
	 * @param string $name The Quote's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Get the Quote's price
	 *
	 * @return integer The Quote's price
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Sets this Quote's price
	 *
	 * @param integer $price The Quote's price
	 * @return void
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

}
?>