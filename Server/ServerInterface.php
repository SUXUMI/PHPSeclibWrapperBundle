<?php

namespace Dedipanel\PHPSeclibWrapperBundle\Server;

/**
 * @author Albin Kerouanton
 * @license http://opensource.org/licenses/MIT
 * @version 1.0
 */
interface ServerInterface
{
    /**
     * Gets the server IP from $ip (if set) or from $host (resolved)
     * 
     * @throws \Dedipanel\PHPSeclibWrapperBundle\Server\Exception\UnresolvedHostnameException
     * @throws \Dedipanel\PHPSeclibWrapperBundle\Server\Exception\EmptyServerInfosException
     *
     * @return string
     */
    public function getServerIP();

    /**
     * Sets the port
     *
     * @param integer $port SSH Port
     *
     * @return \Dedipanel\PHPSeclibWrapperBundle\Server\ServerInterface
     */
    public function setPort($port);

     /**
      * Gets the port
      *
      * @return integer
      */
     public function getPort();

      /**
       * Sets the SSH username
       *
       * @param string $username Username
       *
       * @return \Dedipanel\PHPSeclibWrapperBundle\Server\ServerInterface
       */
      public function setUsername($username);

      /**
       * Gets the SSH username
       *
       * @return string
       */
      public function getUsername();

      /**
       * Sets the user home dir
       *
       * @param string $home Absolute home dir path
       *
       * @return \Dedipanel\PHPSeclibWrapperBundle\Server\ServerInterface
       */
      public function setHome($home);

      /**
       * Gets the user home dir (absolute path)
       *
       * @return string
       */
      public function getHome();

      /**
       * Sets the SSH user password
       *
       * @param string $password User password
       *
       * @return \Dedipanel\PHPSeclibWrapperBundle\Server\ServerInterface
       */
      public function setPassword($password);

      /**
       * Gets the user password
       *
       * @return string
       */
      public function getPassword();

      /**
       * Sets the private key for SSH authentication
       *
       * @param \Crypt_RSA|string|null $privateKey Private key used for ssh/sftp connections
       * @return ServerInterface
       */
      public function setPrivateKey($privateKey);

      /**
       * Gets the private key
       *
       * @return \Crypt_RSA
       */
      public function getPrivateKey();

    /**
     * Sets the private key name used in the store
     *
     * @param string|null $privateKeyName
     * @return ServerInterface
     */
    public function setPrivateKeyName($privateKeyName = null);

    /**
     * Gets the private key name in the store
     *
     * @return string
     */
    public function getPrivateKeyName();

      /**
       * Gets the server string representation
       */
      public function __toString();
}
