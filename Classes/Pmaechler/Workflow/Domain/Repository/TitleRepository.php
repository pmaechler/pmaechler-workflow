<?php
namespace Pmaechler\Workflow\Domain\Repository;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Workflow".    *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

/**
 * A repository for Titles
 *
 * @Flow\Scope("singleton")
 */
class TitleRepository extends \TYPO3\Flow\Persistence\Repository {

	/**
	 * Returns an array with all titles and a default
	 * value.
	 *
	 */
	public function findAllWithDefault() {
		$allTitles = $this->findAll();

		$arrAllTitles = array();
		$arrAllTitles[0] = 'Please select ...';
		foreach ($allTitles as $title) {
			$titleIdentifier = $this->persistenceManager->getIdentifierByObject($title);
			$arrAllTitles[$titleIdentifier] = $title->getName();
		}

		return $arrAllTitles;
	}

}
?>