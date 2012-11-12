<?php
namespace Pmaechler\Workflow\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Workflow\Domain\Model\Customer;

/**
 * Customer controller for the Pmaechler.Workflow package
 *
 * @Flow\Scope("singleton")
 */
class CustomerController extends BaseController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Workflow\Domain\Repository\CustomerRepository
	 */
	protected $customerRepository;

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Workflow\Domain\Repository\TitleRepository
	 */
	protected $titleRepository;

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Workflow\Domain\Repository\QuoteRepository
	 */
	protected $quoteRepository;

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Workflow\Domain\Repository\HistoryRepository
	 */
	protected $historyRepository;

	/**
	 * Shows a list of customers
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('customers', $this->customerRepository->findAll());
	}

	/**
	 * Shows a single customer object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Customer $customer The customer to show
	 * @return void
	 */
	public function showAction(Customer $customer) {
		$this->view->assign('customer', $customer);
	}

	/**
	 * Shows a form for creating a new customer object
	 *
	 * @return void
	 */
	public function newAction() {
		$this->view->assign(
			'titles',
			$this->titleRepository->findAllWithDefault()
		);
		$this->view->assign(
			'quotes',
			$this->quoteRepository->findAllWithDefault()
		);
	}

	/**
	 * Adds the given new customer object to the customer repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Customer $newCustomer A new customer to add
	 * @return void
	 */
	public function createAction(Customer $newCustomer) {
		$newCustomer->setStatus(1);
		$newCustomer->setSecurityHash(
			md5($newCustomer->getFirstname() . $newCustomer->getLastname() . $newCustomer->getCompany() . time())
		);
		$this->customerRepository->add($newCustomer);
		$this->addFlashMessage('Created a new customer.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing customer object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Customer $customer The customer to edit
	 * @return void
	 */
	public function editAction(Customer $customer) {
		$this->view->assign('customer', $customer);
	}

	/**
	 * Updates the given customer object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Customer $customer The customer to update
	 * @return void
	 */
	public function updateAction(Customer $customer) {
		$this->customerRepository->update($customer);
		$this->addFlashMessage('Updated the customer.');
		$this->redirect('index');
	}

	/**
	 * Removes the given customer object from the customer repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Customer $customer The customer to delete
	 * @return void
	 */
	public function deleteAction(Customer $customer) {
		$this->customerRepository->remove($customer);
		$this->addFlashMessage('Deleted a customer.');
		$this->redirect('index');
	}

	/**
	* Returns the history of the current customer
	*
	* @param \Pmaechler\Workflow\Domain\Model\Customer $customer
	*/
	public function getCustomerHistoryAction(\Pmaechler\Workflow\Domain\Model\Customer $customer) {
		$this->view->assign('historyEntries', $customer->getHistoryEntries());
	}

}

?>