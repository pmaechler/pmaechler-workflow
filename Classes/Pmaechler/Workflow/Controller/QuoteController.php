<?php
namespace Pmaechler\Workflow\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Workflow\Domain\Model\Quote;

/**
 * Quote controller for the Pmaechler.Workflow package
 *
 * @Flow\Scope("singleton")
 */
class QuoteController extends BaseController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Workflow\Domain\Repository\QuoteRepository
	 */
	protected $quoteRepository;

	/**
	 * Shows a list of quotes
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('quotes', $this->quoteRepository->findAll());
	}

	/**
	 * Shows a single quote object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Quote $quote The quote to show
	 * @return void
	 */
	public function showAction(Quote $quote) {
		$this->view->assign('quote', $quote);
	}

	/**
	 * Shows a form for creating a new quote object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new quote object to the quote repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Quote $newQuote A new quote to add
	 * @return void
	 */
	public function createAction(Quote $newQuote) {
		$this->quoteRepository->add($newQuote);
		$this->addFlashMessage('Created a new quote.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing quote object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Quote $quote The quote to edit
	 * @return void
	 */
	public function editAction(Quote $quote) {
		$this->view->assign('quote', $quote);
	}

	/**
	 * Updates the given quote object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Quote $quote The quote to update
	 * @return void
	 */
	public function updateAction(Quote $quote) {
		$this->quoteRepository->update($quote);
		$this->addFlashMessage('Updated the quote.');
		$this->redirect('index');
	}

	/**
	 * Removes the given quote object from the quote repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Quote $quote The quote to delete
	 * @return void
	 */
	public function deleteAction(Quote $quote) {
		$this->quoteRepository->remove($quote);
		$this->addFlashMessage('Deleted a quote.');
		$this->redirect('index');
	}

}

?>