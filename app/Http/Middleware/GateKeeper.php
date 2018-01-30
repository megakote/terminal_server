<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Terminal;

class GateKeeper
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  \Closure $next
   *
   * @return mixed
   */
  public function handle ($request, Closure $next)
  {
    \Debugbar::disable();
    $terminal = Terminal::where(['token' => $request->token])->first();
    if (!$terminal) {
      return response()->json(['error' => 'Ключ терминала не верен']);
    }

    $terminal->update(['ping' => Carbon::now()->format('Y-M-d H:i:s')]);
    $request->merge(['terminal' => $terminal]);
    return $next($request);
  }
}