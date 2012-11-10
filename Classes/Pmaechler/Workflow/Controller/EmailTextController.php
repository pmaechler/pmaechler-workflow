<?php
namespace Pmaechler\Workflow\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Workflow\Domain\Model\EmailText;

/**
 * EmailText controller for the Pmaechler.Workflow package 
 *
 * @Flow\Scope("singleton")
 */
class EmailTextController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Workflow\Domain\Repository\EmailTextRepository
	 */
	protected $emailTextRepository;

	/**
	 * Shows a list of email texts
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('emailTexts', $this->emailTextRepository->findAll());
	}

	/**
	 * Shows a single email text object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\EmailText $emailText The email text to show
	 * @return void
	 */
	public function showAction(EmailText $emailText) {
		$this->view->assign('emailText', $emailText);
	}

	/**
	 * Shows a form for creating a new email text object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new email text object to the email text repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\EmailText $newEmailText A new email text to add
	 * @return void
	 */
	public function createAction(EmailText $newEmailText) {
		$this->emailTextRepository->add($newEmailText);
		$this->addFlashMessage('Created a new email text.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing email text object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\EmailText $emailText The email text to edit
	 * @return void
	 */
	public function editAction(EmailText $emailText) {
		$this->view->assign('emailText', $emailText);
	}

	/**
	 * Updates the given email text object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\EmailText $emailText The email text to update
	 * @return void
	 */
	public function updateAction(EmailText $emailText) {
		$this->emailTextRepository->update($emailText);
		$this->addFlashMessage('Updated the email text.');
		$this->redirect('index');
	}

	/**
	 * Removes the given email text object from the email text repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\EmailText $emailText The email text to delete
	 * @return void
	 */
	public function deleteAction(EmailText $emailText) {
		$this->emailTextRepository->remove($emailText);
		$this->addFlashMessage('Deleted a email text.');
		$this->redirect('index');
	}

}

?>