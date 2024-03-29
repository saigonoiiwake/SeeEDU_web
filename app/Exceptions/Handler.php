<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Stripe\Error as Stripe;
use Session;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
         'Symfony\Component\HttpKernel\Exception\HttpException'
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
      if (app()->bound('sentry') && $this->shouldReport($exception)) {
      app('sentry')->captureException($exception);
      }

      parent::report($exception);
      
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {

      if ($exception instanceof Stripe\RateLimit)
      {
          Session::flash('info','付款系統忙碌中，請稍後再試');
          return redirect()->back();
      }

      if ($exception instanceof Stripe\Api ||
          $exception instanceof Stripe\ApiConnection ||
          $exception instanceof Stripe\Authentication ||
          $exception instanceof Stripe\InvalidRequest ||
          $exception instanceof Stripe\Card ||
          $exception instanceof Stripe\Base)
      {
          Session::flash('info',$exception->getMessage());
          return redirect()->back();
      }

        return parent::render($request, $exception);
    }
}
