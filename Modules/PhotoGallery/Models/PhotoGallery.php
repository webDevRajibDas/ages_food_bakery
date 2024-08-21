<?php

namespace Modules\PhotoGallery\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhotoGallery extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'photogalleries';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\PhotoGallery\database\factories\PhotoGalleryFactory::new();
    }

    public function getImageUrlAttribute()
    {
        return asset($this->image);
    }
}
