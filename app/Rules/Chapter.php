<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Log;

class Chapter implements Rule
{
    protected $from_date;
    protected $to_date;
    protected $error_message;

    /**
     * Create a new rule instance.
     *
     * @param $from_date
     * @param $to_date
     *
     */
    public function __construct($from_date, $to_date)
    {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
        $this->error_message = '';
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //  'chapter' => [
        //      1 => [
        //              'from_datetime' => '2018-07-02T14:00',
        //              'to_datetime' => '2018-07-02T15:00',
        //              'title' => 'chapter 1',
        //              'description' => 'chapter 1 description',
        //      ],
        //  ]

        $passed = true;

        $chapters = array_values($value);
        sort($chapters);

        foreach ($chapters as $index => $chapter) {
            $key = $index + 1;

            if (strtotime($chapter['from_datetime']) > strtotime($chapter['to_datetime'])) {
                $passed = false;
                $this->error_message .= '在章節#' . $key . '的開始時間需小於結束時間' . "\n";
            }

            if (strtotime($chapter['from_datetime']) < strtotime($this->from_date)) {
                $passed = false;
                $this->error_message .= '在章節#' . $key . '的開始時間需大於' . $this->from_date . "\n";
            }

            $to_day = strtotime('+1 day', strtotime($this->to_date));
            if (strtotime($chapter['to_datetime']) > $to_day) {
                $passed = false;
                $this->error_message .= '在章節#' . $key . '的結束時間需小於' . date('Y-m-d', $to_day) . "\n";
            }

            if (empty($chapter['title'])) {
                $passed = false;
                $this->error_message .= '在章節#' . $key . '的標題不能為空' . "\n";
            }

            if (empty($chapter['description'])) {
                $passed = false;
                $this->error_message .= '在章節#' . $key . '的描述不能為空' . "\n";
            }
        }

        return $passed;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->error_message;
    }
}
