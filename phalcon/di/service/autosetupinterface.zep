namespace Phalcon\Di\Service;

/**
 * Automatically setup an instance if it implements this interface.
 */
interface AutosetupInterface
{
	public function autosetup(bool disable = false);
}
