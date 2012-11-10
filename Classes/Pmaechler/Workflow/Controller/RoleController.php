<?php
namespace Pmaechler\Workflow\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Workflow\Domain\Model\Role;

/**
 * Role controller for the Pmaechler.Workflow package
 *
 * @Flow\Scope("singleton")
 */
class RoleController extends BaseController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Workflow\Domain\Repository\RoleRepository
	 */
	protected $roleRepository;

	/**
	 * Shows a list of roles
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('roles', $this->roleRepository->findAll());
	}

	/**
	 * Shows a single role object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Role $role The role to show
	 * @return void
	 */
	public function showAction(Role $role) {
		$this->view->assign('role', $role);
	}

	/**
	 * Shows a form for creating a new role object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new role object to the role repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Role $newRole A new role to add
	 * @return void
	 */
	public function createAction(Role $newRole) {
		$this->roleRepository->add($newRole);
		$this->addFlashMessage('Created a new role.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing role object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Role $role The role to edit
	 * @return void
	 */
	public function editAction(Role $role) {
		$this->view->assign('role', $role);
	}

	/**
	 * Updates the given role object
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Role $role The role to update
	 * @return void
	 */
	public function updateAction(Role $role) {
		$this->roleRepository->update($role);
		$this->addFlashMessage('Updated the role.');
		$this->redirect('index');
	}

	/**
	 * Removes the given role object from the role repository
	 *
	 * @param \Pmaechler\Workflow\Domain\Model\Role $role The role to delete
	 * @return void
	 */
	public function deleteAction(Role $role) {
		$this->roleRepository->remove($role);
		$this->addFlashMessage('Deleted a role.');
		$this->redirect('index');
	}

}

?>