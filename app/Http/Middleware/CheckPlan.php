<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class CheckPlan
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        // Als de gebruiker geen actief abonnement heeft, wordt hij doorgestuurd
        if (! $user || ! $user->subscribed('default')) {
            return redirect()->route('pricing')->with('error', 'Je hebt een actief abonnement nodig om deze pagina te bekijken.');
        }
        return $next($request);
    }
}
