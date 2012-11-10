<?php
namespace Pmaechler\Workflow\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Workflow\Domain\Model\Title;

/**
 * Title controller for the Pmaechler.Workflow package 
 *
 * @Flow\Scope("singleton")
 */
class TitleController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Workflow\Domain\Repository\TitleRepository
	 */
	protected $titleRepository;

	/**
	 * Shows a list of titles
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('titles', $this->titleRepository->findAll());
	}

	/**
	 * Shows a single title object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Title $title The title to show
	 * @return void
	 */
	public function showAction(Title $title) {
		$this->view->assign('title', $title);
	}

	/**
	 * Shows a form for creating a new title object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new title object to the title repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Title $newTitle A new title to add
	 * @return void
	 */
	public function createAction(Title $newTitle) {
		$this->titleRepository->add($newTitle);
		$this->addFlashMessage('Created a new title.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing title object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Title $title The title to edit
	 * @return void
	 */
	public function editAction(Title $title) {
		$this->view->assign('title', $title);
	}

	/**
	 * Updates the given title object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Title $title The title to update
	 * @return void
	 */
	public function updateAction(Title $title) {
		$this->titleRepository->update($title);
		$this->addFlashMessage('Updated the title.');
		$this->redirect('index');
	}

	/**
	 * Removes the given title object from the title repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Title $title The title to delete
	 * @return void
	 */
	public function deleteAction(Title $title) {
		$this->titleRepository->remove($title);
		$this->addFlashMessage('Deleted a title.');
		$this->redirect('index');
	}

}

?>