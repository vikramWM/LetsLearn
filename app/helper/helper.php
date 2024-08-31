
<?php

use App\Models\Course;

if (!function_exists('topicName')) {
    /**
     * Get a list of courses.
     *
     * @param int $limit
     * @return \Illuminate\Support\Collection
     */
    function topicName()
    {
        return Course::orderBy('created_at', 'desc')->get();
    }
}