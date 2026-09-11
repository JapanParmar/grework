<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'enquiry_id',
        'name',
        'phone',
        'email',
        'state',
        'message',
        'enquiry_type',
        'items',
        'status',
    ];

    protected $casts = [
        'items' => 'array',
    ];

    /**
     * Convert to the flat array format views expect
     */
    public function toViewArray(): array
    {
        return [
            'id'           => $this->enquiry_id,
            'name'         => $this->name,
            'phone'        => $this->phone,
            'email'        => $this->email,
            'state'        => $this->state ?? '',
            'message'      => $this->message ?? '',
            'enquiry_type' => $this->enquiry_type,
            'items'        => $this->items ?? [],
            'status'       => $this->status,
            'created_at'   => $this->created_at?->format('d M Y, h:i A') ?? '',
        ];
    }
}
