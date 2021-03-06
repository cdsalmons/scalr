<?php
namespace Scalr\Service\Aws\Rds\DataType;

use Scalr\Service\Aws\Rds\RdsListDataType;

/**
 * DBSecurityGroupList
 *
 * @author   Vitaliy Demidov   <vitaliy@scalr.com>
 * @since    22.03.2013
 *
 * @property string    $marker
 *           An optional pagination token provided by a previous request.
 *           If this parameter is specified, the response includes only
 *           records beyond the marker, up to the value specified by MaxRecords
 *
 * @method   string              getMarker() getMarger()     Gets a Marker.
 * @method   DBSecurityGroupList setMarker() setMarker($val) Sets a Marker value.
 */
class DBSecurityGroupList extends RdsListDataType
{

    /**
     * List of the public properties
     * which is managed by magic getter and setters internally.
     *
     * @var  array
     */
    protected $_properties = array('marker');

    /**
     * Constructor
     *
     * @param array|DBSecurityGroupData  $aListData List of DBSecurityGroupData objects
     */
    public function __construct($aListData = null)
    {
        parent::__construct($aListData, array('dBSecurityGroupName'), __NAMESPACE__ . '\\DBSecurityGroupData');
    }

    /**
     * {@inheritdoc}
     * @see Scalr\Service\Aws\DataType.ListDataType::getQueryArray()
     */
    public function getQueryArray($uriParameterName = 'DBSecurityGroups', $member = true)
    {
        return parent::getQueryArray($uriParameterName, $member);
    }
}