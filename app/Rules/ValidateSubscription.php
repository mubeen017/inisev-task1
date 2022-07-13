<?php

namespace App\Rules;

use App\Models\Subscription;
use Illuminate\Contracts\Validation\Rule;

class ValidateSubscription implements Rule
{
    private $websiteId;
    private $userId;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($websiteId, $userId)
    {

        $this->websiteId = $websiteId;
        $this->userId = $userId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return !Subscription::validateSubscription($this->websiteId, $this->userId);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Already Subscribed to this website.';
    }
}
