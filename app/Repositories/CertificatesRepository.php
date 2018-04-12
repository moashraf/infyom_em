<?php

namespace App\Repositories;

use App\Models\Certificates;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CertificatesRepository
 * @package App\Repositories
 * @version April 10, 2018, 1:48 pm UTC
 *
 * @method Certificates findWithoutFail($id, $columns = ['*'])
 * @method Certificates find($id, $columns = ['*'])
 * @method Certificates first($columns = ['*'])
*/
class CertificatesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Certificates::class;
    }
}
