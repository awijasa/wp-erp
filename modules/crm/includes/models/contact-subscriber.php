<?php
namespace WeDevs\ERP\CRM\Models;

use WeDevs\ERP\Framework\Model;

/**
 * Class Dependents
 *
 * @package WeDevs\ERP\HRM\Models
 */
class ContactSubscriber extends Model {
    protected $table = 'erp_crm_contact_subscriber';

    protected $fillable = [ 'user_id', 'group_id', 'status' ];

    public $timestamps = true;


}