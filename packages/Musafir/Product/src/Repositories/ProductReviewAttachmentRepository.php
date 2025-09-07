<?php

namespace Musafir\Product\Repositories;

use Musafir\Core\Eloquent\Repository;
use Musafir\Product\Contracts\ProductReview;
use Musafir\Product\Contracts\ProductReviewAttachment;

class ProductReviewAttachmentRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return ProductReviewAttachment::class;
    }

    /**
     * Upload.
     */
    public function upload(array $attachments, ProductReview $review): void
    {
        foreach ($attachments as $attachment) {
            $fileType = explode('/', $attachment->getMimeType());

            $this->create([
                'path'      => $attachment->store('review/'.$review->id),
                'review_id' => $review->id,
                'type'      => $fileType[0],
                'mime_type' => $fileType[1],
            ]);
        }
    }
}
