<?php
namespace Pmaechler\Workflow\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Email text
 *
 * @Flow\Entity
 */
class EmailText {

	/**
	 * The subject
	 * @var string
	 */
	protected $subject;

	/**
	 * The body
	 * @var text
	 */
	protected $body;

	/**
	 * The status
	 * @var integer
	 */
	protected $status;


	/**
	 * Get the Email text's subject
	 *
	 * @return string The Email text's subject
	 */
	public function getSubject() {
		return $this->subject;
	}

	/**
	 * Sets this Email text's subject
	 *
	 * @param string $subject The Email text's subject
	 * @return void
	 */
	public function setSubject($subject) {
		$this->subject = $subject;
	}

	/**
	 * Get the Email text's body
	 *
	 * @return text The Email text's body
	 */
	public function getBody() {
		return $this->body;
	}

	/**
	 * Sets this Email text's body
	 *
	 * @param text $body The Email text's body
	 * @return void
	 */
	public function setBody($body) {
		$this->body = $body;
	}

	/**
	 * Get the Email text's status
	 *
	 * @return integer The Email text's status
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Sets this Email text's status
	 *
	 * @param integer $status The Email text's status
	 * @return void
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

}
?>