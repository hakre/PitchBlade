<?php
/**
 * KeyValuePair interface. All classes which represent a form of key-value-pair storage (i.e. session) should
 * implement this.
 *
 * PHP version 5.4
 *
 * @category   PitchBlade
 * @package    Storage
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2012 Pieter Hordijk
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace PitchBlade\Storage;

/**
 * KeyValuePair interface.
 *
 * @category   PitchBlade
 * @package    Storage
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
interface KeyValuePair
{
    /**
     * Sets the value
     *
     * @param string $key   The key in which to store the value
     * @param mixed  $value The value to store
     */
    public function set($key, $value);

    /**
     * Gets a value based on the key
     *
     * @param mixed $key The key of which to retrieve the value
     *
     * @return mixed The value
     * @throws \PitchBlade\Storage\InvalidKeyException When the key is not found
     */
    public function get($key);

    /**
     * Check whether the supplied key is valid
     *
     * @param string $key The key to check
     *
     * @return boolean Whether the supplied key is valid
     */
    public function isKeyValid($key);
}
