<?php
namespace Pmaechler\Workflow\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A User
 *
 * @Flow\Entity
 */
class User {

	/**
	 * The lastname
	 * @var string
	 */
	protected $lastname;

	/**
	 * The firstname
	 * @var string
	 */
	protected $firstname;

	/**
	 * The username
	 * @var string
	 */
	protected $username;

	/**
	 * The password
	 * @var string
	 */
	protected $password;

	/**
	 * The role
	 * @var \Pmaechler\Workflow\Domain\Model\Role
	 * @ORM\ManyToOne(inversedBy="users")
	 */
	protected $role;

	/**
	 * The history entries
	 * @var \Doctrine\Common\Collections\Collection<\Pmaechler\Workflow\Domain\Model\History>
	 * @ORM\OneToMany(mappedBy="user",cascade="persist")
	 */
	protected $historyEntries;


	/**
	 * Get the User's lastname
	 *
	 * @return string The User's lastname
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * Sets this User's lastname
	 *
	 * @param string $lastname The User's lastname
	 * @return void
	 */
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	/**
	 * Get the User's firstname
	 *
	 * @return string The User's firstname
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * Sets this User's firstname
	 *
	 * @param string $firstname The User's firstname
	 * @return void
	 */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}

	/**
	 * Get the User's username
	 *
	 * @return string The User's username
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * Sets this User's username
	 *
	 * @param string $username The User's username
	 * @return void
	 */
	public function setUsername($username) {
		$this->username = $username;
	}

	/**
	 * Get the User's password
	 *
	 * @return string The User's password
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * Sets this User's password
	 *
	 * @param string $password The User's password
	 * @return void
	 */
	public function setPassword($password) {
		$this->password = $password;
	}

	/**
	 * Get the User's role
	 *
	 * @return \Pmaechler\Workflow\Domain\Model\Role The User's role
	 */
	public function getRole() {
		return $this->role;
	}

	/**
	 * Sets this User's role
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Role $role The User's role
	 * @return void
	 */
	public function setRole($role) {
		$this->role = $role;
	}

}
?>