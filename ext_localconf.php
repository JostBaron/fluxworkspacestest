<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
// Register this extension as provider for EXT:flux
\FluidTYPO3\Flux\Core::registerProviderExtensionKey($_EXTKEY, 'Content');
