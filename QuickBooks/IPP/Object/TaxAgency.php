<?php

QuickBooks_Loader::load('/QuickBooks/IPP/Object.php');

class QuickBooks_IPP_Object_TaxAgency extends QuickBooks_IPP_Object
{
	public function add($Context, $realmID, $Object)
	{
		return parent::_add($Context, $realmID, QuickBooks_IPP_IDS::RESOURCE_TAXAGENCY, $Object);
	}

	public function update($Context, $realmID, $IDType, $Object)
	{
		return parent::_update($Context, $realmID, QuickBooks_IPP_IDS::RESOURCE_TAXAGENCY, $Object, $IDType);
	}

	public function query($Context, $realm, $query)
	{
		return parent::_query($Context, $realm, $query);
	}

	public function delete($Context, $realmID, $IDType)
	{
		return parent::_delete($Context, $realmID, QuickBooks_IPP_IDS::RESOURCE_TAXAGENCY, $IDType);
	}

	public function void($Context, $realmID, $IDType)
	{
		return parent::_void($Context, $realmID, QuickBooks_IPP_IDS::RESOURCE_TAXAGENCY, $IDType);
	}

	public function pdf($Context, $realmID, $IDType)
	{
		return parent::_pdf($Context, $realmID, QuickBooks_IPP_IDS::RESOURCE_TAXAGENCY, $IDType);
	}
	
}
