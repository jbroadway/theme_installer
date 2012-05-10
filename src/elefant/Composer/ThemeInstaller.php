<?php

namespace elefant\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ThemeInstaller extends LibraryInstaller {
	/**
	 * {@inheritDoc}
	 */
	public function getInstallPath (PackageInterface $package) {
		$prefix = substr ($package->getPrettyName (), 0, 14);
		if ('elefant/theme-' !== $prefix) {
			throw new \InvalidArgumentException (
				'Unable to install theme, Elefant themes should always start their package name with "elefant/theme-"'
			);
		}
		
		return 'layouts/' . substr ($package->getPrettyName (), 14);
	}

	/**
	 * {@inheritDoc}
	 */
	public function supports ($packageType) {
		return (bool) ('elefant-theme' === $packageType);
	}
}

?>