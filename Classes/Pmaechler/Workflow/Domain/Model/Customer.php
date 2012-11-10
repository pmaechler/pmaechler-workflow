<?php
namespace Pmaechler\Workflow\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Customer
 *
 * @Flow\Entity
 */
class Customer {

	/**
	 * The title
	 * @var \Pmaechler\Workflow\Domain\Model\Title
	 */
	protected $title;

	/**
	 * The firstname
	 * @var string
	 */
	protected $firstname;

	/**
	 * The lastname
	 * @var string
	 */
	protected $lastname;

	/**
	 * The company
	 * @var string
	 */
	protected $company;

	/**
	 * The address
	 * @var string
	 */
	protected $address;

	/**
	 * The zip
	 * @var integer
	 */
	protected $zip;

	/**
	 * The city
	 * @var string
	 */
	protected $city;

	/**
	 * The email
	 * @var string
	 */
	protected $email;

	/**
	 * The phone
	 * @var string
	 */
	protected $phone;

	/**
	 * The quote
	 * @var \Pmaechler\Workflow\Domain\Model\Quote
	 */
	protected $quote;

	/**
	 * The domain
	 * @var string
	 */
	protected $domain;

	/**
	 * The ftp username
	 * @var string
	 */
	protected $ftpUsername;

	/**
	 * The ftp password
	 * @var string
	 */
	protected $ftpPassword;

	/**
	 * The plesk username
	 * @var string
	 */
	protected $pleskUsername;

	/**
	 * The plesk password
	 * @var string
	 */
	protected $pleskPassword;

	/**
	 * The status
	 * @var integer
	 */
	protected $status;

	/**
	 * The security hash
	 * @var string
	 */
	protected $securityHash;


	/**
	 * Get the Customer's title
	 *
	 * @return \Pmaechler\Workflow\Domain\Model\Title The Customer's title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets this Customer's title
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Title $title The Customer's title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Get the Customer's firstname
	 *
	 * @return string The Customer's firstname
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * Sets this Customer's firstname
	 *
	 * @param string $firstname The Customer's firstname
	 * @return void
	 */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}

	/**
	 * Get the Customer's lastname
	 *
	 * @return string The Customer's lastname
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * Sets this Customer's lastname
	 *
	 * @param string $lastname The Customer's lastname
	 * @return void
	 */
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	/**
	 * Get the Customer's company
	 *
	 * @return string The Customer's company
	 */
	public function getCompany() {
		return $this->company;
	}

	/**
	 * Sets this Customer's company
	 *
	 * @param string $company The Customer's company
	 * @return void
	 */
	public function setCompany($company) {
		$this->company = $company;
	}

	/**
	 * Get the Customer's address
	 *
	 * @return string The Customer's address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Sets this Customer's address
	 *
	 * @param string $address The Customer's address
	 * @return void
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * Get the Customer's zip
	 *
	 * @return integer The Customer's zip
	 */
	public function getZip() {
		return $this->zip;
	}

	/**
	 * Sets this Customer's zip
	 *
	 * @param integer $zip The Customer's zip
	 * @return void
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}

	/**
	 * Get the Customer's city
	 *
	 * @return string The Customer's city
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * Sets this Customer's city
	 *
	 * @param string $city The Customer's city
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * Get the Customer's email
	 *
	 * @return string The Customer's email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets this Customer's email
	 *
	 * @param string $email The Customer's email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Get the Customer's phone
	 *
	 * @return string The Customer's phone
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Sets this Customer's phone
	 *
	 * @param string $phone The Customer's phone
	 * @return void
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	/**
	 * Get the Customer's quote
	 *
	 * @return \Pmaechler\Workflow\Domain\Model\Quote The Customer's quote
	 */
	public function getQuote() {
		return $this->quote;
	}

	/**
	 * Sets this Customer's quote
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Quote $quote The Customer's quote
	 * @return void
	 */
	public function setQuote($quote) {
		$this->quote = $quote;
	}

	/**
	 * Get the Customer's domain
	 *
	 * @return string The Customer's domain
	 */
	public function getDomain() {
		return $this->domain;
	}

	/**
	 * Sets this Customer's domain
	 *
	 * @param string $domain The Customer's domain
	 * @return void
	 */
	public function setDomain($domain) {
		$this->domain = $domain;
	}

	/**
	 * Get the Customer's ftp username
	 *
	 * @return string The Customer's ftp username
	 */
	public function getFtpUsername() {
		return $this->ftpUsername;
	}

	/**
	 * Sets this Customer's ftp username
	 *
	 * @param string $ftpUsername The Customer's ftp username
	 * @return void
	 */
	public function setFtpUsername($ftpUsername) {
		$this->ftpUsername = $ftpUsername;
	}

	/**
	 * Get the Customer's ftp password
	 *
	 * @return string The Customer's ftp password
	 */
	public function getFtpPassword() {
		return $this->ftpPassword;
	}

	/**
	 * Sets this Customer's ftp password
	 *
	 * @param string $ftpPassword The Customer's ftp password
	 * @return void
	 */
	public function setFtpPassword($ftpPassword) {
		$this->ftpPassword = $ftpPassword;
	}

	/**
	 * Get the Customer's plesk username
	 *
	 * @return string The Customer's plesk username
	 */
	public function getPleskUsername() {
		return $this->pleskUsername;
	}

	/**
	 * Sets this Customer's plesk username
	 *
	 * @param string $pleskUsername The Customer's plesk username
	 * @return void
	 */
	public function setPleskUsername($pleskUsername) {
		$this->pleskUsername = $pleskUsername;
	}

	/**
	 * Get the Customer's plesk password
	 *
	 * @return string The Customer's plesk password
	 */
	public function getPleskPassword() {
		return $this->pleskPassword;
	}

	/**
	 * Sets this Customer's plesk password
	 *
	 * @param string $pleskPassword The Customer's plesk password
	 * @return void
	 */
	public function setPleskPassword($pleskPassword) {
		$this->pleskPassword = $pleskPassword;
	}

	/**
	 * Get the Customer's status
	 *
	 * @return integer The Customer's status
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Sets this Customer's status
	 *
	 * @param integer $status The Customer's status
	 * @return void
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * Get the Customer's security hash
	 *
	 * @return string The Customer's security hash
	 */
	public function getSecurityHash() {
		return $this->securityHash;
	}

	/**
	 * Sets this Customer's security hash
	 *
	 * @param string $securityHash The Customer's security hash
	 * @return void
	 */
	public function setSecurityHash($securityHash) {
		$this->securityHash = $securityHash;
	}

}
?>