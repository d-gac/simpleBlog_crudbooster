<?php

namespace App\Traits;

trait FullSoft
{
    public static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            $model->updated_by = CRUDBooster::myId() ?? null;
        });

        static::creating(function ($model) {
            $model->updated_by = CRUDBooster::myId() ?? null;
            $model->created_by = CRUDBooster::myId() ?? null;
        });

        static::deleting(function ($model) {
            $model->deleted_by = CRUDBooster::myId() ?? null;
            $model->save();
        });
    }
}
