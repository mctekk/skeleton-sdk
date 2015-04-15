<?php namespace Skeleton\SDK\Common\Supplier;

use Skeleton\SDK\Common\Client;

/**
 * Common interface for all provicers
 */
interface ISupplier
{
	/**
	 * Create a resource
	 * 
	 * @param object|array $provider New provider to create
	 * @return boolean State of the transaction
	 */
	public function create($provider);

	/**
	 * Get all the resources
	 *
	 * @return string json
	 */
	public function read();

	/**
	 * Update a resouce
	 * 
	 * @param object|array $provider Resource to update
	 * @return boolean State of the transaction
	 */	
	public function update($provider);

	/**
	 * Delete a resource
	 * 
	 * @param int $id Id of the resource to remove
	 * @return boolean State of the transaction
	 */	
	public function delete($id);

	/**
	 * Get the resource by id
	 * 
	 * @param string $id Identifier
	 * @return string json
	 */
	public function getById($id);		
}