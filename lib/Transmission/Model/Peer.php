<?php
namespace Transmission\Model;

/**
 * @author Ramon Kleiss <ramon@cubilon.nl>
 */
class Peer implements ModelInterface
{
    /**
     * @var string
     */
    protected $address;

    /**
     * @var integer
     */
    protected $port;

    /**
     * {@inheritDoc}
     */
    public function getFieldMap()
    {
        return array(
            'address' => 'address',
            'port' => 'port'
        );
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = (string) $address;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param integer $port
     */
    public function setPort($port)
    {
        $this->port = (integer) $port;
    }

    /**
     * @return integer
     */
    public function getPort()
    {
        return $this->port;
    }
}