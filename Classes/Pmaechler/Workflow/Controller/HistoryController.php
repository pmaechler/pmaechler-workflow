<?php
namespace Pmaechler\Workflow\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Workflow\Domain\Model\History;

/**
 * History controller for the Pmaechler.Workflow package 
 *
 * @Flow\Scope("singleton")
 */
class HistoryController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Workflow\Domain\Repository\HistoryRepository
	 */
	protected $historyRepository;

	/**
	 * Shows a list of histories
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('histories', $this->historyRepository->findAll());
	}

	/**
	 * Shows a single history object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\History $history The history to show
	 * @return void
	 */
	public function showAction(History $history) {
		$this->view->assign('history', $history);
	}

	/**
	 * Shows a form for creating a new history object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new history object to the history repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\History $newHistory A new history to add
	 * @return void
	 */
	public function createAction(History $newHistory) {
		$this->historyRepository->add($newHistory);
		$this->addFlashMessage('Created a new history.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing history object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\History $history The history to edit
	 * @return void
	 */
	public function editAction(History $history) {
		$this->view->assign('history', $history);
	}

	/**
	 * Updates the given history object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\History $history The history to update
	 * @return void
	 */
	public function updateAction(History $history) {
		$this->historyRepository->update($history);
		$this->addFlashMessage('Updated the history.');
		$this->redirect('index');
	}

	/**
	 * Removes the given history object from the history repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\History $history The history to delete
	 * @return void
	 */
	public function deleteAction(History $history) {
		$this->historyRepository->remove($history);
		$this->addFlashMessage('Deleted a history.');
		$this->redirect('index');
	}

}

?>