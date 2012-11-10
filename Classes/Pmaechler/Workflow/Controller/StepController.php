<?php
namespace Pmaechler\Workflow\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Workflow\Domain\Model\Step;

/**
 * Step controller for the Pmaechler.Workflow package 
 *
 * @Flow\Scope("singleton")
 */
class StepController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Workflow\Domain\Repository\StepRepository
	 */
	protected $stepRepository;

	/**
	 * Shows a list of steps
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('steps', $this->stepRepository->findAll());
	}

	/**
	 * Shows a single step object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Step $step The step to show
	 * @return void
	 */
	public function showAction(Step $step) {
		$this->view->assign('step', $step);
	}

	/**
	 * Shows a form for creating a new step object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new step object to the step repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Step $newStep A new step to add
	 * @return void
	 */
	public function createAction(Step $newStep) {
		$this->stepRepository->add($newStep);
		$this->addFlashMessage('Created a new step.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing step object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Step $step The step to edit
	 * @return void
	 */
	public function editAction(Step $step) {
		$this->view->assign('step', $step);
	}

	/**
	 * Updates the given step object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Step $step The step to update
	 * @return void
	 */
	public function updateAction(Step $step) {
		$this->stepRepository->update($step);
		$this->addFlashMessage('Updated the step.');
		$this->redirect('index');
	}

	/**
	 * Removes the given step object from the step repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Step $step The step to delete
	 * @return void
	 */
	public function deleteAction(Step $step) {
		$this->stepRepository->remove($step);
		$this->addFlashMessage('Deleted a step.');
		$this->redirect('index');
	}

}

?>