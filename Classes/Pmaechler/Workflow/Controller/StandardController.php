<?php
namespace Pmaechler\Workflow\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;

/**
 * Customer controller for the Pmaechler.Workflow package
 *
 * @Flow\Scope("singleton")
 */
class StandardController extends ActionController {
	/**
	 * Index action
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('categories', $this->categoryRepository->findAll());
	}
}
?>
