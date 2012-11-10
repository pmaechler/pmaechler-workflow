<?php
namespace Pmaechler\Workflow\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Workflow\Domain\Model\StepGroup;

/**
 * StepGroup controller for the Pmaechler.Workflow package 
 *
 * @Flow\Scope("singleton")
 */
class StepGroupController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Workflow\Domain\Repository\StepGroupRepository
	 */
	protected $stepGroupRepository;

	/**
	 * Shows a list of step groups
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('stepGroups', $this->stepGroupRepository->findAll());
	}

	/**
	 * Shows a single step group object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\StepGroup $stepGroup The step group to show
	 * @return void
	 */
	public function showAction(StepGroup $stepGroup) {
		$this->view->assign('stepGroup', $stepGroup);
	}

	/**
	 * Shows a form for creating a new step group object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new step group object to the step group repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\StepGroup $newStepGroup A new step group to add
	 * @return void
	 */
	public function createAction(StepGroup $newStepGroup) {
		$this->stepGroupRepository->add($newStepGroup);
		$this->addFlashMessage('Created a new step group.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing step group object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\StepGroup $stepGroup The step group to edit
	 * @return void
	 */
	public function editAction(StepGroup $stepGroup) {
		$this->view->assign('stepGroup', $stepGroup);
	}

	/**
	 * Updates the given step group object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\StepGroup $stepGroup The step group to update
	 * @return void
	 */
	public function updateAction(StepGroup $stepGroup) {
		$this->stepGroupRepository->update($stepGroup);
		$this->addFlashMessage('Updated the step group.');
		$this->redirect('index');
	}

	/**
	 * Removes the given step group object from the step group repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\StepGroup $stepGroup The step group to delete
	 * @return void
	 */
	public function deleteAction(StepGroup $stepGroup) {
		$this->stepGroupRepository->remove($stepGroup);
		$this->addFlashMessage('Deleted a step group.');
		$this->redirect('index');
	}

}

?>