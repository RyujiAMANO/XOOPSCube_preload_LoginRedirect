<?php
/**
 *
 * @author Ryuji AMANO
 *
 */
class loginRedirect extends XCube_ActionFilter
{
	function _getRedirectUrl()
	{
		return XOOPS_URL .'/admin.php';
	}
	function preBlockFilter()
	{
		$this->mRoot->mDelegateManager->add("Site.CheckLogin.Success”, array(&$this, ‘loginSuccessRedirect’));

	
	}
	function loginSuccessRedirect(&$xoopsUser)
	{
		$this->mController->executeForward($this->_getRedirectUrl());
	}
}
